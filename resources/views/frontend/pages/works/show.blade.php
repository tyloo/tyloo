@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => 'Blog', 'pageNameBreadcrumb' => 'Blog'])

    <!-- Project Details -->
    <section class="mt40 mb40">
        <div class="container">

            <p class="lead text-center mb30">The <b><mark>Project</mark></b></p>

            <!-- Begin Carousel -->
            <div id="projectCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#projectCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#projectCarousel" data-slide-to="1" class="active"></li>
                    <li data-target="#projectCarousel" data-slide-to="2" class=""></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item">
                        <img class="img-responsive" src="images/backgrounds/bg5.jpg" alt="Carousel Image">
                    </div>
                    <div class="item active">
                        <img class="img-responsive" src="images/backgrounds/bg6.jpg" alt="Carousel Image">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="images/backgrounds/bg9.jpg" alt="Carousel Image">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#projectCarousel" role="button" data-slide="prev">
                    <span class="ion-ios-arrow-left carousel-arrow-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control" href="#projectCarousel" role="button" data-slide="next">
                    <span class="ion-ios-arrow-right carousel-arrow-right" aria-hidden="true"></span>
                </a>
            </div>
            <!-- End Carousel -->

            <!-- Begin Tabs -->
            <div class="row mt40">
                <!-- Begin Tabs -->
                <div class="col-sm-8">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Project Info</a></li>
                        <li><a href="#tab2" role="tab" data-toggle="tab">Skills</a></li>
                        <li><a href="#tab3" role="tab" data-toggle="tab">Details</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane in active" id="tab1">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et ante metus. Vestibulum id vestibulum sapien, non convallis purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam vestibulum rhoncus leo. Suspendisse vulputate elementum dui. Duis tristique auctor dolor in lobortis. Donec pretium laoreet purus non tempus. Morbi sit amet dolor ut sapien dictum porta et a ipsum. Etiam quis auctor orci. Vestibulum ultrices vulputate condimentum. Sed nec massa nunc. Donec maximus purus purus, ut pretium libero pellentesque ut.</p>
                            <ul class="list-arrow-color no-margin">
                                <li>Etiam sodales mi vulputate metus iaculis, eleifend aliquet mi imperdiet.</li>
                                <li> Nam at purus commodo, mollis lacus non, commodo dui.</li>
                                <li>Nulla volutpat aliquam velit</li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <!-- Big Progress Bars -->
                            <p class="progress-head">Design</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    <span class="progress-bar-tooltip" style="opacity: 1;">100%</span>
                                </div>
                            </div>
                            <p class="progress-head">Script</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                                    <span class="progress-bar-tooltip" style="opacity: 1;">72%</span>
                                </div>
                            </div>
                            <p class="progress-head">Hacking</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 58%">
                                    <span class="progress-bar-tooltip" style="opacity: 1;">58%</span>
                                </div>
                            </div>
                            <!-- /big progress bars -->
                        </div>
                        <div class="tab-pane" id="tab3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et ante metus. Vestibulum id <b>vestibulum sapien</b>. Morbi sit amet dolor ut sapien dictum porta et a ipsum. Etiam quis auctor orci.</p>
                            <ul class="list-unstyled no-margin">
                                <li><strong>Title:</strong> Project</li>
                                <li><strong>Category:</strong> Web Design</li>
                                <li><strong>Skills:</strong> Web Design, Hacking, Network</li>
                                <li><strong>Author:</strong> Denis Samardjiev</li>
                                <li><strong>Year:</strong> 2015</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /column -->
                <!-- End Tabs -->

                <!-- Quick Info -->
                <div class="col-sm-4">
                    <div class="heading mt30-xs"><h4>Quote</h4></div>
                    <p class="lead mb30">Lorem ipsum dolor sit amet, consectetur adipiscing eli metus. Vestibulum id vestibulum sapien, non convallis purus aliena mar te.</p>
                    <div class="cta2 arrow-up" style="padding: 20px 0;">
                        <div class="text-center"><!-- //add container, columns, or rows if needed. -->
                            <h2 class="no-margin">John Brown</h2>
                            <p class="no-margin">The Company Inc.</p>
                        </div>
                    </div>
                </div>
            </div><!-- /row -->
            <!-- End Tabs -->
        </div>
    </section>
    <!-- /Project Details -->

    <!-- Recent Work -->
    <section class="pt40 mb10 border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb30">
                        <h4><span class="ion-android-social-user mr15"></span>Recent Work</h4>
                        <div class="owl-controls">
                            <div id="customNav" class="owl-nav"><div class="owl-prev" style=""><span>&lt;</span></div><div class="owl-next" style=""><span>&gt;</span></div></div>
                        </div>
                    </div>
                    <div id="owl-carousel-thumb" class="owl-carousel owl-theme owl-loaded">






                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1170px, 0px, 0px); transition: 0s; width: 4095px;"><div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;"><div class="thumbnail">
                                        <div class="caption">
                                            <div class="thumbnail-caption-holder">
                                                <h4 class="text-white">Schroder's List</h4>
                                                <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                            </div>
                                        </div>
                                        <img src="images/backgrounds/stock3.jpg" alt="...">
                                    </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;"><div class="thumbnail">
                                        <div class="caption">
                                            <div class="thumbnail-caption-holder">
                                                <h4 class="text-white">NO Pelicans</h4>
                                                <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                            </div>
                                        </div>
                                        <img src="images/backgrounds/stock4.jpg" alt="...">
                                    </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;"><div class="thumbnail">
                                        <div class="caption">
                                            <div class="thumbnail-caption-holder">
                                                <h4 class="text-white">Fanbango</h4>
                                                <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                            </div>
                                        </div>
                                        <img src="images/backgrounds/stock5.jpg" alt="...">
                                    </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;"><div class="thumbnail">
                                        <div class="caption">
                                            <div class="thumbnail-caption-holder">
                                                <h4 class="text-white">The Latia Project</h4>
                                                <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                            </div>
                                        </div>
                                        <img src="images/backgrounds/stock6.jpg" alt="...">
                                    </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 30px;"><div class="thumbnail">
                                        <div class="caption">
                                            <div class="thumbnail-caption-holder">
                                                <h4 class="text-white">The Latia Project</h4>
                                                <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                            </div>
                                        </div>
                                        <img src="images/backgrounds/stock1.jpg" alt="...">
                                    </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 30px;"><div class="thumbnail">
                                        <div class="caption">
                                            <div class="thumbnail-caption-holder">
                                                <h4 class="text-white">Goose UI</h4>
                                                <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                            </div>
                                        </div>
                                        <img src="images/backgrounds/stock2.jpg" alt="...">
                                    </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 30px;"><div class="thumbnail">
                                        <div class="caption">
                                            <div class="thumbnail-caption-holder">
                                                <h4 class="text-white">Schroder's List</h4>
                                                <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                            </div>
                                        </div>
                                        <img src="images/backgrounds/stock3.jpg" alt="...">
                                    </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 30px;"><div class="thumbnail">
                                        <div class="caption">
                                            <div class="thumbnail-caption-holder">
                                                <h4 class="text-white">NO Pelicans</h4>
                                                <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                            </div>
                                        </div>
                                        <img src="images/backgrounds/stock4.jpg" alt="...">
                                    </div></div><div class="owl-item" style="width: 262.5px; margin-right: 30px;"><div class="thumbnail">
                                        <div class="caption">
                                            <div class="thumbnail-caption-holder">
                                                <h4 class="text-white">Fanbango</h4>
                                                <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                            </div>
                                        </div>
                                        <img src="images/backgrounds/stock5.jpg" alt="...">
                                    </div></div><div class="owl-item" style="width: 262.5px; margin-right: 30px;"><div class="thumbnail">
                                        <div class="caption">
                                            <div class="thumbnail-caption-holder">
                                                <h4 class="text-white">The Latia Project</h4>
                                                <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                            </div>
                                        </div>
                                        <img src="images/backgrounds/stock6.jpg" alt="...">
                                    </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;"><div class="thumbnail">
                                        <div class="caption">
                                            <div class="thumbnail-caption-holder">
                                                <h4 class="text-white">The Latia Project</h4>
                                                <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                            </div>
                                        </div>
                                        <img src="images/backgrounds/stock1.jpg" alt="...">
                                    </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;"><div class="thumbnail">
                                        <div class="caption">
                                            <div class="thumbnail-caption-holder">
                                                <h4 class="text-white">Goose UI</h4>
                                                <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                            </div>
                                        </div>
                                        <img src="images/backgrounds/stock2.jpg" alt="...">
                                    </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;"><div class="thumbnail">
                                        <div class="caption">
                                            <div class="thumbnail-caption-holder">
                                                <h4 class="text-white">Schroder's List</h4>
                                                <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                            </div>
                                        </div>
                                        <img src="images/backgrounds/stock3.jpg" alt="...">
                                    </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;"><div class="thumbnail">
                                        <div class="caption">
                                            <div class="thumbnail-caption-holder">
                                                <h4 class="text-white">NO Pelicans</h4>
                                                <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                            </div>
                                        </div>
                                        <img src="images/backgrounds/stock4.jpg" alt="...">
                                    </div></div></div></div><div class="owl-controls"><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
                </div>
            </div>

        </div><!-- /container -->
    </section>
    <!-- /Recent Work -->
@stop
