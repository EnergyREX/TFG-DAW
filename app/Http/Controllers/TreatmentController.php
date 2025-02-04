<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    // Manage Treatment inserts, update, delete and index.
    function index() {
        $treatments = Treatment::get();

        return view('treatments.index', [
            'treatments' => $treatments
        ]);

    }
    function create() {
        $validated = request()->validate([
            "name" => ['required'],
            "description" => ['required']
        ]);
        Treatment::create($validated);
        return redirect('/treatments');
    }

    function show($id) {
        if (!Treatment::find($id)) {
            return response('Not found', 404)
            ->header('Content-Type', 'text/plain');
        }

        return Treatment::find($id);
    }

    function edit($id) {
        if(!Treatment::find($id)) {
            return response('Not found', 404)->header('Content-Type', 'response/json');
        } else {
            $treatment = Treatment::find($id);
            return view('treatments.edit', [
                'treatment' => $treatment
            ]);
        }

        
    }

    function update($id) {
        $request = request()->validate([
            'name' => ['required'],
            'description' => ['required'],
        ]);

        $treatment = Treatment::find($id);
        
        $treatment->name = request()->name;
        $treatment->description = request()->description;

        $treatment->save();

        return redirect('/treatments');
    }

    function destroy($id) {
        if (!Treatment::find($id)) {
            return response('Not found', 404)
            ->header('Content-Type', 'text/plain');
        } else {
            return response(Treatment::destroy($id));
        }
    }
}
