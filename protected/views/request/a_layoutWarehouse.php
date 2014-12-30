<div class="page-content-area">
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="widget-box">
                <div class="widget-header widget-header-blue widget-header-flat">
                    <h4 class="widget-title lighter">Generar Layout de Almac&eacute;n</h4>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <!-- #section:plugins/fuelux.wizard -->
                        <div id="fuelux-wizard" data-target="#step-container" style="height: 48px; margin-top: -13px;">
                            <!-- #section:plugins/fuelux.wizard.steps -->
                            <ul class="wizard-steps">
                                <li data-target="#step1" class="active">
                                    <span class="step">1</span>
                                    <span class="title">Datos Iniciales</span>
                                </li>

                                <li data-target="#step2">
                                    <span class="step">2</span>
                                    <span class="title">Modelado del Layout</span>
                                </li>

                                <li data-target="#step3">
                                    <span class="step">3</span>
                                    <span class="title">Resumen del Layout</span>
                                </li>
                            </ul>

                            <!-- /section:plugins/fuelux.wizard.steps -->
                        </div>

                        <hr />

                        <!-- #section:plugins/fuelux.wizard.container -->
                        <div class="step-content pos-rel" id="step-container">
                            <!-- <h3 class="lighter block green">Ingrese la siguiente informaci&oacute;n</h3>-->
                            <div class="step-pane active" id="step1">
                                <div class="col-xs-12 col-sm-4">
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                <table id="layout_inicial" class="table table-striped table-bordered table-hover" style='width:500px;'>
                                    <thead>
                                        <tr>
                                            <th>Categor&iacute;a</th>
                                            <th>Cantidad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Complejo</td>
                                            <td><select class="input-medium" id="zona" name="zona">
                                                            <option value="toluca001">TLC01 - TOLUCA COL&Oacute;N </option>
                                                            <option value="portoprint001">QRO01 - QUERETARO CENTRO</option>
                                                            <option value="portoprint002">MDF01 - MEXICO DF 1</option>
                                                            <option value="portoprint003">MDF02 - MEXICO DF 2</option>
                                                        </select></td>
                                        </tr>   
                                        <tr>
                                            <td>Almacen</td>
                                            <td><input type="text" name="RequestForm[]" id="zonas" /></td>
                                        </tr>   
                                        <tr>
                                            <td>Zonas</td>
                                            <td><input type="text" name="RequestForm[]" id="zonas" /></td>
                                        </tr>   
                                        <tr>
                                            <td>Areas</td>
                                            <td><input type="text" name="RequestForm[]" id="areas" /></td>
                                        </tr>
                                        <tr>
                                            <td>Racks</td>
                                            <td><input type="text" name="RequestForm[]" id="racks" /></td>
                                        </tr>   
                                        <tr>
                                            <td>Bloques</td>
                                            <td><input type="text" name="RequestForm[]" id="bloques" /></td>
                                        </tr>
                                        <tr>
                                            <td>Recepci&oacute;n</td>
                                            <td><input type="text" name="RequestForm[]" id="bloques" /></td>
                                        </tr>   
                                        <tr>
                                            <td>Embarque</td>
                                            <td><input type="text" name="RequestForm[]" id="bloques" /></td>
                                        </tr>      
                                    </tbody>
                                </table>
                                
                            </div>
                            <div class="clearfix"> </div>
                            <div class="col-xs-12 col-sm-4">
                            </div>
                            </div>

                            <div class="step-pane" id="step2">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-10" style="border: 0px solid black;">
                                        <canvas id="container" width="1000" height="1000"></canvas>
                                    </div>
                                    <div class="col-xs-12 col-sm-2" style="border: 0px solid black;">
                                        <div style='border:0px solid black; width:auto; height:300px;'>
                                            <h4 class="blue">M&oacute;dulos del Layout</h4>
                                            <div class="form-group" id="zona" style="width:50px; height:50px; float:left; 
                                            margin: 0 0 0 20px; background-color:#ff8000; border:1px solid black; text-align:center;">
                                                <p>Zonas</p>
                                            </div>
                                            <div id="area" class="form-group" style="width:50px; height:50px; float:left; 
                                            margin: 0 0 0 20px; background-color:#00ff00; border:1px solid black; text-align:center;">
                                                <p>&Aacute;reas</p>
                                            </div>
                                            <div class="clearfix"> </div>

                                            <div class="space-8"> </div>
                                            
                                            <div id="rack" class="form-group" style="width:50px; height:50px; float:left; 
                                            margin: 0 0 0 20px; background-color:#0080ff; border:1px solid black; text-align:center;">
                                                <p>Racks</p>
                                            </div>
                                            <div id="bloque" class="form-group" style="width:50px; height:50px; float:left; 
                                            margin: 0 0 0 20px; background-color:#ff0000; border:1px solid black; text-align:center;">
                                                <p>Bloques</p>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <hr> 
                                        <div style='width:auto; height:300px;'>
                                            <h4 class="blue">Propiedades</h4>
                                            <h5 class="blue">Zona: </h5>
                                            <div id='prop_zonas' style='display:inline;'>
                                            <div class="form-group">
                                                <label class="control-label" for="almacen">Pertenece a</label>
                                                <div class="">
                                                    <div class="clearfix">
                                                        <select class="input-medium" id="almacen" name="almacen">
                                                            <option value="toluca001">TOLUCA 001</option>
                                                            <option value="portoprint001">PORTOPRINT 001</option>
                                                            <option value="portoprint002">PORTOPRINT 002</option>
                                                            <option value="portoprint003">PORTOPRINT 003</option>
                                                            <option value="portoprint004">PORTOPRINT 004</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label" for="almacen">Nombre</label>
                                                <div class="">
                                                    <div class="clearfix">
                                                        <select class="input-medium" id="nomAlmacen" name="nomAlmacen">
                                                            <option value="toluca001">Almacenamiento</option>
                                                            <option value="portoprint001">Recepci&oacute;n</option>
                                                            <option value="portoprint002">Cuarentena</option>
                                                            <option value="portoprint003">Maquila</option>
                                                            <option value="portoprint004">Alto Valor</option>
                                                            <option value="toluca001">Merma</option>
                                                            <option value="portoprint001">Transito</option>
                                                            <option value="portoprint002">Picking</option>
                                                            <option value="portoprint003">Embarque</option>
                                                            <option value="portoprint004">Devoluci&oacute;n</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div id='prop_area'>
                                                <h5 class="blue">&Aacute;rea: </h5>
                                            <div class="form-group">
                                                <label class="control-label" for="almacen">Pertenece a (Zona)</label>
                                                <div class="">
                                                    <div class="clearfix">
                                                        <select class="input-medium" id="zona" name="zona">
                                                            <option value="toluca001">Almacenamiento</option>
                                                            <option value="portoprint001">Recepci&oacute;n</option>
                                                            <option value="portoprint002">Cuarentena</option>
                                                            <option value="portoprint003">Maquila</option>
                                                            <option value="portoprint004">Alto Valor</option>
                                                            <option value="toluca001">Merma</option>
                                                            <option value="portoprint001">Transito</option>
                                                            <option value="portoprint002">Picking</option>
                                                            <option value="portoprint003">Embarque</option>
                                                            <option value="portoprint004">Devoluci&oacute;n</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="almacen">Nombre</label>
                                                <div class="">
                                                    <div class="clearfix">
                                                        <select class="input-medium" id="area" name="area">
                                                            <option value="toluca001">Baja Rotación</option>
                                                            <option value="portoprint001">Media Rotación</option>
                                                            <option value="portoprint002">Alta Rotación</option>
                                                            <option value="portoprint003">Recepci&oacute;n 1</option>
                                                            <option value="portoprint004">Recepci&oacute;n 2</option>
                                                            <option value="portoprint004">Alto valor 1</option>
                                                            <option value="portoprint004">Alto valor 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="nombre">Color:</label>
                                                <div class="">
                                                    <div class="clearfix">
                                                        <input type="text" name="colorArea" id="colorArea" class="" />
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div id='prop_rack' style="display:inline;">
                                                <h5 class="blue">Rack: </h5>
                                            <div class="form-group">
                                                <label class="control-label" for="almacen">Pertenece a (&aacute;rea)</label>
                                                <div class="">
                                                    <div class="clearfix">
                                                        <select class="input-medium" id="almacen" name="almacen">
                                                            <option value="toluca001">Baja Rotación</option>
                                                            <option value="portoprint001">Media Rotación</option>
                                                            <option value="portoprint002">Alta Rotación</option>
                                                            <option value="portoprint003">Recepci&oacute;n 1</option>
                                                            <option value="portoprint004">Recepci&oacute;n 2</option>
                                                            <option value="portoprint004">Alto valor 1</option>
                                                            <option value="portoprint004">Alto valor 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="nombre">Nombre:</label>
                                                <div class="">
                                                    <div class="clearfix">
                                                        <input type="text" name="nombre" id="nombre" class="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="nombre">Posiciones X:</label>
                                                <div class="">
                                                    <div class="clearfix">
                                                        <input type="text" name="posX" id="posX" class="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="nombre">Posiciones Y:</label>
                                                <div class="">
                                                    <div class="clearfix">
                                                        <input type="text" name="posY" id="posY" class="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="nombre">Color:</label>
                                                <div class="">
                                                    <div class="clearfix">
                                                        <input type="text" name="colorRack" id="colorRack" class="" />
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="step-pane" id="step3">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-2">

                                    </div>
                                    <div class="widget-box col-xs-12 col-sm-8">
                                        <div class="widget-header">
                                            <h4 class="widget-title">Resumen del Layout</h4>
                                        </div>                                        
                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row"  style="font-weight: bolder;">
                                                        <div class="profile-info-name" style="width: 150px; font-weight: bolder;"> Complejo </div>

                                                        <div class="profile-info-value">
                                                            <span>TLC01 (TOLUCA)</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row" style="font-weight: bolder;">
                                                        <div class="profile-info-name" style="width: 150px; font-weight: bolder;"> Almac&eacute;n </div>

                                                        <div class="profile-info-value">
                                                            <span>01 (TLC0101)</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row" style="font-weight: bolder;">
                                                        <div class="profile-info-name" style="width: 200px; font-weight: bolder;">Zonas</div>

                                                        <div class="profile-info-value">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;"> Almacenamiento</div>

                                                        <div class="profile-info-value">
                                                            <span>TLC010101</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;"> Alto Valor </div>

                                                        <div class="profile-info-value">
                                                            <span>TLC010102</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;"> Recepci&oacute;n </div>

                                                        <div class="profile-info-value">
                                                            <span>TLC010103</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;"> Embarque </div>

                                                        <div class="profile-info-value">
                                                            <span>TLC010104</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row" style="font-weight: bolder;">
                                                        <div class="profile-info-name" style="width: 200px; font-weight: bolder;">&Aacute;reas</div>

                                                        <div class="profile-info-value">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;">Anden 1</div>

                                                        <div class="profile-info-value">
                                                            <span>TLC010301</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;">Anden 2</div>

                                                        <div class="profile-info-value">
                                                            <span>TLC010302</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;">Anden 3</div>

                                                        <div class="profile-info-value">
                                                            <span>TLC010303</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;">Anden 4</div>

                                                        <div class="profile-info-value">
                                                            <span>TLC010304</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;">Anden 5</div>

                                                        <div class="profile-info-value">
                                                            <span>TLC010305</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;">Alta Rotaci&oacute;n</div>

                                                        <div class="profile-info-value">
                                                            <span>TL1010101</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;">Media Rotaci&oacute;n</div>

                                                        <div class="profile-info-value">
                                                            <span>TL1010102</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;">Baja Rotaci&oacute;n</div>

                                                        <div class="profile-info-value">
                                                            <span>TL1010103</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- /section:plugins/fuelux.wizard.container -->
                        <hr />
                        <div class="wizard-actions">
                            <!-- #section:plugins/fuelux.wizard.buttons -->
                            <button class="btn btn-prev">
                                <i class="ace-icon fa fa-arrow-left"></i>
                                Prev
                            </button>

                            <button class="btn btn-success btn-next" data-last="Finish">
                                Next
                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                            </button>

                            <!-- /section:plugins/fuelux.wizard.buttons -->
                        </div>

                        <!-- /section:plugins/fuelux.wizard -->
                    </div><!-- /.widget-main -->
                </div><!-- /.widget-body -->
            </div><!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content-area -->
