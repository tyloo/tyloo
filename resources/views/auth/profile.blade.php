@extends('layouts.backend')

@section('page-title')
    Profile
@stop

@section('breadcrumb-title')
    Profile
@stop

@section('content')
    <div class="alert alert-success">
        Welcome, {{ $user->name }} !
    </div>
@stop
