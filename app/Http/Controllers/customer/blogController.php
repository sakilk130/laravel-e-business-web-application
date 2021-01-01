<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index($shopName)
    {
        return view("customer.blog");

    }
}
