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
                        <a href="#newComplex-form" class="btn btn-success" id="btnComplexNew" data-target="#newComplex-form" data-toggle="modal">Nuevo Complejo</a>
                        <!-- data-target="#newComplex-form" data-toggle="modal"-->
                        <?php
                        /*
                          echo CHtml::ajaxLink(
                          'Nuevo Complejo', //name o icono
                          CController::createUrl('complex/create'),

                          array('update' => '#divCreateComplex',
                          'complete' => 'function() {
                          $("#newComplex-form").show(); return false;
                          }'),
                          array('class'=>'btn btn-success',
                          'id'=>'btnusernew',
                          'data-target'=>'#newComplex-form',
                          'data-toggle'=>'modal')
                          ); */
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
                                            <a class="blue editComplex" href="#" data-upd-idcomplex="<?php echo $row->idcomplex ?>" data-target="#updateComplex-form" data-toggle="modal">
                                                <i class="ace-icon fa fa-pencil-square-o bigger-130"></i>
                                            </a>
                                            <?php
                                            /*echo CHtml::ajaxLink(
                                              '<i class="ace-icon fa fa-trash-o bigger-130"></i>', //name o icono
                                              CController::createUrl('delete'),
                                              array(
                                                    'type' => 'GET',
                                                    'data' => array('idcomplex' => $row->idcomplex,
                                                                    'action' => 'delete'),
                                                    'submit' => array('complex/delete', 'idcomplex'=>$row->idcomplex)
                                                  ),
                                              array('class'=>'blue',
                                                    'confirm'=>'Seguro de eliminar?')
                                                    ); */
                                            ?>
                                            <a class="blue delComplex" href="#" data-del-idcomplex="<?php echo $row->idcomplex ?>">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>   
                            <?php } ?>
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
                        
                    </div>
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
                        
                    </div>
                </div>
            </div>     
        </div>
    </div>
</div><!-- PAGE CONTENT ENDS -->

<div id="delComplex-confirm" class="hide">
    <div class="alert alert-info bigger-110">
        ¿Est&aacute; seguro de eliminar el Complejo Seleccionado?
    </div>
<!--
    <div class="space-6"></div>

    <p cl   ass="bigger-110 bolder center grey">
        <i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
        Are you sure?
    </p>-->
<div class="col-xs-12 col-sm-8" style="display: none;" id="box_msg">
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
</div>
</div><!-- #dialog-confirm -->

<script type="text/javascript">
    jQuery(function($) {
        
        $('#btnComplexNew').on("click", showCreateComplex); 
        
        $('#complex_table tbody tr').on("click", "a.editComplex", showUpdateComplex);
        
        
        //muestra ventana modal para registrar complex
        function showCreateComplex()
        {
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('complex/create'); ?>",
                type: "GET",
                data: {
                    },
                success: function(data) {
                    $('#divCreateComplex').html(data);
                }
            });
        }
        
        function showUpdateComplex()
        {
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('complex/update'); ?>",
                type: "GET",
                data: {
                    'idcomplex': $(this).data("upd-idcomplex")
                    },
                success: function(data) {
                    $('#divUpdateComplex').html(data);
                }
            });
        }
        
        function delComplexId(idcomplex, dial)
        {
            //alert('ajax');
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('complex/delete'); ?>",
                type: "GET",
                data: {
                    'idcomplex': idcomplex
                },
                beforeSend: function() {
                    $('#box_msg').show();
                    $('#msg_sucess').hide();
                    $('#msg_alert').hide();
                    $('#img_procesing').show();
                },
                success: function(data) {
                    $(dial).dialog('close');
                    window.location.href='index.php?r=complex/index';
                },
                error: function(data) {
                    $('#img_procesing').hide();
                    $('#msg_alert p').append(data);
                    $('#msg_alert').show();
                }
            });
        }
        

				$( "#complex_table tbody tr" ).on('click', 'a.delComplex', function(e) {
                                        var idcomplex = $(this).data('del-idcomplex');
                                        
					e.preventDefault();
				
					$( "#delComplex-confirm" ).removeClass('hide').dialog({
						resizable: false,
						modal: true,
						/*title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Empty the recycle bin?</h4></div>",
						title_html: true,*/
						buttons: [
							{
								html: "<i class='ace-icon fa fa-trash-o bigger-110'></i>&nbsp; Elimiar",
								"class" : "btn btn-danger btn-xs",
								click: function() {
                                                                    
									delComplexId(idcomplex, $(this));
								}
							}
							,
							{
								html: "<i class='ace-icon fa fa-times bigger-110'></i>&nbsp; Cancel",
								"class" : "btn btn-xs",
								click: function() {
									$( this ).dialog( "close" );
								}
							}
						]
					});
				});

    });
</script>
