<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use App\Models\room;
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
        $rooms = room::all();
        return view('backend.pages.rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $floors = Floor::where('status', 1)->get();
        return view('backend.pages.rooms.create', compact('floors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
            'room_name' => 'required',
            'room_number' => 'required',
            'room_photo' => 'string|nullable',
            'description' => 'string|nullable',
            'floor_id' => 'required|nullable',

        ]);

        $data = $request->all();
        $room = room::create($data);
        if ($room) {
            return redirect()->route('room.index')->with('success', 'Room  Added Successfully');
        } else {
            return back()->with('error', 'Something went Wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $room = room::find($id);
        $floors = Floor::where('status', 1)->get();
        if ($room) {
            return view('backend.pages.rooms.edit', compact(['room', 'floors']));
        } else {
            return back()->with('error', 'something went wrong ');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $room = room::find($id);

        if ($room) {
            $this->validate($request, [
                'room_name' => 'required',
                'room_number' => 'required',
                'room_photo' => 'string|nullable',
                'description' => 'string|nullable',
                'floor_id' => 'required|nullable',

            ]);
            $data = $request->all();
            $room = $room->fill($data)->save();
            if ($room) {
                return redirect()->route('room.index')->with('success', 'Room Update Successfully');
            } else {
                return back()->with('error', 'Something went Wrong');
            }
        } else {
            return back()->with('error', 'Data Not Faound');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(room $room)
    {
        //
    }
}
