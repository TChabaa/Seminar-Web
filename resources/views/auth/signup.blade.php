@extends('auth.layouts.app')

@section('content')
<section class="container mx-auto px-4">
    <section class="login header bg-navy">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 d-flex justify-content-center align-items-center hero">
                <div class="col-md-6 text-start">
                    <div class="hero-headline">
                        Expand Your <br class="d-none d-md-block" />
                        Knowledge & Skills
                    </div>
                    <p class="hero-paragraph">
                        Kami menyediakan berbagai acara terbaik untuk membantu <br class="d-none d-lg-block" />
                        anda dalam meningkatkan skills di bidang teknologi
                    </p>
                </div>
                <div class="col-md-6">
                    <form method="POST" action="{{ route('register') }}" class="form-login d-flex flex-column mt-4 mt-md-0">
                        @csrf

                        <!-- First Name -->
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" placeholder="First name here" class="form-control @error('name') is-invalid @enderror" id="first_name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Last Name -->
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" placeholder="Last name here" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}" required autocomplete="family-name">
                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email_address" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email_address" name="email" placeholder="semina@bwa.com" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password (6 characters)</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Type your password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Re-type your password" required autocomplete="new-password">
                        </div>

                        <!-- Role -->
                        <div class="mb-3">
                            <label for="role" class="form-label">Job</label>
                            <input type="text" class="form-control" id="role" name="job" placeholder="ex: Product Designer" required>
                        </div>

                        <div class="d-grid mt-2">
                            <button type="submit" class="btn-green">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
