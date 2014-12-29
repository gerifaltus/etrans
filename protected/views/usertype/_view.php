<?php
/* @var $this UsertypeController */
/* @var $data Usertype */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusertype')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idusertype), array('view', 'id'=>$data->idusertype)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usertypedsc')); ?>:</b>
	<?php echo CHtml::encode($data->usertypedsc); ?>
	<br />


</div>