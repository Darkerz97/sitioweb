<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index() {
        return Tournament::with('players')->get();
    }

    public function store(Request $request) {
        return Tournament::create($request->all());
    }

    public function show($id) {
        return Tournament::with('players')->findOrFail($id);
    }

    public function update(Request $request, $id) {
        $tournament = Tournament::findOrFail($id);
        $tournament->update($request->all());
        return $tournament;
    }

    public function destroy($id) {
        Tournament::destroy($id);
        return response()->json(['success' => true]);
    }
}