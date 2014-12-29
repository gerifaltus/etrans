<?php
/* @var $this SiteController */

Yii::app()->name;
?>

<div class="page-header">
    <h1>
        Dashboard
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            overview &amp; stats
        </small>
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="row">
            <div class="space-6"></div>

            <div class="col-sm-7 infobox-container">
                <!-- #section:pages/dashboard.infobox -->
                <div class="infobox infobox-green">
                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-comments"></i>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-data-number">8</span>
                        <div class="infobox-content">Citas</div>
                    </div>

                    <!-- #section:pages/dashboard.infobox.stat -->
                    <!--<div class="stat stat-success">8%</div>-->

                    <!-- /section:pages/dashboard.infobox.stat -->
                </div>

                <div class="infobox infobox-blue">
                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-twitter"></i>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-data-number">5</span>
                        <div class="infobox-content">Picking Orders</div>
                    </div>

                    <!--<div class="badge badge-success">
                        +32%
                        <i class="ace-icon fa fa-arrow-up"></i>
                    </div>-->
                </div>

                <div class="infobox infobox-pink">
                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-shopping-cart"></i>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-data-number">12</span>
                        <div class="infobox-content">Embarques</div>
                    </div>
                    <!--<div class="stat stat-important">4%</div>-->
                </div>
                <!-- /section:pages/dashboard.infobox.dark -->        
            </div>

            <div class="vspace-12-sm"></div>

            <div class="col-sm-5">
                <div class="widget-box">
                    <div class="widget-header widget-header-flat widget-header-small">
                        <h5 class="widget-title">
                            <i class="ace-icon fa fa-signal"></i>
                            Clientes
                        </h5>
                        <!--
                        <div class="widget-toolbar no-border">
                            <div class="inline dropdown-hover">
                                <button class="btn btn-minier btn-primary">
                                    This Week
                                    <i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
                                    <li class="active">
                                        <a href="#" class="blue">
                                            <i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
                                            This Week
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                            Last Week
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                            This Month
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                            Last Month
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>-->
                    </div>

                    <div class="widget-body">
                        <div class="widget-main">
                            <!-- #section:plugins/charts.flotchart -->
                            <div id="piechart-placeholder"></div>

                            <!-- /section:plugins/charts.flotchart -->
                            <!--<div class="hr hr8 hr-double"></div>-->
                            <!--
                            <div class="clearfix">
                                <!-- #section:custom/extra.grid --
                                <div class="grid3">
                                    <span class="grey">
                                        <i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
                                        &nbsp; likes
                                    </span>
                                    <h4 class="bigger pull-right">1,255</h4>
                                </div>

                                <div class="grid3">
                                    <span class="grey">
                                        <i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
                                        &nbsp; tweets
                                    </span>
                                    <h4 class="bigger pull-right">941</h4>
                                </div>

                                <div class="grid3">
                                    <span class="grey">
                                        <i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
                                        &nbsp; pins
                                    </span>
                                    <h4 class="bigger pull-right">1,050</h4>
                                </div>

                                <!-- /section:custom/extra.grid --
                            </div>-->
                        </div><!-- /.widget-main -->
                    </div><!-- /.widget-body -->
                </div><!-- /.widget-box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- #section:custom/extra.hr -->
        <div class="hr hr32 hr-dotted"></div>

        <!-- /section:custom/extra.hr -->
        <div class="row">
            <div class="col-sm-7">
                <div class="widget-box transparent">
                    <div class="widget-header widget-header-flat">
                        <h4 class="widget-title lighter">
                            <i class="ace-icon fa fa-star orange"></i>
                            Estatus del Almac&eacute;n
                        </h4>

                        <div class="widget-toolbar">
                            <a href="#" data-action="collapse">
                                <i class="ace-icon fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main no-padding">
                            <div class="clearfix">
                                <div class="grid3 center">
                                    <!-- #section:plugins/charts.easypiechart -->
                                    <div style="height: 72px; width: 72px; line-height: 71px; color: rgb(202, 89, 82);" class="easy-pie-chart percentage" data-percent="45" data-color="#CA5952">
                                        <span class="percent">45</span>%
                                        <canvas width="72" height="72"></canvas>
                                    </div>
                                    <!-- /section:plugins/charts.easypiechart -->
                                    <div class="space-2"></div>
                                    Capacidad Almac&eacute;n
                                </div>

                                <div class="grid3 center">
                                    <div style="height: 72px; width: 72px; line-height: 71px; color: rgb(89, 168, 75);" class="center easy-pie-chart percentage" data-percent="90" data-color="#59A84B">
                                        <span class="percent">90</span>%
                                        <canvas width="72" height="72"></canvas>
                                    </div>

                                    <div class="space-2"></div>
                                    Fill Rate Picking
                                </div>

                                <div class="grid3 center">
                                    <table class="table table-bordered table-striped">
                                        <thead class="thin-border-bottom">
                                            <tr>
                                                <th>Posiciones</th>
                                                <th>Cantidad</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Totales</td>
                                                <td>
                                                    <b class="green">2500</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ocupadas</td>
                                                <td>
                                                    <b class="green">1500</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Libres</td>
                                                <td>
                                                    <b class="green">1000</b>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- /.widget-main -->
                    </div><!-- /.widget-body -->
                </div><!-- /.widget-box -->
            </div><!-- /.col -->

            <div class="col-sm-5">
                <div class="widget-box">
                    <div class="widget-header widget-header-flat widget-header-small">
                        <h5 class="widget-title">
                            <i class="ace-icon fa fa-signal"></i>
                            Existencia Almac&eacute;n (Cajas)
                        </h5>
                                <!--
                                <div class="widget-toolbar no-border">
                                    <div class="inline dropdown-hover">
                                        <button class="btn btn-minier btn-primary">
                                            This Week
                                            <i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
                                            <li class="active">
                                                <a href="#" class="blue">
                                                    <i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
                                                    This Week
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                    Last Week
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                    This Month
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                    Last Month
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>-->
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <!-- #section:plugins/charts.flotchart -->
                                    <div id="piechart-placeholder2"></div>

                                    <!-- /section:plugins/charts.flotchart -->
                                    <!--<div class="hr hr8 hr-double"></div>-->
                                    <!--
                                    <div class="clearfix">
                                        <!-- #section:custom/extra.grid --
                                        <div class="grid3">
                                            <span class="grey">
                                                <i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
                                                &nbsp; likes
                                            </span>
                                            <h4 class="bigger pull-right">1,255</h4>
                                        </div>

                                        <div class="grid3">
                                            <span class="grey">
                                                <i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
                                                &nbsp; tweets
                                            </span>
                                            <h4 class="bigger pull-right">941</h4>
                                        </div>

                                        <div class="grid3">
                                            <span class="grey">
                                                <i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
                                                &nbsp; pins
                                            </span>
                                            <h4 class="bigger pull-right">1,050</h4>
                                        </div>

                                        <!-- /section:custom/extra.grid --
                                    </div>-->
                                </div><!-- /.widget-main -->
                            </div><!-- /.widget-body -->
                        </div><!-- /.widget-box -->
                    </div><!-- /.widget-body -->
                </div> <!--/.widget-box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="hr hr32 hr-dotted"></div>

        <div class="row">
            <div class="col-sm-7">
                <div class="widget-box transparent" id="recent-box">
                    <div class="widget-header">
                        <h4 class="widget-title lighter smaller">
                            <i class="ace-icon fa fa-rss orange"></i>RECENT
                        </h4>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main padding-4">
                        <table class="table table-bordered table-striped">
                            <thead class="thin-border-bottom">
                                <tr>
                                    <th><i class="ace-icon fa fa-caret-right blue"></i>Total de Ordenes</th>
                                    <th><i class="ace-icon fa fa-caret-right blue"></i>20</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Pendiente</td>
                                    <td>
                                        <b class="green">5</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Picking</td>
                                    <td>
                                        <b class="green">8</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Confirmar Transporte</td>
                                    <td>
                                        <b class="green">2</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lista para embarcar</td>
                                    <td>
                                        <b class="green">5</b>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div><!-- /.widget-main -->
                    </div><!-- /.widget-body -->
                </div><!-- /.widget-box -->
            </div><!-- /.col -->

            <div class="col-sm-5">
                <div class="widget-box">
                    <div class="widget-header">
                        <h4 class="widget-title lighter smaller">
                            <i class="ace-icon fa fa-comment blue"></i>
                            Vencimiento Posiciones
                        </h4>
                    </div>

                    <div class="widget-body">
                        <div id="piechart-placeholder3"></div>
                    </div><!-- /.widget-main -->
                    </div><!-- /.widget-body -->
                </div><!-- /.widget-box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->
