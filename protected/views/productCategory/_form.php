<?php
/* @var $this ProductCategoryController */
/* @var $model ProductCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-category-form',
	'enableAjaxValidation' => false,
        'enableClientValidation' => false,
        'htmlOptions' => array(
            'class' => 'form-horizontal',
            'role' => 'form'
        )
)); ?>

	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<?php //echo $form->errorSummary($model); ?>
    
        <div class="form-group">
            <?php echo $form->labelEx($model, 'name_cat', array('class' => 'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->textField($model, 'name_cat', array('class' => 'form-control')); ?>
                </div>
                <?php echo $form->error($model, 'name_cat'); ?>
            </div>
        </div>
    
            <div class="form-group">
            <?php echo $form->labelEx($model, 'description', array('class' => 'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->textField($model, 'description', array('class' => 'form-control')); ?>
                </div>
                <?php echo $form->error($model, 'description'); ?>
            </div>
        </div>
        <div class="form-group"></div>
	<div class="modal-footer">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">

    $(document).ready(function() {
        
        /***************validacion del formulario ******************/        
        $('#product-category-form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            rules: {
                'ProductCategory[name_cat]': {
                    required: true
                }
            },
            messages: {
                'ProductCategory[name_cat]': {
                    required: "El campo Categoria es requerido."
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
              error.insertAfter(element.parent());  
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
                       
        /*****************fin validacion formulario***********************/

    });
</script>