<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\customerDB;

class live extends Controller
{
   public function index(){
        return view('customer.live');
    }
 public function livepost(Request $req){
     $live = $req->live;
     $customerVarify =  customerDB::where('name','like','%'.$live.'%')
                                ->get();
    //   $customerVarify = $req->live;
        // $name = '<a href="/live">' .$customerVarify[0]['name']. '</a>' ;
        return json_encode($customerVarify); 
        // return view('customer.live')->with('data', $data);


    }
    
}
