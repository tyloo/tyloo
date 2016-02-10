@extends('layouts.backend')

@section('meta-title')
    Customers
@stop

@section('page-title')
    Customers <a href="{{ route('admin.customers.create') }}" class="btn btn-sm btn-primary">Create a new Customer</a>
@stop

@section('breadcrumb-title')
    Customers
@stop

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Label</th>
                <th>Description</th>
                <th>Image</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
    @forelse($customers as $customer)
        <tr>
            <td>{{ $customer->label }}</td>
            <td>{{ $customer->description }}</td>
            <td>
                @if($customer->image !== null)
                    <img class="img-responsive" src="{{ $customer->image }}" alt="">
                @endif
            </td>
            <td>{{ $customer->updated_at->diffForHumans() }}</td>
            <td><a href="{{ route('admin.customers.show', $customer->id) }}" class="btn btn-info" target="_blank"><i class="fa fa-eye"></i> View</a>
            <a href="{{ route('admin.customers.edit', $customer->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
            <a href="{{ route('admin.customers.destroy', $customer->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="6">No Customer were found.</td>
        </tr>
    @endforelse
    </table>
@stop
