<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all()->count();
        $auth = Auth::user();
        $team = Team::all();
//        dd($player);
        return view('admin.team.index', compact('users','auth', 'team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $auth = Auth::user();
        return view('admin.team.create', compact('auth'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name'=>'',
            'namber'=>'',
            'position'=>'',
            'nacionality'=>'',
            'bith_place'=>'',
            'byrthday'=>'',
            'insta'=>'',
            'height'=>'',
            'weight'=>'',
            'jump'=>'',
            'image'=>'',
        ]);
        Team::create($data);
        return redirect()->route('teamPlayer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $id, User $model)
    {
        $auth = Auth::user();
        $team = Team::all();
        return view('admin.team.show', compact('id','team', 'model', 'auth'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $id)
    {
        return view('admin.team.edit', compact('id'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $id)
    {
        $request -> validate([
            'name'=>'',
            'namber'=>'',
            'position'=>'',
            'nacionality'=>'',
            'bith_place'=>'',
            'byrthday'=>'',
            'insta'=>'',
            'height'=>'',
            'weight'=>'',
            'jump'=>'',
            'image'=>'',
        ]);
//        dd($request);
        $id->fill($request->post())->update();
        return redirect()->route('showPlayer', $id->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $id)
    {
        $id->delete();
        return redirect()->route('teamPlayer');
    }
}
