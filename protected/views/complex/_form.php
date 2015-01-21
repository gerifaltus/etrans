<?php
/* @var $this ComplexController */
/* @var $model Complex */
/* @var $form CActiveForm */
?>

<div class="form">
    <?php
    
    //saber si es una actualizacion o nuevo complex para desactivar campo clave
    $disabled = $model->isNewRecord ? '' : 'disabled' ;
    
    
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'complex-form',
        //'action' => Yii::app()->createUrl('//complex/create'),
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
            <?php echo $form->textField($model, 'name', array('size' => 25, 'maxlength' => 20, 'class' => 'col-xs-12 col-sm-6')); ?>                    
            </div>

        <?php echo $form->error($model, 'name', array('class' => 'help-block')); ?>
        </div>
    </div>

    <div class="form-group">

        <?php echo $form->labelEx($model, 'name_short', array('class' => 'control-label col-xs-12 col-sm-3 no-padding-right')); ?>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
            <?php echo $form->textField($model, 'name_short', array('size' => 30, 'maxlength' => 7, 'class' => 'col-xs-12 col-sm-3', 'style'=>'font-size:15px;', $disabled=>$disabled)); ?>
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
        
        /***************validacion del formulario ******************/        
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
                    minlength: 5,
                    clavesInArray: true
                }
            },
            messages: {
                'Complex[name]': {
                    required: "El campo Nombre es requerido.",
                    maxlength: "Maximo 15 caracteres."
                },
                'Complex[name_short]': {
                    required: "El campo Clave es requerido.",
                    minlength: "El campo clave debe contener 5 caracteres.",
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
        
        
        //funcion para validar el contenido del array claves2 y saber si existe la nueva clave a ingresar con el nuevo complejo
        jQuery.validator.addMethod("clavesInArray", function (value, element) {
            
            return claves.indexOf(value) > 0 ? false: true;
            
        }, "La clave seleccionada ya está registrada en el sistema, <br> selecciona una diferente.");
        
        
        /* fix: implementar validacion para 3 letras y 2 digitos AAA11 */
        
        
        /*****************fin validacion formulario***********************/
        
        /***************** inicio script para typehead********************/
        var substringMatcher = function(strs) {
            return function findMatches(q, cb) {
                var matches, substrRegex;
 
                // an array that will be populated with substring matches
                matches = [];
 
                // regex used to determine if a string contains the substring `q`
                substrRegex = new RegExp(q, 'i');
 
                // iterate through the pool of strings and for any string that
                // contains the substring `q`, add it to the `matches` array
                $.each(strs, function(i, str) {
                    if (substrRegex.test(str)) {
                        // the typeahead jQuery plugin expects suggestions to a
                        // JavaScript object, refer to typeahead docs for more info
                        matches.push({value: str});
                    }
                });

                cb(matches);
            };
        };
        <?php 
        if($model->isNewRecord){?>
            claves = [<?php echo implode(",",$claves) ?>]
        <?php }
        ?>
            
        $('#Complex_name_short').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        },
        {
            name: 'claves',
            displayKey: 'value',
            source: substringMatcher(claves)
        });
                /*****************fin script para typehead************************/
    });
    </script>