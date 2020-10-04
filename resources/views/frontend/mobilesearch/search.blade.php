@extends('layouts.websiteapp')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Search Result</li>
            </ul>
        </div>
    </div>
    <div class="ps-page--shop" id="shop-carousel">
        <div class="container">
         <!--    <div class="ps-carousel--nav-inside second owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on"><a href="shop-default.html"><img src="{{asset('/public/frontend')}}/img/slider/shop-carousel/1.jpg" alt=""></a><a href="shop-default.html"><img src="{{asset('/public/frontend')}}/img/slider/shop-carousel/2.jpg" alt=""></a></div> -->
          
            <div class="ps-product-list">
                <div class="ps-section__header">
                    <h3>Search Product</h3>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        @if ($searchproduct->count() > 0)
                        @foreach ($searchproduct as $product)
                       <div class="ps-product">
                                    <div class="ps-product__thumbnail"><a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">
                                        <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt=""></a>
                                        <ul class="ps-product__actions">
                                             <li><a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    
                                                    <li>
                                                         @if($product->product_type==1)
                                                    <a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}" data-toggle="tooltip" data-placement="top" data-placement="top" title="Quick View"><i class="icon-bag2"></i></a>
                                                    @else
                                                    <a class="quickview" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview" data-id="{{$product->id}}"><i class="icon-bag2"></i></a>
                                                    @endif
                                                    </li>

                                                    <li>
                                                        @if(Auth::guard('web')->check())
                                                        <a class="mywishlist" data-id="{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a>
                                                        @else
                                                         <a href="{{url('customar/login')}}" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a>
                                                        @endif
                                                    </li>

                                                    <li><a class="compare" data-id="{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#"></a>
                                        <div class="ps-product__content"><a class="ps-product__title" href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">{{$product->product_name}}</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__price">{{$product->product_price}}</p>
                                        </div>
                                        <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">{{$product->product_name}}</a>
                                            <p class="ps-product__price">{{$product->product_price}}</p>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        @else
                        <h2>No Product Found</h2>
                        @endif
                       
                      
                    </div>
                </div>
            </div>
          
          
        </div>
    </div>
    <div class="ps-newsletter">
        <div class="container">
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
    
    @endsection