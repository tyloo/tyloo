@extends('layouts.frontend')

@section('content')
    {{-- Carousel --}}
    <div class="carousel">
        <div id="carouselHome" class="carousel slide carousel-fade" data-ride="carousel" data-interval="15000">
            {{-- Indicators --}}
            <ol class="carousel-indicators">
                <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
                <li data-target="#carouselHome" data-slide-to="1"></li>
                <li data-target="#carouselHome" data-slide-to="2"></li>
            </ol>
            {{-- /Indicators --}}

            {{-- Wrapper for slides --}}
            <div class="carousel-inner">
                {{-- Item 1 --}}
                <div class="item active">
                    <div class="background-main carousel-item1" data-0="background-position:0px 0px;" data-500="background-position:0px -250px;">
                        <div class="container">
                            <div class="row carousel-content center-vertically-right">
                                <div class="fadeInRight-animated" data-animation="fadeInRight">
                                    <div class="carousel-description col-sm-5">
                                        <h3 class="heavy text-white"><span class="carousel-title-bgclear">{{ trans('app.frontend.home.carousel.1.title') }}</span></h3>
                                        <p>
                                            {!! trans('app.frontend.home.carousel.1.content') !!}
                                        </p>
                                        <a href="{{ route('blog.index') }}" class="btn btn-rw btn-primary">{{ trans('app.frontend.home.carousel.1.link') }} <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="fadeInLeft-animated" data-animation="fadeInLeft">
                                    <div class="col-sm-6 col-sm-offset-1">
                                        <img src="/assets/img/showcase-full.png" class="img-responsive carousel-image" alt="Responsive Showcase" width="540" height="270px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- /Item 1 --}}

                {{-- Item 2 --}}
                <div class="item">
                    <div class="carousel-item2" data-0="background-position:0px 0px;" data-500="background-position:0px -250px;">
                        <div class="container">
                            <div class="row carousel-content center-vertically-left">
                                <div class="fadeInLeft-animated" data-animation="fadeInLeft">
                                    <div class="col-sm-6 hidden-xs">
                                        <img src="/assets/img/showcase2.png" width="510" height="328" class="img-responsive carousel-image" alt="Responsive Showcase">
                                    </div>
                                </div>
                                <div class="fadeInRight-animated" data-animation="fadeInRight">
                                    <div class="carousel-description mt10 col-sm-5 col-sm-offset-1">
                                        <h4 class="heavy text-white"><span class="carousel-title-bg">{{ trans('app.frontend.home.carousel.2.title') }}</span></h4>
                                        <p>
                                            {!! trans('app.frontend.home.carousel.2.content') !!}
                                        </p>
                                        <a href="{{ route('blog.index') }}" class="btn btn-rw btn-primary">{{ trans('app.frontend.home.carousel.2.link') }} <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- /Item 2 --}}

                {{-- Item 3 --}}
                <div class="item">
                    <div class="carousel-item3" data-0="background-position:0px 0px;" data-500="background-position:0px -250px;">
                        <div class="container">
                            <div class="row carousel-content center-vertically-right">
                                <div class="fadeInUpBig-animated" data-animation="fadeInUpBig">
                                    <div class="carousel-description col-sm-8 col-sm-offset-2 text-center">
                                        <h2 class="heavy text-white"><span class="carousel-title-bgclear">{{ trans('app.frontend.home.carousel.3.title') }}</span></h2>
                                        <p>
                                            {!! trans('app.frontend.home.carousel.3.content') !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- /Item 3 --}}
            </div>
            {{-- /Wrapper for slides --}}

            {{-- Controls --}}
            <a class="left carousel-control" href="#carouselHome" role="button" data-slide="prev"><i class="fa fa-arrow-left carousel-arrow-left" aria-hidden="true"></i></a>
            <a class="right carousel-control" href="#carouselHome" role="button" data-slide="next"><i class="fa fa-arrow-right carousel-arrow-right" aria-hidden="true"></i></a>
            {{-- /Controls --}}
        </div>
    </div>
    {{-- /Carousel --}}

    {{-- 3 Services --}}
    <div class="background-light-grey pt60 pb60 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 fadeInUp-animated text-center">
                    <i class="fa fa-code bordered-icon-sm"></i>
                    <h4 class="mt15">{{ trans('app.frontend.home.three-reasons.1.title') }}</h4>
                    <p class="p15xs no-margin">
                        {!! trans('app.frontend.home.three-reasons.1.content') !!}
                    </p>
                </div>
                <div class="col-sm-4 fadeInUp-animated text-center mt20-xs">
                    <i class="fa fa-flask bordered-icon-sm"></i>
                    <h4 class="mt15">{{ trans('app.frontend.home.three-reasons.2.title') }}</h4>
                    <p class="p15xs no-margin">
                        {!! trans('app.frontend.home.three-reasons.2.content') !!}
                    </p>
                </div>
                <div class="col-sm-4 fadeInUp-animated text-center mt20-xs">
                    <i class="fa fa-trophy bordered-icon-sm"></i>
                    <h4 class="mt15">{{ trans('app.frontend.home.three-reasons.3.title') }}</h4>
                    <p class="p15xs no-margin">
                        {!! trans('app.frontend.home.three-reasons.3.content') !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- /3 Services --}}

    {{-- Accordion + IMG --}}
    <div class="mt40 mb40">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb20">
                    <div class="heading"><h4>{{ trans('app.frontend.home.about-me.title') }}</h4></div>
                </div>
            </div>

            {{-- Accordion --}}
            <div class="row">
                <div class="col-sm-6" data-sr="enter left">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">{{ trans('app.frontend.home.about-me.1.title') }}</a></h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    {!! trans('app.frontend.home.about-me.1.content') !!}
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">{{ trans('app.frontend.home.about-me.2.title') }}</a></h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {!! trans('app.frontend.home.about-me.2.content', ['blog_url' => route('blog.index')]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">{{ trans('app.frontend.home.about-me.3.title') }}</a></h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {!! trans('app.frontend.home.about-me.3.content') !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('resume') }}" class="btn btn-rw btn-primary">{{ trans('app.frontend.home.about-me.link') }}</a>
                    </div>
                </div>

                <div class="col-sm-6" data-sr="enter bottom">
                    <img src="/assets/img/showcase.png" width="555" height="316" class="img-responsive showcase-image" alt="Responsive Showcase">
                </div>
            </div>
            {{-- /Accordion --}}
        </div>
    </div>
    {{-- Accordion + IMG --}}

    {{-- Recent Work --}}
    <section class="pt40 mb40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb30">
                        <h4>{{ trans('app.frontend.home.recent-work') }}</h4>
                        <div class="owl-controls">
                            <div id="customNav" class="owl-nav"></div>
                        </div>
                    </div>
                    @include('frontend.partials.home._lastWorks')
                </div>
            </div>
        </div>
    </section>
    {{-- /Recent Work --}}

    {{-- Customers --}}
    <section class="mb40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb30">
                        <h4>{{ trans('app.frontend.home.customers') }}</h4>
                        <div class="owl-controls">
                            <div id="customNav" class="owl-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @include('frontend.partials.home._customers')
            </div>
        </div>
    </section>
    {{-- /Customers --}}
@stop
