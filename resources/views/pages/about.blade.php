@extends('layouts.app')
@section('title', 'About Vedanta Hospital')

@section('content')

<!-- ================= FINAL CLEAN HERO BANNER ONLY (NO TEXT) ================= -->
<section class="position-relative w-100 shadow-sm overflow-hidden"
         style="background: #e2e8f0 url('{{ asset('assets/images/aboutbanner1.jpg') }}') no-repeat center center;
                background-size: cover;
                min-height: 420px;
                width: 100%;">
    <!-- इस सेक्शन को पूरी तरह खाली रखा गया है ताकि केवल साफ़ और प्रीमियम हॉस्पिटल फोटो दिखे -->
</section>



<!-- ================= MISSION & VISION PREMIUM SECTION ================= -->
<section class="py-5 bg-light">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-5">
            <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill mb-3">
                About Vedanta Hospital
            </span>

            <h2 class="fw-bold display-5 mb-3">
                Excellence In Healthcare With Compassion
            </h2>

            <p class="text-muted mx-auto" style="max-width:800px;">
                Vedanta Hospital stands as a trusted healthcare institution committed
                to delivering advanced medical services, patient-centered treatment,
                and world-class healthcare experiences through innovation and expertise.
            </p>
        </div>

        <div class="row g-4">

            <!-- Mission -->
            <div class="col-lg-6">
                <div class="mission-vision-card h-100">

                    <div class="icon-box">
                        <i class="bi bi-bullseye"></i>
                    </div>

                    <div>
                        <span class="small-title">
                            OUR MISSION
                        </span>

                        <h3 class="fw-bold mb-3">
                            Delivering Quality Healthcare
                        </h3>

                        <p class="text-muted mb-0">
                            To provide ethical, affordable and high-quality healthcare
                            services with compassion, innovation and clinical excellence,
                            ensuring every patient receives personalized care and support.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Vision -->
            <div class="col-lg-6">
                <div class="mission-vision-card h-100">

                    <div class="icon-box vision-icon">
                        <i class="bi bi-eye-fill"></i>
                    </div>

                    <div>
                        <span class="small-title">
                            OUR VISION
                        </span>

                        <h3 class="fw-bold mb-3">
                            Building The Future Of Healthcare
                        </h3>

                        <p class="text-muted mb-0">
                            To become a leading healthcare destination recognized for
                            medical excellence, advanced technology, patient trust,
                            and continuous innovation in healthcare delivery.
                        </p>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<style>
.mission-vision-card{
    background:#fff;
    border-radius:24px;
    padding:35px;
    display:flex;
    gap:25px;
    align-items:flex-start;
    border:1px solid #eef2f7;
    transition:.35s;
    box-shadow:0 8px 25px rgba(0,0,0,.04);
}

.mission-vision-card:hover{
    transform:translateY(-8px);
    box-shadow:0 18px 45px rgba(0,0,0,.08);
    border-color:#0d6efd30;
}

.icon-box{
    min-width:80px;
    width:80px;
    height:80px;
    border-radius:20px;
    background:#eaf3ff;
    display:flex;
    align-items:center;
    justify-content:center;
}

.icon-box i{
    font-size:32px;
    color:#0d6efd;
}

.vision-icon{
    background:#ecfdf5;
}

.vision-icon i{
    color:#10b981;
}

.small-title{
    display:inline-block;
    font-size:.8rem;
    font-weight:700;
    letter-spacing:2px;
    color:#0d6efd;
    margin-bottom:10px;
}

.mission-vision-card h3{
    font-size:1.5rem;
}

.mission-vision-card p{
    line-height:1.9;
}

@media(max-width:768px){

    .mission-vision-card{
        flex-direction:column;
        text-align:center;
        align-items:center;
    }

    .mission-vision-card h3{
        font-size:1.3rem;
    }
}
</style>




