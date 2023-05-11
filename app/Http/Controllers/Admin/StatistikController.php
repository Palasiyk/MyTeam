<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stat;
use Illuminate\Http\Request;

class StatistikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stat = Stat::all();
//        dd($stat);
        return view('admin.stat.index', compact('stat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stat = Stat::all();
        return view('admin.stat.create', compact('stat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request = request()->validate([
            'PlayerName'=>'string',
            'namber'=>'',
            'PlayedSet'=>'',
            'TotPoint'=>'',
            'TotServ'=>'',
            'AceServ'=>'',
            'ErrServ'=>'',
            'TotRes'=>'',
            'ErrRes'=>'',
            'NegRes'=>'',
            'ExcRes'=>'',
            'TotAtac'=>'',
            'ErrAtac'=>'',
            'BlkAtec'=>'',
            'ExcAtec'=>'',
            'Block'=>'',
            'More'=>'',
        ]);
//        dd($request);
        Stat::create($request);
        return redirect()->route('statAdminPlayer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stat $id)
    {
        return view('admin.stat.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stat $id)
    {
        return view('admin.stat.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stat $id)
    {
        $request -> validate([
            'PlayerName'=>'string',
            'namber'=>'',
            'PlayedSet'=>'',
            'TotPoint'=>'',
            'TotServ'=>'',
            'AceServ'=>'',
            'ErrServ'=>'',
            'TotRes'=>'',
            'ErrRes'=>'',
            'NegRes'=>'',
            'ExcRes'=>'',
            'TotAtac'=>'',
            'ErrAtac'=>'',
            'BlkAtec'=>'',
            'ExcAtec'=>'',
            'Block'=>'',
            'More'=>'',
        ]);
        $id->fill($request->post())->update();
        return redirect()->route('showStatPlayer', $id->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stat $id)
    {
        $id->delete();
        return redirect()->route('statAdminPlayer');
    }
}
