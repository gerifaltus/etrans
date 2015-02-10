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
            </div>
        </div>

    </div><!-- /.col -->
</div><!-- /.row -->