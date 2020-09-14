@extends('layouts.websiteapp')
@section('content')

<div id="homepage-1">
        <div class="ps-home-banner ps-home-banner--1">
            <div class="ps-container">
                <div class="ps-section__left">
                    <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                        @foreach($slider as $ban)
                        <div class="ps-banner"><a href="{{$ban->ban_link}}"><img src="{{asset('public/uploads/banner/'.$ban->ban_image)}}" alt=""></a></div>
                        @endforeach
                   
                    </div>
                </div>
                <div class="ps-section__right"><a class="ps-collection" href="#"><img src="{{asset('public/frontend')}}/img/slider/home-1/promotion-1.jpg" alt=""></a><a class="ps-collection" href="#"><img src="{{asset('public/frontend')}}/img/slider/home-1/promotion-2.jpg" alt=""></a></div>
            </div>
        </div>
        <div class="ps-site-features">
            <div class="ps-container">
                <div class="ps-block--site-features">
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-rocket"></i></div>
                        <div class="ps-block__right">
                            <h4>Free Delivery</h4>
                            <p>For all oders over $99</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-sync"></i></div>
                        <div class="ps-block__right">
                            <h4>90 Days Return</h4>
                            <p>If goods have problems</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-credit-card"></i></div>
                        <div class="ps-block__right">
                            <h4>Secure Payment</h4>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                        <div class="ps-block__right">
                            <h4>24/7 Support</h4>
                            <p>Dedicated support</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-gift"></i></div>
                        <div class="ps-block__right">
                            <h4>Gift Service</h4>
                            <p>Support gift service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($hotdeal)
        <div class="ps-deal-of-day">
            <div class="ps-container">
                <div class="ps-section__header">
                    <div class="ps-block--countdown-deal">
                        <div class="ps-block__left">
                            <h3>Deals of the day</h3>
                        </div>
                        <div class="ps-block__right">
                            <figure>
                                <figcaption>End in:</figcaption>
                                <ul class="ps-countdown" data-time="July 21, 2021 15:37:25">
                                    <li><span class="days"></span></li>
                                    <li><span class="hours"></span></li>
                                    <li><span class="minutes"></span></li>
                                    <li><span class="seconds"></span></li>
                                </ul>
                            </figure>
                        </div>
                    </div><a href="#">View all</a>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="5" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                        @foreach($hotdeal->flash_deal_details as $flasdetail)
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href=""><img src="{{asset('public/uploads/products/thumbnail/'.$flasdetail->product->thumbnail_img)}}" alt=""></a>
                                <div class="ps-product__badge">
                                    @if($flasdetail->discount_type==1) -{{$flasdetail->discount}}৳  @else -{{$flasdetail->discount}}% @endif
                                </div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">{{ $flasdetail->product->product_price }} <del></del><small>@if($flasdetail->discount_type==1) -{{$flasdetail->discount}}৳  @else -{{$flasdetail->discount}}% @endif off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">{{Str::limit($flasdetail->product->product_name,35)}}</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="82">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:18</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    
                    </div>
                </div>
            </div>
        </div>
        @endif


        <div class="ps-home-ads">
            <div class="ps-container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{asset('public/frontend')}}/img/collection/home-1/1.jpg" alt=""></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{asset('public/frontend')}}/img/collection/home-1/2.jpg" alt=""></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{asset('public/frontend')}}/img/collection/home-1/3.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-top-categories">
            <div class="ps-container">
                <h3>Top categories of the month</h3>
                <div class="row">
                    @foreach($allcategoryhome as $cateall)
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{url('product/page/'.$cateall->cate_slug)}}"></a><img src="{{asset('public/uploads/category/'.$cateall->cate_image)}}" alt="">
                            <p>{{$cateall->cate_name}}</p>
                        </div>
                    </div>
                    @endforeach
               
                </div>
            </div>
        </div>


        <!-- electonic area start from here -->
        @if($firstcate)
        <div class="ps-product-list ps-clothings">
            <div class="ps-container">
                <div class="ps-section__header">
                    <h3>{{$firstcate->cate_name}}</h3>
                    <ul class="ps-section__links">
                        <li><a href="shop-grid.html">New Arrivals</a></li>
                        <li><a href="shop-grid.html">Best seller</a></li>
                        <li><a href="shop-grid.html">Must Popular</a></li>
                        <li><a href="shop-grid.html">View All</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                        @php
                            $cate_id=$firstcate->id;
                            $allproduct=App\Product::where('is_deleted',0)->where('cate_id',$cate_id)->orderBy('id','DESC')->limit(15)->get();
                        @endphp
                        @foreach($allproduct as $product)
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}"><img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt=""></a>
                                <div class="ps-product__badge">-16%</div>


                                <!-- purchace function area start -->
                                <ul class="ps-product__actions">

                                   <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-bag2"></i></a></li>
                                    <li><a class="mywishlist" data-id="{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a class="compare" data-id="{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>

                                </ul>
                                <!-- purchace funtion area end -->


                                
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">{{$product->  product_name}}</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">৳ {{$product->product_price}} <del>৳ 670.00 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">{{$product->product_name}}</a>
                                    <p class="ps-product__price sale">৳ {{$product->product_price}} <del>৳ 670.00 </del></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- electonic area end -->


        @if($secondcate)
        <div class="ps-product-list ps-clothings">
            <div class="ps-container">
                <div class="ps-section__header">
                    <h3>{{$secondcate->cate_name}}</h3>
                    <ul class="ps-section__links">
                        <li><a href="shop-grid.html">New Arrivals</a></li>
                        <li><a href="shop-grid.html">Best seller</a></li>
                        <li><a href="shop-grid.html">Must Popular</a></li>
                        <li><a href="shop-grid.html">View All</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                       
                        @php
                            $cate_id=$secondcate->id;
                            $allproducts=App\Product::where('is_deleted',0)->where('cate_id',$cate_id)->orderBy('id','DESC')->limit(15)->get();
                        @endphp
                       @foreach($allproducts as $products)
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/uploads/products/thumbnail/'.$products->thumbnail_img)}}" alt=""></a>
                                <div class="ps-product__badge">-16%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="">{{$products->product_name}}</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">৳{{$products->product_price}}<del>৳670.00 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="">{{$products->product_name}}</a>
                                    <p class="ps-product__price sale">৳{{$products->product_price}} <del>৳670.00 </del></p>
                                </div>
                            </div>
                        </div>
                      @endforeach

              
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($thirdcate)
        <div class="ps-product-list ps-garden-kitchen">
            <div class="ps-container">
                <div class="ps-section__header">
                    <h3>{{$thirdcate->cate_name}}</h3>
                    <ul class="ps-section__links">
                        <li><a href="shop-grid.html">New Arrivals</a></li>
                        <li><a href="shop-grid.html">Best seller</a></li>
                        <li><a href="shop-grid.html">Must Popular</a></li>
                        <li><a href="shop-grid.html">View All</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                        @php
                        $cate_id=$thirdcate->id;
                        $allproducts=App\Product::where('is_deleted',0)->where('cate_id',$cate_id)->orderBy('id','DESC')->limit(15)->get();
                        @endphp
                        @foreach($allproducts as $product)
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt=""></a>
                                <div class="ps-product__badge">-16%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">{{$product->product_name}}</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">৳ {{$products->product_price}}<del>৳ 670.00 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                    <p class="ps-product__price sale">৳ {{$products->product_price}}<del>৳ 670.00 </del></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="ps-home-ads">
            <div class="ps-container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{asset('public/frontend')}}/img/collection/home-1/ad-1.jpg" alt=""></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{asset('public/frontend')}}/img/collection/home-1/ad-2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-download-app">
            <div class="ps-container">
                <div class="ps-block--download-app">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                <div class="ps-block__thumbnail"><img src="{{asset('public/frontend')}}/img/app.png" alt=""></div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                <div class="ps-block__content">
                                    <h3>Download Martfury App Now!</h3>
                                    <p>Shopping fastly and easily more with our app. Get a link to download the app on your phone</p>
                                    <form class="ps-form--download-app" action="do_action" method="post">
                                        <div class="form-group--nest">
                                            <input class="form-control" type="Email" placeholder="Email Address">
                                            <button class="ps-btn">Subscribe</button>
                                        </div>
                                    </form>
                                    <p class="download-link"><a href="#"><img src="{{asset('public/frontend')}}/img/google-play.png" alt=""></a><a href="#"><img src="{{asset('public/frontend')}}/img/app-store.png" alt=""></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ps-product-list ps-new-arrivals">
            <div class="ps-container">
                <div class="ps-section__header">
                    <h3>Hot New Arrivals</h3>
                    <ul class="ps-section__links">
                        <li><a href="shop-grid.html">Technologies</a></li>
                        <li><a href="shop-grid.html">Electronic</a></li>
                        <li><a href="shop-grid.html">Furnitures</a></li>
                        <li><a href="shop-grid.html">Clothing & Apparel</a></li>
                        <li><a href="shop-grid.html">Health & Beauty</a></li>
                        <li><a href="shop-grid.html">View All</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        @foreach($newproduct as $product)
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product--horizontal">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt=""></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">{{$product->product_name}}</a>
                                    <p class="ps-product__price">৳ {{$product->product_price}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
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
    </div>
@endsection