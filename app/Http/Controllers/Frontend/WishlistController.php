<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\wishlist;
use Carbon\Carbon;
use App\Product;
use Image;
use Auth;
use Cart;

class WishlistController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth:web');
    }
    public function index(){
		$user_id = Auth::id();
		$allwishlist=wishlist::where('user_id',$user_id)->get();
    	return view('frontend.shopping.wishlist',compact('allwishlist'));
    }
    public function insert(Request $request,$id){
		if(Auth::check()){
    		$user_id = Auth::id();
    		$check=wishlist::where('product_id',$id)->first();
    		if($check){
    			return response()->json(['check'=>$check]);
    		}else{
    			$insert=wishlist::insert([
    			'product_id'=>$id,
    			'user_id'=>$user_id,
    			'created_at'=>Carbon::now()->toDateTime(),
	    		]);
	    		if($insert){
	    			return response()->json($insert);
	    		}
			}
		}else{
			return redirect()->back();
		}
    		
	}
	// delete
	public function delete($id){
		$delete=wishlist::where('id',$id)->delete();
		return response()->json($delete);
	}

	
	




}
