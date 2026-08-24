@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid py-2">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 pb-4 border-bottom">
        <div>
            <h1 class="h3 fw-bold text-dark mb-1">Hospital Dashboard</h1>
            <p class="text-muted mb-0">
                Welcome back, <strong class="text-dark">{{ session('admin_name') ?? 'Administrator' }}</strong>
            </p>
        </div>

        <div class="mt-3 mt-md-0">
            <div class="d-flex align-items-center gap-2">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-semibold" style="font-size: 0.85rem;">
                    <i class="bi bi-calendar3 me-2"></i>
                    {{ now()->format('l, d F Y') }}
                </span>
                <button type="button" class="btn btn-white border border-light-subtle shadow-sm rounded-pill btn-sm px-3 py-2 text-dark fw-medium d-none d-sm-inline-flex align-items-center gap-1">
                    <i class="bi bi-download"></i> Report
                </button>
            </div>
        </div>
    </div>

    <div class="row g-4">

        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm dashboard-stat-card card-blue-indicator">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-muted fw-bold mb-2 small text-uppercase tracking-wider">Departments</h6>
                            <h2 class="fw-extrabold mb-0 text-dark">{{ $totalDepartments }}</h2>
                        </div>
                        <div class="stat-icon bg-primary-subtle text-primary rounded-3 d-flex align-items-center justify-content-center">
                            <i class="bi bi-building-fill"></i>
                        </div>
                    </div>
                    <div class="mt-3 small text-primary fw-medium d-flex align-items-center gap-1">
                        <i class="bi bi-check-circle-fill"></i> Active Live System
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm dashboard-stat-card card-success-indicator">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-muted fw-bold mb-2 small text-uppercase tracking-wider">Doctors</h6>
                            <h2 class="fw-extrabold mb-0 text-dark">{{ $totalDoctors }}</h2>
                        </div>
                        <div class="stat-icon bg-success-subtle text-success rounded-3 d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-badge-fill"></i>
                        </div>
                    </div>
                    <div class="mt-3 small text-success fw-medium d-flex align-items-center gap-1">
                        <i class="bi bi-arrow-up-short fs-5"></i> Available Shifts
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm dashboard-stat-card card-warning-indicator">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-muted fw-bold mb-2 small text-uppercase tracking-wider">Appointments</h6>
                            <h2 class="fw-extrabold mb-0 text-dark">{{ $totalAppointments }}</h2>
                        </div>
                        <div class="stat-icon bg-warning-subtle text-warning rounded-3 d-flex align-items-center justify-content-center">
                            <i class="bi bi-calendar-check-fill"></i>
                        </div>
                    </div>
                    <div class="mt-3 small text-warning fw-medium d-flex align-items-center gap-1">
                        <i class="bi bi-clock-history"></i> Today Total
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm dashboard-stat-card card-danger-indicator">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-muted fw-bold mb-2 small text-uppercase tracking-wider">Messages</h6>
                            <h2 class="fw-extrabold mb-0 text-dark">{{ $totalContacts }}</h2>
                        </div>
                        <div class="stat-icon bg-danger-subtle text-danger rounded-3 d-flex align-items-center justify-content-center">
                            <i class="bi bi-envelope-paper-fill"></i>
                        </div>
                    </div>
                    <div class="mt-3 small text-danger fw-medium d-flex align-items-center gap-1">
                        <i class="bi bi-exclamation-triangle-fill"></i> {{ $totalContacts }} pending actions
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

<style>
    .dashboard-stat-card {
        background: #ffffff !important;
        border-radius: 14px !important;
        position: relative;
        overflow: hidden;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Left Aesthetic Accent Strip Borders instead of broken inline blocks */
    .card-blue-indicator { border-left: 5px solid #007bff !important; }
    .card-success-indicator { border-left: 5px solid #198754 !important; }
    .card-warning-indicator { border-left: 5px solid #ffc107 !important; }
    .card-danger-indicator { border-left: 5px solid #dc3545 !important; }

    .dashboard-stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.05) !important;
    }

    .stat-icon {
        width: 54px;
        height: 54px;
        font-size: 1.5rem;
        transition: transform 0.25s ease;
    }

    .dashboard-stat-card:hover .stat-icon {
        transform: scale(1.08);
    }

    /* Better stacking handling on small layout boundaries */
    @media (max-width: 575.98px) {
        .dashboard-stat-card .card-body {
            padding: 1.25rem !important;
        }
        .stat-icon {
            width: 46px;
            height: 46px;
            font-size: 1.25rem;
        }
    }
</style>