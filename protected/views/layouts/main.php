<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Dashboard - e-Trans</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/font-awesome.min.css" />

    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/jquery-ui.custom.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/ace-fonts.css" />

    <!-- ace styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/ace.min.css" id="main-ace-style" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/ace-part2.min.css" />
                <![endif]-->
                <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/ace-skins.min.css" />
                <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/ace-rtl.min.css" />

                <!-- css para datatables -->
                <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/dataTables.bootstrap.css" />
                <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/dataTables.responsive.css" />

                <!-- css para datepicker-->
                <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/datepicker.css" />

                <!-- css para fullcalendar -->
                <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/fullcalendar.css" />
                
                <!-- css para plugin accordion layout almacen -->
                <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/jquery-ui.min.css" />

                <!-- css para plugin datetimepicker (ingresos -> receiving) -->
                <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/bootstrap-datetimepicker.css" />
                

        <!--[if lte IE 9]>
          <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/ace-ie.min.css" />
          <![endif]-->

          <!-- inline styles related to this page -->

          <!-- ace settings handler -->
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/ace-extra.min.js"></script>

          <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/html5shiv.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/respond.min.js"></script>
        <![endif]-->





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
<script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/excanvas.min.js"></script>
          <![endif]-->

          
          <!-- js para el accordion layout almacen -->
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery-ui.min.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery.ui.touch-punch.min.js"></script>

          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery-ui.custom.min.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery.ui.touch-punch.min.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery.easypiechart.min.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery.sparkline.min.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/flot/jquery.flot.min.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/flot/jquery.flot.pie.min.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/flot/jquery.flot.resize.min.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/date-time/moment.min.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/fullcalendar.min.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/bootbox.min.js"></script>

          <!-- ace scripts -->
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/ace-elements.min.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/ace.min.js"></script>


          <!-- js para datatables -->
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery.dataTables.min.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery.dataTables.bootstrap.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/dataTables.responsive.js"></script>

          <!-- js para wizard -citas -->
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/fuelux/fuelux.wizard.min.js"></script>

          <!-- js para el datepicker calendar e idioma español-->
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/date-time/bootstrap-datepicker.min.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/date-time/locales/bootstrap-datepicker.es.js"></script>

          <!-- js para mostrar el tree del lado derecho del layout del almacen-->
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/fuelux/data/fuelux.tree-sample-demo-data.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/fuelux/fuelux.tree.min.js"></script>

          <!-- js para mostrar y ejecutar plugin datetime-piker (ingresos -> receiving) -->
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/date-time/bootstrap-datetimepicker.min.js"></script>

          <!-- js para libreria canvas, layout almacen -->
          <!--<script src="<?php //echo Yii::app()->request->baseUrl; ?>/theme/js/fabric.min.js"></script>        -->

          <!-- js para cargar el colorpicker en layout almacen -->
          <!--<script src="<?php //echo Yii::app()->request->baseUrl; ?>/theme/js/jquery.simple-color.js"></script>      -->  
          
          <!-- js para tabletools de datatables -->
          <!--<script src="http://cdn.datatables.net/tabletools/2.2.3/js/dataTables.tableTools.min.js"></script>-->

          <!-- js para editor en linea de datatables -->
          <!--<script src="http://editor.datatables.net/media/js/dataTables.editor.min.js"></script>-->

      </head>

      <body class="no-skin">
        <!-- #section:basics/navbar.layout -->
        <div id="navbar" class="navbar navbar-default">
            <script type="text/javascript">
            try {
                ace.settings.check('navbar', 'fixed')
            } catch (e) {
            }
            </script>

            <div class="navbar-container" id="navbar-container">
                <!-- #section:basics/sidebar.mobile.toggle -->
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>

                <!-- /section:basics/sidebar.mobile.toggle -->
                <div class="navbar-header pull-left">
                    <!-- #section:basics/navbar.layout.brand -->
                    <a href="#" class="navbar-brand">
                        <!--<small>-->
                            <i class="fa fa-leaf"></i>
                            <?php //echo Yii::app()->user->getIsGuest() ? 'Visitante' : Yii::app()->user->fullname; ?>
                            e-Trans
                        <!--</small>-->
                    </a>

                    <!-- /section:basics/navbar.layout.brand -->

                    <!-- #section:basics/navbar.toggle -->

                    <!-- /section:basics/navbar.toggle -->
                </div>

                <!-- #section:basics/navbar.dropdown -->
                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <!-- #section:basics/navbar.user_menu -->
                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?php echo Yii::app()->request->baseUrl; ?>/theme/avatars/user.jpg" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>Bienvenido,</small>
                                    <?php echo Yii::app()->user->getIsGuest() ? 'Visitante' : Yii::app()->user->fullname; ?>
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="/pptwarehouse/pptwarehouse/index.php?r=site/logout">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- /section:basics/navbar.user_menu -->
                    </ul>
                </div>

                <!-- /section:basics/navbar.dropdown -->
            </div><!-- /.navbar-container -->
        </div>

        <!-- /section:basics/navbar.layout -->
        <div class="main-container" id="main-container">
            <script type="text/javascript">
            try {
                ace.settings.check('main-container', 'fixed')
            } catch (e) {
            }
            </script>

            <!-- #section:basics/sidebar -->
            <div id="sidebar" class="sidebar                  responsive">
                <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'fixed')
                } catch (e) {
                }
                </script>

                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-success">
                            <i class="ace-icon fa fa-signal"></i>
                        </button>

                        <button class="btn btn-info">
                            <i class="ace-icon fa fa-pencil"></i>
                        </button>

                        <!-- #section:basics/sidebar.layout.shortcuts -->
                        <button class="btn btn-warning">
                            <i class="ace-icon fa fa-users"></i>
                        </button>

                        <button class="btn btn-danger">
                            <i class="ace-icon fa fa-cogs"></i>
                        </button>

                        <!-- /section:basics/sidebar.layout.shortcuts -->
                    </div>

                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>

                        <span class="btn btn-info"></span>

                        <span class="btn btn-warning"></span>

                        <span class="btn btn-danger"></span>
                    </div>
                </div><!-- /.sidebar-shortcuts -->

                <ul class="nav nav-list">
                    <li class="active">
                        <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> Citas </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/index'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Nueva Cita
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/reasign'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Reasignar Cita <!-- mismo que nueva cita pero con dos pantallas, campos pedido, cita anterior, calendario, hora y confirmar en la segunda vista del wizard --> 
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/itinerary'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Itinerario
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/listRequest'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Confirmar citas
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/newProduct'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Cat&aacute;logo de Productos
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> Almac&eacute;n </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/listConfirmed'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Ingresos
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Salidas
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>
                                <ul class="submenu">
                                    <li class="">
                                        <a href="<?php echo Yii::app()->createUrl('request/outorder'); ?>">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Nuevo
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo Yii::app()->createUrl('request/ListOrderOut'); ?>">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Lista Estatus
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                </ul> 
                            </li>

                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/Picking'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Picking
                                </a>

                                <b class="arrow"></b>
                                                                   
                            </li>

                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/transfer'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Transferencias
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="#">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    <strong>Autorizaciones</strong>
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> Cat&aacute;logos</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/newComplex'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Complejo
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/newAlmacen'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Almac&eacute;n
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/newProduct'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Producto
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/ProviderList'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Proveedor
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> Control de Stock</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/ExistProduct '); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Existencias
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/TransferProduct '); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Traspasos
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/PhysicalInventory');?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Inventario F&iacute;sico & C&iacute;clico
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/InventoryAdjustmentsList');?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Ajustes de Inventario
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-picture-o"></i>
                            <span class="menu-text"> Reportes </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a >
                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/ExistReport '); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Existencias
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?php echo Yii::app()->createUrl('request/MovsReport '); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Movimientos
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    <!--
                    <li class="">
                        <a href="<?php //echo Yii::app()->createUrl('user/index');?>">
                            <i class="menu-icon fa fa-picture-o"></i>
                            <span class="menu-text"> Usuarios </span>
                        </a>

                    </li>-->

                </ul><!-- /.nav-list -->

                <!-- #section:basics/sidebar.layout.minimize -->
                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>

                <!-- /section:basics/sidebar.layout.minimize -->
                <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'collapsed')
                } catch (e) {
                }
                </script>
            </div>

            <!-- /section:basics/sidebar -->
            <div class="main-content">
                <!-- #section:basics/content.breadcrumbs -->
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                    try {
                        ace.settings.check('breadcrumbs', 'fixed')
                    } catch (e) {
                    }
                    </script>

                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">Dashboard</li>
                    </ul><!-- /.breadcrumb -->
                </div>

                <!-- /section:basics/content.breadcrumbs -->
                <div class="page-content">
                    <!-- AQUI VA EL PAGE-CONTENT-AREA PARA EL TEMPLATE ACE DE WRAPBOOTSTRAP-->
                    <?php echo $content; ?>
                </div>
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <!-- #section:basics/footer -->
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">Ace</span>
                            Application &copy; 2013-2014
                        </span>

                        &nbsp; &nbsp;
                        <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div>

                    <!-- /section:basics/footer -->
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

    </body>
    </html>
