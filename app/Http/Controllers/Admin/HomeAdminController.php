<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game_playoff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeAdminController extends Controller
{
    public function index(){
        $users = User::all()->count();
        $PlayOffs = Game_playoff::all();
//        dd($PlayOffs);
//        dd($users);
//        $auth = Auth::user();
//        dd($auth);
        return view('admin.home.index', compact('users','PlayOffs' ));
    }
}
