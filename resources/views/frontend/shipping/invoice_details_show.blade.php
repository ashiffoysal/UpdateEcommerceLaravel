@extends('layouts.websiteapp')
@section('content')
<main class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="user-information.html">Account</a></li>
                    <li>Invoice Detail</li>
                </ul>
            </div>
        </div>
        <section class="ps-section--account">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                    @include('frontend.include.accounts.menu')
                    </div>
                    <div class="col-lg-8">
                        <div class="ps-section__right mt-12">
                            <div class="ps-section--account-setting">
                                <div class="ps-section__header">
                                    
                                    <h3>Invoice #{{$orderPlace->order_id}} -<strong>Successful delivery</strong></h3>
                                </div>
                                <div class="ps-section__content">
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <figure class="ps-block--invoice">
                                                <figcaption>Address</figcaption>
                                                <div class="ps-block__content"><strong>{{$address->name}}</strong>
                                                    <p>Address: {{$address->address}}</p>
                                                    <p>Phone: {{$address->phone}}</p>
                                                </div>
                                            </figure>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <figure class="ps-block--invoice">
                                                <figcaption>Shipping Fee</figcaption>
                                                <div class="ps-block__content">
                                                    <p>Shipping Fee: Free</p>
                                                </div>
                                            </figure>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <figure class="ps-block--invoice">
                                                <figcaption>Payment</figcaption>
                                                <div class="ps-block__content">
                                                    <p>Payment Method: Cash on Delivery</p>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table ps-table">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cartdata->products as $row)

                                                <tr>
                                                    <td>
                                                        <div class="ps-product--cart">
                                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/uploads/products/thumbnail/productdetails')}}/{{$row->thumbnail_img}}" alt=""></a></div>
                                                            <div class="ps-product__content"><a href="product-default.html">{{$row->name}}</a>
                                                            @if($row->colors)
                                                                <p>Color:<strong class="product-color" style="background: {{$row->colors}};"></strong></p>
                                                            @endif



                                                            @php
                

                                                                // store attibute name
                                                                $sizename = [];
                                                                $productdetails = App\Product::findOrFail($row->product_id);

                                                                foreach (json_decode($productdetails->choice_options) as $key => $choice) {

                                                                    $size = $choice->title; //this reaturn size,model
                                                                    $choicename = $choice->name; //this reaturn form name  
                                                                    array_push($sizename, $size);
                                                                }
                                                                $countsize = count($sizename);
                                                                
                                                                
                                                            @endphp

                                                                                                        

                                                        @if($countsize == 1)
                                                            @php
                                                                $sizenameone =$sizename[0];
                                                            @endphp
                                                            <p>{{$sizename[0]}}:<strong> {{$row->$sizenameone}}</strong></p>


                                                        @elseif($countsize == 2)
                                                            @php
                                                                $sizenameone =$sizename[0];
                                                                $sizenametwo =$sizename[1];
                                                            @endphp
                                                            <p>{{$sizename[0]}}:<strong> {{$row->$sizenameone}}</strong></p>
                                                            <p>{{$sizename[1]}}:<strong> {{$row->$sizenametwo}}</strong></p>


                                                        @elseif($countsize == 3)
                                                            @php
                                                                $sizenameone =$sizename[0];
                                                                $sizenametwo =$sizename[1];
                                                                $sizenamethree =$sizename[2];
                                                            @endphp
                                                            <p>{{$sizename[0]}}:<strong> {{$row->$sizenameone}}</strong></p>
                                                            <p>{{$sizename[1]}}:<strong> {{$row->$sizenametwo}}</strong></p>
                                                            <p>{{$sizename[2]}}:<strong> {{$row->$sizenamethree}}</strong></p>

                                                        @elseif($countsize == 4)

                                                            @php
                                                                $sizenameone =$sizename[0];
                                                                $sizenametwo =$sizename[1];
                                                                $sizenamethree =$sizename[2];
                                                                $sizenamefour =$sizename[3];
                                                            @endphp
                                                            <p>{{$sizename[0]}}:<strong> {{$row->$sizenameone}}</strong></p>
                                                            <p>{{$sizename[1]}}:<strong> {{$row->$sizenametwo}}</strong></p>
                                                            <p>{{$sizename[2]}}:<strong> {{$row->attributes->$sizenamethree}}</strong></p>
                                                            <p>{{$sizename[3]}}:<strong> {{$row->$sizenamefour}}</strong></p>

                                                        @endif


                                                            </div>
                                                        </div>
                                                    </td>
                                                   
                                                    <td><span><i>৳</i> {{$row->price}}</span></td>
                                                    <td>{{$row->quantity}}</td>
                                                    <td><span><i>৳</i> {{$row->price * $row->quantity}}</span></td>
                                                    @if($row->return_product == 0)
                                                    <td style="white-space: nowrap;"  class="text-right">
                                                                
    									                <a class="btn btn-danger product_return" title="Return" data-toggle="tooltip" href="{{route('customar.product.return',[$orderPlace->order_id,$row->name,$row->id])}}" data-original-title="Return"><i class="fa fa-reply"></i></a>
                                                    </td>
                                                    @else
                                                    <td style="white-space: nowrap;"  class="text-right">
                                                                
                                                    <button class="btn btn-danger product_return" data-placement="right" id="invoice_detail_toltip" style="background: red;"   data-toggle="tooltip" href="#" title="This product is returned.Witing for approval" data-original-title="Return"><i class="fa fa-reply"></i></button>
                                                    </td>
                                                    @endif
                                                    
                                                </tr>
                                                @endforeach

                                                @if($coupon !=false)
                                                <tr>
                                                    <td colspan="2"><span></span></td>
                                                    <td  class="text-right"><span><strong>Discount</strong></span></td>
                                                    @if($coupon->discount_type == 1)
                                                    <td><span><i>৳</i> {{$coupon->discount}}</span></td>
                                                    @else
                                                    <td><span> {{$coupon->discount}}<i>%</i></span></td>
                                                    @endif
                                                    
                                                </tr>
                                                @endif

                                                <tr>
                                                    <td colspan="2"><span></span></td>
                                                    
                                                    <td class="text-right"><span><strong>Total</strong></span></td>
                                                    
                                                    <td><span><i>৳</i> {{$orderPlace->total_price}}</span></td>
                                                    
                                                </tr>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="ps-section__footer"><a class="ps-btn ps-btn--sm" href="{{route('customar.invoice.show',auth()->user()->id)}}">Back to invoices</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <script src="{{asset('public/frontend')}}/plugins/jquery.min.js"></script>
 <script>
      
            $(document).ready(function() {
                $('#invoice_detail_toltip').tooltip('show');
                setTimeout(function(){ $('#invoice_detail_toltip').tooltip('hide'); }, 4000);
            });
    </script>
    
    @endsection