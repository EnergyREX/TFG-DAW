<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    function index() {
        $inventories = Inventory::get();

        return view('inventories', [
            'inventories' => $inventories
        ]);

    }
    
    function show($id) {
        if (!Inventory::find($id)) {
            return response('Not found', 404)
            ->header('Content-Type', 'text/plain');
        }

        return Inventory::find($id);
    }

    function create() {
        $validated = request()->validate([
            "item_name" => ['required'],
            "description" => ['required'],
            "quantity" => ['required'],
        ]);
        Inventory::create($validated);
        return redirect('/inventories');        
    }

    function destroy($id) {
        if (!Inventory::find($id)) {
            return response('Not found', 404)
            ->header('Content-Type', 'text/plain');
        }
        return response(Inventory::destroy($id));

    }
}