<!-- ================= OUR CORE VALUES PREMIUM SECTION ================= -->
<section class="py-5 bg-light-subtle">
    <div class="container py-3">
        
        <!-- Section Heading -->
        <div class="text-center mb-5">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-2 text-uppercase fw-bold tracking-wider" style="font-size: 0.75rem;">
                Our Pillars
            </span>
            <h2 class="fw-bold tracking-tight text-dark-blue display-5 mb-2">Our Core Values</h2>
            <div class="heading-line mx-auto bg-primary rounded-pill"></div>
        </div>

        <!-- Values Cards Grid -->
        <div class="row g-4 justify-content-center">
            
            <!-- Value 1: Compassion -->
            <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="card w-100 border border-light-subtle shadow-sm rounded-4 p-4 p-xl-5 text-center value-premium-card">
                    <div class="card-body p-0 d-flex flex-column align-items-center">
                        <!-- Icon Badge -->
                        <div class="value-icon-wrapper mb-4 bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-heart-pulse-fill fs-3"></i>
                        </div>
                        <!-- Title -->
                        <h4 class="fw-bold text-dark mb-3 value-card-title">Compassion</h4>
                        <!-- Description -->
                        <p class="text-muted small lh-relaxed mb-0">
                            We care for every patient with genuine empathy, deep kindness, and utmost respect for their dignity.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Value 2: Excellence -->
            <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="card w-100 border border-light-subtle shadow-sm rounded-4 p-4 p-xl-5 text-center value-premium-card">
                    <div class="card-body p-0 d-flex flex-column align-items-center">
                        <!-- Icon Badge -->
                        <div class="value-icon-wrapper mb-4 bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-star-fill fs-3"></i>
                        </div>
                        <!-- Title -->
                        <h4 class="fw-bold text-dark mb-3 value-card-title">Excellence</h4>
                        <!-- Description -->
                        <p class="text-muted small lh-relaxed mb-0">
                            We pursue medical excellence through continuous innovation, constant learning, and professional growth.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Value 3: Integrity -->
            <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="card w-100 border border-light-subtle shadow-sm rounded-4 p-4 p-xl-5 text-center value-premium-card">
                    <div class="card-body p-0 d-flex flex-column align-items-center">
                        <!-- Icon Badge -->
                        <div class="value-icon-wrapper mb-4 bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-shield-check-fill fs-3"></i>
                        </div>
                        <!-- Title -->
                        <h4 class="fw-bold text-dark mb-3 value-card-title">Integrity</h4>
                        <!-- Description -->
                        <p class="text-muted small lh-relaxed mb-0">
                            We maintain the highest standards of medical ethics, absolute honesty, and transparency to build trust.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>





