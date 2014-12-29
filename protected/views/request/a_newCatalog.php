<div class="page-content-area">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">

                <div class="col-xs-12">
                    <!--<div class="table-header">
                        Nuevos Cat&aacute;logos
                    </div>-->

                    <!-- <div class="table-responsive"> -->

                    <!-- <div class="dataTables_borderWrap"> -->
                    <div class="tabbable">
                        <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
                            <li class="active">
                                <a data-toggle="tab" href="#home4">Complejo</a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#profile4">Almac&eacute;n</a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#dropdown14">Producto</a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#dropdown20">Articulos</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="home4" class="tab-pane active">
                                <?php //$this->renderPartial('_newComplex'); ?>
                                <?php $this->renderPartial('_a_newProduct'); ?>
                            </div>

                            <div id="profile4" class="tab-pane">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
                            </div>

                            <div id="dropdown14" class="tab-pane">
                                <?php //$this->renderPartial('_a_newProduct'); ?>
                            </div>

                            <div id="dropdown20" class="tab-pane">
                                <?php //$this->renderPartial('_a_newProduct'); ?>
                                <?php $this->renderPartial('_newComplex'); ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content-area -->