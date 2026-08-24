@extends('layouts.app')
@section('title', 'My Appointments - CityCare Hospital')

@section('content')

<!-- ================= FINAL CLEAN HERO BANNER ONLY (NO TEXT) ================= -->
<section class="position-relative w-100 shadow-sm overflow-hidden" 
         style="background: #e2e8f0 url('https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=1920&auto=format&fit=crop') no-repeat center center; 
                background-size: cover; 
                min-height: 400px; 
                width: 100%;">
    <!-- इस सेक्शन को पूरी तरह खाली रखा गया है ताकि केवल साफ़ और प्रीमियम हॉस्पिटल अपॉइंटमेंट थीम की फोटो दिखे -->
</section>

<!-- APPOINTMENTS LIST SECTION -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-11">
                <div class="row g-4">
                    
                    @forelse($appointments as $appointment)
                        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100 border border-light-subtle shadow-sm rounded-4 overflow-hidden appointment-premium-card position-relative">
                                
                                <!-- Decorative Left Accent Strip -->
                                <div class="accent-strip bg-primary"></div>

                                <div class="card-body p-4 p-xl-5 d-flex flex-column justify-content-between">
                                    
                                    <!-- Top Row: Patient Name & Date -->
                                    <div>
                                        <div class="d-flex justify-content-between align-items-start gap-2 mb-3">
                                            <div>
                                                <h4 class="fw-bold text-dark mb-1 appointment-patient-title">
                                                    {{ $appointment->patient_name }}
                                                </h4>
                                                <!-- Department Badge -->
                                                <span class="badge bg-primary bg-opacity-10 text-primary fw-bold px-2.5 py-1 rounded-pill" style="font-size: 0.72rem; letter-spacing: 0.3px;">
                                                    <i class="bi bi-building-fill text-primary opacity-75 me-1"></i>
                                                    {{ $appointment->doctor->department->name ?? 'General' }}
                                                </span>
                                            </div>
                                            
                                            <!-- Appointment Date Badge -->
                                            <div class="text-end shrink-0">
                                                <span class="d-inline-block bg-light text-secondary rounded-3 px-2 py-1.5 small fw-semibold border border-light-subtle">
                                                    <i class="bi bi-calendar3 text-primary opacity-75 me-1"></i>
                                                    {{ $appointment->appointment_date }}
                                                </span>
                                            </div>
                                        </div>

                                        <hr class="border-light-subtle my-3">

                                        <!-- Core Appointment Info -->
                                        <div class="mb-4 space-y-3">
                                            <!-- Doctor Field -->
                                            <div class="d-flex align-items-center gap-3 py-1">
                                                <div class="info-icon-box bg-light rounded-circle d-flex align-items-center justify-content-center text-primary">
                                                    <i class="bi bi-person-fill-check fs-5"></i>
                                                </div>
                                                <div>
                                                    <small class="text-muted d-block uppercase tracking-wider fw-medium" style="font-size: 0.7rem;">Assigned Doctor</small>
                                                    <span class="text-dark fw-semibold small-md">{{ $appointment->doctor->name }}</span>
                                                </div>
                                            </div>

                                            <!-- Time Field -->
                                            <div class="d-flex align-items-center gap-3 py-1">
                                                <div class="info-icon-box bg-light rounded-circle d-flex align-items-center justify-content-center text-primary">
                                                    <i class="bi bi-clock-fill fs-5"></i>
                                                </div>
                                                <div>
                                                    <small class="text-muted d-block uppercase tracking-wider fw-medium" style="font-size: 0.7rem;">Scheduled Time</small>
                                                    <span class="text-dark fw-semibold small-md">{{ $appointment->appointment_time }}</span>
                                                </div>
                                            </div>

                                            <!-- Notes Field (If available) -->
                                            @if($appointment->notes)
                                                <div class="d-flex align-items-start gap-3 py-1">
                                                    <div class="info-icon-box bg-light rounded-circle d-flex align-items-center justify-content-center text-primary shrink-0">
                                                        <i class="bi bi-chat-left-text-fill fs-5"></i>
                                                    </div>
                                                    <div class="w-100">
                                                        <small class="text-muted d-block uppercase tracking-wider fw-medium" style="font-size: 0.7rem;">Patient Notes</small>
                                                        <p class="text-secondary small mb-0 lh-base text-truncate-2 mt-0.5">{{ $appointment->notes }}</p>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Bottom Row: Status Badge -->
                                    <div class="mt-auto pt-2 d-flex justify-content-between align-items-center border-top border-light-subtle">
                                        <small class="text-muted small-xs">Status</small>
                                        <span class="badge bg-success bg-opacity-10 text-success fw-bold px-3 py-1.5 rounded-pill d-inline-flex align-items-center gap-1.5" style="font-size: 0.75rem;">
                                            <span class="status-pulse-dot bg-success"></span>
                                            Upcoming
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @empty
                        <!-- Empty State Wrapper -->
                        <div class="col-12">
                            <div class="text-center py-5 my-3 bg-light rounded-4 border border-dashed border-secondary border-opacity-25 max-w-600 mx-auto p-4">
                                <div class="display-3 text-secondary opacity-25 mb-3">
                                    <i class="bi bi-calendar-x"></i>
                                </div>
                                <h4 class="text-dark fw-bold mb-1">No appointments found</h4>
                                <p class="text-muted small mb-0">You don't have any scheduled appointments with our medical experts yet.</p>
                            </div>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<!-- PREMIUM IN-PAGE LAYOUT INTERFACE -->
<style>
    /* Utility Stack Matrix */
    .space-y-3 > * + * {
        margin-top: 0.75rem !important;
    }
    .shrink-0 {
        flex-shrink: 0;
    }
    .text-truncate-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;  
        overflow: hidden;
    }
    .small-md {
        font-size: 0.92rem;
    }
    .small-xs {
        font-size: 0.75rem;
    }

    /* Card Accent Elements */
    .appointment-premium-card {
        background: #ffffff;
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease;
        padding-left: 4px;
    }
    .accent-strip {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 5px;
        transition: width 0.25s ease;
    }
    
    .info-icon-box {
        width: 38px;
        height: 38px;
        flex-shrink: 0;
    }

    .appointment-patient-title {
        font-size: 1.2rem;
        letter-spacing: -0.2px;
    }

    /* Hover States & Fluid Motions */
    .appointment-premium-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06) !important;
        border-color: rgba(13, 110, 253, 0.2) !important;
    }
    .appointment-premium-card:hover .accent-strip {
        width: 7px;
    }

    /* Live Green Pulse Indicator */
    .status-pulse-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        display: inline-block;
        animation: pulseGlow 2s infinite;
    }

    @keyframes pulseGlow {
        0% { transform: scale(0.9); opacity: 0.6; }
        50% { transform: scale(1.1); opacity: 1; }
        100% { transform: scale(0.9); opacity: 0.6; }
    }

    .max-w-600 {
        max-width: 550px;
    }
</style>