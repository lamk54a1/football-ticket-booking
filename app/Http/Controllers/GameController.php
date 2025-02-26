<?php
namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Stand;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        // Lấy tất cả các trận đấu
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function show($id)
    {
        // Lấy trận đấu chi tiết theo ID
        $game = Game::findOrFail($id);

        // Lấy các khán đài tương ứng với trận đấu
        $stands = Stand::where('game_id', $id)->get();

        return view('games.show', compact('game', 'stands'));
    }
}
