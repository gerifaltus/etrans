<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproduct')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idproduct), array('view', 'id'=>$data->idproduct)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime')); ?>:</b>
	<?php echo CHtml::encode($data->datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idclient')); ?>:</b>
	<?php echo CHtml::encode($data->idclient); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item')); ?>:</b>
	<?php echo CHtml::encode($data->item); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcategory')); ?>:</b>
	<?php echo CHtml::encode($data->idcategory); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('presentation')); ?>:</b>
	<?php echo CHtml::encode($data->presentation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pu')); ?>:</b>
	<?php echo CHtml::encode($data->pu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pxc')); ?>:</b>
	<?php echo CHtml::encode($data->pxc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expiration')); ?>:</b>
	<?php echo CHtml::encode($data->expiration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('heigth')); ?>:</b>
	<?php echo CHtml::encode($data->heigth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('depth')); ?>:</b>
	<?php echo CHtml::encode($data->depth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('width')); ?>:</b>
	<?php echo CHtml::encode($data->width); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stowmax')); ?>:</b>
	<?php echo CHtml::encode($data->stowmax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('heigthpallet')); ?>:</b>
	<?php echo CHtml::encode($data->heigthpallet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weightpallet')); ?>:</b>
	<?php echo CHtml::encode($data->weightpallet); ?>
	<br />

	*/ ?>

</div>