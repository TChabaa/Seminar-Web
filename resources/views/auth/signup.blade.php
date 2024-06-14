@extends('layouts.app')

@section('content')
<section class="container mx-auto px-4 ">
    <section class="login header bg-navy">
        <div class="container">
            <div class="row row-cols-md-12 row-cols-1 d-flex justify-content-center align-items-center hero">
                <div class="col-md-6">
                    <div class="hero-headline text-start">
                        Expand Your <br class="d-none d-md-block" />
                        Knowledge & Skills
                    </div>
                    <p class="hero-paragraph text-start">
                        Kami menyediakan berbagai acara terbaik untuk membantu <br class="d-none d-lg-block" />
                        anda dalam meningkatkan skills di bidang teknologi
                    </p>
                </div>
                <div class="col-md-6">
                    <form action="" class="form-login d-flex flex-column mt-4 mt-md-0">
                        <!-- First Name -->
                        <div class="d-flex flex-column align-items-start">
                            <label for="first_name" class="form-label">
                                First Name
                            </label>
                            <input type="text" placeholder="First name here" class="form-control" id="first_name">
                        </div>
                        <!-- Last Name -->
                        <div class="d-flex flex-column align-items-start">
                            <label for="last_name" class="form-label">
                                Last Name
                            </label>
                            <input type="text" placeholder="Last name here" class="form-control" id="last_name">
                        </div>
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
                        <!-- Role -->
                        <div class="d-flex flex-column align-items-start">
                            <label for="role" class="form-label">
                                Role
                            </label>
                            <input type="text" class="form-control" id="role" placeholder="ex: Product Designer">
                        </div>
                        <div class="d-grid mt-2">
                            <button class="btn-green">
                                Sign Up
                            </button>
                        </div>
                    </form>
                </div>
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
