<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('admin.auth.layout.ui.login');
    }

//    public function logoutpage(): Application|Factory|View
//    {
//        return view('admin.auth.layout.ui.logout');
//    }


    public function logout(): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        return to_route('home.page')->with('success', 'Logout Successfully.');
    }

//    public function
//    check_login(Request $request): ?\Illuminate\Http\RedirectResponse
//    {
//
//        //dd($request->all());
//        $password = $request->get('password');
//        //dd($password);
//        // dd($request->all());
//        $user = User::where('email','=',$request->get('email'))->first();
//        //dd($user);
//        if(\Auth::attempt([
//            'email' => $user->email,
//            'password' => $password
//        ])) {
//            //dd($user);
//            if (Hash::check($password, $user->password)) {
//                // return response('Welcome....');
//                // return redirect()->route('admin_file');
//                return redirect()->route('assets.dashbord.new');
//            } else {
//                return redirect()->route('User.Login')->with('warning ', 'Check your password please');
//            }
//
//        }
//        else{
//            return redirect()->back()->with('success', 'Invalid User!');
//        }
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
//    public function login(Request $request)
//    {
//        $check = $request->all();
////        dd($check);
//        if (Auth::attempt([
//            'email' => $check['email'],
//            'password' => $check['password'],
//
//        ])) {
//            if (Auth::user()->user_roll === 'admin') {
////                dd('admin');
//                return to_route('admin.dashboard');
//            } else {
////                dd('User');
//                return to_route('user.dashboard');
//            }
//        } else {
//            //dd('invalid');
//            return Redirect::route('admin.login')->with('error', 'Wrong Credential, Try Again');
//        }
//
//        // return to_route('admin.login.form')->with('Success', 'You can login now.');
//    }





    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
