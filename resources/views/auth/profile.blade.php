@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => 'My Profile', 'pageNameBreadcrumb' => 'Profile'])

    <div class="alert alert-success">
        Welcome, {{ $user->name }} !
    </div>
@stop
