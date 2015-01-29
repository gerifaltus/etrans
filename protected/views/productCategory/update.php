<?php
/* @var $this ProductCategoryController */
/* @var $model ProductCategory */

$this->breadcrumbs=array(
	'Product Categories'=>array('index'),
	$model->idcategory=>array('view','id'=>$model->idcategory),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductCategory', 'url'=>array('index')),
	array('label'=>'Create ProductCategory', 'url'=>array('create')),
	array('label'=>'View ProductCategory', 'url'=>array('view', 'id'=>$model->idcategory)),
	array('label'=>'Manage ProductCategory', 'url'=>array('admin')),
);
?>

<h1>Update ProductCategory <?php echo $model->idcategory; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>