<!-- ================= FOUNDERS & BOARD MEMBERS SCROLL SECTION (8 CARDS | 2 PER SLIDE) ================= -->
<section class="py-5 premium-founders-section position-relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="bg-decor-circle-1"></div>
    <div class="bg-decor-circle-2"></div>

    <div class="container py-4 position-relative" style="z-index: 2;">
        
        <!-- Section Title & Intro -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-12 col-md-10 col-lg-8 text-white">
                <span class="badge bg-white text-primary px-3 py-2 rounded-pill mb-3 text-uppercase fw-bold tracking-wider" style="font-size: 0.75rem;">
                    Our Leadership
                </span>
                <h2 class="fw-bold tracking-tight display-5 mb-3 text-white">Founders & Board Directors</h2>
                <p class="text-white-50 lh-lg mx-auto mb-0" style="max-width: 800px; font-size: 1rem;">
                    The driving force behind Vedanta Hospital's medical excellence. Our visionary board consists of senior clinicians and industry leaders committed to ethical healthcare.
                </p>
            </div>
        </div>

        <!-- Bootstrap Carousel Container -->
        <div id="foundersCarousel" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner">
                
                <!-- SLIDE 1 (Card 1 & Card 2) - ACTIVE -->
                <div class="carousel-item active">
                    <div class="row g-4 justify-content-center px-2 px-md-5">
                        <!-- Card 1 -->
                        <div class="col-12 col-md-6 col-lg-5 col-xl-4 d-flex align-items-stretch">
                            <div class="card w-100 border border-white border-opacity-10 text-center text-white p-4 p-xl-5 founder-luxury-card">
                                <div class="card-body p-0 d-flex flex-column align-items-center">
                                    <div class="founder-avatar-wrap mb-4 position-relative rounded-circle p-1">
                                       <img src="{{ asset('assets/images/doctors/doctors1.jpg') }}" alt="Dr. A. K. Sethi" class="rounded-circle w-100 h-100 object-cover border border-3 border-white">
                                    </div>
                                    <h4 class="fw-bold mb-1 tracking-wide text-uppercase founder-name">Dr. A. K. Sethi</h4>
                                    <span class="text-info-custom fw-semibold small text-uppercase mb-2 d-block tracking-wider">Senior Orthopaedic Surgeon</span>
                                    <p class="text-white-50 small lh-relaxed mb-0 mt-2">Director & Co-Founder with 25+ years of driving specialized orthopaedic clinical transformations.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-12 col-md-6 col-lg-5 col-xl-4 d-flex align-items-stretch">
                            <div class="card w-100 border border-white border-opacity-10 text-center text-white p-4 p-xl-5 founder-luxury-card">
                                <div class="card-body p-0 d-flex flex-column align-items-center">
                                    <div class="founder-avatar-wrap mb-4 position-relative rounded-circle p-1">
                                      <img src="{{ asset('assets/images/doctors/doctors2.jpg') }}" alt="Dr. Pushpa Sethi" class="rounded-circle w-100 h-100 object-cover border border-3 border-white">
                                    </div>
                                    <h4 class="fw-bold mb-1 tracking-wide text-uppercase founder-name">Dr. Pushpa Sethi</h4>
                                    <span class="text-info-custom fw-semibold small text-uppercase mb-2 d-block tracking-wider">Senior Gynaecologist</span>
                                    <p class="text-white-50 small lh-relaxed mb-0 mt-2">Co-Founder overseeing comprehensive maternal healthcare and patient-first medical ethics.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2 (Card 3 & Card 4) -->
                <div class="carousel-item">
                    <div class="row g-4 justify-content-center px-2 px-md-5">
                        <!-- Card 3 -->
                        <div class="col-12 col-md-6 col-lg-5 col-xl-4 d-flex align-items-stretch">
                            <div class="card w-100 border border-white border-opacity-10 text-center text-white p-4 p-xl-5 founder-luxury-card">
                                <div class="card-body p-0 d-flex flex-column align-items-center">
                                    <div class="founder-avatar-wrap mb-4 position-relative rounded-circle p-1">
                                      <img src="{{ asset('assets/images/doctors/doctors3.jpg') }}" alt="Dr. Rajesh Sharma" class="rounded-circle w-100 h-100 object-cover border border-3 border-white">

                                    </div>
                                    <h4 class="fw-bold mb-1 tracking-wide text-uppercase founder-name">Dr. Rajesh Sharma</h4>
                                    <span class="text-info-custom fw-semibold small text-uppercase mb-2 d-block tracking-wider">Chief Of Cardiology</span>
                                    <p class="text-white-50 small lh-relaxed mb-0 mt-2">Managing Director leading cardiac interventions and state-of-the-art ICU infrastructure setups.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="col-12 col-md-6 col-lg-5 col-xl-4 d-flex align-items-stretch">
                            <div class="card w-100 border border-white border-opacity-10 text-center text-white p-4 p-xl-5 founder-luxury-card">
                                <div class="card-body p-0 d-flex flex-column align-items-center">
                                    <div class="founder-avatar-wrap mb-4 position-relative rounded-circle p-1">
                                       <img src="{{ asset('assets/images/doctors/doctors4.jpg') }}" alt="Dr. Ananya Verma" class="rounded-circle w-100 h-100 object-cover border border-3 border-white">

                                    </div>
                                    <h4 class="fw-bold mb-1 tracking-wide text-uppercase founder-name">Dr. Ananya Verma</h4>
                                    <span class="text-info-custom fw-semibold small text-uppercase mb-2 d-block tracking-wider">Senior Neurologist</span>
                                    <p class="text-white-50 small lh-relaxed mb-0 mt-2">Executive Board Member specialized in advanced neuro-critical care and brain stroke trauma units.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 3 (Card 5 & Card 6) -->
                <div class="carousel-item">
                    <div class="row g-4 justify-content-center px-2 px-md-5">
                        <!-- Card 5 -->
                        <div class="col-12 col-md-6 col-lg-5 col-xl-4 d-flex align-items-stretch">
                            <div class="card w-100 border border-white border-opacity-10 text-center text-white p-4 p-xl-5 founder-luxury-card">
                                <div class="card-body p-0 d-flex flex-column align-items-center">
                                    <div class="founder-avatar-wrap mb-4 position-relative rounded-circle p-1">
                                      <img src="{{ asset('assets/images/doctors/doctors5.jpg') }}" alt="Dr. Vikram Malhotra" class="rounded-circle w-100 h-100 object-cover border border-3 border-white">

                                    </div>
                                    <h4 class="fw-bold mb-1 tracking-wide text-uppercase founder-name">Dr. Vikram Malhotra</h4>
                                    <span class="text-info-custom fw-semibold small text-uppercase mb-2 d-block tracking-wider">Head of Onco-Surgery</span>
                                    <p class="text-white-50 small lh-relaxed mb-0 mt-2">Technical Director steering global clinical partnerships and multi-disciplinary tumor boards.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 6 -->
                        <div class="col-12 col-md-6 col-lg-5 col-xl-4 d-flex align-items-stretch">
                            <div class="card w-100 border border-white border-opacity-10 text-center text-white p-4 p-xl-5 founder-luxury-card">
                                <div class="card-body p-0 d-flex flex-column align-items-center">
                                    <div class="founder-avatar-wrap mb-4 position-relative rounded-circle p-1">
                                       <img src="{{ asset('assets/images/doctors/doctors6.jpg') }}" alt="Dr. Meera Joshi" class="rounded-circle w-100 h-100 object-cover border border-3 border-white">
                                    </div>
                                    <h4 class="fw-bold mb-1 tracking-wide text-uppercase founder-name">Dr. Meera Joshi</h4>
                                    <span class="text-info-custom fw-semibold small text-uppercase mb-2 d-block tracking-wider">Pediatric Director</span>
                                    <p class="text-white-50 small lh-relaxed mb-0 mt-2">Board Trustee ensuring high-standard neonatal intensive care units (NICU) compliance standards.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 4 (Card 7 & Card 8) -->
                <div class="carousel-item">
                    <div class="row g-4 justify-content-center px-2 px-md-5">
                        <!-- Card 7 -->
                        <div class="col-12 col-md-6 col-lg-5 col-xl-4 d-flex align-items-stretch">
                            <div class="card w-100 border border-white border-opacity-10 text-center text-white p-4 p-xl-5 founder-luxury-card">
                                <div class="card-body p-0 d-flex flex-column align-items-center">
                                    <div class="founder-avatar-wrap mb-4 position-relative rounded-circle p-1">
                                        <img src="{{ asset('assets/images/doctors/doctors7.jpg') }}" alt="Dr. Amit Khurana" class="rounded-circle w-100 h-100 object-cover border border-3 border-white">
                                    </div>
                                    <h4 class="fw-bold mb-1 tracking-wide text-uppercase founder-name">Dr. Amit Khurana</h4>
                                    <span class="text-info-custom fw-semibold small text-uppercase mb-2 d-block tracking-wider">Director of Nephrology</span>
                                    <p class="text-white-50 small lh-relaxed mb-0 mt-2">Pioneering advanced dialysis protocols and leading the renal transplantation advisory panel.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 8 -->
                        <div class="col-12 col-md-6 col-lg-5 col-xl-4 d-flex align-items-stretch">
                            <div class="card w-100 border border-white border-opacity-10 text-center text-white p-4 p-xl-5 founder-luxury-card">
                                <div class="card-body p-0 d-flex flex-column align-items-center">
                                    <div class="founder-avatar-wrap mb-4 position-relative rounded-circle p-1">
                                       <img src="{{ asset('assets/images/doctors/doctors2.jpg') }}" alt="Dr. Preeti Chawla" class="rounded-circle w-100 h-100 object-cover border border-3 border-white">
                                    </div>
                                    <h4 class="fw-bold mb-1 tracking-wide text-uppercase founder-name">Dr. Preeti Chawla</h4>
                                    <span class="text-info-custom fw-semibold small text-uppercase mb-2 d-block tracking-wider">Chief Medical Officer</span>
                                    <p class="text-white-50 small lh-relaxed mb-0 mt-2">Overseeing comprehensive clinical audits, hospital quality controls, and research development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Custom Navigation Control Buttons -->
            <div class="d-flex justify-content-center gap-3 mt-5 navigation-wrapper">
                <button class="btn scroll-control-btn d-flex align-items-center justify-content-center" type="button" data-bs-target="#foundersCarousel" data-bs-slide="prev">
                    <i class="bi bi-arrow-left-short fs-4"></i>
                </button>
                <button class="btn scroll-control-btn d-flex align-items-center justify-content-center" type="button" data-bs-target="#foundersCarousel" data-bs-slide="next">
                    <i class="bi bi-arrow-right-short fs-4"></i>
                </button>
            </div>
        </div>

    </div>
