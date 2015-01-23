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

<h1>Clients</h1>

<?php 
/*
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
*/

 $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
     'itemsCssClass' => 'table table-striped table-bordered table-hover',
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
                    'imageUrl' => '<i class="ace-icon fa fa-pencil-square-o bigger-130"></i>',
                    'options' => array
                    (
                        'class' => 'blue'
                    )
                    
                ),
                'detele' => array
                (
                    'imageUrl' => '<i class="ace-icon fa fa-trash-o bigger-130"></i>',
                    'options' => array
                    (
                        'class' => 'blue',
                    )
                )
            ),
          ),
    ),
));
?>
<script type="text/javascript">

    $(document).ready(function() {

        $('#tbl_clients').DataTable({
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