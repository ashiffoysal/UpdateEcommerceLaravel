<?php

namespace App\Http\Controllers\Frontend;

use App\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeSubscribeMessage;
use DB;
use App\Logo;


class SubscribeController extends Controller
{
    public function insert(Request $request)
    {
        $this->validate($request,[
            'subscriber_email' => 'required|email|unique:subscribers,email',
        ]);

        Subscriber::insert([
            'email' => $request->subscriber_email
        ]);

        $siteSettings = DB::table('sitesetting')->select('company_name')->first();
        $frontLogo = Logo::select(['front_logo'])->first();
        Mail::to($request->subscriber_email)->send(new WelcomeSubscribeMessage($siteSettings, $frontLogo));

        return response()->json(['successMsg' => 'Successfully You have subscribed our web sit, please check you email']);

    }
}
