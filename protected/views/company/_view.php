<?php
/* @var $this CompanyController */
/* @var $data Company */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcompany')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcompany), array('view', 'id'=>$data->idcompany)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adress')); ?>:</b>
	<?php echo CHtml::encode($data->adress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rfc')); ?>:</b>
	<?php echo CHtml::encode($data->rfc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('businessname')); ?>:</b>
	<?php echo CHtml::encode($data->businessname); ?>
	<br />


</div>