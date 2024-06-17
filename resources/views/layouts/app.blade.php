<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/scss/main.scss')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div id="app">
        <header class="header bg-navy h-auto">
            <!-- START: NAVBAR -->
            <nav class="container navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/welcome">
                        <img src="assets/images/logo.svg" alt="seminar" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav mx-auto my-3 my-lg-0">
                            <a class="nav-link active" aria-current="page" href="/welcome">Home</a>
                            <a class="nav-link" href="#">Browse</a>
                            <a class="nav-link" href="#">Stories</a>
                            <a class="nav-link" href="/participated">Participated</a>
                            <a class="nav-link" href="/pic/e">About</a>
                        </div>

                        @guest
                            <div class="d-grid">
                                <a class="btn-navy" href="/signin">
                                    Sign In
                                </a>
                            </div>
                        @else
                            <div class="dropdown">
                                <button class="btn-navy dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                    <li>
                                        <form method="POST" action="/logout">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endguest

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
                <a href="/welcome">
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
                    All Rights Reserved. Seminar 2024.
                </div>
            </div>
        </footer>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
