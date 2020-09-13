<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CompareProduct;

class CompareProductController extends Controller
{

    public function productCompare()
    {      
        // $userip = Request::ip();
        // return $userip;
        // $allproduct = CompareProduct::where('ip_address', $userip)->orderBy('id','DESC')->get();
        //dd($allproduct);
        return view('frontend.shipping.compare');
    }


    public function necompare(Request $request, $com_id)
    {
        //return $com_id;

        $userid = $request->ip();
        //return $userid;
        $checkproduct = CompareProduct::where('product_id', $com_id)->first();
        $checkip = CompareProduct::where('ip_address', $userid)->first();
        $comcount = CompareProduct::where('ip_address', $userid)->count();

        //echo $comcount;

        if ($checkproduct && $checkip) {
            return response()->json(['checkip' => $checkip]);
            return response()->json(['comcount' => $comcount]);
        } else {
            $compare = CompareProduct::insertGetId([
                'ip_address' => $userid,
                'product_id' => $com_id,
            ]);
            if ($compare) {
                return response()->json(['compare' => $compare]);
                return response()->json(['comcount' => $comcount]);
            }
        }
    }
    public function delete(Request $request)
    {
        //return $id;
        $delete = CompareProduct::where('id', $request->id)->delete();
        return view('frontend.shipping.compareajax');
      
    }

    public function getCompare(){

        return view('frontend.shipping.compareajax');
    }
}
