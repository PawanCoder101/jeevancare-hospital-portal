<?php

use Illuminate\Support\Facades\Route;

// ================= ADMIN CONTROLLERS =================
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController as AdminDepartmentController;
use App\Http\Controllers\Admin\DoctorController as AdminDoctorController;
use App\Http\Controllers\Admin\AppointmentController as AdminAppointmentController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\HomeHeroController as AdminHomeHeroController;

// ================= FRONTEND CONTROLLERS =================
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;



// ================= ADMIN AUTH =================
Route::get('/admin/login', [AuthController::class, 'loginForm'])
    ->name('admin.login');

Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('admin.login.submit');

Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->name('admin.logout');



// ================= ADMIN PANEL =================
Route::middleware('admin')->prefix('admin')->group(function () {

    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    // Home Banner (Hero Section)
Route::get('home-hero', [AdminHomeHeroController::class, 'edit'])
    ->name('admin.home.hero'); // ✅ name matches error

Route::post('home-hero', [AdminHomeHeroController::class, 'update'])
    ->name('admin.home.hero.update');

    // Departments
    Route::resource('departments', AdminDepartmentController::class, [
        'as' => 'admin'
    ]);

    // Doctors
    Route::resource('doctors', AdminDoctorController::class, [
        'as' => 'admin'
    ]);

    // Appointments
    Route::resource('appointments', AdminAppointmentController::class, [
        'as' => 'admin'
    ]);

    // Contacts
    Route::resource('contacts', AdminContactController::class, [
        'as' => 'admin'
    ])->only(['index', 'destroy']);

});



// ================= FRONTEND =================
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/about', 'pages.about')->name('about');

Route::get('/departments', [DepartmentController::class, 'index'])
    ->name('departments');

Route::get('/doctors', [DoctorController::class, 'index'])
    ->name('doctors');

Route::get('/appointments', [AppointmentController::class, 'index'])
    ->name('appointments');

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');
