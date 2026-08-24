@extends('layouts.admin')

@section('title', 'Doctors')

@section('content')

<div class="container-fluid py-2">

    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center mb-4 pb-3 border-bottom gap-3">
        <div>
            <h1 class="h3 fw-bold text-dark mb-1">Doctors Directory</h1>
            <p class="text-muted mb-0 small">Manage hospital medical specialists and assignment logs</p>
        </div>
        <div>
            <a href="{{ route('admin.doctors.create') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-medium shadow-sm d-inline-flex align-items-center gap-2">
                <i class="bi bi-person-plus-fill"></i> Add Doctor
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
                        <th class="ps-4" style="width: 80px;">ID</th>
                        <th>Doctor Name</th>
                        <th>Contact Details</th>
                        <th>Department</th>
                        <th>Specialization</th>
                        <th class="text-end pe-4" style="width: 200px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($doctors as $doctor)
                    <tr>
                        <td class="ps-4 fw-semibold text-secondary">#{{ $doctor->id }}</td>
                        
                        <td>
                            <div class="d-flex align-items-center gap-2.5">
                                <div class="bg-primary-subtle text-primary rounded-circle fw-bold d-flex align-items-center justify-content-center border" 
                                     style="width: 36px; height: 36px; font-size: 0.85rem;">
                                    Dr
                                </div>
                                <div>
                                    <div class="fw-bold text-dark" style="font-size: 0.95rem;">{{ $doctor->name }}</div>
                                </div>
                            </div>
                        </td>
                        
                        <td>
                            <div class="text-dark fw-medium mb-0.5" style="font-size: 0.9rem;">
                                <i class="bi bi-envelope text-muted me-1.5"></i>{{ $doctor->email }}
                            </div>
                            <div class="text-muted small">
                                <i class="bi bi-telephone text-muted me-1.5"></i>{{ $doctor->phone }}
                            </div>
                        </td>
                        
                        <td>
                            <span class="badge bg-primary-subtle text-primary px-2.5 py-1.5 rounded-2 fw-semibold" style="font-size: 0.8rem;">
                                <i class="bi bi-building me-1"></i> {{ $doctor->department->name }}
                            </span>
                        </td>
                        
                        <td>
                            <div class="text-dark fw-medium" style="font-size: 0.9rem;">
                                {{ $doctor->specialization }}
                            </div>
                        </td>
                        
                        <td class="text-end pe-4">
                            <div class="d-inline-flex gap-2">
                                <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1.5 fw-medium d-flex align-items-center gap-1">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                
                                <form action="{{ route('admin.doctors.destroy', $doctor->id) }}" method="POST" class="m-0" onsubmit="return confirm('Are you sure you want to remove this doctor from records?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1.5 fw-medium d-flex align-items-center gap-1">
                                        <i class="bi bi-trash3"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            <div class="py-3">
                                <i class="bi bi-person-exclamation display-4 text-disabled opacity-50 mb-2 d-block"></i>
                                <span class="fw-medium">No doctors currently registered in the database.</span>
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
    /* Premium Table Typography and spacing fixes */
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

    /* Clean outlines override for sleek modern touch */
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