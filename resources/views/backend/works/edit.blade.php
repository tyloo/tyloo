@extends('layouts.backend')

@section('page-title')
    Editing Work "{{ $work->title }}"
@stop

@section('breadcrumb-title')
    Edit Work
@stop

@section('content')
    <form role="form" action="{{ URL::route('admin.works.update', $work->id) }}" method="POST" enctype="multipart/form-data">
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
            <textarea class="form-control" name="excerpt" placeholder="Excerpt" cols="30" rows="10">{{ old('excerpt', $work->excerpt) }}</textarea>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="content" placeholder="Content" cols="30" rows="10">{{ old('content', $work->content) }}</textarea>
        </div>
        <div class="form-group">
            <select name="type" class="form-control">
                <option value="">Type:</option>
                <option value="Website"{{ old('type', $work->type) == 'Website' ? ' selected="selected"' : '' }}>Website</option>
                <option value="Search"{{ old('type', $work->type) == 'Search' ? ' selected="selected"' : '' }}>Search</option>
                <option value="Application (mobile)"{{ old('type', $work->type) == 'Application (mobile)' ? ' selected="selected"' : '' }}>Application (mobile)</option>
            </select>
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
        <div class="checkbox">
            <label>
                <input type="hidden" name="published" value="0">
                <input type="checkbox" name="published" value="1"{{ old('published', $work->published) == 1 ? ' checked="checked"' : '' }}> Published?
            </label>
        </div>
        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@stop
