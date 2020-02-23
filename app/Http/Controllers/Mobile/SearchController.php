<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function productSearchByAjax($product_name)
    {
        $products = Product::where('product_name', 'LIKE', "%$product_name%")->take(8)->get();
        return view('mobile.ajax_blade.search.search_product_result', compact('products'));
    }

    public function productSearchByPage(Request $request)
    {
        if ($request->search_field) {
            $products = Product::where('product_name', 'LIKE', "%$request->search_field%")->paginate(8);
            $search_field = $request->search_field;
            return view('mobile.search.search_result_page', compact('products', 'search_field'));

        }else{
            return redirect()->back();
        }

    }
}
