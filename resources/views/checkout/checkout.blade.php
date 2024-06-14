@extends('layouts.app')

@section('content')
    <section class="container mx-auto px-4 ">
        <section class="bg-navy">
            <div class="checkout container">
                <div class="text-center checkout-title">
                    Invest In Yourself
                </div>

                <div class="event-details container d-flex flex-wrap justify-content-lg-center align-items-center gap-5">
                    <img src="assets/images/details-image.png" class="event-image" alt="semina" />
                    <div class="d-flex flex-column gap-3">
                        <h5>Start Your Design Career <br class="d-none d-md-block">
                            With Design Sprint
                        </h5>

                        <div class="d-flex align-items-center gap-3">
                            <img src="assets/icons/ic-marker-white.svg" alt="">
                            <span>Gowork, Bandung</span>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <img src="assets/icons/ic-time-white.svg" alt="">
                            <span>15.00 PM WIB</span>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <img src="assets/icons/ic-calendar-white.svg" alt="">
                            <span>22 Agustus 2022</span>
                        </div>
                    </div>
                    <div class="total-price">
                        $2,980
                    </div>
                </div>

                <form action="" class="container form-semina">
                    <!-- Personal Details -->
                    <div class="personal-details">
                        <div class="row row-cols-lg-8 row-cols-md-2 row-cols-1 justify-content-lg-center">
                            <div class="form-title col-lg-8">
                                <span>01</span>
                                <div>
                                    Personal Details
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-lg-8 row-cols-md-2 row-cols-1 justify-content-center">
                            <!-- First Name -->
                            <div class="mb-4 col-lg-4">
                                <label for="first_name" class="form-label">
                                    First Name
                                </label>
                                <input type="text" placeholder="First name here" class="form-control" id="first_name">
                            </div>
                            <!-- Last Name -->
                            <div class="mb-4 col-lg-4">
                                <label for="last_name" class="form-label">
                                    Last Name
                                </label>
                                <input type="text" placeholder="Last name here" class="form-control" id="last_name">
                            </div>
                        </div>
                        <div class="row row-cols-lg-8 row-cols-md-2 row-cols-12 justify-content-center">
                            <!-- Email -->
                            <div class="mb-4 col-lg-4">
                                <label for="email_address" class="form-label">
                                    Email
                                </label>
                                <input type="email" class="form-control" id="email_address" placeholder="semina@bwa.com">
                            </div>
                            <!-- Role -->
                            <div class="mb-4 col-lg-4">
                                <label for="exampleFormControlInput1" class="form-label">
                                    Role
                                </label>
                                <input type="text" class="form-control" id="role" placeholder="Product Designer">
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="payment-method mt-4">
                        <div class="row row-cols-lg-8 row-cols-md-2 row-cols-1 justify-content-lg-center">
                            <div class="form-title col-lg-8">
                                <span>02</span>
                                <div>
                                    Payment Method
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-lg-8 row-cols-md-2 row-cols-1 justify-content-center gy-4 gy-md-0">
                            <div class="col-lg-4">
                                <label class="payment-radio h-100 d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src="assets/icons/ic-mastercard.svg" alt="">
                                        <div>Mastercard</div>
                                    </div>
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="payment-radio h-100 d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src="assets/icons/ic-sewallet.svg" alt="">
                                        <div class="d-flex flex-column gap-1">
                                            Sewallet
                                            <span class="balance">Balance: $50,000</span>
                                        </div>
                                    </div>
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="d-flex flex-column align-items-center footer-payment gap-4">
                        <button type="submit" class="btn-green">
                            Pay Now
                        </button>
                        <div>
                            <img src="assets/icons/ic-secure.svg" alt="">
                            <span>Your payment is secure and encrypted</span>
                        </div>
                    </div>

                </form>

            </div>
        </section>
    </section>
@endsection
