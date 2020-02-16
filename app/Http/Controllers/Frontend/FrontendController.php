<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\ThemeSelector;
use Illuminate\Http\Request;
use App\Product;
use App\OrderPlace;
use App\Category;
use App\SubCategory;
use App\FlashDeal;
use App\ReSubCategory;
use App\Color;
use App\ProductReview;
use App\FlashDealDetail;
use App\OrderStorage;
use Carbon\Carbon;
use DB;
use Auth;

class FrontendController extends Controller
{
    // Frontend showing page
    public function index()
    {
        foreach (ThemeSelector::where('status', 1)->get() as $themeselector) {

            $to = Carbon::now()->format('Y-m-d');
            $from = date('Y-m-d', strtotime('+30 days', strtotime($to)));
            $hotdeals = FlashDeal::where('status', 1)->where('is_deleted', 0)->orderBy('id', 'DESC')->first();
            //return  $hotdeals;
            return view($themeselector->theme_name, compact('hotdeals'));
        }
    }

    // About us page show

    public function aboutus()
    {
        return view('frontend.aboutus.aboutus1');
    }

    public function faqpage()
    {
        return view('frontend.faq.faq');
    }
    // support
    public function supportpage()
    {
        return view('frontend.support.support');
    }
    public function warrantypage()
    {
        return view('frontend.warranty.warranty');
    }


    // Category page show

    public function cateproduct($slug)
    {
        $category = Category::where('cate_slug', $slug)->first();


        return view('frontend.products.products', compact('category'));
    }

    // subcategory show
    public function subcateproduct($cate_slug, $subcate_slug)
    {
        $subcate = SubCategory::where('subcate_slug', $subcate_slug)->first();
        return view('frontend.products.subcate', compact('subcate'));
    }
    // resubcate product
    public function resubcateproduct($cate_slug, $subcate_slug, $resub_slug)
    {

        $resubcate = ReSubCategory::where('resubcate_slug', $resub_slug)->first();
        return view('frontend.products.resubcategory', compact('resubcate'));
    }

    // Product Details page show

    public function productDetails($slug, $id)
    {
        $productdetails = Product::where('id', $id)->first();
        $checkFlashDeal = 0;
        $flashDeal = FlashDeal::where('status', 1)->select('id', 'end_date')->first();
        $flashDealEndDate = $flashDeal->end_date;
        $flashDealDetails = FlashDealDetail::where('product_id', $id)->where('flash_deal_id', $flashDeal->id)->first();
        if ($flashDealDetails) {
            $checkFlashDeal = 1;
        }

        return view('frontend.products.product_details', compact('productdetails', 'checkFlashDeal', 'flashDealEndDate'));
    }

    // Product compare page show

    // Product wishlist page show

    public function productWishlist()
    {
        return view('frontend.shopping.wishlist');
    }

    // // Customer Login page show
    // public function customerLogin ()
    // {
    //     return view('frontend.accounts.login');
    // }


    // // Customer Register page show
    // public function customerRegister ()
    // {
    //     return view('frontend.accounts.register');
    // }

    // Customer Account page show
    // public function customerAccount ()
    // {
    //     return view('frontend.accounts.account');
    // }

    // customer Order page show
    public function customerOrder()
    {
        $user_id = Auth::id();
        $history = OrderPlace::where('user_id', $user_id)->orderBy('id', 'DESC')->paginate(5);
        return view('frontend.accounts.order_history', compact('history'));
    }


    // customer Order information page show
    public function customerOrderInfo($id)
    {
        $orderplaceid = OrderPlace::where('id', $id)->first();
        return view('frontend.accounts.order_information', compact('orderplaceid'));
    }

    // Customer Order Return page show
    public function customerOrderReturn()
    {
        return view('frontend.accounts.product_return');
    }

    // Customer gift voucher Return page show
    public function customerGiftVoucher()
    {
        return view('frontend.accounts.gift_voucher');
    }

    // product view single
    // modal
    public function productmodal($id)
    {
        $productdetails = Product::where('id', $id)->first();
        return view('frontend.products.productmodal', compact('productdetails'));
    }

    // price show variant wise
    public function provarient(Request $request)
    {
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
        } else {
            $price = $product->product_price;
        }
        return array('price' => $price);
    }

    // category details
    // public function categorydetails($slug){
    //     $catedetails=Category::where('cate_slug',$slug)->first();
    //     return view('frontend.products.products',compact('varname'))
    // }


    public function searchcate()
    {
        $new = $_GET['search_content'];
        $productsearch = Product::where('product_sku', 'LIKE', '%' . $new . '%')->orderBy('id', 'DESC')->get();
        // return json_encode($productsearch);
        return view('frontend.products.search', compact('productsearch'));
    }


    public function flashDealProducts()
    {
        $flash_deal = FlashDeal::with('flash_deal_details')->where('status', 1)->where('is_deleted', 0)->first();
        $flash_deal_end_date = $flash_deal->end_date;
        $flash_deal_details = FlashDealDetail::with('product')->where('flash_deal_id', $flash_deal->id)->paginate(16);
        return view('frontend.hot_deal.hot_deal_products', compact('flash_deal_details', 'flash_deal_end_date'));
    }


    // tracking
    public function tracking()
    {
        return view('frontend.tracking.trakingproduct');
    }
    //
    public function ordertracking(Request $request)
    {
        $orderid = $request->order_id;
        $trackingresult = OrderPlace::where('order_id', $orderid)->first();
        return view('frontend.tracking.trackingresult', compact('trackingresult'));
    }
    // product review
    public function productreview(Request $request)
    {
        $insert = ProductReview::insertGetId([
            'name' => $request['name'],
            'description' => $request['description'],
            'review' => $request['review'],
            'product_id' => $request['product_id'],
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
}
