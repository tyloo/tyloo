@extends('layouts.backend')

@section('meta-title')
    Create a Customer
@stop

@section('page-title')
    Create a Customer
@stop

@section('breadcrumb-title')
    New Customer
@stop

@section('content')
    <form role="form" action="{{ route('admin.customers.store') }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}

        @include('errors.formErrors')

        <div class="form-group">
            <input type="text" name="label" value="{{ old('label') }}" placeholder="Label" class="form-control">
        </div>
        <div class="form-group">
            <textarea class="form-control summernote" name="description" placeholder="Description" cols="30" rows="10">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@stop
