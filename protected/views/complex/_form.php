<?php
/* @var $this ComplexController */
/* @var $model Complex */
/* @var $form CActiveForm */
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'complex-form',
	'enableAjaxValidation'=>false,
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
        'htmlOptions'=>array(
            'class'=>'form-horizontal',
        )
)); ?>

	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<?php //echo $form->errorSummary($model); ?>

	<div class="form-group">
            
		<?php echo $form->labelEx($model,'name', array('class' => 'control-label col-xs-12 col-sm-3 no-padding-right')); ?>
            
            <div class="col-xs-12 col-sm-9">
                <div class="clearfix">    
                    <?php echo $form->textField($model,'name',array('size'=>25,'maxlength'=>15, 'class'=>'col-xs-12 col-sm-6')); ?>                    
                </div>
                
                <?php echo $form->error($model,'name', array('class'=>'help-block')); ?>
            </div>
	</div>

	<div class="form-group">
            
		<?php echo $form->labelEx($model,'name_short', array('class'=>'control-label col-xs-12 col-sm-3 no-padding-right')); ?>
            
            <div class="col-xs-12 col-sm-9">
                <div class="clearfix">
		<?php echo $form->textField($model,'name_short',array('size'=>5,'maxlength'=>5, 'class'=>'col-xs-12 col-sm-6')); ?>
                </div>
                
                <?php echo $form->error($model,'name_short', array('class'=>'help-block')); ?>
            </div>                    
	</div>
	<div class="modal-footer">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->