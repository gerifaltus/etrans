<?php
/* @var $this StorageLayoutController */
/* @var $model StorageLayout */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idstorage_layout'); ?>
		<?php echo $form->textField($model,'idstorage_layout'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idstorage_units'); ?>
		<?php echo $form->textField($model,'idstorage_units'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'long_unit'); ?>
		<?php echo $form->textField($model,'long_unit',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'width_unit'); ?>
		<?php echo $form->textField($model,'width_unit',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qty_plataform'); ?>
		<?php echo $form->textField($model,'qty_plataform'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qty_unity'); ?>
		<?php echo $form->textField($model,'qty_unity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parentid'); ?>
		<?php echo $form->textField($model,'parentid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'divlong'); ?>
		<?php echo $form->textField($model,'divlong'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'divwidth'); ?>
		<?php echo $form->textField($model,'divwidth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idstore'); ?>
		<?php echo $form->textField($model,'idstore'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_rack'); ?>
		<?php echo $form->textField($model,'type_rack',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'width_rack'); ?>
		<?php echo $form->textField($model,'width_rack',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'long_rack'); ?>
		<?php echo $form->textField($model,'long_rack',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deep_rack'); ?>
		<?php echo $form->textField($model,'deep_rack',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->