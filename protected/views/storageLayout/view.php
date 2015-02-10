<?php
/* @var $this StorageLayoutController */
/* @var $model StorageLayout */

$this->breadcrumbs=array(
	'Storage Layouts'=>array('index'),
	$model->idstorage_layout,
);

$this->menu=array(
	array('label'=>'List StorageLayout', 'url'=>array('index')),
	array('label'=>'Create StorageLayout', 'url'=>array('create')),
	array('label'=>'Update StorageLayout', 'url'=>array('update', 'id'=>$model->idstorage_layout)),
	array('label'=>'Delete StorageLayout', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idstorage_layout),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StorageLayout', 'url'=>array('admin')),
);
?>

<h1>View StorageLayout #<?php echo $model->idstorage_layout; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idstorage_layout',
		'idstorage_units',
		'long_unit',
		'width_unit',
		'qty_plataform',
		'qty_unity',
		'parentid',
		'divlong',
		'divwidth',
		'idstore',
		'type_rack',
		'width_rack',
		'long_rack',
		'deep_rack',
	),
)); ?>
