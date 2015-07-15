@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => 'I have lost my password!', 'pageNameBreadcrumb' => 'Password Remind'])

    <div class="content-40mg">
        <div class="container">
            <div class="row">
                <!-- Remind -->
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel no-margin panel-default">
                        <div class="panel-heading">I have lost my password!</div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ URL::route('admin.auth.remind') }}">
                                {!! csrf_field() !!}

                                @include('errors.formErrors')

                                @if (isset($status))
                                    <div class="alert alert-success">
                                        {{ $status }}
                                    </div>
                                @endif

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="ion-android-mail" style="font-size:10px;"></span>
                                        </div>
                                        <input type="email" name="email" placeholder="Enter email" value="{{ old('email') }}" class="form-control">
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
