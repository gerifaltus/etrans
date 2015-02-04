<?php
/* @var $this StoreController */
/* @var $model Store */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idstore'); ?>
		<?php echo $form->textField($model,'idstore'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namestore'); ?>
		<?php echo $form->textField($model,'namestore',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hrsbday'); ?>
		<?php echo $form->textField($model,'hrsbday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inihrsbday'); ?>
		<?php echo $form->textField($model,'inihrsbday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'finhrsbday'); ?>
		<?php echo $form->textField($model,'finhrsbday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idtypestore'); ?>
		<?php echo $form->textField($model,'idtypestore'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcomplex'); ?>
		<?php echo $form->textField($model,'idcomplex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'colony'); ?>
		<?php echo $form->textField($model,'colony',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cp'); ?>
		<?php echo $form->textField($model,'cp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcountry'); ?>
		<?php echo $form->textField($model,'idcountry'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idstate'); ?>
		<?php echo $form->textField($model,'idstate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcity'); ?>
		<?php echo $form->textField($model,'idcity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dimensions'); ?>
		<?php echo $form->textField($model,'dimensions',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->