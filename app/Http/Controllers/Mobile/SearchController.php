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
            $products = Product::where('product_name', 'LIKE', "%$request->search_field%")
                        ->where('status', 1)
                        ->where('is_deleted', 0)
                        ->paginate(8);
            $search_field = $request->search_field;
            return view('mobile.search.search_result_page', compact('products', 'search_field'));
        }else{
            return redirect()->back();
        }
    }

    public function searchByMainCategory(Request $request)
    {


        $color_code = $request->color_code;
        $products = Product::where('product_price', '>=', $request->min_price)
                    ->where('product_price', '<=', $request->max_price)
                    ->where('status', 1)
                    ->where('is_deleted', 0)
                    ->orWhere('cate_id', $request->category_id)
                    ->orWhere('brand', $request->brand_id)
                    ->get();
                    //->orWhere('colors', 'LIKE', "%$color_code%")

        return view('mobile.search.search_result_page', compact('products'));

    }

    public function searchBySubCategory(Request $request)
    {

        $color_code = $request->color_code;
        $products = Product::orWhere('subcate_id', $request->sub_category_id)
                    ->orWhere('brand', $request->brand_id)
                    ->orWhere('colors', 'LIKE', "%$color_code%")
                    ->where('product_price', '>', 'min_price')
                    ->where('product_price', '=<', 'max_price')
                    ->where('status', 1)
                    ->where('is_deleted', 0)
                    ->get();
        return view('mobile.search.search_result_page', compact('products'));
    }

    public function searchByReSubCategory(Request $request)
    {

        $color_code = $request->color_code;
        $products = Product::orWhere('resubcate_id', $request->re_sub_category_id)
                    ->orWhere('brand', $request->brand_id)
                    //->orWhere('colors', 'LIKE', "%$color_code%")
                    ->where('product_price', '>', 'min_price')
                    ->where('product_price', '=<', 'max_price')
                    ->where('status', 1)
                    ->where('is_deleted', 0)
                    ->get();
        return view('mobile.search.search_result_page', compact('products'));
    }
}
