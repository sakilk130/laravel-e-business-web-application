<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function verify(Request $req){
        if($req->username == $req->password){
            $req->session()->put('username',$req->username);
            return redirect()->route('admin.index');
        }else{
            $req->session()->flash('msg','invalid username/password');
            return redirect()->route('login.login');
        }
    }
}
