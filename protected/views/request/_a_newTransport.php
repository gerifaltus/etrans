
<style>
    .form-horizontal .form-group {margin-bottom: 0px;}

    .form-horizontal .form-group .form-control-static {padding-top: 3px; padding-bottom: 3px;}

    .etrans-info {margin: 5px 0px 0px 0px; padding: 2px; border: 1px solid #E0E2E5; background-color: #F8FAFC;}

    .tbl-transfer div.row {display: none;}

    .marginAlamacenes {margin-left: 5em;}

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

</style>

<div class="page-content-area">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">

                <div class="col-xs-12">
                    <div class="table-header">
                        Confirmaci&oacute;n de Transporte
                    </div>
                    <div class="space-8"></div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <p class="marginAlamacenes">
                                <strong>ORIGEN</strong><br>
                                <strong>Salinas Distribution (15467) </strong><br>
                                Toluca Col&oacute;n (TLC01) <br>
                                Paseo Tollocan 7546, Col&oacute;n <br>
                                Toluca, Estado de M&eacute;xico <br>
                                SAD140415HD4
                                722-123-12-31
                                C.P. 50260
                            </p>

                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <p class="marginAlamacenes">
                                <strong>DESTINO</strong><br>
                                <strong>Abarrotera Central (5684) </strong><br>
                                (Propio) <br>
                                Hidalgo 3345, Centro <br>
                                Cuauhtemoc, M&eacute;xico D.F. <br>
                                ABC100522JK3
                                55-4321-8765
                                C.P. 06190
                            </p>
                        </div>
                    </div>
                    <div class="space-8"></div>
                    <div class="row">
                        <div class="col-xs-4">

                            <div class="widget-box">
                                <div class="widget-header">
                                    <h4 class="widget-title">Seleccionar Fecha y Hora</h4>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main">
                                        <!--<div class="col-xs-8">-->
                                            <div id="ppt_calendar1" style="width:220px; float:left;"></div>
                                        <!--</div>-->
                                        <div style="display: inline;">
                                            <select class="input-medium" id="hrs" name="hrs" size="10" style="width:110px;">
                                                <option value="08:00:00">08:00:00</option>
                                                <option value="08:30:00">08:30:00</option>
                                                <option value="09:00:00">09:00:00</option>
                                                <option value="09:30:00">09:30:00</option>
                                                <option value="10:00:00">10:00:00</option>
                                                <option value="10:30:00">10:30:00</option>
                                                <option value="11:00:00">11:00:00</option>
                                                <option value="11:30:00">11:30:00</option>
                                                <option value="12:00:00">12:00:00</option>
                                                <option value="12:30:00">12:30:00</option>
                                                <option value="13:00:00">13:00:00</option>
                                                <option value="13:30:00">13:30:00</option>
                                                <option value="14:00:00">14:00:00</option>
                                                <option value="14:30:00">14:30:00</option>
                                                <option value="15:00:00">15:00:00</option>
                                                <option value="15:30:00">15:30:00</option>
                                                <option value="16:00:00">16:00:00</option>
                                            </select>
                                        </div>
                                        <!--
                                        <div style="display:block; clear:both;">
                                            <br>
                                            <span class="label label-sm label-success">Disponible</span>
                                            <span class="label label-sm label-warning">Poca Disponibilidad</span>
                                            <span class="label label-sm label-danger">No Disponible</span>
                                        </div>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="row">
                                <div class="widget-box transparent">
                                    <div class="widget-header widget-header-small header-color-blue2">
                                        <h4 class="widget-title smaller">
                                            <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                            Vehiculos Disponibles
                                        </h4>
                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main padding-16">
                                            <div class="clearfix">
                                                <div class="grid3 center" style="font-size:">
                                                    <div id="svg1"></div>
                                                    <div class="space-2"></div>
                                                    <small><strong>Camioneta 1.5t | 3 Disponibles</strong><br></small>
                                                    <small>Unidades 12 | Costo $1,000.00</small>
                                                </div>

                                                <div class="grid3 center">
                                                    <div id="svg2"></div>
                                                    <div class="space-2"></div>
                                                    <small><strong>Camioneta 3.5t | 5 Disponibles</strong><br></small>
                                                    <small>Unidades 6 | Costo $1,700.00</small>
                                                </div>
                                                <div class="grid3 center">
                                                    <div id="svg3"></div>
                                                    <div class="space-2"></div>
                                                    <small><strong>Thorton | 0 Disponibles</strong><br></small>
                                                    <small>Unidades 2 | Costo $3,800.00</small>
                                                </div>
                                            </div>
                                            <div class="hr hr-16"></div>
                                            <div class="clearfix">
                                                <div class="grid2 center">
                                                    <div id="svg4"></div>
                                                    <div class="space-2"></div>
                                                    <small><strong>Trailer 48' | 12 Disponibles</strong><br></small>
                                                    <small>Unidades 1 | Costo $7,300.00</small>
                                                </div>

                                                <div class="grid2 center">
                                                    <div id="svg5"></div>
                                                    <div class="space-2"></div>
                                                    <small><strong>Trailer 53' | 4 Disponibles</strong><br></small>
                                                    <small>Unidades 1 | Costo $8,200.00</small>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div style="display:block; clear:both;" class="text-center">
                                                    <br>
                                                    <br>
                                                    <span class="label label-lg" style="background-color: green !important;">Optimo</span>
                                                    <span class="label label-lg" style="background-color: yellow !important; color: #000;">No Recomendable/Excedido</span>
                                                    <span class="label label-lg" style="background-color: red !important;">No Disponible</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn" type="reset">
                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                Cancelar
                            </button>

                            &nbsp; &nbsp; &nbsp;
                            <a class="btn btn-info" href="<?php echo Yii::app()->createUrl('request/printOrderTransfer ');?>">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                Confirmar
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

        //codigo con etiquetas svg para mostrar los vehiculos

        //inicializar todos los divs svg
        $('#svg1, #svg2, #svg3, #svg4, #svg5').svg();
        /*
        <?php echo "var tr1 = '" . Yii::app()->request->baseUrl . "/theme/images/tr1.svg"."'\n"?>
        $('#svg1').svg({loadURL:tr1, {fill: 'yellow'}})
        */
        
        //tr1
        var svg1 = $('#svg1').svg('get'); 
        <?php echo "var tr1 = '" . Yii::app()->request->baseUrl . "/theme/images/tr1.svg"."'\n"?>
        svg1.load(tr1);

        //tr2
        var svg2 = $('#svg2').svg('get'); 
        <?php echo "var tr2 = '" . Yii::app()->request->baseUrl . "/theme/images/tr2.svg"."'\n"?>
        svg2.load(tr2, {fill:'yellow'});

        //tr3
        var svg3 = $('#svg3').svg('get'); 
        <?php echo "var tr3 = '" . Yii::app()->request->baseUrl . "/theme/images/tr3.svg"."'\n"?>
        svg3.load(tr3, {fill:'yellow'});  

        //tr4
        var svg4 = $('#svg4').svg('get'); 
        <?php echo "var tr4 = '" . Yii::app()->request->baseUrl . "/theme/images/tr4.svg"."'\n"?>
        svg4.load(tr4, {fill:'yellow'});  

        //tr5
        var svg5 = $('#svg5').svg('get'); 
        <?php echo "var tr5 = '" . Yii::app()->request->baseUrl . "/theme/images/tr5.svg"."'\n"?>
        svg5.load(tr5, {fill:'yellow'});  

        $('#svg1').click(function (){
            $(this).css('border','2px solid blue');
            $('#svg2').css('border', 'none');
            $('#svg3').css('border', 'none');
            $('#svg4').css('border', 'none');
            $('#svg5').css('border', 'none');
        });

        $('#svg2').click(function (){
            $(this).css('border','2px solid blue');
            $('#svg1').css('border', 'none');
            $('#svg3').css('border', 'none');
            $('#svg4').css('border', 'none');
            $('#svg5').css('border', 'none');
        });

        $('#svg3').click(function (){
            $(this).css('border','2px solid blue');
            $('#svg1').css('border', 'none');
            $('#svg2').css('border', 'none');
            $('#svg4').css('border', 'none');
            $('#svg5').css('border', 'none');
        });

        $('#svg4').click(function (){
            $(this).css('border','2px solid blue');
            $('#svg1').css('border', 'none');
            $('#svg2').css('border', 'none');
            $('#svg3').css('border', 'none');
            $('#svg5').css('border', 'none');
        });

        $('#svg5').click(function (){
            $(this).css('border','2px solid blue');
            $('#svg1').css('border', 'none');
            $('#svg2').css('border', 'none');
            $('#svg3').css('border', 'none');
            $('#svg4').css('border', 'none');
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