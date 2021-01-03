<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Illuminate\Http\Request;
use App\Admin\Admin;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $req)
    {

        $user = Socialite::driver('facebook')->user();

        $check=Admin::where('email',$user->email)->first();
        if($check){
            $req->session()->put('email',$user->email);
            return redirect('/admin');
        }else{
        $data=new Admin;
        $data->username=$user->name;
        $data->email=$user->email;
        $data->password=bcrypt('Test@123');
        $data->phone=null;
        $data->address=null;
        $data->registration_date=date("Y/m/d");
        $data->shop_name=$user->name;
        $data->image_profile=null;
        $data->shop_logo=null;

        $data->save();

        $req->session()->put('email',$user->email);
        return redirect('/admin');
        }

    }
}
