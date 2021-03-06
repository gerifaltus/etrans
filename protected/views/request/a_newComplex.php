
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
            Complejos Registrados
            | <div class="btn-group btn-group-sm"><a href="#newComplex-form" class="btn btn-success" id="btnusernew" data-target="#newComplex-form" data-toggle="modal">Nuevo Complejo</a></div>
        </div>
        <div>
            <table id="complex_table" class="table table-striped table-bordered table-hover tbl-display">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Complejo</th>
                        <th>Ubicaci&oacute;n</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TLC</td>
                        <td>TOLUCA</td>
                        <td>Map</td>
                    </tr>   
                    <tr>
                        <td>CMX</td>
                        <td>CHALPULTEPEC</td>
                        <td>Map</td>
                    </tr>   
                </tbody>
            </table>
        </div>

    </div>
    <!-- PAGE CONTENT ENDS -->
</div>
</div>
</div>

<!--Ventana modal para ejecutar la creacion del nuevo complejo -->
<div id="newComplex-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Ingresar informaci&oacute;n para crear nuevo Complejo</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="form">
                            <form class="form-horizontal" id="validation-form" method="post">
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="referencia">Clave:</label>

                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="RequestForm[]" id="email" class="col-xs-12 col-sm-6" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="referencia">Nombre:</label>

                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="RequestForm[]" id="email" class="col-xs-12 col-sm-6" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div><!-- form --> 
                    </div>
                    <div class="col-xs-12 col-sm-8" style="display: none;" id="box_msg">
                        <h5 class="header smaller" style="border-bottom:0px; display: none;" id="img_procesing">
                            <i class="ace-icon fa fa-spinner fa-spin blue bigger-125"></i>
                            Procesando petici&oacute;n....
                        </h5>
                        <div class="alert alert-danger" style="display: block;" id="msg_alert">
                            <p>

                            </p>    
                        </div>
                        <div class="alert alert-block alert-success" style="display: block;" id="msg_sucess">
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal" >
                    <i class="ace-icon fa fa-times"></i>
                    Cerrar
                </button>

                <button class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Reset Password
                </button>
            </div>
        </div>
    </div>
</div><!-- PAGE CONTENT ENDS -->

<!-- inline scripts related to this page 
<script type="text/javascript">

    $(document).ready(function() {
        $('#complex_table').DataTable({
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
-->