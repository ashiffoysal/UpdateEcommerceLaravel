<?php

namespace App\Http\Controllers\Frontend;


use Stripe\Charge;
use Stripe\Stripe;
use App\OrderPlace;
use App\UserAddress;
use App\PaymentDetail;
use App\ProductStorage;
use App\Logo;
use Illuminate\Http\Request;
use App\Mail\PaymentSuccessMail;
use Illuminate\Support\Facades\DB;
use Stripe\Exception\CardException;
use App\Http\Controllers\Controller;
use App\ShippingAddress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    
}
