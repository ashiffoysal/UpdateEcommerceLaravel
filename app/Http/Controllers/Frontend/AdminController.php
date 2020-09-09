<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
      /**
     * Showing Login Page.
     *
     * @var string
     */
     
    public function showLoginForm()
    {
        return view('frontend.accounts.account');
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

        $user = User::where('email', $request->login_email)->first();
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


    public function register(Request $request)
    {
        
        
        
        $request->validate([
            'phone_email' => 'required|unique:users,email|unique:users,phone',
            'password' => 'required|confirmed',
        ],[
            'phone_email.unique'=>'The specified value already exists',
        ]);

       $user = new User();

       $fieldType = filter_var($request->phone_email, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

       if($fieldType == 'email'){
            $user->email = $request->phone_email;     
       }else{
            $user->phone = $request->phone_email;     
       }
       $user->password = Hash::make($request->password);
       $user->ip_address = request()->ip();
       $user->save();
       return back();  

    }
}
