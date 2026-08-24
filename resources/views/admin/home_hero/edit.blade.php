@extends('layouts.admin')

@section('title', 'Home Banner')

@section('content')

<div class="container-fluid py-2" style="max-width: 950px; margin: 0 auto;">

    <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
        <div>
            <h1 class="h3 fw-bold text-dark mb-1">Home Banner Settings</h1>
            <p class="text-muted mb-0 small">Configure the main hero presentation text, buttons, and graphics for your website landing page</p>
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

    <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 14px; background: #ffffff;">
        
        <form method="POST" action="{{ route('admin.home.hero.update') }}" enctype="multipart/form-data" class="m-0">
            @csrf

            <div class="row g-4">
                
                <div class="col-12">
                    <label class="form-label fw-semibold text-dark mb-1" for="hero_heading">
                        Main Title / Heading
                    </label>
                    <input type="text" 
                           id="hero_heading"
                           name="heading" 
                           class="form-control custom-form-input" 
                           value="{{ old('heading', $hero->heading ?? '') }}"
                           placeholder="e.g., Your Health, Our Priority">
                </div>

                <div class="col-12">
                    <label class="form-label fw-semibold text-dark mb-1" for="hero_subheading">
                        Subheading Description
                    </label>
                    <textarea id="hero_subheading"
                              name="subheading" 
                              class="form-control custom-form-textarea" 
                              rows="3"
                              placeholder="Advanced medical care with compassion & excellence...">{{ old('subheading', $hero->subheading ?? '') }}</textarea>
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold text-dark mb-1" for="btn1_text">
                        Primary Button Text
                    </label>
                    <input type="text" 
                           id="btn1_text"
                           name="button1_text" 
                           class="form-control custom-form-input" 
                           value="{{ old('button1_text', $hero->button1_text ?? '') }}"
                           placeholder="e.g., Book Appointment">
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold text-dark mb-1" for="btn1_link">
                        Primary Button Target URL / Route
                    </label>
                    <input type="text" 
                           id="btn1_link"
                           name="button1_link" 
                           class="form-control custom-form-input" 
                           value="{{ old('button1_link', $hero->button1_link ?? '') }}"
                           placeholder="e.g., /appointments or route name string">
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold text-dark mb-1" for="btn2_text">
                        Secondary Button Text
                    </label>
                    <input type="text" 
                           id="btn2_text"
                           name="button2_text" 
                           class="form-control custom-form-input" 
                           value="{{ old('button2_text', $hero->button2_text ?? '') }}"
                           placeholder="e.g., Contact Us">
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold text-dark mb-1" for="btn2_link">
                        Secondary Button Target URL / Route
                    </label>
                    <input type="text" 
                           id="btn2_link"
                           name="button2_link" 
                           class="form-control custom-form-input" 
                           value="{{ old('button2_link', $hero->button2_link ?? '') }}"
                           placeholder="e.g., /contact">
                </div>

                <div class="col-12">
                    <label class="form-label fw-semibold text-dark mb-1" for="hero_image">
                        Hero Banner Background Graphic
                    </label>
                    <input type="file" 
                           id="hero_image"
                           name="image" 
                           class="form-control custom-form-file">
                    
                    @if($hero && $hero->image)
                        <div class="d-flex align-items-center gap-3 mt-3 p-3 bg-light rounded-3 border border-dashed" style="max-width: max-content;">
                            <div class="text-center">
                                <small class="text-muted d-block mb-1.5 fw-medium">Active Banner Preview</small>
                                <img src="{{ asset($hero->image) }}" class="rounded shadow-sm object-fit-cover" width="160" height="90" style="border: 2px solid #ffffff;">
                            </div>
                        </div>
                    @endif
                </div>

            </div>

            <div class="pt-4 mt-2">
                <button type="submit" class="btn btn-primary w-100 rounded-pill py-2.5 fw-bold shadow-sm d-flex align-items-center justify-content-center gap-2 btn-submit-layout">
                    <i class="bi bi-cloud-arrow-up-fill fs-5"></i> Save Banner Settings
                </button>
            </div>
        </form>

    </div>
</div>

@endsection

<style>
    /* Styling the Custom Input fields and Textareas */
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

    /* Modern Focus Ring Glow System */
    .custom-form-input:focus,
    .custom-form-textarea:focus,
    .custom-form-file:focus {
        border-color: #007bff !important;
        box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.12) !important;
        outline: none !important;
    }

    /* File Input Component customized design matching variables */
    .custom-form-file {
        background-color: #ffffff !important;
        border: 1px solid #cbd5e1 !important;
        color: #475569 !important;
        border-radius: 10px !important;
        padding: 0.6rem 0.9rem !important;
    }

    /* Custom Input File button adjustments */
    .custom-form-file::file-selector-button {
        background-color: #f1f5f9 !important;
        color: #0f172a !important;
        border: none !important;
        border-radius: 6px !important;
        font-weight: 600 !important;
        font-size: 0.85rem !important;
        padding: 0.35rem 0.75rem !important;
        margin-right: 0.75rem !important;
        transition: background 0.2s !important;
    }
    
    .custom-form-file::file-selector-button:hover {
        background-color: #e2e8f0 !important;
    }

    /* Textarea behavior boundaries override */
    .custom-form-textarea {
        resize: vertical;
        min-height: 90px;
    }

    /* Placeholders colors match handling */
    .custom-form-input::placeholder,
    .custom-form-textarea::placeholder {
        color: #94a3b8 !important;
        opacity: 1;
    }

    /* Premium Action Buttons Transitions */
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