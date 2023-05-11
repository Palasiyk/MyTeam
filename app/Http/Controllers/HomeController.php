<?php

namespace App\Http\Controllers;

use App\Models\Game_playoff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $PlayOffs = Game_playoff::all();
//        dd($PlayOffs);
        return view('index', compact('PlayOffs'));
    }
}
