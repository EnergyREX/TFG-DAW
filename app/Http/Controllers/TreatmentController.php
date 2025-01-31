<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    // Manage Treatment inserts, update, delete and index.
    function index() {
        return view('treatments');
    }

    function show($id) {
        if (!Treatment::find($id)) {
            return response('Not found', 404)
            ->header('Content-Type', 'text/plain');
        }

        return Treatment::find($id);
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
