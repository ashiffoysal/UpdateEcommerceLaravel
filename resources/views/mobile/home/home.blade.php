@extends('mobile.master')
@section('main_content')
<div class="col-xs-12 no-padding">
    <div class="module sohomepage-slider ">
        <div class="modcontent">
            <div id="sohomepage-slider">
                <div class="so-homeslider contentslider" data-rtl="no" data-autoplay="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-item_xs="1" data-item_sm="1" data-arrows="no" data-pagination="yes" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
                    <div class="item ">
                        <a href="index.html?route=mobile/home" title="slider2" target="_self">
                            <img class="responsive" src="{{asset('public/mobile')}}/image/demo-mobile/slider/banner-mobile-1.png" alt="slider2">
                        </a>
                        <div class="sohomeslider-description"></div>
                    </div>
                    <div class="item ">
                        <a href="#" title="slider3" target="_self">
                            <img class="responsive" src="{{asset('public/mobile')}}/image/demo-mobile/slider/banner-mobile-2.jpg" alt="slider3">
                        </a>
                        <div class="sohomeslider-description"></div>
                    </div>
                    <div class="item ">
                        <a href="#" title="slider1" target="_self">
                            <img class="responsive" src="{{asset('public/mobile')}}/image/demo-mobile/slider/banner-mobile-3.jpg" alt="slider1">
                        </a>
                        <div class="sohomeslider-description"></div>
                    </div>
                </div>
                <div class="loading-placeholder"></div>
            </div>
        </div>

    </div>
</div>
<div class="col-xs-12 no-padding">
    <div class="mobile-bn1-h1 clearfix">
        <div class="banners">
            <div class="banner21">
                <a href="#">
                    <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/banner-mobile-2.png" alt="Image Client">
                </a>
            </div>
            <div class="banner21">
                <a href="#">
                    <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/banner-mobile-3.png" alt="Image Client">
                </a>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12 ">
    <div class="module no-margin">
        <div class="block-categories">
            <h3 class="modtitle"><span>Featured Categories</span></h3>
            <div class="loading-placeholder"></div>
            <div class="cate-content contentslider" data-rtl="no" data-autoplay="no" data-autowidth="yes" data-delay="4" data-speed="0.6" data-margin="10" data-col-xs="1" data-col-sm="1" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
                @php
                    $category=App\Category::where('is_deleted',0)->where('cate_status',1)->OrderBy('id','DESC')->limit(4)->get();
                @endphp
                @foreach($category as $cate)
                <div class="cate cate1">
                    <div class="inner"><img src="{{asset('public/uploads/category/mobile/'.$cate->cate_image)}}" alt="Static Image"><a href="#">{{$cate->cate_name}}</a></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@php
  $flashdeall=App\FlashDeal::where('status',1)->first();
@endphp
@if($flashdeall)
<div class="col-xs-12 ">
    <div class="module mobile_deals ">
        <h3 class="modtitle font-ct"><span>Top Deals</span></h3>
        <div class="modcontent">
            <div class="so-deal products-list grid">
                <div class="loading-placeholder"></div>
                <div class="contentslider" data-rtl="no" data-autoplay="no" data-autowidth="yes" data-delay="4" data-speed="0.6" data-margin="10" data-col-xs="2" data-col-sm="2" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
                  @php
                  $flash_id=$flashdeall->id;
                  $flashdetails=App\FlashDealDetail::where('flash_deal_id',$flash_id)->get();
                  @endphp
<!--  -->
                @foreach($flashdetails as $flasdetail)
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container ">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">-15%</span>
                                        </div>
                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/uploads/products/thumbnail/mobile/'.$flasdetail->product->thumbnail_img)}}" alt="Hamburger shoulder" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Hamburger shoulder">{{Str::limit($flasdetail->product->product_name,5)}}</a></h4>
                                        <p class="price">
                                            <span class="price-new">$60.00</span> <span class="price-old">{{$flasdetail->product->product_price}}</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
<!--  -->



                </div>
            </div>


        </div>

    </div>
