
<div class="page-content-area">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">

                <div class="col-xs-12">
                    <div class="table-header">
                        Productos Registrados
                        | <div class="btn-group btn-group-sm"><a href="#newProduct-form" class="btn btn-success" id="btnusernew" data-target="#newProduct-form" data-toggle="modal">Nuevo Almacen</a></div>
                    </div>
                    <div class="table-responsive"> 

                       <div class="dataTables_borderWrap"> 

                        <table id="product_table" class="table table-striped table-bordered table-hover tbl-display">
                            <thead>
                                <tr>
                                    <th>Complejo</th>
                                    <th>Tipo</th>
                                    <th>Nombre</th>
                                    <th>Direcci&oacute;n</th>
                                    <th>Colonia</th>
                                    <th>CP</th>
                                    <th>Pais</th>
                                    <th>Estado</th>
                                    <th>Municipio</th>
                                    <th>Poblaci&oacute;n</th>
                                    <th>Dimensiones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TLC01 - TOLUCA</td>
                                    <td>Multibodega</td>
                                    <td>Bodega 01</td>
                                    <td>Equiles Serdan S/N</td>
                                    <td>Barranca del Muerto</td>
                                    <td>04567</td>
                                    <td>M&eacute;xico</td>
                                    <td>DF</td>
                                    <td>Miguel Hidalgo</td>
                                    <td>Miguel Hidalgo</td>
                                    <td>150L x 100A Mts</td>
                                </tr>
                                <tr>
                                    <td>QR01 - QUERETARO</td>
                                    <td>Multibodega 2</td>
                                    <td>Bodega 10</td>
                                    <td>Paseo de Cazadores 15</td>
                                    <td>Fuentes de Bellavista</td>
                                    <td>34567</td>
                                    <td>M&eacute;xico</td>
                                    <td>Queretaro</td>
                                    <td>Queretaro</td>
                                    <td>Queretaro</td>
                                    <td>100L x 150A Mts</td>
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

<div id="newProduct-form" class="modal" tabindex="-1">
    <div class="modal-dialog" style="width:900px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Ingresar informaci&oacute;n para crear nuevo Almacen</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="form">
                            <?php $this->renderPartial('_a_formAlmacen'); ?>
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
    });
</script>