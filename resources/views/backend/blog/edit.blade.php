@extends('layouts.backend')

@section('page-title')
    Editing Blog Post "{{ $post->title }}"
@stop

@section('breadcrumb-title')
    Edit Blog Post
@stop

@section('content')
    <form role="form" action="{{ URL::route('admin.blog.update', $post->id) }}" method="POST" enctype="multipart/form-data">
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
            <textarea class="form-control" name="excerpt" placeholder="Excerpt" cols="30" rows="10">{{ old('excerpt', $post->excerpt) }}</textarea>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="content" placeholder="Content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>
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
        <div class="checkbox">
            <label>
                <input type="hidden" name="published" value="0">
                <input type="checkbox" name="published" value="1"{{ old('published', $post->published) == 1 ? ' checked="checked"' : '' }}> Published?
            </label>
        </div>
        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@stop
