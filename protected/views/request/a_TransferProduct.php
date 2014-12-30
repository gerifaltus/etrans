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
                        Traspaso de Mercanc&iacute;a | 
                        <a href="#" class="btn btn-yellow btn-xs" id="btnShowEmergente">
                            <i class="ace-icon fa fa-external-link bigger-130"></i> Opciones
                        </a>
                        <a href="#" class="btn btn-pink btn-xs" id="btn_layout">
                            <i class="ace-icon fa fa-sign-out bigger-130"></i> Layout/Grid
                        </a>
                    </div>
                    <div class="row">
                        <!-- div para mostrar el layuot y tabla de resultados de la busqueda-->
                        <div class="col-xs-12" id="div_layout">
                            <div class="col-xs-12" style="height: 100px; overflow: auto; display:block;">
                                <table id="store_table" class="table table-striped table-bordered" style="font-size:10px; margin:0px; background-color:#FFF">
                                    <thead>
                                        <tr>
                                            <th>Sel</th>
                                            <th>C&oacute;digo</th>
                                            <th>Item</th>
                                            <th>Cliente</th>
                                            <th>Descripci&oacute;n</th>
                                            <th>Cajas</th>
                                            <th>PxC</th>
                                            <th>Piezas</th>
                                            <th>P. Unitario</th>
                                            <th>Lote</th>
                                            <th>Caducidad</th>
                                            <th>Ruta</th>
                                            <th>Vencimiento</th>
                                            <th>Traspaso</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            <label class="lbl_existencias_radio">
                                                <input name="form-field-checkbox" class="ace" type="checkbox" id="ubic_actual">
                                                <span class="lbl"></span>
                                            </label>
                                            </td>
                                            <td>1324354657897</td>
                                            <td>43657687432</td>
                                            <td>Protecr & Gamber</td>
                                            <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                            <td>20</td>
                                            <td>40</td>
                                            <td>800</td>
                                            <td>8.52</td>
                                            <td>HG6543</td>
                                            <td>10Z/Dic/2014</td>
                                            <td>TLC1.01.02.1.A0106.1</td>
                                            <td>19/Dic/2015</td>
                                            <td>
                                                <div class="hidden-sm hidden-xs action-buttons">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-plus bigger-130"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <label class="lbl_existencias_radio">
                                                <input name="form-field-checkbox" class="ace" type="checkbox" id="ubic_actual2">
                                                <span class="lbl"></span>
                                            </label>
                                            </td>
                                            <td>1324354657897</td>
                                            <td>43657687432</td>
                                            <td>Procter & Gamber</td>
                                            <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                            <td>30</td>
                                            <td>50</td>
                                            <td>1500</td>
                                            <td>9.12</td>
                                            <td>UJ7809</td>
                                            <td>15/Dic/2014</td>
                                            <td>TLC1.01.02.1.A0106.2</td>
                                            <td>19/Dic/2015</td>
                                            <td>
                                            <div class="hidden-sm hidden-xs action-buttons">
                                                <a href="#" class="blue">
                                                    <i class="ace-icon fa fa-plus bigger-130"></i>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <label class="lbl_existencias_radio">
                                                <input name="form-field-checkbox" class="ace" type="checkbox" id="ubic_actual3">
                                                <span class="lbl"></span>
                                            </label>
                                            </td>
                                            <td>1324354657897</td>
                                            <td>43657687432</td>
                                            <td>Procter & Gamber</td>
                                            <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                            <td>40</td>
                                            <td>60</td>
                                            <td>2400</td>
                                            <td>10.32</td>
                                            <td>UJ7809</td>
                                            <td>10/Dic/2014</td>
                                            <td>TLC1.01.02.1.A0106.3</td>
                                            <td>50/Dic/2015</td>
                                            <td>
                                            <div class="hidden-sm hidden-xs action-buttons">
                                                <a href="#" class="blue">
                                                    <i class="ace-icon fa fa-plus bigger-130"></i>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div style="margin:0px 0px;" version="1.1" class="col-xs-12 col-sm-12 hasSVG" id="svgLayoutArea">
                                <div class="table-header btn-warning">
                                    <h3 class="text-center" id="niveles_layout" style="margin-top:5px; margin-bottom:5px;"><strong>NIVEL 1</strong></h3>
                                </div>
                                <div class="text-center" style="heigth: 700px;">
                                    <img id="img_layout" src="<?php echo Yii::app()->request->baseUrl ?>/theme/images/layout_exist_i1.svg">
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <!-- grid para los articulos seleccionados en la ventana previa, en esta vista se aplica la nueva ubicacion de los articulos-->
                        <div class="col-xs-12" id="div_grid" style="display:none;">
                            <div id="tbl_grid">
                            <table id="table_" class="table table-striped table-bordered" style="font-size:10px; margin:0px; background-color:#FFF">
                                <thead>
                                    <tr>
                                        <th>Sel</th>
                                        <th>C&oacute;digo</th>
                                        <th>Item</th>
                                        <th>Cliente</th>
                                        <th>Descripci&oacute;n</th>
                                        <th>Cajas</th>
                                        <th>PxC</th>
                                        <th>Piezas</th>
                                        <th>P. U.</th>
                                        <th>Lote</th>
                                        <th>Caducidad</th>
                                        <th>Ruta Actual</th>
                                        <th>Ruta Nueva</th>
                                        <th>Vencimiento</th>
                                        <th>Nuevo Venc.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><label class="lbl_existencias_radio">
                                                <input name="form-field-checkbox" class="ace" type="checkbox" id="ubic_nueva">
                                                <span class="lbl"></span>
                                            </label></td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Protecr & Gamber</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>20</td>
                                        <td>40</td>
                                        <td>800</td>
                                        <td>8.52</td>
                                        <td>HG6543</td>
                                        <td>10/Dic/2014</td>
                                        <td>TLC1.01.02.1.A0106.1</td>
                                        <td>
                                            <div class="hidden-sm hidden-xs action-buttons">
                                                <!--<span class="label label-info arrowed" stylñe="font-size:10px;">TLC1.01.02.1.B0106.1</span>-->
                                                <a href="#" class="blue">
                                                    <i class="ace-icon fa fa-plus bigger-130"></i>
                                                </a>
                                                <a href="#" class="pink">
                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                </a>&nbsp;&nbsp;
                                            </div>
                                        </td>
                                        <td>19/Dic/2015</td>
                                        <td><input name="form-field-checkbox" class="ace" type="text" size="5"></td>
                                    </tr>
                                    <tr>
                                    <td><label class="lbl_existencias_radio">
                                            <input name="form-field-checkbox" class="ace" type="checkbox" id="ubic_nueva2">
                                            <span class="lbl"></span>
                                        </label></td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Procter & Gamber</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>30</td>
                                        <td>50</td>
                                        <td>1500</td>
                                        <td>9.12</td>
                                        <td>UJ7809</td>
                                        <td>15/Dic/2014</td>
                                        <td>TLC1.01.02.1.A0106.2</td>
                                        <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <span class="label label-info arrowed" style="font-size:10px;">TLC1.01.02.1.C0106.2</span>
                                            <a href="#" class="blue">
                                                <i class="ace-icon fa fa-plus bigger-130"></i>
                                            </a>
                                            <a href="#" class="pink">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>&nbsp;&nbsp;
                                        </div>
                                        </td>
                                        <td>19/Dic/2015</td>
                                        <td><input name="form-field-checkbox" class="ace" type="text" size="5"></td>
                                    </tr>

                                    <tr>
                                        <td><label class="lbl_existencias_radio">
                                                <input name="form-field-checkbox" class="ace" type="checkbox" id="ubic_nueva3">
                                                <span class="lbl"></span>
                                            </label></td>
                                        <td>1324354657897</td>
                                        <td>43657687432</td>
                                        <td>Procter & Gamber</td>
                                        <td>Pasta de Tomate "Del Campo" lata 174g</td>
                                        <td>40</td>
                                        <td>60</td>
                                        <td>2400</td>
                                        <td>10.32</td>
                                        <td>UJ7809</td>
                                        <td>10/Dic/2014</td>
                                        <td>TLC1.01.02.1.A0106.3</td>
                                        <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <span class="label label-info arrowed" style="font-size:10px;">TLC1.01.02.1.D0106.1</span>
                                            <a href="#" class="blue">
                                                <i class="ace-icon fa fa-plus bigger-130"></i>
                                            </a>
                                            <a href="#" class="pink">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>&nbsp;&nbsp;&nbsp;
                                        </div>
                                        </td>
                                        <td>05/Dic/2015</td>
                                        <td><input name="form-field-checkbox" class="ace" type="text" size="5"></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div style="margin:0px 0px;" version="1.1" class="col-xs-12 col-sm-12 hasSVG" id="svgLayoutArea2">
                                <div class="table-header btn-warning">
                                    <h3 class="text-center" id="niveles_layout" style="margin-top:5px; margin-bottom:5px;"><strong>NIVEL 1</strong></h3>
                                </div>
                                <div class="text-center" style="heigth: 700px;">
                                    <img id="img_layout2" src="<?php echo Yii::app()->request->baseUrl ?>/theme/images/layout_exist_i1.svg">
                                </div>
                            </div>
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
            <div class="col-xs-12 col-sm-3" style="padding: 5px;">
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
            <div class="col-xs-12 col-sm-9" style="">
                <div class="col-xs-12 col-sm-12" style="">
                    <form  role="form">
                        <div class="form-group form-group-sm has-feedback" style="margin-bottom:5px;">
                            <label for="exampleInputEmail1" class="control-label" style="font-size:12px;">C&oacute;digo</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                            <span class="glyphicon glyphicon-search form-control-feedback blue" aria-hidden="true"></span>
                        </div>
                        <div class="form-group form-group-sm has-feedback" style="margin-bottom:5px;">
                            <label for="exampleInputEmail1" class="control-label" style="font-size:12px;">Ruta</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                            <span class="glyphicon glyphicon-search form-control-feedback blue" aria-hidden="true"></span>
                        </div>
                        <div class="form-group form-group-sm has-feedback" style="margin-bottom:5px;">
                            <label for="exampleInputEmail1" class="control-label" style="font-size:12px;">Descripci&oacute;n</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                            <span class="glyphicon glyphicon-search form-control-feedback blue" aria-hidden="true"></span>
                        </div>
                    </form>
                    <div class="control-group">
                        <a href="#" class="btn btn-info ">
                            Buscar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- #dialog-message -->

