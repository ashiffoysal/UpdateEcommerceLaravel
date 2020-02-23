<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productDetails($id)
    {
        
        $productdetails =Product::where('id',149)->where('is_deleted',0)->where('status',1)->first();
        return view('mobile.products.product_details',compact('productdetails'));
    }
}
