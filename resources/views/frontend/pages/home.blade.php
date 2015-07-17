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
                                        <h3 class="heavy text-white"><span class="carousel-title-bgclear">Passionate & Flexible</span></h3>
                                        <p>
                                            You might have not realized yet, but I'm in love with my job! Indeed, I always wanted to work on computers
                                            and started to learn how to code very early in my life. Since then I try to be able to adapt to new technologies
                                            and new devices...
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
                                        <h4 class="heavy text-white"><span class="carousel-title-bg">Google Deployment Specialist</span></h4>
                                        <p>
                                            I have been working for three years now (and It's still the case today) for a Google Partner! I am specialised
                                            in the GSA (Google Search Appliance). My Job is to integrate the GSA's echosystem inside a company allowing them to
                                            have a powerful, centralized and customizable Search Engine. With the power of Google and a bit of magic, you can find everything
                                            inside your company just like you'd do it on google.com! Sound cool, right? :)
                                        </p>
                                        <a href="{{ URL::route('resume') }}" class="btn btn-rw btn-primary">Check out more at my Resume &nbsp;&nbsp;<span class="ion-ios-arrow-right"></span></a>
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
                                        <h2 class="heavy text-white"><span class="carousel-title-bgclear">Sharing is Caring</span></h2>
                                        <p>
                                            I always wanted to be a teacher somehow in my life. The thing is, if you are able to learn something
                                            to someone, you can validate the fact that you fully understand the subject. More interesting, with the power
                                            of the Interwebs, if you make some mistakes and don't tell the truth, Internet guardians (trolls somehow) will just
                                            put you in troubles and you'll be forced to tell the truth. Finally, you start to correct yourself and you become better...
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
                                        The title is a reference to a song. Feel free to search it :p So, since I'm a child (well, actually I started nerd stuff when I was 15...) I develop applications in PHP.
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
                                        Recently (well, for two years now), I discovered the Laravel Framework and I
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
                                        Well, now come the cool part, at least I hope it is. As you can imagine, I'm not a robot and I don't have only nerdy activities in my life!
                                    </p>
                                    <p>
                                        Indeed, I love hanging out with friends (well, I live in Paris, the best city in the world! Isn't it? :)),
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

    {{-- Recent Work --}}
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
                        <h4><span class="ion-android-social-user mr15"></span>Customers</h4>
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
