<?php
/* @var $this StorageLayoutController */
/* @var $model StorageLayout */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'storage-layout-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idstorage_units'); ?>
		<?php echo $form->textField($model,'idstorage_units'); ?>
		<?php echo $form->error($model,'idstorage_units'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'long_unit'); ?>
		<?php echo $form->textField($model,'long_unit',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'long_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'width_unit'); ?>
		<?php echo $form->textField($model,'width_unit',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'width_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty_plataform'); ?>
		<?php echo $form->textField($model,'qty_plataform'); ?>
		<?php echo $form->error($model,'qty_plataform'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty_unity'); ?>
		<?php echo $form->textField($model,'qty_unity'); ?>
		<?php echo $form->error($model,'qty_unity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parentid'); ?>
		<?php echo $form->textField($model,'parentid'); ?>
		<?php echo $form->error($model,'parentid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'divlong'); ?>
		<?php echo $form->textField($model,'divlong'); ?>
		<?php echo $form->error($model,'divlong'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'divwidth'); ?>
		<?php echo $form->textField($model,'divwidth'); ?>
		<?php echo $form->error($model,'divwidth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idstore'); ?>
		<?php echo $form->textField($model,'idstore'); ?>
		<?php echo $form->error($model,'idstore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_rack'); ?>
		<?php echo $form->textField($model,'type_rack',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'type_rack'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'width_rack'); ?>
		<?php echo $form->textField($model,'width_rack',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'width_rack'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'long_rack'); ?>
		<?php echo $form->textField($model,'long_rack',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'long_rack'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deep_rack'); ?>
		<?php echo $form->textField($model,'deep_rack',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'deep_rack'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->