<!-- resources/views/admin/users/edit.blade.php -->

@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1 class="py-4 text-white">Edit User</h1>
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3 text-white">
            <label for="name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="mb-3 text-white">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}" required>
        </div>
        <div class="mb-3 text-white">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div class="mb-3 text-white">
            <label for="job" class="form-label">Job</label>
            <input type="text" class="form-control" id="job" name="job" value="{{ $user->job }}">
        </div>
        <div class="mb-3 text-white">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <small class="form-text text-white">Leave blank to keep current password.</small>
        </div>
        <div class="mb-3 text-white">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
        <button type="submit" class="btn-green">Update</button>
    </form>
</div>
@endsection
