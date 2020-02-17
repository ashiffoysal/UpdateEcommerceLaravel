<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SmsModel;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    // sms update setting

    public function smsUpdate(Request $request)
    {
        $request->validate([
            'sms_url' => 'required',
            'sms_username' => 'required',
            'sms_password' => 'required',
        ]);
        
        $data=array();
        $data['sms_url']=$request->sms_url;
        $data['sms_username']=$request->sms_username;
        $data['sms_password']=$request->sms_password;

        SmsModel::findOrFail($request->sms_id)->update($data);
        $notification=array(
            'messege'=>'Successfully  Updated',
            'alert-type'=>'success'
            );
        return redirect()->back()->with($notification);
    }


    // sending sms to user

    
}
