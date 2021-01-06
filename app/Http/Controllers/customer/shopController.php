<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\shopDB;
use App\customerDB;
use App\wishDB;
use Illuminate\Support\Facades\DB;

class shopController extends Controller
{
    public function index(Request $req, $shopName)
    {
       $customer = $req->session()->get('customer');

       $customer_check =  customerDB::where('name', $customer)
                                ->get();
       $customer_id = $customer_check[0]->id;


        $shop =  shopDB::where('shop_name', $shopName)
                                ->get();

        $products = DB::table('products')
                        ->where('shop_name', $shopName)
                        ->get();

        $categories = DB::table('categories')
                        ->where('shop_name', $shopName)
                        ->get();

        $wish = DB::table('wish')
                    ->join('products', 'wish.product_id', '=', 'products.id')
                    ->where('wish.customer_id', $customer_id)
                    ->where('wish.shop_name', $shopName)
                    ->get();  


        $customer = $req->session()->get('customer');
        return view("customer.shop", compact('customer', 'shop', 'products', 'categories', 'shopName', 'wish'));



    }

    public function price(Request $req, $shopName)
    {
        $low_price = $req->low_price;
        $high_price = $req->high_price;

        $products = DB::table('products')
                    ->where('shop_name', $shopName)
                    ->whereBetween('product_price', [$low_price, $high_price])
                    ->get();

 
        return json_encode($products); 
        


    }

    public function wish(Request $req, $shopName, $id)
    {
    //    $product_id= $req->product_id;
    //    $customer = $req->session()->get('customer');

    //    $customer_check =  customerDB::where('name', $customer)
    //                             ->get();
    //    $customer_id = $customer_check[0]->id;
                           
                                
    //    $check = DB::table('wish')
    //                 ->where('product_id', $product_id)
    //                 ->where('customer_id', $customer_id)
    //                 ->where('shop_name', $shopName)
    //                 ->get();
                    
    //     // if(count($check)==0){

    //     //     // $wishDB = new wishDB;

    //     //     // $wishDB->product_id = $product_id;
    //     //     // $wishDB->customer_id = $customer_id;
    //     //     // $wishDB->shopName = $shopName;

    //     //     // $wishDB->save();


    //     //     // if(!$wishDB->save()){
    //     //     //     echo "not";
    //     //     // }else{
    //     //     //     echo "done";
    //     //     // }
    //     //     echo "ok";
            

    //     // }else{
    //     //     echo $product_id;
    //     // } 
    //     echo $product_id;
       echo "ok";

    }

}
