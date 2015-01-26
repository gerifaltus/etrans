<?php
/* @var $this ClientsController */
/* @var $model Clients */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 

//$disabled = $model->isNewRecord ? '' : 'disabled' ;

$form=$this->beginWidget('CActiveForm', array(
        'id' => 'clients-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => false,
        'htmlOptions' => array(
            'class' => 'form-horizontal',
            'role' => 'form'
        )
)); ?>

	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<?php //echo $form->errorSummary($model); ?>
    <!--<div class="col-xs-12 col-sm-12">-->
        <div class="form-group">
            <?php echo $form->labelEx($model, 'name_client', array('class' => 'col-sm-3 control-label no-padding-right', 'for' => '')); ?>

            <div class="col-sm-9">
                <?php echo $form->textField($model, 'name_client', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            </div>
            <?php echo $form->error($model, 'name_client'); ?>
        </div>
        
	<div class="form-group">
            
		<?php echo $form->labelEx($model,'businessname', array('class' => 'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
		<?php echo $form->textField($model,'businessname',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
            </div>
		<?php echo $form->error($model,'businessname'); ?>
	</div>
        
	<div class="form-group">
		<?php echo $form->labelEx($model,'rfc', array('class' => 'col-sm-3 control-label no-padding-right')); ?>
		<div class="col-sm-9">
                    <?php echo $form->textField($model,'rfc',array('size'=>20,'maxlength'=>20, 'class'=>'form-control')); ?>
                </div>
		<?php echo $form->error($model,'rfc'); ?>
	</div>
        
	<div class="form-group">
		<?php echo $form->labelEx($model,'address', array('class' => 'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
		<?php echo $form->textField($model,'address',array('size'=>45,'maxlength'=>45, 'class' => 'form-control')); ?>
            </div>    
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tel', array('class' => 'col-sm-3 control-label no-padding-right')); ?>
		<div class="col-sm-9">
                    <?php echo $form->textField($model,'tel',array('size'=>20,'maxlength'=>20, 'class' => 'form-control')); ?>
                </div>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email', array('class' =>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
		<?php echo $form->textField($model,'email',array('size'=>25,'maxlength'=>25, 'class' => 'form-control')); ?>
            </div>
		<?php echo $form->error($model,'email'); ?>
            
	</div>
    <!--</div>-->

	<div class="modal-footer">
            <!--<div class="col-md-offset-3 col-md-9">
                <button class="btn btn-info" type="button">
                    <i class="ace-icon fa fa-check bigger-110"></i>
                    Guardar
                </button>

                &nbsp; &nbsp; &nbsp;
                <button class="btn" type="reset">
                    <i class="ace-icon fa fa-undo bigger-110"></i>
                    Reset
                </button>
            </div>-->
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : "Guardar", 
                        array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
    jQuery(function($) {
        
        /***************validacion del formulario ******************/        
        $('#clients-form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            rules: {
                'Clients[name_client]': {
                    required: true,
                    maxlength: 45
                },
                'Clients[businessname]': {
                    required: true,
                    maxlength: 45
                },
                'Clients[rfc]':{
                    required: true,
                    maxlength: 13,
                    validRfc:true
                },
                'Clients[address]':{
                    maxlength: 45,
                },
                'Clients[tel]':{
                    maxlength: 13,
                    number: true
                },
                'Clients[email]':{
                    maxlength: 25,
                    email: true
                }
            },
            messages: {
                'Clients[name_client]': {
                    required: "El campo Nombre comercial es requerido.",
                    maxlength: "Maximo 45 caracteres."
                },
                'Clients[businessname]': {
                    required: "El campo Razón Social es requerido.",
                    maxlength: "Maximo 45 caracteres.",
                },
                'Clients[rfc]': {
                    required: "El campo RFC es requerido.",
                    maxlength: "Maximo 13 caracteres.",
                },
                'Clients[tel]': {
                    number: "Ingresar solo digitos.",
                    maxlength: "Maximo 13 caracteres.",
                },
                'Clients[email]': {
                    required: "El campo Email es requerido.",
                    maxlength: "Maximo 25 caracteres.",
                    email: "Formato de Email incorrecto."
                }
            },
            highlight: function(e) {
                $(e).closest('.form-group').addClass('has-error');
            },
            success: function(e) {
                $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                $(e).remove();
            },
            errorPlacement: function (error, element){
              error.insertAfter(element);  
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
        
        //validar rfc
        jQuery.validator.addMethod("validRfc", function(value, element) {
            return this.optional(element) || /^[a-zA-Z]{3,4}(\d{6})((\D|\d){3})/igm.test(value);
        }, "El formato del RFC es incorrecto, considere ABCD123456EF1.");
        
        /*
        jQuery.validator.addMethod("validTel", function (value, element) {
            return this.optional(element) || /^[0-9]{2,3}-? ?[0-9]{6,7}/igm.test(value);
        }, "El formato de número telefonico es incorrecto")*/
               
        /*****************fin validacion formulario***********************/

    });
    </script>