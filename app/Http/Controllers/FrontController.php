<?php

namespace App\Http\Controllers;

use App\Models\detail;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $details = detail::get();
        $slider = Slider::get();

        return view('users.home',compact('details'),compact('slider'));
    }
}
