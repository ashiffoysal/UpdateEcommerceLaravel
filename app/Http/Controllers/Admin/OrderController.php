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

  public function index()
  {
    $allorder = OrderPlace::orderBy('id', 'DESC')->where('delevary', 1)->where('is_deleted', 0)->get();
    return view('admin.ecommerce.order.all', compact('allorder'));
  }
  // processing product
  public function processproduct()
  {
    $process = OrderPlace::orderBy('id', 'DESC')->where('delevary', 4)->where('is_deleted', 0)->get();
    return view('admin.ecommerce.order.processing', compact('process'));
  }

// ondevelery product
  public function ondelevery()
  {
    $ondevelery = OrderPlace::orderBy('id', 'DESC')->where('delevary', 2)->where('is_deleted', 0)->get();
    return view('admin.ecommerce.order.ondelevery', compact('ondevelery'));
  }
  //
  public function complateorder()
  {
    $complate = OrderPlace::orderBy('id', 'DESC')->where('delevary', 3)->where('is_deleted', 0)->get();
    return view('admin.ecommerce.order.complateorder', compact('complate'));
  }

  public function invoice($id)
  {
    $invoice = OrderPlace::where('id', $id)->first();
    return view('admin.ecommerce.invoice.invoice', compact('invoice'));
  }

  public function rejecteorder(){
    $rejectorder = OrderPlace::orderBy('id', 'DESC')->where('delevary',5)->where('is_deleted', 0)->get();
    return view('admin.ecommerce.order.rejectproduct', compact('rejectorder'));
  }



  public function deleverystatus(Request $request)
  {
    $id = $request->orderplaceid;
    $devestatus = $request->delevary;
    //return $devestatus;
    $update = OrderPlace::where('id', $id)->update([
      'delevary' => $devestatus,
      'updated_at' => Carbon::now()->toDateTimeString(),
    ]);
    if ($update) {
      $notification = array(
        'messege' => 'Update Success',
        'alert-type' => 'success'
      );
      return Redirect()->back()->with($notification);
    } else {
      $notification = array(
        'messege' => 'Update faild',
        'alert-type' => 'error'
      );
      return Redirect()->back()->with($notification);
    }
  }


  // pending delevery delete

  public function pendingsoftdelete($id)
  {
    $softdelete = OrderPlace::where('id', $id)->update([
      'is_deleted' => '1',
      'updated_at' => Carbon::now()->toDateTimeString(),
    ]);
    if ($softdelete) {
      $notification = array(
        'messege' => 'soft Delete Success',
        'alert-type' => 'success'
      );
      return Redirect()->back()->with($notification);
    } else {
      $notification = array(
        'messege' => 'soft Delete faild',
        'alert-type' => 'error'
      );
      return Redirect()->back()->with($notification);
    }
  }


  // pending multi delete
  public function multideletepending(Request $request)
  {
    $deleteid = $request->Input('delid');
    if ($deleteid) {
      $delet = OrderPlace::whereIn('id', $deleteid)->update([
        'is_deleted' => '1',
        'updated_at' => Carbon::now()->toDateTimeString(),
      ]);
      if ($delet) {
        $notification = array(
          'messege' => 'Multi softdelete success',
          'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
      } else {
        $notification = array(
          'messege' => 'ulti softdelete faild',
          'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
      }
    } else {
      $notification = array(
        'messege' => 'Nothing To Delete',
        'alert-type' => 'info'
      );
      return redirect()->back()->with($notification);
    }
  }

  public function orderrestore($id)
  {

    $restore = OrderPlace::where('id', $id)->update([
      'is_deleted' => '0',
      'Created_at' => Carbon::now()->toDateTimeString(),
    ]);

    if ($restore) {
      $notification = array(
        'messege' => 'Restore success',
        'alert-type' => 'success'
      );
      return redirect()->back()->with($notification);
    } else {
      $notification = array(
        'messege' => 'Restore Faild',
        'alert-type' => 'info'
      );
      return redirect()->back()->with($notification);
    }
  }


  public function paymentorder(Request $request)
  {

    //return $request->id;
    $product = OrderPlace::findOrFail($request->id);
    $product->payment_status = $request->payment_status;
    if ($product->save()) {
      return 1;
    }
    return 0;
  }


  // order hearddelete
  public function orderhearddelete($id)
  {
    $delete = OrderPlace::where('id', $id)->delete();
    if ($delete) {
      $notification = array(
        'messege' => 'Restore success',
        'alert-type' => 'success'
      );
      return redirect()->back()->with($notification);
    } else {
      $notification = array(
        'messege' => 'Restore success',
        'alert-type' => 'success'
      );
      return redirect()->back()->with($notification);
    }
  }
}
