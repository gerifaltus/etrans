
<div class="page-content-area">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">


        <!--<div class="btn-group btn-group-sm">
            <a href="#newComplex-form" class="btn btn-success" id="btnusernew" data-target="#newComplex-form" data-toggle="modal">Nuevo Complejo</a>
        </div>-->
        <!--<hr>-->
        <div class="table-header">
            Lista :: Ordenes de Salida            
             <!--<div class="btn-group btn-group-sm"><a href="#newComplex-form" class="btn btn-success" id="btnusernew" data-target="#newComplex-form" data-toggle="modal">Nuevo Complejo</a></div>-->
        </div>
        <div>
            <table id="picking_table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Almac&eacute;n</th>
                        <th>Orden de Salida</th>
                        <th>Origen</th>
                        <th>Fecha de Elaboraci&oacute;n</th>
                        <th>Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TLC01-TOLUCA COLON</td>
                        <td><a href="#">134273</a></td>
                        <td>Salinas Distributions (15467)</td>
                        <td>2014-11-17 13:45:54</td>
                        <td><a href="<?php echo Yii::app()->createUrl('request/Picking');?>" class="btn btn-info btn-xs">
                            <!--<i class="ace-icon fa fa-search fa-lg"></i>-->
                            Picking
                            </a>
                        </td>
                    </tr>   
                    <tr>
                        <td>TLC01-TOLUCA COLON</td>
                        <td><a href="#">127334</a></td>
                        <td>Salinas Distributions (15467)</td>
                        <td>2014-11-17 18:49:26</td>
                        <td><a href="<?php echo Yii::app()->createUrl('request/Picking');?>" class="btn btn-info btn-xs">
                            <!--<i class="ace-icon fa fa-table fa-lg"></i>-->
                            Picking
                            </a></td>
                    </tr>
                    <tr>
                        <td>TLC01-TOLUCA COLON</td>
                        <td><a href="#">129442</a></td>
                        <td>Importadora la Americana (4532)</td>
                        <td>2014-10-30 10:44:27</td>
                        <td><a href="<?php echo Yii::app()->createUrl('request/Picking');?>" class="btn btn-info btn-xs">
                            <!--<i class="ace-icon fa fa-table fa-lg"></i>-->
                            Picking
                            </a></td>
                    </tr>
                    <tr>
                        <td>TLC01-TOLUCA COLON</td>
                        <td><a href="#">130657</a></td>
                        <td>Importadora la Americana (4532)</td>
                        <td>2014-10-26 11:11:10</td>
                        <td><a href="<?php echo Yii::app()->createUrl('request/Picking');?>" class="btn btn-info btn-xs">
                            <!--<i class="ace-icon fa fa-table fa-lg"></i>-->
                            Picking
                            </a></td>
                    </tr>
                    <tr>
                        <td>TLC01-TOLUCA COLON</td>
                        <td><a href="#">129249</a></td>
                        <td>Importadora la Americana (4532)</td>
                        <td>2014-10-30 10:44:27</td>
                        <td><a href="<?php echo Yii::app()->createUrl('request/Transport');?>" class="btn btn-info btn-xs">
                            <!--<i class="ace-icon fa fa-table fa-lg"></i>-->
                            Confirmaci&oacute;n Transporte
                            </a></td>
                    </tr>
                    <tr>
                        <td>TLC01-TOLUCA COLON</td>
                        <td><a href="#">120637</a></td>
                        <td>Importadora la Americana (4532)</td>
                        <td>2014-10-26 11:11:10</td>
                        <td><a href="#" class="btn btn-info btn-xs">
                            <!--<i class="ace-icon fa fa-table fa-lg"></i>-->
                            Lista para Embarque
                            </a></td>
                    </tr>
                    <tr>
                        <td>TLC01-TOLUCA COLON</td>
                        <td><a href="#">129222</a></td>
                        <td>Importadora la Americana (4532)</td>
                        <td>2014-10-30 10:15:10</td>
                        <td><a href="<?php echo Yii::app()->createUrl('request/Picking');?>" class="btn btn-info btn-xs">
                            <!--<i class="ace-icon fa fa-table fa-lg"></i>-->
                            Picking
                            </a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <!-- PAGE CONTENT ENDS -->
</div>
</div>
</div>

<script type="text/javascript">

    $(document).ready(function() {
        $('#picking_table').DataTable({
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
    });
</script>
