<?php
/* @var $this ProfileController */
/* @var $data Profile */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idprofile')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idprofile), array('view', 'id'=>$data->idprofile)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profiledsc')); ?>:</b>
	<?php echo CHtml::encode($data->profiledsc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usertypeid')); ?>:</b>
	<?php echo CHtml::encode($data->usertypeid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idspecialpermission')); ?>:</b>
	<?php echo CHtml::encode($data->idspecialpermission); ?>
	<br />


</div>