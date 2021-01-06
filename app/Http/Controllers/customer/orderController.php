<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\shopDB;
use App\customerDB;
use App\wishDB;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class orderController extends Controller
{
    public function index(Request $req, $shopName)
    {
        $customer = $req->session()->get('customer');

        $customer_check =  customerDB::where('name', $customer)
                                ->get();
        $customer_id = $customer_check[0]->id;


        $order = DB::table('orders')
                    ->where('customer_id', $customer_id)
                    ->get();


        return view("customer.order", compact('customer_id', 'shopName', 'order'));

        
    }
    public function download(Request $req, $shopName)
    {
        Barryvdh\DomPDF\ServiceProvider::class;

        $customer = $req->session()->get('customer');

        $customer_check =  customerDB::where('name', $customer)
                                ->get();
        $customer_id = $customer_check[0]->id;


        $order = DB::table('orders')
                    ->where('customer_id', $customer_id)
                    ->get();


        $pdf = PDF::loadView('customer.order');
        return $pdf->download('invoice.pdf');

    }
}
