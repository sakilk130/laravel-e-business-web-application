<?php

namespace App\Http\Middleware;

use Closure;

class varifyCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->session()->has('customer')){
             return $next($request);
        }else{
            $request->session()->flash('msg', 'invalid request...');
            return redirect()->route('customer.login', 'shop1');
        }
    }
}
