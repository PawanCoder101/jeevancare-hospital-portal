@extends('layouts.app')
@section('title', 'Home - Vedanta Hospital')

@section('content')
<!-- ================= HERO SECTION WITH 3-RING ULTRA FAST ROTATING LOGO ================= -->
    <section class="hero-section position-relative text-white d-flex align-items-center overflow-hidden"
        style="background: url('{{ asset($hero->image ?? 'images/hospital.jpg') }}') center/cover no-repeat; min-height: 80vh; padding: 60px 0;">
        <div class="hero-overlay"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-5">

                <!-- Left Side: Text and Buttons -->
                <div class="col-12 col-lg-7 text-center text-lg-start">
                    <span
                        class="badge bg-primary bg-opacity-25 text-white px-3 py-2 rounded-pill mb-3 text-uppercase fw-bold tracking-wider"
                        style="font-size: 0.75rem;">
                        Welcome to Vedanta Care
                    </span>
                    <h1 class="display-4 fw-extrabold mb-3 text-white tracking-tight hero-main-title">
                        {{ $hero->heading ?? 'Your Health, Our Priority' }}
                    </h1>
                    <p class="lead text-white-50 mb-4 mx-auto mx-lg-0 hero-sub-desc" style="max-width: 550px;">
                        {{ $hero->subheading ?? 'Advanced medical care with compassion & excellence.' }}
                    </p>

                    <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                        <a href="{{ route('appointments') }}"
                            class="btn btn-primary btn-lg rounded-pill px-4 px-sm-5 fw-bold shadow-sm btn-hero-primary">
                            Book Appointment
                        </a>

                        @if ($hero && $hero->button2_text)
                            <a href="{{ $hero->button2_link }}"
                                class="btn btn-outline-light btn-lg rounded-pill px-4 px-sm-5 fw-medium">
                                {{ $hero->button2_text }}
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Right Side: 3 Fast Rotating Rings with Hospital Image Logo Inside -->
                <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center mt-5 mt-lg-0">
                    <div class="logo-animation-wrapper position-relative">

                        <!-- LAYER 1: FAST OUTER CYAN RING WITH DOT -->
                        <div class="rotating-ring ring-layer-1">
                            <div class="ring-dot dot-cyan"></div>
                        </div>

                        <!-- LAYER 2: FAST MIDDLE PURPLE RING WITH DOT (REVERSE DIRECTION) -->
                        <div class="rotating-ring ring-layer-2">
                            <div class="ring-dot dot-purple"></div>
                        </div>

                        <!-- LAYER 3: SUPER FAST INNER TECH DASHED RING -->
                        <div class="rotating-ring ring-layer-3"></div>

                        <!-- Center Logo Disc with Image -->
                        <div class="center-hospital-logo shadow-lg d-flex flex-column align-items-center justify-content-center p-3 bg-white rounded-circle" style="width: 170px; height: 170px;">
                            <img src="{{ asset('assets/images/logo17.png') }}" alt="Vedanta Hospital Logo" class="img-fluid" style="max-height: 95px; width: auto;">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>





    <section class="py-5 bg-white exact-same-stats-section">
        <div class="container py-2">
            <div class="row align-items-center g-4 g-lg-5">

                <div class="col-12 col-lg-5 text-center text-lg-start">
                    <h2 class="fw-bold text-dark mb-2 exact-headline">
                        About <span class="text-primary-color">Vedanta Hospital</span>
                    </h2>
                    <div class="exact-orange-line mb-4 mx-auto mx-lg-0"></div>

                    <p class="text-muted lh-base exact-description-text">
                        At Vedanta Hospital, state of the art technology and dedicated medical practitioners have been
                        brought together under one roof for giving ethical medical care. Equipped with the most modern
                        equipments and Information Technology, our practitioners work together as a team to provide the best
                        possible treatment to our patients.
                    </p>
                </div>

                <div class="col-12 col-lg-7 position-relative">
                    <div class="ps-lg-4">

                        <div class="row text-center g-4 row-stats-padding">
                            <div class="col-6 col-sm-3">
                                <div class="exact-stat-unit">
                                    <div class="exact-icon-style"><i class="bi bi-award"></i></div>
                                    <h3 class="fw-bold text-dark my-1">1</h3>
                                    <p class="text-muted mb-0 exact-label">Centres of Excellence</p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="exact-stat-unit">
                                    <div class="exact-icon-style"><i class="bi bi-patch-check"></i></div>
                                    <h3 class="fw-bold text-dark my-1">14</h3>
                                    <p class="text-muted mb-0 exact-label">Specialities</p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="exact-stat-unit">
                                    <div class="exact-icon-style"><i class="bi bi-file-medical"></i></div>
                                    <h3 class="fw-bold text-dark my-1">7</h3>
                                    <p class="text-muted mb-0 exact-label">ICU Beds</p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="exact-stat-unit">
                                    <div class="exact-icon-style"><i class="bi bi-hospital"></i></div>
                                    <h3 class="fw-bold text-dark my-1">47</h3>
                                    <p class="text-muted mb-0 exact-label">Beds</p>
                                </div>
                            </div>
                        </div>

                        <hr class="exact-section-divider my-4 d-none d-sm-block">

                        <div class="row text-center g-4 justify-content-start row-stats-padding pt-sm-2">
                            <div class="col-6 col-sm-4">
                                <div class="exact-stat-unit">
                                    <div class="exact-icon-style"><i class="bi bi-activity"></i></div>
                                    <h3 class="fw-bold text-dark my-1">2</h3>
                                    <p class="text-muted mb-0 exact-label">Modular OTs</p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="exact-stat-unit">
                                    <div class="exact-icon-style"><i class="bi bi-capsule-solid"></i></div>
                                    <h3 class="fw-bold text-dark my-1">24 x 7</h3>
                                    <p class="text-muted mb-0 exact-label">Pharmacy</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="exact-stat-unit mt-2 mt-sm-0">
                                    <div class="exact-icon-style"><i class="bi bi-telephone"></i></div>
                                    <h3 class="fw-bold text-dark my-1 phone-number-style">0124-411 8001</h3>
                                    <p class="text-muted mb-0 exact-label">24 x 7 Emergency</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>







    <!-- ================= PREMIUM SERVICES SECTION ================= -->
    <section class="py-5 services-premium-canvas">
        <div class="container py-2 text-center">

            <!-- Header Elements -->
            <span
                class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-2 text-uppercase fw-bold tracking-wider"
                style="font-size: 0.75rem;">
                Our Expertise
            </span>
            <h2 class="fw-bold text-dark mb-5 tracking-tight display-6 section-headline-main">
                We Offer Personalized Home Care Services
            </h2>

            <!-- Services Grid Layer -->
            <div class="row g-4 justify-content-center">

                <!-- Service 1: Companionship -->
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div
                        class="card w-100 border border-light-subtle shadow-sm rounded-4 p-4 service-luxury-box text-center bg-white">
                        <div class="card-body p-0 d-flex flex-column align-items-center justify-content-between h-100">

                            <div class="d-flex flex-column align-items-center w-100">
                                <!-- Icon Shell -->
                                <div
                                    class="service-icon-wrapper bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center mb-4">
                                    <i class="bi bi-person-fill fs-3"></i>
                                </div>
                                <!-- Title -->
                                <h4 class="fw-bold text-dark mb-3 service-item-title">Companionship</h4>
                                <!-- Desc -->
                                <p class="text-muted small lh-relaxed mb-4 text-truncate-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent finibus ullamcorper
                                    set matrix tracking clinical logic blocks.
                                </p>
                            </div>

                            <!-- Interactive Action Link -->
                            <div class="w-100 pt-2 border-top border-light-subtle mt-auto">
                                <a href="/about"
                                    class="service-arrow-link text-decoration-none text-primary fw-bold small d-inline-flex align-items-center gap-1">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right animate-arrow"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Service 2: Medication Management -->
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div
                        class="card w-100 border border-light-subtle shadow-sm rounded-4 p-4 service-luxury-box text-center bg-white">
                        <div class="card-body p-0 d-flex flex-column align-items-center justify-content-between h-100">

                            <div class="d-flex flex-column align-items-center w-100">
                                <!-- Icon Shell -->
                                <div
                                    class="service-icon-wrapper bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center mb-4">
                                    <i class="bi bi-file-medical-fill fs-3"></i>
                                </div>
                                <!-- Title -->
                                <h4 class="fw-bold text-dark mb-3 service-item-title">Medication</h4>
                                <!-- Desc -->
                                <p class="text-muted small lh-relaxed mb-4 text-truncate-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent finibus ullamcorper
                                    set matrix tracking clinical logic blocks.
                                </p>
                            </div>

                            <!-- Interactive Action Link -->
                            <div class="w-100 pt-2 border-top border-light-subtle mt-auto">
                                <a href="/about"
                                    class="service-arrow-link text-decoration-none text-primary fw-bold small d-inline-flex align-items-center gap-1">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right animate-arrow"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Service 3: Meal Preparation -->
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div
                        class="card w-100 border border-light-subtle shadow-sm rounded-4 p-4 service-luxury-box text-center bg-white">
                        <div class="card-body p-0 d-flex flex-column align-items-center justify-content-between h-100">

                            <div class="d-flex flex-column align-items-center w-100">
                                <!-- Icon Shell -->
                                <div
                                    class="service-icon-wrapper bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center mb-4">
                                    <i class="bi bi-basket-fill fs-3"></i>
                                </div>
                                <!-- Title -->
                                <h4 class="fw-bold text-dark mb-3 service-item-title">Meal Preparation</h4>
                                <!-- Desc -->
                                <p class="text-muted small lh-relaxed mb-4 text-truncate-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent finibus ullamcorper
                                    set matrix tracking clinical logic blocks.
                                </p>
                            </div>

                            <!-- Interactive Action Link -->
                            <div class="w-100 pt-2 border-top border-light-subtle mt-auto">
                                <a href="/about"
                                    class="service-arrow-link text-decoration-none text-primary fw-bold small d-inline-flex align-items-center gap-1">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right animate-arrow"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>





    <!-- ================= PREMIUM SYSTEM STATS DISPLAY SECTION WITH LIVE COUNTING ================= -->
    <section class="py-5 premium-stats-canvas position-relative overflow-hidden">
        <!-- Soft background elements for high-end aesthetic -->
        <div class="stats-bg-glow-1"></div>
        <div class="stats-bg-glow-2"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="row g-4 justify-content-center">

                <!-- Counter 1: Years Experience -->
                <div class="col-6 col-md-3 d-flex align-items-stretch">
                    <div class="card w-100 text-center p-3 p-xl-4 luxury-counter-card">
                        <div class="card-body p-0 d-flex flex-column align-items-center justify-content-center">
                            <div
                                class="counter-icon-box bg-primary bg-opacity-10 text-primary rounded-circle mb-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-calendar-check-fill fs-3"></i>
                            </div>
                            <!-- JavaScript dynamic counter hooked here -->
                            <h2 class="display-5 fw-extrabold text-dark-blue mb-1">
                                <span class="pure-counter" data-target="25">0</span>+
                            </h2>
                            <p class="text-secondary fw-semibold small text-uppercase mb-0 tracking-wider counter-label">
                                Years Experience</p>
                        </div>
                    </div>
                </div>

                <!-- Counter 2: Specialist Doctors -->
                <div class="col-6 col-md-3 d-flex align-items-stretch">
                    <div class="card w-100 text-center p-3 p-xl-4 luxury-counter-card">
                        <div class="card-body p-0 d-flex flex-column align-items-center justify-content-center">
                            <div
                                class="counter-icon-box bg-primary bg-opacity-10 text-primary rounded-circle mb-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-heart fs-3"></i>
                            </div>
                            <h2 class="display-5 fw-extrabold text-dark-blue mb-1">
                                <span class="pure-counter" data-target="50">0</span>+
                            </h2>
                            <p class="text-secondary fw-semibold small text-uppercase mb-0 tracking-wider counter-label">
                                Specialist Doctors</p>
                        </div>
                    </div>
                </div>

                <!-- Counter 3: Happy Patients -->
                <div class="col-6 col-md-3 d-flex align-items-stretch">
                    <div class="card w-100 text-center p-3 p-xl-4 luxury-counter-card">
                        <div class="card-body p-0 d-flex flex-column align-items-center justify-content-center">
                            <div
                                class="counter-icon-box bg-success bg-opacity-10 text-success rounded-circle mb-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-emoji-smile-fill fs-3"></i>
                            </div>
                            <h2 class="display-5 fw-extrabold text-dark-blue mb-1">
                                <span class="pure-counter" data-target="10">0</span>K+
                            </h2>
                            <p class="text-secondary fw-semibold small text-uppercase mb-0 tracking-wider counter-label">
                                Happy Patients</p>
                        </div>
                    </div>
                </div>

                <!-- Counter 4: Emergency Care -->
                <div class="col-6 col-md-3 d-flex align-items-stretch">
                    <div class="card w-100 text-center p-3 p-xl-4 luxury-counter-card emergency-glow-card">
                        <div class="card-body p-0 d-flex flex-column align-items-center justify-content-center">
                            <div
                                class="counter-icon-box bg-danger bg-opacity-10 text-danger rounded-circle mb-3 d-flex align-items-center justify-content-center pulse-red-icon">
                                <i class="bi bi-telephone-fill fs-4"></i>
                            </div>
                            <h2 class="display-5 fw-extrabold text-danger mb-1">24/7</h2>
                            <p class="text-danger fw-bold small text-uppercase mb-0 tracking-wider counter-label">Emergency
                                Care</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const counters = document.querySelectorAll('.pure-counter');
            const speed = 60; // काउंटिंग की स्पीड कंट्रोल करने के लिए (जितना कम नंबर, उतनी तेज़ काउंटिंग)

            const startCounting = (counter) => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(() => startCounting(counter), 25);
                } else {
                    counter.innerText = target;
                }
            };

            // Scroll Intersection Observer Setup
            const observerOptions = {
                root: null,
                threshold: 0.1 // जब 10% सेक्शन स्क्रीन पर दिखेगा, तब ट्रिगर होगा
            };

            const statsObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counterElement = entry.target;
                        startCounting(counterElement);
                        statsObserver.unobserve(
                            counterElement
                        ); // एक बार काउंट होने के बाद ट्रैकिंग बंद (ताकि बार-बार स्क्रॉल करने पर परेशान न करे)
                    }
                });
            }, observerOptions);

            counters.forEach(counter => {
                statsObserver.observe(counter);
            });
        });
    </script>





    <!-- ================= DEPARTMENTS AUTO-SCROLL SECTION ================= -->
    <section class="py-5 premium-dept-scroll-section position-relative overflow-hidden"
        style="background: linear-gradient(rgba(11, 29, 58, 0.88), rgba(11, 29, 58, 0.88)),
    url('{{ asset('assets/images/departmentbanner1.jpg') }}') center/cover no-repeat;">

        <!-- Section Title -->
        <div class="container py-2 position-relative" style="z-index: 2;">
            <div class="text-center mb-5 text-white">

                <span class="badge bg-white text-primary px-3 py-2 rounded-pill mb-3 fw-bold text-uppercase">
                    Medical Departments
                </span>

                <h2 class="fw-bold tracking-tight mb-2 text-white exact-title-style">
                    Our Medical Departments
                </h2>

                <p class="opacity-90 exact-subtitle-style">
                    Explore the specialized healthcare services we provide
                </p>

            </div>
        </div>

        <!-- Infinite Scrolling Departments -->
        <div class="dept-slider-canvas position-relative w-100 overflow-hidden py-2">
            <div class="dept-track-wrapper">

                <!-- Loop 1 -->
                @foreach ($departments as $department)
                    <div class="exact-circle-badge shrink-0">
                        <div class="exact-icon-wrap">
                            @if ($loop->index % 4 == 0)
                                <i class="bi bi-heart-pulse"></i>
                            @elseif($loop->index % 4 == 1)
                                <i class="bi bi-microscope"></i>
                            @elseif($loop->index % 4 == 2)
                                <i class="bi bi-capsules"></i>
                            @elseif($loop->index % 4 == 3)
                                <i class="bi bi-activity"></i>
                            @endif
                        </div>

                        <span class="exact-dept-name">
                            {{ $department->name }}
                        </span>
                    </div>
                @endforeach

                <!-- Loop 2 (Duplicate for Infinite Scroll) -->
                @foreach ($departments as $department)
                    <div class="exact-circle-badge shrink-0" aria-hidden="true">
                        <div class="exact-icon-wrap">
                            @if ($loop->index % 4 == 0)
                                <i class="bi bi-heart-pulse"></i>
                            @elseif($loop->index % 4 == 1)
                                <i class="bi bi-microscope"></i>
                            @elseif($loop->index % 4 == 2)
                                <i class="bi bi-capsules"></i>
                            @elseif($loop->index % 4 == 3)
                                <i class="bi bi-activity"></i>
                            @endif
                        </div>

                        <span class="exact-dept-name">
                            {{ $department->name }}
                        </span>
                    </div>
                @endforeach

            </div>
        </div>

    </section>




    <!-- ================= OUR DOCTORS SECTION ================= -->
    <section class="py-5 bg-white">
        <div class="container">

            <!-- Section Heading -->
            <div class="text-center mb-5">

                <span
                    class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-2 text-uppercase fw-bold">
                    Medical Specialists
                </span>

                <h2 class="fw-bold display-5 mb-3">
                    Our Doctors
                </h2>

                <p class="text-muted mx-auto" style="max-width:600px;">
                    Meet our experienced doctors, consultants and specialists dedicated to
                    providing exceptional healthcare services with compassion, expertise,
                    and patient-centered care.
                </p>

            </div>

            <!-- Doctors Carousel -->
            <div id="doctorCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"
                data-bs-pause="false">

                <!-- Indicators -->
                <div class="carousel-indicators">
                    @foreach ($doctors->chunk(4) as $slideIndex => $doctorChunk)
                        <button type="button" data-bs-target="#doctorCarousel" data-bs-slide-to="{{ $slideIndex }}"
                            class="{{ $slideIndex == 0 ? 'active' : '' }}">
                        </button>
                    @endforeach
                </div>

                <!-- Carousel Items -->
                <div class="carousel-inner">

                    @forelse($doctors->chunk(4) as $slideIndex => $doctorChunk)

                        <div class="carousel-item {{ $slideIndex == 0 ? 'active' : '' }}">
                            <div class="row g-4 justify-content-center">

                                @foreach ($doctorChunk as $doctor)
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="card border-0 shadow-sm rounded-4 doctor-premium-card h-100">

                                            <!-- Doctor Image -->
                                            <div class="text-center pt-4">
                                                <img src="{{ asset('assets/images/doctors/doctors' . (($loop->iteration % 6) + 1) . '.jpg') }}"
                                                    alt="{{ $doctor->name }}" class="doctor-avatar">
                                            </div>

                                            <!-- Card Body -->
                                            <div class="card-body text-center d-flex flex-column">

                                                <span
                                                    class="d-inline-block bg-primary bg-opacity-10 text-primary fw-bold px-3 py-2 rounded-pill mb-3 text-uppercase"
                                                    style="font-size:0.75rem;letter-spacing:0.5px;">
                                                    {{ $doctor->department->name ?? 'Specialist' }}
                                                </span>

                                                <h5 class="fw-bold text-dark mb-2">
                                                    {{ $doctor->name }}
                                                </h5>

                                                <p class="text-secondary small mb-3 flex-grow-1">
                                                    {{ $doctor->specialization ?? 'Senior Consultant' }}
                                                </p>

                                                <div class="border-top pt-3">
                                                    <a href="mailto:{{ $doctor->email }}"
                                                        class="text-decoration-none text-muted small">
                                                        <i class="bi bi-envelope-fill text-primary me-1"></i>
                                                        {{ $doctor->email }}
                                                    </a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                    @empty

                        <div class="carousel-item active">
                            <div class="text-center py-5">
                                <h4>No Doctors Found</h4>
                            </div>
                        </div>

                    @endforelse

                </div>

                <!-- Previous Button -->
                <button class="carousel-control-prev" type="button" data-bs-target="#doctorCarousel"
                    data-bs-slide="prev">

                    <span class="carousel-control-prev-icon bg-primary rounded-circle p-3"></span>

                </button>

                <!-- Next Button -->
                <button class="carousel-control-next" type="button" data-bs-target="#doctorCarousel"
                    data-bs-slide="next">

                    <span class="carousel-control-next-icon bg-primary rounded-circle p-3"></span>

                </button>

            </div>

            <!-- View All Doctors Button -->
            <div class="text-center mt-5">

                <a href="{{ route('doctors') }}"
                    class="btn btn-primary rounded-pill px-5 py-3 fw-bold shadow-sm view-all-doctors-btn">

                    View All Doctors
                    <i class="bi bi-arrow-right ms-2"></i>

                </a>

            </div>

        </div>
    </section>

    <style>
        .doctor-premium-card {
            transition: all .35s ease;
            background: #fff;
        }

        .doctor-premium-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, .12) !important;
        }

        .doctor-avatar {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #fff;
            box-shadow: 0 10px 25px rgba(13, 110, 253, .18);
            transition: .4s;
        }

        .doctor-premium-card:hover .doctor-avatar {
            transform: scale(1.08);
        }

        .carousel {
            padding-bottom: 60px;
        }

        .carousel-indicators {
            bottom: -15px;
        }

        .carousel-indicators button {
            width: 10px !important;
            height: 10px !important;
            border-radius: 50%;
            background-color: #0d6efd !important;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-size: 50%;
        }

        .view-all-doctors-btn {
            transition: all .3s ease;
        }

        .view-all-doctors-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(13, 110, 253, .25);
        }

        @media(max-width:991px) {

            .doctor-avatar {
                width: 120px;
                height: 120px;
            }

            .carousel-control-prev,
            .carousel-control-next {
                display: none;
            }
        }
    </style>







    <section class="py-5 exact-why-choose-canvas">
        <div class="container py-3">
            <div class="row align-items-center g-4 g-lg-5">

                <div class="col-12 col-lg-5 text-center text-lg-start">
                    <h2 class="fw-bold mb-3 exact-why-title">Why Choose Us ?</h2>

                    <div class="why-brand-block mb-3 d-flex flex-column align-items-center align-items-lg-start">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <i class="bi bi-heart-pulse-fill fs-3 text-primary"></i>
                            <h3 class="fw-bold tracking-tight text-uppercase mb-0 branding-text-main">VEDANTA</h3>
                        </div>
                        <span class="fw-bold text-primary text-uppercase tracking-widest branding-text-sub">HOSPITAL</span>
                        <div class="brand-underline-decor my-1"></div>
                        <small class="text-muted fst-italic branding-tagline-text">Caring for Life</small>
                    </div>

                    <p class="text-muted lh-lg exact-para-content mb-4">
                        Vedanta Hospital is committed to delivering ethical, compassionate, and expert care with modern
                        infrastructure. Our team of skilled specialists, personalized treatment plans, and patient-first
                        approach make us a trusted choice for families across Gurgaon.
                    </p>

                    <div class="pt-2">
                        <a href="{{ route('about') }}"
                            class="btn exact-pill-outline-btn d-inline-flex align-items-center justify-content-center">
                            <span>Our Vision</span>
                            <i class="bi bi-chevron-double-right ms-2 fs-7"></i>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-lg-7 text-center">
                    <div class="exact-img-frame shadow-sm rounded-3 overflow-hidden">
                        <img src="{{ asset('assets/images/doctorbanner1.jpg') }}"
                            class="w-100 h-100 object-cover exact-medical-img"
                            alt="Vedanta Hospital Clinical Care Excellence">
                    </div>
                </div>

            </div>
        </div>
    </section>






    <!-- ================= EXACT MATCHING TRUST CTA BANNER SECTION ================= -->
    <section class="position-relative w-100 exact-trust-cta-banner overflow-hidden"
    style="background: linear-gradient(to right, rgba(11, 29, 58, 0.85) 30%, rgba(11, 29, 58, 0.4) 70%),
    url('{{ asset('assets/images/homectabanner2.jpg') }}') center/cover no-repeat;
    min-height: 380px;">
        <div class="collage-blend-overlay"></div>

        <div class="container h-100 position-relative d-flex align-items-center pricing-cta-wrap"
            style="z-index: 5; min-height: 380px;">
            <div class="row w-100 py-5">
                <div class="col-12 col-md-9 col-lg-6 text-center text-md-start text-white">

                    <!-- Main Header Text From Image -->
                    <h2 class="fw-bold mb-2 exact-cta-headline text-white text-uppercase tracking-tight">
                        One location. Nationwide trust.
                    </h2>

                    <!-- Subtext From Image -->
                    <p class="opacity-90 mb-4 exact-cta-subheading text-white-50">
                        Trusted by patients from near and far
                    </p>

                    <!-- Custom Pill Button Hooked to Contact Page Route -->
                    <div class="pt-2">
                        <a href="{{ route('contact') }}"
                            class="btn exact-contact-cta-btn rounded-pill px-5 py-2.5 fw-bold shadow-sm">
                            <span>Contact Us Now</span>
                            <i class="bi bi-telephone-outbound-fill ms-2 small"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection






