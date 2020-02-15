<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function customerAccount ()
    {
        $user = User::where('id', Auth::user('web')->id)->firstOrFail();
        if ($user->id != Auth::user('web')->id) {
            return redirect()->back();
        }else{
            $divisions = DB::table('divisions')->where('country_id', 18)->get();
            $districts = DB::table('districts')->get();
            $upazilas = DB::table('upazilas')->get();
            return view('frontend.accounts.account', compact('user', 'divisions', 'districts', 'upazilas'));
        }

    }

    public function customerAccountUpdate(Request $request)
    {


       $this->validate($request, [
           'first_name' => 'required',
           'last_name' => 'required',
           'phone' => 'required|unique:users,phone',
       ]);

       if ($request->division_id) {
            $this->validate($request, [
                'district_id' => 'required',
                'upazila_id' => 'required',
                'postal_code' => 'required',
            ],
            [
                'district_id.required' => 'You have selected division, so now district field is required.',
                'upazila_id.required' => 'You have selected division, so now upazila field is required.',
                'postal_code.required' => 'You have selected division, so now postal code field is required.',
            ]);
       }

       User::where('id', Auth::user('web')->id)->update([
           'first_name' => $request->first_name,
           'last_name' => $request->last_name,
           'phone' => $request->phone,
           'company' => $request->company ? $request->company : NULL,
           'address' => $request->address ? $request->address : NULL,
           'postal_code' => $request->postal_code ? $request->postal_code : NULL,
           'country_id' => $request->country_id ? $request->country_id : NULL,
           'division_id' => $request->division_id ? $request->division_id : NULL,
           'district_id' => $request->district_id ? $request->district_id : NULL,
           'upazila_id' => $request->upazila_id ? $request->upazila_id : NULL,
       ]);

       $notification = array(
        'messege' => 'Successfully profile updated.',
        'alert-type' => 'success'
       );

       return redirect()->back()->with($notification);
    }

}
