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
            </div>
        </section>
    </section>
@endsection
