<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notice= Notice::all();
        return view('backend.pages.notice.index', compact('notice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.notice.create');
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
            'notice'=>'required',

        ]);

        $data = $request->all();
        $notice = notice::create($data);
        if($notice){
            return redirect()->route('notice.index')->with('success', ' Notice  Added Successfully');
        }else{
            return back()->with('error', 'Something went Wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::find($id);
        if($notice){
            return view('backend.pages.notice.edit', compact('notice'));
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $notice = Notice::find($id);
        if($notice){

            $this->validate($request,[
                'notice'=>'required',
            ]);
            $data = $request->all();
            $notice = $notice->fill($data)->save();
            if($notice){
                return redirect()->route('notice.index')->with('success', 'notice Update Successfully');
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
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);
        if($notice){
           $status= $notice->delete();
            if($status){
                return redirect()->route('notice.index')->with('success', 'Notice Delete Successfully');
            }else{
                return back()->with('error','Please Try Again');
            }
        }else{
            return back()->with('error','Data Not Faound');
        }
    }
}
