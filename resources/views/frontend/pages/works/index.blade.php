@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => trans('app.frontend.works.index.page-title'), 'pageNameBreadcrumb' => trans('app.frontend.works.index.breadcrumb-title')])

    <section class="mt40 mb10">
        <div id="portfolio" class="container">
            <!-- Portfolio Filter -->
            @if($tags->count() > 0)
                <div class="row mb30" style="visibility: visible; ">
                    <ul class="nav nav-pills col-xs-12 text-center">
                        <li class="filter active" data-filter=".all">All</li>
                        @foreach($tags as $tag)
                            <li class="filter" data-filter=".{{ $tag->slug }}">{{ $tag->name }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Portfolio Items -->
            <div class="row">
                <ul id="myPortfolio" class="col-sm-12 text-center">
                    @forelse($works as $work)
                        <li class="item illustration col-sm-4 mix all {{ $work->tags->implode('slug', ' ') }}">
                            <div class="border">
                                <div class="view port-borderless image-hover-1">
                                    <img class="img-responsive" src="{{ $work->image }}" alt="..." />
                                    <div class="mask">
                                        <div class="image-hover-content">
                                            <a href="{{ $work->image }}" class="info image-zoom-link">
                                                <div class="image-icon-holder"><span class="fa fa-search portfolio-icons"></span></div>
                                            </a>
                                            <a href="{{ route('works.show', ['slug' => $work->slug]) }}" class="info">
                                                <div class="image-icon-holder"><span class="fa fa-link portfolio-icons"></span></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-text background-white">
                                    <h3 class="portfolio-title"><a href="{{ route('works.show', ['slug' => $work->slug]) }}">{{ $work->title }}</a></h3>
                                    <div class="project-category">Illustration</div>
                                </div>
                            </div>
                        </li>
                    @empty
                        <li>
                            <p>
                                {{ trans('app.frontend.works.index.no-work-found') }}
                            </p>
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </section>
@stop
