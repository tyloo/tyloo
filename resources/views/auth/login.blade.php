@extends('layouts.auth')

@section('page-title')
    {{ trans('app.auth.login-page-title') }}
@stop

@section('content')
    <div class="login-box-body">
        <p class="login-box-msg">{{ trans('app.auth.login-title') }}</p>

        <form role="form" action="{{ route('admin.auth.login') }}" method="POST">
            {!! csrf_field() !!}

            @include('errors.formErrors')

            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="{{ trans('app.email') }}" value="{{ old('email') }}">
                <i class="fa fa-envelope form-control-feedback"></i>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="{{ trans('app.password') }}">
                <i class="fa fa-lock form-control-feedback"></i>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> {{ trans('app.auth.remember-me') }}
                        </label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('app.auth.btn-sign-in') }}</button>
                </div>
            </div>
        </form>

        <div class="text-right">
            <a href="{{ route('admin.auth.remind') }}">{{ trans('app.auth.forgot-password') }}</a>
        </div>
    </div>
@stop
