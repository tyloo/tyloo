@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => 'My Works', 'pageNameBreadcrumb' => 'Works'])

    <section class="mt40 mb10">
        <div id="portfolio" class="container-fluid">
            <!-- Portfolio Filter -->
            <div class="row mb30" style="visibility: visible; ">
                <ul class="nav nav-pills col-xs-12 text-center">
                    <li class="filter active" data-filter="all">All</li>
                    <li class="filter" data-filter="web">Website</li>
                    <li class="filter" data-filter="search">Search</li>
                    <li class="filter" data-filter="app">Application (mobile)</li>
                </ul>
            </div>

            <!-- Portfolio Items -->
            <div class="row">
                <ul id="myPortfolio" class="col-sm-12 text-center">
                    <!-- Item 1 -->
                    <li class="item web col-sm-2 mix_all">
                        <div class="border">
                            <div class="view portfolio-hover-1">
                                <!-- Project Thumb -->
                                <img class="img-responsive" src="{{ asset('assets/frontend/img/projects/thumbs/illustration1.jpg') }}" alt="...">
                                <div class="mask">
                                    <div class="portfolio-hover-content">
                                        <!-- Zoom + Project Link -->
                                        <a href="{{ asset('assets/frontend/img/projects/illustration1.jpg') }}" class="info image-zoom-link">
                                            <div class="portfolio-icon-holder"><span class="ion-ios-search portfolio-icons"></span></div>
                                        </a>
                                        <a href="#" class="info">
                                            <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                                        </a>
                                        <!-- /Zoom + Project Link -->
                                    </div>
                                </div>
                                <!-- /Project Thumb -->
                            </div>
                            <div class="portfolio-text background-white">
                                <h3 class="portfolio-title"><a href="#">Project 1</a></h3>
                                <div class="project-category">Website</div>
                            </div>
                        </div>
                    </li>
                    <!-- /Item 1 -->

                    <!-- Item 2 -->
                    <li class="item web col-sm-2 mix_all">
                        <div class="border">
                            <div class="view portfolio-hover-1">
                                <!-- Project Thumb -->
                                <img class="img-responsive" src="{{ asset('assets/frontend/img/projects/thumbs/illustration1.jpg') }}" alt="...">
                                <div class="mask">
                                    <div class="portfolio-hover-content">
                                        <!-- Zoom + Project Link -->
                                        <a href="{{ asset('assets/frontend/img/projects/illustration1.jpg') }}" class="info image-zoom-link">
                                            <div class="portfolio-icon-holder"><span class="ion-ios-search portfolio-icons"></span></div>
                                        </a>
                                        <a href="#" class="info">
                                            <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                                        </a>
                                        <!-- /Zoom + Project Link -->
                                    </div>
                                </div>
                                <!-- /Project Thumb -->
                            </div>
                            <div class="portfolio-text background-white">
                                <h3 class="portfolio-title"><a href="#">Project 2</a></h3>
                                <div class="project-category">Website</div>
                            </div>
                        </div>
                    </li>
                    <!-- /Item 2 -->

                    <!-- Item 3 -->
                    <li class="item search col-sm-2 mix_all">
                        <div class="border">
                            <div class="view portfolio-hover-1">
                                <!-- Project Thumb -->
                                <img class="img-responsive" src="{{ asset('assets/frontend/img/projects/thumbs/illustration1.jpg') }}" alt="...">
                                <div class="mask">
                                    <div class="portfolio-hover-content">
                                        <!-- Zoom + Project Link -->
                                        <a href="{{ asset('assets/frontend/img/projects/illustration1.jpg') }}" class="info image-zoom-link">
                                            <div class="portfolio-icon-holder"><span class="ion-ios-search portfolio-icons"></span></div>
                                        </a>
                                        <a href="#" class="info">
                                            <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                                        </a>
                                        <!-- /Zoom + Project Link -->
                                    </div>
                                </div>
                                <!-- /Project Thumb -->
                            </div>
                            <div class="portfolio-text background-white">
                                <h3 class="portfolio-title"><a href="#">Project 3</a></h3>
                                <div class="project-category">Search</div>
                            </div>
                        </div>
                    </li>
                    <!-- /Item 3 -->

                    <!-- Item 4 -->
                    <li class="item web col-sm-2 mix_all">
                        <div class="border">
                            <div class="view portfolio-hover-1">
                                <!-- Project Thumb -->
                                <img class="img-responsive" src="{{ asset('assets/frontend/img/projects/thumbs/illustration1.jpg') }}" alt="...">
                                <div class="mask">
                                    <div class="portfolio-hover-content">
                                        <!-- Zoom + Project Link -->
                                        <a href="{{ asset('assets/frontend/img/projects/illustration1.jpg') }}" class="info image-zoom-link">
                                            <div class="portfolio-icon-holder"><span class="ion-ios-search portfolio-icons"></span></div>
                                        </a>
                                        <a href="#" class="info">
                                            <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                                        </a>
                                        <!-- /Zoom + Project Link -->
                                    </div>
                                </div>
                                <!-- /Project Thumb -->
                            </div>
                            <div class="portfolio-text background-white">
                                <h3 class="portfolio-title"><a href="#">Project 4</a></h3>
                                <div class="project-category">Website</div>
                            </div>
                        </div>
                    </li>
                    <!-- /Item 4 -->

                    <!-- Item 5 -->
                    <li class="item app col-sm-2 mix_all">
                        <div class="border">
                            <div class="view portfolio-hover-1">
                                <!-- Project Thumb -->
                                <img class="img-responsive" src="{{ asset('assets/frontend/img/projects/thumbs/illustration1.jpg') }}" alt="...">
                                <div class="mask">
                                    <div class="portfolio-hover-content">
                                        <!-- Zoom + Project Link -->
                                        <a href="{{ asset('assets/frontend/img/projects/illustration1.jpg') }}" class="info image-zoom-link">
                                            <div class="portfolio-icon-holder"><span class="ion-ios-search portfolio-icons"></span></div>
                                        </a>
                                        <a href="#" class="info">
                                            <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                                        </a>
                                        <!-- /Zoom + Project Link -->
                                    </div>
                                </div>
                                <!-- /Project Thumb -->
                            </div>
                            <div class="portfolio-text background-white">
                                <h3 class="portfolio-title"><a href="#">Project 5</a></h3>
                                <div class="project-category">Application (mobile)</div>
                            </div>
                        </div>
                    </li>
                    <!-- /Item 5 -->

                    <!-- Item 6 -->
                    <li class="item app col-sm-2 mix_all">
                        <div class="border">
                            <div class="view portfolio-hover-1">
                                <!-- Project Thumb -->
                                <img class="img-responsive" src="{{ asset('assets/frontend/img/projects/thumbs/illustration1.jpg') }}" alt="...">
                                <div class="mask">
                                    <div class="portfolio-hover-content">
                                        <!-- Zoom + Project Link -->
                                        <a href="{{ asset('assets/frontend/img/projects/illustration1.jpg') }}" class="info image-zoom-link">
                                            <div class="portfolio-icon-holder"><span class="ion-ios-search portfolio-icons"></span></div>
                                        </a>
                                        <a href="#" class="info">
                                            <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                                        </a>
                                        <!-- /Zoom + Project Link -->
                                    </div>
                                </div>
                                <!-- /Project Thumb -->
                            </div>
                            <div class="portfolio-text background-white">
                                <h3 class="portfolio-title"><a href="#">Project 6</a></h3>
                                <div class="project-category">Application (mobile)</div>
                            </div>
                        </div>
                    </li>
                    <!-- /Item 6 -->

                    <!-- Item 7 -->
                    <li class="item web col-sm-2 mix_all">
                        <div class="border">
                            <div class="view portfolio-hover-1">
                                <!-- Project Thumb -->
                                <img class="img-responsive" src="{{ asset('assets/frontend/img/projects/thumbs/illustration1.jpg') }}" alt="...">
                                <div class="mask">
                                    <div class="portfolio-hover-content">
                                        <!-- Zoom + Project Link -->
                                        <a href="{{ asset('assets/frontend/img/projects/illustration1.jpg') }}" class="info image-zoom-link">
                                            <div class="portfolio-icon-holder"><span class="ion-ios-search portfolio-icons"></span></div>
                                        </a>
                                        <a href="#" class="info">
                                            <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                                        </a>
                                        <!-- /Zoom + Project Link -->
                                    </div>
                                </div>
                                <!-- /Project Thumb -->
                            </div>
                            <div class="portfolio-text background-white">
                                <h3 class="portfolio-title"><a href="#">Project 7</a></h3>
                                <div class="project-category">Website</div>
                            </div>
                        </div>
                    </li>
                    <!-- /Item 7 -->

                    <!-- Item 8 -->
                    <li class="item web col-sm-2 mix_all">
                        <div class="border">
                            <div class="view portfolio-hover-1">
                                <!-- Project Thumb -->
                                <img class="img-responsive" src="{{ asset('assets/frontend/img/projects/thumbs/illustration1.jpg') }}" alt="...">
                                <div class="mask">
                                    <div class="portfolio-hover-content">
                                        <!-- Zoom + Project Link -->
                                        <a href="{{ asset('assets/frontend/img/projects/illustration1.jpg') }}" class="info image-zoom-link">
                                            <div class="portfolio-icon-holder"><span class="ion-ios-search portfolio-icons"></span></div>
                                        </a>
                                        <a href="#" class="info">
                                            <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                                        </a>
                                        <!-- /Zoom + Project Link -->
                                    </div>
                                </div>
                                <!-- /Project Thumb -->
                            </div>
                            <div class="portfolio-text background-white">
                                <h3 class="portfolio-title"><a href="#">Project 8</a></h3>
                                <div class="project-category">Website</div>
                            </div>
                        </div>
                    </li>
                    <!-- /Item 8 -->

                    <!-- Item 9 -->
                    <li class="item web col-sm-2 mix_all">
                        <div class="border">
                            <div class="view portfolio-hover-1">
                                <!-- Project Thumb -->
                                <img class="img-responsive" src="{{ asset('assets/frontend/img/projects/thumbs/illustration1.jpg') }}" alt="...">
                                <div class="mask">
                                    <div class="portfolio-hover-content">
                                        <!-- Zoom + Project Link -->
                                        <a href="{{ asset('assets/frontend/img/projects/illustration1.jpg') }}" class="info image-zoom-link">
                                            <div class="portfolio-icon-holder"><span class="ion-ios-search portfolio-icons"></span></div>
                                        </a>
                                        <a href="#" class="info">
                                            <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                                        </a>
                                        <!-- /Zoom + Project Link -->
                                    </div>
                                </div>
                                <!-- /Project Thumb -->
                            </div>
                            <div class="portfolio-text background-white">
                                <h3 class="portfolio-title"><a href="#">Project 9</a></h3>
                                <div class="project-category">Website</div>
                            </div>
                        </div>
                    </li>
                    <!-- /Item 9 -->

                    <!-- Item 10 -->
                    <li class="item search col-sm-2 mix_all">
                        <div class="border">
                            <div class="view portfolio-hover-1">
                                <!-- Project Thumb -->
                                <img class="img-responsive" src="{{ asset('assets/frontend/img/projects/thumbs/illustration1.jpg') }}" alt="...">
                                <div class="mask">
                                    <div class="portfolio-hover-content">
                                        <!-- Zoom + Project Link -->
                                        <a href="{{ asset('assets/frontend/img/projects/illustration1.jpg') }}" class="info image-zoom-link">
                                            <div class="portfolio-icon-holder"><span class="ion-ios-search portfolio-icons"></span></div>
                                        </a>
                                        <a href="#" class="info">
                                            <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                                        </a>
                                        <!-- /Zoom + Project Link -->
                                    </div>
                                </div>
                                <!-- /Project Thumb -->
                            </div>
                            <div class="portfolio-text background-white">
                                <h3 class="portfolio-title"><a href="#">Project 10</a></h3>
                                <div class="project-category">Search</div>
                            </div>
                        </div>
                    </li>
                    <!-- /Item 10 -->

                    <!-- Item 11 -->
                    <li class="item web col-sm-2 mix_all">
                        <div class="border">
                            <div class="view portfolio-hover-1">
                                <!-- Project Thumb -->
                                <img class="img-responsive" src="{{ asset('assets/frontend/img/projects/thumbs/illustration1.jpg') }}" alt="...">
                                <div class="mask">
                                    <div class="portfolio-hover-content">
                                        <!-- Zoom + Project Link -->
                                        <a href="{{ asset('assets/frontend/img/projects/illustration1.jpg') }}" class="info image-zoom-link">
                                            <div class="portfolio-icon-holder"><span class="ion-ios-search portfolio-icons"></span></div>
                                        </a>
                                        <a href="#" class="info">
                                            <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                                        </a>
                                        <!-- /Zoom + Project Link -->
                                    </div>
                                </div>
                                <!-- /Project Thumb -->
                            </div>
                            <div class="portfolio-text background-white">
                                <h3 class="portfolio-title"><a href="#">Project 11</a></h3>
                                <div class="project-category">Website</div>
                            </div>
                        </div>
                    </li>
                    <!-- /Item 11 -->

                    <!-- Item 12 -->
                    <li class="item search col-sm-2 mix_all">
                        <div class="border">
                            <div class="view portfolio-hover-1">
                                <!-- Project Thumb -->
                                <img class="img-responsive" src="{{ asset('assets/frontend/img/projects/thumbs/illustration1.jpg') }}" alt="...">
                                <div class="mask">
                                    <div class="portfolio-hover-content">
                                        <!-- Zoom + Project Link -->
                                        <a href="{{ asset('assets/frontend/img/projects/illustration1.jpg') }}" class="info image-zoom-link">
                                            <div class="portfolio-icon-holder"><span class="ion-ios-search portfolio-icons"></span></div>
                                        </a>
                                        <a href="#" class="info">
                                            <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                                        </a>
                                        <!-- /Zoom + Project Link -->
                                    </div>
                                </div>
                                <!-- /Project Thumb -->
                            </div>
                            <div class="portfolio-text background-white">
                                <h3 class="portfolio-title"><a href="#">Project 12</a></h3>
                                <div class="project-category">Search</div>
                            </div>
                        </div>
                    </li>
                    <!-- /Item 12 -->
                </ul>
            </div>
        </div>
    </section>
@stop
