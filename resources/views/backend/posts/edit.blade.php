@extends('layouts.backend')

@section('page-title')
    Editing Post "{{ $post->title }}"
@stop

@section('breadcrumb-title')
    Edit Post
@stop

@section('content')
    <form role="form" action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT">

        @include('errors.formErrors')

        <div class="form-group">
            <input type="text" name="title" value="{{ old('title', $post->title) }}" placeholder="Title" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="slug" value="{{ $post->slug }}" placeholder="Slug" class="form-control" disabled="disabled">
            <input type="hidden" name="slug" value="{{ $post->slug }}">
        </div>
        <div class="form-group">
            <textarea class="form-control summernote" name="excerpt" placeholder="Excerpt" cols="30" rows="10">{{ old('excerpt', $post->excerpt) }}</textarea>
        </div>
        <div class="form-group">
            <textarea class="form-control summernote" name="content" placeholder="Content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>
        </div>
        <div class="form-group">
            <label for="type">Post Type</label>
            <div class="radio">
                <label><input type="radio" name="type" id="typeBlog" value="blog"{{ old('type', $post->type) == 'blog' ? ' checked="checked"' : '' }}>Blog Post</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="type" id="typeWork" value="work"{{ old('type', $post->type) == 'work' ? ' checked="checked"' : '' }}>Work</label>
            </div>
        </div>
        <div class="form-group">
            <div>
                @if ($post->image)
                    <img src="{{ asset($post->image) }}" alt="" height="100">
                @endif
            </div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@stop
