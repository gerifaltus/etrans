<?php

class StorageLayoutController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'create', 'delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new StorageLayout;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['StorageLayout']))
		{
			$model->attributes=$_POST['StorageLayout'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idstorage_layout));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['StorageLayout']))
		{
			$model->attributes=$_POST['StorageLayout'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idstorage_layout));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
            //mostrar la lista de las zonas, areas y unidades en acordeon
            $storageUnit = new StorageUnits;
            
            $msu = $storageUnit->findAll(array('order'=>'idtype_units'));
            
            $modelStorageUnit = $this->extractDataUnits($msu);
            
            $dropDownZona = $this->extractUnits($modelStorageUnit, '1');
            
            $dropDownArea = $this->extractUnits($modelStorageUnit, '2');
            
            $valUnits = array('zona' =>1, 'area'=>2, 'rack'=>3, 'bloque'=>4);
            
            $this->render('index',array(
                'modelStorageUnit' => $modelStorageUnit,
                'valunits' => $valUnits,
                'dropDownZona' => $dropDownZona[0],
                'dropDownArea' => $dropDownArea[1],
            ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new StorageLayout('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['StorageLayout']))
			$model->attributes=$_GET['StorageLayout'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return StorageLayout the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=StorageLayout::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param StorageLayout $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='storage-layout-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function extractDataUnits($dataprovider)
        {

            $arrayUnidades = array();
            
            foreach($dataprovider as $row)
            {
                $arrayUnidades[$row->idtype_units][] = $row->attributes;
                
            }
            
            return $arrayUnidades;
            
        }
        
        public function extractUnits($arrayDataprovider, $units)
        {
            $arrayZona =array();
            $arrayArea =array();
            $arrayTmp = array();
            
            foreach($arrayDataprovider as $key => $val)
            {
                if($key == $units)
                {
                    foreach($val as $row)
                    {
                        $arrayZona[$row['idstorage_units']] = $row['name_units'];
                    }
                    
                }
                
                if($key == $units)
                {
                    foreach($val as $row)
                    {
                        $arrayArea[$row['idstorage_units']] = $row['name_units'];
                    }
                    
                }
            }
            
            $arrayTmp[] = $arrayZona;
            $arrayTmp[] = $arrayArea;
            
            return $arrayTmp;
        }
}
