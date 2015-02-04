<?php
/* @var $this StoreController */
/* @var $model Store */

$this->breadcrumbs=array(
	'Stores'=>array('index'),
	$model->idstore,
);

$this->menu=array(
	array('label'=>'List Store', 'url'=>array('index')),
	array('label'=>'Create Store', 'url'=>array('create')),
	array('label'=>'Update Store', 'url'=>array('update', 'id'=>$model->idstore)),
	array('label'=>'Delete Store', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idstore),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Store', 'url'=>array('admin')),
);
?>

<h1>View Store #<?php echo $model->idstore; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idstore',
		'namestore',
		'hrsbday',
		'inihrsbday',
		'finhrsbday',
		'status',
		'idtypestore',
		'idcomplex',
		'address',
		'colony',
		'cp',
		'idcountry',
		'idstate',
		'idcity',
		'dimensions',
		'tel',
		'email',
	),
)); ?>
