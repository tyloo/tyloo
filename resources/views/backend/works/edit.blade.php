@extends('layouts.backend')

@section('meta-title')
    Editing Work "{{ $work->title }}"
@stop

@section('page-title')
    Editing Work "{{ $work->title }}"
@stop

@section('breadcrumb-title')
    Edit Work
@stop

@section('content')
    <form role="form" action="{{ route('admin.works.update', $work->id) }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT">

        @include('errors.formErrors')

        <div class="form-group">
            <input type="text" name="title" value="{{ old('title', $work->title) }}" placeholder="Title" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="slug" value="{{ $work->slug }}" placeholder="Slug" class="form-control" disabled="disabled">
            <input type="hidden" name="slug" value="{{ $work->slug }}">
        </div>
        <div class="form-group">
            <textarea class="form-control summernote" name="excerpt" placeholder="Excerpt" cols="30" rows="10">{{ old('excerpt', $work->excerpt) }}</textarea>
        </div>
        <div class="form-group">
            <textarea class="form-control summernote" name="content" placeholder="Content" cols="30" rows="10">{{ old('content', $work->content) }}</textarea>
        </div>
        <div class="form-group">
            <div>
                @if ($work->image)
                    <img src="{{ asset($work->image) }}" alt="" height="100">
                @endif
            </div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@stop
