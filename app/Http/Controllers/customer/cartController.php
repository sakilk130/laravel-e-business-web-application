<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function index()
    {
        return view("customer.cart");

    }
    // public function fromPost()
    // {
    //     return redirect("/shop");
    // }
}
