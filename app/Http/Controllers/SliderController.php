<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\support\Str;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders= Slider::all();
        return view('backend.pages.slide_notice.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.slide_notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'slide_photo'=>'required',
        ]);

        $slider = new Slider();
        $slider->slug = Carbon::now().'-'.time();
        $slider->status = $request->status;
        if($request->hasFile('slide_photo')){
            $file = $request->file('slide_photo');
            $ext = $file->getClientOriginalExtension();
            $filename = uniqid().'.' .$ext;
            $file->move('admin/uploads/', $filename);
            $slider->slide_photo = 'admin/uploads/'.$filename;
        }
         $slider->save();
         return redirect()->route('slide.index')->with('success', 'Slide And Notice  Added Successfully');

         // return $request->all();



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider, $id)
    {
        $slider = Slider::find($id);
        if($slider){
            return view('backend.pages.slide_notice.edit', compact('slider'));
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        if($slider){
            if($request->hasFile('slide_photo')){
                $file = $request->file('slide_photo');
                $ext = $file->getClientOriginalExtension();
                $filename = uniqid().'.' .$ext;
                $file->move('admin/uploads/', $filename);
                $slider->slide_photo = 'admin/uploads/'.$filename;
            }
        }else{
            return back()->with('error','Slider Not Found');
        }
         $slider->update();
         return redirect()->route('slide.index')->with('success' ,'Slider Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider, $id)
    {
        $slider = slider::find($id);
        if($slider){
           $status= $slider->delete();
            if($status){
                return redirect()->route('slide.index')->with('success', 'Slider Delete Successfully');
            }else{
                return back()->with('error','Please Try Again');
            }
        }else{
            return back()->with('error','Data Not Faound');
        }
    }
}
