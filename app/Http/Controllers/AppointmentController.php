<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // Manage Appointments inserts, update, delete and index.

    function index() {
        $appointments = Appointment::get();

        return view('appointments', [
            'appointments' => $appointments
        ]);

    }

    function create() {
        $validated = request()->validate([
            "patient_dni" => ['required'],
            "doctor_dni" => ['required'],
            "hour" => ['required'],
            "date" => ['required'],
            "status" => ['required']
        ]);
        Appointment::create($validated);
        return redirect('/appointments');
    }

    function show($id) {
        if (!Appointment::find($id)) {
            return response('Not found', 404)
            ->header('Content-Type', 'text/plain');
        }

        return Appointment::find($id);
    }

    function destroy($id) {
        if (!Appointment::find($id)) {
            return response('Not found', 404)
            ->header('Content-Type', 'text/plain');
        }
        return response(Appointment::destroy($id));

    }
}

