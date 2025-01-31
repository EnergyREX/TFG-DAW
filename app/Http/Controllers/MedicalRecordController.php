<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    // Manage MedicalRecords inserts, update, delete and index.
    function index() {
        $medicalrecords = MedicalRecord::get();

        return view('medical_records', [
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
