@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => trans('app.frontend.works.tag.page-title', ['tag_name' => $tag->name]), 'pageNameBreadcrumb' => trans('app.frontend.works.tag.breadcrumb-title')])

    <section class="mt40 mb40">
        <div class="container">
            <div class="row">
                <!-- Works -->
                <div class="col-sm-12">
                    @forelse($works as $work)
                        <div class="blog-post mb40">
                            <a href="{{ route('blog.show', ['slug' => $work->slug]) }}"><img class="img-responsive full-width" src="{{ $work->image }}" alt=""></a>
                            <div class="blog-post-holder">
                                <ul class="list-inline posted-info">
                                    <li>{{ trans('app.by') }} <a href="#">{{ $work->author->name }}</a></li>
                                    <li>{{ $work->created_at->diffForHumans() }}</li>
                                </ul>
                                <hr align="left" class="mt15 mb10">
                                <h2><a href="{{ route('works.show', ['slug' => $work->slug]) }}">{{ $work->title }}</a></h2>
                                {!! $work->excerpt !!}
                                <a href="{{ route('works.show', ['slug' => $work->slug]) }}" class="btn btn-rw btn-primary mt10">{{ trans('app.btn-read-more') }}</a>
                            </div>
                        </div>
                    @empty
                        <p>
                            {{ trans('app.frontend.works.tag.no-work-found') }}
                        </p>
                    @endforelse

                    <nav class="text-center">
                        {!! $works->render() !!}
                    </nav>
                </div>
                <!-- /Works -->
            </div>
        </div>
    </section>
@stop
