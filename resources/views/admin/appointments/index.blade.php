@extends('layouts.admin')

@section('title', 'Appointments')

@section('content')

<div class="container-fluid py-2">

    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center mb-4 pb-3 border-bottom gap-3">
        <div>
            <h1 class="h3 fw-bold text-dark mb-1">Appointments Log</h1>
            <p class="text-muted mb-0 small">Monitor and manage customer patient check-up bookings</p>
        </div>
        <div>
            <a href="{{ route('admin.appointments.create') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-medium shadow-sm d-inline-flex align-items-center gap-2">
                <i class="bi bi-calendar-plus"></i> Add Appointment
            </a>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-3 mb-4" role="alert">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-check-circle-fill fs-5"></i>
            <div>{{ session('success') }}</div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 14px;">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0 custom-admin-table">
                <thead>
                    <tr>
                        <th class="ps-4" style="width: 70px;">ID</th>
                        <th>Patient Info</th>
                        <th>Contact info</th>
                        <th>Assigned Doctor</th>
                        <th>Schedule</th>
                        <th>Notes / Symptoms</th>
                        <th class="text-end pe-4" style="width: 190px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($appointments as $appointment)
                    <tr>
                        <td class="ps-4 fw-semibold text-secondary">#{{ $appointment->id }}</td>
                        
                        <td>
                            <div class="fw-bold text-dark" style="font-size: 0.95rem;">
                                {{ $appointment->patient_name }}
                            </div>
                        </td>
                        
                        <td>
                            <div class="text-dark fw-medium mb-0.5" style="font-size: 0.88rem;">
                                <i class="bi bi-envelope text-muted me-1.5"></i>{{ $appointment->patient_email }}
                            </div>
                            <div class="text-muted small">
                                <i class="bi bi-telephone text-muted me-1.5"></i>{{ $appointment->patient_phone }}
                            </div>
                        </td>
                        
                        <td>
                            <div class="d-flex align-items-center gap-1.5 text-dark fw-semibold" style="font-size: 0.9rem;">
                                <i class="bi bi-heart-pulse text-primary"></i> {{ $appointment->doctor->name }}
                            </div>
                        </td>
                        
                        <td>
                            <div class="text-dark fw-medium mb-0.5" style="font-size: 0.88rem;">
                                <i class="bi bi-calendar-event text-muted me-1.5"></i>{{ $appointment->appointment_date }}
                            </div>
                            <div class="text-primary small fw-semibold">
                                <i class="bi bi-clock text-primary me-1.5"></i>{{ $appointment->appointment_time }}
                            </div>
                        </td>
                        
                        <td>
                            <div class="text-muted text-wrap-custom" style="max-width: 200px; font-size: 0.85rem;">
                                {{ $appointment->notes ?? 'N/A' }}
                            </div>
                        </td>
                        
                        <td class="text-end pe-4">
                            <div class="d-inline-flex gap-2">
                                <a href="{{ route('admin.appointments.edit', $appointment->id) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1.5 fw-medium d-flex align-items-center gap-1">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                
                                <form action="{{ route('admin.appointments.destroy', $appointment->id) }}" method="POST" class="m-0" onsubmit="return confirm('Are you sure you want to cancel this appointment?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1.5 fw-medium d-flex align-items-center gap-1">
                                        <i class="bi bi-trash3"></i> Cancel
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-5 text-muted">
                            <div class="py-3">
                                <i class="bi bi-calendar-x display-4 text-disabled opacity-50 mb-2 d-block"></i>
                                <span class="fw-medium">No appointments scheduled in the logs.</span>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection

<style>
    /* Table Layout Structure Standardizing */
    .custom-admin-table thead {
        background: #f8fafc;
        border-bottom: 1px solid #e2e8f0;
    }
    
    .custom-admin-table th {
        color: #475569 !important;
        font-weight: 700 !important;
        font-size: 0.8rem !important;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 1.1rem 0.75rem !important;
    }

    .custom-admin-table td {
        padding: 1.1rem 0.75rem !important;
        color: #334155;
        border-bottom: 1px solid #f1f5f9;
    }

    .custom-admin-table tbody tr:last-child td {
        border-bottom: none !important;
    }

    /* Wrap notes description safely without breaking table widths */
    .text-wrap-custom {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Clean outlines override for premium modern actions buttons */
    .btn-outline-primary {
        border-color: #cbd5e1 !important;
        color: #007bff !important;
    }
    .btn-outline-primary:hover {
        background-color: #007bff !important;
        border-color: #007bff !important;
        color: #ffffff !important;
    }

    .btn-outline-danger {
        border-color: #cbd5e1 !important;
        color: #dc3545 !important;
    }
    .btn-outline-danger:hover {
        background-color: #dc3545 !important;
        border-color: #dc3545 !important;
        color: #ffffff !important;
    }
</style>