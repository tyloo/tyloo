@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => 'Reset my Password', 'pageNameBreadcrumb' => 'Password Reset'])

    <div class="content-40mg">
        <div class="container">
            <div class="row">
                <!-- Remind -->
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel no-margin panel-default">
                        <div class="panel-heading">Reset my Password</div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ URL::route('admin.auth.reset') }}">
                                {!! csrf_field() !!}
                                <input type="hidden" name="token" value="{{ $token }}">

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
                                            <span class="ion-ios-locked"></span>
                                        </div>
                                        <input type="password" name="password" placeholder="Password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="ion-ios-locked"></span>
                                        </div>
                                        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control">
                                    </div>
                                </div>

                                <hr class="mb20 mt15">
                                <button type="submit" class="btn btn-rw btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Remind -->
            </div>
        </div>
    </div>
@stop
