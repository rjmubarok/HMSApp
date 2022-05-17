<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    public function index(){
        $sliders = Slider::where(['status'=>1])->orderBy('id','DESC')->limit(4)->get();
        return view('frontend.pages.index', compact('sliders'));
    }
}
