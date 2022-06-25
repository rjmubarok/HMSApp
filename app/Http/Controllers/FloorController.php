<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $floors = Floor::all();
        return view('backend.pages.floors.index', compact('floors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.floors.create');
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
            'floor_name' => 'required',
            'floor_photo' => 'required',
            'total_room' => 'required|numeric',
            'floor_no' => 'required|numeric',

        ]);
        $floor = new Floor();
        $floor->slug = $request->floor_name.'-'.time();
        $floor->floor_name = $request->floor_name;
        $floor->total_room = $request->total_room;
        $floor->floor_description = $request->floor_description;
        $floor->floor_no = $request->floor_no;
        $floor->status = $request->status;
        if($request->hasFile('floor_photo')){
            $file = $request->file('floor_photo');
            $ext = $file->getClientOriginalExtension();
            $filename = uniqid().'.' .$ext;
            $file->move('admin/uploads/', $filename);
            $floor->floor_photo = 'admin/uploads/'.$filename;
        }
         $floor->save();
         return redirect()->route('floor.index')->with('success', 'Floor  Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function show(Floor $floor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $floor = Floor::find($id);
        if ($floor) {
            return view('backend.pages.floors.edit', compact('floor'));
        } else {
            return back()->with('error', 'Something wrong');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $floor = Floor::find($id);
        if($floor){
            $this->validate($request, [
                'floor_name' => 'required',
                'total_room' => 'required|numeric',
                'floor_no' => 'required|numeric',

            ]);
            if($floor){
                $floor->floor_name = $request->floor_name;
                $floor->total_room = $request->total_room;
                $floor->floor_description = $request->floor_description;
                $floor->floor_no = $request->floor_no;
                $floor->status = $request->status;
                if($request->hasFile('floor_photo')){
                    $file = $request->file('floor_photo');
                    $ext = $file->getClientOriginalExtension();
                    $filename = uniqid().'.' .$ext;
                    $file->move('admin/uploads/', $filename);
                    $floor->floor_photo = 'admin/uploads/'.$filename;
                }
                $floor->update();
                return redirect()->route('floor.index')->with('success' ,'Floor Update Successfully');
        }else{
            return back()->with('error','Data Not Faound');
        }
    }
}


    public function destroy($id)
    {
        $floor = Floor::find($id);
        if($floor){
           $status= $floor->delete();
            if($status){
                return redirect()->route('floor.index')->with('success', 'Floor Delete Successfully');
            }else{
                return back()->with('error','Please Try Again');
            }
        }else{
            return back()->with('error','Data Not Faound');
        }
    }
}
