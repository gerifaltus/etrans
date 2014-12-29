<style type="text/css">
    #opcionesStoreProduct-form:hover { cursor: pointer;}
    #opcionesStoreProduct-form { z-index: 1; top:200px; right: 200px}
    .marginAlamacenes {font-size: 0.8em;}
    .sinpadding: {padding: 0px !important;}
</style>
<div class="page-content-area">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">

                <div class="col-xs-12" id="contentStoreProduct">
                    <div class="table-header">
                        Ubicar Mercanc&iacute;a | 
                        <a href="#" class="btn btn-yellow btn-xs" id="btnShowEmergente">
                            <i class="ace-icon fa fa-external-link bigger-130"></i> Opciones
                        </a>
                        <a href="#" class="btn btn-pink btn-xs" id="btn_layout">
                            <i class="ace-icon fa fa-sign-out bigger-130"></i> Layout/Grid
                        </a>
                    </div>
                    <!-- div para mostrar el layuot -->
                    <div class="col-xs-12" id="div_layout">
                        <div style="margin:10px 0px;" version="1.1" class="col-xs-12 col-sm-12 hasSVG" id="svgLayoutArea">
                        <div class="table-header btn-warning">
                            <h3 class="text-center" id="niveles_layout"><strong>NIVEL 1</strong></h3>
                        </div>
                        <div class="text-center" style="heigth: 700px;">
                            <img id="img_layout" src="<?php echo Yii::app()->request->baseUrl ?>/theme/images/layout_ok_i1.svg">
                        </div>
                        </div>
                    </div>
                    <!-- grid para mostrar detalles del layout-->
                    <div class="col-xs-12" id="div_grid" style="display:none;">
                        <div>
                            <table id="store_table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Etiqueta</th>
                                        <th>C&oacute;digo</th>
                                        <th>Item</th>
                                        <th>Descripci&oacute;n</th>
                                        <th>Vencimiento</th>
                                        <th>Ubicaci&oacute;n</th>
                                        <th>Caducidad</th>
                                        <th>Ruta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ABC123456789</td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>10/Dic/2014</td>
                                        <td>Recepci&oacute;n</td>
                                        <td>19/Dic/2015</td>
                                        <td>TLC1.01.02.1.A0106.1</td>
                                    </tr>
                                    <tr>
                                        <td>ABC123456789</td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>10/Dic/2014</td>
                                        <td>Recepci&oacute;n</td>
                                        <td>19/Dic/2015</td>
                                        <td>TLC1.01.02.1.A0106.2</td>
                                    </tr>
                                    <tr>
                                        <td>ABC123456789</td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>10/Dic/2014</td>
                                        <td>Recepci&oacute;n</td>
                                        <td>19/Dic/2015</td>
                                        <td>TLC1.01.02.1.A0106.1</td>
                                    </tr>
                                    <tr>
                                        <td>ABC123456789</td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>10/Dic/2014</td>
                                        <td>Recepci&oacute;n</td>
                                        <td>19/Dic/2015</td>
                                        <td>TLC1.01.02.1.A0106.2</td>
                                    </tr>
                                    <tr>
                                        <td>ABC123456789</td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>10/Dic/2014</td>
                                        <td>Recepci&oacute;n</td>
                                        <td>19/Dic/2015</td>
                                        <td>TLC1.01.02.1.A0106.1</td>
                                    </tr>
                                    <tr>
                                        <td>ABC123456789</td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>10/Dic/2014</td>
                                        <td>Recepci&oacute;n</td>
                                        <td>19/Dic/2015</td>
                                        <td>TLC1.01.02.1.A0106.2</td>
                                    </tr>
                                    <tr>
                                        <td>ABC123456789</td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>10/Dic/2014</td>
                                        <td>Recepci&oacute;n</td>
                                        <td>19/Dic/2015</td>
                                        <td>TLC1.01.02.1.A0106.1</td>
                                    </tr>
                                    <tr>
                                        <td>ABC123456789</td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>10/Dic/2014</td>
                                        <td>Recepci&oacute;n</td>
                                        <td>19/Dic/2015</td>
                                        <td>TLC1.01.02.1.A0106.1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content-area -->


