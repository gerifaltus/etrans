<?php
/* @var $this ComplexController */
/* @var $model Complex */

$this->breadcrumbs=array(
	'Complexes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Complex', 'url'=>array('index')),
	array('label'=>'Create Complex', 'url'=>array('create')),
	array('label'=>'Update Complex', 'url'=>array('update', 'id'=>$model->idcomplex)),
	array('label'=>'Delete Complex', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcomplex),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Complex', 'url'=>array('admin')),
);
?>

<h1>View Complex #<?php echo $model->idcomplex; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcomplex',
		'name',
		'name_short',
		'date_created',
		'iduser',
	),
)); ?>
