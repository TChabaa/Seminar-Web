@extends('layouts.app')

@section('content')
    <section class="container mx-auto px-4">
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

                <form action="{{ route('receipts.store') }}" method="POST" enctype="multipart/form-data" class="container form-semina">
                    @csrf
                    <!-- Personal Details -->
                    <div class="personal-details">
                        <div class="row row-cols-lg-8 row-cols-md-2 row-cols-1 justify-content-lg-center">
                            <div class="form-title col-lg-8">
                                <span>01</span>
                                <div>Personal Details</div>
                            </div>
                        </div>
                        <div class="row row-cols-lg-8 row-cols-md-2 row-cols-1 justify-content-center">
                            <!-- Display First Name -->
                            <div class="mb-4 col-lg-4">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control prefilled-input" id="first_name" value="{{ Auth::user()->name }}" readonly>
                            </div>
                            <!-- Display Last Name -->
                            <div class="mb-4 col-lg-4">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control prefilled-input" id="last_name" value="{{ Auth::user()->last_name }}" readonly>
                            </div>
                        </div>
                        <div class="row row-cols-lg-8 row-cols-md-2 row-cols-12 justify-content-center">
                            <!-- Email -->
                            <div class="mb-4 col-lg-4">
                                <label for="email_address" class="form-label">Email</label>
                                <input type="email" class="form-control prefilled-input" id="email_address" value="{{ Auth::user()->email }}" readonly>
                            </div>
                            <!-- Role -->
                            <div class="mb-4 col-lg-4">
                                <label for="role" class="form-label">Role</label>
                                <input type="text" class="form-control prefilled-input" id="role" placeholder="Product Designer" value="{{ Auth::user()->job }}" readonly>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Receipt -->
                    <div class="payment-receipt mt-4">
                        <div class="row row-cols-lg-8 row-cols-md-2 row-cols-1 justify-content-lg-center">
                            <div class="form-title col-lg-8">
                                <span>02</span>
                                <div>Payment Receipt</div>
                            </div>
                        </div>
                        <div class="row row-cols-lg-8 row-cols-md-2 row-cols-1 justify-content-center gy-4 gy-md-0">
                            <div class="col-lg-8">
                                <label for="payment_receipt" class="form-label">Upload Payment Receipt</label>
                                <input type="file" class="form-control" id="payment_receipt" name="receipt_image" required>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column align-items-center footer-payment gap-4">
                        <button type="submit" class="btn-green">Submit</button>
                        <div>
                            <img src="assets/icons/ic-secure.svg" alt="">
                            <span>Your submission is secure and encrypted</span>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </section>
@endsection
