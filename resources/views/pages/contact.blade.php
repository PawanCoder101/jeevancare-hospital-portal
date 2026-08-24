@extends('layouts.app')
@section('title', 'Contact Us - CityCare Hospital')

@section('content')

<!-- ================= CONTACT BANNER WITH HOSPITAL LOGO IMAGE ================= -->
<section class="position-relative py-5 text-white shadow-sm overflow-hidden"
    style="background: url('{{ asset('assets/images/contactbanner1.jpg') }}') no-repeat center center;
            background-size: cover;
            min-height: 420px;
            display: flex;
            align-items: center;">

    <div class="container position-relative" style="z-index: 2;">
        <div class="row">

            <!-- LEFT SIDE: Rotating Rings with Image Logo inside -->
            <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start align-items-center">
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
                    <div class="center-hospital-logo shadow-lg d-flex flex-column align-items-center justify-content-center p-3 bg-white rounded-circle" style="width: 160px; height: 160px;">
                        <img src="{{ asset('assets/images/logo17.png') }}" alt="Vedanta Hospital Logo" class="img-fluid" style="max-height: 90px; width: auto;">
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- CONTACT INFO & FORM SECTION -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4 justify-content-center">
            
            <!-- Left Side: Info Cards -->
            <div class="col-12 col-lg-4">
                <div class="d-flex flex-column gap-3 h-100">
                    
                    <!-- Emergency Box -->
                    <div class="card border-0 bg-danger bg-gradient text-white shadow-sm rounded-4 p-4 custom-hover-card">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-white text-danger rounded-3 p-3 d-inline-flex shadow-sm flex-shrink-0">
                                <i class="bi bi-telephone-inbound-fill fs-3"></i>
                            </div>
                            <div class="overflow-hidden">
                                <small class="text-white-50 text-uppercase fw-bold d-block mb-1">24/7 Emergency Line</small>
                                <a href="tel:+919876543210" class="fs-4 fw-bold text-white text-decoration-none d-block text-truncate">+91 9876543210</a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Info Card -->
                    <div class="card border-0 shadow-sm rounded-4 bg-white p-4 h-100 custom-hover-card">
                        <h4 class="fw-bold text-dark mb-4">Contact Information</h4>
                        
                        <div class="d-flex flex-column gap-4">
                            <!-- Location -->
                            <div class="d-flex align-items-start gap-3">
                                <div class="bg-primary bg-opacity-10 text-primary rounded-3 p-3 d-inline-flex flex-shrink-0">
                                    <i class="bi bi-geo-alt-fill fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-secondary mb-1">Hospital Location</h6>
                                    <p class="text-muted mb-0">Delhi, India</p>
                                </div>
                            </div>

                            <!-- Inquiries -->
                            <div class="d-flex align-items-start gap-3">
                                <div class="bg-success bg-opacity-10 text-success rounded-3 p-3 d-inline-flex flex-shrink-0">
                                    <i class="bi bi-headset fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-secondary mb-1">General Inquiries</h6>
                                    <p class="text-muted mb-0">+91 9876543210</p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="d-flex align-items-start gap-3">
                                <div class="bg-info bg-opacity-10 text-info rounded-3 p-3 d-inline-flex flex-shrink-0">
                                    <i class="bi bi-envelope-open-fill fs-4"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="fw-bold text-secondary mb-1">Email Support</h6>
                                    <a href="mailto:info@medantahospital.com" class="text-muted text-decoration-none d-block text-truncate">info@medantahospital.com</a>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4 text-muted opacity-25">

                        <!-- OPD Timings -->
                        <div class="bg-light p-3 rounded-3 text-center mt-auto">
                            <p class="text-muted small mb-0 fw-medium">
                                <i class="bi bi-clock-history me-1 text-primary"></i> 
                                <strong>OPD Timings:</strong> Mon - Sat (8:00 AM - 8:00 PM)
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="col-12 col-lg-8">
                <div class="card border-0 shadow-sm p-4 p-md-5 rounded-4 bg-white h-100">
                    <div class="mb-4">
                        <h3 class="fw-bold text-dark mb-2">Send an Enquiry</h3>
                        <p class="text-muted small">Fill out the form below and our care team will get back to you shortly.</p>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-3 p-3 mb-4 d-flex align-items-center" role="alert">
                            <i class="bi bi-check-circle-fill me-3 fs-4 text-success"></i>
                            <div>
                                {{ session('success') }}
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control rounded-3" id="floatingName" placeholder="Your Name" required>
                                    <label for="floatingName"><i class="bi bi-person me-2"></i>Full Name</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control rounded-3" id="floatingEmail" placeholder="Your Email" required>
                                    <label for="floatingEmail"><i class="bi bi-envelope me-2"></i>Email Address</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" class="form-control rounded-3" id="floatingSubject" placeholder="Subject">
                                    <label for="floatingSubject"><i class="bi bi-bookmark me-2"></i>Subject / Department</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control rounded-3" id="floatingMessage" placeholder="Your Message" style="height: 150px" required></textarea>
                                    <label for="floatingMessage"><i class="bi bi-chat-right-text me-2"></i>How can we help you?</label>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg w-100 py-3 fw-bold rounded-4 shadow">
                                    Submit Enquery
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- PROFESSIONAL GOOGLE MAP SECTION -->
<section class="w-100 p-0 m-0 overflow-hidden" style="clear: both; display: block;">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.1232840505166!2d77.20875327632128!3d28.566024975701402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce26fe3b1bf2b%3A0x6b8723908868f7f1!2sAll%20India%20Institute%20Of%20Medical%20Sciences%20New%20Delhi!5e0!3m2!1sen!2sin!4v1717390000000!5m2!1sen!2sin" 
        width="100%" 
        height="450" 
        style="border:0; display:block; min-height: 450px; width: 100%;" 
        allowfullscreen="" 
        loading="eager" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>

@endsection

<style>
    .custom-hover-card {
        transition: transform 0.25s ease-in-out, box-shadow 0.25s ease-in-out;
    }
    .custom-hover-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(0,0,0,0.08) !important;
    }
</style>