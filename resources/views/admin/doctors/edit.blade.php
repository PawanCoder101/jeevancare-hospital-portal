@extends('layouts.admin')

@section('title', 'Edit Doctor')

@section('content')

<div class="container-fluid py-2" style="max-width: 850px; margin: 0 auto;">

    <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
        <div>
            <h1 class="h3 fw-bold text-dark mb-1">Edit Doctor Profile</h1>
            <p class="text-muted mb-0 small">Update registration details, contact info, and department assignment</p>
        </div>
        <div>
            <a href="{{ route('admin.doctors.index') }}" class="btn btn-outline-secondary rounded-pill px-3 py-2 fw-medium btn-sm d-flex align-items-center gap-1">
                <i class="bi bi-arrow-left"></i> Back to Directory
            </a>
        </div>
    </div>

    <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 14px; background: #ffffff;">
        
        <form action="{{ route('admin.doctors.update', $doctor->id) }}" method="POST" class="m-0">
            @csrf
            @method('PUT')
            
            <div class="row g-4">
                
                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold text-dark mb-1" for="doc_name">
                        Full Name <span class="text-danger">*</span>
                    </label>
                    <input type="text" 
                           id="doc_name"
                           name="name" 
                           class="form-control custom-form-input" 
                           value="{{ old('name', $doctor->name) }}" 
                           placeholder="e.g., Dr. John Doe" 
                           required>
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold text-dark mb-1" for="doc_email">
                        Email Address <span class="text-danger">*</span>
                    </label>
                    <input type="email" 
                           id="doc_email"
                           name="email" 
                           class="form-control custom-form-input" 
                           value="{{ old('email', $doctor->email) }}" 
                           placeholder="e.g., johndoe@vedanta.com" 
                           required>
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold text-dark mb-1" for="doc_phone">
                        Phone Number
                    </label>
                    <input type="text" 
                           id="doc_phone"
                           name="phone" 
                           class="form-control custom-form-input" 
                           value="{{ old('phone', $doctor->phone) }}" 
                           placeholder="e.g., +91 98765 43210">
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold text-dark mb-1" for="doc_dept">
                        Assigned Department <span class="text-danger">*</span>
                    </label>
                    <select id="doc_dept" 
                            name="department_id" 
                            class="form-select custom-form-input" 
                            required>
                        <option value="">Select Medical Unit</option>
                        @foreach ($departments as $dept)
                            <option value="{{ $dept->id }}" {{ $doctor->department_id == $dept->id ? 'selected' : '' }}>
                                {{ $dept->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12">
                    <label class="form-label fw-semibold text-dark mb-1" for="doc_special">
                        Area of Specialization
                    </label>
                    <input type="text" 
                           id="doc_special"
                           name="specialization" 
                           class="form-control custom-form-input" 
                           value="{{ old('specialization', $doctor->specialization) }}" 
                           placeholder="e.g., Interventional Cardiology, Pediatric Neurology">
                </div>

            </div>

            <div class="row g-3 pt-4 mt-2">
                <div class="col-12 col-sm-8 order-sm-2">
                    <button type="submit" class="btn btn-primary w-100 rounded-pill py-2.5 fw-bold shadow-sm d-flex align-items-center justify-content-center gap-2 btn-submit-layout">
                        <i class="bi bi-check-all fs-5"></i> Update Specialist Profile
                    </button>
                </div>
                <div class="col-12 col-sm-4 order-sm-1">
                    <a href="{{ route('admin.doctors.index') }}" class="btn btn-outline-secondary w-100 rounded-pill py-2.5 fw-medium d-flex align-items-center justify-content-center gap-1">
                        Cancel
                    </a>
                </div>
            </div>

        </form>

    </div>
</div>

@endsection

<style>
    /* Styling the Custom Input fields and Dropdowns */
    .custom-form-input {
        background-color: #ffffff !important;
        border: 1px solid #cbd5e1 !important;
        color: #1e293b !important;
        border-radius: 10px !important;
        padding: 0.75rem 1rem !important;
        font-size: 0.95rem !important;
        transition: all 0.2s ease-in-out !important;
    }

    /* Modern Focus State Rings */
    .custom-form-input:focus {
        border-color: #007bff !important;
        box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.12) !important;
        outline: none !important;
    }

    /* Placeholders coloring adjustment */
    .custom-form-input::placeholder {
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