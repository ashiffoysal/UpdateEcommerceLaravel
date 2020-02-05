<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\OrderPlace;
use Carbon\Carbon;
use Session;

class OrderController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function index(){
    $allorder=OrderPlace::orderBy('id','DESC')->where('delevary',1)->get();
    return view('admin.ecommerce.order.all',compact('allorder'));
  }

  public function ondelevery(){
    $ondevelery=OrderPlace::orderBy('id','DESC')->where('delevary',2)->get();
    return view('admin.ecommerce.order.ondelevery',compact('ondevelery'));

  }
  public function complateorder(){
    $complate=OrderPlace::orderBy('id','DESC')->where('delevary',3)->get();
    return view('admin.ecommerce.order.complateorder',compact('complate'));

  }

  public function invoice($id){
    $invoice=OrderPlace::where('id',$id)->first();
    return view('admin.ecommerce.invoice.invoice',compact('invoice'));
  }
  public function deleverystatus(Request $request){
    $id=$request->orderplaceid;
    $devestatus=$request->delevary;
    //return $devestatus;
    $update=OrderPlace::where('id',$id)->update([
      'delevary'=>$devestatus,
      'updated_at'=>Carbon::now()->toDateTimeString(),
    ]);
    if($update){
      $notification=array(
        'messege'=>'Update Success',
        'alert-type'=>'success'
         );
       return Redirect()->back()->with($notification);
    }else{
      $notification=array(
        'messege'=>'Update faild',
        'alert-type'=>'error'
         );
       return Redirect()->back()->with($notification);
    }




  }




}
