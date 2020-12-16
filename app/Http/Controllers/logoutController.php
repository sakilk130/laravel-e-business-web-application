<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function logout(){
        Session::forget('email');
        return redirect()->route('login.login');
    }
}
