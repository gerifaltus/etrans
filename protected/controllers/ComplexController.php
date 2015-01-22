<?php

class ComplexController extends Controller {
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    //public $layout='//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            //'postOnly + delete', // we only allow deletion via POST request
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
                'actions' => array('index', 'view', 'create', 'update', 'delete', 'DComplex'),
                'users' => array('@'),
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
        $model = new Complex;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        
        $dataProvider = $model->getAllComplex();
        
        //extrae claves en data provider
        $claves = $this->getClaves($dataProvider);
        
        if (isset($_POST['Complex'])) {
            $model->attributes = $_POST['Complex'];
            if ($model->save()) {
                //$this->redirect(array('view', 'id' => $model->idcomplex));
                $this->redirect(Yii::app()->user->returnUrl = array('complex/index'));
            }else{
                /**
                 * FIX Corregir y enviar un error indicando que no se pudo guardar el complejo.
                 */
                print_r($model->getErrors());
            }
        }
        
        $this->renderPartial('_form', array('model'=>$model, 'claves'=>$claves));
        
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($idcomplex) {
        //echo $idcomplex;
        $model = $this->loadModel($idcomplex);

        // Uncomment the following line if AJAX validation is needed
         //$this->performAjaxValidation($model);

        if (isset($_POST['Complex'])) {
            $model->attributes = $_POST['Complex'];
            if ($model->save())
            {
                //$this->redirect(array('view', 'id' => $model->idcomplex));
                $this->redirect(Yii::app()->user->returnUrl = array('complex/index'));
            }else{
                /**
                 * FIX Corregir y enviar un error indicando que no se pudo guardar el complejo.
                 */
                print_r($model->getErrors());
            }
        }
        
        $this->renderPartial('_form', array('model'=>$model, 'claves'=>''));

    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($idcomplex) {
        if (!Yii::app()->request->isPostRequest) {

            $this->loadModel($idcomplex)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            //if (!isset($_GET['ajax'])) {
                //$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
            //    $this->redirect(Yii::app()->user->returnUrl = array('complex/index'));
            //}
            $this->redirect(array('complex/index'));
            
        }else{
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }
    
    /**
     * Lists all models.
     */
    public function actionIndex() {

        $model = new Complex;

        $dataProvider = $model->getAllComplex();

        //extrae claves en data provider
        //$claves = $this->getClaves($dataProvider);

        $this->render('index', array(
            'dataProvider' => $dataProvider,
            'model' => $model)
        );
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Complex('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Complex'])) {
            $model->attributes = $_GET['Complex'];
        }

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Complex the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Complex::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Complex $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'complex-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * Extrae las claves de un data provider de tabla Complex
     */
    public function getClaves($dataProvider) {
        
        //$dataProvider = $dataProvider->getData();
        $arrClaves = Array();
        
        foreach ($dataProvider as $data => $row) {

            $arrClaves[] = "'".$row->name_short."'";
            //echo $row->name_short;
        }
        
        return $arrClaves;
    }

}
