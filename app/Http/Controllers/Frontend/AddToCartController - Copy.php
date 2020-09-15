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


            // get the value of attibuate name from database of this product

            if(count($items) > 0){
                
                foreach ($items as $item) {



                    
                    if($rowcount == 1){
                        $attibutevalue = $sizename[0]; //find size,model
    
                        //find value l,nokia 
    
                        $choice = $choseformnameattibute[0];
    
                         $request->$choice;

                         
                         if($item->attributes->$attibutevalue == $request->$choice){

                            
                                $id = $item->id;
                                $update =Cart::session($userid)->update(
                                $id,
                                [
            
                                    'quantity' => 2,
                                ]
                            );
                         }else{

                            
                            
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
                            $data['attributes']['slug'] = $product->slug;
                            $data['attributes']['flashdeals'] = 0;
                            $data['attributes']['flashdealtype'] = 0;
                
                
                
                            $productdetails = Product::findOrFail($request->product_id);
                
                            foreach (json_decode($productdetails->choice_options) as $key => $choice) {
                
                                $choicename = $choice->name;
                                $data['attributes'][$choice->title] = $request->$choicename;
                            }
                
                
                            $add = Cart::session($userid)->add($data);
                         }
                    }elseif($rowcount == 2){


                        $attibutevalueone = $sizename[0]; //find size,model
     
                         $choiceone = $choseformnameattibute[0];

                         
                       $attibutevaluetwo = $sizename[1]; //find size,model
     
                        $choicetwo = $choseformnameattibute[1];
     
                          
 
                          if($item->attributes->$attibutevalueone == $request->$choiceone && $item->attributes->$attibutevaluetwo == $request->$choicetwo){
 
                                     $id = $item->id;
                                 $update =Cart::session($userid)->update(
                                 $id,
                                 [
             
                                     'quantity' => 2,
                                 ]
                             );
                          }else{
                              
                            

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
                            $data['attributes']['slug'] = $product->slug;
                            $data['attributes']['flashdeals'] = 0;
                            $data['attributes']['flashdealtype'] = 0;
                
                
                
                            $productdetails = Product::findOrFail($request->product_id);
                
                            foreach (json_decode($productdetails->choice_options) as $key => $choice) {
                
                                $choicename = $choice->name;
                                $data['attributes'][$choice->title] = $request->$choicename;
                            }
                
                
                            $add = Cart::session($userid)->add($data);
                          }
                    }
                    

                    // $i = 0;
                    // while ($i < $rowcount) {
    
                    //     $attibutevalue = $sizename[$i]; //find size,model
    
                    //     $item->attributes->$attibutevalue; //find value l,nokia 
    
                    //     $choice = $choseformnameattibute[$i];
    
                    //     $request->$choice;
    
                        // if ($item->attributes->$attibutevalue == $request->$choice) {
                            
                            
    
                        //     $id = $item->id;
                        //     $update =Cart::session($userid)->update(
                        //         $id,
                        //         [
            
                        //             'quantity' => 2,
                        //         ]
                        //     );
    
    
    
                        // } else {
    

    
                        //     $id = rand(5, 15);
    
                        //     $data = array();
                        //     $data['id'] = $id;
                        //     $data['name'] = $product->product_name;
                        //     $data['price'] = $product_price;
                        //     $data['quantity'] = +$request->quantity;
                        //     $data['attributes']['thumbnail_img'] = $product->thumbnail_img;
                        //     $data['attributes']['colors'] = $request->color;
                        //     $data['attributes']['product_id'] = $product->id;
                        //     $data['attributes']['variation'] = 'variation';
                        //     $data['attributes']['sku'] = $request->product_sku;
                        //     $data['attributes']['slug'] = $product->slug;
                        //     $data['attributes']['flashdeals'] = 0;
                        //     $data['attributes']['flashdealtype'] = 0;
                
                
                
                        //     $productdetails = Product::findOrFail($request->product_id);
                
                        //     foreach (json_decode($productdetails->choice_options) as $key => $choice) {
                
                        //         $choicename = $choice->name;
                        //         $data['attributes'][$choice->title] = $request->$choicename;
                        //     }
                
                
                        //     $add = Cart::session($userid)->add($data);




                        //     $quantity = Cart::session($userid)->getTotalQuantity();
                        //     $gettotal = Cart::session($userid)->getTotal();


                        //     if($add){
                        //         return response()->json([
                    
                        //             'quantity' => $quantity,
                        //             'total' => $gettotal,
                        //         ]);
                        //     }
                        // }
    
                        
                    // }
                }
            }else{

                

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
                $data['attributes']['slug'] = $product->slug;
                $data['attributes']['flashdeals'] = 0;
                $data['attributes']['flashdealtype'] = 0;
    
    
    
                $productdetails = Product::findOrFail($request->product_id);
    
                foreach (json_decode($productdetails->choice_options) as $key => $choice) {
    
                    $choicename = $choice->name;
                    $data['attributes'][$choice->title] = $request->$choicename;
                }
    
    
                $add = Cart::session($userid)->add($data);

            }

            

            



            










            if ($flashDealdiscounts) {

                Cart::session($userid)->update(
                    $id,
                    [

                        'attributes' => [
                            'flashdeals' => $flashDealdiscounts->discount,
                            'flashdealtype' => $flashDealdiscounts->discount_type,
                            'thumbnail_img' => $product->thumbnail_img,
                            'colors' => $request->color,
                            'product_id' => $product->id,
                            'variation' => 'variation',
                            'sku' => $request->product_sku,
                            'slug' => $product->slug,
                        ],
                    ]
                );
            }

            // non variation product add
            $product->number_of_sale++;
            $product->save();
            // non variation product add
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
                    'slug' => $product->slug,
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
                            'slug' => $product->slug,
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



       
            return response()->json([

                'quantity' => $quantity,
                'total' => $gettotal,
            ]);
        
            

    }




    public function addcartdata($request, $product)
    {
        
                            $id = rand(5, 15);
    
                            $data = array();
                            $data['id'] = $id;
                            $data['name'] = $product->product_name;
                            $data['price'] = 150;
                            $data['quantity'] = +$request->quantity;
                            $data['attributes']['thumbnail_img'] = $product->thumbnail_img;
                            $data['attributes']['colors'] = $request->color;
                            $data['attributes']['product_id'] = $product->id;
                            $data['attributes']['variation'] = 'variation';
                            $data['attributes']['sku'] = $request->product_sku;
                            $data['attributes']['slug'] = $product->slug;
                            $data['attributes']['flashdeals'] = 0;
                            $data['attributes']['flashdealtype'] = 0;
                
                
                
                            $productdetails = Product::findOrFail($request->product_id);
                
                            foreach (json_decode($productdetails->choice_options) as $key => $choice) {
                
                                $choicename = $choice->name;
                                $data['attributes'][$choice->title] = $request->$choicename;
                            }
                
                            $userid = "123456789";
                
                            $add = Cart::session($userid)->add($data);




                            $quantity = Cart::session($userid)->getTotalQuantity();
                            $gettotal = Cart::session($userid)->getTotal();


                            return 'ok';
                            if($add){
                                return response()->json([
                    
                                    'quantity' => $quantity,
                                    'total' => $gettotal,
                                ]);
                            }
                        }
    
                        
                    

    // check if this product already exited in cart

    public function checkExitCartProduct($request)
    {
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


        // get the value of attibuate name from database of this product

        foreach ($items as $item) {

            $i = 0;
            while ($i < $rowcount) {

                $attibutevalue = $sizename[$i]; //find size,model

                $item->attributes->$attibutevalue; //find value l,nokia 

                $choice = $choseformnameattibute[$i];

                $request->$choice;

                if ($item->attributes->$attibutevalue == $request->$choice) {
                    array_push($sameitem, $item->id);
                } else {
                    return false;
                }
            }
        }

        return $sameitem;
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
