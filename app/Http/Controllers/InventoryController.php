<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    function index() {
        $inventories = Inventory::get();

        return view('inventories.index', [
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

    function edit($id) {
        if(!Inventory::find($id)) {
            return response('Not found', 404)->header('Content-Type', 'response/json');
        } else {
            $inventory = Inventory::find($id);
            return view('inventories.edit', [
                'inventory' => $inventory
            ]);
        }
    }

    function update($id) {
        $request = request()->validate([
            "item_name" => ['required'],
            "description" => ['required'],
            "quantity" => ['required'],
        ]);

        $inventories = Inventory::find($id);
        
        $inventories->item_name = request()->item_name;
        $inventories->description = request()->description;
        $inventories->quantity = request()->quantity;

        $inventories->save();

        
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
