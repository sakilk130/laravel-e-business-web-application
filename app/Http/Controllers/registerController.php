<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegRequest;
use Illuminate\Http\Request;


class registerController extends Controller
{
    public function register(){
        return view('register');
    }

    public function add_new_store(StoreRegRequest $req){
        $store_name=$req->store_name;
        $username=$req->username;
        $email=$req->email;
        $phone=$req->phone;
        $address=$req->address;
        $password=$req->password;
        return redirect()->route('login.login');
    }
}
