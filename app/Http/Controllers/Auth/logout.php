<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class logout extends Controller
{
    public function destroy(){
        Auth::logout();
        return redirect()->route('login');
    }
}
