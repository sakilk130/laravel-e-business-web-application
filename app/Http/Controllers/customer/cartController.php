<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\shopDB;
use App\customerDB;
use App\wishDB;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class cartController extends Controller
{
    public function index(Request $req, $shopName)
    {
        $customer = $req->session()->get('customer');

        $customer_check =  customerDB::where('name', $customer)
                                ->get();
        $customer_id = $customer_check[0]->id;

        $shop =  shopDB::where('shop_name', $shopName)
                                ->get();

        $categories = DB::table('categories')
                    ->where('shop_name', $shopName)
                    ->get();

        $cart = DB::table('cart')
                    ->join('products', 'cart.product_id', '=', 'products.id')
                    ->where('customer_id', $customer_id)
                    ->get();

        return view("customer.cart", compact('shop', 'categories', 'customer', 'shopName', 'cart'));




    }

    public function delete(Request $req, $shopName, $cart_id){
        
        $delete_cart = DB::table('cart')
                ->where('cart_id', $cart_id)
                ->delete();

        if(! $delete_cart){
            echo "can't delete";
        }else{
            return redirect()->route('cart', $shopName);
        }
        
    }
    // public function fromPost()
    // {
    //     return redirect("/shop");
    // }
}
