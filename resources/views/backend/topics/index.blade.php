@extends('layouts.backend')

@section('meta-title')
    Topics
@stop

@section('page-title')
    Topics <a href="{{ route('admin.topics.create') }}" class="btn btn-sm btn-primary">Create a new Topic</a>
@stop

@section('breadcrumb-title')
    Topics
@stop

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>URL</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
    @forelse($topics as $topic)
        <tr>
            <td>{{ $topic->name }}</td>
            <td><a href="{{ route('blog.topic', $topic->slug) }}" target="_blank">/blog/topic/{{ $topic->slug }}</a></td>
            <td>{{ $topic->updated_at->diffForHumans() }}</td>
            <td><a href="{{ route('admin.topics.show', $topic->id) }}" class="btn btn-info" target="_blank"><i class="fa fa-eye"></i> View</a>
            <a href="{{ route('admin.topics.edit', $topic->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
            <a href="{{ route('admin.topics.destroy', $topic->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="6">No Topic were found.</td>
        </tr>
    @endforelse
    </table>
@stop
