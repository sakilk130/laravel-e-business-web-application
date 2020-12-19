<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\customerRegistration;


class c_registrationController extends Controller
{
    public function index()
    {
        return view("customer.register");

    }
    public function fromPost(customerRegistration $req)
    {
        $customerEmail = $req->customerEmail;
        $req->session()->put('customer', $customerEmail);
        return redirect()->route('shop');
    }
}
