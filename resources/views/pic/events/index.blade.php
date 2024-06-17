@extends('pic.layout.app')

@section('content')
    <section class="grow-today">
        <div class="container">
            <div class="title d-flex flex-row justify-content-center align-items-center container ">
                Paticipated Event
            </div>
            <div class="mt-5 row gap">
                <!-- CARD 1 -->
                @foreach ($events as $event)
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card-grow h-100">
                            <span class="badge-pricing">{{ $event->event_price }}</span>
                            <!-- Assuming event_img is the field storing the image URL -->
                            <img src="{{ asset('assets/images/events' . $event->event_img) }}"
                                alt="{{ $event->event_title }}" />
                            <div class="card-content">
                                <div class="card-title">
                                    {{ $event->event_title }}
                                </div>
                            </div>
                            <div class="description">
                                {{ $event->event_location }}
                                {{-- error tanggal --}}
                                {{-- , {{ $event->event_date->format('d M Y') }} --}}
                            </div>
                            <a href="/pic/events/{{ $event->id }}" class="stretched-link"></a>
                        </div>
                    </div>
            </div>
            @endforeach
            <!-- CARD 2 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card-grow h-100">
                    <span class="badge-pricing">FREE</span>
                    <img src="assets/images/card-2.png" alt="semina" />
                    <div class="card-content">
                        <div class="card-title">
                            Team Management for Long Term
                        </div>
                        <div class="card-subtitle">
                            Product Design
                        </div>
                        <div class="description">
                            Jakarta, 11 Aug 2022
                        </div>
                        <a href="/details" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <!-- CARD 3 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card-grow h-100">
                    <span class="badge-pricing">$80</span>
                    <img src="assets/images/card-3.png" alt="semina" />
                    <div class="card-content">
                        <div class="card-title">
                            Set Marketing Target For SaaS Bii
                        </div>
                        <div class="card-subtitle">
                            Product Design
                        </div>
                        <div class="description">
                            Bandung, 22 Jan 2022
                        </div>
                        <a href="/details" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <!-- CARD 4 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card-grow h-100">
                    <span class="badge-pricing">$90</span>
                    <img src="assets/images/card-4.png" alt="semina" />
                    <div class="card-content">
                        <div class="card-title">
                            Google Adsense from Zero to Big Bucks
                        </div>
                        <div class="card-subtitle">
                            Product Design
                        </div>
                        <div class="description">
                            Jakarta, 11 Aug 2022
                        </div>
                        <a href="/details" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
