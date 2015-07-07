@extends('layouts.backend')

@section('page-title')
    Tags List
@stop

@section('breadcrumb-title')
    Tags List
@stop

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>URL</th>
                <th>Number of tags</th>
                <th>Creation Date</th>
                <th>Actions</th>
            </tr>
        </thead>
    @forelse($tags as $tag)
        <tr>
            <td>{{ $tag->name }}</td>
            <td><a href="{{URL::route('admin.tags.show', $tag->slug)}}" target="_blank">/blog/{{ $tag->slug }}</a></td>
            <td>{{ $tag->posts()->count() }}</td>
            <td>{{ $tag->created_at->diffForHumans() }}</td>
            <td><a href="{{ URL::route('admin.tags.show', $tag->id) }}" class="btn btn-info" target="_blank"><i class="fa fa-eye"></i> View</a>
            <a href="{{ URL::route('admin.tags.edit', $tag->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
            <a href="{{ URL::route('admin.tags.destroy', $tag->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="5">No Tag were found.</td>
        </tr>
    @endforelse
    </table>
@stop
