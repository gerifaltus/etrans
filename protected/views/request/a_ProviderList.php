
<div class="page-content-area">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">

                <div class="col-xs-12">
                    <div class="table-header">
                        Proveedores Registrados
                        | <div class="btn-group btn-group-sm"><a href="#newProvider-form" class="btn btn-success" id="btnusernew" data-target="#newProvider-form" data-toggle="modal">Nuevo Proveedor</a></div>
                    </div>
                    <div class="table-responsive"> 

                       <div class="dataTables_borderWrap"> 

                        <table id="product_table" class="table table-striped table-bordered table-hover tbl-display">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Raz&oacute;n Social</th>
                                    <th>RFC</th>
                                    <th>Domicilio</th>
                                    <th>Tel. Contacto</th>
                                    <th>E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Procter & Gamber</td>
                                    <td>Procter & Gamber S.A de C.V</td>
                                    <td>ABCD123422FB8</td>
                                    <td>Domicilio Conocido</td>
                                    <td>55436789</td>
                                    <td>png@procter.com</td>
                                </tr>
                                <tr>
                                    <td>Bacardi</td>
                                    <td>Bacardi S.A de C.V</td>
                                    <td>EFGH123422GC4</td>
                                    <td>Domicilio Conocido</td>
                                    <td>54769832</td>
                                    <td>bacardi_clientes@bacardi.com</td>
                                </tr>          
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- PAGE CONTENT ENDS -->

<!--Ventana modal para ejecutar la creacion del nuevo complejo -->

<div id="newProvider-form" class="modal" tabindex="-1">
    <div class="modal-dialog" style="width:500px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Informaci&oacute;n para nuevo Proveedor</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="form">
                            <?php $this->renderPartial('_a_formProvider'); ?>
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
        </div>
    </div>
</div><!-- PAGE CONTENT ENDS -->

<script type="text/javascript">

    $(document).ready(function() {

        $('#product_table').DataTable({
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