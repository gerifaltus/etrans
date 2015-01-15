<?php
/* @var $this ComplexController */
/* @var $model Complex */

$this->breadcrumbs=array(
	'Complexes'=>array('index'),
	$model->name=>array('view','id'=>$model->idcomplex),
	'Update',
);

$this->menu=array(
	array('label'=>'List Complex', 'url'=>array('index')),
	array('label'=>'Create Complex', 'url'=>array('create')),
	array('label'=>'View Complex', 'url'=>array('view', 'id'=>$model->idcomplex)),
	array('label'=>'Manage Complex', 'url'=>array('admin')),
);
?>

<h1>Update Complex <?php echo $model->idcomplex; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>