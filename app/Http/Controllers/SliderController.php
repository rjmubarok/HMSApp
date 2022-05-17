<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
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
         // return $request->all();
         $this->validate($request,[
            'notice'=>'required',
            'slide_photo'=>'required',

        ]);

        $data = $request->all();
        $slug = Str::slug($request->input('notice').'-'.time());
         Slider::where('slug', $slug);
       $data['slug'] = $slug;
        $slider = Slider::create($data);
        if($slider){
            return redirect()->route('slide-notice.index')->with('success', 'Slide And Notice  Added Successfully');
        }else{
            return back()->with('error', 'Something went Wrong');
        }
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

            $this->validate($request,[
                'notice'=>'required',
            'slide_photo'=>'required',

            ]);
            $data = $request->all();
            $slider = $slider->fill($data)->save();
            if($slider){
                return redirect()->route('slide-notice.index')->with('success', 'Slider Update Successfully');
            }else{
                return back()->with('error', 'Something went Wrong');
            }



        }else{
            return back()->with('error','Data Not Faound');
        }
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
                return redirect()->route('slide-notice.index')->with('success', 'Slider Delete Successfully');
            }else{
                return back()->with('error','Please Try Again');
            }
        }else{
            return back()->with('error','Data Not Faound');
        }
    }
}
