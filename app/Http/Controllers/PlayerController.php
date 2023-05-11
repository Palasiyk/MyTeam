<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all()->count();
        $auth = Auth::user();
        $team = Team::all();
//        dd($team);
        return view('player.index', compact('users','auth', 'team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $id)
    {
//        dd($id);
//        $auth = Auth::user();
//        $team = Team::find(1);
//        $statistiks = $player -> stat;
//        dd($statistiks);
        return view('player.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $id)
    {
//        return view('player.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
