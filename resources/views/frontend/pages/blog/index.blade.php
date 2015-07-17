@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => 'Blog', 'pageNameBreadcrumb' => 'Blog'])

    <section class="mt40 mb40">
        <div class="container">
            <div class="row">
                <!-- Blog Posts -->
                <div class="col-sm-8">
                    @forelse($posts as $post)
                        <div class="blog-post mb40">
                            <a href="{{ URL::route('blog.show', ['slug' => $post->slug]) }}"><img class="img-responsive full-width" src="{{ $post->image }}" alt=""></a>
                            <div class="blog-post-holder">
                                <ul class="list-inline posted-info">
                                    <li>By <a href="#">{{ $post->author->name }}</a></li>
                                    <li>{{ $post->created_at->diffForHumans() }}</li>
                                </ul>
                                <hr align="left" class="mt15 mb10">
                                <h2><a href="{{ URL::route('blog.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
                                {!! $post->excerpt !!}
                                <a href="{{ URL::route('blog.show', ['slug' => $post->slug]) }}" class="btn btn-rw btn-primary mt10">Read more</a>
                            </div>
                        </div>
                    @empty
                        <p>
                            No Post have been found in the Database...
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
