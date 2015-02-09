<?php

/* @var $this StoreController */
/* @var $dataProvider CActiveDataProvider */
/*
$this->breadcrumbs=array(
	'Stores',
);

$this->menu=array(
	array('label'=>'Create Store', 'url'=>array('create')),
	array('label'=>'Manage Store', 'url'=>array('admin')),
);*/
?>

<?php
/*
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */?>

<div class="page-content-area">
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="table-header">
                    Almacenes Registrados
                    | <div class="btn-group btn-group-sm"><a href="#newStore-form" class="btn btn-success" id="btnStoreNew" data-target="#newStore-form" data-toggle="modal">Nuevo Almacen</a></div>
                </div>
                <table id="store_table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Complejo</th>
                            <th>Tipo</th>
                            <th>Nombre</th>
                            <th>Direcci&oacute;n</th>
                            <th>Colonia</th>
                            <th>CP</th>
                            <th>Pais</th>
                            <th>Estado</th>
                            <th>Municipio</th>
                            <th>Dimensiones</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($dataProvider as $data => $row) { ?>
                        <tr>
                            <td><?php echo $row->R_complex->name_complex; ?></td>
                            <td><?php echo $row->R_typestore->name_typestore; ?></td>
                            <td><?php echo $row->name_store; ?></td>
                            <td><?php echo $row->address; ?></td>
                            <td><?php echo $row->colony; ?></td>
                            <td><?php echo $row->cp; ?></td>
                            <td><?php echo $row->R_country->name_country; ?></td>
                            <td><?php echo $row->R_state->name_state; ?></td>
                            <td><?php echo $row->R_city->name_city; ?></td>
                            <td><?php echo $row->width."A x ".$row->long."L Mts"; ?></td>
                            <td>
                                <div class="action-buttons">
                                    <a class="blue editStore" href="#" data-upd-idstore="<?php echo $row->idstore ?>" data-target="#updateStore-form" data-toggle="modal">
                                        <i class="ace-icon fa fa-pencil-square-o bigger-130"></i>
                                    </a>
                                    <a class="blue delStore" href="#" data-del-idstore="<?php echo $row->idstore ?>">
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
    </div>
</div>
<!-- PAGE CONTENT ENDS -->

<!--Ventana modal para ejecutar la creacion del nuevo complejo -->

<div id="newStore-form" class="modal" tabindex="-1">
    <div class="modal-dialog" style="width:900px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Nuevo Almacen</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12" id="divCreateStore">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- PAGE CONTENT ENDS -->

<div id="updateStore-form" class="modal" tabindex="-1">
    <div class="modal-dialog" style="width:900px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Edici&oacute;n Almacen</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12" id="divUpdateStore">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- PAGE CONTENT ENDS -->

<div id="delStore-confirm" class="hide">
    <div class="alert alert-info bigger-110">
        ¿Est&aacute; seguro de eliminar el Almac&eacute;n Seleccionado?
    </div>
<!--
    <div class="space-6"></div>

    <p cl   ass="bigger-110 bolder center grey">
        <i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
        Are you sure?
    </p>-->
</div><!-- #dialog-confirm -->


<script type="text/javascript">

    $(document).ready(function() {
        
        $('#btnStoreNew').on("click", showCreateStore); 
        
        $('#store_table tbody tr').on("click", "a.editStore", showUpdateStore);
        
        function showCreateStore()
        {
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('Store/create'); ?>",
                type: "GET",
                data: {
                    },
                success: function(data) {
                    $('#divCreateStore').html(data);
                }
            });
        }
        
        
        function showUpdateStore()
        {
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('Store/update'); ?>",
                type: "GET",
                data: {
                    'idstore': $(this).data("upd-idstore")
                    },
                success: function(data) {
                    $('#divUpdateStore').html(data);
                }
            });
        }
        
        
        function delStoreId(idstore, dial)
        {
            //alert('ajax');
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('store/delete'); ?>",
                type: "GET",
                data: {
                    'idstore': idstore
                },
                beforeSend: function() {
                    $('#box_msg').show();
                    $('#msg_sucess').hide();
                    $('#msg_alert').hide();
                    $('#img_procesing').show();
                },
                success: function(data) {
                    $(dial).dialog('close');
                    window.location.href='index.php?r=store/index';
                },
                error: function(data) {
                    $('#img_procesing').hide();
                    $('#msg_alert p').append(data);
                    $('#msg_alert').show();
                }
            });
        }
        

    $( "#store_table tbody tr" ).on('click', 'a.delStore', function(e) {
        var idstore = $(this).data('del-idstore');
        
        e.preventDefault();
				
	$( "#delStore-confirm" ).removeClass('hide').dialog({
            resizable: false,
            modal: true,
            /*title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Empty the recycle bin?</h4></div>",
            title_html: true,*/
            buttons: [
                        {
                            html: "<i class='ace-icon fa fa-trash-o bigger-110'></i>&nbsp; Elimiar",
                            class : "btn btn-danger btn-xs",
                            click: function() {                                            
                                delStoreId(idstore, $(this));
                            }
                        },
                        {
                            html: "<i class='ace-icon fa fa-times bigger-110'></i>&nbsp; Cancel",
                            class : "btn btn-xs",
                            click: function() {
                                $( this ).dialog( "close" );
                            }
                        }
                     ]
        });
    });
        
        
        
        
        $('#product_table').DataTable({
            responsive: true,
            "oLanguage": {
                "sInfo": "Mostrando _TOTAL_ registros (_START_ a _END_)",
                "sEmptyTable": "No hay registros.",
                "sInfoEmpty": "No hay registros.",
                "sInfoFiltered": " - Filtrado de un total de  _MAX_ registros",
                "sProcessing": "Procesando",
                "sSearch": "Buscar:",
                "sZeroRecords": "No hay registros",
            },
        });
    });
</script>
