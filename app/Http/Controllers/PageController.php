<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('home');
    }
    public function aboutus(){
        return view('aboutus');
    }
    public function contact(){
        return view('contact');
    }
}
