<div class="page-content-area">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">

                <div class="col-xs-12">
                    <div class="table-header">
                        Lista de Citas Agendadas
                    </div>

                    <!-- <div class="table-responsive"> -->

                    <!-- <div class="dataTables_borderWrap"> -->
                    <div>
                        <table id="confirm_request_table" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Cita</th>
                                    <th>Horario</th>
                                    <th>Compañia</th>
                                    <th>Volumen</th>
                                    <th>Veh&iacute;culo</th>
                                    <th>Tipo</th>
                                    <th>Estatus</th>
                                    <th>Archivo</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1410211234</td>
                                    <td>21/Oct/2014</td>
                                    <td>BACARDI</td>
                                    <td>35 PALLETS</td>
                                    <td>TRAILER 1</td>
                                    <td>Normal</td>
                                    <td>Confirmada</td>
                                    <td style="text-align: center;">
                                        <button class="btn btn-info btn-xs">
                                            <i class="fa fa-file-pdf-o  bigger-125"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="<?php echo Yii::app()->createUrl('request/confirmRequest');?>">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1410225678</td>
                                    <td>22/Oct/2014 13:00</td>
                                    <td>PROCTER & GAMBER</td>
                                    <td>55 PALLETS</td>
                                    <td>TRAILER 2</td>
                                    <td>Normal</td>
                                    <td>Pendiente</td>
                                    <td style="text-align: center;"><button class="btn btn-info btn-xs">
                                            <i class="fa fa-file-pdf-o  bigger-125"></i>
                                        </button></td>
                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1410235678</td>
                                    <td>23/Oct/2014 12:00</td>
                                    <td>ASPEN</td>
                                    <td>35 CAJAS</td>
                                    <td>TRAILER 1</td>
                                    <td>Re-Asignada (1)</td>
                                    <td>Pendiente</td>
                                    <td style="text-align: center;"><button class="btn btn-info btn-xs">
                                            <i class="fa fa-file-pdf-o  bigger-125"></i>
                                        </button></td>
                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1410245678</td>
                                    <td>24/Oct/2014 15:00</td>
                                    <td>ASPEN</td>
                                    <td>10 PALLETS</td>
                                    <td>TORTON</td>
                                    <td>Re-Asignada (3)</td>
                                    <td>Pendiente</td>
                                    <td style="text-align: center;"><button class="btn btn-info btn-xs">
                                            <i class="fa fa-file-pdf-o  bigger-125"></i>
                                        </button></td>
                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content-area -->

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
    });
</script>