<div id="dialog-message" title="Opciones para Ubicar Mercanc&iacute;a">
    <div class="row">
        <div class="col-xs-12 col-sm-12" style="padding: 0px !important;">
            <div class="col-xs-12 col-sm-3" style="padding: 0px !important;">
                <div class="control-group">
                    <label class="control-label bolder blue">Niveles</label>
                    <div class="radio">
                        <label>
                            <input name="form-field-radio" type="radio" class="ace" id="radio1" />
                            <span class="lbl"> 1</span>
                        </label>
                        <label>
                            <input name="form-field-radio" type="radio" class="ace" id="radio4"/>
                            <span class="lbl"> 4</span>
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input name="form-field-radio" type="radio" class="ace" id="radio2"/>
                            <span class="lbl"> 2</span>
                        </label>
                        <label>
                            <input name="form-field-radio" type="radio" class="ace" id="radio5"/>
                            <span class="lbl"> 5</span>
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input name="form-field-radio" type="radio" class="ace" id="radio3"/>
                            <span class="lbl"> 3</span>
                        </label>
                        <label>
                            <input name="form-field-radio" type="radio" class="ace" id="radio6"/>
                            <span class="lbl"> 6</span>
                        </label>
                    </div>
                </div>  
            </div>
            <div class="col-xs-12 col-sm-9" style="padding: 0px !important;">
                <div class="col-sm-12" style="padding: 0px !important;">
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
                            <strong>No. Ingreso:</strong><br>
                            123456
                            <br />
                            <br />
                            <strong>Fecha:</strong><br>
                            12/Dic/2014
                        </p> 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <form class="form-inline">
                        <!--<input class="input-small" type="text">-->
                        <select class="col-sm-4" id="form-field-select-1">
                            <option value="">C&oacute;digo</option>
                            <option value="">1324354657897</option>
                            <option value="">0998765432214</option>
                            <option value="">5476879843321</option>
                        </select>
                        <select class="col-sm-4" id="form-field-select-1">
                            <option value="">Item</option>
                            <option value="">43657687432</option>
                            <option value="">34345456577</option>
                            <option value="">52432455465</option>
                        </select>

                        <button type="button" class="btn btn-info btn-sm">
                            <i class="ace-icon fa fa-key bigger-110"></i>Aplicar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- #dialog-message -->



<!-- inline scripts related to this page -->
<script type="text/javascript">
    /* inicializar el datatables para CGridView*/
    $(document).ready(function() {
        $('#confirm_request_table').DataTable({
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

        $("#dialog-message").dialog({
            height: 180,
            width: 550,
        });

        var img1 = '/pptwarehouse/pptwarehouse/theme/images/layout_ok_i1.svg';
        var img2 = '/pptwarehouse/pptwarehouse/theme/images/layout_ok_i2.svg';
        var img3 = '/pptwarehouse/pptwarehouse/theme/images/layout_ok_i3.svg';

        $('#btnShowEmergente').click(function () {
            $("#dialog-message").dialog({
                show: "blind",
                hide: "explode",
            });
        });

        $("#radio1").click(function (){
            $("#niveles_layout").html('<strong>NIVEL 1</strong>');
            $("#img_layout").attr("src", img1); 
        });

        $("#radio2").click(function (){
            $("#niveles_layout").html('<strong>NIVEL 2</strong>');
            $("#img_layout").attr("src", img1); 
        });

        $("#radio3").click(function (){
            $("#niveles_layout").html('<strong>NIVEL 3</strong>');
            $("#img_layout").attr("src", img1); 
        });

        $("#radio4").click(function (){
            $("#niveles_layout").html('<strong>NIVEL 4</strong>');
            $("#img_layout").attr("src", img2); 
        });

        $("#radio5").click(function (){
            $("#niveles_layout").html('<strong>NIVEL 5</strong>');
            $("#img_layout").attr("src", img3); 
        });

        $("#radio6").click(function (){
            $("#niveles_layout").html('<strong>NIVEL 6</strong>');
            $("#img_layout").attr("src", img3); 
        });

        //boton para hacer aparecer el grid con la informacion
        $( "#btn_layout" ).click(function() {
            $("#div_layout").toggle( "slide", 500 );
            $("#div_grid").toggle( "slide", 500 );
        });

    });
</script>