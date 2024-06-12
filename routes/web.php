<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\LaboratoryResultController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LaboratoryServiceController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\QueueController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Auth::routes();

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// User Management Routes (Admin only)
Route::resource('users', AdminController::class)->middleware(['auth', 'role:admin']);

// Patient Management Routes (Admin and Physician)
Route::resource('patients', PatientController::class)->middleware(['auth', 'role:admin|physician|front desk']);

// Appointment Routes (Admin, Physician, and Front Desk)
Route::resource('appointments', AppointmentController::class)->middleware(['auth', 'role:admin|physician|front desk']);

// Laboratory Results Routes (Admin, Radiologist, and Medical Technologist)
Route::resource('laboratory_results', LaboratoryResultController::class)->middleware(['auth', 'role:admin|radiologist|medical technologist']);

// Payment Routes (Admin and Pharmacy Staff)
Route::resource('payments', PaymentController::class)->middleware(['auth', 'role:admin|pharmacy staff']);

// Laboratory Services Routes (Admin only)
Route::resource('laboratory_services', LaboratoryServiceController::class)->middleware(['auth', 'role:admin']);

// Transaction Routes (Admin and Pharmacy Staff)
Route::resource('transactions', TransactionController::class)->middleware(['auth', 'role:admin|pharmacy staff|front desk']);

// Queue Routes (Admin and Front Desk)
Route::resource('queues', QueueController::class)->middleware(['auth', 'role:admin|front desk']);

// Profile Routes (Authenticated Users)
Route::resource('profiles', ProfileController::class)->middleware('auth');

require __DIR__.'/auth.php';
