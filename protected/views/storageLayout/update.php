<?php
/* @var $this StorageLayoutController */
/* @var $model StorageLayout */

$this->breadcrumbs=array(
	'Storage Layouts'=>array('index'),
	$model->idstorage_layout=>array('view','id'=>$model->idstorage_layout),
	'Update',
);

$this->menu=array(
	array('label'=>'List StorageLayout', 'url'=>array('index')),
	array('label'=>'Create StorageLayout', 'url'=>array('create')),
	array('label'=>'View StorageLayout', 'url'=>array('view', 'id'=>$model->idstorage_layout)),
	array('label'=>'Manage StorageLayout', 'url'=>array('admin')),
);
?>

<h1>Update StorageLayout <?php echo $model->idstorage_layout; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>