@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => trans('app.frontend.contact.page-title'), 'pageNameBreadcrumb' => trans('app.frontend.contact.breadcrumb-title')])

    <!-- Map -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 no-padding googleMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41926.50578308724!2d2.491977499999993!3d48.94574299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e613637e3baf4d%3A0xdab0d8387e2a4a50!2sAulnay-sous-Bois!5e0!3m2!1sen!2sfr!4v1438076184452" height="350" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    <!-- /Map -->

    <!-- Contact -->
    <section class="mt40 mb40">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="heading mb20">
                        <h4>{{ trans('app.frontend.contact.form-heading') }}</h4>
                    </div>
                    <p class="mb20">
                        {{ trans('app.frontend.contact.form-text') }}
                    </p>

                    @include('errors.formErrors')

                    @if (isset($success))
                        <div class="alert alert-success">
                            {!! $success !!}
                        </div>
                    @endif
                    <form role="form" method="POST" action="{{ route('contact') }}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input type="text" name="contactName" value="{{ old('contactName') }}" placeholder="{{ trans('app.name') }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="contactEmail" value="{{ old('contactEmail') }}" placeholder="{{ trans('app.email') }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="contactMessage" placeholder="{{ trans('app.message') }}" rows="7">{{ old('contactMessage') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-rw btn-primary">{{ trans('app.btn-submit') }}</button>
                    </form>
                </div>
                <div class="col-sm-4 mt30-xs">
                    <div class="panel panel-primary no-margin">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ trans('app.information') }}</h3>
                        </div>
                        <div class="panel-body">
                            <address class="no-margin">
                                <p><strong>{{ env('CONTACT_NAME', "Julien 'Tyloo' Bonvarlet") }}</strong></p>
                                <p><i class="fa fa-home"></i> {{ env('CONTACT_CITY', 'City') }}</p>
                                <p><i class="fa fa-phone"></i> {{ env('CONTACT_PHONE', 'Phone') }}</p>
                                <p><i class="fa fa-envelope-o "></i> {{ env('CONTACT_EMAIL', 'email') }}</p>
                                <p>
                                    <a href="https://github.com/tyloo" class="btn btn-social-icon btn-github btn-sm"><i class="fa fa-github-alt"></i></a>
                                    <a href="https://www.linkedin.com/pub/julien-bonvarlet/32/427/778" class="btn btn-social-icon btn-linkedin btn-sm"><i class="fa fa-linkedin"></i></a>
                                    <a href="https://twitter.com/TylooFR" class="btn btn-social-icon btn-twitter btn-sm"><i class="fa fa-twitter"></i></a>
                                </p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact -->
@stop
