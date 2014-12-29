<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'newuser-form',
        'action' => Yii::app()->createUrl('//user/create'),
        'htmlOptions' => array(
            'class' => 'form-horizontal',
            'role' => 'form'
        ),
    ));
    ?>  

    <!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->
    <div class="col-xs-12 col-sm-6">
        
    <?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'Compañia', array('class' => 'col-sm-3 control-label no-padding-right', 'for' => 'User_idcompany')); ?>
        <div class="col-sm-3">
            <?php echo $form->dropDownList($model, 'idcompany', CHtml::listData($company, 'idcompany', 'businessname'), array('prompt' => 'Seleccione un elemento')); ?>
            <?php echo $form->error($model, 'idcompany'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'Username', array('class' => 'col-sm-3 control-label no-padding-right', 'for' => 'User_username')); ?>
        <div class="col-sm-3">
            <?php echo $form->textField($model, 'username', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'Password', array('class' => 'col-sm-3 control-label no-padding-right', 'for' => 'User_password')); ?>
        <div class="col-sm-3">
            <?php echo $form->passwordField($model, 'password', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'Nombre', array('class' => 'col-sm-3 control-label no-padding-right', 'for' => 'User_name')); ?>
        <div class="col-sm-3">
            <?php echo $form->textField($model, 'name', array('size' => 45, 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'name'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'Apellidos', array('class' => 'col-sm-3 control-label no-padding-right', 'for' => 'User_lastname')); ?>
        <div class="col-sm-3">
            <?php echo $form->textField($model, 'lastname', array('size' => 45, 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'lastname'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'Email', array('class' => 'col-sm-3 control-label no-padding-right', 'for' => 'User_name')); ?>
        <div class="col-sm-3">
            <?php echo $form->textField($model, 'email', array('size' => 45, 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'email'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'Tipo de Usuario', array('class' => 'col-sm-3 control-label no-padding-right', 'for' => 'User_idusertype')); ?>
        <div class="col-sm-3">
            <?php echo $form->dropDownList($model, 'idusertype', CHtml::listData($usertype, 'idusertype', 'usertypedsc')); ?>
            <?php echo $form->error($model, 'idusertype'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'Perfil', array('class' => 'col-sm-3 control-label no-padding-right', 'for' => 'User_idprofile')); ?>
        <div class="col-sm-3">
            <?php echo $form->dropDownList($model, 'idprofile', CHtml::listData($profile, 'idprofile', 'profiledsc')); ?>
            <?php echo $form->error($model, 'idprofile'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'Activo', array('class' => 'col-sm-3 control-label no-padding-right', 'for' => 'User_active')); ?>
        <div class="col-sm-3">
            <?php echo $form->textField($model, 'active', array('size' => 1, 'maxlength' => 1)); ?>
            <?php echo $form->error($model, 'active'); ?>
        </div>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>
</div>
    <div class="col-xs-12 col-sm-6">
        <label>hola</label>
    </div>
    <?php $this->endWidget(); ?>

