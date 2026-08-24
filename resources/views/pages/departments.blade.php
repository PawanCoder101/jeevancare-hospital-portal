@extends('layouts.app')
@section('title', 'Our Departments - CityCare Hospital')

@section('content')
<!-- PREMIUM CLEAN HEADER BANNER (ONLY PHOTO - NO TEXT) -->
<section class="position-relative w-100 shadow-sm overflow-hidden"
         style="background: #e2e8f0 url('{{ asset('assets/images/departmentbanner1.jpg') }}') no-repeat center center;
                background-size: cover;
                min-height: 400px;
                width: 100%;">
    <!-- केवल साफ़ और प्रीमियम मेडिकल लैब/डिपार्टमेंट थीम का बैनर दिखेगा -->
</section>

<!-- DEPARTMENTS GRID SECTION -->
<section class="py-5 bg-light">
    <div class="container py-2">

        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-3 text-uppercase fw-bold tracking-wider"
                  style="font-size:0.75rem;">
                Our Services
            </span>

            <h2 class="fw-bold text-dark mb-3 display-6">
                Specialized Medical Departments
            </h2>

            <p class="text-muted mx-auto" style="max-width:550px;font-size:0.95rem;">
                Providing world-class healthcare solutions with cutting-edge technology and precision care.
            </p>
        </div>

        <div class="row g-4 justify-content-center">

            @forelse($departments as $department)

                <div class="col-12 col-sm-6 col-lg-4 d-flex align-items-stretch">

                    <div class="card w-100 dept-premium-card">

                        <div class="card-body p-4 p-xl-5 d-flex flex-column">

                            <!-- Icon -->
                            <div class="dept-icon-wrapper mb-4">
                                <i class="bi bi-hospital-fill"></i>
                            </div>

                            <!-- Department Name -->
                            <h3 class="fw-bold text-dark mb-3 dept-card-title">
                                {{ $department->name }}
                            </h3>

                            <!-- Description -->
                            @if($department->description)
                                <p class="text-muted lh-base mb-4 text-truncate-3">
                                    {{ $department->description }}
                                </p>
                            @else
                                <p class="text-muted lh-base mb-4 text-truncate-3">
                                    Specialized medical services with an experienced clinical team and advanced monitoring setup.
                                </p>
                            @endif

                            <!-- Footer Action -->
                            <div class="dept-footer mt-auto">

                                <a href="{{ route('about') }}"
                                   class="text-decoration-none text-primary fw-semibold d-flex align-items-center justify-content-between w-100">

                                    <span>Explore Services</span>

                                    <i class="bi bi-arrow-right"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center py-5">
                    <div class="py-5 bg-white rounded-4 border border-secondary border-opacity-25 max-w-600 mx-auto p-4">

                        <div class="display-3 text-secondary opacity-25 mb-3">
                            <i class="bi bi-building-exclamation"></i>
                        </div>

                        <h4 class="text-dark fw-bold mb-2">
                            No departments found at the moment
                        </h4>

                        <p class="text-muted small mb-0">
                            Please check back later or contact our support desk.
                        </p>

                    </div>
                </div>

            @endforelse

        </div>

    </div>
</section>

<style>
    .text-truncate-3{
        display:-webkit-box;
        -webkit-line-clamp:3;
        -webkit-box-orient:vertical;
        overflow:hidden;
        min-height:72px;
        font-size:.95rem;
        line-height:1.7;
    }

    .dept-premium-card{
        border:none !important;
        border-radius:24px;
        background:#fff;
        overflow:hidden;
        position:relative;
        transition:all .35s ease;
        box-shadow:0 8px 25px rgba(0,0,0,.05);
    }

    .dept-premium-card::before{
        content:'';
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:5px;
        background:linear-gradient(90deg,#0d6efd,#4dabf7);
    }

    .dept-premium-card:hover{
        transform:translateY(-10px);
        box-shadow:0 20px 45px rgba(0,0,0,.12);
    }

    .dept-icon-wrapper{
        width:70px;
        height:70px;
        border-radius:18px;
        background:rgba(13,110,253,.10);
        color:#0d6efd;
        display:flex;
        align-items:center;
        justify-content:center;
        font-size:30px;
        transition:.35s;
    }

    .dept-premium-card:hover .dept-icon-wrapper{
        background:#0d6efd;
        color:#fff;
        transform:scale(1.08) rotate(5deg);
    }

    .dept-card-title{
        font-size:1.35rem;
        letter-spacing:-0.5px;
    }

    .dept-footer{
        border-top:1px solid #edf2f7;
        padding-top:18px;
    }

    .dept-footer i{
        transition:.3s;
    }

    .dept-premium-card:hover .dept-footer i{
        transform:translateX(6px);
    }

    .tracking-wider{
        letter-spacing:1px;
    }

    .max-w-600{
        max-width:550px;
    }
</style>