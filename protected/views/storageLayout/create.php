<?php
/* @var $this StorageLayoutController */
/* @var $model StorageLayout */

$this->breadcrumbs=array(
	'Storage Layouts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StorageLayout', 'url'=>array('index')),
	array('label'=>'Manage StorageLayout', 'url'=>array('admin')),
);
?>

<h1>Create StorageLayout</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>