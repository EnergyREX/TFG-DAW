<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    // Manage MedicalRecords inserts, update, delete and index.
    function index() {
        $medicalrecords = MedicalRecord::get();

        return view('medicalrecords.index', [
            'medicalrecords' => $medicalrecords
        ]);

    }
    function show($id) {
        if (!MedicalRecord::find($id)) {
            return response('Not found', 404)
            ->header('Content-Type', 'text/plain');
        }

        return MedicalRecord::find($id);
    }

    function edit($id) {
        if(!MedicalRecord::find($id)) {
            return response('Not found', 404)->header('Content-Type', 'response/json');
        } else {
            $medicalrecord = MedicalRecord::find($id);
            return view('medicalrecords.edit', [
                'medicalrecord' => $medicalrecord
            ]);
        }

        
    }

    function update($id) {
        $request = request()->validate([
            'patient_dni' => ['required'],
            'details' => ['required'],
        ]);

        $medicalrecord = MedicalRecord::find($id);
        
        $medicalrecord->patient_dni = request()->patient_dni;
        $medicalrecord->details = request()->details;

        $medicalrecord->save();

        return redirect('/medicalrecords');
    }

    function create() {
        $validated = request()->validate([
            "patient_dni" => ['required'],
            "details" => ['required'],
        ]);
        MedicalRecord::create($validated);
        return redirect('/medicalrecords');        
    }

    function destroy($id) {
        if (!MedicalRecord::find($id)) {
            return response('Not found', 404)
            ->header('Content-Type', 'text/plain');
        }
        return response(MedicalRecord::destroy($id));

    }
}
