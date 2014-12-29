<?php
/* @var $this UsertypeController */
/* @var $model Usertype */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idusertype'); ?>
		<?php echo $form->textField($model,'idusertype'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usertypedsc'); ?>
		<?php echo $form->textField($model,'usertypedsc',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->