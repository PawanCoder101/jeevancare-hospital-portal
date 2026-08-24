<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vedanta Hospital – Advanced Medical Care with Compassion and Excellence">
    <meta name="robots" content="index, follow">

    <title>@yield('title', 'Vedanta Hospital')</title>


    <!-- Favicon Include -->
<link rel="icon" type="image/png" href="{{ asset('assets/images/logo17.png') }}">


    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts (Inter + Plus Jakarta Sans for Premium Look) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Assets CSS Include -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
</head>

<body>

    <!-- PREMIUM NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top premium-navbar">
        <div class="container">
            <a class="navbar-brand py-0 d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo17.png') }}" alt="Medanta Hospital" class="img-fluid"
                    style="height:90px; width:auto;">
            </a>

            <button class="navbar-toggler luxury-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link luxury-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link luxury-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link luxury-link {{ request()->routeIs('departments') ? 'active' : '' }}"
                            href="{{ route('departments') }}">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link luxury-link {{ request()->routeIs('doctors') ? 'active' : '' }}"
                            href="{{ route('doctors') }}">Our Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link luxury-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-4 mt-3 mt-lg-0 w-100-mobile">
                        <a href="{{ route('contact') }}" class="btn btn-luxury-gradient">
                            <span>Book Appointment</span>
                            <div class="icon-circle">
                                <i class="bi bi-arrow-right-short"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="navbar-spacer"></div>




    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>


    <x-loader />



    <!-- MODERN FOOTER -->
    <footer class="modern-footer pt-5 pb-4">
        <div class="container">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand mb-3">
                        <h4>Vedanta <span>Hospital</span></h4>
                    </div>
                    <p class="footer-desc">Compassionate healthcare built on advanced technology, medical excellence,
                        and trusted doctors available for you around the clock.</p>
                    <div class="emergency-badge d-flex align-items-center gap-3">
                        <div class="emergency-icon-box">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <span class="d-block small text-uppercase tracking-wider opacity-75">24/7 Emergency
                                Support</span>
                            <a href="tel:+919000012345" class="emergency-number">+91 90000 12345</a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3 col-lg-2">
                    <h6 class="footer-heading">Quick Links</h6>
                    <ul class="list-unstyled footer-links-list">
                        <li><a class="footer-link" href="{{ route('about') }}"><i class="bi bi-chevron-right"></i>
                                About Us</a></li>
                        <li><a class="footer-link" href="{{ route('departments') }}"><i
                                    class="bi bi-chevron-right"></i> Departments</a></li>
                        <li><a class="footer-link" href="{{ route('doctors') }}"><i class="bi bi-chevron-right"></i>
                                Our Doctors</a></li>
                        <li><a class="footer-link" href="{{ route('contact') }}"><i class="bi bi-chevron-right"></i>
                                Contact</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-3 col-lg-2">
                    <h6 class="footer-heading">Patient Resources</h6>
                    <ul class="list-unstyled footer-links-list">
                        <li><a class="footer-link" href="#"><i class="bi bi-chevron-right"></i> Patient Portal</a>
                        </li>
                        <li><a class="footer-link" href="#"><i class="bi bi-chevron-right"></i> Insurance
                                Plans</a></li>
                        <li><a class="footer-link" href="#"><i class="bi bi-chevron-right"></i> FAQs & Support</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h6 class="footer-heading">Working Hours</h6>
                    <div class="hours-card">
                        <div
                            class="d-flex justify-content-between border-bottom pb-2 mb-2 border-secondary border-opacity-25">
                            <span>Mon – Fri:</span>
                            <span class="text-white font-monospace">08:00 – 20:00</span>
                        </div>
                        <div
                            class="d-flex justify-content-between border-bottom pb-2 mb-2 border-secondary border-opacity-25">
                            <span>Saturday:</span>
                            <span class="text-white font-monospace">09:00 – 17:00</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center text-danger-custom mt-3">
                            <span class="fw-bold"><i class="bi bi-circle-fill me-2 pulse-dot"></i> Emergency:</span>
                            <span class="fw-bold font-monospace">24 Hours / 7 Days</span>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="footer-divider my-4">

            <div class="row align-items-center justify-content-between footer-bottom text-center text-md-start">
                <div class="col-md-6 small">
                    © {{ date('Y') }} <strong>Vedanta Hospital</strong>. All Rights Reserved.
                </div>
                <div class="col-md-6 text-md-end mt-2 mt-md-0">
                    <div class="footer-socials">
                        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    // loder k liye on click
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const loader = document.getElementById("loader");

            if (!loader) return;

            // Hide Loader on Page Load
            loader.style.display = "none";

            // Show Loader on Link Click
            document.querySelectorAll("a").forEach(link => {

                link.addEventListener("click", function() {

                    const href = this.getAttribute("href");

                    if (
                        href &&
                        href !== "#" &&
                        !href.startsWith("javascript") &&
                        !this.hasAttribute("target")
                    ) {
                        loader.style.display = "flex";
                    }

                });

            });

            // Show Loader on Form Submit
            document.querySelectorAll("form").forEach(form => {

                form.addEventListener("submit", function() {

                    loader.style.display = "flex";

                });

            });

        });

        // Hide Loader After Page Fully Loaded
        window.addEventListener("load", function() {

            const loader = document.getElementById("loader");

            if (loader) {
                loader.style.display = "none";
            }

        });

        // Fix Browser Back / Forward Button Issue
        window.addEventListener("pageshow", function() {

            const loader = document.getElementById("loader");

            if (loader) {
                loader.style.display = "none";
            }

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
