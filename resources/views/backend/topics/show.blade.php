@extends('layouts.backend')

@section('meta-title')
    Topic "{{ $topic->name }}"
@stop

@section('page-title')
    Topic "{{ $topic->name }}"
@stop

@section('breadcrumb-title')
    Topic Details
@stop

@section('content')
    <section class="mt40 mb40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog-post mb40">
                        <div class="blog-post-holder">
                            <h1>{{ $topic->name }}</h1>
                            <h2>{{ $topic->slug }}</h2>
                            {!! $topic->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
