@extends('layouts.admin')

@section('title', 'Add Department')

@section('content')

<div class="container-fluid py-2" style="max-width: 800px; margin: 0 auto;">

    <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
        <div>
            <h1 class="h3 fw-bold text-dark mb-1">Add New Department</h1>
            <p class="text-muted mb-0 small">Create a new medical unit or department for the hospital</p>
        </div>
        <div>
            <a href="{{ route('admin.departments.index') }}" class="btn btn-outline-secondary rounded-pill px-3 py-2 fw-medium btn-sm d-flex align-items-center gap-1">
                <i class="bi bi-arrow-left"></i> Back to List
            </a>
        </div>
    </div>

    <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 14px; background: #ffffff;">
        
        <form action="{{ route('admin.departments.store') }}" method="POST" class="m-0">
            @csrf
            
            <div class="mb-4">
                <label class="form-label fw-semibold text-dark mb-1" for="department_name">
                    Department Name <span class="text-danger">*</span>
                </label>
                <div class="input-group-custom position-relative">
                    <input type="text" 
                           id="department_name"
                           name="name" 
                           class="form-control custom-form-input" 
                           placeholder="e.g., Cardiology, Neurology, Pediatrics" 
                           required>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold text-dark mb-1" for="department_desc">
                    Description
                </label>
                <div class="input-group-custom position-relative">
                    <textarea id="department_desc"
                              name="description" 
                              class="form-control custom-form-textarea" 
                              rows="5" 
                              placeholder="Brief description of the department's specializations or services..."></textarea>
                </div>
            </div>

            <div class="pt-2">
                <button type="submit" class="btn btn-primary w-100 rounded-pill py-2.5 fw-bold shadow-sm d-flex align-items-center justify-content-center gap-2 btn-submit-layout">
                    <i class="bi bi-check-circle-fill"></i> Save Department
                </button>
            </div>
        </form>

    </div>
</div>

@endsection

<style>
    /* Styling the Custom Input fields */
    .custom-form-input, 
    .custom-form-textarea {
        background-color: #ffffff !important;
        border: 1px solid #cbd5e1 !important;
        color: #1e293b !important;
        border-radius: 10px !important;
        padding: 0.75rem 1rem !important;
        font-size: 0.95rem !important;
        transition: all 0.2s ease-in-out !important;
    }

    /* Modern Focus State Rings */
    .custom-form-input:focus, 
    .custom-form-textarea:focus {
        border-color: #007bff !important;
        box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.12) !important;
        outline: none !important;
    }

    /* Textarea behavior layout sizing override */
    .custom-form-textarea {
        resize: vertical;
        min-height: 120px;
    }

    /* Placeholders coloring adjustment */
    .custom-form-input::placeholder,
    .custom-form-textarea::placeholder {
        color: #94a3b8 !important;
        opacity: 1;
    }

    /* Premium Button Hover Scale transition */
    .btn-submit-layout {
        font-size: 1rem;
        transition: all 0.2s ease;
    }
    
    .btn-submit-layout:hover {
        background-color: #0056b3 !important;
        transform: translateY(-1px);
        box-shadow: 0 8px 20px rgba(0, 123, 255, 0.25) !important;
    }
</style>
