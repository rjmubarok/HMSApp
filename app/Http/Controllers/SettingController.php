<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setting()
    {
        $setting = Setting::first();
        return view('backend.pages.settings.settings', compact('setting'));
    }
    public function setingUpdate(Request $request)
    {
        //dd($request->all());
        $setting = Setting::first();
    //     $status = $setting->update([
    //         'title'=>$request->title,
    //         'meta_description'=>$request->meta_description,
    //         'meta_keywords'=>$request->meta_keywords,
    //         'logo'=>$request->logo,
    //         'favicon'=>$request->favicon,
    //         'address'=>$request->address,
    //         'phone'=>$request->phone,
    //         'footer'=>$request->footer,
    //         'side_photo'=>$request->side_photo,
    //         'side_title'=>$request->side_title,
    //         'side_description'=>$request->side_description,
    //     ]);
    //    if($status){
    //        return back()->with('success', 'Setting Update Successfully');
    //    }else{
    //     return back()->with('error', 'Something went wrong !!');
    //    }
    if($setting){
        $setting->title = $request->title;
        $setting->meta_description = $request->meta_description;
        $setting->meta_description = $request->meta_description;
        $setting->meta_keywords = $request->meta_keywords;
        $setting->address = $request->address;
        $setting->phone = $request->phone;
        $setting->side_title = $request->side_title;
        $setting->footer = $request->footer;
        $setting->side_description = $request->side_description;

        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $ext = $file->getClientOriginalExtension();
            $filename = uniqid().'.' .$ext;
            $file->move('admin/uploads/', $filename);
            $setting->logo = 'admin/uploads/'.$filename;
        }
        if($request->hasFile('side_photo')){
            $file = $request->file('side_photo');
            $ext = $file->getClientOriginalExtension();
            $filename = uniqid().'.' .$ext;
            $file->move('admin/uploads/', $filename);
            $setting->side_photo = 'admin/uploads/'.$filename;
        }
        if($request->hasFile('favicon')){
            $file = $request->file('favicon');
            $ext = $file->getClientOriginalExtension();
            $filename = uniqid().'.' .$ext;
            $file->move('admin/uploads/', $filename);
            $setting->favicon = 'admin/uploads/'.$filename;
        }
        $setting->update();
        return redirect()->route('setting')->with('success' ,'Setting Update Successfully');
    }else{
        return back()->with('error','Setting Not Found');
    }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
