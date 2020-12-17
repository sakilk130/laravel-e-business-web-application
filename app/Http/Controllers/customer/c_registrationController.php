<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class c_registrationController extends Controller
{
    public function index()
    {
        return view("customer.register");

    }
    public function fromPost()
    {
        return redirect("/shop");
    }
}
