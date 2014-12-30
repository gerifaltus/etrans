<?php
/* @var $this RequestController */
/* @var $model Request */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idrequest'); ?>
		<?php echo $form->textField($model,'idrequest'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'norequest'); ?>
		<?php echo $form->textField($model,'norequest',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iduser'); ?>
		<?php echo $form->textField($model,'iduser'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purchaseord'); ?>
		<?php echo $form->textField($model,'purchaseord',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datetime'); ?>
		<?php echo $form->textField($model,'datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'storemode'); ?>
		<?php echo $form->textField($model,'storemode'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'boxes'); ?>
		<?php echo $form->textField($model,'boxes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pallets'); ?>
		<?php echo $form->textField($model,'pallets'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'invoice'); ?>
		<?php echo $form->textField($model,'invoice',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cveconfirmation'); ?>
		<?php echo $form->textField($model,'cveconfirmation',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idvehicle'); ?>
		<?php echo $form->textField($model,'idvehicle'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->