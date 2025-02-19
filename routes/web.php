<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolesPermissions;
use App\Http\Controllers\RolesPermissionsController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TreatmentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);


Route::middleware('auth')->group(function() {
    // Appointments controller routes
    Route::controller(AppointmentController::class)->group(function() {
        Route::get('/appointments', 'index')->middleware('permission:view_appointments');
        Route::get('/appointments/{id}', 'show')->middleware('permission:view_appointments');
        Route::get('/appointments/api/all', 'getAll')->middleware('permission:api_all_appointments');
        Route::get('/appointments/{id}/edit', 'edit')->middleware('permission:edit_appointments');
        Route::patch('/appointments/{id}', 'update')->middleware('permission:edit_appointments');
        Route::post('/appointments', 'create')->middleware('permission:new_appointments');
        Route::delete('/appointments/{id}', 'destroy')->middleware('permission:delete_appointments');
    });

    // Inventory controller routes
    Route::controller(InventoryController::class)->group(function() {
        Route::get('/inventories', 'index')->middleware('permission:view_inventories');
        Route::get('/inventories/{id}', 'show')->middleware('permission:view_inventories');
        Route::get('/inventories/api/all', 'getAll')->middleware('permission:api_all_inventories');
        Route::get('/inventories/{id}/edit', 'edit')->middleware('permission:edit_inventories');
        Route::patch('/inventories/{id}', 'update')->middleware('permission:edit_inventories');
        Route::post('/inventories', 'create')->middleware('permission:new_inventories');
        Route::delete('/inventories/{id}', 'destroy')->middleware('permission:delete_inventories');
    });

    // MedicalRecord controller routes
    Route::controller(MedicalRecordController::class)->group(function() {
        Route::get('/medicalrecords', 'index')->middleware('permission:view_medicalrecords');
        Route::get('/medicalrecords/{id}', 'show')->middleware('permission:view_medicalrecords');
        Route::get('/medicalrecords/api/all', 'getAll')->middleware('permission:api_all_medicalrecords');
        Route::get('/medicalrecords/{id}/edit', 'edit')->middleware('permission:edit_medicalrecords');
        Route::patch('/medicalrecords/{id}', 'update')->middleware('permission:edit_medicalrecords');
        Route::post('/medicalrecords', 'create')->middleware('permission:new_medicalrecords');
        Route::delete('/medicalrecords/{id}', 'destroy')->middleware('permission:delete_medicalrecords');
    });

    // Role controller routes
    Route::controller(RoleController::class)->group(function() {
        Route::get('/roles', 'index')->middleware('permission:view_roles');
        Route::get('/roles/{id}', 'show')->middleware('permission:view_roles');
        Route::get('/roles/api/all', 'getAll')->middleware('permission:api_all_roles');
        Route::get('/roles/{id}/edit', 'edit')->middleware('permission:edit_roles');
        Route::patch('/roles/{id}', 'update')->middleware('permission:edit_roles');
        Route::post('/roles', 'create')->middleware('permission:new_roles');
        Route::delete('/roles/{id}', 'destroy')->middleware('permission:delete_roles');
    });

    // Treatment controller routes
    Route::controller(TreatmentController::class)->group(function() {
        Route::get('/treatments', 'index')->middleware('permission:view_treatments');
        Route::get('/treatments/{id}', 'show')->middleware('permission:view_treatments');
        Route::get('/treatments/api/all', 'getAll')->middleware('permission:api_all_treatments');
        Route::get('/treatments/{id}/edit', 'edit')->middleware('permission:edit_treatments');
        Route::patch('/treatments/{id}', 'update')->middleware('permission:edit_treatments');
        Route::post('/treatments', 'create')->middleware('permission:new_treatments');
        Route::delete('/treatments/{id}', 'destroy')->middleware('permission:delete_treatments');
    });
});