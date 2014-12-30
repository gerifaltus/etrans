<?php

class UserController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    //public $layout='//layouts/column1';
    private $_message = "";
    private $_fromName = "";
    private $_subject = "";
    private $_email = "";

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('ResetPwd', 'RenderChangePwd'),
                'users' => array('*'),
            ),
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('@'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new User;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->iduser));
        }

        $this->render('create', array(
            'model' => $model,
            //de cada modelo extraigo los datos id y nombre para mostralos en un select en la vista create -> _form de model User
            'company' => Company::model()->findAll(array('select' => 'idcompany, businessname')),
            'usertype' => Usertype::model()->findAll(array('select' => 'idusertype, usertypedsc')),
            'profile' => Profile::model()->findAll(array('select' => 'idprofile, profiledsc')),
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->iduser));
        }

        $this->render('update', array(
            'model' => $model,
            'company' => Company::model()->findAll(array('select' => 'idcompany, businessname')),
            'usertype' => Usertype::model()->findAll(array('select' => 'idusertype, usertypedsc')),
            'profile' => Profile::model()->findAll(array('select' => 'idprofile, profiledsc')),
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lista todos los usuarios con el respectivo nombre de la empresa a la que pertenece utilizando 
     */
    public function actionIndex() {
        //extrae los datos del usuario con compañia
        $dataProvider = User::model()->getUserList();
        //$output = array('aaData'=>extraeDatosDataProvider($dataProvider) ) ;
        //extrae los datos de

        $this->render('index', array(
            'dataProvider' => $dataProvider->getData(),
            //viene desde this->actionCreate, se coloca en este metodo (actionIndex) por que se requiere que el form para crear usuario aparazca en el index
            //y se muestre en el boxmodel
            'model' => User::model(),
            //de cada modelo extraigo los datos id y nombre para mostralos en un select en la vista create -> _form de model User
            'Rcompany' => Company::model()->findAll(array('select' => 'idcompany, businessname')),
            'usertype' => Usertype::model()->findAll(array('select' => 'idusertype, usertypedsc')),
            'profile' => Profile::model()->findAll(array('select' => 'idprofile, profiledsc')),
        ));
    }

    public function extraeDatosDataProvider($data) {
        $result = array();
        $i = 0;
        foreach ($data as $row) {
            $result[$i]['username'] = $row->username;
            $result[$i]['name'] = $row->name;
            $result[$i]['lastname'] = $row->lastname;
            $result[$i]['email'] = $row->email;
            $result[$i]['active'] = $row->active;
            $result[$i]['businessname'] = $row->businessname;
        }

        return $result;
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new User('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['User']))
            $model->attributes = $_GET['User'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return User the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = User::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param User $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * Realiza el reseteo del password del usuario y envia mail con liga para ingresar nuevo password
     * @param integer username del modelo User
     */
    public function actionResetPwd() {

        $json = array();
        $u = null;

        //buscar en bd para confirmar el usuario y extraer el mail para enviar el correo y resetear el pwd
        if (isset($_POST['email']) && $_POST['email'] !== "") {
            $u = User::model()->getUserPwd($_POST['email']);

            if ($u != null) {

                $u->flag_resetpwd = $this->setHashPwd();
                $u->resetpwd = 1;

                //set contenido del mensaje
                $this->setMessageResetPwd($u, $u->flag_resetpwd, $u->resetpwd);

                //enviar mail
                $mail = $this->enviarMailPwd();

                if ($u->update()) {
                    $mail->send();
                    //actualizar flag_resetpwd ash md5 para el flag que tambien lo contendra la liga que se envia en el mail
                    //actualizar resetpwd a 1 para indicar que el usuario a solicitado el cambio de contraseña
                    
                    $json['sucess'] = true;
                    $json['msg'] = 'Se ha realizado el reseteo del password, también se ha enviado un mail a correo del usuario seleccionado para confirmar la operacion.';
                    //echo json_encode($json);
                } else {
                    
                    $json['error'] = true;
                    $json['msg'] = 'Ups!!! al parecer el reseteo de password no se pudo realizar, int&eacute;ntelo más tarde o pongase en contacto con el administrador del sistema.';
                    //echo json_encode($json);
                }
            } else {
                
                $json['error'] = true;
                $json['msg'] = 'Ups!!! al parecer el correo no se encuentra registrado o es incorrecto, por favor confirma el correo e intentalo de nuevo.';
            }
        } else {
            
            $json['error'] = true;
            $json['msg'] = 'Ups!!! al parecer el correo no se encuentra registrado o es incorrecto, por favor confirma el correo e intentalo de nuevo.';
        }

        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        echo json_encode($json);
    }

    private function enviarMailPwd() {
        $mailer = Yii::createComponent('application.extensions.mailer.EMailer');
        $mailer->Host = 'mail.portoprint.mx';
        $mailer->IsSMTP();
        $mailer->Port = 587;
        $mailer->SMTPSecure = 'tls';
        $mailer->SMTPAuth = true;
        $mailer->Username = "sistema@portoprint.mx";
        $mailer->Password = "portoprint";
        $mailer->From = 'sistema@portoprint.mx';
        $mailer->AddReplyTo('sistema@portoprint.mx');
        $mailer->AddAddress($this->_email);
        $mailer->FromName = $this->_fromName;
        $mailer->CharSet = 'UTF-8';
        $mailer->Subject = $this->_subject;
        $mailer->Body = $this->_message;
        $mailer->IsHTML(true);
        //return $mailer->Send();
        return $mailer;
    }

    /**
     * Setea el mensaje en html a la variable _message
     * @param User $u contiene los datos del usuario a ser mostrados en el mail enviado
     * @param string $hash contiene el hash de confirmacion para cambiar el pass de la cuenta
     * @param numeric $reset contiene 1 si se ha solicitado el reset del pwd, por default en la bd es 0
     */
    private function setMessageResetPwd($u, $hash, $reset) {
        $this->_message = Messages::getMessageResetPwd($u, $hash, $reset);
        $this->_fromName = 'PortoPrint InTrans';
        $this->_subject = 'Solicitud de cambio de password en su cuenta de InTrans';
        $this->_email = $u->email;
    }

    private function setHashPwd() {
        return md5(time());
    }

}
