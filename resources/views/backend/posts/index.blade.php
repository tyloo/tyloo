@extends('layouts.backend')

@section('page-title')
    Posts (Blog / Work) <a href="{{ URL::route('admin.posts.create') }}" class="btn btn-sm btn-primary">Create a new Post</a>
@stop

@section('breadcrumb-title')
    Posts (Blog / Work)
@stop

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Type</th>
                <th>Title</th>
                <th>URL</th>
                <th>Author</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
    @forelse($posts as $post)
        <tr>
            <td>{{ ucfirst($post->type) }}</td>
            <td>{{ $post->title }}</td>
            <td>/{{ $post->type }}/{{ $post->slug }}</td>
            <td><a href="{{ URL::route('admin.posts.show', $post->author->id) }}" target="_blank">{{ $post->author->name }}</a></td>
            <td>{{ $post->updated_at->diffForHumans() }}</td>
            <td><a href="{{ URL::route('admin.posts.show', $post->id) }}" class="btn btn-info" target="_blank"><i class="fa fa-eye"></i> View</a>
            <a href="{{ URL::route('admin.posts.edit', $post->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
            <a href="{{ URL::route('admin.posts.destroy', $post->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="6">No Post were found.</td>
        </tr>
    @endforelse
    </table>
@stop
