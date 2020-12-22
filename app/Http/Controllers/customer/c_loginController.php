<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Requests\validCustomer;
use App\Http\Controllers\Controller;
use App\customerDB;

class c_loginController extends Controller
{
    public function index($shopName, Request $req)
    {
        $customer_err = $req->session()->get('customer_err');
        return view("customer.login", compact('shopName', 'customer_err'));


    }
    public function fromPost(validCustomer $req, $shopName)
    {

        $customerVarify =  customerDB::where('email', $req->customerEmail)
                                ->where('password', $req->customerPass)
                                ->get();
        
        if(count($customerVarify)>0){
            $customer = $customerVarify[0]['name'];
            $req->session()->put('customer', $customer);
            return redirect()->route('shop', $shopName);
        }
        else{
            $req->session()->flash('customer_err', '*Please use valid user');
            return redirect()->route('customer.login', $shopName);
        }

    }
}
