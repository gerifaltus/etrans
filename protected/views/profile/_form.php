<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'profiledsc'); ?>
		<?php echo $form->textField($model,'profiledsc',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'profiledsc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usertypeid'); ?>
		<?php echo $form->textField($model,'usertypeid',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'usertypeid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->textField($model,'active',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idspecialpermission'); ?>
		<?php echo $form->textField($model,'idspecialpermission'); ?>
		<?php echo $form->error($model,'idspecialpermission'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->