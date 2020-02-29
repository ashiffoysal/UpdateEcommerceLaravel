<?php

namespace App\Http\Controllers\Frontend;

use App\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeSubscribeMessage;


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

        Mail::to($request->subscriber_email)->queue(new WelcomeSubscribeMessage());

        return response()->json(['successMsg' => 'Successfully You have subscribed our web sit, please check you email']);

    }
}
