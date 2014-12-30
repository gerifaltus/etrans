<style type="text/css">
    .paddingTextBox {padding: 2px 2px 2px !important; font-size: 12px !important;}
</style>
<div class="page-content-area">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <!--
            <div class="page-header">
                <h1>
                    Confirmaci&oacute;n de Cita
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Registrar Pre-ingreso y confirmaci&oacute;n de cita.
                    </small>
                </h1>
            </div>-->
            <div class="row">
                <div class="widget-container-col col-xs-12">
                    <!-- #section:custom/widget-box.options.transparent -->
                    <div class="widget-box transparent">
                        <div class="widget-header">
                            <h4 class="widget-title">Inspecci&oacute;n del Producto</h4>

                        </div>

                        <div class="widget-body">
                            <div class="widget-main padding-6 ">
                                <table id="inspection_receiving_table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>C&oacute;digo</th>
                                            <th>Item</th>
                                            <th>Descripci&oacute;n</th>
                                            <th>PxC</th>
                                            <th>Programadas (Cajas)</th>
                                            <th>LLegan (Cajas)</th>
                                            <th>Cajas a Revisar</th>
                                            <th>Cajas Rechazadas</th>
                                            <th>Piezas Rechazadas</th>
                                            <th>% Rechazo</th>
                                            <th>Motivo</th>
                                            <th>Cajas a Ingresar</th>
                                            <th>Ingresar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1324567891</td>
                                            <td>45672</td>
                                            <td>Product A</td>
                                            <td>10</td>
                                            <td>50</td>
                                            <td><input type="text" name="codigo" id="codigo" size="2" class="paddingTextBox"/></td>
                                            <td>5</td>
                                            <td><input type="text" name="codigo" id="codigo" size="2" class="paddingTextBox"/></td>
                                            <td>10</td>
                                            <td>1%</td>
                                            <td>
                                                <select class="input-medium" id="platform" name="platform">
                                                    <option value="">------------------</option>
                                                    <option value="linux">ROTURA</option>
                                                    <option value="windows">DEFORMACIONES</option>
                                                    <option value="windows">PERFORACIONES</option>
                                                    <option value="windows">PLAGA VIVA</option>
                                                    <option value="windows">PLAGA MUERTA</option>
                                                </select></td>
                                                <td>49</td>
                                                <td>
                                                    <div class="hidden-sm hidden-xs action-buttons">
                                                        <a href="#rowProduct_1" class="blue" data-toggle="collapse">
                                                            <i class="ace-icon fa fa-plus bigger-130" data-icon-show="ace-icon fa fa-plus" data-icon-hide="ace-icon fa fa-trash-o"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3241658597</td>
                                                <td>325476</td>
                                                <td>Product B</td>
                                                <td>40</td>
                                                <td>100</td>
                                                <td><input type="text" name="codigo" id="codigo" size="2" class="paddingTextBox"/></td>
                                                <td>10</td>
                                                <td><input type="text" name="codigo" id="codigo" size="2" class="paddingTextBox"/></td>
                                                <td>80</td>
                                                <td>10%</td>
                                                <td>
                                                    <select class="input-medium" id="platform" name="platform">
                                                        <option value="">------------------</option>
                                                        <option value="linux">ROTURA</option>
                                                        <option value="windows">DEFORMACIONES</option>
                                                        <option value="windows">PERFORACIONES</option>
                                                        <option value="windows">PLAGA VIVA</option>
                                                        <option value="windows">PLAGA MUERTA</option>
                                                    </select></td>
                                                    <td>98</td>
                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a href="#rowProduct_2" class="blue" data-toggle="collapse">
                                                                <i class="ace-icon fa fa-plus bigger-130" data-icon-show="ace-icon fa fa-plus" data-icon-hide="ace-icon fa fa-trash-o"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- /section:custom/widget-box.options.transparent -->
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="row">
                        <div class="widget-container-col col-xs-12">
                            <!-- #section:custom/widget-box.options.transparent -->
                            <div class="widget-box transparent">
                                <div class="widget-header">
                                    <h4 class="widget-title">Recepción de Productos</h4>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main padding-6">
                                        <table id="receiving_table" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>C&oacute;digo</th>
                                                    <th>Item</th>
                                                    <th>Descripci&oacute;n</th>
                                                    <th>PxC</th>
                                                    <th>Cajas a Ingresar</th>
                                                    <th>Piezas a Ingresar</th>
                                                    <th>Lote</th>
                                                    <th>Caducidad</th>
                                                    <th>Pallets</th>
                                                    <th>%Fill Rate</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="collapse" id="rowProduct_1">
                                                    <td>1324567891</td>
                                                    <td>12312</td>
                                                    <td>Product A</td>
                                                    <td>10</td>
                                                    <td>49</td>
                                                    <td>490</td>
                                                    <td><input type="text" name="codigo" id="codigo" size="2" class="paddingTextBox" /></td>
                                                    <td><input type="text" name="codigo" id="codigo" size="9" class="paddingTextBox" /></td>
                                                    <td><input type="text" name="codigo" id="codigo" size="2" class="paddingTextBox" /></td>
                                                    <td>99%</td>
                                                    <td>
                                                        <select class="input-medium" id="platform" name="platform">
                                                            <option value="">------------------</option>
                                                            <option value="linux">NORMAL</option>
                                                            <option value="windows">CUARENTENA</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr class="collapse" id="rowProduct_2">
                                                    <td>3241658597</td>
                                                    <td>325476</td>
                                                    <td>Product B</td>
                                                    <td>40</td>
                                                    <td>90</td>
                                                    <td>3600</td>
                                                    <td><input type="text" name="codigo" id="codigo" size="2" class="paddingTextBox" /></td>
                                                    <td><input type="text" name="codigo" id="codigo" size="9" class="paddingTextBox" /></td>
                                                    <td><input type="text" name="codigo" id="codigo" size="2" class="paddingTextBox" /></td>
                                                    <td>90%</td>
                                                    <td>
                                                        <select class="input-medium" id="platform" name="platform">
                                                            <option value="">------------------</option>
                                                            <option value="linux">NORMAL</option>
                                                            <option value="windows">CUARENTENA</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- /section:custom/widget-box.options.transparent -->
                        </div>
                    </div>
                    <div class="clearfix form-actions" style="margin-bottom:5px; margin-top:5px;">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn" type="reset">
                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                Cancelar Todo
                            </button>

                            &nbsp; &nbsp; &nbsp;
                            <a class="btn btn-info" href="<?php echo Yii::app()->createUrl('request/StoreProduct');?>">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                Procesar
                            </a>

                            &nbsp; &nbsp; &nbsp;
                            <a class="btn btn-warning" href="#" data-target="#datosOperador-form" data-toggle="modal">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                Informaci&oacute;n del Operador
                            </a>
                        </div>
                    </div>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content-area -->


        <!--Ventana modal para mostrar opciones y agregar la cantidad de articulos a transferir y el destino -->
        <div id="datosOperador-form" class="modal" tabindex="-1">
            <div class="modal-dialog" style="width:700px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="blue bigger">Datos del Operador</h4>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-sm-6">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-select-1">Nombre</label>
                                            <div class="col-sm-9">
                                                <input id="form-field-1" placeholder="" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-select-1">Transporte</label>
                                            <div class="col-sm-9">
                                                <select class="col-xs-12 col-sm-12" id="form-field-select-1">
                                                    <option value="">Camioneta 1.5t</option>
                                                    <option value="">Camioneta 3.5t</option>
                                                    <option value="">Torton</option>
                                                    <option value="">Trailer 48</option>
                                                    <option value="">Trailer 52</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-select-1">Licencia</label>
                                            <div class="col-sm-9">
                                                <input id="form-field-1" placeholder="" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-select-1">Placas</label>
                                            <div class="col-sm-9">
                                                <input id="form-field-1" placeholder="" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-sm-6">
                                    <!-- #section:plugins/date-time.datetimepicker -->
                                    <label for="date-timepicker1">Fecha y Hora</label>
                                    <div class="input-group">
                                        <input id="date-timepicker1" type="text" class="form-control" />
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o bigger-110"></i>
                                        </span>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="form-field-8">Notas</label>
                                        <textarea class="form-control" id="form-field-8"></textarea>
                                    </div>
                                </div>
                            </div>
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
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                                <button class="btn btn-info" type="button">
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                    Guardar
                                </button>

                                &nbsp; &nbsp; &nbsp;
                                <button class="btn" type="reset">
                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                    Reset
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- PAGE CONTENT ENDS -->



        <!-- inline scripts related to this page -->
        <script type="text/javascript">

    var editor; // use a global for the submit and return data rendering in the examples

    $(document).ready(function() {

        $('#date-timepicker1').datetimepicker().next().on(ace.click_event, function(){
            $(this).prev().focus();
        });

    });
</script>