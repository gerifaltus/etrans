<style type="text/css">
  #opcionesStoreProduct-form:hover { cursor: pointer;}
  #opcionesStoreProduct-form { z-index: 1; top:200px; right: 200px}
  .marginAlamacenes {font-size: 0.8em;}
  .sinpadding{padding: 2px !important;}
  .lbl_existencias_radio {padding-left: 2px !important;}
  .tbody_search {height: 100px; overflow: auto; display: block;}
  /*#tbl_inferior {bottom: 0px; height: 100px; overflow: auto; display:block; width: 100%}*/
  /*.sticky {position: fixed !important; width: 100%}*/
  #tbl_grid {height: 150px; overflow: auto; display:block;}
</style>
<div class="page-content-area">

  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <div class="row">

        <div class="col-xs-12" id="contentStoreProduct">
          <div class="table-header">
            Lista Ajustes de Inventario |                                         
            <a class="btn btn-sm btn-success" href="#">
              <i class="ace-icon fa fa-file-pdf-o align-top bigger-125"></i>
              <strong>Descargar PDF</strong>
            </a> | 
            <a class="btn btn-sm btn-warning" href="#">
              <i class="ace-icon fa fa-file-excel-o align-top bigger-125"></i>
              <strong>Descargar Excel</strong>
            </a>
          </div>
          <div class="row">
            <!-- div para mostrar el formulario de busqueda-->
            <div class="col-xs-12">
              <div class="space-4"></div>
              <div class="widget-box">
                <div class="widget-header">
                  <h4 class="widget-title">Criterios de Busqueda</h4>

                  <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                      <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                  </div>
                </div>

                <div style="display: block;" class="widget-body">
                  <div class="widget-main">
                    <form class="form-inline" role="form">
                          <div class="form-group form-group-sm" style="padding: 0px 5px;">
                            <label class="label-control input-sm" for="exampleInputEmail2">Almac&eacute;n</label>
                            <select class="input-sm form-control" id="platform" name="platform">
                              <option value="">------------------</option>
                              <option value="linux">TOL01</option>
                              <option value="windows">TOL02</option>
                              <option value="windows">QRO01</option>
                              <option value="windows">QRO02</option>
                            </select>
                          </div>
                          <div class="form-group form-group-sm" style="padding: 0px 5px;">
                            <label class="label-control input-sm" for="exampleInputPassword2">C&oacute;digo</label>
                            <input class="input-sm form-control" id="exampleInputPassword2" type="text" size="10">
                          </div>
                          <div class="form-group form-group-sm" style="padding: 0px 5px;">
                            <label class="label-control input-sm" for="exampleInputPassword2">Item</label>
                            <input class="input-sm form-control" id="exampleInputPassword2" type="text" size="10">
                          </div>
                          <div class="form-group form-group-sm" style="padding: 0px 5px;">
                            <label class="label-control input-sm" for="exampleInputPassword2">Ubicaci&oacute;n</label>
                            <input class="input-sm form-control" id="exampleInputPassword2" type="text" size="10">
                          </div>
                          <div class="form-group form-group-sm" style="padding: 0px 5px;">
                            <label class="label-control input-sm" for="exampleInputPassword2">Cliente</label>
                            <input class="input-sm form-control" id="exampleInputPassword2" type="text" size="10">
                          </div>
                          <div class="form-group form-group-sm" style="padding: 0px 5px;">
                            <button class="btn btn-sm btn-primary">
                              <i class="ace-icon fa fa-search align-top bigger-105"></i>
                              <strong>Buscar</strong>
                            </button>
                          </div>
                          <div class="space-4"></div>
                          <!--space -->
                          <div class="checkbox">
                            <label>
                              <input name="form-field-checkbox" class="ace input-sm" type="checkbox">
                              <span class="lbl input-sm"> Mostrar Inventarios Ciclicos</span>
                            </label>
                          </div>
                          <div class="form-group form-group-sm" style="padding: 0px 5px;">
                            <label class="label-control input-sm" for="exampleInputPassword2">Fecha</label>
                            <input class="input-sm form-control" id="exampleInputPassword2" type="text" size="10">
                          </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="space-4"></div>
            </div>
          </div>

          <div class="row">
            <!-- tabla con datos de la consulta-->
            <div class="col-xs-12">
              <div id="">
                <table id="table_existReport" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Almac&eacute;n</th>
                      <th>Folio</th>
                      <th>Fecha/th>
                      <th>Tipo de Inventario</th>
                      <th>Estatus</th>
                      <th>Detalle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>TLC01</td>
                      <td>INV043567</td>
                      <td>10/Dic/2014</td>
                      <td>F&iacute;sico</td>
                      <td>En Proceso</td>
                      <td>
                      <div class="hidden-sm hidden-xs action-buttons">
                        <a class="blue" href="<?php echo Yii::app()->createUrl('request/InventoryAdjustments');?>">
                          <i class="ace-icon fa fa-search-plus bigger-130"></i>
                        </a>
                      </div>
                      </td>
                    </tr>
                    <tr>
                      <td>QRO01</td>
                      <td>INV785634</td>
                      <td>15/Dic/2014</td>
                      <td>C&iacute;clico</td>
                      <td>En Proceso</td>
                      <td>
                      <div class="hidden-sm hidden-xs action-buttons">
                        <a class="blue" href="<?php echo Yii::app()->createUrl('request/InventoryAdjustments');?>">
                          <i class="ace-icon fa fa-search-plus bigger-130"></i>
                        </a>
                      </div>
                      </td>
                    </tr>

                    <tr>
                      <td>QR001</td>
                      <td>INV546732</td>
                      <td>10/Dic/2014</td>
                      <td>F&iacute;sico</td>
                      <td>En Proceso</td>
                      <td>
                      <div class="hidden-sm hidden-xs action-buttons">
                        <a class="blue" href="<?php echo Yii::app()->createUrl('request/InventoryAdjustments');?>">
                          <i class="ace-icon fa fa-search-plus bigger-130"></i>
                        </a>
                      </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content-area -->

