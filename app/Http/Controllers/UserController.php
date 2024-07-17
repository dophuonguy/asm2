<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Mail;
class UserController extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function register(){
        return view('login.register');
    }
    public function postRegister(Request $req){
        // Validate
        //Hash::make($req->password);
        $req->merge(['password' => Hash::make($req->password)]);
        try {
            User::create($req->all());
        } catch (\Throwable $th) {
            
        }
        return redirect()->route('login');
    }
    public function postLogin(Request $req){
        
        if(Auth::attempt(['name'=> $req->name,'password'=> $req->password])){
            return redirect()->route('index');
        }
        return redirect()->back()->with('error', 'sai');

        
    }
    public function logout(){
        Auth::logout();
        return redirect()->back();

        
    }

    public function forget(){
        return view('login.forget');
    }
}
