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


            // ************************************************NEW ACTION AREA START*************************************************


            // store form value
            $choseformnameattibute = [];

            // store attibute name
            $sizename = [];

            //  same add to cart
            $sameitem = [];


            $productdetails = Product::findOrFail($request->product_id);

            foreach (json_decode($productdetails->choice_options) as $key => $choice) {


                $size = $choice->title; //this reaturn size,model
                $choicename = $choice->name; //this reaturn form name  
                //    $attibute = $request->$choicename;
                array_push($choseformnameattibute, $choicename);
                array_push($sizename, $size);
            }




            $userid = $request->ip();

            $items = \Cart::session($userid)->getContent();


            $rowcount = count($sizename);
            $formvaluecount = count($choseformnameattibute);

            if (count($items) > 0) {

                // if item not empty
                
                
                


                $productCartId = 0;

                foreach ($items as $item) {


                    if ($item->attributes->product_id == $request->product_id) {
                        
                        
                        if ($rowcount == 1) {

                            
                            
                            
                            $attibutevalue = $sizename[0]; //find size,model

                            //find value l,nokia 


                            $choice = $choseformnameattibute[0];
                            

                            if ($item->attributes->$attibutevalue == $request->$choice && $item->attributes->colors == $request->color) {

                                
                                $itemid = $item->id;
                                $productCartId .= $itemid;
                            }
                        }elseif($rowcount == 2){

                            $attibutevalueone = $sizename[0]; //find size,model
                            $attibutevaluetwo = $sizename[1]; //find size,model

                            //find value l,nokia 


                            $choiceone = $choseformnameattibute[0];
                            $choicetwo = $choseformnameattibute[1];

                            // return $request->$choicetwo;
                            
                            if ($item->attributes->$attibutevalueone == $request->$choiceone && $item->attributes->$attibutevaluetwo == $request->$choicetwo && $item->attributes->colors == $request->color) {


                                $itemid = $item->id;
                                $productCartId .= $itemid;
                            }
                        }elseif($rowcount == 3){

                            $attibutevalueone = $sizename[0]; //find size,model
                            $attibutevaluetwo = $sizename[1]; //find size,model
                            $attibutevaluethree = $sizename[2]; //find size,model

                            //find value l,nokia 


                            $choiceone = $choseformnameattibute[0];
                            $choicetwo = $choseformnameattibute[1];
                            $choicethree = $choseformnameattibute[2];

                            if ($item->attributes->$attibutevalueone == $request->$choiceone && $item->attributes->$attibutevaluetwo == $request->$choicetwo && $item->attributes->$attibutevaluethree == $request->$choicethree && $item->attributes->colors == $request->color) {


                                $itemid = $item->id;
                                $productCartId .= $itemid;
                            }

                        }elseif($rowcount == 4){

                            $attibutevalueone = $sizename[0]; //find size,model
                            $attibutevaluetwo = $sizename[1]; //find size,model
                            $attibutevaluethree = $sizename[2]; //find size,model
                            $attibutevaluefour = $sizename[3]; //find size,model

                            //find value l,nokia 


                            $choiceone = $choseformnameattibute[0];
                            $choicetwo = $choseformnameattibute[1];
                            $choicethree = $choseformnameattibute[2];
                            $choicefour = $choseformnameattibute[3];

                            if ($item->attributes->$attibutevalueone == $request->$choiceone && $item->attributes->$attibutevaluetwo == $request->$choicetwo && $item->attributes->$attibutevaluethree == $request->$choicethree && $item->attributes->$attibutevaluefour == $request->$choicefour && $item->attributes->colors == $request->color) {


                                $itemid = $item->id;
                                $productCartId .= $itemid;
                            }

                        }
                        
                    }
                }



                // Loop end



                if ($productCartId != 0) {

                    // if same product
                    
                    

                    $id = $productCartId;
                    $id = intval($id);

                    


                    $add = \Cart::session($userid)->update($id, [
                        'quantity' => $request->quantity,

                    ]);
                } else {


                    // if not smae product
                    
                    
                    

                    

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
                    $data['attributes']['flashdeals'] = 0;
                    $data['attributes']['flashdealtype'] = 0;



                    $productdetails = Product::findOrFail($request->product_id);

                    foreach (json_decode($productdetails->choice_options) as $key => $choice) {
                        $choicename = $choice->name;
                        
                        $data['attributes'][$choice->title] = $request->$choicename;
                    }
                    

                    $add = Cart::session($userid)->add($data);
                    

                    if ($flashDealdiscounts) {
                        
                        

                        $data = array();
                        $data['attributes']['thumbnail_img'] = $product->thumbnail_img;
                        $data['attributes']['colors'] = $request->color;
                        $data['attributes']['product_id'] = $product->id;
                        $data['attributes']['variation'] = 'variation';
                        $data['attributes']['sku'] = $request->product_sku;
                        $data['attributes']['flashdeals'] = $flashDealdiscounts->discount;
                        $data['attributes']['flashdealtype'] = $flashDealdiscounts->discount_type;
    
    
    
                        $productdetails = Product::findOrFail($request->product_id);
    
                        foreach (json_decode($productdetails->choice_options) as $key => $choice) {
                            $choicename = $choice->name;
                            
                            $data['attributes'][$choice->title] = $request->$choicename;
                        }
                        
                        



                        Cart::session($userid)->update(
                            $id,
                            $data
                        );
                    }

                    // non variation product add
                    $product->number_of_sale++;
                    $product->save();
                }
            } else {

                


                // if cart is empty


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
                $data['attributes']['flashdeals'] = 0;
                $data['attributes']['flashdealtype'] = 0;



                $productdetails = Product::findOrFail($request->product_id);

                foreach (json_decode($productdetails->choice_options) as $key => $choice) {
                    $choicename = $choice->name;

                    $data['attributes'][$choice->title] = $request->$choicename;
                }

                $add = Cart::session($userid)->add($data);

                if ($flashDealdiscounts) {


                    $data = array();
                        $data['attributes']['thumbnail_img'] = $product->thumbnail_img;
                        $data['attributes']['colors'] = $request->color;
                        $data['attributes']['product_id'] = $product->id;
                        $data['attributes']['variation'] = 'variation';
                        $data['attributes']['sku'] = $request->product_sku;
                        $data['attributes']['flashdeals'] = $flashDealdiscounts->discount;
                        $data['attributes']['flashdealtype'] = $flashDealdiscounts->discount_type;
    
    
    
                        $productdetails = Product::findOrFail($request->product_id);
    
                        foreach (json_decode($productdetails->choice_options) as $key => $choice) {
                            $choicename = $choice->name;
                            
                            $data['attributes'][$choice->title] = $request->$choicename;
                        }
                        



                        Cart::session($userid)->update(
                            $id,
                            $data
                        );

                }

                // non variation product add
                $product->number_of_sale++;
                $product->save();
            }
















            //******************************* */ NEW ACTION AREA END**************************************************************

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
                    'flashdeals' => 0,
                    'flashdealtype' => 0,
                ],
            ]);


            if ($flashDealdiscounts) {

                Cart::session($userid)->update(
                    $product->id,
                    [

                        'attributes' => [
                            'flashdeals' => $flashDealdiscounts->discount,
                            'flashdealtype' => $flashDealdiscounts->discount_type,
                            'thumbnail_img' => $product->thumbnail_img,
                            'product_id' => $product->id,
                            'sku' => $product->product_sku,
                        ],
                    ]
                );
            }
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

        return view('frontend.include.ajaxview.header_cart', compact('countcartitems'));
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
        return view('frontend.shipping.shopping_cart');
    }


    // get cart data

    public function getCartData()
    {
        $userid =  \Request::getClientIp(true);

        $usercartdatas = Cart::session($userid)->getContent();


        return view('frontend.include.ajaxview.cartajaxdata', compact('usercartdatas'));
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


            return view('frontend.include.ajaxview.cartajaxdata', compact('usercartdatas'));
        } else {
            return 0;
        }
    }

    // checkout page show

    public function checkoutPage()
    {
        return view('frontend.shipping.checkout');
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

        return view('frontend.include.ajaxview.cartajaxdata', compact('usercartdatas'));
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
