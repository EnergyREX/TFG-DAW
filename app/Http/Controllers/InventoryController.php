<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    function index() {
        return view('inventories');
    }
    
    function show($id) {
        if (!Inventory::find($id)) {
            return response('Not found', 404)
            ->header('Content-Type', 'text/plain');
        }

        return Inventory::find($id);
    }

    function create() {
        
    }

    function destroy($id) {
        if (!Inventory::find($id)) {
            return response('Not found', 404)
            ->header('Content-Type', 'text/plain');
        }
        return response(Inventory::destroy($id));

    }
}
