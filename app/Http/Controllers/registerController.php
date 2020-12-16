<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegRequest;
use Illuminate\Http\Request;
use App\Admin;

class registerController extends Controller
{
    public function register(){
        return view('register');
    }

    public function add_new_store(StoreRegRequest $req){
        $admin = new Admin();

        $admin->username= $req->username;
        $admin->email=$req->email;
        $admin->password= $req->password;
        $admin->phone=$req->phone;
        $admin->address=$req->address;
        $admin->registration_date=date("Y/m/d");
        $admin->shop_name=$req->store_name;

        if($admin->save()){
            return redirect()->route('login.login');
        }

    }
}
