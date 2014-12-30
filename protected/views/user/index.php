<div class="page-content-area">
    <div class="page-header">
        <h1>
            Usuarios
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Listado
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">

                <div class="col-xs-12">
                <div class="btn-group btn-group-sm">
                    <a href="<?php echo  Yii::app()->createUrl('user/create'); ?>" class="btn btn-success" id="btnusernew" data-target="#newproject3" >Nuevo Usuario</a>
                </div>
                    <hr>
                    <div class="table-header">
                        Usuarios Registrados
                    </div>

                    <!-- <div class="table-responsive"> -->

                    <!-- <div class="dataTables_borderWrap"> -->
                    <div>
                        <table id="user_list_table" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre Completo</th>
                                    <th>Usuario</th>
                                    <th>Password</th>
                                    <th>Compa&ntilde;ia</th>
                                    <th>Estatus</th>
                                    <th>Permisos</th>
                                    <th>Operaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //print_r($dataProvider->getData());
                                //$d = $dataProvider->getData();
                                foreach ($dataProvider as $data => $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row->name . " " . $row->lastname; ?></td>
                                        <td><?php echo $row->username; ?></td>
                                        <td><a href="#modal-form" class="btn btn-danger" id="btnchgpwd_<?php echo $row->iduser ?>" data-target="#modal-form" onclick="modal_fillinputs(<?php echo $row->iduser; ?>)" data-uname ="<?php echo $row->username; ?>" data-email="<?php echo $row->email; ?>"  data-toggle="modal"><i class="glyphicon glyphicon-off"></i>&nbsp;Resetear</a></td>
                                        <td><?php echo $row->Rcompany->businessname; ?></td>
                                        <td><?php echo $row->active; ?></td>
                                        <td><?php echo $row->active; ?></td>
                                        <td>
                                            <div class="hidden-sm hidden-xs action-buttons">
                                                <a class="blue" href="#">
                                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                </a>

                                                <a class="green" href="#">
                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                </a>

                                                <a class="red" href="#">
                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->

    <!--Ventana modal para ejecutar el reseteo del password -->
    <div id="modal-form" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="blue bigger">Porfavor confirme los siguientes campos</h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="form-group">
                                <label for="form-field-select-3">Username</label>

                                <div>
                                    <input class="input-large" type="text" id="form-field-username" placeholder="Username" value="" readonly />
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label for="form-field-email">Email</label>

                                <div>
                                    <input class="input-large" type="text" id="form-field-email" placeholder="Email" value="" readonly />
                                </div>
                            </div>  
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

                    <button class="btn btn-sm btn-primary" onclick="modal_resetpwd()">
                        <i class="ace-icon fa fa-check"></i>
                        Reset Password
                    </button>
                </div>
            </div>
        </div>
    </div><!-- PAGE CONTENT ENDS -->

</div><!-- /.page-content-area -->

<!-- inline scripts related to this page -->
<script type="text/javascript">
    /* inicializar el datatables para CGridView*/
    $(document).ready(function() {
        $('#user_list_table').DataTable({
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


    function modal_fillinputs(id)
    {
        var uname = $("#btnchgpwd_" + id).data("uname");
        var email = $("#btnchgpwd_" + id).data("email");

        $("#form-field-username").val(uname);
        $("#form-field-email").val(email);

        $('#box_msg').hide();
        $('#msg_sucess').hide();
        $('#msg_alert').hide();

    }

    function modal_resetpwd()
    {

        var user = $("#form-field-username").val();
        var email = $("#form-field-email").val();

        $.ajax({
            url: "<?php echo Yii::app()->createUrl('user/ResetPwd'); ?>",
            type: "POST",
            data: {
                'username': user,
                'email': email
            },
            beforeSend: function() {
                $('#box_msg').show();
                $('#msg_sucess').hide();
                $('#msg_alert').hide();
                $('#img_procesing').show();
            },
            success: function(data) {
                $('#img_procesing').hide();
                if (data.error === true)
                {
                    $('#msg_alert p').append(data.msg);
                    $('#msg_sucess').hide();
                    $('#msg_alert').show();
                } else {
                    $('#msg_alert').hide();
                    $('#msg_sucess p').append(data.msg)
                    $('#msg_sucess').show();
                }
            },
            error: function(data) {
                $('#img_procesing').hide();
                $('#msg_alert p').append(data.msg);
                $('#msg_alert').show();
            }

        });
    }
</script>