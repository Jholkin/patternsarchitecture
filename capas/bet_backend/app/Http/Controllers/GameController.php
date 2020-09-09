<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Hash;
use Illuminate\Support\Str;

class GameController extends Controller
{
    public function index()
    {
        return response()->json(Game::all(), 200);
    }

    public function getGame($id)
    {
        $game = Game::findOrFail($id);
        return response()->json($game, 200);
    }

    public function create(Request $request)
    {
        $game = Game::create([
            'title' => $request['title'],
            'cost' => $request['cost']
        ]);

        return response()->json($game, 201);
    }
}
