<?php

class RequestController extends Controller {
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
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'reasign', 'itinerary', 
                    'ConfirmRequest', 'ListRequest', 'ListConfirmed', 'Receiving', 
                    'newCatalog', 'LayoutWarehouse', 'PrintRequest', 'NewProduct', 'NewComplex', 'ProviderList','newAlmacen', 'Transfer',
                    'PrintOrderTransfer', 'Transport', 'OutOrder', 'Picking', 'PickingSupply', 'PickingPreDistribution',
                    'ListOrderOut', 'StoreProduct','ExistProduct', 'TransferProduct', 'ExistReport', 'MovsReport',
                    'PhysicalInventory', 'CicleCounting', 'InventoryAdjustmentsList', 'InventoryAdjustments'),
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
        $model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Reasigna citas.
     * 
     */
    public function actionReasign() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('reasign');
    }

    /**
     * Reasigna citas.
     * 
     */
    public function actionItinerary() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('itinerary');
    }

    /**
     * Confirmar las citas y realizar el preingreso.
     * 
     */
    public function actionConfirmRequest() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('confirmRequest');
    }

    /**
     * Confirmar las citas y realizar el preingreso.
     * 
     */
    public function actionListRequest() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('listRequest');
    }
    
    
    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionListConfirmed() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('a_listConfirmed');
    }
    
    
    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionReceiving() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('a_receiving');
    }
    

    /**
     * Genera el pdf con la información de la cita lista para imprimir, tambien se envia
     * mail por correo con el mismo PDF
     */
    public function actionPrintRequest() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        /*
        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }
        */
        
        $this->renderPartial('printRequest');
    }



    public function actionNewProduct() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        /*
        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }
        */
        
        $this->render('_a_newProduct');
    }



    public function actionNewComplex() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        /*
        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }
        */
        
        $this->render('a_newComplex');
    }



    public function actionNewAlmacen() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        /*
        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }
        */
        
        $this->render('_a_newAlmacen');
    }
    
    
    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionLayoutWarehouse() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('a_layoutWarehouse2');
    }    

    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionTransfer() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('_a_newTransfer');
    }


    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionPrintOrderTransfer() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->renderPartial('printTransfer');
    }


    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionOutOrder() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('_a_OrderOut');
    }


    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionTransport() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('_a_newTransport');
    }


    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionPicking() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('a_Picking');
    }


    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionPickingSupply() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('_a_PickingSupply');
    }


    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionPickingPreDistribution() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('_a_PickingPreDistribution');
    }


    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionListOrderOut() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('a_ListOrderOut');
    }


    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionStoreProduct() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('a_StoreProduct');
    }


    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionExistProduct() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('a_ExistProduct');
    }



    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionTransferProduct() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('a_TransferProduct');
    }

    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionExistReport() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('a_ExistReport');
    }


    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionMovsReport() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('a_MovsReport');
    }


    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionPhysicalInventory() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('a_physicalInventory');
    }


    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionCicleCounting() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('a_cicleCounting');
    }
    


    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionInventoryAdjustmentsList() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('a_inventoryAdjustmentsList');
    }



    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionInventoryAdjustments() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('a_inventoryAdjustments');
    }




    /**
     * Muestra la lista de pre-ingresos confirmados por recibir.
     * 
     */
    public function actionProviderList() {
        //$model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('a_ProviderList');
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

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idrequest));
        }

        $this->render('update', array(
            'model' => $model,
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
     * Lista la ventana del wizard desde donde se crea la cita.
     */
    public function actionIndex() {
        //$dataProvider=new CActiveDataProvider('Request');
        $this->render('index');
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Request('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Request']))
            $model->attributes = $_GET['Request'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Request the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Request::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Request $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'request-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
