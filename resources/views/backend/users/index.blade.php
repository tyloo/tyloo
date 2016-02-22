@extends('layouts.backend')

@section('meta-title')
    Users
@stop

@section('page-title')
    Users <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-primary">Create a new User</a>
@stop

@section('breadcrumb-title')
    Users
@stop

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Member Since</th>
                <th>Actions</th>
            </tr>
        </thead>
    @forelse($users as $user)
        <tr>
            <td><img src="//www.gravatar.com/avatar/{{ md5($user->email) }}?s=20" class="img-circle" alt="User Image"> {{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->diffForHumans() }}</td>
            <td><a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-info" target="_blank"><i class="fa fa-eye"></i> View</a>
            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
            <a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="6">No User were found.</td>
        </tr>
    @endforelse
    </table>
@stop
