@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => 'Sign In', 'pageNameBreadcrumb' => 'Sign In'])

    <div class="content-40mg">
        <div class="container">
            <div class="row">
                <!-- Login -->
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel no-margin panel-default">
                        <div class="panel-heading">Login to your account</div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ URL::route('auth.login') }}">
                                {!! csrf_field() !!}

                                @include('errors.formErrors')

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="ion-android-mail" style="font-size:10px;"></span>
                                        </div>
                                        <input type="email" name="email" placeholder="Enter email" value="{{ old('email') }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="ion-ios7-locked"></span>
                                        </div>
                                        <input type="password" name="password" placeholder="Password" class="form-control">
                                    </div>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember me
                                    </label>
                                </div>
                                <hr class="mb20 mt15">
                                <button type="submit" class="btn btn-rw btn-primary">Submit</button> &nbsp;&nbsp;&nbsp;<small><a href="#">Forgot your password?</a></small>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Login -->
            </div>
        </div>
    </div>
@stop
