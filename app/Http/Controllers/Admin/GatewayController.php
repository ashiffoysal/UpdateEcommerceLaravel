<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\SocialMediaLogin;
use Carbon\Carbon;
class GatewayController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function PaymentGateway()
    {
    	return view('admin.setting.gateway');
    }

    public function update(Request $request){
        $id=$request->id;
        $update=DB::table('gateway')->where('id',$id)->update([
          'client_id'=>$request['client_id'],
          'secret_id'=>$request['secret_id'],
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($update){
          $notification=array(
              'messege'=>'Gateway Update Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->back()->with($notification);
        }else {
          $notification=array(
              'messege'=>'Gateway Update Faild',
              'alert-type'=>'error'
               );
             return Redirect()->back()->with($notification);
        }
    }
//
    public function sociallogin()
    {
    	 return view('admin.setting.social');
    }


    // smtp
    public function smtp()
    {
    	 return view('admin.setting.smtp');
    }




    public function socialloginupdate(Request $request){

      foreach ($request->types as $key => $type) {
                $this->overWriteEnvFile($type, $request[$type]);
        }
        return back();
    }

    public function overWriteEnvFile($type, $val)
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            $val = '"'.trim($val).'"';
            if(strpos(file_get_contents($path), $type) >= 0){
                file_put_contents($path, str_replace(
                    $type.'="'.env($type).'"', $type.'='.$val, file_get_contents($path)
                ));
            }
            else{
                file_put_contents($path, file_get_contents($path).$type.'='.$val);
            }
      }

    }


    public function activation(){
      return view('admin.activation.all');
    }
    //
    public function fbupdate($id){
      return $id;
    }



}
