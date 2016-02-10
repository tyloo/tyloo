@extends('layouts.backend')

@section('meta-title')
    Editing Customer "{{ $customer->label }}"
@stop

@section('page-title')
    Editing Customer "{{ $customer->title }}"
@stop

@section('breadcrumb-title')
    Edit Customer
@stop

@section('content')
    <form role="form" action="{{ route('admin.customers.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT">

        @include('errors.formErrors')

        <div class="form-group">
            <input type="text" name="label" value="{{ old('label', $customer->label) }}" placeholder="Label" class="form-control">
        </div>
        <div class="form-group">
            <textarea class="form-control summernote" name="description" placeholder="Description" cols="30" rows="10">{{ old('description', $customer->description) }}</textarea>
        </div>
        <div class="form-group">
            <div>
                @if ($customer->image)
                    <img src="{{ asset($customer->image) }}" alt="" height="100">
                @endif
            </div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@stop
