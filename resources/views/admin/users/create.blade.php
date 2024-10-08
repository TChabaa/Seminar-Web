<!-- resources/views/admin/users/create.blade.php -->

@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1 class="py-4 text-white">Create User</h1>
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="mb-3 text-white">
            <label for="name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3 text-white">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required>
        </div>
        <div class="mb-3 text-white">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3 text-white">
            <label for="job" class="form-label">Job</label>
            <input type="text" class="form-control" id="job" name="job">
        </div>
        <div class="mb-3 text-white">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3 text-white">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit" class="btn-green">Create</button>
    </form>
</div>
@endsection
