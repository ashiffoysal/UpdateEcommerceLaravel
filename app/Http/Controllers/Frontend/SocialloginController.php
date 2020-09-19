<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;

class SocialloginController extends Controller
{
       
    public function facebooklogin(){
    	//return "ok";
        return Socialite::driver('facebook')->redirect();
    }

     public function facebookCallback()
    {

        $user = Socialite::driver('facebook')->user();
        print_r($user->id) ;
        print_r($user->name) ;
        
    }

}
