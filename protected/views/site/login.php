
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Login Page - Ace Admin</title>

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
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header blue lighter bigger">
                                                <i class="ace-icon fa fa-coffee green"></i>
                                                Por favor inicie sesi&oacute;n
                                            </h4>

                                            <div class="space-6"></div>

                                            <form  action="<?php echo Yii::app()->createUrl('site/login ');?>" method="post">
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input name="LoginForm[username]" type="text" class="form-control" placeholder="Username" />
                                                            <i class="ace-icon fa fa-email"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input name="LoginForm[password]" type="password" class="form-control" placeholder="Password" />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>

                                                    <div class="space"></div>

                                                    <div class="clearfix">
                                                        <label class="inline">
                                                            <!--<input type="checkbox" class="ace" />
                                                            <span class="lbl"> Recordar Sesi&oacute;n</span>-->
                                                        </label>

                                                        <input name="login" type="submit" class="width-35 pull-right btn btn-sm btn-primary" value="Login">
                                                            <!--<i class="ace-icon fa fa-key"></i>
                                                            <span class="bigger-110">Login</span>
                                                        -->
                                                    </div>

                                                    <div class="space-4"></div>
                                                </fieldset>
                                            </form>
                                            <div class="col-xs-12 col-sm-12" id="box_msg">
                                                <div class="space-14"></div>
                                                <?php
                                                if (isset($json) && count($json) > 0) {
                                                    if ($json['sucess'] == false) {
                                                        ?>

                                                        <div class="alert alert-danger" id="msg_alert">
                                                            <p>
                                                                <?php echo $json['msg']; ?>
                                                            </p>    
                                                        </div>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <div class="alert alert-block alert-success" id="msg_sucess">
                                                            <p>
                                                                <?php echo $json['msg']; ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div><!-- /.widget-main -->

                                        <div class="toolbar clearfix">
                                            <div>
                                                <a href="#" data-target="#forgot-box" class="forgot-password-link">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    He olvidado mi password
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- /.widget-body -->
                                </div><!-- /.login-box -->

                                <div id="forgot-box" class="forgot-box widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header red lighter bigger">
                                                <i class="ace-icon fa fa-key"></i>
                                                Ha olivado su password?
                                            </h4>

                                            <div class="space-6"></div>
                                            <p>
                                                Ingrese su correo para recibir instrucciones y cambiar su password de acceso.
                                            </p>

                                            <form>
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="email" class="form-control" placeholder="Email" id="emailResetPwd" />
                                                            <i class="ace-icon fa fa-envelope"></i>
                                                        </span>
                                                    </label>

                                                    <div class="clearfix">
                                                        <button onclick="resetpwd()" type="Button" class="btn btn-sm btn-primary">
                                                            <i class="ace-icon fa fa-lightbulb-o"></i>
                                                            <span class="bigger-110">Enviar!</span>
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                            <div class="space-4"></div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12" style="display: none;" id="box_msg_pwd">
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

                                        <div class="toolbar center">
                                            <a href="#" data-target="#login-box" class="back-to-login-link">
                                                Back to login
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div><!-- /.widget-body -->
                                </div><!-- /.forgot-box -->
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

                    $('#box_msg_pwd').hide();
                    $('#msg_sucess_pwd').hide();
                    $('#msg_alert_pwd').hide();

                });
            });

        </script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            /* inicializar el datatables para CGridView*/
            $(document).ready(function() {

            });

            function resetpwd()
            {

                var email = $("#emailResetPwd").val();


                $.ajax({
                    url: "<?php echo Yii::app()->createUrl('user/ResetPwd'); ?>",
                    type: "POST",
                    data: {
                        'email': email
                    },
                    beforeSend: function() {
                        $('#box_msg_pwd').show();
                        $('#msg_sucess_pwd').hide();
                        $('#msg_alert_pwd').hide();
                        $('#img_procesing_pwd').show();
                    },
                    success: function(data) {
                        $('#img_procesing_pwd').hide();
                        if (data.error === true)
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