<div id="dialog-message2" title="Seleccionar Nueva Ubicaci&oacute;n">
    <div class="row">
        <div class="col-xs-12 col-sm-12" style="padding: 0px !important;">
            <div class="col-xs-12 col-sm-4 " style="padding: 5px;">
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
            <div class="col-xs-12 col-sm-8">
                <label class="control-label bolder blue">Identificador</label>
                <div class="clearfix">
                    <div style="display:block;">
                        <span class="label label-lg label-info">Ubicaci&oacute;n Actual</span>
                        <div class="space-2"></div>
                        <span class="label label-lg label-success">Disponible</span>
                        <div class="space-2"></div>
                        <span class="label label-lg label-warning">Ocupado</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- #dialog-message -->



<!-- inline scripts related to this page -->
<script type="text/javascript">
    /* inicializar el datatables para CGridView*/
    $(document).ready(function() {
        //codigo para hacer emergente y estatica la tabla inferior en donde aparecen los articulos que se van seleccionando de la tabla superior
        /*
        $(window).scroll(function() {
        var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();

          if (scrollBottom > 1){
          //alert(scrollBottom);  
            $('#tbl_inferior').addClass("sticky");
          }
          else{
            $('#tbl_inferior').removeClass("sticky");
          }
        });
        */

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
            height: 290,
            width: 350,
        });


        $("#dialog-message2").dialog({
            autoOpen: false,
            height: 200,
            width: 290,
        });


        $("#dialog-message").dialog({
            show: "blind",
        });


        $('#btnShowEmergente').click(function () {
            //mostrar ocultar ventana emergente de cada layout
            var oculto = $("#div_layout").css("display");
            if(oculto === 'block'){
                $('#dialog-message').dialog( "open");
                $('#dialog-message2').dialog( "close");
            }else{
                $('#dialog-message').dialog( "close");
                $('#dialog-message2').dialog( "open");
            }
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

        $("#ubic_actual").click(function (){
            $("#img_layout").attr("src", arrLoadImages[6].src); 
        });
        
        $("#ubic_actual2").click(function (){
            $("#img_layout").attr("src", arrLoadImages[7].src); 
        });

        $("#ubic_actual3").click(function (){
            $("#img_layout").attr("src", arrLoadImages[8].src); 
        });


        $("#ubic_nueva").click(function (){
            $("#img_layout2").attr("src", arrLoadImages[9].src); 
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
        'layout_exist_i4.svg', 'layout_exist_i5.svg', 'layout_exist_i6.svg', 
        'layout_ubic_i1.svg', 'layout_ubic_i2.svg', 'layout_ubic_i3.svg', 'layout_nva_ubic_i1.svg']
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