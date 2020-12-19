<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        return view("customer.product");

    }
    // public function fromPost()
    // {
    //     return redirect("/shop");
    // }
}
