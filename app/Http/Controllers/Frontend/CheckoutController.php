<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Auth;
use App\User;
use App\Cupon;
use App\DatabaseStorageModel;
use App\OrderPlace;
use App\OrderStorage;
use App\Product;
use App\ShippingAddress;
use App\UserAddress;
use App\UserUsedCupon;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Cart;

use Illuminate\Foundation\Console\Presets\React;

class CheckoutController extends Controller
{
    // show checkout controller

    public function checkoutshow()
    {
        if (Auth::check()) {
            $order_id = rand(100, 100000);
            $useraddress =UserAddress::where('user_id',Auth::user()->id)->first();
            return view('frontend.shopping.checkout', compact('order_id','useraddress'));
        } else {

            return view('frontend.accounts.checkout_login');
        }
    }

    // Show Checkout Login form

    public function CustomerLogin()
    {
        return view('frontend.accounts.checkout_login');
    }

    

    public function authenticate(Request $request)
    {

        $admin = User::where('email', request('email'))->first();
        if ($admin) {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {

                return redirect()->intended(route('checkout.page.show'));
            }
        } else {
            session()->flash('successMsg', 'Sorry !! Email or Password not matched!');
            return redirect()->route('checkout.login.show');
        }
    }




    public function applyCupon(Request $request)
    {
        
        if (Cupon::where('cupon_code', $request->cuponvalue)->exists()) {
            $cuponuser = Cupon::where('cupon_code', $request->cuponvalue)->first();

            if (UserUsedCupon::where('cupon_id', $cuponuser->id)->where('user_ip', Auth::user()->id)->doesntExist()) {

                if (Cupon::where('cupon_code', $request->cuponvalue)->first()->cupon_type == 1) {

                    $userid =  \Request::getClientIp(true);
                    $cartdata = Cart::session($userid)->getContent();
                    $carttotal = Cart::session($userid)->getTotal();

                    $cuponminimum = Cupon::where('cupon_code', $request->cuponvalue)->first()->minimum_shopping;
                    $cupondiscount = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount;
                    $cupondiscounttype = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount_type;
                    $cupondiscountspers = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount.'%';
                    if ($cuponminimum <= $carttotal) {
                       

                        if($cupondiscounttype ==2){
                             
                            $condition = new \Darryldecode\Cart\CartCondition(array(
                                'name' => 'Minimum_shopping',
                                'type' => 'coupon',
                                'target' => 'total',
                                'value' => -$cupondiscount,
                            ));
                        }else{
                            
                            $condition = new \Darryldecode\Cart\CartCondition(array(
                                'name' => 'Minimum_shopping',
                                'type' => 'coupon',
                                'target' => 'total',
                                'value' => '-'.$cupondiscountspers,
                            ));
                        }
                        Cart::session($userid)->condition($condition);
                        UserUsedCupon::insert([
                            'user_ip' => Auth::user()->id,
                            'cupon_id' => $cuponuser->id,
                            'order_id' => $request->order,
                            'created_at' => Carbon::now(),
                        ]);
                        
                        
                        
                        return response()->json([
                            'cuponid'=>$cuponuser->id,
                            'cuponalert'=>'Cupon Insert Fuccessfully',
                        ]);
                        
                    } else {
                        return "Your minimum purchese is less than minimum shopping criteria";
                    }
                } else {
                    $userid =  \Request::getClientIp(true);
                    $carttotal = Cart::session($userid)->getTotal();
                    $cartdatas = Cart::session($userid)->getContent();

                    $cuponminproducts = Cupon::where('cupon_code', $request->cuponvalue)->first()->product_id;
                    $cupondiscountspers = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount.'%';
                    $cupondiscounts = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount;
                    $cupondiscounttype = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount_type;
                    
                    foreach ($cartdatas as $cartdata) {
                        
                        foreach (json_decode($cuponminproducts) as $cuponminproduct) {
                            if ($cartdata->attributes->product_id == $cuponminproduct) {
                               

                                if($cupondiscounttype == 2){
                                    $condition = new \Darryldecode\Cart\CartCondition(array(
                                        'name' => 'Percentage',
                                        'type' => 'coupon',
                                        'target' => 'total',
                                        'value' => -$cupondiscounts,
                                    ));
                                    Cart::session($userid)->condition($condition);
                                }else{
                                    
                                    if( $cartdata->attributes->has('variation') )
                                    {
                                        Cart::update($cartdata->id, array(
                                            'price' =>$cartdata->price - $cartdata->price *$cupondiscounts/100, 
                                          ));
                                    }
                                    
                                }
                                UserUsedCupon::insert([
                                    'user_ip' => Auth::user()->id,
                                    'cupon_id' => $cuponuser->id,
                                    'order_id' => $request->order,
                                    'created_at' => Carbon::now(),
                                ]); 
                                
                                
                                    
                            }
                        }
                    }


                    


                }
            } else {
                return "You are alrady used this cupon";
            }
        } else {
            return "No Cupon Available On this code.";
        }
    }


