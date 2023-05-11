<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game_kup;
use App\Models\Game_playoff;
use App\Models\Game_r1;
use App\Models\Game_r2;
use App\Models\Game_r3;
use Illuminate\Http\Request;

class GameAdminController extends Controller
{
    public function index()
    {
        $PlayOffs = Game_playoff::all();
        $Kups = Game_kup::all();
        $Game1s = Game_r1::all();
        $Game2s = Game_r2::all();
        $Game3s = Game_r3::all();
//        $oponent = Oponent::all();
//        dd($oponent);

        return view('admin.games.games', compact('PlayOffs', 'Kups', 'Game3s', 'Game2s', 'Game1s'));
    }
}
