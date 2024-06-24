<!-- resources/views/admin/auth/login.blade.php -->

@extends('admin.layouts.app')

@section('content')
<section class="container mx-auto px-4">
    <section class="login header bg-navy">
        <div class="container">
            <div class="d-flex flex-column align-items-center hero gap-5">
                <div>
                    <div class="hero-headline text-start">
                        Sign In
                    </div>
                </div>
                <form method="POST" action="{{ route('admin.login.submit') }}" class="form-login d-flex flex-column mt-4 mt-md-0 p-30">
                    @csrf
                    <div class="d-flex flex-column align-items-start mb-3">
                        <label for="email_address" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email_address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="d-flex flex-column align-items-start mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="d-grid mt-2 gap-4">
                        <button type="submit" class="btn-green">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>
@endsection
