<style type="text/css">
    /*Modificación para los nombres de los tabs*/
    .nav-tabs > li > a {padding: 5px 3px;}

    /*Modificación para el espacio interior del tab*/
    .tab-content {padding: 5px 5px;}

    .contentAccordion {padding: 0.5em !important;}

    .form-group {margin-bottom: 5px !important;}

    .control-label {text-align: left !important; font-size: 95%;}

    #tree2 {font-size: 80% !important; height: auto;}

    .tree-folder-header, .tree-item {line-height: 10px !important; height: 28px !important;}

    .tree-folder-header span, .tree-item span {margin: 0px 0px 0px 13px !important; font-size: 90% !important;}

    .tree-item span {margin: 0px 0px !important; font-size: 90% !important;}
    
    .yellow {color: yellow;};
</style>

<div class="page-content-area">
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="col-xs-12 col-sm-2">

                    <div class="tabbable">
                        <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
                            <li class="active">
                                <a data-toggle="tab" href="#zona">Zona</a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#area">&Aacute;rea</a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#unidad">Unidad</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="zona" class="tab-pane in active">
                                <!--inicia panel del acordeon -->
                                <div id="accordionZona" class="accordion-style2">

                                    <div class="group">
                                        <h3 class="accordion-header">Recepci&oacute;n</h3>
                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Andenes </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button" id="ztRecepcion" data-idtree="zRecepcion">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="group">
                                        <h3 class="accordion-header">Control de Calidad</h3>
                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="group">
                                        <h3 class="accordion-header">Cuarentena</h3>
                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="group">
                                        <h3 class="accordion-header">Maquila</h3>
                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="group">
                                        <h3 class="accordion-header">Almacenamiento</h3>
                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="group">
                                        <h3 class="accordion-header">Crossdock</h3>
                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="group">
                                        <h3 class="accordion-header">Alto Valor</h3>
                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="group">
                                        <h3 class="accordion-header">Picking</h3>
                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="group">
                                        <h3 class="accordion-header">Devoluci&oacute;n</h3>
                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="group">
                                        <h3 class="accordion-header">Desahogo</h3>
                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="group">
                                        <h3 class="accordion-header">Merma</h3>
                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="group">
                                        <h3 class="accordion-header">Embarque</h3>
                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div><!-- #accordion -->
                                <!-- final del acordeon -->
                            </div>

                            <div id="area" class="tab-pane">
                                <!--inicia panel del acordeon -->
                                <div id="accordionArea" class="accordion-style2">

                                    <div class="group">
                                        <h3 class="accordion-header">Alta Rotaci&oacute;n</h3>

                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label" for="form-field-select-1">Pertenece a</label>
                                                    <div class="col-sm-12">
                                                        <select class="col-sm-12" id="form-field-select-1">
                                                            <option value="">Almacenamiento</option>
                                                            <option value="">Cuarentena</option>
                                                            <option value="">Picking</option>
                                                            <option value="">Crossdock</option>
                                                            <option value="">Maquila</option>
                                                            <option value="">Merma</option>
                                                            <option value="">Devoluci&oacute;n</option>
                                                            <option value="">Desahogo</option>
                                                            <option value="">Control de Calidad</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="group">
                                        <h3 class="accordion-header">Media Rotaci&oacute;n</h3>

                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label" for="form-field-select-1">Pertenece a</label>
                                                    <div class="col-sm-12">
                                                        <select class="col-sm-12" id="form-field-select-1">
                                                            <option value="">Almacenamiento</option>
                                                            <option value="">Cuarentena</option>
                                                            <option value="">Picking</option>
                                                            <option value="">Crossdock</option>
                                                            <option value="">Maquila</option>
                                                            <option value="">Merma</option>
                                                            <option value="">Devoluci&oacute;n</option>
                                                            <option value="">Desahogo</option>
                                                            <option value="">Control de Calidad</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="group">
                                        <h3 class="accordion-header">Baja Rotaci&oacute;n</h3>

                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label" for="form-field-select-1">Pertenece a</label>
                                                    <div class="col-sm-12">
                                                        <select class="col-sm-12" id="form-field-select-1">
                                                            <option value="">Almacenamiento</option>
                                                            <option value="">Cuarentena</option>
                                                            <option value="">Picking</option>
                                                            <option value="">Crossdock</option>
                                                            <option value="">Maquila</option>
                                                            <option value="">Merma</option>
                                                            <option value="">Devoluci&oacute;n</option>
                                                            <option value="">Desahogo</option>
                                                            <option value="">Control de Calidad</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="group">
                                        <h3 class="accordion-header">Prioridad Alta</h3>

                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label" for="form-field-select-1">Pertenece a</label>
                                                    <div class="col-sm-12">
                                                        <select class="col-sm-12" id="form-field-select-1">
                                                            <option value="">Almacenamiento</option>
                                                            <option value="">Cuarentena</option>
                                                            <option value="">Picking</option>
                                                            <option value="">Crossdock</option>
                                                            <option value="">Maquila</option>
                                                            <option value="">Merma</option>
                                                            <option value="">Devoluci&oacute;n</option>
                                                            <option value="">Desahogo</option>
                                                            <option value="">Control de Calidad</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="group">
                                        <h3 class="accordion-header">Prioridad Media</h3>

                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label" for="form-field-select-1">Pertenece a</label>
                                                    <div class="col-sm-12">
                                                        <select class="col-sm-12" id="form-field-select-1">
                                                            <option value="">Almacenamiento</option>
                                                            <option value="">Cuarentena</option>
                                                            <option value="">Picking</option>
                                                            <option value="">Crossdock</option>
                                                            <option value="">Maquila</option>
                                                            <option value="">Merma</option>
                                                            <option value="">Devoluci&oacute;n</option>
                                                            <option value="">Desahogo</option>
                                                            <option value="">Control de Calidad</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="group">
                                        <h3 class="accordion-header">Prioridad Baja</h3>

                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label" for="form-field-select-1">Pertenece a</label>
                                                    <div class="col-sm-12">
                                                        <select class="col-sm-12" id="form-field-select-1">
                                                            <option value="">Almacenamiento</option>
                                                            <option value="">Cuarentena</option>
                                                            <option value="">Picking</option>
                                                            <option value="">Crossdock</option>
                                                            <option value="">Maquila</option>
                                                            <option value="">Merma</option>
                                                            <option value="">Devoluci&oacute;n</option>
                                                            <option value="">Desahogo</option>
                                                            <option value="">Control de Calidad</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="group">
                                        <h3 class="accordion-header">&Uacute;nica</h3>

                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label" for="form-field-select-1">Pertenece a</label>
                                                    <div class="col-sm-12">
                                                        <select class="col-sm-12" id="form-field-select-1">
                                                            <option value="">Almacenamiento</option>
                                                            <option value="">Cuarentena</option>
                                                            <option value="">Picking</option>
                                                            <option value="">Crossdock</option>
                                                            <option value="">Maquila</option>
                                                            <option value="">Merma</option>
                                                            <option value="">Devoluci&oacute;n</option>
                                                            <option value="">Desahogo</option>
                                                            <option value="">Control de Calidad</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div id="unidad" class="tab-pane">
                                <!--inicia panel del acordeon -->
                                <div id="accordionUnidad" class="accordion-style2">

                                    <div class="group">
                                        <h3 class="accordion-header">Rack</h3>

                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Cantidad </label>
                                                    <div class="col-sm-7">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label" for="form-field-select-1">Pertenece a</label>
                                                    <div class="col-sm-12">
                                                        <select class="col-sm-12" id="form-field-select-1">
                                                            <option value="">Almacenamiento - Alta Rotaci&oacute;n</option>
                                                            <option value="">Almacenamiento - Media Rotaci&oacute;n</option>
                                                            <option value="">Almacenamiento - Baja Rotaci&oacute;n</option>
                                                            <option value="">Crossdock - Prioridad Alta</option>
                                                            <option value="">Crossdock - Prioridad Media</option>
                                                            <option value="">Crossdock - Prioridad Baja</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <div class="clearfix">
                                                            <p>
                                                                <label><input name="form-field-checkbox" type="checkbox"><span class="label label-lg label-pink arrowed-right">Double</span></label>
                                                                <label><input name="form-field-checkbox" type="checkbox"><span class="label label-lg label-yellow arrowed-right">Single</span></label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="group">
                                        <h3 class="accordion-header">Bloque (Piso)</h3>

                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-6 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-4">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-10" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-6 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-4">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-10" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-6 control-label no-padding-right" for="form-field-1-1"> Dividir Largo</label>
                                                    <div class="col-sm-4">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-10" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-6 control-label no-padding-right" for="form-field-1-1"> Dividir Ancho</label>
                                                    <div class="col-sm-4">
                                                        <input id="form-field-1-1" class="col-xs-10 col-sm-10" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label no-padding-right" for="form-field-1-1"> Cada divisi&oacute;n mide 2.5 x 2.5 mts </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label" for="form-field-select-1">Pertenece a</label>
                                                    <div class="col-sm-12">
                                                        <select class="col-sm-12" id="form-field-select-1">
                                                            <option value="">Almacenamiento - Alta Rotaci&oacute;n</option>
                                                            <option value="">Almacenamiento - Media Rotaci&oacute;n</option>
                                                            <option value="">Almacenamiento - Baja Rotaci&oacute;n</option>
                                                            <option value="">Crossdock - Prioridad Alta</option>
                                                            <option value="">Crossdock - Prioridad Media</option>
                                                            <option value="">Crossdock - Prioridad Baja</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-info2" type="button">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8">
                    <h4 class="blue center">TLC1.01 Complejo Toluca - Almac&eacute;n Centro (100m x 100m = 10000m2)</h4>
                    <div style="height: 550px; margin:10px 0px;" version="1.1" class="col-xs-12 col-sm-12" id="svgLayoutArea">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <div class="widget-box widget-color-green2">
                        <div class="widget-header">
                            <h4 class="widget-title lighter smaller">Layout</h4>
                            <button class="btn btn-minier btn-purple" type="button" id="dibujarLayout" >
                                <i class="ace-icon fa fa-check"></i>
                                Dibujar
                            </button>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main padding-8">
                                <div id="tree2" class="tree">
                                    <div class="tree-folder" style="display: block;">
                                        <div class="tree-folder-header">
                                            <i class="red ace-icon fa fa-square-o fa-lg" id="zTRecepcion"></i>
                                            <div class="tree-folder-name">
                                                <strong>Zona - Recepción</strong><br>
                                                <span>20m x 50m  = 1000m2</span><br>
                                                <span>TLC1.01.01</span></div>
                                        </div>
                                        <div style="display: block;" class="tree-folder-content">
                                            <div class="tree-folder" style="display: block;">
                                                <div class="tree-folder-header">
                                                    <i class="red ace-icon ace-icon fa fa-square fa-lg" id="aTAndenes"></i>
                                                    <div class="tree-folder-name">
                                                        <strong>Área - Andenes</strong><br>
                                                        <span>TLC1.01.01.01 - TLC1.01.01.24</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tree-folder" style="display: block;">
                                        <div class="tree-folder-header">
                                            <i class="blue ace-icon fa fa-square-o fa-lg" id="zTMaquila"></i>
                                            <div class="tree-folder-name">
                                                    <strong>Zona - Maquila</strong><br>
                                                    <span>30m x 30m = 900m2</span><br>
                                                    <span>TLC1.01.02</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tree-folder" style="display: block;">
                                        <div class="tree-folder-header">
                                            <i class="red ace-icon fa fa-square-o fa-lg" id="zTAlmacenamiento"></i>
                                            <div class="tree-folder-name">
                                                <strong>Zona - Almacenamiento</strong><br>
                                                <span>80m x 90m = 7200m2</span><br>
                                                <span>TLC1.01.03</span>
                                            </div>
                                        </div>
                                        <div style="display: block;" class="tree-folder-content">
                                            <div class="tree-folder" style="display: block;">
                                                <div class="tree-folder-header">
                                                    <i class="green ace-icon fa fa-square fa-lg" id="aTAltaRotacion"></i>
                                                    <div class="tree-folder-name">
                                                        <strong>Área - Alta Rotación</strong><br>
                                                        <span>80m x 30m = 2400m2</span><br>
                                                        <span>TLC1.01.03.01</span></div>
                                                </div>
                                                <div style="display: block;" class="tree-folder-content">
                                                    <div class="tree-item" style="display: block;">
                                                        <div class="tree-item-name">
                                                            <i class=" ace-icon  fa fa-th green fa-lg" id="rTRackA"></i> 
                                                            <strong>Rack A </strong><br>
                                                            <span>A0101.1 - A2006.2</span><br>
                                                            <span>Single (240u)</span>
                                                        </div>
                                                    </div>
                                                    <div class="tree-item" style="display: block;">
                                                        <div class="tree-item-name">
                                                            <i class=" ace-icon  fa fa-th green fa-lg" id="rTRackB"></i>
                                                            <strong>Rack B </strong><br>
                                                            <span>B0101.1 - B2006.2</span><br>
                                                            <span>Single (240u)</span>
                                                        </div>
                                                    </div>
                                                    <div class="tree-item" style="display: block;">
                                                        <div class="tree-item-name">
                                                            <i class=" ace-icon  fa fa-th green fa-lg" id="rTRackC"></i>
                                                            <strong>Rack C </strong><br>
                                                            <span>C0101.1 - C2006.2</span><br>
                                                            <span>Single (240u)</span>
                                                        </div>
                                                    </div>
                                                    <div class="tree-item" style="display: block;">
                                                        <div class="tree-item-name">
                                                            <i class=" ace-icon  fa fa-cube green fa-lg" id="rTBloqueD"></i>
                                                            <strong>Bloque D </strong><br>
                                                            <span>D0101.1 - D0402.1</span><br>
                                                            <span>10m x 5m, 4x2 (8u)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tree-folder" style="display: block;">
                                                <div class="tree-folder-header">                    
                                                    <i class="yellow ace-icon fa fa-square fa-lg" id="aTMediaRotacion"></i>                 
                                                    <div class="tree-folder-name">
                                                        <strong>Área - Media Rotación</strong><br>
                                                        <span>80m x 30m = 2400m2</span><br>
                                                        <span>TLC1.01.03.02</span></div>              
                                                </div>              
                                            </div>
                                            <div class="tree-folder" style="display: block;">
                                                <div class="tree-folder-header">                    
                                                    <i class="red ace-icon fa fa-square fa-lg" id="aTBajaRotacion"></i>                 
                                                    <div class="tree-folder-name">
                                                        <strong>Área - Baja Rotación</strong><br>
                                                        <span>80m x 30m = 2400m2</span><br>
                                                        <span>TLC1.01.03.03</span>
                                                    </div>              
                                                </div>              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-8"></div>
                    <p>
                    <span class="label label-info arrowed-in-right arrowed">
                        <i class="fa fa-sort-amount-asc"></i>&nbsp;  6 Niveles de Altura
                    </span>
                    </p>
                </div>
            </div>
        </div>

    </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content-area -->

