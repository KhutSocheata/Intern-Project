<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create(Request $request)
    {
        $singer = new Singer;
        $singer->name = 'Cheata';
        $singer->age = 40;

        $singer->save();

        $song = Song::find([3, 4]);
        $singer->songs()->attach($song);

        return 'Success';
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function show(Singer $singer)
    {
        

    return view('backend.singers.show', compact('singer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function edit(Singer $singer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Singer $singer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Singer $singer)
    {
        //
    }
    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }
    public function removeSong(Singer $singer)
{
        $song = Song::find(3);

        $singer->songs()->detach($song);
        
        return 'Success';
}
}
