<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Position;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //
    public function all() {

    return view('players', 
    ['players'=>Player::latest()->with('position')->get()
        ]
);
    }

    public  function show(Player $player){
        return view('player',[
            'player' => $player
        ]);
    }


}