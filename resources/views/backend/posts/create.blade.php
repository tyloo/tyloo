@extends('layouts.backend')

@section('meta-title')
    Create a Post
@stop

@section('page-title')
    Create a Post
@stop

@section('breadcrumb-title')
    New Post
@stop

@section('content')
    <form role="form" action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}

        @include('errors.formErrors')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="excerpt">Excerpt</label>
            <textarea name="excerpt" id="excerpt" cols="30" rows="10" class="form-control summernote">{{ old('excerpt') }}</textarea>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control summernote">{{ old('content') }}</textarea>
        </div>
        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" name="tags" id="tags" value="{{ old('tags') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@stop
