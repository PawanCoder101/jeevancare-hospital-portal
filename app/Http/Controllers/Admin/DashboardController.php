<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index()
    {
        $totalDepartments = Department::count();
        $totalDoctors = Doctor::count();
        $totalAppointments = Appointment::count();
        $totalContacts = Contact::count();

        return view('admin.dashboard', compact(
            'totalDepartments',
            'totalDoctors',
            'totalAppointments',
            'totalContacts'
        ));
    }
}
