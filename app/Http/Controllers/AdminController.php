<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin(){
        if(Auth::user()->role=='admin'){
            return view('backend.pages.dashboard');
        }else{
            return redirect('login');
        }

    }
}
