<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // Manage Role inserts, update, delete and index.
    function index() {
        return view('roles');
    }

    function show($id) {
        if (!Role::find($id)) {
            return response('Not found', 404)
            ->header('Content-Type', 'text/plain');
        }

        return Role::find($id);
    }

    function create() {
        $validated = request()->validate([
            "name" => ['required'],
        ]);
        Role::create($validated);
        dd($validated);
    }

    function destroy($id) {
        if (!Role::find($id)) {
            return response('Not found', 404)
            ->header('Content-Type', 'text/plain');
        }
        return response(Role::destroy($id));

    }
}
