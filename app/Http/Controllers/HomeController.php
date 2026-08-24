<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Doctor;


use App\Models\HomeHero;

class HomeController extends Controller
{
    public function index()
    {
        // Hero banner
        $hero = HomeHero::first();

        // Departments
        $departments = Department::all();

        // Doctors list (🔥 IMPORTANT)
        $doctors = Doctor::all();

        // Counts (optional)
        $totalDepartments = Department::count();
        $totalDoctors = Doctor::count();
  
   

        return view('pages.home', compact(
            'hero',
            'departments',
            'doctors',            // 👈 ye add hona hi chahiye
          
            'totalDoctors'
        
     
        ));
    }
}
