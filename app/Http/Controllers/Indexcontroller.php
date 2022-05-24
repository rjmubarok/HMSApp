<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use App\Models\Order;
use App\Models\Slider;
use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    public function index(){
        $sliders = Slider::where(['status'=>1])->orderBy('id','DESC')->limit(4)->get();
        $floors = Floor::where(['status'=>1])->orderBy('id','DESC')->get();
        return view('frontend.pages.index', compact(['sliders','floors']));
    }
    public function applyeForSet(){
        return view('frontend.pages.orderforseat');
    }

public function storeorder(Request $request){
    $data= $request->all();
    $status = Order::create($data);
    if($status){
        // return redirect()->route('brand.index')->with('success','Brand Successfull Ceated');
    }else{
        return back()->with('error','someting is wrong');
    }
}


}