<script type="text/javascript">
    jQuery(function($) {
              //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
              //but sometimes it brings up errors with normal resize event handlers
              $.resize.throttleWindow = false;

              var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
              var data = [
              { label: "Procter & Gamber",  data: 38.7, color: "#68BC31"},
              { label: "Pfizer",  data: 24.5, color: "#2091CF"},
              { label: "Aspen",  data: 8.2, color: "#AF4E96"},
              { label: "Bacardi",  data: 18.6, color: "#DA5430"},
              { label: "Otros",  data: 10, color: "#FEE074"}
              ]
              function drawPieChart(placeholder, data, position) {
                  $.plot(placeholder, data, {
                    series: {
                        pie: {
                            show: true,
                            tilt:0.8,
                            highlight: {
                                opacity: 0.25
                            },
                            stroke: {
                                color: '#fff',
                                width: 2
                            },
                            startAngle: 2
                        }
                    },
                    legend: {
                        show: true,
                        position: position || "ne", 
                        labelBoxBorderColor: null,
                        margin:[-30,15]
                    }
                    ,
                    grid: {
                        hoverable: true,
                        clickable: true
                    }
                })
              }

              drawPieChart(placeholder, data);

             /**
             we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
             so that's not needed actually.
             */
             placeholder.data('chart', data);
             placeholder.data('draw', drawPieChart);


              //pie chart tooltip example
              var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
              var previousPoint = null;

              placeholder.on('plothover', function (event, pos, item) {
                if(item) {
                    if (previousPoint != item.seriesIndex) {
                        previousPoint = item.seriesIndex;
                        var tip = item.series['label'] + " : " + item.series['percent']+'%';
                        $tooltip.show().children(0).text(tip);
                    }
                    $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
                } else {
                    $tooltip.hide();
                    previousPoint = null;
                }
                
            });


              $('.easy-pie-chart.percentage').each(function(){
                  var barColor = $(this).data('color') || '#555';
                  var trackColor = '#E2E2E2';
                  var size = parseInt($(this).data('size')) || 72;
                  $(this).easyPieChart({
                    barColor: barColor,
                    trackColor: trackColor,
                    scaleColor: false,
                    lineCap: 'butt',
                    lineWidth: parseInt(size/10),
                    animate:false,
                    size: size
                }).css('color', barColor);
              });




              $(function() {

                // Shim allowing us to get the state of the check-box on jQuery versions
                // prior to 1.6, when prop was added.  The reason we don't just use attr
                // is because it doesn't work in jQuery versions 1.9.x and later.

                // TODO: Remove this once Flot's minimum supported jQuery reaches 1.6.
                if (typeof $.fn.prop != 'function') {
                    $.fn.prop = $.fn.attr;
                }

                var data2 = [{
                    label: "Cajas Totales",
                    data: [[1, 180], [3, 280], [6, 250], [9, 293], [12, 295], [15, 360], [18, 380], [21, 302], [24, 334], [27, 380], [31, 400]]
                }];

                var options2= {
                    series: {
                        lines: {
                            show: true
                        },
                        points: {
                            show: true
                        }
                    },
                    legend: {
                        noColumns: 2
                    },
                    xaxis: {
                        tickDecimals: 0
                    },
                    yaxis: {
                        min: 0
                    },
                    selection: {
                        mode: "x"
                    }
                };

                var placeholder2 = $("#piechart-placeholder2");
                var placeholder2 = $('#piechart-placeholder2').css({'width':'90%' , 'min-height' :'150px'});
                var plot = $.plot(placeholder2, data2, options2);
            });

                //codigo para dibujar gradica de pastel
                $(function() {

                // Shim allowing us to get the state of the check-box on jQuery versions
                // prior to 1.6, when prop was added.  The reason we don't just use attr
                // is because it doesn't work in jQuery versions 1.9.x and later.

                // TODO: Remove this once Flot's minimum supported jQuery reaches 1.6.
                if (typeof $.fn.prop != 'function') {
                    $.fn.prop = $.fn.attr;
                }

                var data2 = [{
                    label: "Cajas Totales",
                    data: [[1, 180], [3, 280], [6, 250], [9, 293], [12, 295], [15, 360], [18, 380], [21, 302], [24, 334], [27, 380], [31, 400]]
                }];

                var options2= {
                    series: {
                        lines: {
                            show: true
                        },
                        points: {
                            show: true
                        }
                    },
                    legend: {
                        noColumns: 2
                    },
                    xaxis: {
                        tickDecimals: 0
                    },
                    yaxis: {
                        min: 0
                    },
                    selection: {
                        mode: "x"
                    }
                };

                var placeholder2 = $("#piechart-placeholder2");
                var placeholder2 = $('#piechart-placeholder2').css({'width':'90%' , 'min-height' :'150px'});
                var plot = $.plot(placeholder2, data2, options2);
            });


            //codigo para el grifco de pastel vencimiento posiciones
            $(function(){
                  var placeholder3 = $('#piechart-placeholder3').css({'width':'90%' , 'min-height':'150px'});
                  var data3 = [
                  { label: "Normales",  data: 750, color: "#68BC31"},
                  { label: "Proximas a vencer",  data: 650, color: "#2091CF"},
                  { label: "Vencidas",  data: 100, color: "#AF4E96"}
                  ]
                  function drawPieChart(placeholder3, data3, position3) {
                      $.plot(placeholder3, data3, {
                        series: {
                            pie: {
                                show: true,
                                tilt:0.8,
                                highlight: {
                                    opacity: 0.25
                                },
                                stroke: {
                                    color: '#fff',
                                    width: 2
                                },
                                startAngle: 2
                            }
                        },
                        legend: {
                            show: true,
                            position3: position3 || "ne", 
                            labelBoxBorderColor: null,
                            margin:[-30,15]
                        }
                        ,
                        grid: {
                            hoverable: true,
                            clickable: true
                        }
                    })
                  }

                  drawPieChart(placeholder3, data3);

                 /**
                 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
                 so that's not needed actually.
                 */
                 placeholder3.data('chart', data3);
                 placeholder3.data('draw', drawPieChart);


                  //pie chart tooltip example
                  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
                  var previousPoint = null;

                  placeholder3.on('plothover', function (event, pos, item) {
                    if(item) {
                        if (previousPoint != item.seriesIndex) {
                            previousPoint = item.seriesIndex;
                            var tip = item.series['label'] + " : " + item.series['percent']+'%';
                            $tooltip.show().children(0).text(tip);
                        }
                        $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
                    } else {
                        $tooltip.hide();
                        previousPoint = null;
                    }
                    
                });
            })
});
</script>