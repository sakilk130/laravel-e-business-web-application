<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\shopDB;
use App\customerDB;
use App\wishDB;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function index(Request $req, $shopName, $id)
    {
        $customer = $req->session()->get('customer');

        $shop =  shopDB::where('shop_name', $shopName)
                                ->get();

        $products = DB::table('products')
                    ->where('id', $id)
                    ->where('shop_name', $shopName)
                    ->get();

        $categories = DB::table('categories')
                    ->where('shop_name', $shopName)
                    ->get();            

        return view("customer.product", compact('products', 'shopName', 'customer', 'shop', 'categories'));


    }
    public function fromPost(Request $req, $shopName, $id)
    {
        echo "ok";
    }
}
