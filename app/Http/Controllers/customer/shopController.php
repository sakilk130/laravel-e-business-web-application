<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function index(Request $req, $shopName)
    {
        $customer = $req->session()->get('customer');
        return view("customer.shop", compact('customer', 'shopName'));
    }

}
