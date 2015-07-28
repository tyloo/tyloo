@extends('layouts.auth')

@section('content')
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form role="form" action="{{ URL::route('admin.auth.login') }}" method="POST">
            {!! csrf_field() !!}

            @include('errors.formErrors')

            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                <i class="fa fa-envelope form-control-feedback"></i>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <i class="fa fa-lock form-control-feedback"></i>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
            </div>
        </form>

        <div class="text-right">
            <a href="{{ URL::route('admin.auth.remind') }}">I forgot my password!</a>
        </div>
    </div>
@stop
