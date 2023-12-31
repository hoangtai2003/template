<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index(){
        if (Auth::check()){
            return redirect()->route('admin');
        }
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
