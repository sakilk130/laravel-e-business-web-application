<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\shopDB;
use App\customerDB;
use App\wishDB;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class productController extends Controller
{
    public function index(Request $req, $shopName, $id)
    {
        $customer = $req->session()->get('customer');

        $customer_check =  customerDB::where('name', $customer)
                                ->get();
        $customer_id = $customer_check[0]->id;


        $shop =  shopDB::where('shop_name', $shopName)
                                ->get();

        $products = DB::table('products')
                    ->where('id', $id)
                    ->where('shop_name', $shopName)
                    ->get();

        $categories = DB::table('categories')
                    ->where('shop_name', $shopName)
                    ->get();

        $findByBrand = DB::table('products')
                    ->where('shop_name', $shopName)
                    ->where('product_brand', $products[0]->product_brand)
                    ->where('id', '<>', $id)
                    ->get();     
        
        $review = DB::table('review')
                    ->where('shop_name', $shopName)
                    ->where('product_id', $id)
                    ->get();   
        $star_sum = DB::table('review')
                        ->sum('star');
        
        $row_num= count($review);    
        
        $avarage_star=round($star_sum/$row_num );
        $wish = DB::table('wish')
                    ->join('products', 'wish.product_id', '=', 'products.id')
                    ->where('wish.customer_id', $customer_id)
                    ->where('wish.shop_name', $shopName)
                    ->get();  

        return view("customer.product", compact('products', 'shopName', 'customer', 'shop', 'categories', 'findByBrand', 'review', 'wish', 'avarage_star'));
    }
    public function fromPost(Request $req, $shopName, $id)
    {

        $customer = $req->session()->get('customer');

        $customer_check =  customerDB::where('name', $customer)
                                ->get();
        
        // if(count($customer_check>0)){
            $customer_id = $customer_check[0]->id;

            $cart = DB::table('cart')->insert(
                ['product_id'=> $req->product_id,
                'customer_id'=> $customer_id,
                'shop_name'=> $shopName,
                'quantity'=> $req->quantity
                ]
            );

            if(! $cart){
                echo "not";
            }else{
                return redirect()->route('cart', $shopName);
            }

        // }

        
    }

    public function rating(Request $req, $shopName, $id)
    {
        $currentDate = Carbon::now()->format("Y-m-d");
        $currentTime = Carbon::now()->format("H:i:s");

        $review = DB::table('review')->insert(
                ['review_name'=> $req->review_name,
                'review_email' => $req->review_email,
                'ditails' => $req->ditails,
                'star' => $req->star,
                'product_id' => $req->product_id,
                'shop_name' => $shopName,
                'created_at' => $currentDate,
                'created_time' => $currentTime
                ]
            );

        if(! $review){
            echo "ok";
        }else{
            return redirect()->route('product', [$shopName, $req->product_id]);
        }

    }
}
