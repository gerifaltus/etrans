<div class="page-content-area">
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="space"></div>

                    <!-- #section:plugins/data-time.calendar -->
                    <div id="calendar"></div>

                    <!-- /section:plugins/data-time.calendar -->
                </div>

                <div class="col-sm-4">
                    <div class="widget-box transparent">
                        <div class="widget-header">
                            <h4 class="widget-title lighter">Eventos para el d&iacute;a: <strong>07-Nov-2014 ::
                            </strong><button class="btn btn-info btn-xs"><i class="ace-icon fa fa-print  align-top bigger-125 icon-on-right"></i>
                        </button></h4>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main no-padding">
                            <div class="space-4"></div>
                            <table id="complex_table" class="table table-striped table-bordered table-hover" style="display: inline-table;">
                                <thead>
                                    <tr>
                                        <th>Horario</th>
                                        <th>Empresa</th>
                                        <th>Actividad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>08:00 - 10:00 hrs</td>
                                        <td>Bacardi</td>
                                        <td>Descarga de 34 pallets, Trailer 1</td>
                                    </tr>   
                                    <tr>
                                        <td>10:00 - 11:00 hrs</td>
                                        <td>Procter & Gamber</td>
                                        <td>Descarga de 52 Pallets, Trailer 1</td>
                                    </tr>   
                                    <tr>
                                        <td>13:00 - 14:00 hrs</td>
                                        <td>Aspen</td>
                                        <td>Descarga de 35 Cajas, 3.5T</td>
                                    </tr>
                                    <tr>
                                        <td>14:00 - 15:00 hrs</td>
                                        <td>Bacardi</td>
                                        <td>Descarga de 15 pallets, 3.5T</td>
                                    </tr>
                                    <tr>
                                        <td>15:00 - 16:00 hrs</td>
                                        <td>Procter & Gamber</td>
                                        <td>Carga de 25 Pallets, 1.5T</td>
                                    </tr>
                                    <tr>
                                        <td>16:00 - 17:30 hrs</td>
                                        <td>Aspen</td>
                                        <td>Descarga de 15 pallets, 1.5T</td>
                                    </tr>
                                    <tr>
                                        <td>16:00 - 17:00 hrs</td>
                                        <td>Bacardi</td>
                                        <td>Descarga de 13 pallets, Torton.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content-area -->

<script type="text/javascript">
jQuery(function($) {
        /* initialize the calendar
        -----------------------------------------------------------------*/

        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();


        var calendar = $('#calendar').fullCalendar({
            defaultView: "agendaWeek",
            defaultDate: new Date(),
            width: 400,
            //isRTL: true,
            buttonHtml: {
                prev: '<i class="ace-icon fa fa-chevron-left"></i>',
                next: '<i class="ace-icon fa fa-chevron-right"></i>'
            },
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: [
            {
                title: 'Descarga de 52 pallets, Trailer 1',
                start: new Date(y, m, 21, 10, 0),
                className: 'label-important'
            },
            {
                title: 'Descarga de 34 pallets, Trailer 1',
                start: new Date(y, m, 21, 08, 0),
                className: 'label-success'
            },
            {
                title: 'Descarga de 35 Cajas, 3.5T',
                start: new Date(y, m, 21, 13, 0),
                end: new Date(y, m, 21, 14, 0),
                className: 'label-important'
            },
            {
                title: 'Descarga de 15 pallets, Camioneta 1.5T',
                start: new Date(y, m, 21, 14, 0),
                end: new Date(y, m, 21, 15, 0),
                className: 'label-success'
            },
            {
                title: 'Cargar de 25 pallets, Trailer 1',
                start: new Date(y, m, 21, 15, 0),
                end: new Date(y, m, 21, 16, 0),
                className: 'label-success'
            },
            {
                title: 'Descarga de 13 pallets, Torton',
                start: new Date(y, m, 21, 16, 0),
                className: 'label-success'
            },
            {
                title: 'Descarga de 52 pallets, Trailer 1',
                start: new Date(y, m, 22, 10, 0),
                end: new Date(y, m, 22, 11, 0),
                className: 'label-success'
            },
            {
                title: 'Descarga de 34 pallets, Trailer 1',
                start: new Date(y, m, 22, 08, 0),
                className: 'label-success'
            },
            {
                title: 'Descarga de 35 Cajas, 3.5T',
                start: new Date(y, m, 22, 11, 0),
                end: new Date(y, m, 22, 13, 0),
                className: 'label-important'
            },
            {
                title: 'Descarga de 15 pallets, Camioneta 1.5T',
                start: new Date(y, m, 22, 14, 0),
                end: new Date(y, m, 22, 15, 0),
                className: 'label-success'
            },
            {
                title: 'Cargar de 25 pallets, Trailer 1',
                start: new Date(y, m, 22, 15, 0),
                end: new Date(y, m, 22, 16, 0),
                className: 'label-success'
            },
            {
                title: 'Descarga de 13 pallets, Torton',
                start: new Date(y, m, 21, 16, 0),
                className: 'label-success'
            }
            ]
            ,
            editable: true,
            droppable: false, // this allows things to be dropped onto the calendar !!!
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDay) {
                //mostrar la lista de actividades por dia
                alert('día seleccionado....');
            }

        });

calendar.css({
    "width": "100%",
});
});
</script>