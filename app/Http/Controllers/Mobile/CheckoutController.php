<?php

namespace App\Http\Controllers\Mobile;
use App\UserAddress;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function showCheckOutPage()
    {

        $userid =  \Request::getClientIp(true);
        $cartdata = Cart::session($userid)->getContent();
        if(count($cartdata) >0){
            if (Auth::check()) {
                $order_id = rand(100, 100000);
                $useraddress = UserAddress::where('user_id', Auth::user()->id)->first();
                return view('mobile.shopping.checkout',compact('order_id','useraddress'));
            } else {

                return view('frontend.accounts.checkout_login');
            }
        }else{
            return redirect('/')->with('alertmessege','Please add some product');
        }

        
    }
}
