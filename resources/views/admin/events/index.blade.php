<!-- resources/views/admin/events/index.blade.php -->

@extends('admin.layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Event Management</h1>
    <a href="{{ route('admin.events.create') }}" class="btn btn-primary mb-3">Add Event</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->event_title }}</td>
                    <td>{{ $event->event_description }}</td>
                    <td>{{ $event->event_date }}</td>
                    <td>
                        <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
