<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'datetime'); ?>
		<?php echo $form->textField($model,'datetime'); ?>
		<?php echo $form->error($model,'datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idclient'); ?>
		<?php echo $form->textField($model,'idclient'); ?>
		<?php echo $form->error($model,'idclient'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item'); ?>
		<?php echo $form->textField($model,'item',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'item'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcategory'); ?>
		<?php echo $form->textField($model,'idcategory'); ?>
		<?php echo $form->error($model,'idcategory'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'presentation'); ?>
		<?php echo $form->textField($model,'presentation',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'presentation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pu'); ?>
		<?php echo $form->textField($model,'pu',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'pu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pxc'); ?>
		<?php echo $form->textField($model,'pxc',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pxc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expiration'); ?>
		<?php echo $form->textField($model,'expiration'); ?>
		<?php echo $form->error($model,'expiration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'heigth'); ?>
		<?php echo $form->textField($model,'heigth'); ?>
		<?php echo $form->error($model,'heigth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'depth'); ?>
		<?php echo $form->textField($model,'depth'); ?>
		<?php echo $form->error($model,'depth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'width'); ?>
		<?php echo $form->textField($model,'width'); ?>
		<?php echo $form->error($model,'width'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stowmax'); ?>
		<?php echo $form->textField($model,'stowmax'); ?>
		<?php echo $form->error($model,'stowmax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'heigthpallet'); ?>
		<?php echo $form->textField($model,'heigthpallet'); ?>
		<?php echo $form->error($model,'heigthpallet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weightpallet'); ?>
		<?php echo $form->textField($model,'weightpallet'); ?>
		<?php echo $form->error($model,'weightpallet'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->