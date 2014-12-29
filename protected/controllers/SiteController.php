<?php

class SiteController extends Controller {

    public $defaultAction = 'login';

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'

        if (Yii::app()->user->getIsGuest()) {
            $this->layout = false;
            $this->render('login');
        } else {
            $this->render('index');
        }
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {

        if (!Yii::app()->user->getIsGuest()) {
            $this->render('index');
            //Yii::app()->end();
        } else {

            $this->layout = false;
            $model = new LoginForm;

            // if it is ajax validation request
            if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }

            // collect user input data
            if (isset($_POST['LoginForm'])) {

                //validar que el flag_resetpwd y resetpwd este en 0
                //$ur = new LoginForm;
                $ur = $model->getResetPwdByUsername($_POST['LoginForm']['username']);

                if ($ur == null) {
                    $json['sucess'] = false;
                    $json['msg'] = 'Error en el Usuario o password, favor de verificar los datos y volver a intentarlo.';
                    $this->render('login', array('model' => $model, 'json' => $json));
                    Yii::app()->end();
                }


                if ($ur->flag_resetpwd == 0 && $ur->resetpwd == 0) {
                    
                    $model->attributes = $_POST['LoginForm'];
                    $model->password = $this->setGenUserPass($ur->username, $_POST['LoginForm']['password']);

                    // validate user input and redirect to the previous page if valid
                    if ($model->validate() && $model->login()) {

                        $this->redirect(Yii::app()->user->returnUrl = array('site/index'));
                    } else {
                        //validar si no existe el usuario que quiere loguearse y mostrar respuesta por json
                        $json['sucess'] = false;
                        $json['msg'] = 'Error en el Usuario o password, favor de verificar los datos y volver a intentarlo - *.';
                        $this->render('login', array('model' => $model, 'json' => $json));
                    }
                } else {
                    $json['sucess'] = false;
                    $json['msg'] = 'Ups!! no se puede ingresar, al parecer se ha solicitado un cambio de password para su cuenta, porfavor de revisa tu correo para mas informaci&oacute;n.';
                    /* header('Cache-Control: no-cache, must-revalidate');
                      header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
                      header('Content-type: application/json');
                      echo json_encode($json);
                     * 
                     */
                    $this->render('login', array('model' => $model, 'json' => $json));
                }
            } else {
                $this->render('login', array('model' => $model));
            }
        }
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(array('login'));
    }

    /**
     * Renderizar la pantalla para que el usuario resetee el pwd
     * 
     */
    public function actionRenderChangePwd() {

        $this->layout = false;
        $renderFormReset = null;


        if (isset($_GET['e']) && isset($_GET['h']) && isset($_GET['rs']) && $_GET['e'] != "" && $_GET['h'] != "" && $_GET['rs'] != "") {

            //consultar en la bd para extraer el hash y comparar
            $model = new LoginForm;

            $ur = $model->getUserResetPwd($_GET['e']);

            if ($ur != null) {

                if ($_GET['h'] == $ur->flag_resetpwd && $_GET['rs'] == $ur->resetpwd && $_GET['e'] == $ur->email) {

                    $renderFormReset = true;
                    $this->render('resetpwd', array('renderFormReset' => $renderFormReset, 'h' => $ur->flag_resetpwd, 'e' => $ur->email, 'rs' => $ur->resetpwd));
                } else {

                    $renderFormReset = false;
                    $this->render('resetpwd', array('renderFormReset' => $renderFormReset));
                }
            } else {
                $renderFormReset = false;
                $this->render('resetpwd', array('renderFormReset' => $renderFormReset));
            }
        }
    }

    
    /**
     * action para cambiar el password
     */
    
    public function actionChangePwd() {

        $json = array();
        $u = null;

        $u = User::model()->getUserPwd($_POST['email']);

        if ($u != null) {

            //buscar en bd para confirmar el usuario, el hash, el mail y el reset
            if (isset($_POST['email']) && $_POST['email'] == $u->email && isset($_POST['hash']) && $_POST['hash'] == $u->flag_resetpwd && isset($_POST['reset']) && $_POST['reset'] == $u->resetpwd) {

                //se comprueba los passwords
                if (!$this->compruebaPwd($_POST['password'], $_POST['password2'])) {

                    $json['sucess'] = false;
                    $json['msg'] = 'Ambos passwords deben coincidir y no deben estar vacios, por favor confirme e intente de nuevo.';
                } else {

                    $u->flag_resetpwd = 0;
                    $u->resetpwd = 0;
                    $u->password = $this->setGenUserPass($u->username, $_POST['password']);

                    if ($u->update()) {

                        $json['sucess'] = true;
                        $json['msg'] = 'El password ha sido cambiado, inice sesión con sus nuevas credenciales. ' . '<a href='.Yii::app()->createAbsoluteUrl('site/login').'>Iniciar sesión</a>';
                    } else {

                        $json['sucess'] = false;
                        $json['msg'] = 'Ups!!! al parecer el reseteo de password no se pudo realizar, int&eacute;ntelo más tarde o pongase en contacto con el administrador del sistema.';
                    }
                }
            } else {

                $json['sucess'] = false;
                $json['msg'] = 'Ups!!! al parecer el correo no se encuentra registrado o es incorrecto, por favor confirma el correo e intentalo de nuevo.';
            }
        } else {

            $json['sucess'] = false;
            $json['msg'] = 'Ups!!! al parecer el correo no se encuentra registrado o es incorrecto, por favor confirma el correo e intentalo de nuevo.';
        }

        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        echo json_encode($json);
    }

    public function compruebaPwd($password1, $password2) {
        return ($password1 === $password2 && $password1 !="" && $password2 != "")? true : false;
    }
    
    public function setGenUserPass($username, $pass)
    {
        return md5($username.$pass);
    }

}
