<?php

namespace App\Http\Controllers\Frontend;

use App\Product;
use App\Category;
use App\SubCategory;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{



        public function cateajax(Request $request){
            return "ok";
        }















    public function searchProductByAjax($categoryId, $productName)
    {
        //echo $productName;

        $products = "";
        if ($categoryId === "all") {
            $getProductByName = Product::where('product_name', 'LIKE', "%$productName%")->select(['id', 'product_price', 'slug', 'product_name', 'thumbnail_img'])->get();
            $products = $getProductByName;
        }
        $getMainCate = Category::where('id', $categoryId)->select(['id'])->first();
        if ($getMainCate) {
            $getProductByCategoryId = Product::where('cate_id', $getMainCate->id)->where('product_name', 'LIKE', "%$productName%")->select(['id', 'product_price', 'slug', 'product_name', 'thumbnail_img'])->get();
            $products = $getProductByCategoryId;
            return view('frontend.search.mainsearch', compact('products'));
        }
        $getSubCate = SubCategory::where('id', $categoryId)->select(['id'])->first();
        if ($getSubCate) {
            $getProductBySubCategoryId = Product::where('subcate_id', $getSubCate->id)->where('product_name', 'LIKE', "%$productName%")->select(['id', 'product_price', 'slug', 'product_name', 'thumbnail_img'])->get();
            $products = $getProductBySubCategoryId;
            return view('frontend.search.mainsearch', compact('products'));
        }

        return view('frontend.search.mainsearch', compact('products'));

    }

    public function searchProductByMainCatByAjax($categoryId, $productName)
    {
        $products = Product::where('cate_id', $categoryId)
            ->where('product_name', 'LIKE', "%$productName%")
            ->get();
        return view('frontend.search.product_by_main_category_result', compact('products'));
    }

    public function searchProductBySubCatByAjax($categoryId, $productName)
    {
        $products = Product::where('subcate_id', $categoryId)
            ->where('product_name', 'LIKE', "%$productName%")
            ->get();
        return view('frontend.search.product_by_sub_category_result', compact('products'));
    }

    public function searchProductByResubCatByAjax($categoryId, $productName)
    {
        $products = Product::where('resubcate_id', $categoryId)
            ->where('product_name', 'LIKE', "%$productName%")
            ->get();
        return view('frontend.search.product_by_re_sub_category_result', compact('products'));
    }
}