</section>


<style>


/* ==========================================
   CORE VALUES PREMIUM LAYOUT
   ========================================== */

/* Title Accent Line */
.heading-line {
    width: 50px;
    height: 4px;
}

/* Icon Wrap Circle */
.value-icon-wrapper {
    width: 64px;
    height: 64px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Premium White Cards */
.value-premium-card {
    background: #ffffff;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease;
}

.value-card-title {
    letter-spacing: -0.3px;
    font-size: 1.25rem;
}

/* Hover Dynamic Effects */
.value-premium-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(15, 23, 42, 0.08) !important;
}

/* Hover Icon Pop Accent */
.value-premium-card:hover .value-icon-wrapper {
    transform: scale(1.1);
}
.value-premium-card:hover .bg-danger.bg-opacity-10 {
    background-color: #dc2626 !important;
    color: #ffffff !important;
}
.value-premium-card:hover .bg-primary.bg-opacity-10 {
    background-color: #0d6efd !important;
    color: #ffffff !important;
}
.value-premium-card:hover .bg-success.bg-opacity-10 {
    background-color: #198754 !important;
    color: #ffffff !important;
}

/* Mobile Responsive Adjustments */
@media (max-width: 991.98px) {
    .value-premium-card {
        padding: 35px 24px !important;
    }
}



