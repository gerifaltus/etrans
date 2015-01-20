<?php
/* @var $this ComplexController */
/* @var $dataProvider CActiveDataProvider */
/*
  $this->breadcrumbs=array(
  'Complexes',
  );

  $this->menu=array(
  array('label'=>'Create Complex', 'url'=>array('create')),
  array('label'=>'Manage Complex', 'url'=>array('admin')),
  );
  ?>

  <h1>Complexes</h1>

  <?php $this->widget('zii.widgets.CListView', array(
  'dataProvider'=>$dataProvider,
  'itemView'=>'_view',
  )); */
?>

<div class="page-content-area">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">


                <!--<div class="btn-group btn-group-sm">
                    <a href="#newComplex-form" class="btn btn-success" id="btnusernew" data-target="#newComplex-form" data-toggle="modal">Nuevo Complejo</a>
                </div>-->
                <!--<hr>-->
                <div class="table-header">
                    Complejos Registrados
                    | <div class="btn-group btn-group-sm">
                        <!--<a href="#newComplex-form" class="btn btn-success" id="btnusernew" data-target="#newComplex-form" data-toggle="modal">Nuevo Complejo</a>-->
                        <?php
                        echo CHtml::ajaxLink(
                                'Nuevo Complejo', //name o icono
                                CController::createUrl('complex/create'), 
                                
                                array('update' => '#divCreateComplex',
                                      'complete' => 'function() {
                                        $("#newComplex-form").show();
                                      }'), 
                                array('class'=>'btn btn-success',
                                      'id'=>'btnusernew',
                                      'data-target'=>'#newComplex-form',
                                      'data-toggle'=>'modal')
                        );
                        ?>
                    </div>
                </div>
                <div>
                    <table id="complex_table" class="table table-striped table-bordered table-hover tbl-display">
                        <thead>
                            <tr>
                                <th>Clave</th>
                                <th>Complejo</th>
                                <th>Creado por</th>
                                <th>Fecha</th>
                                <th>Acci&oacute;n</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dataProvider as $data => $row) { ?>
                            <tr>
                                <td><?php echo $row->name_short; ?></td>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->iduser; ?></td>
                                <td><?php echo $row->date_created; ?></td>
                                <td>
                                    <div class="hidden-sm hidden-xs action-buttons">
                                        <!--<a class="blue" href="#" data-upd-idcomplex="<?php //echo $row->idcomplex?>">
                                            <i class="ace-icon fa fa-pencil-square-o bigger-130"></i>
                                        </a>-->
                                        <?php echo CHtml::ajaxLink(
                                                '<i class="ace-icon fa fa-pencil-square-o bigger-130"></i>', //name o icono
                                                CController::createUrl('complex/update', array('idcomplex'=>$row->idcomplex)),
                                                array('update'=>'#divUpdateComplex')
                                                );
                                        ?>
                                        
                                        <?php echo CHtml::link('<i class="ace-icon fa fa-trash-o bigger-130"></i> ',array('controller/action',
                                         'idcomplex'=>$row->idcomplex)); ?>
                                        
                                        <!--<a class="blue" href="#" data-del-idcomplex="<?php //echo $row->idcomplex?>">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>-->
                                        </a>
                                    </div>
                                </td>
                            </tr>   
                            <?php }?>
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- PAGE CONTENT ENDS -->
        </div>
    </div>
</div>


<!--Ventana modal para ejecutar la creacion del nuevo complejo -->
<div id="newComplex-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Ingresar informaci&oacute;n para crear nuevo Complejo</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12" id="divCreateComplex">


                        <?php //echo $this->renderPartial('_form', array('model' => $model, 'claves'=>$claves)); ?>

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
        </div>
    </div>
</div><!-- PAGE CONTENT ENDS -->

<!--Ventana modal para ejecutar la actualizacion de un complejo -->
<div id="updateComplex-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Ingresar informaci&oacute;n para crear nuevo Complejo</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12" id="divUpdateComplex">


                        <?php //echo $this->renderPartial('_form', array('model' => $model,  'claves'=>$claves)); ?>

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
        </div>
    </div>
</div><!-- PAGE CONTENT ENDS -->
