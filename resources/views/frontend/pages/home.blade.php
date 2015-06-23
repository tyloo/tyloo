@extends('layouts.frontend')

@section('content')
    {{-- Carousel --}}
    <div class="carousel">
        <div id="carouselHome" class="carousel slide carousel-fade" data-ride="carousel">
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
                                        <h3 class="heavy text-white"><span class="carousel-title-bgclear">Clean Code + Design</span></h3>
                                        <h3 class="heavy text-white"><span class="carousel-title-bgclear">HTML5 and CSS3</span></h3>
                                        <h3 class="heavy text-white"><span class="carousel-title-bgclear">70+ Pages Total</span></h3>
                                        <p>
                                            With over 90% of Bootstraps components restyled, over 35 pages of shortcode
                                            features, and over 30 pages for you to use, this is the <strong>ultimate</strong> parallax,
                                            responsive Bootstrap 3 template.
                                        </p>
                                    </div>
                                </div>
                                <div class="fadeInLeft-animated" data-animation="fadeInLeft">
                                    <div class="col-sm-6 col-sm-offset-1">
                                        <img src="{{ asset('assets/frontend/img/showcase-full.png') }}" class="img-responsive carousel-image" alt="Responsive Showcase">
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
                                        <img src="{{ asset('assets/frontend/img/showcase2.png') }}" class="img-responsive carousel-image" alt="Responsive Showcase">
                                    </div>
                                </div>
                                <div class="fadeInRight-animated" data-animation="fadeInRight">
                                    <div class="carousel-description mt10 col-sm-5 col-sm-offset-1">
                                        <h4 class="heavy text-white"><span class="carousel-title-bg">Many Javascript Plugins</span></h4>
                                        <h4 class="heavy text-white"><span class="carousel-title-bg">Responsive Video Content</span></h4>
                                        <h4 class="heavy text-white"><span class="carousel-title-bg">Shortcodes Pages + Docs</span></h4>

                                        <p>
                                            Flexible for any project. And hey, we made sure you have all the features you need for any
                                            website. Also shortcodes on every features page, just copy & paste where you need.
                                        </p>
                                        <a href="#" class="btn btn-rw btn-primary">Features &nbsp;&nbsp;<span class="ion-ios-arrow-right"></span></a>
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
                                        <span class="fa fa-heartbeat fa-4x text-white"></span>

                                        <h2 class="heavy text-white"><span class="carousel-title-bgclear">Clean Code + Design</span></h2>
                                        <p>
                                            Raleway comes packed with over 30 pages and 50 components. All restyled to refresh your
                                            visitors. We have pricing tables, 404 pages, coming soon pages, about pages, and many more.
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
            <a class="left carousel-control" href="#carouselHome" role="button" data-slide="prev"><span class="ion-ios-arrow-left carousel-arrow-left" aria-hidden="true"></span></a>
            <a class="right carousel-control" href="#carouselHome" role="button" data-slide="next"><span class="ion-ios-arrow-right carousel-arrow-right" aria-hidden="true"></span></a>
            {{-- /Controls --}}
        </div>
    </div>
    {{-- /Carousel --}}

    {{-- 3 Services --}}
    <div class="background-light-grey pt60 pb60 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 fadeInUp-animated text-center">
                    <span class="ion-code bordered-icon-sm"></span>
                    <h4 class="mt15">All for the Code.</h4>
                    <p class="p15xs no-margin">
                        When I was a child, I wanted to work on computers. That's why I became an engineer and Web Developer!
                    </p>
                </div>
                <div class="col-sm-4 fadeInUp-animated text-center mt20-xs">
                    <span class="ion-erlenmeyer-flask bordered-icon-sm"></span>
                    <h4 class="mt15">Never stop learning.</h4>
                    <p class="p15xs no-margin">
                        Whereas I have been graduated 6 months ago, I keep learning many things everyday. I am the kind of
                        guy that love new technologies and trending projects.
                    </p>
                </div>
                <div class="col-sm-4 fadeInUp-animated text-center mt20-xs">
                    <span class="ion-ios-americanfootball bordered-icon-sm"></span>
                    <h4 class="mt15">Rugby is my duty.</h4>
                    <p class="p15xs no-margin">
                        I started playing Rugby 3 years ago. From that time, I started to think as a team, not for myself as an individual.
                        That capacity helps me a lot at work with my collegues.
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
                    <div class="heading"><h4>About Me</h4></div>
                </div>
            </div>

            {{-- Accordion --}}
            <div class="row">
                <div class="col-sm-6" data-sr="enter left">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">I'm in love with the PHP!</a></h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>
                                        The title is a reference to a song. Feel free to search it :p So, since I'm a child (well, actually I started developing when I was 15...) I develop applications in PHP.
                                    </p>
                                    <p>
                                        That being said, I could see the evolution of this language since PHP4. At this time (and because I was a novice), nothing was really structured. You didn't have the Framework echosystem and I have to admit that it was really painful...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Brace yourself. Laravel is coming!</a></h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        Recently (well, for now two years now), I discovered the Laravel Framework and I
                                        felt in love! Indeed, this Framework based on Symfony 2 and other useful libraries
                                        is meant to be "easy" and allows you to develop and deploy projects really quickly!
                                    </p>
                                    <p>
                                        If you check my <a href="{{ URL::route('blog.index') }}">Blog</a>, you'll be able to find
                                        tips, ideas and other stuff linked to Laravel... Don't hesitate to check them and give me feedback ;)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Code is not everything... Get a life bro!</a></h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        Well, now come the cool part, at least I hope it is. As you can imagine, I'm not a robot and I don't have nerdy activities in my life!
                                    </p>
                                    <p>
                                        Indeed, I love hanging out with friends (well, I live in Paris, the best city in the world! Is it? :)),
                                        play Rugby (because I feel like a Beast there...), I watch a lot of TV shows and other cool stuff!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="{{ URL::route('resume') }}" class="btn btn-rw btn-primary">Need to know more? Check out My Resume</a>
                    </div>
                </div>

                <div class="col-sm-6" data-sr="enter bottom">
                    <img src="{{ asset('assets/frontend/img/showcase.png') }}" class="img-responsive showcase-image" alt="Responsive Showcase">
                </div>
            </div>
            {{-- /Accordion --}}
        </div>
    </div>
    {{-- Accordion + IMG --}}

    {{-- Recent Work + Clients --}}
    <section class="pt40 mb40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb30">
                        <h4><span class="ion-android-social-user mr15"></span>Recent Work</h4>
                        <div class="owl-controls">
                            <div id="customNav" class="owl-nav"></div>
                        </div>
                    </div>
                    <div id="owl-carousel-thumb" class="owl-carousel">
                        <div class="thumbnail">
                            <div class="caption v-wrap">
                                <div class="thumbnail-caption-holder v-box">
                                    <h4 class="text-white">Project 1</h4>
                                    <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/frontend/img/backgrounds/stock4.jpg') }}" alt="...">
                        </div>
                        <div class="thumbnail">
                            <div class="caption">
                                <div class="thumbnail-caption-holder">
                                    <h4 class="text-white">Project 2</h4>
                                    <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/frontend/img/backgrounds/stock4.jpg') }}" alt="...">
                        </div>
                        <div class="thumbnail">
                            <div class="caption">
                                <div class="thumbnail-caption-holder">
                                    <h4 class="text-white">Project 3</h4>
                                    <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/frontend/img/backgrounds/stock4.jpg') }}" alt="...">
                        </div>
                        <div class="thumbnail">
                            <div class="caption">
                                <div class="thumbnail-caption-holder">
                                    <h4 class="text-white">Project 4</h4>
                                    <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/frontend/img/backgrounds/stock4.jpg') }}" alt="...">
                        </div>
                        <div class="thumbnail">
                            <div class="caption">
                                <div class="thumbnail-caption-holder">
                                    <h4 class="text-white">Project 5</h4>
                                    <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span>View</a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/frontend/img/backgrounds/stock4.jpg') }}" alt="...">
                        </div>
                        <div class="thumbnail">
                            <div class="caption">
                                <div class="thumbnail-caption-holder">
                                    <h4 class="text-white">Project 6</h4>
                                    <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span>View</a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/frontend/img/backgrounds/stock4.jpg') }}" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb30">
                        <h4><span class="ion-android-social-user mr15"></span>Customers</h4>
                        <div class="owl-controls">
                            <div id="customNav" class="owl-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-xs-4 mb30-xs" data-sr="enter left">
                    <a href="#"><img src="{{ asset('assets/frontend/img/logos/equi.png') }}" class="img-responsive clients-img" alt="Client 1"></a>
                </div>
                <div class="col-sm-2 col-xs-4 mb30-xs" data-sr="enter left">
                    <a href="#"><img src="{{ asset('assets/frontend/img/logos/equi.png') }}" class="img-responsive clients-img" alt="Client 2"></a>
                </div>
                <div class="col-sm-2 col-xs-4 mb30-xs" data-sr="enter left">
                    <a href="#"><img src="{{ asset('assets/frontend/img/logos/equi.png') }}" class="img-responsive clients-img" alt="Client 3"></a>
                </div>
                <div class="col-sm-2 col-xs-4" data-sr="enter left">
                    <a href="#"><img src="{{ asset('assets/frontend/img/logos/equi.png') }}" class="img-responsive clients-img" alt="Client 4"></a>
                </div>
                <div class="col-sm-2 col-xs-4" data-sr="enter left">
                    <a href="#"><img src="{{ asset('assets/frontend/img/logos/equi.png') }}" class="img-responsive clients-img" alt="Client 5"></a>
                </div>
                <div class="col-sm-2 col-xs-4" data-sr="enter left">
                    <a href="#"><img src="{{ asset('assets/frontend/img/logos/equi.png') }}" class="img-responsive clients-img" alt="Client 6"></a>
                </div>
            </div>
        </div>
    </section>
    {{-- /Recent Work + Clients --}}
@stop
