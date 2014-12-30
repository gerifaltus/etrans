<?php
/* @var $this RequestController */
/* @var $model Request */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'request-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'norequest'); ?>
		<?php echo $form->textField($model,'norequest',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'norequest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iduser'); ?>
		<?php echo $form->textField($model,'iduser'); ?>
		<?php echo $form->error($model,'iduser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchaseord'); ?>
		<?php echo $form->textField($model,'purchaseord',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'purchaseord'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datetime'); ?>
		<?php echo $form->textField($model,'datetime'); ?>
		<?php echo $form->error($model,'datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'storemode'); ?>
		<?php echo $form->textField($model,'storemode'); ?>
		<?php echo $form->error($model,'storemode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'boxes'); ?>
		<?php echo $form->textField($model,'boxes'); ?>
		<?php echo $form->error($model,'boxes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pallets'); ?>
		<?php echo $form->textField($model,'pallets'); ?>
		<?php echo $form->error($model,'pallets'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invoice'); ?>
		<?php echo $form->textField($model,'invoice',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'invoice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cveconfirmation'); ?>
		<?php echo $form->textField($model,'cveconfirmation',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cveconfirmation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idvehicle'); ?>
		<?php echo $form->textField($model,'idvehicle'); ?>
		<?php echo $form->error($model,'idvehicle'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->