<!-- js para mostrar el tree del lado derecho del layout del almacen-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery.svg.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery.svgdom.min.js"></script>

<script type="text/javascript">
    jQuery(function($) {

        //carga del layout cada vez 
        $('#svgLayoutArea').svg();


        //jquery accordion
        $("#accordionZona").accordion({
            collapsible: true,
            heightStyle: "content",
            animate: 250,
            header: ".accordion-header"
        });

        $("#accordionArea").accordion({
            collapsible: true,
            heightStyle: "content",
            animate: 250,
            header: ".accordion-header"
        });

        $("#accordionUnidad").accordion({
            collapsible: true,
            heightStyle: "content",
            animate: 250,
            header: ".accordion-header"
        });

        /*
         $('#tree2').ace_tree({
         dataSource: treeDataSource2 ,
         loadingHTML:'<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>',
         'open-icon' : 'ace-icon fa fa-square-o fa-lg',
         'close-icon' : 'ace-icon fa fa-square-o fa-lg',
         'selectable' : false,
         'selected-icon' : null,
         'unselected-icon' : null
         });
         */


        /*DIBUJAR LAYOUT*/
        $("#dibujarLayout").click(function() {
            //$('#svgLayoutArea').svg();
            svg = $('#svgLayoutArea').svg('get');
            svg.rect(0, 0, 800, 550, {fill: 'white', stroke: 'orange', strokeWidth: 1});
        });


        /*FUNCIONES PARA DIBUJAR FORMAS INTERNAS DEL LAYOUT*/

        $('#zTRecepcion').click(function() {
            var h = 16;
            var w = 100;
            var y = 0;

            svg = $('#svgLayoutArea').svg('get');
            svg.rect(0, 0, 100, 384, {fill: 'white', stroke: 'red', strokeWidth: 1});

            for (i = 1; i < 24; i++)
            {
                y = (i * h);
                svg.rect(0, y, 100, h, {fill: 'white', stroke: 'red', strokeWidth: 1});
            }
            
            //svg.text(null, -350, 200, 'Zona - Recepción', {transform: 'rotate(-90, 0, 150)'});
            svg.text(null, 5, 405, 'Zona - Recepción', {fontSize: '11'});
            
        
        });

        $('#zTMaquila').click(function() {
            svg = $('#svgLayoutArea').svg('get');
            svg.rect(650, 400, 150, 150, {fill: 'white', stroke: 'blue', strokeWidth: 1});
            
            svg.text(null, 670, 530, 'Área - Maquila');
        });


        $('#zTAlmacenamiento').click(function() {
            svg = $('#svgLayoutArea').svg('get');
            svg.rect(100, 0, 550, 550, {fill: 'white', stroke: 'black', strokeWidth: 1});

            $('.tree-folder-content').on('click', '.icon-folder-open', function() {
                alert(algo);
            });
        });

        $('#tree2').on('opened', function(evt, data) {
            console.log('sub-folder opened: ', data);
        });


        $('#aTAltaRotacion').click(function() {
            //alert('area');
            svg = $('#svgLayoutArea').svg('get');
            svg.rect(100, 0, 183, 550, {fill: '#b1ffb1', stroke: 'black', strokeWidth: 1});
            
            //titulo
            svg.text(null, 130, 530, 'Área - Alta Rotación');
        });
        
        $('#aTMediaRotacion').click(function() {
            //alert('area');
            svg = $('#svgLayoutArea').svg('get');
            svg.rect(283, 0, 183, 550, {fill: '#ffffb1', stroke: 'black', strokeWidth: 1});
            
            //titulo
            svg.text(null, 300, 530, 'Área - Media Rotación');
        });
        
        $('#aTBajaRotacion').click(function() {
            //alert('area');
            svg = $('#svgLayoutArea').svg('get');
            svg.rect(466, 0, 183, 550, {fill: '#ffb0b0', stroke: 'black', strokeWidth: 1});
            
            //titulo
            svg.text(null, 480, 530, 'Área - Baja Rotación');
        });
        
        $('#rTRackA').click(function(){
            var h = 15;
            var w = 15;
            var y = 0;
            var x2 = 130;

            svg = $('#svgLayoutArea').svg('get');
            //svg.rect(x2, 50, w, 360, {fill: 'white', stroke: 'red', strokeWidth: 1});

            for (i = 1; i <= 24; i++)
            {
                y = (i * h) + 30;
                svg.rect(x2, y, w, h, {fill: '#76ff76', stroke: '#007600', strokeWidth: 1});
                svg.rect(x2+15, y, w, h, {fill: '#76ff76', stroke: '#007600', strokeWidth: 1});
            }
        });
        
        $('#rTRackB').click(function(){
            var h = 15;
            var w = 15;
            var y = 0;
            var x2 = 175;

            svg = $('#svgLayoutArea').svg('get');
            //svg.rect(x2, 50, w, 360, {fill: 'white', stroke: 'red', strokeWidth: 1});

            for (i = 1; i <= 24; i++)
            {
                y = (i * h) + 30;
                svg.rect(x2, y, w, h, {fill: '#76ff76', stroke: '#007600', strokeWidth: 1});
                svg.rect(x2+15, y, w, h, {fill: '#76ff76', stroke: '#007600', strokeWidth: 1});
            }
        });
        
        $('#rTRackC').click(function(){
            var h = 7.5;
            var w = 7.5;
            var y = 0;
            var x2 = 220;

            svg = $('#svgLayoutArea').svg('get');
            //svg.rect(x2, 50, w, 360, {fill: 'white', stroke: 'red', strokeWidth: 1});

            for (i = 1; i <= 48; i++)
            {
                y = (i * h) + 30;
                svg.rect(x2, y+7.5, w, h, {fill: '#76ff76', stroke: '#007600', strokeWidth: 1});
                svg.rect(x2+7.5, y+7.5, w, h, {fill: '#76ff76', stroke: '#007600', strokeWidth: 1});
                svg.rect(x2+15, y+7.5, w, h, {fill: '#76ff76', stroke: '#007600', strokeWidth: 1});
                svg.rect(x2+22.5, y+7.5, w, h, {fill: '#76ff76', stroke: '#007600', strokeWidth: 1});
            }
        });
        
        $('#rTBloqueD').click(function(){
            var h = 20;
            var w = 20;
            var y = 0;
            var x2 = 130;

            svg = $('#svgLayoutArea').svg('get');
            //svg.rect(x2, 50, w, 360, {fill: 'white', stroke: 'red', strokeWidth: 1});

            for (i = 1; i <= 2; i++)
            {
                y = (i * h) + 450;
                svg.rect(x2, y, w, h, {fill: '#7cacff', stroke: 'black', strokeWidth: 1});
                svg.rect(x2+20, y, w, h, {fill: '#7cacff', stroke: 'black', strokeWidth: 1});
                svg.rect(x2+40, y, w, h, {fill: '#7cacff', stroke: 'black', strokeWidth: 1});
                svg.rect(x2+60, y, w, h, {fill: '#7cacff', stroke: 'black', strokeWidth: 1});
            }
            
            });

    });

</script>