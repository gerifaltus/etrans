<?php
/* @var $this ClientsController */
/* @var $model Clients */

$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->idclient=>array('view','id'=>$model->idclient),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clients', 'url'=>array('index')),
	array('label'=>'Create Clients', 'url'=>array('create')),
	array('label'=>'View Clients', 'url'=>array('view', 'id'=>$model->idclient)),
	array('label'=>'Manage Clients', 'url'=>array('admin')),
);
?>

<h1>Update Clients <?php echo $model->idclient; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>