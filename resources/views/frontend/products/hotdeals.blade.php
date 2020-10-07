@extends('layouts.websiteapp')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Hot Deal</li>
            </ul>
        </div>
    </div>
    <div class="ps-page--shop" id="shop-carousel">
        <div class="container">
         <!--    <div class="ps-carousel--nav-inside second owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on"><a href="shop-default.html"><img src="{{asset('/public/frontend')}}/img/slider/shop-carousel/1.jpg" alt=""></a><a href="shop-default.html"><img src="{{asset('/public/frontend')}}/img/slider/shop-carousel/2.jpg" alt=""></a></div> -->
            <div class="ps-block--container-hightlight">
                <div class="ps-section__header">
                    <h3>Top Deals Super Hot Today</h3>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                      @foreach ($flash_deal_details as $flasdetail)
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="{{url('product/')}}/{{$flasdetail->product->slug}}/{{$flasdetail->product->id}}"><img data-src="{{asset('public/uploads/products/thumbnail/'.$flasdetail->product->thumbnail_img)}}" src="{{asset('public/frontend/lazy_loader/home-product-banner.gif')}}" class="lazy" alt=""></a>

                                    <div class="ps-product__badge">
                                         @if($flasdetail->discount_type==1) -{{$flasdetail->discount}}৳  @else -{{$flasdetail->discount}}% @endif
                                    </div>

                                    <ul class="ps-product__actions">
                                          <li><a href="{{url('product/')}}/{{$flasdetail->product->slug}}/{{$flasdetail->product->id}}" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <!--  -->
                                          <li>
                                           @if($flasdetail->product->product_type==1)
                                            <a href="{{url('product/')}}/{{$flasdetail->product->slug}}/{{$flasdetail->product->id}}" data-toggle="tooltip" data-placement="top" data-placement="top" title="Quick View"><i class="icon-bag2"></i></a>
                                            @else
                                            <a class="quickview" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview" data-id="{{$flasdetail->product->id}}"><i class="icon-bag2"></i></a>
                                            @endif
                                            </li>

                                        <!--  -->


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
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#"></a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="{{url('product/')}}/{{$flasdetail->productslug}}/{{$flasdetail->product->id}}">{{Str::limit($flasdetail->product->product_name,35)}}</a>
                                        <div class="ps-product__rating">
                                         <!--    <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span> -->
                                        </div>
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
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/')}}/{{$flasdetail->product->slug}}/{{$flasdetail->product->id}}">{{Str::limit($flasdetail->product->product_name,35)}}</a>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                     @endforeach
                    </div>
                </div>
            </div>
       <!--      <div class="ps-product-list">
                <div class="ps-section__header">
                    <h3>Best Seller In The Last Months</h3>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/6.jpg" alt=""></a>
                                <div class="ps-product__badge">-5%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Youngshop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                    <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/7.jpg" alt=""></a>
                                <div class="ps-product__badge">-16%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Youngshop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                    <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/8.jpg" alt=""></a>
                                <div class="ps-product__badge">-16%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                    </div>
                                    <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                    <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/9.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                    </div>
                                    <p class="ps-product__price">$35.89</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                    <p class="ps-product__price">$35.89</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/10.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$29.39 - $39.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                    <p class="ps-product__price">$29.39 - $39.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/11.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$13.43</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                    <p class="ps-product__price">$13.43</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/12.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$75.44</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                                    <p class="ps-product__price">$75.44</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/13.jpg" alt=""></a>
                                <div class="ps-product__badge">-7%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                    <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/14.jpg" alt=""></a>
                                <div class="ps-product__badge">-7%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Beat Spill 2.0 Wireless Speaker – White</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Beat Spill 2.0 Wireless Speaker – White</a>
                                    <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/15.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">ASUS Chromebook Flip – 10.2 Inch</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$332.38</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">ASUS Chromebook Flip – 10.2 Inch</a>
                                    <p class="ps-product__price sale">$332.38</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/16.jpg" alt=""></a>
                                <div class="ps-product__badge">-7%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple Macbook Retina Display 12&quot;</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$1200.00 <del>$1362.99 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apple Macbook Retina Display 12&quot;</a>
                                    <p class="ps-product__price sale">$1200.00 <del>$1362.99 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/17.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$599.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                    <p class="ps-product__price">$599.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/18.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$233.28</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                    <p class="ps-product__price">$233.28</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/19.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$233.28</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                    <p class="ps-product__price">$233.28</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/20.jpg" alt=""></a>
                                <div class="ps-product__badge">-28%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$1,200.00 <del>$1362.99 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                                    <p class="ps-product__price sale">$1,200.00 <del>$1362.99 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/21.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Edifier Powered Bookshelf Speakers</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$85.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Edifier Powered Bookshelf Speakers</a>
                                    <p class="ps-product__price sale">$85.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/22.jpg" alt=""></a>
                                <div class="ps-product__badge">-28%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$45.90 <del>$56.99 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                    <p class="ps-product__price sale">$45.90 <del>$56.99 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/23.jpg" alt=""></a>
                                <div class="ps-product__badge">-22%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">DJI Phantom 4 Quadcopter Camera</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$945.90 <del>$1,207.15 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">DJI Phantom 4 Quadcopter Camera</a>
                                    <p class="ps-product__price sale">$945.90 <del>$1,207.15 </del></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="ps-product-list">
                <div class="ps-section__header">
                    <h3>New Arrivals</h3>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        @foreach($allproduct as $product)
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}"><img data-src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" src="{{asset('public/frontend/lazy_loader/home-product-banner.gif')}}" class="lazy" alt=""></a>
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
                                                      @php
                                                        $rcount=App\ProductReview::where('product_id',$product->id)->count();
                                                        @endphp
                                                        @if($rcount)
                                                            @if($rcount)
                                                            @php
                                                             $sumofreview=App\ProductReview::where('product_id',$product->id)->sum('review');
                                                             $rating=$sumofreview/$rcount;
                                                            @endphp
                                                             @if($rating == 1)
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="2">3</option>
                                                                <option value="2">4</option>
                                                                <option value="2">5</option>
                                                            </select>
                                                            @elseif($rating < 2)
                                                                 <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="2">3</option>
                                                                <option value="2">4</option>
                                                                <option value="2">5</option>
                                                            </select>
                                                            @elseif($rating < 3)
                                                                 <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="2">3</option>
                                                                <option value="2">4</option>
                                                                <option value="2">5</option>
                                                            </select>

                                                            @elseif($rating < 4)
                                                                 <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="2">4</option>
                                                                <option value="2">5</option>
                                                            </select>

                                                            @elseif($rating < 5)
                                                                 <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select>

                                                            @elseif($rating == 5)
                                                                 <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="2">3</option>
                                                                <option value="2">4</option>
                                                                <option value="2">5</option>
                                                            </select>

                                                            @elseif($rating == 0)
                                                              <select class="ps-rating" data-read-only="true">
                                                                  <option value="0">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="2">3</option>
                                                                  <option value="2">4</option>
                                                                  <option value="2">5</option>
                                                              </select>
                                                              @endif
                                                            @endif
                                                        @endif
                                    </div>
                                    <p class="ps-product__price">৳{{$product->product_price}}</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">{{$product->product_name}}</a>
                                    <p class="ps-product__price">৳{{$product->product_price}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                  
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