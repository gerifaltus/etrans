<style type="text/css">
    #opcionesStoreProduct-form:hover { cursor: pointer;}
    #opcionesStoreProduct-form { z-index: 1; top:200px; right: 200px}
    .marginAlamacenes {font-size: 0.8em;}
    .sinpadding{padding: 2px !important;}
    .lbl_existencias_radio {padding-left: 2px !important;}
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
                                <img id="img_layout" src="<?php echo Yii::app()->request->baseUrl ?>/theme/images/layout_exist_i1.svg">
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
                                        <td>TLC1.01.02.1.A0106.3</td>
                                    </tr>
                                    <tr>
                                        <td>ABC123456789</td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>10/Dic/2014</td>
                                        <td>Recepci&oacute;n</td>
                                        <td>19/Dic/2015</td>
                                        <td>TLC1.01.02.1.A0106.4</td>
                                    </tr>
                                    <tr>
                                        <td>ABC123456789</td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>10/Dic/2014</td>
                                        <td>Recepci&oacute;n</td>
                                        <td>19/Dic/2015</td>
                                        <td>TLC1.01.02.1.A0106.5</td>
                                    </tr>
                                    <tr>
                                        <td>ABC123456789</td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>10/Dic/2014</td>
                                        <td>Recepci&oacute;n</td>
                                        <td>19/Dic/2015</td>
                                        <td>TLC1.01.02.1.A0106.6</td>
                                    </tr>
                                    <tr>
                                        <td>ABC123456789</td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>10/Dic/2014</td>
                                        <td>Recepci&oacute;n</td>
                                        <td>19/Dic/2015</td>
                                        <td>TLC1.01.02.1.A0106.7</td>
                                    </tr>
                                    <tr>
                                        <td>ABC123456789</td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>10/Dic/2014</td>
                                        <td>Recepci&oacute;n</td>
                                        <td>19/Dic/2015</td>
                                        <td>TLC1.01.02.1.A0106.8</td>
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
            <div class="col-xs-12 col-sm-2" style="padding: 5px;">
                <div class="control-group">
                    <label class="control-label bolder blue">Niveles</label>
                    <div class="radio">
                        <label class="lbl_existencias_radio">
                            <input name="form-field-radio" type="radio" class="ace" id="radio1" />
                            <span class="lbl"> 1</span>
                        </label>
                        <label class="lbl_existencias_radio">
                            <input name="form-field-radio" type="radio" class="ace" id="radio4"/>
                            <span class="lbl"> 4</span>
                        </label>
                    </div>

                    <div class="radio">
                        <label class="lbl_existencias_radio">
                            <input name="form-field-radio" type="radio" class="ace" id="radio2"/>
                            <span class="lbl"> 2</span>
                        </label>
                        <label class="lbl_existencias_radio">
                            <input name="form-field-radio" type="radio" class="ace" id="radio5"/>
                            <span class="lbl"> 5</span>
                        </label>
                    </div>

                    <div class="radio">
                        <label class="lbl_existencias_radio">
                            <input name="form-field-radio" type="radio" class="ace" id="radio3"/>
                            <span class="lbl"> 3</span>
                        </label>
                        <label class="lbl_existencias_radio">
                            <input name="form-field-radio" type="radio" class="ace" id="radio6"/>
                            <span class="lbl"> 6</span>
                        </label>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-10" style="">
                <div class="col-xs-12 col-sm-6" style="">
                    <form  class="form-horizontal" role="form">
                        <div class="form-group form-group-sm">
                            <label for="exampleInputEmail1" class="control-label" style="font-size:12px;">Cliente</label>
                            <select id="form-field-select-1" class="form-control">
                                <option value="">Procter & Gamber</option>
                                <option value="">Bacardi</option>
                            </select>

                            <label for="exampleInputEmail1" class="control-label" style="font-size:12px;">C&oacute;digo</label>
                            <select id="form-field-select-1" class="form-control">
                                <option value="">1324354657897</option>
                                <option value="">0998765432214</option>
                                <option value="">5476879843321</option>
                            </select>

                            <label for="exampleInputEmail1" class="control-label" style="font-size:12px;">Item</label>
                            <select id="form-field-select-1" class="form-control">
                                <option value="">1324354657897</option>
                                <option value="">09987  65432214</option>
                                <option value="">5476879843321</option>
                            </select>
                        </div>
                        <!--<div class="form-group form-group-sm">
                            <label for="exampleInputEmail1" class="control-label form-group-sm">C&oacute;digo</label>
                            <select id="form-field-select-1" class="form-control">
                                <option value="">C&oacute;digo</option>
                                <option value="">1324354657897</option>
                                <option value="">0998765432214</option>
                                <option value="">5476879843321</option>
                            </select>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="exampleInputEmail1" class="control-label">Item</label>
                            <select id="form-field-select-1" class="form-control">
                                <option value="">Item</option>
                                <option value="">1324354657897</option>
                                <option value="">0998765432214</option>
                                <option value="">5476879843321</option>
                            </select>
                        </div>-->
                    </form>
                </div>
                <div class="col-xs-12 col-sm-6" style="">
                    <div class="control-group form-group-sm">
                        <div class="checkbox">
                            <label class="lbl_existencias_radio">
                                <input name="form-field-checkbox" class="ace" type="checkbox" id="chk_vencimiento">
                                <span class="lbl"> Ver Vencimientos</span>
                            </label>
                        </div>
                        <!-- /section:custom/checkbox -->
                    </div>
                    <div class="clearfix">
                        <div style="display:block;">
                            <span class="label label-lg" style="background-color: green !important;">Normal</span>
                            <div class="space-2"></div>
                            <span class="label label-lg" style="background-color: yellow !important; color: #000;">Proxima a Vencer</span>
                            <div class="space-2"></div>
                            <span class="label label-lg" style="background-color: red !important;">Vencida</span>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="control-group">
                        <a href="#" class="btn btn-info ">
                            Limpiar
                        </a>
                    </div>
                    <!--<form class="form-inline">
                        <!--<input class="input-small" type="text">--
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
                    </form>-->
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
            height: 230,
            width: 550,
        });

        /*var img1 = 'layout_exist_i1.svg';
        var img2 = 'layout_exist_i2.svg';
        var img3 = 'layout_exist_i3.svg';
        var img4 = 'layout_exist_i4.svg';
        var img5 = 'layout_exist_i5.svg';
        var img6 = 'layout_exist_i6.svg';
        var img1Venc = 'layout_exist_i1_venc.svg';
        */

        $('#btnShowEmergente').click(function () {
            $("#dialog-message").dialog({
                show: "blind",
                hide: "explode",
            });
        });

        $("#radio1").click(function (){
            $("#niveles_layout").html('<strong>NIVEL 1</strong>');
            $("#img_layout").attr("src", arrLoadImages[0].src); 
        });

        $("#radio2").click(function (){
            $("#niveles_layout").html('<strong>NIVEL 2</strong>');
            $("#img_layout").attr("src", arrLoadImages[1].src); 
        });

        $("#radio3").click(function (){
            $("#niveles_layout").html('<strong>NIVEL 3</strong>');
            $("#img_layout").attr("src", arrLoadImages[2].src); 
        });

        $("#radio4").click(function (){
            $("#niveles_layout").html('<strong>NIVEL 4</strong>');
            $("#img_layout").attr("src", arrLoadImages[3].src); 
        });

        $("#radio5").click(function (){
            $("#niveles_layout").html('<strong>NIVEL 5</strong>');
            $("#img_layout").attr("src", arrLoadImages[4].src); 
        });

        $("#radio6").click(function (){
            $("#niveles_layout").html('<strong>NIVEL 6</strong>');
            $("#img_layout").attr("src", arrLoadImages[5].src); 
        });

        //boton para hacer aparecer el grid con la informacion
        $( "#btn_layout" ).click(function() {
            $("#div_layout").toggle( "slide", 500 );
            $("#div_grid").toggle( "slide", 500 );
        });

        $("#chk_vencimiento").click(function () {
            $("#img_layout").attr("src", arrLoadImages[6].src);
        });


        //function para cargar imagenes 

        var path = '/pptwarehouse/pptwarehouse/theme/images/';
        var arrImages = ['layout_exist_i1.svg', 'layout_exist_i2.svg', 'layout_exist_i3.svg', 
        'layout_exist_i4.svg', 'layout_exist_i5.svg', 'layout_exist_i6.svg', 'layout_exist_i1_venc.svg']
        var arrLoadImages = [];

        var i = 0;
        function cargarImagenes()
        {
            for(i in arrImages){
               arrLoadImages[i] = new Image();
               arrLoadImages[i].src = path+arrImages[i];
           }
        }

        cargarImagenes();

    });
</script>