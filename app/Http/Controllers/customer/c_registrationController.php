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
    public function fromPost(Request $req)
    {
        $customerEmail = $req->customerEmail;
        $req->session()->put('customer', $customerEmail);
        return redirect()->route('shop');
    }
}
