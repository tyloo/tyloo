@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => 'My Works', 'pageNameBreadcrumb' => 'Works'])

    <section class="mt40 mb10">
        <div id="portfolio" class="container-fluid">
            <!-- Portfolio Filter -->
            @if($tags->count() > 0)
                <div class="row mb30" style="visibility: visible; ">
                    <ul class="nav nav-pills col-xs-12 text-center">
                        <li class="filter active" data-filter="all">All</li>
                        @foreach($tags as $tag)
                            <li class="filter" data-filter="{{ $tag->slug }}">{{ $tag->name }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Portfolio Items -->
            <div class="row">
                <ul id="myPortfolio" class="col-sm-12 text-center">
                    @forelse($works as $work)
                        <li class="item col-sm-2 mix_all
@foreach($work->tags as $tag) {{ $tag->slug }}@endforeach
">
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
                                            <a href="{{ URL::route('works.show', ['slug' => $work->slug]) }}" class="info">
                                                <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                                            </a>
                                            <!-- /Zoom + Project Link -->
                                        </div>
                                    </div>
                                    <!-- /Project Thumb -->
                                </div>
                                <div class="portfolio-text background-white">
                                    <h3 class="portfolio-title"><a href="{{ URL::route('works.show', ['slug' => $work->slug]) }}">{{ $work->title }}</a></h3>
                                    <div class="project-category">{{ $work->type }}</div>
                                </div>
                            </div>
                        </li>
                    @empty
                        <p>
                            No post have been found in the Database...
                        </p>
                    @endforelse
                </ul>
            </div>
        </div>
    </section>
@stop
