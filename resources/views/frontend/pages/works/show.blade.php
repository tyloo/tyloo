@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => trans('app.frontend.works.show.page-title', ['work_title' => $work->title]), 'pageNameBreadcrumb' => trans('app.frontend.works.show.breadcrumb-title')])

    <!-- Project Details -->
    <section class="mt40 mb40">
        <div class="container">
            <div class="row text-center">
                <p class="lead mb30">{{ $work->title }}</p>
                <img class="img-thumbnail" src="{{ $work->image }}" alt="{{ $work->title }}">
                <div class="row mt40">
                    @foreach($work->tags as $tag)
                        <a href="{{ route('works.tag', ['slug' => $tag->slug]) }}"><span class="label label-info">{{ $tag->name }}</span></a>
                    @endforeach
                </div>
            </div>

            <div class="row mt40">
                {!! $work->content !!}
            </div>
        </div>
    </section>
    <!-- /Project Details -->

    <!-- Recent Work -->
    <section class="pt40 mb40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb30">
                        <h4>{{ trans('app.frontend.works.show.recent-work') }}</h4>
                        <div class="owl-controls">
                            <div id="customNav" class="owl-nav"></div>
                        </div>
                    </div>
                    @include('frontend.partials.home._lastWorks')
                </div>
            </div>
        </div>
    </section>
    <!-- /Recent Work -->
@stop
