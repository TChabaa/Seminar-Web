<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>{{ config('app.name', 'Laravel') }}</title>

    @viteReactRefresh
    @viteReactRefresh
    @vite('resources/css/app.css')
    @viteReactRefresh
    @viteReactRefresh
    @vite('resources/js/app.js')
    @viteReactRefresh
    @viteReactRefresh
    @vite('resources/scss/main.scss')
</head>

<body>
    <div id="app">
        <header class="header bg-navy">
            <!-- START: NAVBAR -->
            <nav class="container navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/welcome">
                        <img src="assets/images/logo.svg" alt="semina" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav mx-auto my-3 my-lg-0">
                            <a class="nav-link active" aria-current="page" href="/welcome">Home</a>
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
            <nav class = "">
                @yield('navbar')
            </nav>
        </header>

        <main class="">
            @yield('content')
        </main>

        <footer class="footer bg-navy">
            <div class="container">
                <a href="/welcome">
                    <img src="assets/images/logo.svg" alt="semina" />
                </a>
                <div class="mt-3 d-flex flex-row flex-wrap footer-content align-items-baseline">
                    <p class="paragraph">
                        Semina adalah tempat di mana <br class="d-md-block d-none" /> anda dapat mencari event sesuai
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
                    All Rights Reserved. Semina Addin 2024.
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>
</html>
