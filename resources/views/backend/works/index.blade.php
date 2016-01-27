@extends('layouts.backend')

@section('meta-title')
    Works
@stop

@section('page-title')
    Works <a href="{{ route('admin.works.create') }}" class="btn btn-sm btn-primary">Create a new Work</a>
@stop

@section('breadcrumb-title')
    Works
@stop

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>URL</th>
                <th>Author</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
    @forelse($works as $work)
        <tr>
            <td>{{ $work->title }}</td>
            <td>/works/{{ $work->slug }}</td>
            <td><a href="{{ route('admin.users.show', $work->author->id) }}" target="_blank">{{ $work->author->name }}</a></td>
            <td>{{ $work->updated_at->diffForHumans() }}</td>
            <td><a href="{{ route('admin.works.show', $work->id) }}" class="btn btn-info" target="_blank"><i class="fa fa-eye"></i> View</a>
            <a href="{{ route('admin.works.edit', $work->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
            <a href="{{ route('admin.works.destroy', $work->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="6">No Work were found.</td>
        </tr>
    @endforelse
    </table>
@stop
