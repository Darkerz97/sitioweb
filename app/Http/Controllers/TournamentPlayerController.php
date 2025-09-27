<?php

namespace App\Http\Controllers;

use App\Models\TournamentPlayer;
use Illuminate\Http\Request;

class TournamentPlayerController extends Controller
{
    public function index() {
        return TournamentPlayer::with('tournament', 'customer')->get();
    }

    public function store(Request $request) {
        return TournamentPlayer::create($request->all());
    }

    public function show($id) {
        return TournamentPlayer::with('tournament', 'customer')->findOrFail($id);
    }

    public function update(Request $request, $id) {
        $tp = TournamentPlayer::findOrFail($id);
        $tp->update($request->all());
        return $tp;
    }

    public function destroy($id) {
        TournamentPlayer::destroy($id);
        return response()->json(['success' => true]);
    }
}