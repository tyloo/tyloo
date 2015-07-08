@extends('layouts.backend')

@section('page-title')
    User "{{ $user->name }}"
@stop

@section('breadcrumb-title')
    User Details
@stop

@section('content')
    <section class="mt40 mb40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog-post mb40">
                        <div class="blog-post-holder">
                            <h1>{{ $user->name }}</h1>
                            <h3>{{ $user->email }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