</div>
@endif
<!-- flash deal end -->


<div class="col-xs-12">
    <div class="mobile-bn2-h1 clearfix">
        <div class="banners">
            <a href="index.html">
                <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/banner-mobile-4.png" alt="Image Client">
            </a>
        </div>
    </div>
</div>


<div class="col-xs-12 ">
    <div class="module mobile_deals ">
        <h3 class="modtitle font-ct"><span>New Arrivals</span></h3>
        <div class="modcontent">
            <div class="so-deal products-list grid">
                <div class="loading-placeholder"></div>
                <div class="contentslider" data-rtl="no" data-autoplay="no" data-autowidth="yes" data-delay="4" data-speed="0.6" data-margin="10" data-col-xs="2" data-col-sm="2" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
                  @php
                    $newarrival=App\Product::where('is_deleted',0)->where('status',1)->OrderBy('id','DESC')->limit(3)->get();
                  @endphp
                  @foreach($newarrival as $product)
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container ">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">-15%</span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/uploads/products/thumbnail/mobile/'.$product->thumbnail_img)}}" alt="Hamburger shoulder" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Hamburger shoulder">{{Str::limit($product->product_name,10)}}</a></h4>
                                        <p class="price">
                                            <span class="price-new">৳ {{$product->product_price}}</span> <span class="price-old">$65.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>


        </div>

    </div>
</div>

<div class="col-xs-12 ">
    <div class="mobile-bn3-h2 clearfix">
        <a href="#">
            <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/home3/banner-home34.jpg" alt="Image Client">
        </a>

    </div>
    <div class="mobile-bn3-h2 clearfix">
        <a href="index.html">
            <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/home3/banner-home35.jpg" alt="Image Client">
        </a>
    </div>
</div>

<div class="col-xs-12 ">
    <div class="module mobile_deals ">
        <h3 class="modtitle font-ct"><span>Best Sellers</span></h3>
        <div class="modcontent">
            <div class="so-deal products-list grid">
                <div class="loading-placeholder"></div>
                <div class="contentslider" data-rtl="no" data-autoplay="no" data-autowidth="yes" data-delay="4" data-speed="0.6" data-margin="10" data-col-xs="2" data-col-sm="2" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
<!--  -->
                    @php
                      $bestseller=App\Product::where('is_deleted',0)->where('status',1)->OrderBy('number_of_sale','DESC')->limit(3)->get();
                    @endphp
                    @foreach($bestseller as $product)
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container  transition">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                -36%
                                            </span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/uploads/products/thumbnail/mobile/'.$product->thumbnail_img)}}" alt="Fuzan sumamipon" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Fuzan sumamipon">{{Str::limit($product->product_name,10)}}</a></h4>
                                        <p class="price">
                                            <span class="price-new">৳ {{$product->product_price}}</span> <span class="price-old">{{$product->product_id}}</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- endproduct -->
                    @endforeach


                </div>
            </div>


        </div>

    </div>
</div>
<div class="col-xs-12 no-padding">
    <div class="mobile-bn1-h1 clearfix">
        <div class="banners">
            <div class="banner21">
                <a href="#">
                    <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/banner-mobile-5.png" alt="Image Client">
                </a>
            </div>
            <div class="banner21">
                <a href="#">
                    <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/banner-mobile-6.png" alt="Image Client">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-xs-12">
    <div class=" module">
        <h3 class="modtitle"><span>Top Brands</span></h3>
        <div class="contentslider" data-rtl="no" data-autoplay="no" data-autowidth="yes" data-delay="4" data-speed="0.6" data-margin="10" data-col-xs="1" data-col-ms="1" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
            @php
              $allbrand=App\Brand::where('is_deleted',0)->get();
            @endphp
            @foreach($allbrand as $brand)
            <div class="item-brand item-scroll">
                <a href="#"><img src="{{asset('public/uploads/brand/mobile/'.$brand->brand_logo)}}" alt="Image Client"></a>
            </div>
            @endforeach


        </div>
    </div>
</div>


@endsection
