<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/scss/main.scss')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div id="app">
        <header class="header bg-navy h-auto">
            <!-- START: NAVBAR -->
            <nav class="container navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img src="assets/images/logo.svg" alt="seminar" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="navbar-nav mx-auto my-3 my-lg-0">
                            <a class="nav-link" href="/">Home</a>
                            <a class="nav-link" href="#">Browse</a>
                            <a class="nav-link" href="#">Stories</a>
                            <a class="nav-link" href="#">Participated</a>
                            <a class="nav-link" href="#">About</a>
                        </div>
                        <div class="d-grid">
                            <a class="btn-navy" href="/signin">
                                Sign In
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <nav>
                @yield('navbar')
            </nav>
        </header>

        <main class="container-fluid min-vh-100 bg-navy">
            @yield('content')
        </main>

        <footer class="footer bg-navy">
            <div class="container">
                <a href="/">
                    <img src="assets/images/logo.svg" alt="seminar" />
                </a>
                <div class="mt-3 d-flex flex-row flex-wrap footer-content align-items-baseline">
                    <p class="paragraph">
                        Seminar adalah tempat di mana <br class="d-md-block d-none" /> anda dapat mencari event sesuai
                        <br class="d-md-block d-none" /> dengan minat & terdekat.
                    </p>
                    <div class="d-flex flex-column footer-links">
                        <div class="title-links mb-3">Features</div>
                        <a href="#">Virtual</a>
                        <a href="#">Pricing</a>
                        <a href="#">Merchant</a>
                        <a href="#">Tickets</a>
                    </div>
                    <div class="d-flex flex-column footer-links">
                        <div class="title-links mb-3">Company</div>
                        <a href="#">Jobs</a>
                        <a href="#">API</a>
                        <a href="#">Press</a>
                        <a href="#">Sitemap</a>
                    </div>
                    <div class="d-flex flex-column footer-links">
                        <div class="title-links mb-3">Learn</div>
                        <a href="#">Guidebook</a>
                        <a href="#">Inspiration</a>
                        <a href="#">Community</a>
                        <a href="#">Tools</a>
                    </div>
                </div>
                <div class="d-flex justify-content-center paragraph all-rights">
                    All Rights Reserved. Seminar Kabin 2024.
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ppkCK7X4qd+kTo5T6AxnoXmvGZXzURs6ASml89NiA+Eo+PH81GtW8OO9A8zQBs1x" crossorigin="anonymous"></script>
</body>
</html>
