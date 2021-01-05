<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\shopDB;
use App\customerDB;
use App\wishDB;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class blogSingleController extends Controller
{
    public function index(Request $req, $shopName, $id)
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
                    ->where('id', $id)
                    ->where('shop_name', $shopName)
                    ->get();    

        $comment = DB::table('comment')
                    ->where('blog_id', $id)
                    ->get();    

        return view("customer.blogSingle", compact('shop', 'categories', 'customer', 'shopName', 'cart', 'blogs', 'comment'));


    }
    public function fromPost(Request $req, $shopName, $id)
    {
        

        $comment = DB::table('comment')->insert(
            ['name'=> $req->name,
            'email' => $req->email,
            'description' => $req->description,
            'rating' => $req->star,
            'blog_id' => $id
            ]
        );

        if(! $comment){
            echo "Something prblem";
        }else{
            return redirect()->route('blog.single', [$shopName, $id]);
        }

    }
}
