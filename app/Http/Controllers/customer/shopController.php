<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function index()
    {
        return view("customer.shop");
    }

}
