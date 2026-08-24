@extends('layouts.admin')

@section('title', 'Add Appointment')

@section('content')

<div class="container-fluid py-2" style="max-width: 900px; margin: 0 auto;">

    <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
        <div>
            <h1 class="h3 fw-bold text-dark mb-1">Book New Appointment</h1>
            <p class="text-muted mb-0 small">Schedule a medical consultation slot and assign it to an available specialist</p>
        </div>
        <div>
            <a href="{{ route('admin.appointments.index') }}" class="btn btn-outline-secondary rounded-pill px-3 py-2 fw-medium btn-sm d-flex align-items-center gap-1">
                <i class="bi bi-arrow-left"></i> Back to Logs
            </a>
        </div>
    </div>

    <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 14px; background: #ffffff;">
        
        <form action="{{ route('admin.appointments.store') }}" method="POST" class="m-0">
            @csrf
            
            <div class="row g-4">
                
                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold text-dark mb-1" for="patient_name">
                        Patient Name <span class="text-danger">*</span>
                    </label>
                    <input type="text" 
                           id="patient_name"
                           name="patient_name" 
                           class="form-control custom-form-input" 
                           placeholder="e.g., Jane Smith" 
                           required>
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold text-dark mb-1" for="patient_email">
                        Patient Email <span class="text-danger">*</span>
                    </label>
                    <input type="email" 
                           id="patient_email"
                           name="patient_email" 
                           class="form-control custom-form-input" 
                           placeholder="e.g., janesmith@example.com" 
                           required>
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold text-dark mb-1" for="patient_phone">
                        Patient Phone Number <span class="text-danger">*</span>
                    </label>
                    <input type="text" 
                           id="patient_phone"
                           name="patient_phone" 
                           class="form-control custom-form-input" 
                           placeholder="e.g., +91 98765 43210" 
                           required>
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold text-dark mb-1" for="assigned_doctor">
                        Assigned Specialist <span class="text-danger">*</span>
                    </label>
                    <select id="assigned_doctor" 
                            name="doctor_id" 
                            class="form-select custom-form-input" 
                            required>
                        <option value="" disabled selected>Select Doctor</option>
                        @foreach($doctors as $doctor)
                            <option value="{{ $doctor->id }}">{{ $doctor->name }} ({{ $doctor->department->name }})</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 col-sm-6">
                    <label class="form-label fw-semibold text-dark mb-1" for="app_date">
                        Appointment Date <span class="text-danger">*</span>
                    </label>
                    <input type="date" 
                           id="app_date"
                           name="appointment_date" 
                           class="form-control custom-form-input" 
                           required>
                </div>

                <div class="col-12 col-sm-6">
                    <label class="form-label fw-semibold text-dark mb-1" for="app_time">
                        Appointment Time <span class="text-danger">*</span>
                    </label>
                    <input type="time" 
                           id="app_time"
                           name="appointment_time" 
                           class="form-control custom-form-input" 
                           required>
                </div>

                <div class="col-12">
                    <label class="form-label fw-semibold text-dark mb-1" for="app_notes">
                        Consultation Notes / Patient Symptoms
                    </label>
                    <textarea id="app_notes"
                              name="notes" 
                              class="form-control custom-form-textarea" 
                              rows="4" 
                              placeholder="Briefly add check-up symptoms, chronic conditions, or history notes if any..."></textarea>
                </div>

            </div>

            <div class="pt-4 mt-2">
                <button type="submit" class="btn btn-primary w-100 rounded-pill py-2.5 fw-bold shadow-sm d-flex align-items-center justify-content-center gap-2 btn-submit-layout">
                    <i class="bi bi-calendar-check-fill"></i> Save and Confirm Appointment
                </button>
            </div>
        </form>

    </div>
</div>

@endsection

<style>
    /* Styling the Custom Input fields, Date/Time components, and Select dropdowns */
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

    /* Modern Focus Ring Glow Elements */
    .custom-form-input:focus,
    .custom-form-textarea:focus {
        border-color: #007bff !important;
        box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.12) !important;
        outline: none !important;
    }

    /* Form Textarea vertical handle restriction */
    .custom-form-textarea {
        resize: vertical;
        min-height: 110px;
    }

    /* Placeholders style tuning adjustment */
    .custom-form-input::placeholder,
    .custom-form-textarea::placeholder {
        color: #94a3b8 !important;
        opacity: 1;
    }

    /* Premium Button Transitions */
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