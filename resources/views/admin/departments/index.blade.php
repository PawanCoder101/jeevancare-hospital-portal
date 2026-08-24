@extends('layouts.admin')

@section('title', 'Departments')

@section('content')

<div class="container-fluid py-2">

    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center mb-4 pb-3 border-bottom gap-3">
        <div>
            <h1 class="h3 fw-bold text-dark mb-1">Departments</h1>
            <p class="text-muted mb-0 small">Manage and configure hospital medical departments</p>
        </div>
        <div>
            <a href="{{ route('admin.departments.create') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-medium shadow-sm d-inline-flex align-items-center gap-2">
                <i class="bi bi-plus-circle"></i> Add Department
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
                        <th class="ps-4" style="width: 100px;">ID</th>
                        <th>Department Name</th>
                        <th>Description</th>
                        <th class="text-end pe-4" style="width: 220px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($departments as $department)
                    <tr>
                        <td class="ps-4 fw-semibold text-secondary">#{{ $department->id }}</td>
                        <td>
                            <div class="fw-bold text-dark" style="font-size: 0.95rem;">
                                {{ $department->name }}
                            </div>
                        </td>
                        <td>
                            <div class="text-muted text-truncate-custom" style="max-width: 450px;">
                                {{ $department->description ?? 'No description provided.' }}
                            </div>
                        </td>
                        <td class="text-end pe-4">
                            <div class="d-inline-flex gap-2">
                                <a href="{{ route('admin.departments.edit', $department->id) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1.5 fw-medium d-flex align-items-center gap-1">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                
                                <form action="{{ route('admin.departments.destroy', $department->id) }}" method="POST" class="m-0" onsubmit="return confirm('Are you sure you want to delete this department?')">
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
                        <td colspan="4" class="text-center py-5 text-muted">
                            <div class="py-3">
                                <i class="bi bi-building-exclamation display-4 text-disabled opacity-50 mb-2 d-block"></i>
                                <span class="fw-medium">No departments found in the system.</span>
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
        padding: 1rem 0.75rem !important;
    }

    .custom-admin-table td {
        padding: 1rem 0.75rem !important;
        color: #334155;
        border-bottom: 1px solid #f1f5f9;
    }

    .custom-admin-table tbody tr:last-child td {
        border-bottom: none !important;
    }

    /* Soft ellipsis truncation if text description overflows heavily */
    .text-truncate-custom {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-size: 0.9rem;
    }

    /* Clean outlines override for sleek feel */
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