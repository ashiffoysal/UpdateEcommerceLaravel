<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function showMyAccount()
    {
        if(Auth::check()){

            return view('mobile.accounts.myaccount');
        }else{
            return redirect()->route('mobile.login.form');
        }
    }
}
