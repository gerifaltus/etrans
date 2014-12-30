<div class="page-content-area">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">

                <div class="col-xs-12">
                    <div class="table-header">
                        Lista de Pre-ingresos confirmados
                    </div>

                    <!-- <div class="table-responsive"> -->

                    <!-- <div class="dataTables_borderWrap"> -->
                    <div>
                        <table id="confirm_request_table" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Cita</th>
                                    <th>Horario</th>
                                    <th>Pedido</th>
                                    <th>Compañia</th>
                                    <th>Volumen</th>
                                    <th>Veh&iacute;culo</th>
                                    <th>Estatus</th>
                                    <th>Ingresar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1410211234</td>
                                    <td>21/Oct/2014</td>
                                    <td>123456</td>
                                    <td>BACARDI</td>
                                    <td>35 PALLETS</td>
                                    <td>TRAILER 1</td>
                                    <td style="color:blue;"><strong>Confirmada</strong></td>
                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="<?php echo Yii::app()->createUrl('request/receiving'); ?>">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1410225678</td>
                                    <td>22/Oct/2014 13:00</td>
                                    <td>456789</td>
                                    <td>PROCTER & GAMBER</td>
                                    <td>55 PALLETS</td>
                                    <td>TRAILER 2</td>
                                    <td style="color:blue;"><strong>Confirmada</strong></td>
                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="<?php echo Yii::app()->createUrl('request/receiving'); ?>">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1410235678</td>
                                    <td>23/Oct/2014 12:00</td>
                                    <td>987654</td>
                                    <td>ASPEN</td>
                                    <td>35 CAJAS</td>
                                    <td>TRAILER 1</td>
                                    <td style="color:blue;"><strong>Confirmada</strong></td>
                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="<?php echo Yii::app()->createUrl('request/receiving'); ?>">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>0000000000</td>
                                    <td>00/000/0000 00:00</td>
                                    <td>654321</td>
                                    <td>ASPEN</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td style="color:red;"><strong>Autorizada</strong></td>
                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="<?php echo Yii::app()->createUrl('request/receiving'); ?>">
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