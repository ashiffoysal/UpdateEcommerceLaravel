<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Product;
use App\FlashDealDetail;
use Illuminate\Http\Request;
use Cart;

class AddToCartController extends Controller
{


    // Product Add To cart

    public function addToCart(Request $request)
    {



        $product = Product::findOrFail($request->product_id);

        $userid = $request->ip();

        // variation product add

        if ($product->product_type == 1) {

            $flashDealdiscounts = FlashDealDetail::where('product_id', $request->product_id)->first();
            if ($flashDealdiscounts) {

                if ($flashDealdiscounts->discount_type == 1) {

                    $product_price = $request->product_price - $flashDealdiscounts->discount;
                } else {
                    $perdiscount = ($flashDealdiscounts->discount * $request->product_price) / 100;

                    $product_price = $request->product_price - $perdiscount;
                }
            } else {
                $product_price = $request->product_price;
            }


            $id = rand(5, 15);

            $data = array();
            $data['id'] = $id;
            $data['name'] = $product->product_name;
            $data['price'] = $product_price;
            $data['quantity'] = +$request->quantity;
            $data['attributes']['thumbnail_img'] = $product->thumbnail_img;
            $data['attributes']['colors'] = $request->color;
            $data['attributes']['product_id'] = $product->id;
            $data['attributes']['variation'] = 'variation';
            $data['attributes']['sku'] = $request->product_sku;

            $productdetails = Product::findOrFail($request->product_id);

            foreach (json_decode($productdetails->choice_options) as $key => $choice) {
                $choicename = $choice->name;

                $data['attributes'][$choice->title] = $request->$choicename;
            }

            $add = Cart::session($userid)->add($data);
            // non variation product add
            $product->number_of_sale++;
            $product->save();
        } else {
            $flashDealdiscounts = FlashDealDetail::where('product_id', $request->product_id)->first();
            if ($flashDealdiscounts) {

                if ($flashDealdiscounts->discount_type == 1) {

                    $product_price = $request->product_price - $flashDealdiscounts->discount;
                } else {
                    $perdiscount = ($flashDealdiscounts->discount * $request->product_price) / 100;

                    $product_price = $request->product_price - $perdiscount;
                }
            } else {
                $product_price = $request->product_price;
            }


            $add = Cart::session($userid)->add([
                'id' => $product->id,
                'name' => $product->product_name,
                'price' => $product_price,
                'quantity' => +$request->quantity,
                'attributes' => [
                    'thumbnail_img' => $product->thumbnail_img,
                    'product_id' => $product->id,
                    'sku' => $product->product_sku,
                ],
            ]);
        }

        $product->number_of_sale++;
        $product->save();

        $userid = $request->ip();
        // $getcartdatas = Cart::session($userid)->getContent();
        $quantity = Cart::session($userid)->getTotalQuantity();
        $gettotal = Cart::session($userid)->getTotal();



        if ($add) {
            return response()->json([

                'quantity' => $quantity,
                'total' => $gettotal,
            ]);
        }
    }



    // product add to cart show



    public function addToCartShow(Request $request)
    {

        $countcartitems = Cart::session($request->user_id)->getContent();
        return view('frontend.include.ajaxview', compact('countcartitems'));
    }


    // product add to cart Deleted

    public function addToCartDelete(Request $request)
    {

        $userid = $request->ip();

        $datadelete = Cart::session($userid)->remove($request->user_id);
        $getcartdatas = Cart::session($userid)->getContent();

        if ($datadelete) {
            $items = 0;
            $price = 0;

            foreach (Cart::session($userid)->getContent() as $item) {
                $items -= $item->quantity;
                $price -= $item->price * $items;
            }
        }

        return response()->json([
            'quantity' => $items,
            'price' => $price
        ]);
    }

    // Product add to view cart page


    public function productViewCart()
    {
        return view('frontend.shopping.cart');
    }


    // get cart data

    public function getCartData()
    {
        $userid =  \Request::getClientIp(true);

        $usercartdatas = Cart::session($userid)->getContent();


        return view('frontend.shopping.cartajaxdata', compact('usercartdatas'));
    }


    // update view cart product

    public function viewCartUpdate(Request $request)
    {
        $userid =  \Request::getClientIp(true);
        $updatecart = Cart::session($userid)->update(
            $request->rowid,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity,
                ),
            )
        );



        if ($updatecart) {



            $userid =  \Request::getClientIp(true);

            $usercartdatas = Cart::session($userid)->getContent();


            return view('frontend.shopping.cartajaxdata', compact('usercartdatas'));
        } else {
            return 0;
        }
    }


    // update view cart deleted

    public function viewCartDelete(Request $request)
    {
        $userid =  \Request::getClientIp(true);

        $deletedproduct = Cart::session($userid)->remove($request->cartid);

        return redirect()->route('product.cart.add');
    }


    // shopping cart delete
    public function cartDataDelete(Request $request)
    {
        $userid =  \Request::getClientIp(true);
        $datadelete = Cart::session($userid)->remove($request->user_id);
        $usercartdatas = Cart::session($userid)->getContent();
        return view('frontend.shopping.cartajaxdata', compact('usercartdatas'));
    }


    // show total price in frontend

    public function showTotalPrice()
    {
        $userid =  \Request::getClientIp(true);
        // $getcartdatas = Cart::session($userid)->getContent();
        $quantity = Cart::session($userid)->getTotalQuantity();
        $gettotal = Cart::session($userid)->getTotal();
        return response()->json([

            'quantity' => $quantity,
            'total' => $gettotal,
        ]);
    }
}
