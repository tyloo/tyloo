@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => 'Blog', 'pageNameBreadcrumb' => 'Blog'])

    <div class="container">
        @foreach($posts as $post)
            <p>
                {{ $post->title }}
            </p>
        @endforeach
    </div>
@stop
