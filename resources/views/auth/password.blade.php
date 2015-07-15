@extends('layouts.auth')

@section('content')
    <div class="login-box-body">
        <p class="login-box-msg">I forgot my password!</p>

        <form role="form" action="{{ URL::route('admin.auth.remind') }}" method="POST">
            {!! csrf_field() !!}

            @include('errors.formErrors')

            @if (isset($status))
                <div class="alert alert-success">
                    {{ $status }}
                </div>
            @endif

            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                </div>
            </div>
        </form>
    </div>
@stop
