<?php

namespace App\Http\Controllers\Frontend;

use Cart;
use PayPal;
// use Auth;
use App\User;
use App\Cupon;
use App\Product;
use Twocheckout;
use Carbon\Carbon;
use App\OrderPlace;
use App\UserAddress;
use App\OrderStorage;
use App\UserUsedCupon;
use Twocheckout_Error;
use Twocheckout_Charge;
use App\ShippingAddress;
use App\UpozilaCouriers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\DatabaseStorageModel;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\ProductStorage;
use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Support\Facades\Hash;

class CheckoutController extends Controller
{
    // show checkout controller

    public function checkoutshow()
    {
        if (Auth::check()) {
            $order_id = rand(100, 100000);
            $useraddress = UserAddress::where('user_id', Auth::user()->id)->first();
            return view('frontend.shopping.checkout', compact('order_id', 'useraddress'));
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
                    $cupondiscountspers = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount . '%';
                    if ($cuponminimum <= $carttotal) {


                        if ($cupondiscounttype == 2) {

                            $condition = new \Darryldecode\Cart\CartCondition(array(
                                'name' => 'Minimum_shopping',
                                'type' => 'coupon',
                                'target' => 'total',
                                'value' => -$cupondiscount,
                            ));
                        } else {

                            $condition = new \Darryldecode\Cart\CartCondition(array(
                                'name' => 'Minimum_shopping',
                                'type' => 'coupon',
                                'target' => 'total',
                                'value' => '-' . $cupondiscountspers,
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
                            'cuponid' => $cuponuser->id,
                            'cuponalert' => 'Cupon Insert Fuccessfully',
                        ]);
                    } else {
                        return "Your minimum purchese is less than minimum shopping criteria";
                    }
                } else {
                    $userid =  \Request::getClientIp(true);
                    $carttotal = Cart::session($userid)->getTotal();
                    $cartdatas = Cart::session($userid)->getContent();

                    $cuponminproducts = Cupon::where('cupon_code', $request->cuponvalue)->first()->product_id;
                    $cupondiscountspers = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount . '%';
                    $cupondiscounts = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount;
                    $cupondiscounttype = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount_type;

                    foreach ($cartdatas as $cartdata) {

                        foreach (json_decode($cuponminproducts) as $cuponminproduct) {
                            if ($cartdata->attributes->product_id == $cuponminproduct) {


                                if ($cupondiscounttype == 2) {
                                    $condition = new \Darryldecode\Cart\CartCondition(array(
                                        'name' => 'Percentage',
                                        'type' => 'coupon',
                                        'target' => 'total',
                                        'value' => -$cupondiscounts,
                                    ));
                                    Cart::session($userid)->condition($condition);
                                } else {

                                    if ($cartdata->attributes->has('variation')) {
                                        Cart::update($cartdata->id, array(
                                            'price' => $cartdata->price - $cartdata->price * $cupondiscounts / 100,
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

        // $validatedData = $request->validate([
        //     'user_id' => 'required',
        //     'user_address' => 'required',
        //     'user_post_office' => 'required',
        //     'user_postcode' => 'required',
        //     'user_country_id' => 'required',
        //     'user_division_id' => 'required',
        //     'user_district_id' => 'required',
        //     'user_upazila_id' => 'required',
        //     'shipping_id' => 'required',
        //     'payment_method_id' => 'required',


        // ]);


        // $usseraddress_id = UserAddress::insertGetId([
        //     'user_id' => $request->user_id,
        //     'user_address' => $request->user_address,
        //     'user_post_office' => $request->user_post_office,
        //     'user_postcode' => $request->user_postcode,
        //     'user_country_id' => $request->user_country_id,
        //     'user_division_id' => $request->user_division_id,
        //     'user_district_id' => $request->user_district_id,
        //     'user_upazila_id' => $request->user_upazila_id,
        //     'is_shipping_address' => $request->is_shipping_address,
        //     'created_at' => Carbon::now(),
        // ]);





        // if (UserAddress::findOrFail($usseraddress_id)->is_shipping_address == NULL) {

        //     $request->validate([
        //         'shipping_name' => 'required',
        //         'shipping_name' => 'required',
        //         'shipping_phone' => 'required',
        //         'shipping_address' => 'required',
        //         'shipping_post_office' => 'required',
        //         'shipping_postcode' => 'required',
        //         'shipping_country_id' => 'required',
        //         'shipping_division_id' => 'required',
        //         'shipping_district_id' => 'required',
        //         'shipping_upazila_id' => 'required',
        //     ]);


        //     ShippingAddress::insert([
        //         'shipping_user_id' => $request->shipping_user_id,
        //         'shipping_name' => $request->shipping_name,
        //         'shipping_phone' => $request->shipping_phone,
        //         'shipping_address' => $request->shipping_customer_address,
        //         'shipping_post_office' => $request->shipping_post_office,
        //         'shipping_postcode' => $request->shipping_postcode,
        //         'shipping_country_id' => $request->shipping_country_id,
        //         'shipping_division_id' => $request->shipping_division_id,
        //         'shipping_district_id' => $request->shipping_district_id,
        //         'shipping_upazila_id' => $request->shipping_upazila_id,
        //         'order_id' => $request->order_id,
        //         'created_at' => Carbon::now(),
        //     ]);
        // }

        $orderid =$request->order_id;
        $usercartdatas =Cart::session(\Request::getClientIp(true))->getContent();

        $products = array();

        foreach($usercartdatas as $usercartdata){
            $item['name']=$usercartdata->name;
            $item['price']=$usercartdata->price;
            $item['quantity']=$usercartdata->quantity;
            array_push($products, $item);
        }

        ProductStorage::insert([
            'product_details'=>json_encode($products),
            'order_id'=>$orderid,
            'user_id'=>Auth::user()->id,
            'created_at'=>Carbon::now(),
        ]);


        return ProductStorage::all();

        $userid =  \Request::getClientIp(true);
        $useriditem =  \Request::getClientIp(true) . '_cart_items';
        $useridcondition =  \Request::getClientIp(true) . '_cart_conditions';
        $purchase_key = DatabaseStorageModel::findOrFail($useriditem)->purchase_key;


        $orderPlaceId = OrderPlace::insertGetId([
            'shipping_id' => $request->shipping_id,
            'payment_method_id' => $request->payment_method_id,
            'comment' => $request->comment,
            'order_id' => $request->order_id,
            'user_id' => Auth::user()->id,
            'cart_id' => $purchase_key,
            'total_price' => $request->total_price,
            'total_quantity' => $request->total_quantity,
            'payment_secure_id' => Hash::make($request->order_id),
            'created_at' => Carbon::now(),
        ]);



        DatabaseStorageModel::where('id', $useriditem)->first()->delete();
        if (DatabaseStorageModel::where('id', $useridcondition)->first()) {
            DatabaseStorageModel::where('id', $useridcondition)->first()->delete();
        }




        $getPaymentSecureId = OrderPlace::where('id', $orderPlaceId)->select('payment_secure_id')->first();

        $getOrderInfo = OrderPlace::where('id', $orderPlaceId)->first();


        if ($request->payment_method_id == 2) {

            return redirect()->route('stripe.index', $getPaymentSecureId->payment_secure_id);
        } elseif ($request->payment_method_id == 3) {
            return redirect()->route('payment.paypal');
        } elseif ($request->payment_method_id == 4) {
            /* PHP */
            $post_data = array();
            $post_data['store_id'] = "durba5e37a51cb40c6";
            $post_data['store_passwd'] = "durba5e37a51cb40c6@ssl";
            $post_data['total_amount'] = $getOrderInfo->total_price;
            $post_data['currency'] = "BDT";
            // $post_data['tran_id'] = "SSLCZ_TEST_" . uniqid();
            $post_data['tran_id'] = $getOrderInfo->order_id;
            $post_data['success_url'] = url('payment/ssl_commercez/success');
            $post_data['fail_url'] = url('payment/ssl_commercez/fail');
            $post_data['cancel_url'] = url('payment/ssl_commercez/cancel');
            # $post_data['multi_card_name'] = "mastercard,visacard,amexcard";  # DISABLE TO DISPLAY ALL AVAILABLE

            # EMI INFO
            $post_data['emi_option'] = "1";
            $post_data['emi_max_inst_option'] = "9";
            $post_data['emi_selected_inst'] = "9";

            # CUSTOMER INFORMATION
            $post_data['cus_name'] = Auth::user()->first_name . " " . Auth::user()->last_name;
            $post_data['cus_email'] = Auth::user()->email;
            $post_data['cus_add1'] = $request->shipping_customer_address ? $request->shipping_customer_address : "null";
            // $post_data['cus_add2'] = "Dhaka";
            $post_data['cus_city'] = DB::table('divisions')->where('id', $request->user_division_id)->select('name')->first()->name;
            //$post_data['cus_state'] = DB::table('countries')->where('id', $request->user_division_id)->select('name')->first()->name;
            $post_data['cus_postcode'] = $request->user_postcode ? $request->user_postcode : "null";
            $post_data['cus_country'] = DB::table('countries')->where('id', $request->user_country_id)->select('name')->first()->name;
            $post_data['cus_phone'] = Auth::user()->phone;
            //$post_data['cus_fax'] = "01711111111";

            # SHIPMENT INFORMATION
            //$post_data['ship_name'] = "Store Test";
            $post_data['ship_add1 '] = $request->shipping_customer_address ? $request->shipping_customer_address : "null";
            //$post_data['ship_add2'] = "Dhaka";
            $post_data['ship_city'] = $request->shipping_division_id ? DB::table('divisions')->where('id', $request->shipping_country_id)->select('name')->first()->name : "null";
            //$post_data['ship_state'] = "Dhaka";
            $post_data['ship_postcode'] = $request->shipping_postcode ? $request->shipping_postcode : "null";;
            $post_data['ship_country'] = $request->shipping_country_id ? DB::table('countries')->where('id', $request->shipping_country_id)->select('name')->first()->name : "null";

            # OPTIONAL PARAMETERS
            $post_data['value_a'] = "ref001";
            $post_data['value_b '] = "ref002";
            $post_data['value_c'] = "ref003";
            $post_data['value_d'] = "ref004";

            # CART PARAMETERS
            // $post_data['cart'] = json_encode(array(
            //     array("product" => "DHK TO BRS AC A1", "amount" => "200.00"),
            //     array("product" => "DHK TO BRS AC A2", "amount" => "200.00"),
            //     array("product" => "DHK TO BRS AC A3", "amount" => "200.00"),
            //     array("product" => "DHK TO BRS AC A4", "amount" => "200.00")
            // ));
            // $post_data['product_amount'] = "100";
            // $post_data['vat'] = "5";
            // $post_data['discount_amount'] = "5";
            // $post_data['convenience_fee'] = "3";

            # REQUEST SEND TO SSLCOMMERZ
            $direct_api_url = "https://sandbox.sslcommerz.com/gwprocess/v3/api.php";

            $handle = curl_init();
            curl_setopt($handle, CURLOPT_URL, $direct_api_url);
            curl_setopt($handle, CURLOPT_TIMEOUT, 30);
            curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
            curl_setopt($handle, CURLOPT_POST, 1);
            curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
            curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC


            $content = curl_exec($handle);

            $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

            if ($code == 200 && !(curl_errno($handle))) {
                curl_close($handle);
                $sslcommerzResponse = $content;
            } else {
                curl_close($handle);
                echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
                exit;
            }

            # PARSE THE JSON RESPONSE
            $sslcz = json_decode($sslcommerzResponse, true);

            if (isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL'] != "") {
                # THERE ARE MANY WAYS TO REDIRECT - Javascript, Meta Tag or Php Header Redirect or Other
                # echo "<script>window.location.href = '". $sslcz['GatewayPageURL'] ."';</script>";
                echo "<meta http-equiv='refresh' content='0;url=" . $sslcz['GatewayPageURL'] . "'>";
                # header("Location: ". $sslcz['GatewayPageURL']);
                exit;
            } else {
                echo "JSON Data parsing error!";
            }
        }

        // return OrderStorage::where('purchase_key', $purchase_key)->first()->cart_data;
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

    public function getCourierByUpazila($upazilaId)
    {
        $getCourierIdByUpId =  UpozilaCouriers::where('upazila_id', $upazilaId)->get();
        return view('frontend.shopping.ajax_view.couriers', compact('getCourierIdByUpId'));
    }

    // paypal add
    public function paywithpaypal()
    {

        $provider = new ExpressCheckout;
        $invoiceId = uniqid();
        $data = $this->cartData($invoiceId);

        // $data['total'] = $total;
        $response = $provider->setExpressCheckout($data);

        //dd($response);
        // This will redirect user to PayPal
        return redirect($response['paypal_link']);
    }
    // success


    public function paymentsuccess(Request $request)
    {

        $provider = new ExpressCheckout;
        $token = $request->token;
        $PayerID = $request->PayerID;
        $response = $provider->getExpressCheckoutDetails($token);


        $invoiceId = $response['INVNUM'] ?? uniqid();




        $data = $this->cartData($invoiceId);

        $response = $provider->doExpressCheckoutPayment($data, $token, $PayerID);
        //dd($response);
        $userid = Auth::user()->id;
        $usercartdatas = OrderPlace::where('user_id', $userid)->orderBy('id', 'DESC')->first();
        $update = OrderPlace::where('id', $usercartdatas->id)->update([
            'is_paid' => '1',
        ]);
        return "order completed";
    }

    protected function cartData($invoiceId)
    {

        $data = [];
        $data['items'] = [];

        // $userid =  \Request::getClientIp(true);
        // $usercartdatas = Cart::session($userid)->getContent();
        $userid = Auth::user()->id;
        $usercartdatas = OrderPlace::where('user_id', $userid)->orderBy('id', 'DESC')->first();
        $cartid = $usercartdatas->cart_id;

        $orderstorage = OrderStorage::where('purchase_key', $cartid)->first();

        foreach (json_decode($orderstorage->cart_data) as $key => $cart){
            $itemdetails = [
                'name' => $cart->name,
                'price' => $cart->price,
                'qty' => $cart->quantity,
            ];
            $data['items'][] = $itemdetails;
        }


        $data['invoice_id'] = $usercartdatas->order_id;
        $data['invoice_description'] = $invoiceId;
        $data['return_url'] = url('/payment/success');
        $data['cancel_url'] = url('/text');

        $total = 0;
        foreach ($data['items'] as $item) {
            $total += $item['price'] * $item['qty'];
        }
        $data['total'] = $total;

        return $data;
    }

    public function text()
    {
        return "ok";
    }
}
