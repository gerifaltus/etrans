<?php
/* @var $this StoreController */
/* @var $data Store */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idstore')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idstore), array('view', 'id'=>$data->idstore)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namestore')); ?>:</b>
	<?php echo CHtml::encode($data->namestore); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hrsbday')); ?>:</b>
	<?php echo CHtml::encode($data->hrsbday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inihrsbday')); ?>:</b>
	<?php echo CHtml::encode($data->inihrsbday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('finhrsbday')); ?>:</b>
	<?php echo CHtml::encode($data->finhrsbday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtypestore')); ?>:</b>
	<?php echo CHtml::encode($data->idtypestore); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idcomplex')); ?>:</b>
	<?php echo CHtml::encode($data->idcomplex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colony')); ?>:</b>
	<?php echo CHtml::encode($data->colony); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cp')); ?>:</b>
	<?php echo CHtml::encode($data->cp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcountry')); ?>:</b>
	<?php echo CHtml::encode($data->idcountry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idstate')); ?>:</b>
	<?php echo CHtml::encode($data->idstate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcity')); ?>:</b>
	<?php echo CHtml::encode($data->idcity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimensions')); ?>:</b>
	<?php echo CHtml::encode($data->dimensions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel')); ?>:</b>
	<?php echo CHtml::encode($data->tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	*/ ?>

</div>