<?php

namespace App\Http\Controllers;

use App\Models\Sku;
use Illuminate\Http\Request;

class SkuController extends Controller
{
    public function index() {
        return Sku::with('product')->get();
    }

    public function store(Request $request) {
        return Sku::create($request->all());
    }

    public function show($id) {
        return Sku::with('product')->findOrFail($id);
    }

    public function update(Request $request, $id) {
        $sku = Sku::findOrFail($id);
        $sku->update($request->all());
        return $sku;
    }

    public function destroy($id) {
        Sku::destroy($id);
        return response()->json(['success' => true]);
    }
}