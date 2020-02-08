<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use Image;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.home');
    }

    public function AdminProfile()
    {
        return view('admin.profile.profile');
    }

    public function AdminEditProfile()
    {
       return view('admin.profile.edit_profile');
    }

    public function AdminUpdateProfile(Request $request)
    {
        $id=Auth::id();
        $data=array();
        $data['name']=$request->name;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['address']=$request->address;
        $image=$request->file('avatar');
        if ($image) {
            $image_name= uniqid();
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $img = Image::make( $image)->resize(212, 212)->save('public/adminpanel/avatar/'.$image_full_name);
            $data['avatar']='public/adminpanel/avatar/'.$image_full_name;
            $bank=DB::table('admins')->where('id',$id)
                        ->update($data);
                 $notification=array(
                     'messege'=>'Successfully Profile Updated ',
                     'alert-type'=>'success'
                  );    
             return Redirect()->back()->with($notification);         
        }else{
            $bank=DB::table('admins')->where('id',$id)
                       ->update($data);
            $notification=array(
                 'messege'=>'Successfully Profile Updated ',
                 'alert-type'=>'success'
                  );    
             return Redirect()->back()->with($notification);  
        }
    }

    public function AdminPasswordChange()
    {
         return view('admin.profile.password');
    }

    public function AdminPasswordUpdate(Request $request)
    {
      $validatedData = $request->validate([
            'password' => 'required|min:8|max:12',
       ]);
         $password=Auth::user()->password;
         $oldpass=$request->oldpass;
         $newpass=$request->password;
         $confirm=$request->password_confirmation;
         if (Hash::check($oldpass,$password)) {
              if ($newpass === $confirm) {
                         $user=Admin::find(Auth::id());
                         $user->password=Hash::make($request->password);
                         $user->save();
                         Auth::logout();  
                         $notification=array(
                           'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                           'alert-type'=>'success'
                            );
                          return Redirect()->route('admin.login')->with($notification); 
                    }else{
                        $notification=array(
                           'messege'=>'New password and Confirm Password not matched!',
                           'alert-type'=>'error'
                            );
                          return Redirect()->back()->with($notification);
                    }     
         }else{
           $notification=array(
                   'messege'=>'Old Password not matched!',
                   'alert-type'=>'error'
                    );
                  return Redirect()->back()->with($notification);
         }
    }

    public function AdminLockScreen()
    {
       return view('admin.profile.lock');
    }
    public function UnlockScreen(Request $request)
    {
          $password=Auth::user()->password;
          $oldpass=$request->password;
          if (Hash::check($oldpass,$password)) {
                    $notification=array(
                            'messege'=>'Successfully Unlock ',
                            'alert-type'=>'success'
                     );
                    return Redirect()->route('admin.dashboard')->with($notification);
          }else{
                   $notification=array(
                            'messege'=>'Password Not Matched  ',
                            'alert-type'=>'error'
                     );
                    return Redirect()->back()->with($notification);
          }
    }

    public function AdminLogOut()
    {
          Auth::logout();  
         $notification=array(
           'messege'=>'Profile Logout',
           'alert-type'=>'success'
            );
          return Redirect()->route('admin.login')->with($notification); 
    }


    // flash deal area start
    public function flashDealShow()
    {
      
    }

}
