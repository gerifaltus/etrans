<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->idproduct=>array('view','id'=>$model->idproduct),
	'Update',
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'View Product', 'url'=>array('view', 'id'=>$model->idproduct)),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>Update Product <?php echo $model->idproduct; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>