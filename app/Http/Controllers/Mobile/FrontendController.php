<?php

namespace App\Http\Controllers\Mobile;

use App\FlashDeal;
use App\FlashDealDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;
use App\ReSubCategory;
use App\CompareProduct;
use App\Product;
use App\wishlist;
use App\Color;
use App\ProductReview;
use App\OrderPlace;

use Carbon\Carbon;
use Session;
use Image;
use Auth;

class FrontendController extends Controller
{
    public function index()
    {
        return view('mobile.home.home');
    }

    public function flashDealProducts()
    {
        $flash_deal = FlashDeal::where('status', 1)->where('is_deleted', 0)->select('id', 'end_date')->first();
        $flash_deal_details = 0;
        if ($flash_deal) {
            $flash_deal_details = FlashDealDetail::with('product')->where('flash_deal_id', $flash_deal->id)->paginate(16);
        }
        return view('mobile.hot_deal.hot_deal_products', compact('flash_deal', 'flash_deal_details'));
    }

    // category
    public function m_category($slug,$id){
      $cate=Category::where('id',$id)->first();
      return view('mobile.category.cate',compact('cate'));
    }
    // subcategory
    public function m_subcategory($slug,$id){
      $subcate=SubCategory::where('id',$id)->first();
      return view('mobile.subcategory.subcate',compact('subcate'));
    }
    // resubcategory
    public function m_resubcategory($slug,$id){
      $resubcate=ReSubCategory::where('id',$id)->first();
      return view('mobile.resubcategory.resubcate',compact('resubcate'));
    }
    // product varient
    public function varient(Request $request){
      //echo "ok";
        $product = Product::find($request->id);
        $str = '';
        $quantity = 0;

        if ($request->has('color')) {
            $data['color'] = $request['color'];
            $str = Color::where('color_code', $request['color'])->first()->color_name;
        }

        foreach (json_decode(Product::find($request->id)->choice_options) as $key => $choice) {
            if ($str != null) {
                $str .= '-' . str_replace(' ', '', $request[$choice->name]);
            } else {
                $str .= str_replace(' ', '', $request[$choice->name]);
            }
        }

        if ($str != null) {
            $price = json_decode($product->variations)->$str->price;
            $sku = json_decode($product->variations)->$str->sku;
        } else {
            $price = $product->product_price;
            $sku = $product->product_sku;
        }
        return array('price' => $price, 'sku' => $sku);
    }
// product compareproduct
    public function product_compare(Request $request,$id){
      //return $userid;
        $userid = $request->ip();
        //return $userid;
        $checkproduct=CompareProduct::where('product_id',$id)->first();
        $checkip=CompareProduct::where('ip_address',$userid)->first();
        if($checkproduct && $checkip){
            return response()->json(['checkip'=>$checkip]);
        }
        else{
            $compare=CompareProduct::insertGetId([
                'ip_address'=>$userid,
                'product_id'=>$id,
            ]);
            if($compare){
                return response()->json(['compare'=>$compare]);
            }
        }
    }
    // product wishlist
    public function product_wishlist(Request $request,$id){
          if(Auth::check()){
              $user_id = Auth::id();
              $check=wishlist::where('product_id',$id)->first();
              if($check){
                return response()->json(['check'=>$check]);
              }else{
                $insert=wishlist::insert([
                'product_id'=>$id,
                'user_id'=>$user_id,
                'created_at'=>Carbon::now()->toDateTime(),
                ]);
                if($insert){
                  return response()->json($insert);
                }
            }
          }else{
            return redirect()->back();
          }
    }
    // allwishlist
    public function allwishlist(){
      $user_id = Auth::id();
  		$allwishlist=wishlist::where('user_id',$user_id)->get();
      return view('mobile.shopping.wishlist',compact('allwishlist'));
    }
    public function deletewishlist($id){
      $delete=wishlist::where('id',$id)->delete();
      if($delete){
            $notification=array(
           'messege'=>'Wish List Product Delete',
           'alert-type'=>'success'
            );
        return redirect()->back()->with($notification);
      }else{
          $notification=array(
         'messege'=>'Wish List Product Delete Faild',
         'alert-type'=>'success'
          );
          return redirect()->back()->with($notification);
      }
    }

    // compare
    public function compare(){
      return view('mobile.shopping.compare');
    }
    // compare detele
    public function comparedelete($id){
      // return $id;
      $delete=CompareProduct::where('id',$id)->delete();
      if($delete){
        $notification=array(
            'messege'=>'Delete Success',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
      }else{
        $notification=array(
            'messege'=>'Delete Faild',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
      }
    }
    // review
    public function review(Request $request){
      $insert = ProductReview::insertGetId([
          'name' => $request['name'],
          'description' => $request['description'],
          'review' => $request['review'],
          'product_id' => $request['id'],
      ]);
      if ($insert) {
          $notification = array(
              'messege' => 'Your Review Has been Success',
              'alert-type' => 'success'
          );
          return Redirect()->back()->with($notification);
      } else {
          $notification = array(
              'messege' => 'Your Review Has been Faild,Please try Again!!',
              'alert-type' => 'error'
          );
          return Redirect()->back()->with($notification);
      }
    }

    // order history
    public function orderhistory(){

      $user_id = Auth::id();
      $history = OrderPlace::where('user_id', $user_id)->orderBy('id', 'DESC')->simplepaginate(5);
      return view('mobile.shopping.orderhistory',compact('history'));
    }
// order details
    public function orderdetails($id){
      $orderplaceid = OrderPlace::where('id', $id)->first();
      return view('mobile.shopping.orderdetails',compact('orderplaceid'));

    }
    // order traking
    public function ordertraking(){
      return view('mobile.shopping.traking');
    }

    // search traking
    public function searchtraking(Request $request){
      $id=$request->orderid;
      $result= OrderPlace::where('order_id', $id)->first();
      return view('mobile.shopping.trackresult',compact('result'));
    }

    // payment blade
    public function paymentblade(){
      return view('mobile.shopping.payment');
    }






}
