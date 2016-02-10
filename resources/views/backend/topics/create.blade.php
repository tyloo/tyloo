@extends('layouts.backend')

@section('meta-title')
    Create a Topic
@stop

@section('page-title')
    Create a Topic
@stop

@section('breadcrumb-title')
    New Topic
@stop

@section('content')
    <form role="form" action="{{ route('admin.topics.store') }}" method="POST">
        {!! csrf_field() !!}

        @include('errors.formErrors')

        <div class="form-group">
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="slug" value="{{ old('slug') }}" placeholder="Slug" class="form-control">
        </div>
        <div class="form-group">
            <textarea class="form-control summernote" name="content" placeholder="Content" cols="30" rows="10">{{ old('content') }}</textarea>
        </div>
        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@stop
