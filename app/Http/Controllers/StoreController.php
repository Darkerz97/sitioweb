<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() {
        return Store::all();
    }

    public function store(Request $request) {
        return Store::create($request->all());
    }

    public function show($id) {
        return Store::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $store = Store::findOrFail($id);
        $store->update($request->all());
        return $store;
    }

    public function destroy($id) {
        Store::destroy($id);
        return response()->json(['success' => true]);
    }
}
