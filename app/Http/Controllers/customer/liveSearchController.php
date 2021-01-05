<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\shopDB;
use App\customerDB;
use App\wishDB;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class liveSearchController extends Controller
{

    public function index(Request $req, $shopName){

        $live = $req->live;
        
        $products = DB::table('products')
                    ->where('shop_name', $shopName)
                    ->where('product_name','like','%'.$live.'%' )
                    ->get();

            return json_encode($products); 

    }
    
}
