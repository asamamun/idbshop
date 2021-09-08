<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
	/*
	If the redirect path needs custom generation logic you may define a redirectTo method instead of a redirectTo property:
	*/ 
    //protected $redirectTo = '/home';
	protected function redirectTo()
{
    //
	if(\Auth::user()->user_group === 2){
		return '/admin/dashboard';
	}
	elseif(\Auth::user()->user_group === 1){
		return '/shop/dashboard';
	}
	else{
		return '/';
	}
}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
