<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
//    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.auth.layout.ui.login');
    }

    public function sendLoginResponse(Request $request): \Illuminate\Http\RedirectResponse
    {
        $check = $request->all();
//        dd($check);
        if (Auth::attempt([
            'email' => $check['email'],
            'password' => $check['password'],

        ])) {
            if (Auth::user()->user_roll === 'admin') {
//                dd('admin');
                return to_route('admin.dashboard');
            } else {
                //dd('User');
                return to_route('user.dashboard');
            }
        } else {
            //dd('invalid');
            return Redirect::route('admin.login')->with('error', 'Wrong Credential, Try Again');
        }
    }

    /**
     * @return string
     */
    public function getRedirectTo(): string
    {
//        dd(1);
        if (auth()->user()->user_roll == 'admin'){
            return route('admin.dashboard');
        }
        return '/dashboard';
    }
}
