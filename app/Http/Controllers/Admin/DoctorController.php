<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Department;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('department')->latest()->get();
        return view('admin.doctors.index', compact('doctors'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('admin.doctors.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'            => 'required|string|max:255',
            'email'           => 'required|email|unique:doctors,email',
            'phone'           => 'nullable|string|max:20',
            'department_id'   => 'required|exists:departments,id',
            'specialization'  => 'nullable|string|max:255',
        ]);

        Doctor::create($data);

        return redirect()
            ->route('admin.doctors.index')
            ->with('success', 'Doctor added successfully');
    }

    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        $departments = Department::all();

        return view('admin.doctors.edit', compact('doctor', 'departments'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $data = $request->validate([
            'name'            => 'required|string|max:255',
            'email'           => 'required|email|unique:doctors,email,' . $doctor->id,
            'phone'           => 'nullable|string|max:20',
            'department_id'   => 'required|exists:departments,id',
            'specialization'  => 'nullable|string|max:255',
        ]);

        $doctor->update($data);

        return redirect()
            ->route('admin.doctors.index')
            ->with('success', 'Doctor updated successfully');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()
            ->route('admin.doctors.index')
            ->with('success', 'Doctor deleted successfully');
    }
}
