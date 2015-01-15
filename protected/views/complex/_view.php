<?php
/* @var $this ComplexController */
/* @var $data Complex */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcomplex')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcomplex), array('view', 'id'=>$data->idcomplex)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_short')); ?>:</b>
	<?php echo CHtml::encode($data->name_short); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iduser')); ?>:</b>
	<?php echo CHtml::encode($data->iduser); ?>
	<br />


</div>