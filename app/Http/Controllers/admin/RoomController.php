<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Room;
use Illuminate\Http\Request;


class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::paginate(3);
        return view('backend.rooms.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required',
            'floor' => 'required',
            'number_room' => 'required',
            'bed' => 'required',
            'bathroom' => 'required',
            'size' => 'required',
            'nearby' => 'required'
        ]);
    
        Room::create($request->all());
     
        return redirect()->route('rooms.index')
                        ->with('success','Room created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('backend.rooms.show',compact('room'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('backend.rooms.edit',compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $request->validate([
            'price' => 'required',
            'floor' => 'required',
            'number_room' => 'required',
            'bed' => 'required',
            'bathroom' => 'required',
            'size' => 'required',
            'nearby' => 'required'
        ]);
    
        $room->update($request->all());
    
        return redirect()->route('rooms.index')
                        ->with('success','Room updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
    
        return redirect()->route('rooms.index')
                        ->with('success','Room deleted successfully');
    }
}
