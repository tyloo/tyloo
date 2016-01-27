@extends('layouts.backend')

@section('meta-title')
    Posts
@stop

@section('page-title')
    Posts <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-primary">Create a new Post</a>
@stop

@section('breadcrumb-title')
    Posts
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
    @forelse($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>/blog/{{ $post->slug }}</td>
            <td><a href="{{ route('admin.users.show', $post->author->id) }}" target="_blank">{{ $post->author->name }}</a></td>
            <td>{{ $post->updated_at->diffForHumans() }}</td>
            <td><a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-info" target="_blank"><i class="fa fa-eye"></i> View</a>
            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
            <a href="{{ route('admin.posts.destroy', $post->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="6">No Post were found.</td>
        </tr>
    @endforelse
    </table>
@stop
