<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminStoreRequest;
use App\Admin\Admin;

class loginController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function verify(AdminStoreRequest $req){

        $admin  = Admin::where('email', $req->email)->where('password', $req->password)->where('type','admin')->first();
        if($admin!=NULL){
            $req->session()->put('email',$req->email);
            $req->session()->put('type','admin');
            return response()->json(['error' => false,'success'=> true],200);
    	}else{
            // $req->session()->flash('msg','invalid username/password');
            return response()->json(['error' => true,'message'=> ['User Not Found !!!'],],401);
            return redirect()->route('login.login');
    	}
    }
}
