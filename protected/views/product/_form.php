<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'product-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => false,
        'htmlOptions' => array(
            'class' => 'form-horizontal',
            'role' => 'form',
            'enctype' => 'multipart/form-data'
        )
    ));
    ?>

        <!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

<?php //echo $form->errorSummary($model);  ?>

    <!-- #section:elements.form -->
    <div class="col-xs-12 col-sm-6">
        <div class="form-group">
            <?php echo $form->labelEx($model, 'Proveedor', array('class' => 'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->dropDownList($model, 'idclient', CHtml::listData($clientes, 'idclient', 'name_client'), array('prompt' => 'Seleccione un elemento')); ?>
                </div>
                <?php echo $form->error($model, 'idclient'); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'code', array('class' => 'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->textField($model, 'code', array('class' => "col-xs-10 col-sm-5")); ?>
                </div>
                <?php echo $form->error($model, 'code'); ?>
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

        <div class="form-group">
                <?php echo $form->labelEx($model, 'Categor&iacute;a', array('class' => 'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->dropDownList($model, 'idcategory', CHtml::listData($categoria, 'idcategory', 'name_cat'), array('prompt' => 'Seleccione un elemento', 'class' => 'col-xs-10 col-sm-8')); ?>
                </div>
                <?php echo $form->error($model, 'idcategory'); ?>
            </div>
        </div>

        <div class="form-group">
                <?php echo $form->labelEx($model, 'pxc', array('class' => 'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->textField($model, 'pxc', array('class' => 'col-xs-10 col-sm-5')); ?>
                </div>
                <?php echo $form->error($model, 'pxc'); ?>
            </div>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model, 'image', array('class' => 'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->fileField($model, 'image', array('class' => 'id-input-file-2')); ?>
                </div>
                <?php echo $form->error($model, 'image'); ?>
            </div>
        </div>        

        <div class="form-group">
            <?php echo $form->labelEx($model, 'pu', array('class' => 'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->textField($model, 'pu', array('class' => 'col-xs-10 col-sm-5')); ?>
                </div>
                <?php echo $form->error($model, 'pu'); ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-6">
        <div class="form-group">
                <?php echo $form->labelEx($model, 'heigth', array('class' => 'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                <?php echo $form->textField($model, 'heigth', array('class' => 'col-xs-10 col-sm-2')); ?>Cm
                </div>
                <?php echo $form->error($model, 'heigth'); ?>
            </div>
        </div>

        <div class="form-group">
                <?php echo $form->labelEx($model, 'depth', array('class' => 'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->textField($model, 'depth', array('class' => 'col-xs-10 col-sm-2')); ?>Cm
                </div>
                <?php echo $form->error($model, 'depth'); ?>
            </div>
        </div>

        <div class="form-group">
                <?php echo $form->labelEx($model, 'width', array('class' => 'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->textField($model, 'width', array('class' => 'col-xs-10 col-sm-2')); ?>
                </div>
                <?php echo $form->error($model, 'width'); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'weight', array('class' => 'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->textField($model, 'weight', array('class' => 'col-xs-10 col-sm-2')); ?>
                </div>
                <?php echo $form->error($model, 'weight'); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'stowmax', array('class' => 'col-sm-3 control-label no-padding-right')); ?>

            <div class="col-sm-9">
                <div class="clearfix">
                    <?php echo $form->textField($model, 'stowmax', array('class' => 'col-xs-10 col-sm-5')); ?>
                </div>
                <?php echo $form->error($model, 'stowmax'); ?>
            </div>
        </div>
    </div>
    <div class="form-group"></div>
    <div class="modal-footer">
        <?php
        $id = $model->idproduct;
        $img = $model->image;
        
        if(!$model->isNewRecord){
            echo $form->hiddenField($model,'idproduct',array('value'=>"$id"));
        }
        ?>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'btn btn-sm btn-primary')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">

    $(document).ready(function() {
        
        /***************validacion del formulario ******************/        
        $('#product-form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            rules: {
                'Product[idclient]': {
                    required: true,
                    number: true
                },
                'Product[code]': {
                    required: true,
                    number: true,
                    maxlength: 15
                },
                'Product[description]':{
                    required: true,
                    maxlength: 45
                },
                'Product[idcatetory]':{
                    required: true,
                    number: true
                },
                'Product[pu]':{
                    required: true,
                    number: true
                },
                'Product[pxc]':{
                    number: true
                },
                'Product[image]': {
                    accept: "image/jpeg, image/pjpeg, image/png, image/gif"
                }
            },
            messages: {
                'Product[idclient]': {
                    required: "El campo Proveedor es requerido.",
                    number: "Sólo se permiten numeros"
                    
                },
                'Product[code]': {
                    required: "El campo Código es requerido.",
                    number: "Sólo se permiten numeros",
                    maxlength: "Máximo 15 digitos",
                },
                'Product[description]': {
                    required: "El campo Descripción es requerido",
                    maxlength: "Maximo 25 caracteres.",
                },
                'Product[idcategory]': {
                    required: "El campo Categoría es requerido",
                    number: "Sólo se permiten numeros"
                },
                'Product[pu]': {
                    required: "El campo PU es requerido.",
                    number: "Sólo se permiten numeros"
                },
                'Product[pxc]': {
                    number: "Sólo se permiten numeros"
                    
                },
                'Product[image]': {
                    accept: "Sólo se aceptan imágenes .jpg, .png, .gif, .jpeg"
                    
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
        
        /*****************js para input=file***********************/
        $('.id-input-file-2').ace_file_input({
            no_file: 'Archivo...',
            btn_choose: 'Seleccionar',
            btn_change: 'Seleccionar',
            droppable: false,
            onchange: null,
            thumbnail: false, //| true | large
            whitelist:'gif|png|jpg|jpeg'
                    //blacklist:'exe|php'
                    //onchange:''
                    //
        });
        
        /*****************termina js para input=file***************/

    });
</script>