<script type="text/javascript">
    jQuery(function($) {
/*
        $('#id-input-file-2').ace_file_input({
            no_file: 'No File ...',
            btn_choose: 'Choose',
            btn_change: 'Change',
            droppable: false,
            onchange: null,
            thumbnail: false //| true | large
                    //whitelist:'gif|png|jpg|jpeg'
                    //blacklist:'exe|php'
                    //onchange:''
                    //
        });
*/

        $('#fuelux-wizard')
                .ace_wizard({
                    //step: 2 //optional argument. wizard will jump to step "2" at first
                            //inicializar el wizard, por default inicia en paso1
                })
                .on('change', function(e, info) {
                    //$("#ppt_calendar").datepicker("refresh");
                })
                .on('finished', function(e) {

                }).on('stepclick', function(e) {
            //e.preventDefault();//this will prevent clicking and selecting steps
        });

                $('#colorRack').simpleColor({
                    displayColorCode: true,
                    defaultColor:'#FFF',
                    livePreview: true
                });

                $('#colorArea').simpleColor({
                    displayColorCode: true,
                    defaultColor:'#FFF',
                    livePreview: true
                });

                $('#zona').click(function() {
                        var valorArea = 'Zona';
                        //$('#slAreas').append(new Option(valorArea, valorArea.toLowerCase()));
                        //$('#slSubAreas').append(new Option(valorArea, valorArea.toLowerCase()));
                        //$('#txtAreas').val('');

                        generarZona(valorArea);
                    });

                $('#area').click(function() {
                        var valorArea = 'Área';
                        //$('#slAreas').append(new Option(valorArea, valorArea.toLowerCase()));
                        //$('#slSubAreas').append(new Option(valorArea, valorArea.toLowerCase()));
                        //$('#txtAreas').val('');

                        generarArea(valorArea);
                    });

            $('#rack').click(function () {
                alert('rack');
                generarRack($('#posX').val(), $('#posY').val(), $('#colorRack').html());
                //alert('agrear areas');
            });

            $('#bloque').click(function () {
                generarBloque($('#posX').val(), $('#posY').val(), $('.simpleColorDisplay').html());
                //alert('agrear areas');
            });

                function generarZona(zona)
                {
                                 
                    var z = new fabric.Rect({
                          //  left: 400,
                          //  top: 100,
                            width: 100,
                            height: 100,
                            fill: '#fcfcfc',
                            //hasBorders: false,
                            stroke: '#000000',
                            //borderColor: "rgba(0,0,0,1)",
                            strokeWidth: 0.3,
                            //originX: 'left',
                            //originY: 'top',
                            id: 'z' + i,
                            opacity: 0.5,
                            strokeDashArray: [3, 3]
                        });

                    canvas.add(z);
                    canvas.add(new fabric.IText('Zona: '+zona, { 
                      fontFamily: 'arial',
                      fontSize: 15,
                      left: 50, 
                      top: 50 ,
                    }));
                }

                function generarArea()
                {
                    var color = $('#colorArea').val();
                    var a = new fabric.Rect({
                            width: 100,
                            height: 100,
                            fill: color,
                            //hasBorders: false,
                            stroke: '#000000',
                            //borderColor: "rgba(0,0,0,1)",
                            strokeWidth: 0.5,
                            //originX: 'left',
                            //originY: 'top',
                            id: 'a' + i,
                            opacity: 0.5,
                            strokeDashArray: [5, 5]
                        });

                    canvas.add(a);
                    canvas.add(new fabric.IText('Área: area', { 
                      fontFamily: 'arial',
                      fontSize: 15,
                      left: 50, 
                      top: 50 ,
                    }));
                }


                function generarRack(posX, posY, colorRack)
                {
                    
                    var w = 20;
                    var h = 20;
                    var offsetY = 0;
                    var x = posX; //posiciones X
                    var y = posY;
                    var color = colorRack;
                    alert()


                    var groupUnidades = new fabric.Group([], {id: 'unidad1', selectable: true, hasControls: true, originX: 'left', originY: 'center', borderColor: "rgba(0,0,0,1)", strokeWidth: 1});

                    for (i = 0; i < x; i++)
                    {
                        //rack A
                        offsetY = offsetY + h;
                        var r1 = new fabric.Rect({
                            left: 20,
                            top: offsetY,
                            width: w,
                            height: h,
                            fill: colorRack,
                            borderColor: "rgba(0,0,0,1)",
                            strokeWidth: 0.1,
                            id: 'r' + i
                        });
/*
                        //rack B
                        var r2 = new fabric.Rect({
                            left: 40,
                            top: offsetY,
                            width: w,
                            height: h,
                            fill: colorRack,
                            borderColor: "rgba(0,0,0,1)",
                            strokeWidth: 0.5,
                            id: 'r' + i
                        });*/

                        groupUnidades.addWithUpdate(r1);
//                        groupUnidades.addWithUpdate(r2);

                        /*
                         var offsetY = offsetY + h;
                         var rack = r.clone({y: offsetY, fill: color, strokeWidth: 0.5, stroke: 'black', opacity: 0.5});
                         rackGroup.add(rack);
                         
                         //var offsetX =  w;
                         var rack = r.clone({x: offsetX, y: offsetY, fill: color, strokeWidth: 0.5, stroke: 'black', opacity: 0.5});
                         rackGroup.add(rack);
                         //LayerRacks.add(rackGroup);
                         */
                    }
                    canvas.add(groupUnidades);
                    canvas.renderAll();
                }


                function generarBloque()
                {
                    var b = new fabric.Rect({
                          //  left: 400,
                          //  top: 100,
                            width: 100,
                            height: 100,
                            fill: '#fff000',
                            //hasBorders: false,
                            stroke: '#000000',
                            //borderColor: "rgba(0,0,0,1)",
                            strokeWidth: 0.3,
                            //originX: 'left',
                            //originY: 'top',
                            id: 'b' + i,
                            opacity: 0.5,
                            strokeDashArray: [3, 3]
                        });
                    canvas.add(b);
                    canvas.renderAll();
                }

/*
        $("#ppt_calendar").datepicker({
            format: "dd/mm/yyyy",
            startDate: "+1d",
            endDate: "+30d",
            todayBtn: "linked",
            language: "es",
            todayHighlight: true,
            beforeShowDay: selecDias,
            /*
             changeMonth: false,
             changeYear: false,
             selectOtherMonths: true,
             dateFormat: 'yy-mm-dd',
             altField: '#date_due',
             altFormat: 'dd-mm-yyyy',
             duration: "slow",
             //beforeShowDay: xyz,
             //onChangeMonthYear: fetchFreeDays,
             firstDay: 0, // rows starts on Monday
             minDate: "+1d",
             maxDate: "+30d",
             showMonthAfterYear: true,
            //onSelect: mostrarHorarios
        });



        function selecDias(d)
        {
            var nodisponibles = ['20/10/2014', '22/10/2014', '24/10/2014','10/11/2014'];
            var pocadisponibilidad = ['21/10/2014', '26/10/2014', '27/10/2014', '28/10/2014', '13/11/2014'];

            var mes = d.getMonth() + 1;
            if (mes <= 11) {

                //console.log(d);
                var twoDigitMonth = (d.getMonth() + 1) + "";
                if (twoDigitMonth.length === 1)
                    twoDigitMonth = "0" + twoDigitMonth;
                var twoDigitDate = d.getDate() + "";
                if (twoDigitDate.length === 1)
                    twoDigitDate = "0" + twoDigitDate;
                var currentDate = twoDigitDate + "/" + twoDigitMonth + "/" + d.getFullYear();
                //console.log(currentDate);
            }

            if ($.inArray(currentDate, nodisponibles) !== -1) {
                return {
                    enabled: false,
                    classes: 'nodisponible'
                };
            }

            if ($.inArray(currentDate, pocadisponibilidad) !== -1) {
                return {
                    enabled: true,
                    classes: 'pocadisponibilidad'
                };
            } else {
                return {
                    enabled: true,
                    classes: 'disponible'
                };
            }

*/
            /*
             var mes = d.getMonth()+1;
             var dia = d.getDate();
             
             if (mes === 10) {
             if (dia >= 20 && dia <= 24) {
             return [true, "nodisponible"];
             }
             
             if (dia === 25) {
             return [true, "pocadisponibilidad"];
             }
             }*/
            /*
             if (dia === 0) {
             return [false, ''];
             }
             */
            //return [true, 'disponible'];

        //}

    });

            canvas = new fabric.Canvas('container', {selection: true});
            grid = 20;

            // create grid

            for (var i = 0; i < (1000 / grid); i++) {
                canvas.add(new fabric.Line([i * grid, 0, i * grid, 1000], {stroke: 'blue', selectable: false, strokeWidth: 0.1}));
                canvas.add(new fabric.Line([0, i * grid, 1000, i * grid], {stroke: 'blue', selectable: false, strokeWidth: 0.1}))
            }

            // snap to grid

                        canvas.on('object:moving', function (options) {
                            options.target.set({
                                left: Math.round(options.target.left / grid) * grid,
                                top: Math.round(options.target.top / grid) * grid
                            });
                        });
</script>