<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class logoutController extends Controller
{
    public function index(Request $req)
    {
        $req->session()->flush();
        return redirect()->route('customer.login');

    }

}
