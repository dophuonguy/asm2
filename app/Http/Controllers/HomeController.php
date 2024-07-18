<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.layouts.home');
    }
    public function contact(){
        return view('home.contact');
    }
    public function details(){
        return view('home.post-details');
    }
    public function profile(){
        return view('home.profile');
    }
}
