<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return Product::with('category', 'skus')->get();
    }

    public function store(Request $request) {
        return Product::create($request->all());
    }

    public function show($id) {
        return Product::with('category', 'skus')->findOrFail($id);
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return $product;
    }

    public function destroy($id) {
        Product::destroy($id);
        return response()->json(['success' => true]);
    }
}
