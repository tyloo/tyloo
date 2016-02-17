@extends('layouts.backend')

@section('meta-title')
    Create a Tag
@stop

@section('page-title')
    Create a Tag
@stop

@section('breadcrumb-title')
    New Tag
@stop

@section('content')
    <form role="form" action="{{ route('admin.tags.store') }}" method="POST">
        {!! csrf_field() !!}

        @include('errors.formErrors')

        <div class="form-group">
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="slug" value="{{ old('slug') }}" placeholder="Slug" class="form-control">
        </div>
        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@stop
