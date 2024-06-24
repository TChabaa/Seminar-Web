@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1 class="py-4 text-white">Event Management</h1>

    <!-- Add Event Button -->
    <div class="mb-5">
        <a href="{{ route('admin.events.create') }}" class="btn-green mb-3">Add Event</a>
    </div>
    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Event Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Organizer name</th>
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
                    <td>{{ $event->organizer_name }}</td>
                    <td>
                        <a href="{{ route('admin.events.edit', $event->id) }}" class="btn-green">Edit</a>
                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-navy">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
