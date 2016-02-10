@extends('layouts.backend')

@section('meta-title')
    Tags
@stop

@section('page-title')
    Tags <a href="{{ route('admin.tags.create') }}" class="btn btn-sm btn-primary">Create a new Tag</a>
@stop

@section('breadcrumb-title')
    Tags
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
    @forelse($tags as $tag)
        <tr>
            <td>{{ $tag->name }}</td>
            <td><a href="{{ route('works.tag', $tag->slug) }}" target="_blank">/works/tag/{{ $tag->slug }}</a></td>
            <td>{{ $tag->updated_at->diffForHumans() }}</td>
            <td><a href="{{ route('admin.tags.show', $tag->id) }}" class="btn btn-info" target="_blank"><i class="fa fa-eye"></i> View</a>
            <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
            <a href="{{ route('admin.tags.destroy', $tag->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="6">No Tag were found.</td>
        </tr>
    @endforelse
    </table>
@stop
