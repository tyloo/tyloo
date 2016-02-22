@extends('layouts.backend')

@section('meta-title')
    Create an User
@stop

@section('page-title')
    Create an User
@stop

@section('breadcrumb-title')
    New User
@stop

@section('content')
    <form role="form" action="{{ route('admin.users.store') }}" method="POST">
        {!! csrf_field() !!}

        @include('errors.formErrors')

        <div class="form-group">
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" class="form-control">
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control">
        </div>
        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@stop
