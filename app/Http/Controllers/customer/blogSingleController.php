<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blogSingleController extends Controller
{
    public function index()
    {
        return view("customer.blogSingle");

    }
    // public function fromPost()
    // {
    //     return redirect("/shop");
    // }
}
