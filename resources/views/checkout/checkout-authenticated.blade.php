<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semina | Checkout</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/scss/main.css" />
</head>

<body>

    <!-- START: NAVBAR -->
    <section class="bg-navy">
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
                        <a class="nav-link" href="/welcome">Home</a>
                        <a class="nav-link" href="#">Browse</a>
                        <a class="nav-link" href="#">Stories</a>
                        <a class="nav-link" href="#">About</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <div
                            class="nav-item dropdown d-flex flex-column flex-lg-row align-items-lg-center authenticated gap-3">
                            <span class="text-light d-none d-lg-block">Hello, Shayna M</span>

                            <!-- START: Dropdown Toggler for Desktop -->
                            <a class="nav-link dropdown-toggle mx-0 d-none d-lg-block" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/images/avatar.png" alt="semina" width="60" />
                            </a>
                            <!-- END: Dropdown Toggler for Desktop -->

                            <!-- START: Dropdown Toggler for Mobile -->
                            <a class="d-block d-lg-none dropdown-toggle text-light text-decoration-none"
                                data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                aria-controls="collapseExample">
                                <img src="assets/images/avatar.png" alt="semina" width="60" />
                            </a>
                            <!-- END: Dropdown Toggler for Mobile -->

                            <!-- START: Dropdown Menu for Desktop -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Dashboard</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Settings</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Rewards</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/signin">Sign Out</a>
                                </li>
                            </ul>
                            <!-- END: Dropdown Menu for Desktop -->

                            <!-- START: Dropdown Menu for Mobile -->
                            <div class="collapse" id="collapseExample">
                                <ul class="list-group">
                                    <li>
                                        <a class="list-group-item" href="#">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="#">Settings</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="#">Rewards</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" href="/signin">Sign Out</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END: Dropdown Menu for Mobile -->
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!-- END: NAVBAR -->

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

    <footer class="footer bg-navy">
        <div class="container">
            <a href="/welcome">
                <img src="assets/images/logo.svg" alt="semina" />
            </a>
            <div class="mt-3 d-flex flex-row flex-wrap footer-content align-items-baseline">
                <p class="paragraph">
                    Semina adalah tempat di mana <br class="d-md-block d-none" /> anda dapat mencari event sesuai <br
                        class="d-md-block d-none" /> dengan minat & terdekat.
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>
