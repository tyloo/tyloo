@extends('layouts.auth')

@section('content')
    <div class="login-box-body">
        <p class="login-box-msg">{{ trans('app.auth.forgot-password') }}</p>

        <form role="form" action="{{ route('admin.auth.remind') }}" method="POST">
            {!! csrf_field() !!}

            @include('errors.formErrors')

            @if (isset($status))
                <div class="alert alert-success">
                    {{ $status }}
                </div>
            @endif

            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="{{ trans('app.email') }}" value="{{ old('email') }}">
                <i class="fa fa-envelope form-control-feedback"></i>
            </div>

            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('app.btn-submit') }}</button>
                </div>
            </div>
        </form>
    </div>
@stop