    public function orderSubmit(Request $request)
    {
        
        $validatedData = $request->validate([
            'user_id' => 'required',
            'user_address' => 'required',
            'user_post_office' => 'required',
            'user_postcode' => 'required',
            'user_country_id' => 'required',
            'user_division_id' => 'required',
            'user_district_id' => 'required',
            'user_upazila_id' => 'required',
            'shipping_id' => 'required',
            'payment_method_id' => 'required',
            

        ]);

       
            $usseraddress_id = UserAddress::insertGetId([
                'user_id' => $request->user_id,
                'user_address' => $request->user_address,
                'user_post_office' => $request->user_post_office,
                'user_postcode' => $request->user_postcode,
                'user_country_id' => $request->user_country_id,
                'user_division_id' => $request->user_division_id,
                'user_district_id' => $request->user_district_id,
                'user_upazila_id' => $request->user_upazila_id,
                'is_shipping_address' => $request->is_shipping_address,
                'created_at' => Carbon::now(),
            ]);
        
        


        if (UserAddress::findOrFail($usseraddress_id)->is_shipping_address == NULL) {

             $request->validate([
                'shipping_name' => 'required',
                'shipping_name' => 'required',
                'shipping_phone' => 'required',
                'shipping_address' => 'required',
                'shipping_post_office' => 'required',
                'shipping_postcode' => 'required',
                'shipping_country_id' => 'required',
                'shipping_division_id' => 'required',
                'shipping_district_id' => 'required',
                'shipping_upazila_id' => 'required',
            ]);


            ShippingAddress::insert([
                'shipping_user_id' => $request->shipping_user_id,
                'shipping_name' => $request->shipping_name,
                'shipping_phone' => $request->shipping_phone,
                'shipping_address' => $request->shipping_customer_address,
                'shipping_post_office' => $request->shipping_post_office,
                'shipping_postcode' => $request->shipping_postcode,
                'shipping_country_id' => $request->shipping_country_id,
                'shipping_division_id' => $request->shipping_division_id,
                'shipping_district_id' => $request->shipping_district_id,
                'shipping_upazila_id' => $request->shipping_upazila_id,
                'order_id' => $request->order_id,
                'created_at' => Carbon::now(),
            ]);
        }


        $userid =  \Request::getClientIp(true);
        $useriditem =  \Request::getClientIp(true) . '_cart_items';
        $useridcondition =  \Request::getClientIp(true) . '_cart_conditions';
        $purchase_key = DatabaseStorageModel::findOrFail($useriditem)->purchase_key;


        OrderPlace::insert([
            'shipping_id' => $request->shipping_id,
            'payment_method_id' => $request->payment_method_id,
            'comment' => $request->comment,
            'order_id' => $request->order_id,
            'user_id' => Auth::user()->id,
            'cart_id' => $purchase_key,
            'total_price' => $request->total_price,
            'total_quantity' => $request->total_quantity,
            'created_at' => Carbon::now(),
        ]);

        DatabaseStorageModel::where('id',$useriditem)->first()->delete();
        if(DatabaseStorageModel::where('id',$useridcondition)->first()){
            DatabaseStorageModel::where('id',$useridcondition)->first()->delete();
        }

        return OrderStorage::where('purchase_key', $purchase_key)->first()->cart_data;
    }


    public function userCountrySubmit($id)
    {

        $divisions = DB::table('divisions')->where('country_id', $id)->get();
        return response()->json($divisions);
    }

    public function userDivisionSubmit($id)
    {
        $divisions = DB::table('districts')->where('division_id', $id)->get();
        return response()->json($divisions);
    }

    public function userUpazilaSubmit($id)
    {

        $divisions = DB::table('upazilas')->where('district_id', $id)->get();
        return response()->json($divisions);
    }


    public function orderData()
    {
        $userid =  \Request::getClientIp(true);

        $usercartdatas = Cart::session($userid)->getContent();
        return view('frontend.shopping.orderajaxdata', compact('usercartdatas'));
    }

    public function orderDataUpdate(Request $request)
    {
        $userid =  \Request::getClientIp(true);
        $updatecart = Cart::session($userid)->update(
            $request->rowid,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity,
                ),
            )
        );



        if ($updatecart) {



            $userid =  \Request::getClientIp(true);

            $usercartdatas = Cart::session($userid)->getContent();


            // return view('frontend.shopping.cartajaxdata', compact('usercartdatas'));
            return view('frontend.shopping.orderajaxdata', compact('usercartdatas'));
        } else {
            return 0;
        }
    }


    // Order Place delete
    public function orderDataDelete(Request $request)
    {
        $userid =  \Request::getClientIp(true);
        $datadelete = Cart::session($userid)->remove($request->user_id);
        $usercartdatas = Cart::session($userid)->getContent();
        return view('frontend.shopping.orderajaxdata', compact('usercartdatas'));
    }
}
