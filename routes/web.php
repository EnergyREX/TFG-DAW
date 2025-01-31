<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TreatmentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [SessionController::class, 'index']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);


// Appointments controller routes
Route::controller(AppointmentController::class)->group(function() {
    Route::get('/appointments', 'index');
    Route::get('/appointments/{id}', 'show');
    Route::post('/appointments', 'create');
    Route::delete('/appointments/{id}', 'destroy');
});

// Inventory controller routes
Route::controller(InventoryController::class)->group(function() {
    Route::get('/inventories', 'index');
    Route::get('/inventories/{id}', 'show');
    Route::post('/inventories', 'create');
    Route::delete('/inventories/{id}', 'destroy');
});

// MedicalRecord controller routes
Route::controller(MedicalRecordController::class)->group(function() {
    Route::get('/medicalrecords', 'index');
    Route::get('/medicalrecords/{id}', 'show');
    Route::post('/medicalrecords', 'create');
    Route::delete('/medicalrecord/{id}', 'destroy');
});

// Role controller routes
Route::controller(RoleController::class)->group(function() {
    Route::get('/roles', 'index');
    Route::get('/roles/{id}', 'show');
    Route::post('/roles', 'create');
    Route::delete('/roles/{id}', 'destroy');
});

// Treatment controller routes
Route::controller(TreatmentController::class)->group(function() {
    Route::get('/treatments', 'index');
    Route::get('/treatments/{id}', 'show');
    Route::post('/treatments', 'create');
    Route::delete('/treatments/{id}', 'destroy');
});