<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
//        if (Auth::check()){
//            return redirect()->to('login');
//        }
        return view('admin.users.login');
    }
    public function postLogin(Request $request)
    {

        $remember = $request->has('remember_me') ? true : false;
        $this->validate($request, [
           'email' => 'required|email:filter',
            'password'=>'required'
        ]);
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $remember)) {
            return redirect()->route('admin');
        }

        return redirect()->back();
    }

}
