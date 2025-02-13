<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // Manage Role inserts, update, delete and index.
    function index() {
        $roles = Role::get();

        return view('roles.index', [
            'roles' => $roles
        ]);

    }

    function show($id) {
        if (!Role::find($id)) {
            return response('Not found', 404)
            ->header('Content-Type', 'text/plain');
        }

        return Role::find($id);
    }

    function getAll() {
        return Role::get();
    }

    function create() {
        $validated = request()->validate([
            "name" => ['required'],
        ]);
        Role::create($validated);
        return redirect('/roles');
    }

    function edit($id) {
        if(!Role::find($id)) {
            return response('Not found', 404)->header('Content-Type', 'response/json');
        } else {
            $role = Role::find($id);
            return view('roles.edit', [
                'role' => $role
            ]);
        }
    }

    

    function update($id) {
        $request = request()->validate([
            'name' => ['required'],
        ]);

        $role = Role::find($id);
        
        $role->name = request()->name;

        $role->save();

        return redirect('/roles');
    }

    function destroy($id) {
        if (!Role::find($id)) {
            return response('Not found', 404)
            ->header('Content-Type', 'text/plain');
        }
        return response(Role::destroy($id));

    }
}
