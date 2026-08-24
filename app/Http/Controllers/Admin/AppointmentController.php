<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with('doctor')->latest()->get();
        return view('admin.appointments.index', compact('appointments'));
    }

    public function create()
    {
        $doctors = Doctor::with('department')->get(); // department load
        return view('admin.appointments.create', compact('doctors'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'patient_name'      => 'required|string|max:255',
            'patient_email'     => 'required|email|max:255',
            'patient_phone'     => 'required|string|max:20',
            'doctor_id'         => 'required|exists:doctors,id',
            'appointment_date'  => 'required|date',
            'appointment_time'  => 'required',
            'notes'             => 'nullable|string',
        ]);

        Appointment::create($data);

        return redirect()
            ->route('admin.appointments.index')
            ->with('success', 'Appointment created successfully');
    }

    public function edit(Appointment $appointment)
    {
        $doctors = Doctor::with('department')->get();

        return view('admin.appointments.edit', compact('appointment', 'doctors'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $data = $request->validate([
            'patient_name'      => 'required|string|max:255',
            'patient_email'     => 'required|email|max:255',
            'patient_phone'     => 'required|string|max:20',
            'doctor_id'         => 'required|exists:doctors,id',
            'appointment_date'  => 'required|date',
            'appointment_time'  => 'required',
            'notes'             => 'nullable|string',
        ]);

        $appointment->update($data);

        return redirect()
            ->route('admin.appointments.index')
            ->with('success', 'Appointment updated successfully');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()
            ->route('admin.appointments.index')
            ->with('success', 'Appointment deleted successfully');
    }
}
