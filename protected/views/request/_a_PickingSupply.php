
<style>
    .form-horizontal .form-group {margin-bottom: 0px;}

    .form-horizontal .form-group .form-control-static {padding-top: 3px; padding-bottom: 3px;}

    .etrans-info {margin: 5px 0px 0px 0px; padding: 2px; border: 1px solid #E0E2E5; background-color: #F8FAFC;}

    .tbl-transfer div.row {display: none;}

        

    .disponible{ background-color:#9DF29D; }

    .pocadisponibilidad{ background-color: #FACD8E; }

    .nodisponible{ background-color: #FA6864 !important; }

    .datepicker table tr td, .datepicker table tr th {font-size: 12px; width: 25px; height: 25px; min-width: 25px;}

    #svg1, #svg2, #svg3, #svg4, #svg5 {border: 0px solid black; height: 95px;}

    #svg1:hover, #svg2:hover, #svg3:hover, #svg4:hover, #svg5:hover {cursor: pointer;}    

    #svg1 svg {width: 110px; fill:yellow; vertical-align: bottom;}

    #svg2 svg {width: 140px; fill:yellow; vertical-align: bottom;}

    #svg3 svg {width: 160px; fill:red; vertical-align: bottom;}

    #svg4 svg {width: 220px; fill:green; vertical-align: bottom;}

    #svg5 svg {width: 250px; fill:yellow; vertical-align: bottom;}

    .paddingTextBox {padding: 2px 2px 2px !important; font-size: 12px !important;}

</style>

<div class="page-content-area">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">

                <div class="col-xs-12">
                    <div class="table-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Orden de Picking</strong>
                            </div>
                            <div class="col-sm-6">
                                <strong>Orden de Salida 127334</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="header smaller blue" style="margin: 8px;">TOLUCA COLON (TLC01)</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="col-sm-6">
                                <p class="marginAlamacenes">
                                    <strong>ORIGEN</strong><br>
                                    <strong>Salinas Distribution </strong><br>
                                    Toluca Col&oacute;n (TLC01) <br>
                                    Paseo Tollocan 7546, Col&oacute;n <br>
                                    Toluca, Estado de M&eacute;xico <br>
                                </p>                                
                            </div>
                            <div class="col-sm-6">
                                <p class="marginAlamacenes">
                                    <br>
                                    (15467)<br>
                                    SAD140415HD4 <br>
                                    722-123-12-31 <br>
                                    C.P. 50260 <br>
                                </p>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="col-sm-6">
                                <p class="marginAlamacenes">
                                    <strong>DESTINO</strong><br>
                                    <strong>Abarrotera Central</strong><br>
                                    VARIOS <br>
                                    PRE-DISTRIBUCION  <br>
                                </p>
                            </div>

                            <div class="col-sm-6">
                                <p class="marginAlamacenes">
                                    <br>
                                    (5684)<br>
                                    ABC100522JK3<br>
                                    5543218765<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="space-8"></div>-->
                    <div class="row">
                        <div class="col-xs-12">
                            <table id="picking_table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>C&oacute;digo</th>
                                        <th>Descripci&oacute;n </th>
                                        <th>Unidad</th>
                                        <th>Pzas x Caja</th>
                                        <th>Ubicaci&oacute;n</th>
                                        <th>Req.</th>
                                        <th>Surt.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>435671</td>
                                        <td>1346789012257</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>Caja</td>
                                        <td>48</td>
                                        <td>TLC1.01.02.1.A0106.1</td>
                                        <td>100</td>
                                        <td><input id="form-field-1" type="text" size="3" class="paddingTextBox"> </td>
                                    </tr>   
                                    <tr>
                                        <td>435671</td>
                                        <td>1346789012257</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>Caja</td>
                                        <td>48</td>
                                        <td>TLC1.01.02.1.A0106.1</td>
                                        <td>100</td>
                                        <td><input id="form-field-1" type="text" size="3" class="paddingTextBox"></td>
                                    </tr>
                                    <tr>
                                        <td>435671</td>
                                        <td>1346789012257</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>Caja</td>
                                        <td>48</td>
                                        <td>TLC1.01.02.1.A0106.1</td>
                                        <td>100</td>
                                        <td><input id="form-field-1" type="text" size="3" class="paddingTextBox"></td>
                                    </tr>
                                    <tr>
                                        <td>435671</td>
                                        <td>1346789012257</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>Caja</td>
                                        <td>48</td>
                                        <td>TLC1.01.02.1.A0106.1</td>
                                        <td>100</td>
                                        <td><input id="form-field-1" type="text" size="3" class="paddingTextBox"></td>
                                    </tr>
                                    <tr>
                                        <td>435671</td>
                                        <td>1346789012257</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>Caja</td>
                                        <td>48</td>
                                        <td>TLC1.01.02.1.A0106.1</td>
                                        <td>100</td>
                                        <td><input id="form-field-1" type="text" size="3" class="paddingTextBox"></td>
                                    </tr>
                                    <tr>
                                        <td>435671</td>
                                        <td>1346789012257</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>Caja</td>
                                        <td>48</td>
                                        <td>TLC1.01.02.1.A0106.1</td>
                                        <td>100</td>
                                        <td><input id="form-field-1" type="text" size="3" class="paddingTextBox"></td>
                                    </tr>
                                    <tr>
                                        <td>435671</td>
                                        <td>1346789012257</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>Caja</td>
                                        <td>48</td>
                                        <td>TLC1.01.02.1.A0106.1</td>
                                        <td>100</td>
                                        <td><input id="form-field-1" type="text" size="3" class="paddingTextBox"></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="7" class="text-right"><strong>Total</strong></th>
                                        <th colspan="1">1730</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix form-actions" style="margin-bottom:5px; margin-top:5px;">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn" type="reset">
                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                Cancelar Todo
                            </button>

                            &nbsp; &nbsp; &nbsp;
                            <a class="btn btn-info" href="<?php echo Yii::app()->createUrl('request/PickingPreDistribution');?>">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                Procesar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PAGE CONTENT ENDS -->

<!--Ventana modal para mostrar opciones y agregar la cantidad de articulos a transferir y el destino -->
<div id="newTransfer-form" class="modal" tabindex="-1">
    <div class="modal-dialog" style="width:700px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Agregar Destino</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="text-info"><strong>1346789012257</strong> Pasta de tomate  "Del Campo" lata 174g </h5>
                            </div>
                        </div>
                        <div class="space-8"></div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-horizontal etrans-info" role="form">
                                    <div class="form-group">
                                        <div class="col-sm-7">
                                            <p class="form-control-static text-right">Item</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="form-control-static">447698</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-7">
                                            <p class="form-control-static text-right">Piezas/Caja</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="form-control-static">48</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-7">
                                            <p class="form-control-static text-right">Orden de Entrada</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="form-control-static">002307</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-7">
                                            <p class="form-control-static text-right">Precio</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="form-control-static">8.54</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-7">
                                            <p class="form-control-static text-right">Caducidad</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="form-control-static">2015-05-17</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-7">
                                            <p class="form-control-static text-right">Existencia</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="form-control-static">2,100</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <p class="form-control-static text-right">Destino</p>
                                        </div>
                                        <div class="col-sm-10">
                                            <select class="col-xs-10 col-sm-10" id="form-field-select-1">
                                                <option value="">Abarrotera Central (Suc. Centro)</option>
                                                <option value="">Abarrotera Central (Suc. Lomas Verdes)</option>
                                                <option value="">Abarrotera Central (Suc. Sta. Ursula)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <p class="form-control-static text-right"></p>
                                        </div>
                                        <div class="col-sm-10">
                                            <p class="form-control-static col-xs-10 col-sm-10 etrans-info">
                                                <small>Hidalgo 3345, Centro Cuauht&eacute;moc, M&eacute;xico D.F.</small><br>
                                                <small>C.P. 06190, 55-4321-8765</small><br>
                                                <small>admon@abacen.com.mx, ABC100522JK3</small><br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="space-8"></div>
                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <p class="form-control-static text-right">Transferir</p>
                                        </div>
                                        <div class="col-sm-10">
                                            <input id="form-field-1" placeholder="" class="col-xs-10 col-sm-10" type="text">
                                        </div>
                                    </div>
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
            </div>
        </div>
    </div>
</div><!-- PAGE CONTENT ENDS -->

<!-- js para mostrar el tree del lado derecho del layout del almacen-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery.svg.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery.svganim.min.js"></script>


<script type="text/javascript">

    $(document).ready(function() {

        $('#transfer_table').DataTable({
            responsive: true,
            searching: false,
            paging: false,
            info: false
        });

        $('#ppt_calendar1').datepicker({
            format: "dd/mm/yyyy",
            startDate: "+1d",
            endDate: "+30d",
            todayBtn: "linked",
            language: "es",
            todayHighlight: true
        });


        /*
        //tr5
        var svg5 = $('#svg5').svg('get'); 
        svg5.group(null,'transporte5', {fill: 'red'});
        //variable con ruta a las imgs-svg de vehiculos
        <?php echo "var tr5 = '" . Yii::app()->request->baseUrl . "/theme/images/tr5.svg"."'\n"?>
        $('#transporte5').load(tr5);
        */


    });
</script>