<style type="text/css">
    #opcionesStoreProduct-form:hover { cursor: pointer;}
    #opcionesStoreProduct-form { z-index: 1; top:200px; right: 200px}
    .marginAlamacenes {font-size: 0.8em;}
    .sinpadding {padding: 2px !important;}
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
                        Consulta de Existencias |                                         
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
                                <label class="label-control input-sm" for="exampleInputPassword2">Fecha</label>
                                <input class="input-sm form-control" id="exampleInputPassword2" type="text" size="10">
                            </div>
                            <div class="form-group form-group-sm" style="padding: 0px 5px;">
                              <label class="label-control input-sm" for="exampleInputEmail2">Cliente</label>
                              <select class="input-sm form-control" id="platform" name="platform">
                                  <option value="">------------------</option>
                                  <option value="linux">TOL01</option>
                                  <option value="windows">TOL02</option>
                                  <option value="windows">QRO01</option>
                                  <option value="windows">QRO02</option>
                              </select>
                          </div>
                          <div class="form-group form-group-sm" style="padding: 0px 5px;">
                              <label class="label-control input-sm" for="exampleInputEmail2">C&oacute;digo</label>
                              <select class="input-sm form-control" id="platform" name="platform">
                                  <option value="">------------------</option>
                                  <option value="linux">TOL01</option>
                                  <option value="windows">TOL02</option>
                                  <option value="windows">QRO01</option>
                                  <option value="windows">QRO02</option>
                              </select>
                          </div>
                          <div class="form-group form-group-sm" style="padding: 0px 5px;">
                              <label class="label-control input-sm" for="exampleInputEmail2">Item</label>
                              <select class="input-sm form-control" id="platform" name="platform">
                                  <option value="">------------------</option>
                                  <option value="linux">TOL01</option>
                                  <option value="windows">TOL02</option>
                                  <option value="windows">QRO01</option>
                                  <option value="windows">QRO02</option>
                              </select>
                          </div>
                          <div class="form-group form-group-sm" style="padding: 0px 5px;">
                              <label class="label-control input-sm" for="exampleInputEmail2">Descripci&oacute;n</label>
                              <select class="input-sm form-control" id="platform" name="platform">
                                  <option value="">------------------</option>
                                  <option value="linux">TOL01</option>
                                  <option value="windows">TOL02</option>
                                  <option value="windows">QRO01</option>
                                  <option value="windows">QRO02</option>
                              </select>
                          </div>
                          <div class="form-group form-group-sm" style="padding: 0px 5px;">
                              <button class="btn btn-sm btn-primary">
                                <i class="ace-icon fa fa-search align-top bigger-105"></i>
                                <strong>Buscar</strong>
                            </button>
                        </div>
                    </form>
                    <div class="space-4"></div>
                </div>
            </div>

            <div class="row">
                <!-- tabla con datos de la consulta-->
                <div class="col-xs-12">
                    <div id="">
                        <table id="table_existReport" class="table table-striped table-bordered" style="font-size:10px; margin:0px;">
                            <thead>
                                <tr>
                                    <th>Cliente</th>
                                    <th>C&oacute;digo</th>
                                    <th>Item</th>
                                    <th>Descripci&oacute;n</th>
                                    <th>Cajas</th>
                                    <th>PxC</th>
                                    <th>P. U.</th>
                                    <th>Lote</th>
                                    <th>Caducidad</th>
                                    <th>Almac&eacute;n</th>
                                    <th>Zona</th>
                                    <th>&Aacute;rea</th>
                                    <th>Posici&oacute;n</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Protecr & Gamber</td>
                                    <td>1324354657897</td>
                                    <td>43657687432</td>
                                    <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                    <td>20</td>
                                    <td>40</td>
                                    <td>8.52</td>
                                    <td>HG6543</td>
                                    <td>10/Dic/2014</td>
                                    <td>TLC01</td>
                                    <td>Almacenamiento</td>
                                    <td>Alta Rotaci&oacute;n</td>
                                    <td>TLC1.01.02.1.A0106.1</td>
                                </tr>
                                <tr>
                                    <td>Procter & Gamber</td>
                                    <td>1324354657897</td>
                                    <td>43657687432</td>
                                    <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                    <td>30</td>
                                    <td>50</td>
                                    <td>9.12</td>
                                    <td>UJ7809</td>
                                    <td>15/Dic/2014</td>
                                    <td>QRO01</td>
                                    <td>Almacenamiento</td>
                                    <td>Alta Rotaci&oacute;n</td>
                                    <td>TLC1.01.02.1.A0106.2</td>
                                </tr>

                                <tr>
                                    <td>Procter & Gamber</td>
                                    <td>1324354657897</td>
                                    <td>43657687432</td>
                                    <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                    <td>40</td>
                                    <td>60</td>
                                    <td>10.32</td>
                                    <td>UJ7809</td>
                                    <td>10/Dic/2014</td>
                                    <td>QR001</td>
                                    <td>Crossdock</td>
                                    <td>Alta Rotaci&oacute;n</td>
                                    <td>TLC1.01.02.1.A0106.3</td>
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