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
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cartdata->products as $row)

                                                <tr>
                                                    <td>
                                                        <div class="ps-product--cart">
                                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/uploads/products/thumbnail/productdetails')}}/{{$row->thumbnail_img}}" alt=""></a></div>
                                                            <div class="ps-product__content"><a href="product-default.html">{{$row->name}}</a>
                                                                <p>Sold By:<strong> YOUNG SHOP</strong></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                   
                                                    <td><span><i>৳</i> {{$row->price}}</span></td>
                                                    <td>{{$row->quantity}}</td>
                                                    <td><span><i>৳</i> {{$row->price * $row->quantity}}</span></td>
                                                    
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
        <div class="ps-newsletter">
            <div class="ps-container">
                <form class="ps-form--newsletter" action="do_action" method="post">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-form__left">
                                <h3>Newsletter</h3>
                                <p>Subcribe to get information about products and coupons</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-form__right">
                                <div class="form-group--nest">
                                    <input class="form-control" type="email" placeholder="Email address">
                                    <button class="ps-btn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    @endsection