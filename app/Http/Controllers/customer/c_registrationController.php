<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\customerRegistration;
use App\customerDB;
use Carbon\Carbon;

class c_registrationController extends Controller
{
    public function index($shopName)
    {
        return view("customer.register", compact('shopName'));
  
    }
    public function fromPost(customerRegistration $req, $shopName)
    {
       
        if($req->hasFile('image')){
            
            $image = $req->file('image');
            $imageName = $image->getClientOriginalName();

            if($image->move("upload", $imageName)){

                $current = Carbon::now()->format("Y-m-d");

                $customerDB = new customerDB;

                $customerDB->name = $req->customerName;
                $customerDB->email = $req->customerEmail;
                $customerDB->password = $req->customerPass;
                $customerDB->phone = $req->phone;
                $customerDB->address = $req->adress;
                $customerDB->image = $imageName;
                $customerDB->created_at = $current;
                $customerDB->shop_name = $shopName;

                $customerDB->save();

                if ( ! $customerDB->save())
                {
                   echo "not";
                }else{
                    $customer = $req->customerName;
                    $req->session()->put('customer', $customer);
                    return redirect()->route('shop', $shopName);
                }
            
            
            }
            else{
                echo "not";
            }

        
        }else{
            echo "Error";
        }

    }
}
