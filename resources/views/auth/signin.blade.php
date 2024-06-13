@extends('layouts.app')

@section('content')
<section class="container mx-auto px-4 ">
    <section class="login header bg-navy">
        <div class="container">
            <div class="d-flex flex-column align-items-center hero gap-5">
                <div>
                    <div class="hero-headline text-start">
                        Sign In
                    </div>
                </div>
                <form action="" class="form-login d-flex flex-column mt-4 mt-md-0 p-30">
                    <!-- Email -->
                    <div class="d-flex flex-column align-items-start">
                        <label for="email_address" class="form-label">
                            Email
                        </label>
                        <input type="email" class="form-control" id="email_address" placeholder="semina@bwa.com">
                    </div>
                    <!-- Password -->
                    <div class="d-flex flex-column align-items-start">
                        <label for="password" class="form-label">
                            Password (6 characters)
                        </label>
                        <input type="password" class="form-control" id="password" placeholder="Type your password">
                    </div>
                    <div class="d-grid mt-2 gap-4">
                        <!-- <button class="btn-green">
                            Sign In
                        </button> -->
                        <a href="/checkout-authenticated" class="btn-green">
                            Sign In
                        </a>
                        <a href="/signup" class="btn-navy">
                            Create New Account
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <section class="brand-partner pt-0 text-center bg-navy">
        <p>Events held by top & biggest global companies</p>
        <div class="d-flex flex-row flex-wrap justify-content-center align-items-center">
            <img src="assets/images/apple-111.svg" alt="semina" />
            <img src="assets/images/Adobe.svg" alt="semina" />
            <img src="assets/images/slack-21.svg" alt="semina" />
            <img src="assets/images/spotify-11.svg" alt="semina" />
            <img src="assets/images/google-2015.svg" alt="semina" />
        </div>
    </section>
</section>
@endsection
