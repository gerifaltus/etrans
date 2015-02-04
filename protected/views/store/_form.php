<?php
/* @var $this StoreController */
/* @var $model Store */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'id' => 'store-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => false,
        'htmlOptions' => array(
            'class' => 'form-horizontal',
            'role' => 'form'
        )
)); ?>

	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<?php //echo $form->errorSummary($model); ?>

    <div class="col-xs-12 col-sm-6">
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'idcomplex', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->dropDownList($model, 'idcomplex', CHtml::listData($complex, 'idcomplex', 'name_complex'), array('prompt' => 'Seleccione un elemento')); ?>
                </div>
                <?php echo $form->error($model,'idcomplex'); ?>
            </div>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'idtypestore', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->dropDownList($model, 'idtypestore', CHtml::listData($typestore, 'idtypestore', 'name_typestore'), array('prompt' => 'Seleccione un elemento')); ?>
                </div>
                <?php echo $form->error($model,'idtypestore'); ?>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nombre </label>

            <div class="col-sm-9">
                <input id="form-field-1" placeholder="" class="form-control" type="text">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Calle y N&uacute;mero </label>

            <div class="col-sm-9">
                <input id="form-field-1-1" placeholder="" class="form-control" value="" type="text">
            </div>
        </div>
        
        
        
        
    </div>
    
    
    	<div class="row">
		<?php echo $form->labelEx($model,'namestore', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
		<?php echo $form->textField($model,'namestore',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'namestore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hrsbday'); ?>
		<?php echo $form->textField($model,'hrsbday'); ?>
		<?php echo $form->error($model,'hrsbday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inihrsbday'); ?>
		<?php echo $form->textField($model,'inihrsbday'); ?>
		<?php echo $form->error($model,'inihrsbday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'finhrsbday'); ?>
		<?php echo $form->textField($model,'finhrsbday'); ?>
		<?php echo $form->error($model,'finhrsbday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colony'); ?>
		<?php echo $form->textField($model,'colony',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'colony'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cp'); ?>
		<?php echo $form->textField($model,'cp'); ?>
		<?php echo $form->error($model,'cp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcountry'); ?>
		<?php echo $form->textField($model,'idcountry'); ?>
		<?php echo $form->error($model,'idcountry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idstate'); ?>
		<?php echo $form->textField($model,'idstate'); ?>
		<?php echo $form->error($model,'idstate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcity'); ?>
		<?php echo $form->textField($model,'idcity'); ?>
		<?php echo $form->error($model,'idcity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dimensions'); ?>
		<?php echo $form->textField($model,'dimensions',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'dimensions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->