<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shopDB;
use App\customerDB;
use App\wishDB;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    public function checkout(Request $req, $shopName, $cart_id)
    {   

        $customer_id = $req->customer_id;
        $product_id = $req->product_id;
        $quantity = $req->quantity;
        $price = $req->price;

        

        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51I6MDfBs8p6RCaHrR4jW3dM7Gy3VsdQ2OwnFB17XejitwxBkkHHsT1CNIOxvxAQieiAtS7tKos7NJWO9ocupzBUU00YLSCwDtd');
        		
		$amount = 100;
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'INR',
			'description' => 'Payment From Codehunger',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('customer.credit-card',compact('intent', 'shopName', 'customer_id', 'product_id', 'quantity', 'cart_id'));

    }

    public function afterPayment(Request $req)
    {
        $currentDate = Carbon::now()->format("Y-m-d");
        
        $orders = DB::table('orders')->insert(
            ['customer_id' => $req->customer_id,
            'product_id' => $req->product_id,
            'quantity' => $req->quantity,
            'status' => 'prnding',
            'created_at' => $currentDate,
            'shop_name' => $req->shopName
            ]
        );
        
        if(! $orders){
            echo "can't order";
        }else{
             $delete_cart = DB::table('cart')
                 ->where('cart_id', $req->cart_id)
                 ->delete();
                 
            if(! $delete_cart){
                echo "can't delete";
            }
            return redirect()->route('cart', $req->shopName);
        }
    }
}