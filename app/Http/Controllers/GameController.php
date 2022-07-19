<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Move;

class GameController extends Controller
{
    public function landing(){
        return view('landing');
    }

    public function create(Request $request){
        $game = Game::create([
            'colors' => $request->post('colors'),
            'result' => GAME::RESULT_WON,
        ]);
        return "your game has been created with id :".$game->id;
    }

    public function enter(Request $request){
        $id = intval($request->post("game_id")) ?? session('game_id');
        session('game_id',$id);
        $moves = Game::find($id);
        $moves = $moves->moves;
        return view('board',['moves'=>$moves,'game_id'=>$id]);
    }

    public function move(Request $request){
        $id = intval($request->post("game_id")) ?? session('game_id');
        Move::create([
            'game_id' => $id,
            'colors' => $request->post('colors'),
        ]);
        $moves = Game::find(session('game_id'));
        $moves = $moves;
        return view('board',['moves'=>$moves,'game_id'=>$id]);
    }
}
