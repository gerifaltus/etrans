<?php
/* @var $this ProductCategoryController */
/* @var $data ProductCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcategory')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcategory), array('view', 'id'=>$data->idcategory)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_cat')); ?>:</b>
	<?php echo CHtml::encode($data->name_cat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>