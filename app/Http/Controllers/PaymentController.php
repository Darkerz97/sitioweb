<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index() {
        return Payment::with('sale')->get();
    }

    public function store(Request $request) {
        return Payment::create($request->all());
    }

    public function show($id) {
        return Payment::with('sale')->findOrFail($id);
    }

    public function update(Request $request, $id) {
        $payment = Payment::findOrFail($id);
        $payment->update($request->all());
        return $payment;
    }

    public function destroy($id) {
        Payment::destroy($id);
        return response()->json(['success' => true]);
    }
}