<?php

namespace App\Http\Controllers\Mobile;

use App\User;
use App\SmsModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function showLoginForm()
    {
        if (Auth::guard('web')->check()) {
            return redirect()->back();
        }else{
            return view('mobile.accounts.login');
        }

    }


    protected function register(Request $request)
    {

        return redirect()->route('mobile.sms.verify');

        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone' => 'required|numeric|unique:users|regex:/(01)[0-9]{9}/',
            'password' => 'required|string|min:3|confirmed',
        ]);

        $verify_code = rand(100000,999999);
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'remember_token' => md5($request->email),
            'verification_code'=> $verify_code,
            'ip_address' => $request->ip(),
            'created_at'=>Carbon::now(),
        ]);

        // Mail::to($user->email)->send(new UserVerificationMail($user->first_name, $user->remember_token));
        // sms varification code send

        $smsusername =$user->username;

        $siteUrl =URL::to("/");
        $sms_text = $smsusername .", Your Verification Code is:". $verify_code .' '.$siteUrl;
        $user_phone = $user->phone;

        $smsinfo =SmsModel::first();
        $smsurl =$smsinfo->sms_url;
        $smsname =$smsinfo->sms_username;
        $smspassword =$smsinfo->sms_password;
        $smstype =$smsinfo->sms_type;
        $smsmasking =$smsinfo->sms_masking;
        $postData = array(
            'username'=>urlencode($smsname),
            'password'=>urlencode($smspassword),
            'sms_content'=>$sms_text,
            'number'=>urlencode($user_phone),
            'sms_type'=>urlencode($smstype),
            'masking'=>urlencode($smsmasking),
        );

        $ch = curl_init();
            curl_setopt_array($ch, array(
            CURLOPT_URL => $smsurl,
            // CURLOPT_URL => 'http://gosms.xyz/api/v1/sendSms',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData,
            CURLOPT_FOLLOWLOCATION => true
            ));

            $output = curl_exec($ch);

            // return redirect()->route('sms.verification.form', $user->remember_token);
            return redirect('/');

        session()->flash('successMsg', 'Registration Successful, Please Check your Mail And Verify Your Account.');
         return redirect()->route('user.auth.registration.success', $user->email);

    }

    // show sms veryfication page
    public function smsVerifyPageShow()
    {
        return view('mobile.accounts.sms_verify');
    }


    // user authentication area start

    public function userAuth(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $admin = User::where('email', request('email'))->where('status',1)->first();
        if($admin){
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $notification=array(
                    'messege'=>'You are Successfully Login!',
                    'alert-type'=>'success'
                     );
                return redirect('/')->with($notification);

            }else{
                $notification=array(
                    'messege'=>'Sorry !! Email or Password not matched!',
                    'alert-type'=>'error'
                     );
                   return Redirect()->back()->with($notification);
            }
        } else {

            $notification=array(
                'messege'=>'Sorry !! Email or Password not matched!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
        }
    }

    // checkout login page show
    public function checkoutLoingPageShow()
    {
        return view('mobile.accounts.checkout_login');
    }

    // checkout login

    public function checkoutAuth(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $admin = User::where('email', request('email'))->where('status',1)->first();
        if($admin){
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect()->intended(route('checkout.page.show'));
            }else{
                $notification=array(
                    'messege'=>'Sorry !! Email or Password not matched!',
                    'alert-type'=>'error'
                     );
                   return Redirect()->back()->with($notification);
            }

        } else {
            $notification=array(
                'messege'=>'Sorry !! Email or Password not matched!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);

        }
    }

    // Logout a user

    public function userLogOut()
    {
        Auth::logout();
        return back();
    }

}
