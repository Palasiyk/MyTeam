<?php

namespace App\Http\Controllers;

use App\Models\Stat;
use App\Models\Team;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function index()
    {
        $stat = Stat::all();
//        dd($stat);
        return view('stat.index', compact('stat'));
    }

    public function show(Stat $id)
    {
        return view('stat.show', compact('id'));
    }

}
