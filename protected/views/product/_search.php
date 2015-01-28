<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idproduct'); ?>
		<?php echo $form->textField($model,'idproduct'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datetime'); ?>
		<?php echo $form->textField($model,'datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idclient'); ?>
		<?php echo $form->textField($model,'idclient'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item'); ?>
		<?php echo $form->textField($model,'item',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcategory'); ?>
		<?php echo $form->textField($model,'idcategory'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'presentation'); ?>
		<?php echo $form->textField($model,'presentation',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pu'); ?>
		<?php echo $form->textField($model,'pu',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pxc'); ?>
		<?php echo $form->textField($model,'pxc',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expiration'); ?>
		<?php echo $form->textField($model,'expiration'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'heigth'); ?>
		<?php echo $form->textField($model,'heigth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'depth'); ?>
		<?php echo $form->textField($model,'depth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'width'); ?>
		<?php echo $form->textField($model,'width'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stowmax'); ?>
		<?php echo $form->textField($model,'stowmax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'heigthpallet'); ?>
		<?php echo $form->textField($model,'heigthpallet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weightpallet'); ?>
		<?php echo $form->textField($model,'weightpallet'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->