<!-- ventana modal para vista previa -->
<div id="detalleMovimientos-form" class="modal" tabindex="-1">
  <div class="modal-dialog" style="width:700px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="blue bigger">Detalle de Movimientos: Salidas</h4>
      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <div class="row">
              <div class="col-sm-12 tbl-transfer">
                <table id="transferVistaPrevia_table" class="table table-striped table-bordered">
                  <caption class="table-header text-left"><strong>Folio: S0023345 | Origen: Embarques | Destino: Walmart de M&eacute;xico</strong></caption>
                  <thead>
                    <tr>
                      <th>Descripci&oacute;n</th>
                      <th>PxC</th>
                      <th>Cajas</th>
                      <th>Lote</th>
                      <th>Caducidad</th>
                      <th>Posici&oacute;n</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Pasta de tomate "Del Campo" lata 174g</td>
                      <td>40</td>
                      <td>10</td>
                      <td>UJ8967</td>
                      <td>12/Mar/2016</td>
                      <td>TLC1.01.02.1.A0106.1</td>
                    </tr>
                    <tr>
                      <td>Pasta de tomate "Del Campo" lata 174g</td>
                      <td>40</td>
                      <td>10</td>
                      <td>UJ8967</td>
                      <td>12/Mar/2016</td>
                      <td>TLC1.01.02.1.A0106.2</td>
                    </tr>
                    <tr>
                      <td>Pasta de tomate "Del Campo" lata 174g</td>
                      <td>40</td>
                      <td>10</td>
                      <td>UJ8967</td>
                      <td>12/Mar/2016</td>
                      <td>TLC1.01.02.1.A0106.2</td>
                    </tr>
                    <tr>
                      <td>Pasta de tomate "Del Campo" lata 174g</td>
                      <td>40</td>
                      <td>10</td>
                      <td>UJ8967</td>
                      <td>12/Mar/2016</td>
                      <td>TLC1.01.02.1.A0106.2</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- PAGE CONTENT ENDS -->


<!-- inline scripts related to this page -->
<script type="text/javascript">
  /* inicializar el datatables para CGridView*/
  $(document).ready(function() {
        //codigo para hacer emergente y estatica la tabla inferior en donde aparecen los articulos que se van seleccionando de la tabla superior

        $('#table_existReport').DataTable({
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