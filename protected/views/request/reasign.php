<style type="text/css">
    .disponible{
        //background-color: #5cb85c;
        background-color:#9DF29D;
    }

    .pocadisponibilidad{
        background-color: #FACD8E;
    }

    .nodisponible{
        background-color: #FA6864 !important;
    }
</style>
<div class="page-content-area">
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="widget-box">
                <div class="widget-header widget-header-blue widget-header-flat">
                    <h4 class="widget-title lighter">Reasignar Cita</h4>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <!-- #section:plugins/fuelux.wizard -->
                        <div id="fuelux-wizard" data-target="#step-container" style="height: 48px; margin-top: -13px;">
                            <!-- #section:plugins/fuelux.wizard.steps -->
                            <ul class="wizard-steps">
                                <li data-target="#step1" class="active">
                                    <span class="step">1</span>
                                    <span class="title">Datos Generales</span>
                                </li>

                                <li data-target="#step2">
                                    <span class="step">2</span>
                                    <span class="title">Fecha y Hora</span>
                                </li>

                                <li data-target="#step3">
                                    <span class="step">3</span>
                                    <span class="title">Carga de Art&iacute;culos</span>
                                </li>
                                <li data-target="#step4">
                                    <span class="step">4</span>
                                    <span class="title">Resumen</span>
                                </li>
                            </ul>

                            <!-- /section:plugins/fuelux.wizard.steps -->
                        </div>

                        <hr />

                        <!-- #section:plugins/fuelux.wizard.container -->
                        <div class="step-content pos-rel" id="step-container">
                            <!-- <h3 class="lighter block green">Ingrese la siguiente informaci&oacute;n</h3>-->
                            <div class="step-pane active" id="step1">

                                <form class="form-horizontal" id="validation-form" method="post">
                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="referencia">No. de Cita:</label>

                                        <div class="col-xs-12 col-sm-9">
                                            <div class="clearfix">
                                                <input type="text" name="RequestForm[]" id="email" class="col-xs-12 col-sm-6" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="referencia">Clave de Confirmaci&oacute;n:</label>

                                        <div class="col-xs-12 col-sm-9">
                                            <div class="clearfix">
                                                <input type="password" name="RequestForm[]" id="email" class="col-xs-12 col-sm-6" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-3 no-padding-right"></div>

                                        <div class="btn-group btn-group-sm col-xs-12 col-sm-9">

                                            <a href="#" class="btn btn-success" id="btnusernew" >Buscar</a>

                                        </div>
                                    </div>

                                    <div class="hr hr-dotted"></div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="platform">Almacen</label>

                                        <div class="col-xs-12 col-sm-9">
                                            <div class="clearfix">
                                                <select class="input-medium" id="platform" name="platform">
                                                    <option value="">------------------</option>
                                                    <option value="linux">TOLUCA 001</option>
                                                    <option value="windows">PORTOPRINT 001</option>
                                                    <option value="windows">PORTOPRINT 002</option>
                                                    <option value="windows">PORTOPRINT 003</option>
                                                    <option value="windows">PORTOPRINT 004</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr hr-dotted"></div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2"># Cajas:</label>

                                        <div class="col-xs-12 col-sm-9">
                                            <div class="clearfix">
                                                <input type="text" name="cajas" id="password2" class="col-xs-12 col-sm-4" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-1"></div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name"># Pallets:</label>

                                        <div class="col-xs-12 col-sm-9">
                                            <div class="clearfix">
                                                <input type="text" id="name" name="name" class="col-xs-12 col-sm-5" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-1"></div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="platform">Modalidad Entrega</label>

                                        <div class="col-xs-12 col-sm-9">
                                            <div class="clearfix">
                                                <select class="input-medium" id="platform" name="platform">
                                                    <option value="">------------------</option>
                                                    <option value="linux">Piso</option>
                                                    <option value="windows">Pallet</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-1"></div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="platform">Transporte</label>

                                        <div class="col-xs-12 col-sm-9">
                                            <div class="clearfix">
                                                <select class="input-medium" id="platform" name="platform">
                                                    <option value="">------------------</option>
                                                    <option value="linux">Camioneta 1.5T</option>
                                                    <option value="windows">Camioneta 3.5T</option>
                                                    <option value="mac">Torton</option>
                                                    <option value="ios">Trailer 1</option>
                                                    <option value="android">Trailer 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hr hr-dotted"></div>   
                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="platform"></label>
                                        <div class="col-xs-12 col-sm-9">
                                            <div class="clearfix">
                                                <p>
                                                    <label><input name="form-field-checkbox" type="checkbox"><span class="label label-lg label-pink arrowed-right">Factura</span></label>
                                                    <label><input name="form-field-checkbox" type="checkbox"><span class="label label-lg label-yellow arrowed-right">Pedido</span></label>
                                                    <label><input name="form-field-checkbox" type="checkbox"><span class="label label-lg label-purple arrowed-right">Orden de Compra</span></label>
                                                    <label><input name="form-field-checkbox" type="checkbox"><span class="label label-lg label-blue arrowed-right">Orden de Producci&oacute;n</span></label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">
                                            <span class="label label-lg label-primary arrowed-right">Factura</span>
                                        </label>
                                        <div class="col-sm-2">
                                            <!-- #section:custom/file-input -->
                                            <div class="clearfix">
                                                <input type="text" name="password" id="password" />
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- #section:custom/file-input -->
                                            <div class="clearfix">
                                                <input type="file" class="id-input-file-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">
                                            <span class="label label-lg label-primary arrowed-right">Pedido</span>
                                        </label>
                                        <div class="col-sm-2">
                                            <!-- #section:custom/file-input -->
                                            <div class="clearfix">
                                                <input type="text" name="password" id="password" />
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- #section:custom/file-input -->
                                            <div class="clearfix">
                                                <input type="file" class="id-input-file-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">
                                            <span class="label label-lg label-primary arrowed-right">Orden de Compra</span>
                                        </label>
                                        <div class="col-sm-2">
                                            <!-- #section:custom/file-input -->
                                            <div class="clearfix">
                                                <input type="text" name="password" id="password" />
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- #section:custom/file-input -->
                                            <div class="clearfix">
                                                <input type="file" class="id-input-file-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">
                                            <span class="label label-lg label-primary arrowed-right">Orden de Producci&oacute;n</span>
                                        </label>
                                        <div class="col-sm-2">
                                            <!-- #section:custom/file-input -->
                                            <div class="clearfix">
                                                <input type="text" name="password" id="password" />
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- #section:custom/file-input -->
                                            <div class="clearfix">
                                                <input type="file" class="id-input-file-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Comentarios</label>

                                        <div class="col-xs-12 col-sm-9">
                                            <div class="clearfix">
                                                <textarea class="input-xlarge" name="comment" id="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="space-2"></div>
                                </form>
                            </div>

                            <div class="step-pane" id="step2">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3">

                                    </div>
                                    <div class="col-xs-12 col-sm-3">

                                        <div class="widget-box">
                                            <div class="widget-header">
                                                <h4 class="widget-title">Seleccionar Fecha</h4>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">
                                                    <div id="ppt_calendar2"></div>
                                                    <div>
                                                        <br>
                                                        <span class="label label-sm label-success">Disponible</span>
                                                        <span class="label label-sm label-warning">Poca Disponibilidad</span>
                                                        <span class="label label-sm label-danger">No Disponible</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 ">
                                        <div class="widget-box">
                                            <div class="widget-header">
                                                <h4 class="widget-title">Seleccionar Hora</h4>
                                            </div>                                        
                                            <div class="widget-body">
                                                <div class="widget-main">
                                                    <div class="clearfix"></div>
                                                    <select class="input-medium" id="hrs" name="hrs" size="10">
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">

                                    </div>
                                </div>
                            </div>
                            <div class="step-pane" id="step3">
                            <div class="row">
                                <div class="col-xs-12 col-sm-2">
                                    <div class="widget-box transparent">
                                        <div class="widget-header">
                                            <h4 class="widget-title">Buscar Art&iacute;culos</h4>

                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-main padding-6 ">
                                                <table id="confirm_request_table" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>C&oacute;digo</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <td><input type="text" name="txtCodigo" id="txtCodigo" size="11" /></td>
                                                            <td>
                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                    <a href="#" class="blue">
                                                                        <i class="ace-icon fa fa-search bigger-130"></i>
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
                                <div class="col-xs-12 col-sm-10">
                                    <div class="widget-box transparent">
                                        <div class="widget-header">
                                            <h4 class="widget-title">Art&iacute;culos Encontrados</h4>

                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-main padding-6 ">
                                                <table id="confirm_request_table" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Item</th>
                                                            <th>C&oacute;digo</th>
                                                            <th>Descripci&oacute;n</th>
                                                            <th>Precio</th>
                                                            <th>PxC</th>
                                                            <th>Lote</th>
                                                            <th>Caducidad</th>
                                                            <th>Pallets</th>
                                                            <th>Cajas</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>00000102231</td>
                                                            <td>750234567123</td>
                                                            <td>Product A</td>
                                                            <td>8.00</td>
                                                            <td>10</td>
                                                            <td><input type="text" name="txtPallets" id="txtPallets" size="8"/></td>
                                                            <td><input type="text" name="txtCajas" id="txtCajas" size="10"/></td>
                                                            <td><input type="text" name="txtPallets" id="txtPallets" size="2"/></td>
                                                            <td><input type="text" name="txtCajas" id="txtCajas" size="2"/></td>
                                                            <td>
                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                    <a href="#" class="blue">
                                                                        <i class="ace-icon fa fa-plus-square bigger-130"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>00000102114</td>
                                                            <td>750234567123</td>
                                                            <td>Product B</td>
                                                            <td>15.00</td>
                                                            <td>10</td>
                                                            <td><input type="text" name="txtPallets" id="txtPallets" size="8"/></td>
                                                            <td><input type="text" name="txtCajas" id="txtCajas" size="10"/></td>
                                                            <td><input type="text" name="txtPallets" id="txtPallets" size="2"/></td>
                                                            <td><input type="text" name="txtCajas" id="txtCajas" size="2"/></td>
                                                            <td>
                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                    <a href="#" class="blue">
                                                                        <i class="ace-icon fa fa-plus-square bigger-130"></i>
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

                                <div class="row">
                                    <div class="widget-box transparent">

                                        <div class="widget-header">
                                            <h4 class="widget-title">Art&iacute;culos agregados</h4>
                                            <a data-action="collapse" href="#">
                                                <div class="widget-toolbar no-border">
                                                    <i class="ace-icon fa fa-chevron-up"></i>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-main padding-6 ">
                                                <table id="confirm_request_table" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Item</th>
                                                            <th>C&oacute;digo</th>
                                                            <th>Descripci&oacute;n</th>
                                                            <th>Lote</th>
                                                            <th>Caducidad</th>
                                                            <th>Precio</th>
                                                            <th>Pallets</th>
                                                            <th>Cajas</th>
                                                            <th>PxC</th>
                                                            <th>Piezas</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>00000102231</td>
                                                            <td>750234567123</td>
                                                            <td>Product A</td>
                                                            <td>TM4MSDFLR</td>
                                                            <td>20-FEB-15</td>
                                                            <td>8.00</td>
                                                            <td>10</td>
                                                            <td>50</td>
                                                            <td>10</td>
                                                            <td>500</td>
                                                            <td><div class="hidden-sm hidden-xs action-buttons">
                                                                <a href="#" class="red">
                                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                </a>
                                                            </div></td>
                                                        </tr>
                                                        <tr>
                                                            <td>00000154678</td>
                                                            <td>750134434321</td>
                                                            <td>Product Z</td>
                                                            <td>ZT6YSDFLR</td>
                                                            <td>10-MAR-15</td>
                                                            <td>10.00</td>
                                                            <td>20</td>
                                                            <td>100</td>
                                                            <td>20</td>
                                                            <td>1000</td>
                                                            <td><div class="hidden-sm hidden-xs action-buttons">
                                                                <a href="#" class="red">
                                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                </a>
                                                            </div></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step-pane" id="step4">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-2">

                                    </div>
                                    <div class="widget-box col-xs-12 col-sm-8">
                                        <div class="widget-header">
                                            <h4 class="widget-title">Resumen de la Re-Asignaci&oacute;n de Cita</h4>
                                        </div>                                        
                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 200px;">Almacen destino</div>

                                                        <div class="profile-info-value">
                                                            <span>PORTOPRINT 002</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;"> # Pedido</div>

                                                        <div class="profile-info-value">
                                                            <span>23125</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;"> # Factura </div>

                                                        <div class="profile-info-value">
                                                            <span>AH45879</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;"> # Referencia </div>

                                                        <div class="profile-info-value">
                                                            <span>PR76YR</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;"> Forma de entrega </div>

                                                        <div class="profile-info-value">
                                                            <span>Pallets</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;"> Cajas </div>

                                                        <div class="profile-info-value">
                                                            <span>85 Cajas</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;">Transporte</div>

                                                        <div class="profile-info-value">
                                                            <span>Trailer 1</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;">Fecha y Hora</div>

                                                        <div class="profile-info-value">
                                                            <span>24 de Octubre 13:30hrs</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;">Anden/Puerta</div>

                                                        <div class="profile-info-value">
                                                            <span>Anden 1</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;"> Documentos</div>

                                                        <div class="profile-info-value">
                                                            <span class="label label-lg label-primary arrowed-right">Factura</span>
                                                            <span class="label label-lg label-primary arrowed-right">Pedido</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name" style="width: 150px;"> Comentarios </div>

                                                        <div class="profile-info-value">
                                                            <span>Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row" style="width: 150px;">
                                                        <div class="profile-info-name" style="width: 150px;"></div>

                                                        <div class="profile-info-value">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row"  style="font-weight: bolder;">
                                                        <div class="profile-info-name" style="width: 150px; font-weight: bolder;"> Cita Anterior </div>

                                                        <div class="profile-info-value">
                                                            <span>20141132456</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row"  style="font-weight: bolder;">
                                                        <div class="profile-info-name" style="width: 150px; font-weight: bolder;"> Re-Asigno Cita </div>

                                                        <div class="profile-info-value">
                                                            <span>Jaboco Salinas (Jacob)</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row" style="width: 150px;">
                                                        <div class="profile-info-name" style="width: 150px;"></div>

                                                        <div class="profile-info-value">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row"  style="font-weight: bolder;">
                                                        <div class="profile-info-name" style="width: 150px; font-weight: bolder;"> No. Cita </div>

                                                        <div class="profile-info-value">
                                                            <span>201410170023</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row" style="font-weight: bolder;">
                                                        <div class="profile-info-name" style="width: 150px; font-weight: bolder;"> No. de Confirmaci&oacute;n </div>

                                                        <div class="profile-info-value">
                                                            <span>42abf7956e0f2bf</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row" style="font-weight: bolder;">
                                                        <div class="profile-info-name" style="width: 150px; font-weight: bolder;"> Imprimir Cita </div>

                                                        <div class="profile-info-value">
                                                            <a href="<?php echo Yii::app()->createUrl('request/printRequest');?>" class="btn btn-app btn-blue btn-xs">
                                                                <i class="ace-icon fa fa-print  align-top bigger-125 icon-on-right"></i>
                                                            </a>
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
        $('.id-input-file-2').ace_file_input({
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


        $('#fuelux-wizard')
        .ace_wizard({
                    //step: 2 //optional argument. wizard will jump to step "2" at first
                            //inicializar el wizard, por default inicia en paso1
                        })
        .on('change', function(e, info) {
            $("#ppt_calendar2").datepicker("refresh");
        })
        .on('finished', function(e) {

        }).on('stepclick', function(e) {
            //e.preventDefault();//this will prevent clicking and selecting steps
        });


        $("#ppt_calendar2").datepicker({
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
             showMonthAfterYear: true,*/
            //onSelect: mostrarHorarios
        });



        function selecDias(d)
        {
            var nodisponibles = ['20/11/2014', '22/11/2014', '24/11/2014','10/11/2014'];
            var pocadisponibilidad = ['21/11/2014', '26/11/2014', '27/11/2014', '28/11/2014', '13/11/2014'];

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

        }

    });
</script>