<?php

namespace App\Http\Controllers\Frontend;

use Exception;
use Throwable;
use Stripe\Charge;
use Stripe\Stripe;
use App\OrderPlace;
use App\PaymentDetail;
use Illuminate\Http\Request;
use App\Mail\PaymentSuccessMail;
use Stripe\Exception\CardException;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    public function index($payment_secure_id)
    {
        $orderInfo = OrderPlace::where('user_id', Auth::user()->id)->where('payment_secure_id', $payment_secure_id)->firstOrFail();
        if ($orderInfo) {
            return view('frontend.payment.stripe', compact('orderInfo'));
        }
    }

    public function successStripePaymentView()
    {
        return view('frontend.payment.stripe_success_payment_page');
    }

    public function stripeSubmit(Request $request, $payment_secure_id)
    {
        date_default_timezone_set('Asia/Dhaka');
        $getPlaceOrder = OrderPlace::where('payment_secure_id', $payment_secure_id)->first();
        abort_if(!$getPlaceOrder, 403);
        $this->validate($request, [
            'holder_name' => 'required',
        ]);

        try {

            Stripe::setApiKey(env('STRIPE_SECRET'));
            $charge =  Charge::create([
                "amount" => $request->total_price * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => Auth::user()->email,
                'metadata' => [
                    'quantity' => $request->total_quantity,
                    'total_payable' => $request->total_price,
                    'invoice_no' => $request->invoice_no,
                ],
            ]);

            if ($charge->status === "succeeded") {
                $sources = $charge->source;
                PaymentDetail::insert([
                    'provider_name' => 'Stripe',
                    'card_id' => $sources->id,
                    'order_place_id' => $getPlaceOrder->id,
                    'date' => date('d/m/Y'),
                    'time' => date('h:i:s'),
                    'address_zip' => $sources->address_zip,
                    'card_brand' => $sources->brand,
                    'country' => $sources->country,
                    'funding' => $sources->funding,
                    'last_four_digits' => $sources->last4,
                    'card_holder_name' => $sources->name,
                    'expire_month' => $sources->exp_month,
                    'expire_year' => $sources->exp_year,
                    'currency_type' => $charge->currency,
                    'pay_amount' => $charge->amount,
                ]);

                OrderPlace::where('id', $request->order_id)->update([
                    'status' => 1,
                    'is_paid' => 1,
                ]);

                if (Auth::user()->email) {
                    Mail::to(Auth::user()->email)->send(new PaymentSuccessMail($getPlaceOrder));
                }

                OrderPlace::where('id', $request->order_id)->update([
                    'payment_secure_id' => null
                ]);
            }

            session()->flash('success', 'Thank you, Successfully payment accepted');
            return redirect()->route('payment.stripe.success.view');
        } catch (CardException $e) {
            return Redirect::refresh()->withErrors(['error', $e->getMessage()]);
        }

        // Stripe::setApiKey(env('STRIPE_SECRET'));
        // $charge = Charge::create([
        //     "amount" => $request->total_price * 100,
        //     "currency" => "usd",
        //     "source" => $request->stripeToken,
        //     'description' => 'Order',
        //     'receipt_email' => "admin@email.com",
        //     'metadata' => [
        //         'quantity' => 3,
        //         'total_payable' => 1200,
        //     ],
        // ]);

        // dd($charge);
    }

    public function sslSuccess(Request $request)
    {
        // echo "payment success";
        // echo "Transaction is Successful";
        // echo $tran_id = $request->input('tran_id');
        // echo $amount = $request->input('amount');
        // echo $currency = $request->input('currency');
        //dd($request->all());
        date_default_timezone_set('Asia/Dhaka');
        $information = $request->all();
        if ($request->status === "VALID") {

            $updateOrderPlace = OrderPlace::where('order_id', $request->tran_id)->update([
                'is_paid' => 1,
                'status' => 1
            ]);
            $getOrderPlace = OrderPlace::where('order_id', $request->tran_id)->first();

            PaymentDetail::insert([
                'provider_name' => "SSL-COMMERZ",
                'order_place_id' => $getOrderPlace->id,
                'transition_id' => $request->tran_id,
                'pay_amount' => $request->amount,
                'card_type' => $request->card_type,
                'card_brand' => $request->card_brand,
                'card_issuer_country' => $request->card_issuer_country,
                'card_issuer_country_code' => $request->card_issuer_country_code,
                'val_id' => $request->val_id,
                'last_four_digits' => $request->card_no,
                'currency_type' => $request->currency_type,
                'store_amount' => $request->store_amount,
                'card_issuer' => $request->card_issuer,
                'bank_trans_id' => $request->bank_tran_id,
                'date' => date('d/m/Y'),
                'time' => date('h:i:s'),
            ]);

            OrderPlace::where('id', $request->order_id)->update([
                'status' => 1,
                'is_paid' => 1,
            ]);

            if (Auth::user()->email) {
                Mail::to(Auth::user()->email)->send(new PaymentSuccessMail($getOrderPlace));
            }

            return view('frontend.payment.ssl_commerce.success', compact('information'));
        }
    }
    public function sslFail(Request $request)
    {
        // dd($request->all());
        if ($request->status === "FAILED") {
            return view('frontend.payment.ssl_commerce.failed');
        }
    }
    public function sslCancel()
    {
        return view('frontend.payment.ssl_commerce.cancel');
    }
}
