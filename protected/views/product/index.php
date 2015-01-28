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
                    | <div class="btn-group btn-group-sm"><a href="#newProduct-form" class="btn btn-success" id="btnusernew" data-target="#newProduct-form" data-toggle="modal">Nuevo Producto</a></div>
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
                                <th>Presentaci&oacute;n</th>
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
                                    <td><?php echo $row->presentation; ?></td>
                                    <td>
                                        <div class="action-buttons">
                                            <a class="blue editProduct" href="#" data-upd-idclient="<?php echo $row->idclient ?>" data-target="#updateClient-form" data-toggle="modal">
                                                <i class="ace-icon fa fa-pencil-square-o bigger-130"></i>
                                            </a>
                                            <a class="blue delProduct" href="#" data-del-idclient="<?php echo $row->idclient ?>">
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