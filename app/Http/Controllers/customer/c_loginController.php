<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Requests\validCustomer;
use App\Http\Controllers\Controller;

class c_loginController extends Controller
{
    public function index()
    {
        return view("customer.login");

    }
    public function fromPost(validCustomer $req)
    {
        $customerEmail = $req->customerEmail;
        $req->session()->put('customer', $customerEmail);

        return redirect()->route('shop');

    }
}
