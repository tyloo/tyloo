@extends('layouts.backend')

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
            <input type="text" name="title" value="{{ old('title') }}" placeholder="Title" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="slug" value="{{ old('slug') }}" placeholder="Slug" class="form-control">
        </div>
        <div class="form-group">
            <textarea class="form-control summernote" name="excerpt" placeholder="Excerpt" cols="30" rows="10">{{ old('excerpt') }}</textarea>
        </div>
        <div class="form-group">
            <textarea class="form-control summernote" name="content" placeholder="Content" cols="30" rows="10">{{ old('content') }}</textarea>
        </div>
        <div class="form-group">
            <label for="type">Post Type</label>
            <div class="radio">
                <label><input type="radio" name="type" id="typeBlog" value="blog"{{ old('type') == 'blog' ? ' checked="checked"' : '' }}>Blog Post</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="type" id="typeWork" value="work"{{ old('type') == 'work' ? ' checked="checked"' : '' }}>Work</label>
            </div>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@stop
