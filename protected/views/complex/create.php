<?php
/* @var $this ComplexController */
/* @var $model Complex */
/*
  $this->breadcrumbs = array(
  'Complexes' => array('index'),
  'Create',
  );

  $this->menu = array(
  array('label' => 'List Complex', 'url' => array('index')),
  array('label' => 'Manage Complex', 'url' => array('admin')),
  ); */
?>

<!--Ventana modal para ejecutar la creacion del nuevo complejo -->
<!--<div id="newComplex-form" class="modal" tabindex="-1">-->
<div id="newComplex-form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Ingresar informaci&oacute;n para crear nuevo Complejo</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">


                        <?php echo $this->renderPartial('_form', array('model' => $model)); ?>

                    </div>
                    <!--<div class="col-xs-12 col-sm-8" style="display: none;" id="box_msg">
                        <h5 class="header smaller" style="border-bottom:0px; display: none;" id="img_procesing">
                            <i class="ace-icon fa fa-spinner fa-spin blue bigger-125"></i>
                            Procesando petici&oacute;n....
                        </h5>
                        <div class="alert alert-danger" style="display: block;" id="msg_alert">
                            <p>

                            </p>    
                        </div>
                        <div class="alert alert-block alert-success" style="display: block;" id="msg_sucess">
                            <p>

                            </p>
                        </div>
                    </div>-->
                </div>
            </div>     
            <!--<div class="modal-footer">
                <button class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Guardar
                </button>
            </div>-->
        </div>
    </div>
</div><!-- PAGE CONTENT ENDS -->