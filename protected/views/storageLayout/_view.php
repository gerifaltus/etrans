<?php
/* @var $this StorageLayoutController */
/* @var $data StorageLayout */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idstorage_layout')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idstorage_layout), array('view', 'id'=>$data->idstorage_layout)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idstorage_units')); ?>:</b>
	<?php echo CHtml::encode($data->idstorage_units); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('long_unit')); ?>:</b>
	<?php echo CHtml::encode($data->long_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('width_unit')); ?>:</b>
	<?php echo CHtml::encode($data->width_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty_plataform')); ?>:</b>
	<?php echo CHtml::encode($data->qty_plataform); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty_unity')); ?>:</b>
	<?php echo CHtml::encode($data->qty_unity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentid')); ?>:</b>
	<?php echo CHtml::encode($data->parentid); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('divlong')); ?>:</b>
	<?php echo CHtml::encode($data->divlong); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('divwidth')); ?>:</b>
	<?php echo CHtml::encode($data->divwidth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idstore')); ?>:</b>
	<?php echo CHtml::encode($data->idstore); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_rack')); ?>:</b>
	<?php echo CHtml::encode($data->type_rack); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('width_rack')); ?>:</b>
	<?php echo CHtml::encode($data->width_rack); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('long_rack')); ?>:</b>
	<?php echo CHtml::encode($data->long_rack); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deep_rack')); ?>:</b>
	<?php echo CHtml::encode($data->deep_rack); ?>
	<br />

	*/ ?>

</div>