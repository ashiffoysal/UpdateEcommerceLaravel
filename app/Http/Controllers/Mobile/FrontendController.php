<?php

namespace App\Http\Controllers\Mobile;

use App\FlashDeal;
use App\FlashDealDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
