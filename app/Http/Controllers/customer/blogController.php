<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\shopDB;
use App\customerDB;
use App\wishDB;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class blogController extends Controller
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

        $blogs = DB::table('blogs')
                    ->where('shop_name', $shopName)
                    ->get(); 

        return view("customer.blog", compact('shop', 'categories', 'customer', 'shopName', 'cart', 'blogs'));

    }

    
}
