<!-- resources/views/admin/events/create.blade.php -->

@extends('admin.layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Create Event</h1>
    <form action="{{ route('admin.events.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="event_title" class="form-label">Event Title</label>
            <input type="text" class="form-control" id="event_title" name="event_title" required>
        </div>
        <div class="mb-3">
            <label for="event_description" class="form-label">Event Description</label>
            <textarea class="form-control" id="event_description" name="event_description" required></textarea>
        </div>
        <div class="mb-3">
            <label for="event_date" class="form-label">Event Date</label>
            <input type="date" class="form-control" id="event_date" name="event_date" required>
        </div>
        <div class="mb-3">
            <label for="end_date" class="form-label">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
        </div>
        <div class="mb-3">
            <label for="registration_date" class="form-label">Registration Date</label>
            <input type="date" class="form-control" id="registration_date" name="registration_date" required>
        </div>
        <div class="mb-3">
            <label for="registration_end_date" class="form-label">Registration End Date</label>
            <input type="date" class="form-control" id="registration_end_date" name="registration_end_date" required>
        </div>
        <div class="mb-3">
            <label for="event_time" class="form-label">Event Time</label>
            <input type="time" class="form-control" id="event_time" name="event_time" required>
        </div>
        <div class="mb-3">
            <label for="organizer_name" class="form-label">Organizer Name</label>
            <input type="text" class="form-control" id="organizer_name" name="organizer_name" required>
        </div>
        <div class="mb-3">
            <label for="event_type" class="form-label">Event Type</label>
            <input type="text" class="form-control" id="event_type" name="event_type" required>
        </div>
        <div class="mb-3">
            <label for="event_location" class="form-label">Event Location</label>
            <input type="text" class="form-control" id="event_location" name="event_location" required>
        </div>
        <div class="mb-3">
            <label for="payment_status" class="form-label">Payment Status</label>
            <select class="form-control" id="payment_status" name="payment_status" required>
                <option value="paid">Paid</option>
                <option value="unpaid">Unpaid</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="event_price" class="form-label">Event Price</label>
            <input type="number" class="form-control" id="event_price" name="event_price" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
