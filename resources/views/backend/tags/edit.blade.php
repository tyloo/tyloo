@extends('layouts.backend')

@section('meta-title')
    Editing Tag "{{ $tag->name }}"
@stop

@section('page-title')
    Editing Tag "{{ $tag->name }}"
@stop

@section('breadcrumb-title')
    Edit Tag
@stop

@section('content')
    <form role="form" action="{{ route('admin.tags.update', $tag->id) }}" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT">

        @include('errors.formErrors')

        <div class="form-group">
            <input type="text" name="name" value="{{ old('name', $tag->name) }}" placeholder="Name" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="slug" value="{{ $tag->slug }}" placeholder="Slug" class="form-control" disabled="disabled">
            <input type="hidden" name="slug" value="{{ $tag->slug }}">
        </div>
        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@stop