<!-- ================= PREMIUM SYSTEM STYLES INTERFACE ================= -->
<style>
    .fw-extrabold {
        font-weight: 800;
    }

    .object-cover {
        object-fit: cover;
    }

    .small-md {
        font-size: 0.92rem;
    }

    .xs-text {
        font-size: 0.78rem;
    }

    /* Hero Structure Specifics */
    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to right, rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.4));
        z-index: 1;
    }

    @media (max-width: 991.98px) {
        .hero-overlay {
            background: rgba(15, 23, 42, 0.75);
        }

        .hero-main-title {
            font-size: 2.2rem !important;
        }

        .hero-sub-desc {
            font-size: 0.95rem !important;
        }

        .style-action-box {
            max-width: 100% !important;
        }
    }

    /* Overlapping About Images Architecture */
    .about-back-img {
        width: 75%;
        height: 300px;
        object-fit: cover;
        top: 0;
        left: 0;
    }

    .about-front-img {
        width: 65%;
        height: 250px;
        object-fit: cover;
        bottom: 10px;
        right: 0;
        border: 6px solid #ffffff;
    }

    @media (max-width: 480px) {
        .about-image-wrapper {
            height: 260px !important;
        }

        .about-back-img {
            height: 200px;
        }

        .about-front-img {
            height: 160px;
            border-width: 4px;
        }
    }

    /* Premium Action Buttons Flex Layer */
    .btn-premium-action {
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        font-size: 0.92rem;
    }

    .btn-premium-action:hover {
        transform: translateX(4px);
    }

    .btn-blue-action {
        background-color: #0061d5 !important;
    }

    .btn-green-action {
        background-color: #198754 !important;
    }

    .btn-red-action {
        background-color: #dc3545 !important;
    }

    /* Card Layout Dimensions & Animation Triggers */
    .service-premium-card,
    .doctor-minimal-card,
    .dept-minimal-card {
        background: #ffffff;
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease;
    }

    .service-premium-card:hover,
    .doctor-minimal-card:hover,
    .dept-minimal-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06) !important;
    }

    .service-icon-box {
        width: 54px;
        height: 54px;
    }

    .home-doc-avatar {
        width: 90px;
        height: 90px;
    }

    .card-service-title {
        font-size: 1.15rem;
    }

    .text-truncate-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Responsive Borders Utility */
    @media (min-width: 768px) {
        .border-end-md {
            border-right: 1px solid rgba(0, 0, 0, 0.08) !important;
        }
    }

    /* Decorative Circle Ring for Why Choose Us Image */
    .decor-circle-ring {
        position: absolute;
        width: calc(100% - 4px);
        height: calc(100% - 4px);
        border: 2px dashed rgba(13, 110, 253, 0.25);
        border-radius: 50%;
        top: 0;
        left: 0;
        animation: spinClockwise 20s linear infinite;
    }

    @keyframes spinClockwise {
        100% {
            transform: rotate(360deg);
        }
    }
</style>
