<?php
/* @var $this ClientsController */
/* @var $dataProvider CActiveDataProvider */

/*
$this->breadcrumbs=array(
	'Clients',
);

$this->menu=array(
	array('label'=>'Create Clients', 'url'=>array('create')),
	array('label'=>'Manage Clients', 'url'=>array('admin')),
);
 * */
?>

<?php 
/*
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
*/
/*
 $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
     'itemsCssClass' => 'table table-striped table-bordered table-hover tbl_clients',
    'columns' => array(
        'name_client', // muestra el atributo "titulo"
        'businessname', // muestra el atributo 'nombre' de la relación 'categoria' declararada en el modelo
        'rfc', // muestra el atributo 'nombre' de la relación 'categoria' declararada en el modelo
        'address', // muestra el atributo 'nombre' de la relación 'categoria' declararada en el modelo
        'tel', // muestra el atributo 'nombre' de la relación 'categoria' declararada en el modelo
        'email', // muestra el atributo 'nombre' de la relación 'categoria' declararada en el modelo
        array(
            'class' => 'CButtonColumn',
            'template'=>'{update}{delete}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/clients/update&idclient=$data->idclient" )', // url de la acción 'update'
            'deleteButtonUrl'=>'Yii::app()->createUrl("/clients/delete&idclient=$data->idclient" )', // url de la acción 'delete'
            'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete'=>'$.fn.yiiGridView.update("nombre-grid");', // actualiza el grid después de borrar
            'buttons'=>array
            (
                'update' => array
                (
                    'label' => '',
                    'imageUrl' => '',
                    'options' => array
                    (
                        'class' => 'ace-icon fa fa-pencil-square-o bigger-130'
                    )
                    
                ),
                'delete' => array
                (
                    'label' => '',
                    'imageUrl' => '',
                    'options' => array
                    (
                        'class' => 'ace-icon fa fa-trash-o bigger-130',
                    )
                )
            ),
          ),
    ),
));*/
?>

<div class="page-content-area">
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="table-header">
                    Clientes Registrados
                    | <div class="btn-group btn-group-sm">
                        <a href="#newClients-form" class="btn btn-success" id="btnClientsNew" data-target="#newClients-form" data-toggle="modal">Nuevo Cliente</a>
                    </div>
                </div>
                <div>
                    <table id="clients_table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nombre del cliente</th>
                                <th>Raz&oacute;n Social</th>
                                <th>RFC</th>
                                <th>Domicilio</th>
                                <th>Tel&eacute;fono</th>
                                <th>Email</th>
                                <th>Acci&oacute;n</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dataProvider as $data => $row) { ?>
                                <tr>
                                    <td><?php echo $row->name_client; ?></td>
                                    <td><?php echo $row->businessname; ?></td>
                                    <td><?php echo $row->rfc; ?></td>
                                    <td><?php echo $row->address; ?></td>
                                    <td><?php echo $row->tel; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td>
                                        <div class="action-buttons">
                                            <a class="blue editClient" href="#" data-upd-idclient="<?php echo $row->idclient ?>" data-target="#updateClient-form" data-toggle="modal">
                                                <i class="ace-icon fa fa-pencil-square-o bigger-130"></i>
                                            </a>
                                            <a class="blue delClient" href="#" data-del-idclient="<?php echo $row->idclient ?>">
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

<!--Ventana modal para ejecutar la creacion del nuevo cliente -->
<div id="newClients-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Nuevo Cliente</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12" id="divCreateClients">
                        
                    </div>
                </div>
            </div>     
        </div>
    </div>
</div><!-- PAGE CONTENT ENDS -->


<!--Ventana modal para ejecutar la actualizacion del cliente -->
<div id="updateClient-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Nuevo Cliente</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12" id="divUpdateClients">
                        
                    </div>
                </div>
            </div>     
        </div>
    </div>
</div><!-- PAGE CONTENT ENDS -->

<div id="delClients-confirm" class="hide">
    <div class="alert alert-info bigger-110">
        ¿Est&aacute; seguro de eliminar el Cliente Seleccionado?
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


        $('#btnClientsNew').on("click", showCreateClients); 
        
        $('#clients_table tbody tr').on("click", "a.editClient", showUpdateClient);
        
        
        //muestra ventana modal para registrar complex
        function showCreateClients()
        {
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('clients/create'); ?>",
                type: "GET",
                data: {
                    },
                success: function(data) {
                    $('#divCreateClients').html(data);
                }
            });
        }
        
        function showUpdateClient()
        {
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('clients/update'); ?>",
                type: "GET",
                data: {
                    'idclient': $(this).data("upd-idclient")
                    },
                success: function(data) {
                    $('#divUpdateClients').html(data);
                }
            });
        }
        
        function delClientId(idclient, dial)
        {
            //alert('ajax');
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('clients/delete'); ?>",
                type: "GET",
                data: {
                    'idclient': idclient
                },
                beforeSend: function() {
                    $('#box_msg').show();
                    $('#msg_sucess').hide();
                    $('#msg_alert').hide();
                    $('#img_procesing').show();
                },
                success: function(data) {
                    $(dial).dialog('close');
                    window.location.href='index.php?r=clients/index';
                },
                error: function(data) {
                    $('#img_procesing').hide();
                    $('#msg_alert p').append(data);
                    $('#msg_alert').show();
                }
            });
        }
        

    $( "#clients_table tbody tr" ).on('click', 'a.delClient', function(e) {
        var idclient = $(this).data('del-idclient');
        
        e.preventDefault();
				
	$( "#delClients-confirm" ).removeClass('hide').dialog({
            resizable: false,
            modal: true,
            /*title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Empty the recycle bin?</h4></div>",
            title_html: true,*/
            buttons: [
                        {
                            html: "<i class='ace-icon fa fa-trash-o bigger-110'></i>&nbsp; Elimiar",
                            class : "btn btn-danger btn-xs",
                            click: function() {                                            
                                delClientId(idclient, $(this));
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
    
    
    $('#clients_table').DataTable({
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