<?php

class ProductController extends Controller {
    
    
    //private $_imagePath = realpath( Yii::app()->basePath.'/images' );
    //private $_imagePath = realpath(Yii::app()->getBasePath())."/images"; 
    private $_uploadedFile = "";

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

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
                'actions' => array('index', 'view', 'create', 'update', 'delete'),
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
        $model = new Product;
        
        $bd_img = $model->image;
        
        //extrae los clientes
        $clientes = Clients::model()->findAll(array('select' => 'idclient, name_client'));
        $categoria = ProductCategory::model()->findAll(array('select' => 'idcategory, name_cat'));

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Product'])) {
                        
            $model->attributes = $_POST['Product'];
            
            $this->_uploadedFile = CUploadedFile::getInstance($model,'image');
            
            if ($model->save()){
                
                if($this->_uploadedFile !== null){
                
                    $imagePath = realpath(Yii::app()->basePath) . "/images";

                    $imgExt = $this->_uploadedFile->extensionName;

                    $img = str_pad($model->primaryKey, 15, "0", STR_PAD_LEFT).".".$imgExt;

                    if ($this->_uploadedFile->saveAs($imagePath . '/' . $img)) {

                        $model->updateByPk($model->primaryKey, array('image' => $img));
                    }
                }

                $this->redirect(Yii::app()->user->returnUrl = array('Product/index'));
            }
        }

        $this->renderPartial('_form', array(
            'model' => $model,
            'clientes' => $clientes,
            'categoria' => $categoria
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($idproduct) {
        
        $model = $this->loadModel($idproduct);
        
        $bd_img = $model->image;

        //extrae los clientes
        $clientes = Clients::model()->findAll(array('select' => 'idclient, name_client'));
        $categoria = ProductCategory::model()->findAll(array('select' => 'idcategory, name_cat'));
        
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Product'])) {
            
            $model->attributes = $_POST['Product'];
            
            $this->_uploadedFile = CUploadedFile::getInstance($model,'image');
            
            $img = $this->setNameImage($model, $bd_img);
            
            if ($model->save())
            {
                $imagePath = realpath(Yii::app()->basePath) . "/images";

                if($this->_uploadedFile !== null){
                
                    if ($this->_uploadedFile->saveAs($imagePath . '/' . $img)) {
                        
                        //eliminar img anterior
                        if(($bd_img !== $model->image) && file_exists($imagePath . '/' . $bd_img)){
                            unlink($imagePath . '/' . $bd_img);
                            //$this->redirect(Yii::app()->user->returnUrl = array('Product/index'));
                        }
                        
                    }
                }

                $this->redirect(Yii::app()->user->returnUrl = array('Product/index'));
            }
        }

        $this->renderPartial('_form', array(
            'model' => $model,
            'clientes' => $clientes,
            'categoria' => $categoria
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($idproduct) {
        $this->loadModel($idproduct)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax'])){
            //$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
            $this->redirect(Yii::app()->user->returnUrl = array('product/index'));
        }
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        //$dataProvider=new CActiveDataProvider('Product');
        $model = new Product;

        $dataProvider = $model->getAllProducts();

        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Product('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Product']))
            $model->attributes = $_GET['Product'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Product the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Product::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Product $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'product-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    
    public function setNameImage($model, $bd_img){
        
        if($this->_uploadedFile === null){  //no hay imagen en post
            
            $model->image = $bd_img;
            
        }else{

            //get extension image upload
            $imgExtension = $this->_uploadedFile->extensionName;
            
            if($model->isNewRecord){
                
                $nameImage = str_pad($model->primaryKey, 15, "0", STR_PAD_LEFT);
                
            }else{
                
                $nameImage = $model->idproduct;
                
            }
            
            $nameImage = $nameImage .'.'.$imgExtension;
            
            $model->image = $nameImage;
            
            return $nameImage;
        }
    }

}
