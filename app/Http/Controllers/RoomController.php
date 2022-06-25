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
            'description' => 'string|nullable',
            'floor_id' => 'required',
        ]);

        $room = new room();
        $room->slug = $request->room_name.'-'.time();
        $room->floor_id = $request->floor_id;
        $room->room_name = $request->room_name;
        $room->room_number = $request->room_number;
        $room->price = $request->price;
        $room->total_bed = $request->total_bed;
        $room->abailable_bed = $request->abailable_bed;
        $room->description = $request->description;
        $room->status = $request->status;
        if($request->hasFile('room_photo')){
            $file = $request->file('room_photo');
            $ext = $file->getClientOriginalExtension();
            $filename = uniqid().'.' .$ext;
            $file->move('admin/uploads/', $filename);
            $room->room_photo = 'admin/uploads/'.$filename;
        }
         $room->save();
         return redirect()->route('room.index')->with('success', 'Floor  Added Successfully');

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
        if($room){
            $this->validate($request, [
                'room_name' => 'required',
                'room_number' => 'required',
                'room_photo' => 'required',
                'description' => 'string|nullable',
                'floor_id' => 'required|nullable',

            ]);
            if($room){
                $room->floor_id = $request->floor_id;
                $room->room_name = $request->room_name;
                $room->room_number = $request->room_number;
                $room->price = $request->price;
                $room->total_bed = $request->total_bed;
                $room->abailable_bed = $request->abailable_bed;
                $room->description = $request->description;
                $room->status = $request->status;
                if($request->hasFile('room_photo')){
                    $file = $request->file('room_photo');
                    $ext = $file->getClientOriginalExtension();
                    $filename = uniqid().'.' .$ext;
                    $file->move('admin/uploads/', $filename);
                    $room->room_photo = 'admin/uploads/'.$filename;
                }
                $room->update();
                return redirect()->route('room.index')->with('success' ,'Room Update Successfully');
        }else{
            return back()->with('error','Data Not Faound');
        }
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = room::find($id);
        if($room){
           $status= $room->delete();
            if($status){
                return redirect()->route('room.index')->with('success', 'Room Delete Successfully');
            }else{
                return back()->with('error','Please Try Again');
            }
        }else{
            return back()->with('error','Data Not Faound');
        }
    }
}
