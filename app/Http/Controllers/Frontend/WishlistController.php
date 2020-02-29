<?php

namespace App\Http\Controllers\Frontend;


use App\wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    public function index()
    {
        $user_id = Auth::id();
        $allwishlist = wishlist::where('user_id', $user_id)->get();
        return view('frontend.shopping.wishlist', compact('allwishlist'));
    }
    public function insert(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = Auth::id();
            $check = wishlist::where('product_id', $id)->first();
            if ($check) {
                return response()->json(['check' => $check]);
            } else {
                $insert = wishlist::insert([
                    'product_id' => $id,
                    'user_id' => $user_id,
                    'created_at' => Carbon::now()->toDateTime(),
                ]);
                if ($insert) {
                    return response()->json($insert);
                }
            }
        } else {
            return redirect()->back();
        }
    }
    // delete
    public function delete($id)
    {
        $delete = wishlist::where('id', $id)->delete();
        if ($delete) {
            $notification = array(
                'messege' => 'Wish List Product Delete',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Wish List Product Delete Faild',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}
