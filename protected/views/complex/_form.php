<?php
/* @var $this ComplexController */
/* @var $model Complex */
/* @var $form CActiveForm */
?>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'complex-form',
        'action' => Yii::app()->createUrl('//complex/create'),
        'enableAjaxValidation' => false,
        'enableClientValidation' => false,
        'htmlOptions' => array(
            'class' => 'form-horizontal',
        )
    ));
    ?>

        <!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

<?php //echo $form->errorSummary($model);  ?>

    <div class="form-group">

        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-xs-12 col-sm-3 no-padding-right')); ?>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">    
            <?php echo $form->textField($model, 'name', array('size' => 25, 'maxlength' => 15, 'class' => 'col-xs-12 col-sm-6')); ?>                    
            </div>

        <?php echo $form->error($model, 'name', array('class' => 'help-block')); ?>
        </div>
    </div>

    <div class="form-group">

        <?php echo $form->labelEx($model, 'name_short', array('class' => 'control-label col-xs-12 col-sm-3 no-padding-right')); ?>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
            <?php echo $form->textField($model, 'name_short', array('size' => 3, 'maxlength' => 3, 'class' => 'col-xs-12 col-sm-3')); ?>
            </div>

        <?php echo $form->error($model, 'name_short', array('class' => 'help-block')); ?>
        </div>                    
    </div>
    
    <div class="modal-footer">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'btn btn-sm btn-primary')); ?>
    </div>

<?php $this->endWidget(); ?>
</div><!-- form -->

<script type="text/javascript">
    jQuery(function($) {
        $('#complex-form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            rules: {
                'Complex[name]': {
                    required: true,
                    maxlength: 15
                },
                'Complex[name_short]': {
                    required: true,
                    minlength: 3
                }
            },
            messages: {
                'Complex[name]': {
                    required: "El campo Nombre es requerido.",
                    maxlength: "Maximo 15 caracteres."
                },
                'Complex[name_short]': {
                    required: "El campo Clave es requerido.",
                    minlength: "El campo clave debe contener 3 caracteres."
                },
            },
            highlight: function(e) {
                $(e).closest('.form-group').addClass('has-error');
            },
            success: function(e) {
                $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                $(e).remove();
            },
            errorPlacement: function (error, element){
              error.insertAfter(element.parent());  
            },
            submitHandler: function(form) {
                form.submit();
            },
            invalidHandler: function(form) {
            }
        });
    });
    </script>