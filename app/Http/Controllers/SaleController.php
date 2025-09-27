<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index() {
        return Sale::with('items', 'payments', 'customer')->get();
    }

    public function store(Request $request) {
        return Sale::create($request->all());
    }

    public function show($id) {
        return Sale::with('items', 'payments', 'customer')->findOrFail($id);
    }

    public function update(Request $request, $id) {
        $sale = Sale::findOrFail($id);
        $sale->update($request->all());
        return $sale;
    }

    public function destroy($id) {
        Sale::destroy($id);
        return response()->json(['success' => true]);
    }
}