@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => trans('app.frontend.blog.index.page-title'), 'pageNameBreadcrumb' => trans('app.frontend.blog.index.breadcrumb-title')])

    <section class="mt40 mb40">
        <div class="container">
            <div class="row">
                <!-- Blog Posts -->
                <div class="col-sm-8">
                    @forelse($posts as $post)
                        <div class="blog-post mb40">
                            <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"><img class="img-responsive full-width" src="{{ $post->image }}" alt=""></a>
                            <div class="blog-post-holder">
                                <ul class="list-inline posted-info">
                                    <li>{{ trans('app.by') }} <a href="#">{{ $post->author->name }}</a></li>
                                    <li>{{ $post->created_at->diffForHumans() }}</li>
                                </ul>
                                <hr align="left" class="mt15 mb10">
                                <h2><a href="{{ route('blog.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
                                {!! $post->excerpt !!}
                                <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="btn btn-rw btn-primary mt10">{{ trans('app.btn-read-more') }}</a>
                            </div>
                        </div>
                    @empty
                        <p>
                            {{ trans('app.frontend.blog.index.no-post-found') }}
                        </p>
                    @endforelse

                    <nav class="text-center">
                        {!! $posts->render() !!}
                    </nav>
                </div>

                <!-- Sidebar -->
                <div class="col-sm-4">
                    @include('frontend.partials.blog.sidebar')
                </div>
                <!-- /Sidebar -->
            </div>
        </div>
    </section>
@stop
