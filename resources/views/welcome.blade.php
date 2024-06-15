@extends('layouts.app')

@section('navbar')
<div class="hero">
    <div class="hero-headline">
        Expand Your <span class="text-gradient-blue">Knowledge</span> <br class="d-none d-lg-block" />
        by <span class="text-gradient-pink">Joining</span> Our Greatest Events
    </div>
    <p class="hero-paragraph">
        Kami menyediakan berbagai acara terbaik untuk membantu <br class="d-none d-lg-block" />
        anda dalam meningkatkan skills di bidang teknologi
    </p>
    <a href="#grow-today" class="btn-green">
        Browse Now
    </a>
</div>
<div class="d-flex flex-row flex-nowrap justify-content-center align-items-center gap-5 header-image">
    <img src="assets/images/1.png" class="img-1" alt="semina">
    <img src="assets/images/2.png" alt="semina" class="img-2">
    <img src="assets/images/1.png" alt="semina" class="img-1">
</div>


@endsection

@section('content')

        <section class="brand-partner text-center">
            <p>Events held by top & biggest global companies</p>
            <div class="d-flex flex-row flex-wrap justify-content-center align-items-center">
                <img src="assets/images/apple-111.svg" alt="semina" />
                <img src="assets/images/Adobe.svg" alt="semina" />
                <img src="assets/images/slack-21.svg" alt="semina" />
                <img src="assets/images/spotify-11.svg" alt="semina" />
                <img src="assets/images/google-2015.svg" alt="semina" />
            </div>
        </section>

        <section class="grow-today">
            <div class="container">
                <div class="sub-title mb-1" id="grow-today">
                    <span class="text-gradient-pink">Grow Today</span>
                </div>
                <div class="title">
                    Featured Events
                </div>
                <div class="mt-5 row gap">
                    <!-- CARD 1 -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card-grow h-100">
                            <span class="badge-pricing">$229</span>
                            <img src="assets/images/card-1.png" alt="semina" />
                            <div class="card-content">
                                <div class="card-title">
                                    Learn Jira for Sprint Design Venture
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

        <section class="stories">
            <div class="d-flex flex-row justify-content-center align-items-center container">
                <img src="assets/images/story.png" alt="semina" class="d-none d-lg-block" width="515" />
                <div class="d-flex flex-column">
                    <div>
                        <div class="sub-title">
                            <span class="text-gradient-pink">Story</span>
                        </div>
                        <div class="title">
                            One Great Event. <br class="d-none d-lg-block" />
                            For The Better World.
                        </div>
                    </div>
                    <p class="paragraph">
                        Baca kisah bagaimana Shayna berhasil membangun <br class="d-none d-lg-block" />
                        sebuah Startup yang membantu warga untuk <br class="d-none d-lg-block" />
                        mendapatkan bantuan selama pandemic.
                    </p>
                    <a href="#" class="btn-navy">Read</a>
                </div>
            </div>
        </section>

        <section class="statistics container">
            <div class="d-flex flex-row flex-wrap justify-content-center align-items-center gap-5">
                <div class="d-flex flex-column align-items-center gap-1">
                    <div class="title">
                        190K+
                    </div>
                    <p>
                        Events Created
                    </p>
                </div>
                <div class="vr"></div>
                <div class="d-flex flex-column align-items-center gap-1">
                    <div class="title">
                        3M
                    </div>
                    <p>
                        People Joined
                    </p>
                </div>
                <div class="vr d-none d-md-block"></div>
                <div class="d-flex flex-column align-items-center gap-1">
                    <div class="title">
                        5K+
                    </div>
                    <p>
                        Success Startup
                    </p>
                </div>
                <div class="vr"></div>
                <div class="d-flex flex-column align-items-center gap-1">
                    <div class="title">
                        113K+
                    </div>
                    <p>
                        Top Speakers
                    </p>
                </div>
            </div>
        </section>

@endsection
