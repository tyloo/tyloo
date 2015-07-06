@extends('layouts.backend')

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Date Joined</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
    @forelse($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role() }}</td>
            <td>{{ $user->created_at->diffForHumans() }}</td>
            <td><a href="{{ URL::route('admin.users.show', $user->id) }}" class="btn btn-info" target="_blank"><i class="fa fa-eye"></i> View</a></td>
            <td><a href="{{ URL::route('admin.users.edit', $user->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a></td>
            <td><a href="{{ URL::route('admin.users.destroy', $user->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="7">No User were found.</td>
        </tr>
    @endforelse
    </table>
@stop
