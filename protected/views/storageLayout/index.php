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
                            <?php 
                            $current = 1;
                            foreach($modelStorageUnit as $key => $val){

                                if($valunits['zona'] === $key) {                          
                            ?>
                            <div id="zona" class="tab-pane active">
                                <!--inicia panel del acordeon -->
                                <div id="accordionZona" class="accordion-style2">
                                    <?php 
                                    
                                        foreach($val as $row){
                                            
                                        ?>
                                    <div class="group">
                                        <h3 class="accordion-header"><?php echo $row['name_units'] ?></h3>
                                        <form class="form-horizontal contentAccordion" role="form" id="<?php echo "form-".$row['idstorage_units'] ?>">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="<?php echo $row['name_raw']."_"."long_".$row['idstorage_units'] ?>" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="<?php echo $row['name_raw']."_"."width-".$row['idstorage_units'] ?>" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <?php if($row['idstorage_units'] == 1){ ?>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Andenes </label>
                                                    <div class="col-sm-7">
                                                        <input id="<?php echo $row['name_raw']."_"."platform-".$row['idstorage_units'] ?>" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                <button class="btn btn-xs btn-info2" type="button" id="<?php echo "z_".$row['name_raw']?>" data-idtree="<?php echo "z_".$row['name_raw']?>">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <?php } ?>                                    
                                </div><!-- #accordion -->
                                <!-- final del acordeon -->
                            </div>
                            <?php } 
                            if($valunits['area'] === $key) {                          
                            ?>
                            <div id="area" class="tab-pane">
                                <!--inicia panel del acordeon -->
                                <div id="accordionArea" class="accordion-style2">
                                    <?php 
                                    
                                        foreach($val as $row){
                                            
                                    ?>
                                    <div class="group">
                                        <h3 class="accordion-header"><?php echo $row['name_units'] ?></h3>

                                        <form class="form-horizontal contentAccordion" role="form" id="<?php echo "form-".$row['idstorage_units'] ?>">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="<?php echo $row['name_raw']."_"."long_".$row['idstorage_units'] ?>" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="<?php echo $row['name_raw']."_"."width_".$row['idstorage_units'] ?>" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label" for="form-field-select-1">Pertenece a</label>
                                                    <div class="col-sm-12">
                                                        <?php echo CHtml::dropDownList('idstorage_units', '' ,$dropDownZona, array('prompt' => 'Seleccione Zona', 'class'=>'col-sm-12')); ?>
                                                    </div>
                                                </div>
                                                <button class="btn btn-xs btn-info2" type="button" id="<?php echo "z_".$row['name_raw']?>" data-idtree="<?php echo "z_".$row['name_raw']?>"> 
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Aplicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                        <?php } ?>
                                </div>
                            </div>
                            <?php }} ?>
                            <div id="unidad" class="tab-pane">
                                <!--inicia panel del acordeon -->
                                <div id="accordionUnidad" class="accordion-style2">

                                    <div class="group">
                                        <h3 class="accordion-header">Rack</h3>

                                        <form class="form-horizontal contentAccordion" role="form">
                                            <div class="contentAccordion">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="rack_largo"> Largo </label>
                                                    <div class="col-sm-7">
                                                        <input id="rack_largo" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="rack_ancho"> Ancho </label>
                                                    <div class="col-sm-7">
                                                        <input id="rack_ancho" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label no-padding-right" for="rack_qty"> Cantidad </label>
                                                    <div class="col-sm-7">
                                                        <input id="rack_qty" class="col-xs-10 col-sm-7" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label" for="form-field-select-1">Pertenece a</label>
                                                    <div class="col-sm-12">
                                                        <?php echo CHtml::dropDownList('idstorage_units', '' ,$dropDownArea, array('prompt' => 'Seleccione Area', 'class'=>'col-sm-12')); ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <div class="clearfix">
                                                            <p>
                                                                <label><input id='rack_single' name="rack_single" type="checkbox"><span class="label label-lg label-yellow arrowed-right">Single</span></label>
                                                                <label><input id='rack_double' name="rack_double" type="checkbox"><span class="label label-lg label-pink arrowed-right">Double</span></label>
                                                                
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-xs btn-info2" type="button">
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
                                                        <input id="bloque_largo" class="col-xs-10 col-sm-10" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-6 control-label no-padding-right" for="form-field-1-1"> Ancho </label>
                                                    <div class="col-sm-4">
                                                        <input id="bloque_ancho" class="col-xs-10 col-sm-10" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-6 control-label no-padding-right" for="form-field-1-1"> Dividir Largo</label>
                                                    <div class="col-sm-4">
                                                        <input id="div_bloque_largo" class="col-xs-10 col-sm-10" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-6 control-label no-padding-right" for="form-field-1-1"> Dividir Ancho</label>
                                                    <div class="col-sm-4">
                                                        <input id="div_bloque_ancho" class="col-xs-10 col-sm-10" type="text">
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
                                                <button class="btn btn-xs btn-info2" type="button" id='bloque' name="bloque">
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
<script type="text/javascript">
    jQuery(function($) {

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
    });
    </script>