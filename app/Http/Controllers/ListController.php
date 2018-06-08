<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function show()
    {
        $characters = Game::all();
        return view('welcome')->withCharacters($characters);
    }

    public function add(Request $request)
    {
        $character = new Game();
        $character->character = $request->input('character');
        $character->real_name = $request->input('real_name');
        $character->save();

        return 'add character: '.$character->character.' real name: '.$character->real_name.' id: '.$character->id;
    }

}