<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Mail\UserVerificationMail;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    public function showRegistrationForm()
    {
        return view('frontend.accounts.register');
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function register(Request $request)
    {

        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone' => 'required|numeric|unique:users,phone',
            'password' => 'required|string|min:3|confirmed',
        ]);

        $user = User::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'remember_token' => md5($request->email),
            'ip_address' => $request->ip()
        ]);

        Mail::to($user->email)->send(new UserVerificationMail($user->first_name, $user->remember_token));
        session()->flash('successMsg', 'Registration Successful, Please Check your Mail And Verify Your Account.');
        return redirect()->route('user.auth.registration.success', $user->email);

    }

    public function emailVerification($token)
    {
        $user = User::where('remember_token',$token)->firstOrFail();
        if ($user) {
            $user->update([
                'status' => 1,
                'remember_token' => NULL,
                'email_verified_at' => Carbon::now(),
            ]);
            session()->flash('successMsg', 'Successfully your email is verified.');
            return redirect()->route('login');
        }
    }

    public function userRegistrationSuccess($email)
    {
        $user = User::where('email', $email)->first();
        return view('frontend.accounts.registration_success_page', compact('user'));
    }

}
