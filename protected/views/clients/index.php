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
                        <a href="#newClients-form" class="btn btn-success" id="btnClientsNew" data-target="#newClients-form" data-toggle="modal">Nuevo Complejo</a>
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
                                            <a class="blue editComplex" href="#" data-upd-idcomplex="<?php echo $row->idclient ?>" data-target="#updateComplex-form" data-toggle="modal">
                                                <i class="ace-icon fa fa-pencil-square-o bigger-130"></i>
                                            </a>
                                            <a class="blue delComplex" href="#" data-del-idcomplex="<?php echo $row->idclient ?>">
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

<script type="text/javascript">

    $(document).ready(function() {

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