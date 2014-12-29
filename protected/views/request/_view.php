<?php
/* @var $this RequestController */
/* @var $data Request */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idrequest')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idrequest), array('view', 'id'=>$data->idrequest)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('norequest')); ?>:</b>
	<?php echo CHtml::encode($data->norequest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iduser')); ?>:</b>
	<?php echo CHtml::encode($data->iduser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchaseord')); ?>:</b>
	<?php echo CHtml::encode($data->purchaseord); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime')); ?>:</b>
	<?php echo CHtml::encode($data->datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('storemode')); ?>:</b>
	<?php echo CHtml::encode($data->storemode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('boxes')); ?>:</b>
	<?php echo CHtml::encode($data->boxes); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pallets')); ?>:</b>
	<?php echo CHtml::encode($data->pallets); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoice')); ?>:</b>
	<?php echo CHtml::encode($data->invoice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cveconfirmation')); ?>:</b>
	<?php echo CHtml::encode($data->cveconfirmation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idvehicle')); ?>:</b>
	<?php echo CHtml::encode($data->idvehicle); ?>
	<br />

	*/ ?>

</div>