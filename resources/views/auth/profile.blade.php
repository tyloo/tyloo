@extends('layouts.backend')

@section('page-title')
    {{ trans('app.auth.profile') }}
@stop

@section('breadcrumb-title')
    {{ trans('app.auth.profile') }}
@stop

@section('content')
    <div class="alert alert-info">
        {{ trans('app.auth.welcome', ['user_name' => $user->name]) }}
    </div>
@stop
