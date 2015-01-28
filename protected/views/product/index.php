<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

/*
  $this->breadcrumbs=array(
  'Products',
  );

  $this->menu=array(
  array('label'=>'Create Product', 'url'=>array('create')),
  array('label'=>'Manage Product', 'url'=>array('admin')),
  );
 */
?>

<!--<h1>Products</h1>-->

<?php /*
  $this->widget('zii.widgets.CListView', array(
  'dataProvider'=>$dataProvider,
  'itemView'=>'_view',
  ));

 */ ?>
<div class="page-content-area">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="table-header">
                    Productos Registrados
                    | <div class="btn-group btn-group-sm"><a href="#newProduct-form" class="btn btn-success" id="btProductNew" data-target="#newProduct-form" data-toggle="modal">Nuevo Producto</a></div>
                      <div class="btn-group btn-group-sm"><a href="#newProductCategory-form" class="btn btn-success" id="btCategoryNew" data-target="#newProductCategory-form" data-toggle="modal">Nueva Categor&iacute;a</a></div>
                </div>
                <div>
                    <table id="product_table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Categor&iacute;a</th>
                                <th>Proveedor</th>
                                <th>C&oacute;digo</th>
                                <th>Item</th>
                                <th>PxC</th>
                                <th>PU</th>
                                <th>Descripción</th>
                                <th>Acci&oacute;n</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dataProvider as $data => $row) { ?>
                                <tr>
                                    <td><?php echo $row->R_idcategoria->name_cat; ?></td>
                                    <td><?php echo $row->R_idclient->name_client; ?></td>
                                    <td><?php echo $row->code; ?></td>
                                    <td><?php echo $row->item; ?></td>
                                    <td><?php echo $row->pxc; ?></td>
                                    <td><?php echo $row->pu; ?></td>
                                    <td><?php echo $row->description; ?></td>
                                    <td>
                                        <div class="action-buttons">
                                            <a class="blue editProduct" href="#" data-upd-idproduct="<?php echo $row->idproduct ?>" data-target="#updateProduct-form" data-toggle="modal">
                                                <i class="ace-icon fa fa-pencil-square-o bigger-130"></i>
                                            </a>
                                            <a class="blue delProduct" href="#" data-del-idproduct="<?php echo $row->idproduct ?>">
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
</div>
<!-- PAGE CONTENT ENDS -->

<div id="newProduct-form" class="modal" tabindex="-1">
    <div class="modal-dialog" style="width:900px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Nuevo Producto</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12" id="divCreateProduct">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- PAGE CONTENT ENDS -->

<div id="newProductCategory-form" class="modal" tabindex="-1">
    <div class="modal-dialog" style="width:900px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Ingresar informaci&oacute;n para crear nuevo Producto</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="form">
                            <?php //$this->renderPartial('_a_formProduct'); ?>
                        </div><!-- form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- PAGE CONTENT ENDS -->
<script type="text/javascript">

    $(document).ready(function() {


        $('#btProductNew').on("click", showCreateProduct); 
        
        //$('#clients_table tbody tr').on("click", "a.editClient", showUpdateClient);
        
        
        //muestra ventana modal para registrar complex
        function showCreateProduct()
        {
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('Product/create'); ?>",
                type: "GET",
                data: {
                    },
                success: function(data) {
                    $('#divCreateProduct').html(data);
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