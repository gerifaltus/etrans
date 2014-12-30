
<div class="page-content-area">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">

                <div class="col-xs-12">
                    <div class="table-header">
                        Productos Registrados
                        | <div class="btn-group btn-group-sm"><a href="#newProduct-form" class="btn btn-success" id="btnusernew" data-target="#newProduct-form" data-toggle="modal">Nuevo Producto</a></div>
                    </div>
                    <div class="table-responsive"> 

                       <div class="dataTables_borderWrap"> 

                        <table id="product_table" class="table table-striped table-bordered table-hover tbl-display">
                            <thead>
                                <tr>
                                    <th>C&oacute;digo</th>
                                    <th>Item</th>
                                    <th>Categoria</th>
                                    <th>PxC</th>
                                    <th>PU</th>
                                    <th>Descripción</th>
                                    <th>Alto</th>
                                    <th>Largo</th>
                                    <th>Ancho</th>
                                    <th>Peso</th>
                                    <th>Estiba M&aacute;xima</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10000345678</td>
                                    <td>75000123456</td>
                                    <td>Alimentos</td>
                                    <td>10</td>
                                    <td>15.00</td>
                                    <td>Cocacola Lata 350ml</td>
                                    <td>35</td>
                                    <td>50</td>
                                    <td>30</td>
                                    <td>8</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>10000342354</td>
                                    <td>75000325476</td>
                                    <td>Salud y Belleza</td>
                                    <td>15</td>
                                    <td>18.00</td>
                                    <td>Crema Corporal Dove 350ml</td>
                                    <td>25</td>
                                    <td>30</td>
                                    <td>50</td>
                                    <td>10</td>
                                    <td>4</td>
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
                <h4 class="blue bigger">Ingresar informaci&oacute;n para crear nuevo Producto</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="form">
                            <?php $this->renderPartial('_a_formProduct'); ?>
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