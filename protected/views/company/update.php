<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->idcompany=>array('view','id'=>$model->idcompany),
	'Update',
);

$this->menu=array(
	array('label'=>'List Company', 'url'=>array('index')),
	array('label'=>'Create Company', 'url'=>array('create')),
	array('label'=>'View Company', 'url'=>array('view', 'id'=>$model->idcompany)),
	array('label'=>'Manage Company', 'url'=>array('admin')),
);
?>

<h1>Update Company <?php echo $model->idcompany; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>