<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->idproduct,
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'Update Product', 'url'=>array('update', 'id'=>$model->idproduct)),
	array('label'=>'Delete Product', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idproduct),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>View Product #<?php echo $model->idproduct; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idproduct',
		'datetime',
		'idclient',
		'code',
		'item',
		'idcategory',
		'description',
		'presentation',
		'image',
		'pu',
		'pxc',
		'expiration',
		'heigth',
		'depth',
		'width',
		'weight',
		'stowmax',
		'heigthpallet',
		'weightpallet',
	),
)); ?>
