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
                    </div><a href="{{ route('hot.deal.products') }}">View all</a>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="5" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                        @foreach($hotdeal->flash_deal_details as $flasdetail)
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="{{url('product/')}}/{{$flasdetail->product->slug}}/{{$flasdetail->product->id}}"><img src="{{asset('public/uploads/products/thumbnail/'.$flasdetail->product->thumbnail_img)}}" alt=""></a>
                                <div class="ps-product__badge">
                                    @if($flasdetail->discount_type==1) -{{$flasdetail->discount}}৳  @else -{{$flasdetail->discount}}% @endif
                                </div>
                                <ul class="ps-product__actions">
                                    <li><a href="{{url('product/')}}/{{$flasdetail->product->slug}}/{{$flasdetail->product->id}}" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li>
                                        @if(Auth::guard('web')->check())
                                        <a class="mywishlist" data-id="{{$flasdetail->product->id}}" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a>
                                        @else
                                         <a href="{{url('customar/login')}}" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a>
                                        @endif

                                    </li>

                                    <li><a class="compare" data-id="{{$flasdetail->product->id}}" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                 @if($flasdetail->discount_type==1)
                                <p class="ps-product__price sale">৳{{$flasdetail->product->product_price - $flasdetail->discount}}<del>৳{{ $flasdetail->product->product_price }}</del>
                                   
                                </p>
                                @elseif($flasdetail->discount_type==2)
                                 @php
                                    $dis=($flasdetail->discount * $flasdetail->product->product_price)/100;

                                @endphp
                                <p class="ps-product__price sale">৳{{$flasdetail->product->product_price - $dis}}<del>{{ $flasdetail->product->product_price }}</del>
                                   
                                </p>

                                @endif
                                <div class="ps-product__content"><a class="ps-product__title" href="{{url('product/')}}/{{$flasdetail->productslug}}/{{$flasdetail->product->id}}">{{Str::limit($flasdetail->product->product_name,35)}}</a>
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
                                        <!-- <p>Sold:18</p> -->
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
                      @php
                        $flashdealdetail = App\FlashDealDetail::where('product_id',$product->id)->where('status',1)->get();
                      @endphp
                       @if(count($flashdealdetail) > 0)
                        @foreach($flashdealdetail as $row)
                                   <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>
                                    @if($row ->discount_type == 1 )
                                     <div class="ps-product__badge">
                                        - ৳ {{$row->discount}}
                                     </div>
                                    @elseif($row ->discount_type == 2)
                                    <div class="ps-product__badge">
                                        -{{$row->discount}}%
                                         </div>
                                    @endif
                        @endforeach
                      @endif
                               


                                <!-- purchace function area start -->
                                <ul class="ps-product__actions">

                                   <li><a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-eye"></i></a></li>

                                  
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
                                <!-- purchace funtion area end -->


                                
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
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
                                    <p class="ps-product__price sale"> 
                                 @if(count($flashdealdetail) > 0)
                                     @foreach($flashdealdetail as $row)
                                        <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>
                                        @if($row ->discount_type == 1 )
                                            ৳ {{$product->product_price - $row->discount}}
                                            <del>৳ {{$product->product_price}} </del>
                                        @elseif($row ->discount_type == 2)
                                        ৳ {{$product->product_price - $productdiscount}}
                                      
                                        
                                        @endif
                                    @endforeach
                                @else
                                ৳{{$product->product_price}}
                                @endif
                            </p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">{{$product->product_name}}</a>
                                    <p class="ps-product__price sale">
                                @if(count($flashdealdetail) > 0)
                                     @foreach($flashdealdetail as $row)
                                        <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>
                                        @if($row ->discount_type == 1 )
                                            ৳ {{$product->product_price - $row->discount}}
                                            <del>৳ {{$product->product_price}} </del>
                                        @elseif($row ->discount_type == 2)
                                        ৳ {{$product->product_price - $productdiscount}}
                                        @else
                                        {{$product->product_price}}
                                        @endif
                                    @endforeach
                                @else
                                ৳{{$product->product_price}}
                                @endif
                                    </p>
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
                            @php
                            $flashdealdetail = App\FlashDealDetail::where('product_id',$products->id)->where('status',1)->get();
                          @endphp
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="{{url('product/')}}/{{$products->slug}}/{{$products->id}}"><img src="{{asset('public/uploads/products/thumbnail/'.$products->thumbnail_img)}}" alt=""></a>
                                  @if(count($flashdealdetail) > 0)
                                    @foreach($flashdealdetail as $row)
                                               <?php $productdiscount = ($products->product_price * $row->discount) / 100; ?>
                                                @if($row ->discount_type == 1 )
                                                 <div class="ps-product__badge">
                                                    - ৳ {{$row->discount}}
                                                 </div>
                                                @elseif($row ->discount_type == 2)
                                                <div class="ps-product__badge">
                                                    -{{$row->discount}}%
                                                     </div>
                                                @endif
                                    @endforeach
                                  @endif
                                <ul class="ps-product__actions">
                                    <li><a href="{{url('product/')}}/{{$products->slug}}/{{$products->id}}" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>

                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>

                                    <li>
                                        @if(Auth::guard('web')->check())
                                        <a class="mywishlist" data-id="{{$products->id}}" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a>
                                        @else
                                         <a href="{{url('customar/login')}}" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a>
                                        @endif
                                    </li>

                                    <li><a class="compare" data-id="{{$products->id}}" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#"></a>
                                <div class="ps-product__content"><a class="ps-product__title" href="{{url('product/')}}/{{$products->slug}}/{{$products->id}}">{{$products->product_name}}</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">
                                        @if(count($flashdealdetail) > 0)
                                         @foreach($flashdealdetail as $row)
                                            <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>
                                            @if($row ->discount_type == 1 )
                                                ৳ {{$product->product_price - $row->discount}}
                                                <del>৳ {{$product->product_price}} </del>
                                            @elseif($row ->discount_type == 2)
                                            ৳ {{$product->product_price - $productdiscount}}
                                            @else
                                            {{$product->product_price}}
                                            @endif
                                        @endforeach
                                    @else
                                    ৳{{$product->product_price}}
                                    @endif
                                    </p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/')}}/{{$products->slug}}/{{$products->id}}">{{$products->product_name}}</a>
                                    <p class="ps-product__price sale">
                                        @if(count($flashdealdetail) > 0)
                                     @foreach($flashdealdetail as $row)
                                        <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>
                                        @if($row ->discount_type == 1 )
                                            ৳ {{$product->product_price - $row->discount}}
                                            <del>৳ {{$product->product_price}} </del>
                                        @elseif($row ->discount_type == 2)
                                        ৳ {{$product->product_price - $productdiscount}}
                                        @else
                                        {{$product->product_price}}
                                        @endif
                                    @endforeach
                                @else
                                ৳{{$product->product_price}}
                                @endif
                                    </p>
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
                         @php
                            $flashdealdetail = App\FlashDealDetail::where('product_id',$product->id)->where('status',1)->get();
                          @endphp
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}"><img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt=""></a>

                                  @if(count($flashdealdetail) > 0)
                                    @foreach($flashdealdetail as $row)
                                               <?php $productdiscount = ($products->product_price * $row->discount) / 100; ?>
                                                @if($row ->discount_type == 1 )
                                                 <div class="ps-product__badge">
                                                    - ৳ {{$row->discount}}
                                                 </div>
                                                @elseif($row ->discount_type == 2)
                                                <div class="ps-product__badge">
                                                    -{{$row->discount}}%
                                                     </div>
                                                @endif
                                    @endforeach
                                  @endif
                                <ul class="ps-product__actions">
                                  <li><a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>

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
                                    <p class="ps-product__price sale">   
                                     @if(count($flashdealdetail) > 0)
                                     @foreach($flashdealdetail as $row)
                                        <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>
                                        @if($row ->discount_type == 1 )
                                            ৳ {{$product->product_price - $row->discount}}
                                            <del>৳ {{$product->product_price}} </del>
                                        @elseif($row ->discount_type == 2)
                                        ৳ {{$product->product_price - $productdiscount}}
                                        @else
                                        {{$product->product_price}}
                                        @endif
                                    @endforeach
                                    @else
                                    ৳{{$product->product_price}}
                                    @endif</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">{{$product->product_name}}</a>
                                    <p class="ps-product__price sale">
                                        @if(count($flashdealdetail) > 0)
                                         @foreach($flashdealdetail as $row)
                                            <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>
                                            @if($row ->discount_type == 1 )
                                                ৳ {{$product->product_price - $row->discount}}
                                                <del>৳ {{$product->product_price}} </del>
                                            @elseif($row ->discount_type == 2)
                                            ৳ {{$product->product_price - $productdiscount}}
                                            @else
                                            {{$product->product_price}}
                                            @endif
                                        @endforeach
                                        @else
                                        ৳{{$product->product_price}}
                                        @endif
                                    </p>
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
                                <div class="ps-product__thumbnail"><a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}"><img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt=""></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">{{$product->product_name}}</a>
                                    <p class="ps-product__price">৳ {{$product->product_price}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.include.newsletter._subcribtion')
    </div>











<div class="modal fade" id="product-quickview" tabindex="-1" role="dialog" aria-labelledby="product-quickview" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content"><span class="modal-close" data-dismiss="modal"><i class="icon-cross2"></i></span>
                <article class="ps-product--detail ps-product--fullwidth ps-product--quickview">
                    <div class="ps-product__header">
                        <div class="ps-product__thumbnail" data-vertical="false">
                            <div class="ps-product__images" data-arrow="true" >

                                <div class="item" id="img">
                                  <!--   <img src="{{asset('public/frontend')}}/img/products/detail/fullwidth/1.jpg" alt=""> -->
                                </div>

                            </div>
                        </div>
                        <div class="ps-product__info">
                            <div class="name"></div>
                             <input type="hidden" name="id" id="id">
                            <div class="ps-product__meta">
                                <p>Brand:<a href="">Sony</a></p>
                                <div class="ps-product__rating">
                             <!--        <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>(1 review)</span> -->
                                </div>
                            </div>
                            <div class="price">
                                
                            </div>
                            
                            <div class="ps-product__desc">
                                <!-- <p>Sold By:<a href="shop-default.html"><strong> Go Pro</strong></a></p> -->
                                <ul class="ps-list--dot">
                                    <li> Unrestrained and portable active stereo speaker</li>
                                    <li> Free from the confines of wires and chords</li>
                                    <li> 20 hours of portable capabilities</li>
                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                </ul>
                            </div>
                            <form id="option-choice-form">
                                        <!-- product information -->
                                        <input type="hidden" id="product_total" name="product_price" value="">
                                        <input type="hidden" id="product_id" name="product_id" value="">
                                        <input type="hidden"  name="quantity" value="1">
                                        
                            <div class="ps-product__shopping"><button type="button" class="ps-btn ps-btn--black" href="#" id="addtocartmodal">Add to cart</button><a class="ps-btn" href="#">Buy Now</a>
                            </form>
                                <div class="ps-product__actions"><a href="#"><i class="icon-heart"></i></a><a href="#"><i class="icon-chart-bars"></i></a></div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>



<script type="text/javascript">

      $(document).ready(function() {
         $('.quickview').on('click', function(){
             var p_id = $(this).data('id');
             //alert(p_id);
             if(p_id) {
                 $.ajax({
                     url: "{{ url('/get/product/quickview/') }}/"+p_id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                         
                         
                            document.getElementById('product_id').value = data.id;
                            document.getElementById('product_total').value = data.product_price;

                                 


                                


                            $(".name").html("<h1>"+ data.product_name +"</h1>");
                            $(".price").html("<h4 class='ps-product__price'>"+ data.product_price +"</h4>");
                            $("#id").val(data.id);
                            //$("#descrip").val(data.subcate_slug);
                            // $("#subcate_tag_edit").val(data.subcate_tag);
                            // $("#cate_id").val(data.cate_id).select;
                             $("#img").html("<img src={{asset('')}}public/uploads/products/thumbnail/"+data.    thumbnail_img +"/>");
                            // $("#store-img").append("<input type='hidden' name='old_image' value='"+data.subcate_image+"' />");
                            // $("#icon").html("<img src={{asset('')}}public/uploads/subcategory/"+data.subcate_icon+" height='70px'/>");
                            // $("#store-icon").append("<input type='hidden' name='old_icon' value='"+data.subcate_icon+"' />");

                        }
                 });
             } else {
                 alert('danger');
             }

         });
     });
</script>



<script>
    $(document).ready(function () {
        $('#addtocartmodal').on('click', function () {
            

           
            

          $('#option-choice-form').serializeArray();

            $.ajax({
                type: 'GET',
                url: "{{ route('product.add.cart') }}",
                data: $('#option-choice-form').serializeArray(),
                success: function (data) {                  
                    
                    document.getElementById('cartdatacount').innerHTML = data.quantity;
                    document.getElementById('mobilecartdatacount').innerHTML = data.quantity;
                    
                }
            });
        });
    });
</script>
@endsection