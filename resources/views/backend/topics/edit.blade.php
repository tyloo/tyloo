@extends('layouts.backend')

@section('meta-title')
    Editing Topic "{{ $topic->name }}"
@stop

@section('page-title')
    Editing Topic "{{ $topic->name }}"
@stop

@section('breadcrumb-title')
    Edit Topic
@stop

@section('content')
    <form role="form" action="{{ route('admin.topics.update', $topic->id) }}" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT">

        @include('errors.formErrors')

        <div class="form-group">
            <input type="text" name="name" value="{{ old('name', $topic->name) }}" placeholder="Name" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="slug" value="{{ $topic->slug }}" placeholder="Slug" class="form-control" disabled="disabled">
            <input type="hidden" name="slug" value="{{ $topic->slug }}">
        </div>
        <div class="form-group">
            <textarea class="form-control summernote" name="content" placeholder="Content" cols="30" rows="10">{{ old('content', $topic->content) }}</textarea>
        </div>
        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@stop
