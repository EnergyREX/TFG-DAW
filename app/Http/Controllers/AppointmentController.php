<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // Manage Appointments inserts, update, delete and index.

    function index() {
        $appointments = Appointment::join('users as patients', 'appointments.patient_dni', '=', 'patients.dni')
        ->join('users as doctors', 'appointments.doctor_dni', '=', 'doctors.dni')
        ->select(
            'appointments.*',
            'patients.name as patient_name',
            'doctors.name as doctor_name'
        )
        ->get();
        
        return view('appointments.index', [
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

    function edit($id) {
        if(!Appointment::find($id)) {
            return response('Not found', 404)->header('Content-Type', 'response/json');
        } else {
            $appointment = Appointment::find($id);
            return view('appointments.edit', [
                'appointments' => $appointment
            ]);
        }
    }

    function update($id) {
        $request = request()->validate([
            "hour" => ['required'],
            "date" => ['required'],
            "status" => ['required']
        ]);

        $appointment = Appointment::find($id);
        
        $appointment->hour = request()->hour;
        $appointment->date = request()->date;
        $appointment->status = request()->status;

        $appointment->save();

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

