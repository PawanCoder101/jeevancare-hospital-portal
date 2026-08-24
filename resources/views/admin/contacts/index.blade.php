@extends('layouts.admin')

@section('title', 'Contact Messages')

@section('content')

<div class="container-fluid py-2">

    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center mb-4 pb-3 border-bottom gap-2">
        <div>
            <h1 class="h3 fw-bold text-dark mb-1">Contact Messages</h1>
            <p class="text-muted mb-0 small">Review and manage queries submitted by website visitors</p>
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
                        <th>Sender Info</th>
                        <th>Subject</th>
                        <th>Message Content</th>
                        <th>Submitted Date</th>
                        <th class="text-end pe-4" style="width: 130px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contacts as $contact)
                    <tr>
                        <td class="ps-4 fw-semibold text-secondary">#{{ $contact->id }}</td>
                        
                        <td>
                            <div class="fw-bold text-dark mb-0.5" style="font-size: 0.95rem;">
                                {{ $contact->name }}
                            </div>
                            <div class="text-muted small">
                                <i class="bi bi-envelope me-1"></i>{{ $contact->email }}
                            </div>
                        </td>
                        
                        <td>
                            <div class="text-dark fw-semibold" style="font-size: 0.88rem;">
                                {{ $contact->subject }}
                            </div>
                        </td>
                        
                        <td>
                            <div class="text-muted text-msg-truncate" style="max-width: 320px; font-size: 0.88rem;" title="{{ $contact->message }}">
                                {{ $contact->message }}
                            </div>
                        </td>
                        
                        <td>
                            <div class="text-dark fw-medium" style="font-size: 0.88rem;">
                                <i class="bi bi-calendar-check text-muted me-1.5"></i>{{ $contact->created_at->format('d M Y') }}
                            </div>
                        </td>
                        
                        <td class="text-end pe-4">
                            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="m-0" onsubmit="return confirm('Are you sure you want to permanently delete this message record?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1.5 fw-medium d-flex align-items-center gap-1 ms-auto">
                                    <i class="bi bi-trash3"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            <div class="py-3">
                                <i class="bi bi-envelope-x display-4 text-disabled opacity-50 mb-2 d-block"></i>
                                <span class="fw-medium">No contact entries or messages found in the logs.</span>
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
    /* Table Element Blueprint Architecture */
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

    /* Message content overflow boundary handling layout override */
    .text-msg-truncate {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
        line-height: 1.4;
    }

    /* Core Outline adjustments for modern button handles */
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