<?php
/* @var $this ComplexController */
/* @var $model Complex */

$this->breadcrumbs=array(
	'Complexes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Complex', 'url'=>array('index')),
	array('label'=>'Manage Complex', 'url'=>array('admin')),
);
?>

<h1>Create Complex</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>