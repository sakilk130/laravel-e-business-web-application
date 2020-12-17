<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class c_loginController extends Controller
{
    public function index()
    {
        return view("customer.login");

    }
    public function fromPost()
    {
        return redirect("/shop");
    }
}
