<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use App\Models\Order;
use App\Models\room;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Indexcontroller extends Controller
{
    public function index(){
        $sliders = Slider::where(['status'=>1])->orderBy('id','DESC')->limit(4)->get();
        $floors = Floor::where(['status'=>1])->orderBy('id','DESC')->get();
        return view('frontend.pages.index', compact(['sliders','floors']));
    }
    public function applyeForSet(){
        $rooms=room::where('status',1)->orderBy('id','DESC')->get();
        $floors=Floor::where('status',1)->orderBy('id','DESC')->get();
        return view('frontend.pages.orderforseat', compact(['rooms','floors']));
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

public function aboute(){
    return view('frontend.pages.aboute');
}
public function contact(){
    return view('frontend.pages.contact');
}
public function floorMember($slug){
 Auth::check();
    $floor = Floor::where('slug', $slug)->first();
    if($floor && $floor->slug == $slug){
        $members=  Order::where('floor_id',$floor->id)->get();
       // return $members;
        return view('frontend.pages.floormember', compact(['members','floor']));
    }else{
        return back();
    }
}
public function MemberView($id){
  //  return $id;
  $member=Order::where('id', $id)->with('room','floor')->first();
 // return $member;
  if($member){
    return view('frontend.pages.memberview', compact('member'));
  }else{
      return back()->with('error','Page Cant Open at the moment Please Try again !');
  }

}

}
