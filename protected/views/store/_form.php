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
            <?php echo $form->labelEx($model,'Complejo', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->dropDownList($model, 'idcomplex', CHtml::listData($complex, 'idcomplex', 'name_complex'), array('prompt' => 'Seleccione un elemento')); ?>
                </div>
                <?php echo $form->error($model,'idcomplex'); ?>
            </div>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'Tipo Almacén', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->dropDownList($model, 'idtypestore', CHtml::listData($typestore, 'idtypestore', 'name_typestore'), array('prompt' => 'Seleccione un elemento')); ?>
                </div>
                <?php echo $form->error($model,'idtypestore'); ?>
            </div>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'name_store', array('class'=>'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->textField($model,'name_store',array('class'=>'form-control')); ?>
                </div>
                <?php echo $form->error($model,'name_store'); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'address', array('class'=>'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->textField($model,'address',array('class'=>'form-control')); ?>
                </div>
                <?php echo $form->error($model,'address'); ?>
            </div>
        </div>      
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'tel', array('class'=>'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->textField($model,'tel',array('class'=>'col-xs-10 col-sm-5')); ?>
                </div>
                <?php echo $form->error($model,'tel'); ?>
            </div>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'email', array('class'=>'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->textField($model,'email',array('class'=>'form-control')); ?>
                </div>
                <?php echo $form->error($model,'email'); ?>
            </div>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'cp', array('class'=>'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->textField($model,'cp', array('class'=>'col-xs-10 col-sm-5')); ?>
                </div>
                <?php echo $form->error($model,'cp'); ?>
            </div>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'colony', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            
            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->textField($model,'colony',array('class'=>'form-control')); ?>
                </div>
                <?php echo $form->error($model,'colony'); ?>
            </div>
        </div>
        
    </div>
    
    <div class="col-xs-12 col-sm-6">
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'País', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            
            <div class="col-sm-9">
                
                <div class="clearfix">
                    <?php echo $form->dropDownList($model, 'idcountry', CHtml::listData($country, 'idcountry', 'name_country'), array('prompt' => 'Seleccione un elemento')); ?>
                </div>
                <?php echo $form->error($model,'idcountry'); ?>
            </div>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'Estado', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            
            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->dropDownList($model, 'idstate', CHtml::listData($state, 'idstate', 'name_state'), array('prompt' => 'Seleccione un elemento')); ?>
                </div>
                <?php echo $form->error($model,'idstate'); ?>
            </div>
        </div>
        
        <div class="form-group">
            	<?php echo $form->labelEx($model,'Municipio', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->dropDownList($model, 'idcity', CHtml::listData($city, 'idcity', 'name_city'), array('prompt' => 'Seleccione un elemento')); ?>
                </div>
                <?php echo $form->error($model,'idcity'); ?>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Dimensiones </label>

            <div class="col-sm-9">

            </div>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'long', array('class'=>'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <!--<input id="form-field-1-1" placeholder="Largo" class="col-xs-10 col-sm-2" type="text">Mt-->
                    <?php echo $form->textField($model,'long',array('class'=>'col-xs-10 col-sm-2')); ?>mts
                </div>
                <?php echo $form->error($model,'long'); ?>
            </div>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'width', array('class'=>'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <!--<input id="form-field-1-1" placeholder="Ancho" class="col-xs-10 col-sm-2" type="text">Mt-->
                    <?php echo $form->textField($model,'width',array('class'=>'col-xs-10 col-sm-2')); ?>mts
                </div>
                
                <?php echo $form->error($model,'width'); ?>
            </div>
        </div>
        
    </div>
    <div class="form-group">
    </div>

    <div class="modal-footer">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-sm btn-primary')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">

    $(document).ready(function() {
        
        $('#Store_idcountry').on("change", function(){
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('store/SelectState'); ?>",
                type: "POST",
                dataType: 'json',
                data: {
                    id_country: $(this).val()
                    },
                success: function(data) {
                    $("#Store_idstate").html(data.response);
                }
            });
        });
        
        
        $('#Store_idstate').on("change", function(){
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('store/SelectCity'); ?>",
                type: "POST",
                dataType: 'json',
                data: {
                    id_state: $(this).val()
                    },
                success: function(data) {
                    $("#Store_idcity").html(data.response);
                }
            });
        });
        
        /***************validacion del formulario ******************/  
        
        $('#store-form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            rules: {
                'Store[idcomplex]': {
                    required: true,
                    number: true
                },
                'Store[idtypestore]': {
                    required: true,
                    number: true
                },
                'Store[email]':{
                    required: true,
                    maxlength: 25
                },
                'Store[idcountry]':{
                    required: true,
                    number: true
                },
                'Store[idstate]':{
                    required: true,
                    number: true
                },
                'Store[idcity]':{
                    required: true,
                    number: true
                },
                'Store[tel]':{
                    maxlength: 13,
                    number: true
                },
                'Store[cp]':{
                    maxlength: 5,
                    number: true
                },
                'Store[long]':{
                    maxlength: 10,
                    number: true
                },
                'Store[width]':{
                    maxlength: 10,
                    number: true
                }
            },
            messages: {
                'Store[idcomplex]': {
                    required: "El campo País es requerido.",
                    number: "Sólo se permiten numeros."
                },
                'Store[idtypestore]': {
                    required: "El campo Tipo Almacén es requerido.",
                    number: "Sólo se permiten numeros."
                },
                'Store[email]': {
                    required: "El campo E-mail es requerido",
                    maxlength: "Maximo 25 caracteres.",
                },
                'Store[idcountry]': {
                    required: "El campo País es requerido",
                    number: "Sólo se permiten numeros"
                },
                'Store[idstate]': {
                    required: "El campo Estado es requerido",
                    number: "Sólo se permiten numeros"
                },
                'Store[idcity]': {
                    required: "El campo Municipio es requerido",
                    number: "Sólo se permiten numeros"
                },
                'Store[tel]': {
                    required: "Se permien máximo 13 digitos",
                    number: "Sólo se permiten numeros"
                },
                'Store[long]': {
                    required: "Se permien máximo 10 digitos",
                    number: "Sólo se permiten numeros"
                }
                ,
                'Store[width]': {
                    required: "Se permien máximo 10 digitos",
                    number: "Sólo se permiten numeros"
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