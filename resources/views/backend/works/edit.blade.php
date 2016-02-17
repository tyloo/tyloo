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
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title', $work->title) }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" value="{{ $work->slug }}" class="form-control" disabled="disabled">
        </div>
        <div class="form-group">
            <label for="excerpt">Excerpt</label>
            <textarea name="excerpt" id="excerpt" cols="30" rows="10" class="form-control summernote">{{ old('excerpt', $work->excerpt) }}</textarea>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control summernote">{{ old('content', $work->content) }}</textarea>
        </div>
        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" name="tags" id="tags" value="{{ old('tags', $work->tags->implode('name', ',')) }}" class="form-control">
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
