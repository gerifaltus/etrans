
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
            Picking List            
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
                        <th>Prioridad</th>
                        <th>Estatus</th>
                        <th>Surtir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TLC01-TOLUCA COLON</td>
                        <td><a href="#">134273</a></td>
                        <td>Salinas Distributions (15467)</td>
                        <td>2014-11-17 13:45:54</td>
                        <td>Alta</td>
                        <td><span class="label label-lg" style="background-color: green !important;">100%</span></td>
                        <td><a href="<?php echo Yii::app()->createUrl('request/PickingSupply ');?>" class="btn btn-info btn-xs">
                            <i class="ace-icon fa fa-table fa-lg"></i>
                            </a>
                        </td>
                    </tr>   
                    <tr>
                        <td>TLC01-TOLUCA COLON</td>
                        <td><a href="#">127334</a></td>
                        <td>Salinas Distributions (15467)</td>
                        <td>2014-11-17 18:49:26</td>
                        <td>Alta</td>
                        <td><span class="label label-lg" style="background-color: red !important;">10%</span></td>
                        <td><a href="#" class="btn btn-info btn-xs">
                            <i class="ace-icon fa fa-table fa-lg"></i>
                            </a></td>
                    </tr>
                    <tr>
                        <td>TLC01-TOLUCA COLON</td>
                        <td><a href="#">129442</a></td>
                        <td>Importadora la Americana (4532)</td>
                        <td>2014-10-30 10:44:27</td>
                        <td>Baja</td>
                        <td><span class="label label-lg" style="background-color: red !important;">10%</span></td>
                        <td><a href="#" class="btn btn-info btn-xs">
                            <i class="ace-icon fa fa-table fa-lg"></i>
                            </a></td>
                    </tr>
                    <tr>
                        <td>TLC01-TOLUCA COLON</td>
                        <td><a href="#">130657</a></td>
                        <td>Importadora la Americana (4532)</td>
                        <td>2014-10-26 11:11:10</td>
                        <td>Media</td>
                        <td><span class="label label-lg" style="background-color: yellow !important; color: #000;">57%</span></td>
                        <td><a href="#" class="btn btn-info btn-xs">
                            <i class="ace-icon fa fa-table fa-lg"></i>
                            </a></td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix">
                <div style="display:block; clear:both;" class="text-center">
                    <br>
                    <br>
                    <span class="label label-lg" style="background-color: green !important;">En Espera de Distribuci&oacute;n</span>
                    <span class="label label-lg" style="background-color: yellow !important; color: #000;">En Proceso</span>
                    <span class="label label-lg" style="background-color: red !important;">Pendiente</span>
                </div>
            </div>
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
