@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => trans('app.frontend.works.tag.page-title', ['tag_name' => $tag->name]), 'pageNameBreadcrumb' => trans('app.frontend.works.tag.breadcrumb-title')])

    <section class="mt40 mb40">
        <div class="container">
            <ul class="row">
                <!-- Works -->
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
                                {{ trans('app.frontend.works.tag.no-work-found') }}
                            </p>
                        </li>
                    @endforelse

                    <nav class="text-center">
                        {!! $works->render() !!}
                    </nav>
                </ul>
                <!-- /Works -->
            </div>
        </div>
    </section>
@stop
