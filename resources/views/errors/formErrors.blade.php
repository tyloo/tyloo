@if (isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
        <p>{!! trans('app.errors.formErrors.heading') !!}</p>
        <p>{{ trans('app.errors.formErrors.fix-mistakes') }}</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
