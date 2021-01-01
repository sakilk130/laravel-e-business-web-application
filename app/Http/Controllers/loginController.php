<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminStoreRequest;
use App\Admin;

class loginController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function verify(AdminStoreRequest $req){
        $admin  = Admin::where('email', $req->email)->where('password', $req->password)->first();

        if($admin != NULL){
            $req->session()->put('email',$req->email);
            return redirect()->route('admin.index');
    	}else{
            $req->session()->flash('msg','invalid username/password');
                return redirect()->route('login.login');
    	}
    }
}
