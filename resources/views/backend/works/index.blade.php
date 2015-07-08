@extends('layouts.backend')

@section('page-title')
    Works
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
                <th>Published?</th>
                <th>Author</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
    @forelse($works as $work)
        <tr>
            <td>{{ $work->title }}</td>
            <td><a href="{{ URL::route('works.show', $work->slug) }}" target="_blank">/works/{{ $work->slug }}</a></td>
            <td>{{ $work->isPublished() }}</td>
            <td><a href="{{ URL::route('admin.users.show', $work->author->id) }}" target="_blank">{{ $work->author->name }}</a></td>
            <td>{{ $work->updated_at->diffForHumans() }}</td>
            <td><a href="{{ URL::route('admin.works.show', $work->id) }}" class="btn btn-info" target="_blank"><i class="fa fa-eye"></i> View</a>
            <a href="{{ URL::route('admin.works.edit', $work->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
            <a href="{{ URL::route('admin.works.destroy', $work->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="6">No Work were found.</td>
        </tr>
    @endforelse
    </table>
@stop
