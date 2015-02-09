<?php

class StoreController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
        public $name_complex;

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index', 'create','update', 'delete', 'SelectState', 'SelectCity'),
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
		$model=new Store;

                $complex = Complex::model()->findAll(array('select' => "idcomplex, CONCAT_WS(' - ', name_short, name_complex) AS name_complex"));
                $typestore = TypeStore::model()->findAll(array('select' => 'idtypestore, name_typestore'));
                $country = Country::model()->findAll(array('select'=>'idcountry, name_country'));
                $state = State::model()->findAll(array('select'=>'idstate, name_state', 'condition'=> 'idstate=:id_state', 'params'=>array(':id_state'=>0)));
                $city = City::model()->findAll(array('select'=>'idcity, name_city', 'condition'=> 'idcity=:id_city', 'params'=>array(':id_city'=>0)));
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Store']))
		{
			$model->attributes=$_POST['Store'];
			if($model->save())
				$this->redirect(Yii::app()->user->returnUrl = array('store/index'));
		}

                $this->renderPartial('_form', array(
                    'model'=>$model,
                    'complex' => $complex,
                    'typestore' => $typestore,
                    'country' => $country,
                    'state' => $state,
                    'city' => $city
                        ));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($idstore)
	{
		$model=$this->loadModel($idstore);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                //$selected_array = array('idcomplex' => $model->idcomplex, '');
                
                $complex = Complex::model()->findAll(array('select' => "idcomplex, CONCAT_WS(' - ', name_short, name_complex) AS name_complex"));
                $typestore = TypeStore::model()->findAll(array('select' => 'idtypestore, name_typestore'));
                $country = Country::model()->findAll(array('select'=>'idcountry, name_country'));
                $state = State::model()->findAll(array('select'=>'idstate, name_state', 'condition'=> 'idcountry=:id_country', 'params'=>array(':id_country'=>$model->idcountry)));
                $city = City::model()->findAll(array('select'=>'idcity, name_city', 'condition'=> 'idstate=:id_state', 'params'=>array(':id_state'=>$model->idstate)));
                
		if(isset($_POST['Store']))
		{
			$model->attributes=$_POST['Store'];
			if($model->save())
				//$this->redirect(array('view','id'=>$model->idstore));
                                $this->redirect(Yii::app()->user->returnUrl = array('store/index'));
		}

		/*$this->render('update',array(
			'model'=>$model,
		));*/
                $this->renderPartial('_form', array(
                    'model'=>$model,
                    'complex' => $complex,
                    'typestore' => $typestore,
                    'country' => $country,
                    'state' => $state,
                    'city' => $city
                ));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($idstore)
	{
		$this->loadModel($idstore)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax'])){
                    $this->redirect(Yii::app()->user->returnUrl = array('store/index'));
                }
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
            $model = new Store;

            $dataProvider = $model->getAllStore();

            $this->render('index', array(
                'dataProvider' => $dataProvider,
            ));
        }

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Store('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Store']))
			$model->attributes=$_GET['Store'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Store the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Store::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Store $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
            if(isset($_POST['ajax']) && $_POST['ajax']==='store-form')
            {
                    echo CActiveForm::validate($model);
                    Yii::app()->end();
            }
	}
        
        
        public function actionSelectState()
        {
            $id_country = $_POST['id_country'];
            $data = State::model()->findAll(array('condition'=> 'idcountry=:id_country', 'params'=>array(':id_country'=>$id_country), 'order'=>'name_state'));
            $options1 = CHtml::listData($data,'idstate','name_state');
            $htmlOptions = array('prompt'=>'Seleccione un elemento');
            $options2 = CHtml::listOptions('', $options1, $htmlOptions);
            echo json_encode(array('response'=>$options2));
        }
        
        public function actionSelectCity()
        {
            $id_state = $_POST['id_state'];
            $data = City::model()->findAll(array('condition'=> 'idstate=:id_state', 'params'=>array(':id_state'=>$id_state), 'order'=>'name_city'));
            $options1 = CHtml::listData($data,'idcity','name_city');
            $htmlOptions = array('prompt'=>'Seleccione un elemento');
            $options2 = CHtml::listOptions('', $options1, $htmlOptions);
            echo json_encode(array('response'=>$options2));
        }
}
