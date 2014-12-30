<?php
//print_r($model);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Porto Print - Warehouse - InTrance</title>

        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/font-awesome.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/ace-fonts.css" />

        <!-- ace styles -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/ace.min.css" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/ace-part2.min.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/ace-ie.min.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/ace.onpage-help.css" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/html5shiv.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-layout">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h4 class="blue" id="id-company-text">&copy; PPT Warehouse</h4>
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <!--php para decidir si se muestra el form del resetpwd-->
                                    <?php if ($renderFormReset == true) { ?>
                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <h4 class="header blue lighter bigger">
                                                    <i class="ace-icon fa fa-coffee green"></i>
                                                    Por favor ingrese la informaci&oacute;n que se solicita
                                                </h4>

                                                <div class="space-6"></div>

                                                <form  action="/pptwarehouse/pptwarehouse/index.php?r=user/changePwd" method="post">
                                                    <fieldset>
                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
                                                                <input id="password" name="ResetForm[password]" type="password" class="form-control" placeholder="Nuevo Password" />
                                                                <i class="ace-icon fa fa-lock"></i>
                                                            </span>
                                                        </label>

                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
                                                                <input id="password2" name="ResetForm[password2]" type="password" class="form-control" placeholder="Repetir Nuevo Password" />
                                                                <i class="ace-icon fa fa-lock"></i>
                                                            </span>
                                                        </label>

                                                        <div class="space"></div>

                                                        <div class="clearfix">
                                                            <input id="hash" name="ResetForm[h]" type="hidden" class="form-control" value="<?php echo $h ?>" />
                                                            <input id="email" name="ResetForm[e]" type="hidden" class="form-control" value="<?php echo $e ?>"/>
                                                            <input id="reset" name="ResetForm[rs]" type="hidden" class="form-control" value="<?php echo $rs ?>"/>
                                                            <input name="login" type="button" onclick="changepwd()" class="width-45 pull-right btn btn-sm btn-primary" value="Cambiar Password">
                                                                <!--<i class="ace-icon fa fa-key"></i>
                                                                <span class="bigger-110">Login</span>
                                                            -->
                                                        </div>

                                                        <div class="space-4"></div>
                                                    </fieldset>
                                                </form>
                                                <div class="space-4"></div>
                                            </div>
                                            <div class="" style="display: none;" id="box_msg_pwd">
                                                <h5 class="header smaller" style="border-bottom:0px; display: block;" id="img_procesing_pwd">
                                                    <i class="ace-icon fa fa-spinner fa-spin blue bigger-125"></i>
                                                    Procesando petici&oacute;n....
                                                </h5>
                                                <div class="alert alert-danger" style="display: none;" id="msg_alert_pwd">
                                                    <p>

                                                    </p>    
                                                </div>
                                                <div class="alert alert-block alert-success" style="display: none;" id="msg_sucess_pwd">
                                                    <p>

                                                    </p>
                                                </div>
                                            </div>
                                            <div class="clearfix">

                                            </div>
                                        </div><!-- /.widget-main -->

                                        <div class="toolbar clearfix">
                                            <div>

                                            </div>

                                        </div>
                                    </div><!-- /.widget-body -->
                                <?php } else { ?>
                                    <div class="widget-main">
                                        <h4 class="header blue lighter bigger">
                                            Existe un problema para mostrar el formulario, porfavor refierase a su correo electr&oacute;nico para más informaci&oacute;n o consulte con el administrador del sistema.
                                        </h4>
                                    </div>
                                    <div class="toolbar clearfix">
                                        <label class="inline">
                                            <a class="forgot-password-link" href="<?php echo Yii::app()->request->getBaseUrl(true) . '/index.php?r=site/login' ?>">
                                                <i class="ace-icon fa fa-home"></i>
                                                Inicio
                                            </a>
                                        </label>
                                    </div>

                                <?php } ?>
                                <!--php para decidir si se muestra el form del resetpwd-->
                            </div><!-- /.login-box -->
                        </div><!-- /.position-relative -->
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.main-content -->
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script type="text/javascript">
        window.jQuery || document.write("<script src='<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery.min.js'>" + "<" + "/script>");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement)
            document.write("<script src='<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            $(document).on('click', '.toolbar a[data-target]', function(e) {
                e.preventDefault();
                var target = $(this).data('target');
                $('.widget-box.visible').removeClass('visible');//hide others
                $(target).addClass('visible');//show target

            });
        });
    </script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        /* inicializar el datatables para CGridView*/
        $(document).ready(function() {

        });

        function changepwd()
        {

            $('#box_msg_pwd').hide();
            $('#msg_sucess_pwd').hide();
            $('#msg_alert_pwd').hide();


            var password = $("#password").val();
            var password2 = $("#password2").val();
            var email = $("#email").val();
            var hash = $("#hash").val();
            var reset = $("#reset").val();


            $.ajax({
                url: "<?php echo Yii::app()->createUrl('site/ChangePwd'); ?>",
                type: "POST",
                data: {
                    'password': password,
                    'password2': password2,
                    'email': email,
                    'hash': hash,
                    'reset': reset,
                },
                beforeSend: function() {
                    $('#box_msg_pwd').show();
                    $('#msg_sucess_pwd').hide();
                    $('#msg_alert_pwd').hide();
                    $('#img_procesing_pwd').show();
                },
                success: function(data) {
                    $('#img_procesing_pwd').hide();
                    if (data.sucess === false)
                    {
                        $('#msg_alert_pwd p').html(data.msg);
                        $('#msg_sucess_pwd').hide();
                        $('#msg_alert_pwd').show();
                    } else {
                        $('#msg_alert_pwd').hide();
                        $('#msg_sucess_pwd p').html(data.msg)
                        $('#msg_sucess_pwd').show();
                    }
                },
                error: function(data) {
                    $('#img_procesing_pwd').hide();
                    $('#msg_alert_pwd p').html(data.msg);
                    $('#msg_alert_pwd').show();
                }

            });


        }
    </script>
</body>
</html>
