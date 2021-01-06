<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use App\shopDB;
use App\customerDB;
use App\wishDB;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class wishController extends Controller
{
    public function index(Request $req, $shopName)
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost:3000/parent/wish');

        $wish= json_decode($response->getBody());

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
        return view("customer.wish", compact('wish', 'shopName', 'customer_id', 'shop', 'products', 'categories', 'customer'));
        
    }

    public function save(Request $req, $shopName, $id){

        $customer = $req->session()->get('customer');
        $customer_check =  customerDB::where('name', $customer)
                                ->get();
        $customer_id = $customer_check[0]->id;
        
        $wish = DB::table('wish')->insert(
            ['product_id' => $id,
            'customer_id' => $customer_id,
            'shop_name' => $shopName
            ]
        );
        if(! $wish){
            echo "can't insert";
        }else{
            return redirect()->route('shop', $shopName);
        }
        
    }
}
