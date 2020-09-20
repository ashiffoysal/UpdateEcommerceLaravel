<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
use App\Http\Requests\VerificationRequest;
use App\SmsModel;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Mail\EmailVerification;
use App\Mail\ForgotPassword;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
      /**
     * Showing Login Page.
     *
     * @var string
     */
     
    public function showLoginForm()
    {
        return view('frontend.accounts.login');
    }


    /**
     * Procese Login attempt.
     *
     * @var string
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'login_email' => 'required',
            'login_password' => 'required'
        ],
        [
            'login_email.required'=>'The Email field is required',
            'login_password.required'=>'The Password field is required',
        ]
    );

        $user = User::where('email', $request->login_email)->orWhere('phone',$request->login_email)->first();
        $fieldType = filter_var($request->login_email, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';
        
        if ($user) {
            
            
            if ($user->status == 1) {
                $checkInformation =Auth::guard('web')->attempt(array($fieldType => $request['login_email'], 'password' => $request['login_password']));
                if ($checkInformation) {
                    return redirect()->intended(route('customar.account.page'));
                } else {
                    session()->flash('errorMsg', 'Email ID or Password not matched!');
                    return redirect()->back();
                }
            } else {
                session()->flash('errorMsg', 'You Email ID Is Not Verified!');
                return redirect()->back();
            }
        } else {
            session()->flash('errorMsg', 'Email ID or Password not matched!');
            return redirect()->back();
        }

       
    }


    public function register(UserRequest $request)
    {
        $token = Str::random(60);
        $verify_code = rand(9999,99999);
        $user =$this->createUser($request,$token,$verify_code);
        $fieldType =$this->checkUserInfo($request);

        if($fieldType == 'email'){
            $user->email = $request->phone_email;    
           $this->verifyEmailSend($token,$request->phone_email);
           $user->save();
           session()->flash('errorMsg', 'A Verification Mail Send tO YOUR Email Address. Please Check Your Mail...');
            return redirect()->route('customar.login.form');
       }else{
            $user->phone = $request->phone_email;     
            $this->sendSMS($request,$verify_code);
            $user->save();
            return redirect()->route('customar.verification.page',$token);  
       }   
        

    }

    // check user info

    public function checkUserInfo($request)
    {
        return filter_var($request->phone_email, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';
    }

    

    // create user 

    public function createUser($request,$token,$verify_code)
    {
        
        $code = rand(1111,9999);
        
        $user = new User();
        
        $user->verification_code = $verify_code;
        $user->password = Hash::make($request->password);
        $user->ip_address = request()->ip();
        $user->remember_token = $token;
        $user->order_id = $code;
        return $user;
    }


    // send user verification sms

    public function sendSMS($request,$verify_code){

        $siteUrl = URL::to("/");
        $sms_text = $request->name . "Your Verification Code is:" . $verify_code . ' ' . $siteUrl;
        $smsinfo =SmsModel::first();
        $smsurl =$smsinfo->sms_url;
        $smsname =$smsinfo->sms_username; #durbar2020
        $smspassword =$smsinfo->sms_password; #12345678
        
        $postData = array(
            'username'=>urlencode($smsname),
            'password'=>urlencode($smspassword),
            'sms_content'=>$sms_text,
            'number'=>urlencode($request->phone_email),
            'sms_type'=>1,
            
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
            
            return $output = curl_exec($ch);
            
    }


    // show verification page

    public function verificationPage ($token)
    {
        // $user =User::where('remember_token',$token)->first();
        abort_if(!$token, 403);
        return view('frontend.accounts.verification',compact('token'));
        
    }

    // verifide user

    public function accountVerification(VerificationRequest $request)
    {
        $userverify = $request->code;
        $user = User::where('verification_code', $userverify)->where('remember_token', $request->token)->first();
        if (User::where('verification_code', $userverify)->where('remember_token', $request->token)->exists()) {
            $user->update([
                'status' => 1,
                'remember_token' => NULL,
                'verification_code'=>NuLL,
                'email_verified_at' => Carbon::now(),
            ]);
            $notification = array(
                'messege' => 'Successfully your Phone is verified.',
                'alert-type' =>'success'
            );
            
            return redirect()->route('customar.login')->with($notification);
        }else{
            session()->flash('errorMsg', 'Verification Token dose not Match!.');
            return redirect()->route('customar.verification.page');
        }
    }


    // email verification

    public function verifyEmailSend($token,$email)
    {
        Mail::to($email)->send(new EmailVerification($token,$email));
    }


    // email verification

    public function emailAccountVerification($token)
    {

        
         $user = User::where('remember_token', $token)->first();
        if (User::where('remember_token', $token)->exists()) {
            $user->update([
                'status' => 1,
                'remember_token' => NULL,
                'verification_code'=>NuLL,
                'email_verified_at' => Carbon::now(),
            ]);
            $notification = array(
                'messege' => 'Successfully your Email is verified.',
                'alert-type' =>'success'
            );
            
            return redirect()->route('customar.login.form')->with($notification);
        }else{
            session()->flash('errorMsg', 'Verification Token dose not Match!.');
            return redirect()->route('customar.login.form');
        }
    }



    // forgot password for email

    public function forgotPassword(Request $request)
    {
        

        if($this->checkUserInfo($request) == 'email'){
        
            $this->emailForgotPassword($request);
            session()->flash('errorMsg', 'Verification Link Send to your Email Address. Places Check Your Email Address!.');
                return redirect()->route('customar.email.forget.password');
        }else{
            
            $token =$this->phoneForgetPassword($request);

            return view('frontend.accounts.forgot_mobile_verification',compact('token'));
            
        }
     


    }



    public function emailForgotPassword($request)
    {
        $request->validate([
            'phone_email' =>'required'
        ]);

        $user =User::where('email',$request->phone_email)->first();
        if($user){
            $token = str::random('90');
            $verify_code = rand(9999,99999);
            $user->update([
                'verification_code'=>$verify_code,
                'remember_token'=>$token,
            ]);

            Mail::to($request->phone_email)->send(new ForgotPassword($token,$request->phone_email));


        }
    }


    public function phoneForgetPassword($request)
    {
        
        $verify_code = rand(9999,99999);
        $token = str::random(90);
        $user =User::where('phone',$request->phone_email)->first();
        if($user){
            $user->update([
                'verification_code'=>$verify_code,
                'remember_token'=>$token,
            ]);
            
            $this->sendSMS($request,$verify_code);
            
        }
        return $token;
    }





    public function forgotPhoneVerify(Request $request)
    {
        $user = User::where('remember_token',$request->token)->where('verification_code',$request->code)->first();
        if($user){
            $token = $request->token;
            
            return view('frontend.accounts.passwordreset',compact('token'));
        }else{
            session()->flash('errorMsg', 'Verification Link Send to your Email Address. Places Check Your Email Address!.');
                return back();
        }
    }


    // email for got password page

    public function emailForgotPasswordPage()
    {
        return view('frontend.accounts.forget_password');
    }


    // password reset page show

    public function passwordResetPageShow($token)
    {
        return view('frontend.accounts.passwordreset',compact('token'));
    }

    // forget password reset

    public function passwordReset(Request $request)
    {
        
        $request->validate([
            'password' => 'required|confirmed|min:6',
            'token'=>'required'
        ]);
        $user =User::where('remember_token',$request->token)->first();
        if($user){
            $user->update([
                'password'=>Hash::make($request->passowrd),
                'remember_token'=>Null,
                'verification_code'=>Null,
            ]);
            return redirect()->route('customar.login.form');
        }
    }

    // customar logout

    public function logout (Request $request)
    {
        Auth::logout();
        return redirect()->route('customar.login.form');
    }
}