/* ==========================================
   FOUNDERS PREMIUM 8-CARDS SCROLL ARTIFACT
   ========================================== */
.premium-founders-section {
    background: linear-gradient(135deg, #102a6b 0%, #08173e 100%) !important;
    padding: 60px 0;
}
.bg-decor-circle-1 {
    position: absolute;
    width: 450px;
    height: 450px;
    background: radial-gradient(circle, rgba(13, 110, 253, 0.12) 0%, rgba(0,0,0,0) 70%);
    top: -100px;
    left: -100px;
    z-index: 1;
}
.bg-decor-circle-2 {
    position: absolute;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(6, 182, 212, 0.1) 0%, rgba(0,0,0,0) 70%);
    bottom: -150px;
    right: -100px;
    z-index: 1;
}
.founder-luxury-card {
    background: rgba(255, 255, 255, 0.03) !important;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    border-radius: 20px !important;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
.founder-avatar-wrap {
    width: 160px;
    height: 160px;
    background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(13,110,253,0.3) 100%);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}
.founder-avatar-wrap img {
    object-fit: cover;
}
.founder-name {
    font-size: 1.25rem;
    letter-spacing: 0.3px;
}
.text-info-custom {
    color: #38bdf8;
    font-size: 0.82rem;
}
.founder-luxury-card:hover {
    transform: translateY(-8px);
    background: rgba(255, 255, 255, 0.06) !important;
    border-color: rgba(255, 255, 255, 0.2) !important;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25) !important;
}
.founder-luxury-card:hover .founder-avatar-wrap {
    transform: scale(1.04);
    box-shadow: 0 0 25px rgba(56, 189, 248, 0.25);
}
.scroll-control-btn {
    background: #ffffff !important;
    color: #dc2626 !important;
    width: 44px;
    height: 44px;
    border-radius: 50% !important;
    border: none !important;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15) !important;
    transition: all 0.25s ease !important;
    padding: 0;
}
.scroll-control-btn:hover {
    background: #0d6efd !important;
    color: #ffffff !important;
    transform: scale(1.08);
}
@media (max-width: 767.98px) {
    .founder-luxury-card {
        padding: 35px 20px !important;
    }
}
    </style>

@endsection