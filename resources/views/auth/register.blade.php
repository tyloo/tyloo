@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => 'Sign In', 'pageNameBreadcrumb' => 'Sign In'])

    <div class="content-40mg">
        <div class="container">
            <div class="row">
                <!-- Register -->
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel no-margin panel-default">
                        <div class="panel-heading">Create an account</div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ URL::route('auth.register') }}">
                                {!! csrf_field() !!}

                                @include('errors.formErrors')

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="ion-person" style="font-size:10px;"></span>
                                        </div>
                                        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="ion-android-mail" style="font-size:10px;"></span>
                                        </div>
                                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
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
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="ion-ios7-locked"></span>
                                        </div>
                                        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control">
                                    </div>
                                </div>
                                <hr class="mb20 mt20">
                                <button type="submit" class="btn btn-rw btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>
@stop
