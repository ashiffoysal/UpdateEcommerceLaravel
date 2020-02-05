@extends('layouts.websiteapp')
@section('main_content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="so-page-builder">
    <div class="container page-builder-ltr">
        <div class="row row_a90w  row-style ">
            <!-- Include all categores for home page one ============================================ -->
            @include('frontend.include.sidemenu.home1')
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_anla  slider-right">
                <div class="row row_ci4f  ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_dg1b block block_1">
                        <div class="module sohomepage-slider so-homeslider-ltr  ">
                            <div class="modcontent">
                                <div id="sohomepage-slider1">
                                    <div class="so-homeslider yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="yes" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                        @php
                                        $ban=App\Banner::where('is_deleted',0)->get();
                                        @endphp
                                        @foreach($ban as $banner)
                                        <div class="item">
                                            <a href=" #   " title="slide 1 - 1" target="_self">
                                                <img class="responsive"src="{{asset('public/uploads/banner/'.$banner->ban_image)}}" alt="slide 1 - 1">
                                            </a>
                                            <div class="sohomeslider-description">
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_hmsd block block_2">
                        <div class="home1-banner-1 clearfix">
                            <div class="item-1 col-lg-6 col-md-6 col-sm-6 banners">
                                <div>
                                    <a title="Static Image" href="#"><img src="{{asset('public')}}/1222.png" alt="Static Image"></a>
                                </div>
                            </div>
                            <div class="item-2 col-lg-6 col-md-6 col-sm-6 banners">
                                <div>
                                    <a title="Static Image" href="#"><img src="{{asset('public')}}/1222.png" alt="Static Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="box-link1" class="section-style">
        <div class="container page-builder-ltr">
            <div class="row row-style row_a1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_a1c  block block_3 title_neo1">
                    <div class="module so-deals-1tr home1_deals so-deals">
                        <div class="head-title">
                            <h2 class="modtitle font-ct">
                            <span>Hot Deals</span>
                            </h2>
                            <div class="cs-item-timer">
                                <div class="Countdown-1"></div>
                            </div>
                        </div>
                        <div class="modcontent">
                            <div class="so-deal modcontent products-list grid clearfix clearfix preset00-3 preset01-3 preset02-2 preset03-2 preset04-1  button-type1  style2">
                                <div class="category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="4" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                    <!-- product start -->
                                    @php
                                    $flash_id=$hotdeals->id;
                                    $flashdetails=App\FlashDealDetail::where('flash_deal_id',$flash_id)->get();
                                    @endphp
                                    @foreach($flashdetails as $flasdetail)
                                  
                                    <div class="item">
                                        <div class="transition product-layout">
                                            <div class="product-item-container ">
                                                <div class="left-block so-quickview">
                                                    <div class="image">
                                                        <a href="product.html" target="_self">
                                                        <img src="{{asset('public/uploads/products/thumbnail/'.$flasdetail->product->thumbnail_img)}}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">Sale</span>
                                                    </div>
                                                    <div class="button-group">
                                                        <div class="button-inner so-quickview">
                                                            <a class="lt-image hidden" data-product="35" href="#" target="_self" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo">
                                                            </a>
                                                            
                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="{{url('admin/product/modal/show')}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe"> <i class="fa fa-search"></i> </a>


                                                            @if(Auth::guard('web')->check())
                                                            <button class="mywishlist btn-button" type="button" data-toggle="tooltip" title="" data-original-title="add to Wish List" data-id="{{$flasdetail->product->id}}"> <i class="fa fa-heart"></i></button>
                                                            @else
                                                            <a href="{{route('login')}}" class="compare btn-button"><i class="fa fa-heart"></i></a>
                                                            @endif

                                                            <button class="compare btn-button compareproduct" type="button"  id="compareproduct" value="{{$flasdetail->product->id }}"><i class="fa fa-exchange"></i></button>


                                                            <button class="mywishlist btn-button" type="button" data-toggle="tooltip" title=""data-original-title=" to Wish List"><i class="fa fa-heart"></i></button>
                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('35');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>

                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('35');" data-original-title="Add to Cart"> <span class="hidden">Add to Cart</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                    <h4><a href="" target="_self" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo">{{Str::limit($flasdetail->product->product_name,40)}}</a></h4>
                                                        <div class="total-price clearfix">
                                                            <div class="price price-left">
                                                            <span class="price-new">৳ {{$flasdetail->product->product_price}}</span>
                                                                <span class="price-old">$122.00</span>
                                                            </div>
                                                            <div class="price-sale price-right">
                                                                <span class="discount">
                                                                    -{{$flasdetail->discount}}%
                                                                    <strong>OFF</strong>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- end product -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="home1-banner-2 clearfix">
                            <div class="item-1 col-lg-6 col-md-6 col-sm-6 banners">
                                <div>
                                    <a title="Static Image" href="#"><img src="{{asset('public/')}}/1555.png" alt="Static Image"></a>
                                </div>
                            </div>
                            <div class="item-2 col-lg-6 col-md-6 col-sm-6 banners">
                                <div>
                                    <a title="Static Image" href="#"><img src="{{asset('public/')}}/1555.png" alt="Static Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- first category -->
    @php
    $cate=App\Category::where('section_id',1)->where('is_deleted',0)->orderBy('id','DESC')->get();
    @endphp
    <section id="box-link2" class="section-style">
        <div class="container page-builder-ltr">
            
            <div class="row row-style row_a2">
                @foreach($cate as $maincate)
                <div class="col-md-12 col_1bi4  col-style block block_5 title_neo2">
                    <div class="module so-listing-tabs-ltr default-nav clearfix img-float label-1 home-lt1">
                        <div class="head-title font-ct">
                            <h2 class="modtitle">{{$maincate->cate_name}}</h2>
                        </div>
                        <div class="modcontent">
                            <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
                                <div class="ltabs-wrap">
                                    <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="3" data-xs="4" data-margin="0">
                                        <!--Begin Tabs-->
                                        <div class="ltabs-tabs-wrap">
                                            <span class="ltabs-tab-selected"></span>
                                            <span class="ltabs-tab-arrow">▼</span>
                                            <div class="item-sub-cat">
                                                <ul class="ltabs-tabs cf">
                                                    <li class="ltabs-tab tab-sel" data-category-id="" data-active-content=".items-category-1"> <span class="ltabs-tab-label">Best Seller</span> </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Tabs-->
                                    </div>
                                    <div class="wap-listing-tabs ltabs-items-container products-list grid">
                                        <!--Begin Items-->
                                        <div class="ltabs-items ltabs-items-selected items-category-{{$maincate->id}}" data-total="16">
                                            
                                            <div class="ltabs-items-inner ltabs-slider">
                                                <!-- grid -->
                                                @php
                                                $cate_id=$maincate->id;
                                                $products=App\Product::where('is_deleted',0)->where('cate_id',$cate_id)->orderBy('id','DESC')->limit(4)->get();
                                                @endphp
                                                @foreach($products as $product)
                                                <div class="ltabs-item col-md-3">
                                                    
                                                    <div class="item-inner product-layout transition product-grid ">
                                                        <div class="product-item-container">
                                                            <div class="left-block">
                                                                <div class="image product-image-container ">
                                                                    <a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                        <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                    </a>
                                                                </div>
                                                                <div class="box-label"><span class="label-product label-sale">Sale</span></div>
                                                            </div>
                                                            <div class="right-block">
                                                                <div class="caption">
                                                                    <h4>
                                                                    <a href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>
                                                                    </h4>
                                                                    <div class="total-price clearfix">
                                                                        <div class="price price-left"><span class="price-new">৳ {{$product->product_price}}</span><span class="price-old">$98.00</span></div>
                                                                        <div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="button-group">
                                                                    <div class="button-inner so-quickview">
                                                                        <a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                        <a class="btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                        
                                                                        <button class="mywishlist btn-button" type="button" data-toggle="tooltip" title="" data-original-title="add to Wish List" data-id="{{$product->id}}"> <i class="fa fa-heart"></i></button>
                                                                        
                                                                        <button class="compare btn-button compareproduct" type="button"  id="compareproduct" value="{{$product->id }}">
                                                                        <i class="fa fa-exchange"></i>
                                                                        </button>
                                                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                        <span class="hidden">Add to cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- product -->
                                                </div>
                                                @endforeach
                                                @php
                                                $cate_id=$maincate->id;
                                                $products=App\Product::where('is_deleted',0)->where('cate_id',$cate_id)->orderBy('id','DESC')->skip(4)->limit(4)->get();
                                                @endphp
                                                @foreach($products as $product)
                                                <div class="ltabs-item col-md-3">
                                                    
                                                    <div class="item-inner product-layout transition product-grid ">
                                                        <div class="product-item-container">
                                                            <div class="left-block">
                                                                <div class="image product-image-container ">
                                                                    <a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                        <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                    </a>
                                                                </div>
                                                                <div class="box-label"><span class="label-product label-sale">Sale</span></div>
                                                            </div>
                                                            <div class="right-block">
                                                                <div class="caption">
                                                                    <h4><a href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a></h4>
                                                                    <div class="total-price clearfix">
                                                                        <div class="price price-left"><span class="price-new">${{$product->product_price}}</span><span class="price-old">$98.00</span></div>
                                                                        <div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="button-group">
                                                                    <div class="button-inner so-quickview">
                                                                        <a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                        <a class="btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                        <button class="mywishlist btn-button" type="button" data-toggle="tooltip" data-id="{{$product->id}}" title=""data-original-title="Add to Wish List">
                                                                        <i class="fa fa-heart"></i>
                                                                        </button>
                                                                        <button class="compare btn-button compareproduct" type="button"  id="compareproduct" value="{{$product->id }}">
                                                                        <i class="fa fa-exchange"></i>
                                                                        </button>
                                                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                        <span class="hidden">Add to cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- product -->
                                                </div>
                                                @endforeach
                                                <!-- grid -->
                                            </div>
                                            
                                        </div>
                                        <div class="ltabs-items items-category-2 grid" data-total="16">
                                            <div class="ltabs-loading"></div>
                                        </div>
                                        <div class="ltabs-items  items-category-3 grid" data-total="16">
                                            <div class="ltabs-loading"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </section>
    <!-- end first cate -->
    <!-- seceond section -->
    @php
    $catesecond=App\Category::where('section_id',2)->where('is_deleted',0)->orderBy('id','DESC')->get();
    @endphp
    <section id="box-link3" class="section-style">
        <div class="container page-builder-ltr">
            <div class="row row-style row_a3">
                @foreach($catesecond as $catename)
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_nvxr  block block_6 title_neo3">
                    <div class="module so-listing-tabs-ltr home1-lt-style2 default-nav clearfix img-float home-lt1">
                        <div class="head-title font-ct">
                            <h2 class="modtitle">{{$catename->cate_name}}</h2>
                        </div>
                        <div class="modcontent">
                            <div id="so_listing_tabs_2" class="so-listing-tabs first-load">
                                <div class="ltabs-wrap">
                                    <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="3" data-md="3" data-sm="3" data-xs="2" data-margin="0">
                                        <div class="ltabs-tabs-wrap">
                                            <span class="ltabs-tab-selected">Best sellers</span>
                                            <span class="ltabs-tab-arrow">▼</span>
                                            <div class="item-sub-cat">
                                                <ul class="ltabs-tabs cf">
                                                    <li class="ltabs-tab tab-sel" data-category-id="4" data-active-content=".items-category-4">
                                                        <span class="ltabs-tab-label">Best sellers</span>
                                                    </li>
                                                    <li class="ltabs-tab" data-category-id="5" data-active-content=".items-category-5">
                                                        <span class="ltabs-tab-label">New Arrivals</span>
                                                    </li>
                                                    <li class="ltabs-tab" data-category-id="6" data-active-content=".items-category-6">
                                                        <span class="ltabs-tab-label">Most Rating</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wap-listing-tabs products-list grid">
                                        <div class="item-cat-image banners">
                                            <div>
                                                <a href="product.html" title="" target="_self">
                                                    <img class="categories-loadimage" title="" alt="" src="{{asset('public/frontend/')}}/image/catalog/demo/banners/home1/md-banner-1.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ltabs-items-container">
                                            <div class="ltabs-items ltabs-items-selected items-category-4" data-total="16">
                                                <div class="ltabs-items-inner ltabs-slider ">
                                                    
                                                    
                                                    <div
                                                        class="ltabs-item">
                                                        @php
                                                        $cate_id=$catename->id;
                                                        $products=App\Product::where('is_deleted',0)->where('cate_id',$cate_id)->orderBy('id','DESC')->limit(2)->get();
                                                        @endphp
                                                        @foreach($products
                                                        as $product) <div
                                                            class="item-inner
                                                            product-layout
                                                            transition
                                                            product-grid">
                                                            <div
                                                                class="product-item-container">
                                                                <div
                                                                    class="left-block">
                                                                    <div class="image
                                                                        product-image-container
                                                                        "> <a
                                                                            class="lt-image"
                                                                            href="#"
                                                                            target="_self"
                                                                            title="Invisible
                                                                            Hidden Spy
                                                                            Earphone Micro
                                                                            Wireless"> <img
                                                                            src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}"
                                                                            alt="Invisible
                                                                            Hidden Spy
                                                                            Earphone Micro
                                                                        Wireless"> </a>
                                                                    </div> </div> <div
                                                                    class="right-block">
                                                                    <div
                                                                        class="caption">
                                                                        <h4> <a
                                                                        href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>
                                                                        </h4> <div
                                                                            class="total-price
                                                                            clearfix"> <div
                                                                                class="price
                                                                                price-left"> <span
                                                                                    class="price-new">৳
                                                                                {{$product->product_price}}</span>
                                                                                <span
                                                                                    class="price-old">৳
                                                                                100</span> </div>
                                                                            </div> </div> <div
                                                                            class="button-group">
                                                                            <div
                                                                                class="button-inner
                                                                                so-quickview"> <a
                                                                                    class="lt-image
                                                                                    hidden" href="#"
                                                                                    target="_self"
                                                                                    title="Invisible
                                                                                    Hidden Spy
                                                                                    Earphone Micro
                                                                                Wireless"></a> <a
                                                                                class="btn-button
                                                                                btn-quickview
                                                                                quickview
                                                                                quickview_handler"
                                                                                href="{{url('product/details/'.$product->id)}}"
                                                                                title="Quick View"
                                                                                data-title="Quick
                                                                                View"
                                                                                data-fancybox-type="iframe">
                                                                                <i class="fa
                                                                                fa-search"></i>
                                                                            </a> 
                                                                            <button
                                                                            class="mywishlist
                                                                            btn-button"
                                                                            type="button"
                                                                            data-id="{{$product->id}}"
                                                                            data-toggle="tooltip"
                                                                            title=""
                                                                            data-original-title="Add
                                                                            to Wish List"> <i
                                                                            class="fa
                                                                            fa-heart"></i>
                                                                            </button> <button
                                                                            class="compare
                                                                            btn-button"
                                                                            type="button"
                                                                            data-toggle="tooltip"
                                                                            title=""
                                                                            onclick="compare.add('28');"
                                                                            data-original-title="Compare
                                                                            this Product"> <i
                                                                            class="fa
                                                                            fa-exchange"></i>
                                                                            </button> <button
                                                                            class="addToCart
                                                                            btn-button"
                                                                            type="button"
                                                                            data-toggle="tooltip"
                                                                            title=""
                                                                            onclick="cart.add('28');"
                                                                            data-original-title="Add
                                                                            to cart"> <span
                                                                                class="hidden">Add
                                                                            to cart</span>
                                                                        </button> </div>
                                                                    </div> </div>
                                                                </div> </div>
                                                                @endforeach <!--
                                                            --> </div> <div
                                                            class="ltabs-item">
                                                            @php
                                                            $cate_id=$catename->id;
                                                            $products=App\Product::where('is_deleted',0)->where('cate_id',$cate_id)->orderBy('id','DESC')->skip(2)->limit(2)->get();
                                                            @endphp
                                                            @foreach($products
                                                            as $product) <div
                                                                class="item-inner
                                                                product-layout
                                                                transition
                                                                product-grid">
                                                                <div
                                                                    class="product-item-container">
                                                                    <div
                                                                        class="left-block">
                                                                        <div class="image
                                                                            product-image-container
                                                                            "> <a
                                                                                class="lt-image"
                                                                                href="#"
                                                                                target="_self"
                                                                                title="Invisible
                                                                                Hidden Spy
                                                                                Earphone Micro
                                                                                Wireless"> <img
                                                                                src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}"
                                                                                alt="Invisible
                                                                                Hidden Spy
                                                                                Earphone Micro
                                                                            Wireless"> </a>
                                                                        </div> </div> <div
                                                                        class="right-block">
                                                                        <div
                                                                            class="caption">
                                                                            <h4> <a
                                                                            href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>
                                                                            </h4> <div
                                                                                class="total-price
                                                                                clearfix"> <div
                                                                                    class="price
                                                                                    price-left"> <span
                                                                                    class="price-new">$122.00</span>
                                                                                    <span
                                                                                    class="price-old"></span>
                                                                                </div> </div>
                                                                            </div> <div
                                                                            class="button-group">
                                                                            <div
                                                                                class="button-inner
                                                                                so-quickview"> <a
                                                                                    class="lt-image
                                                                                    hidden" href="#"
                                                                                    target="_self"
                                                                                    title="Invisible
                                                                                    Hidden Spy
                                                                                    Earphone Micro
                                                                                Wireless"></a> <a
                                                                                class="btn-button
                                                                                btn-quickview
                                                                                quickview
                                                                                quickview_handler"
                                                                                href="{{url('product/details/'.$product->id)}}"
                                                                                title="Quick View"
                                                                                data-title="Quick
                                                                                View"
                                                                                data-fancybox-type="iframe">
                                                                                <i class="fa
                                                                                fa-search"></i>
                                                                            </a> <button
                                                                            class="mywishlist
                                                                            btn-button"
                                                                            type="button"
                                                                            data-toggle="tooltip"
                                                                            title=""
                                                                        data-id="{{$product->id}}"
                                                                            
                                                                            data-original-title="Add
                                                                            to Wish List"> <i
                                                                            class="fa
                                                                            fa-heart"></i>
                                                                            </button> <button
                                                                            class="compare
                                                                            btn-button"
                                                                            type="button"
                                                                            data-toggle="tooltip"
                                                                            title=""
                                                                            onclick="compare.add('28');"
                                                                            data-original-title="Compare
                                                                            this Product"> <i
                                                                            class="fa
                                                                            fa-exchange"></i>
                                                                            </button> <button
                                                                            class="addToCart
                                                                            btn-button"
                                                                            type="button"
                                                                            data-toggle="tooltip"
                                                                            title=""
                                                                            onclick="cart.add('28');"
                                                                            data-original-title="Add
                                                                            to cart"> <span
                                                                                class="hidden">Add
                                                                            to cart</span>
                                                                        </button> </div>
                                                                    </div> </div>
                                                                </div> </div>
                                                                @endforeach <!--
                                                            --> </div> <div
                                                            class="ltabs-item">
                                                            @php
                                                            $cate_id=$catename->id;
                                                            $products=App\Product::where('is_deleted',0)->where('cate_id',$cate_id)->orderBy('id','DESC')->skip(4)->limit(2)->get();
                                                            @endphp
                                                            @foreach($products
                                                            as $product) <div
                                                                class="item-inner
                                                                product-layout
                                                                transition
                                                                product-grid">
                                                                <div
                                                                    class="product-item-container">
                                                                    <div
                                                                        class="left-block">
                                                                        <div class="image
                                                                            product-image-container
                                                                            "> <a
                                                                                class="lt-image"
                                                                                href="#"
                                                                                target="_self"
                                                                                title="Invisible
                                                                                Hidden Spy
                                                                                Earphone Micro
                                                                                Wireless"> <img
                                                                                src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}"
                                                                                alt="Invisible
                                                                                Hidden Spy
                                                                                Earphone Micro
                                                                            Wireless"> </a>
                                                                        </div> </div> <div
                                                                        class="right-block">
                                                                        <div
                                                                            class="caption">
                                                                            <h4> <a
                                                                            href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>
                                                                            </h4> <div
                                                                                class="total-price
                                                                                clearfix"> <div
                                                                                    class="price
                                                                                    price-left"> <span
                                                                                        class="price-new">৳
                                                                                    {{$product->product_price}}</span>
                                                                                    <span
                                                                                    class="price-old"></span>
                                                                                </div> </div>
                                                                            </div> <div
                                                                            class="button-group">
                                                                            <div
                                                                                class="button-inner
                                                                                so-quickview"> <a
                                                                                    class="lt-image
                                                                                    hidden" href="#"
                                                                                    target="_self"
                                                                                    title="Invisible
                                                                                    Hidden Spy
                                                                                    Earphone Micro
                                                                                Wireless"></a> <a
                                                                                class="btn-button
                                                                                btn-quickview
                                                                                quickview
                                                                                quickview_handler"
                                                                                href="{{url('product/details/'.$product->id)}}"
                                                                                title="Quick View"
                                                                                data-title="Quick
                                                                                View"
                                                                                data-fancybox-type="iframe">
                                                                                <i class="fa
                                                                                fa-search"></i>
                                                                            </a> <button
                                                                            class="mywishlist
                                                                            btn-button"
                                                                            type="button"
                                                                            data-toggle="tooltip"
                                                                            title=""
                                                                            
                                                                            data-original-title="Add
                                                                            to Wish List"> <i
                                                                            class="fa
                                                                            fa-heart"></i>
                                                                            </button> <button
                                                                            class="compare
                                                                            btn-button"
                                                                            type="button"
                                                                            data-toggle="tooltip"
                                                                            title=""
                                                                            onclick="compare.add('28');"
                                                                            data-original-title="Compare
                                                                            this Product"> <i
                                                                            class="fa
                                                                            fa-exchange"></i>
                                                                            </button> <button
                                                                            class="addToCart
                                                                            btn-button"
                                                                            type="button"
                                                                            data-toggle="tooltip"
                                                                            title=""
                                                                            onclick="cart.add('28');"
                                                                            data-original-title="Add
                                                                            to cart"> <span
                                                                                class="hidden">Add
                                                                            to cart</span>
                                                                        </button> </div>
                                                                    </div> </div>
                                                                </div> </div>
                                                                @endforeach <!--
                                                            --> </div>
                                                        </div>
                                                    </div>
                                                    <div class="ltabs-items  items-category-5 grid" data-total="16">
                                                        <div class="ltabs-loading">
                                                        </div>
                                                    </div>
                                                    <div class="ltabs-items  items-category-6 grid" data-total="16">
                                                        <div class="ltabs-loading">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            @php
            $newcate=App\Category::where('is_deleted',0)->where('section_id',3)->orderBy('id','DESC')->get();
            @endphp
            <section id="box-link4" class="section-style">
                <div class="container page-builder-ltr">
                    <div class="row row-style row_a4">
                        @foreach($newcate as $catesection)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_mfpr  block block_7 title_neo4">
                            <div class="module so-listing-tabs-ltr home1-lt-style3 default-nav clearfix img-float home-lt1">
                                <div class="head-title font-ct">
                                    <h2 class="modtitle">{{$catesection->cate_name}}</h2>
                                </div>
                                <div class="modcontent">
                                    <div id="so_listing_tabs_3" class="so-listing-tabs first-load">
                                        <div class="ltabs-wrap">
                                            <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="3" data-md="3" data-sm="3" data-xs="2" data-margin="0">
                                                <div class="ltabs-tabs-wrap">
                                                    <span class="ltabs-tab-selected">Best sellers</span>
                                                    <span class="ltabs-tab-arrow">▼</span>
                                                    <div class="item-sub-cat">
                                                        <ul class="ltabs-tabs cf">
                                                            <li class="ltabs-tab tab-sel" data-category-id="4" data-active-content=".items-category-4">
                                                                <span class="ltabs-tab-label">Best sellers</span>
                                                            </li>
                                                            <li class="ltabs-tab" data-category-id="7" data-active-content=".items-category-7">
                                                                <span class="ltabs-tab-label">New Arrivals</span>
                                                            </li>
                                                            <li class="ltabs-tab" data-category-id="8" data-active-content=".items-category-8">
                                                                <span class="ltabs-tab-label">Most Rating</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wap-listing-tabs products-list grid">
                                                <div class="item-cat-image banners">
                                                    <div>
                                                        <a href="product.html" title="" target="_self">
                                                            <img class="categories-loadimage" title="" alt="" src="{{asset('public/frontend/')}}/image/catalog/demo/banners/home1/md-banner-2.jpg">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="ltabs-items-container">
                                                    <div class="ltabs-items ltabs-items-selected items-category-{{$catesection->id}}" data-total="16">
                                                        <div class="ltabs-items-inner ltabs-slider">
                                                            <div class="ltabs-item col-md-4">
                                                                @php
                                                                $catego=$catesection->id;
                                                                $pro=App\Product::where('is_deleted',0)->where('cate_id',$catego)->orderBy('id','DESC')->limit(2)->get();
                                                                @endphp
                                                                @foreach($pro as $product)
                                                                <div class="item-inner product-layout transition product-grid ">
                                                                    <div class="product-item-container">
                                                                        <div class="left-block">
                                                                            <div class="image product-image-container ">
                                                                                <a class="lt-image" href="#" target="_self" title="Bougainvilleas On Lombard Street, San Francisco, Tokyo">
                                                                                    <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt="Bougainvilleas On Lombard Street, San Francisco, Tokyo">
                                                                                </a>
                                                                            </div>
                                                                            <div class="box-label">
                                                                                <span class="label-product label-sale">Sale</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="caption">
                                                                                <h4>
                                                                                <a href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>
                                                                                </h4>
                                                                                <div class="total-price clearfix">
                                                                                    <div class="price price-left">
                                                                                        <span class="price-new">৳ {{$product->product_price}}</span>
                                                                                        <span class="price-old">৳ {{$product->product_price}}</span>
                                                                                    </div>
                                                                                    <div class="price-sale price-right">
                                                                                        <span class="discount 123">-11%<strong>OFF</strong></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="button-group">
                                                                                <div class="button-inner so-quickview">
                                                                                    <a class="lt-image hidden" href="#" target="_self" title="Bougainvilleas On Lombard Street, San Francisco, Tokyo"></a>
                                                                                    <a class="btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                        <i class="fa fa-search"></i>
                                                                                    </a>
                                                                                    <button class="mywishlist
                                                                                    btn-button"
                                                                                    type="button"
                                                                                    data-toggle="tooltip"
                                                                                    title=""
                                                                                data-id="{{$product->id}}"
                                                                                    
                                                                                    
                                                                                    data-original-title="Add to Wish List"> <i class="fa fa-heart"></i>
                                                                                    </button> <button class="compare btn-button" type="button"
                                                                                    data-toggle="tooltip" title="" onclick="compare.add('28');"
                                                                                    data-original-title="Compare this Product"> <i class="fa
                                                                                    fa-exchange"></i> </button> <button class="addToCart btn-button"
                                                                                    type="button" data-toggle="tooltip" title="" onclick="cart.add('28');"
                                                                                    data-original-title="Add to cart"> <span class="hidden">Add to
                                                                                    cart</span> </button> </div> </div> </div> </div> </div> @endforeach
                                                                                    <!-- product end --> </div> <!-- grid end --> <div class="ltabs-item
                                                                                    col-md-4"> @php $catego=$catesection->id;
                                                                                    $pro=App\Product::where('is_deleted',0)->where('cate_id',$catego)->orderBy('id','DESC')->skip(2)->limit(2)->get();
                                                                                    @endphp @foreach($pro as $product) <div class="item-inner product-layout
                                                                                        transition product-grid"> <div class="product-item-container"> <div
                                                                                            class="left-block"> <div class="image product-image-container "> <a
                                                                                                class="lt-image" href="#" target="_self" title="Bougainvilleas On
                                                                                                Lombard Street, San Francisco, Tokyo"> <img
                                                                                                src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}"
                                                                                            alt="Bougainvilleas On Lombard Street, San Francisco, Tokyo"> </a>
                                                                                        </div> <div class="box-label"> <span class="label-product
                                                                                    label-sale">Sale</span> </div> </div> <div class="right-block"> <div
                                                                                    class="caption"> <h4> <a
                                                                                    href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>
                                                                                    </h4> <div class="total-price clearfix"> <div class="price price-left">
                                                                                        <span class="price-new">৳ {{$product->product_price}}</span> <span
                                                                                    class="price-old">$122.00</span> </div> <div class="price-sale
                                                                                    price-right"> <span class="discount 123">-11%<strong>OFF</strong></span>
                                                                                </div> </div> </div> <div class="button-group"> <div class="button-inner
                                                                                so-quickview"> <a class="lt-image hidden" href="#" target="_self"
                                                                                title="Bougainvilleas On Lombard Street, San Francisco, Tokyo"></a> <a
                                                                                class="btn-button btn-quickview quickview quickview_handler"
                                                                                href="{{url('product/details/'.$product->id)}}" title="Quick View"
                                                                                data-title="Quick View" data-fancybox-type="iframe"> <i class="fa
                                                                            fa-search"></i> </a> <button class="mywishlist btn-button" type="button"
                                                                                data-toggle="tooltip" title="" data-id="{{$product->id}}" data-original-title="Add to Wish List">
                                                                            <i class="fa fa-heart"></i> </button> <button class="compare btn-button"
                                                                            type="button" data-toggle="tooltip" title=""
                                                                            onclick="compare.add('28');" data-original-title="Compare this Product">
                                                                            <i class="fa fa-exchange"></i> </button> <button class="addToCart
                                                                            btn-button" type="button" data-toggle="tooltip" title=""
                                                                            onclick="cart.add('28');" data-original-title="Add to cart"> <span
                                                                            class="hidden">Add to cart</span> </button> </div> </div> </div> </div>
                                                                            </div> @endforeach <!-- product end --> </div> <div class="ltabs-item
                                                                            col-md-4"> @php $catego=$catesection->id;
                                                                            $pro=App\Product::where('is_deleted',0)->where('cate_id',$catego)->orderBy('id','DESC')->limit(2)->skip(4)->get();
                                                                            @endphp @foreach($pro as $product) <div class="item-inner product-layout
                                                                                transition product-grid"> <div class="product-item-container"> <div
                                                                                    class="left-block"> <div class="image product-image-container "> <a
                                                                                        class="lt-image" href="#" target="_self" title="Bougainvilleas On
                                                                                        Lombard Street, San Francisco, Tokyo"> <img
                                                                                        src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}"
                                                                                    alt="Bougainvilleas On Lombard Street, San Francisco, Tokyo"> </a>
                                                                                </div> <div class="box-label"> <span class="label-product
                                                                            label-sale">Sale</span> </div> </div> <div class="right-block"> <div
                                                                            class="caption"> <h4> <a
                                                                            href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>
                                                                            </h4> <div class="total-price clearfix"> <div class="price price-left">
                                                                                <span class="price-new">৳ {{$product->product_price}}</span> <span
                                                                            class="price-old">$122.00</span> </div> <div class="price-sale
                                                                            price-right"> <span class="discount 123">-11%<strong>OFF</strong></span>
                                                                        </div> </div> </div> <div class="button-group"> <div class="button-inner
                                                                        so-quickview"> <a class="lt-image hidden" href="#" target="_self"
                                                                        title="Bougainvilleas On Lombard Street, San Francisco, Tokyo"></a> <a
                                                                        class="btn-button btn-quickview quickview quickview_handler"
                                                                        href="{{url('product/details/'.$product->id)}}" title="Quick View"
                                                                        data-title="Quick View" data-fancybox-type="iframe"> <i class="fa
                                                                    fa-search"></i> </a> <button class="mywishlist btn-button" type="button"
                                                                        data-toggle="tooltip" title="" data-id="{{$product->id}}"
                                                                    data-original-title="Add to Wish List"> <i class="fa fa-heart"></i>
                                                                    </button> <button class="compare btn-button" type="button"
                                                                    data-toggle="tooltip" title="" onclick="compare.add('28');"
                                                                    data-original-title="Compare this Product"> <i class="fa
                                                                    fa-exchange"></i> </button> <button class="addToCart btn-button"
                                                                    type="button" data-toggle="tooltip" title="" onclick="cart.add('28');"
                                                                    data-original-title="Add to cart"> <span class="hidden">Add to
                                                                    cart</span> </button> </div> </div> </div> </div> </div> @endforeach
                                                                    <!-- product end --> </div>
                                                                </div>
                                                            </div>
                                                            <div class="ltabs-items  items-category-7 grid" data-total="16">
                                                                <div class="ltabs-loading">
                                                                </div>
                                                            </div>
                                                            <div class="ltabs-items  items-category-8 grid" data-total="16">
                                                                <div class="ltabs-loading">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    <!-- Digital & Electronics -->
                    <!-- section four -->
                    @php
                    $sectionfour=App\Category::where('is_deleted',0)->where('section_id',4)->orderBy('id','DESC')->get();
                    @endphp
                    <section id="box-link5" class="section-style">
                        <div class="container page-builder-ltr">
                            <div class="row row-style row_a5">
                                @foreach($sectionfour as $key => $catefour)
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_iunl  block block_8 title_neo5">
                                    <div class="module so-listing-tabs-ltr home1-lt-style4 default-nav clearfix img-float home-lt1">
                                        <div class="head-title font-ct">
                                            <h2 class="modtitle">
                                            <span>{{$catefour->cate_name}}</span>
                                            </h2>
                                        </div>
                                        <div class="modcontent">
                                            <div id="so_listing_tabs_4" class="so-listing-tabs first-load">
                                                <div class="ltabs-wrap">
                                                    <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="3" data-xs="2" data-margin="0">
                                                        <!--Begin Tabs-->
                                                        <div class="ltabs-tabs-wrap">
                                                            <span class="ltabs-tab-selected"></span>
                                                            <span class="ltabs-tab-arrow">▼</span>
                                                            <div class="item-sub-cat">
                                                                <ul class="ltabs-tabs cf">
                                                                    <li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".items-category-1"> <span class="ltabs-tab-label">Best Seller</span> </li>
                                                                    <li class="ltabs-tab " data-category-id="9" data-active-content=".items-category-9"> <span class="ltabs-tab-label">New Arrivals</span> </li>
                                                                    <li class="ltabs-tab " data-category-id="10" data-active-content=".items-category-10"> <span class="ltabs-tab-label">Most Rating</span> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- End Tabs-->
                                                    </div>
                                                    <div class="wap-listing-tabs products-list grid">
                                                        <div class="ltabs-items-container ">
                                                            <!--Begin Items-->
                                                            <div class="ltabs-items ltabs-items-selected items-category-1" data-total="16">
                                                                <div class="ltabs-items-inner ltabs-slider">
                                                                    <!-- grid -->
                                                                    @php
                                                                    $category_id=$catefour->id;
                                                                    $products=App\Product::where('is_deleted',0)->where('cate_id',$category_id)->orderBy('id','DESC')->limit(4)->get();
                                                                    @endphp
                                                                    @foreach($products as $product)
                                                                    <div class="ltabs-item">
                                                                        <!-- product -->
                                                                        
                                                                        <div class="item-inner product-layout transition product-grid">
                                                                            <div class="product-item-container">
                                                                                <div class="left-block">
                                                                                    <div class="image product-image-container ">
                                                                                        <a class="lt-image" data-product="114" href="#" target="_self" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
                                                                                            <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-label"><span class="label-product label-sale">Sale</span></div>
                                                                                </div>
                                                                                <div class="right-block">
                                                                                    <div class="caption">
                                                                                        <h4><a href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a></h4>
                                                                                        <div class="total-price clearfix">
                                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price}}</span><span class="price-old">$122.00</span></div>
                                                                                            <div class="price-sale price-right"><span class="discount 123">-20%<strong>OFF</strong></span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="button-group">
                                                                                        <div class="button-inner so-quickview">
                                                                                            <a class="lt-image hidden" data-product="114" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                                <i class="fa fa-search"></i>
                                                                                            </a>
                                                                                            <button class="mywishlist btn-button" type="button" data-toggle="tooltip" title="" data-id="{{$product->id}}" data-original-title="Add to Wish List">
                                                                                            <i class="fa fa-heart"></i>
                                                                                            </button>
                                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
                                                                                            <i class="fa fa-exchange"></i>
                                                                                            </button>
                                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                                            <span class="hidden">Add to cart</span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="ltabs-items items-category-9 grid" data-total="16">
                                                                <div class="ltabs-loading"></div>
                                                            </div>
                                                            <div class="ltabs-items  items-category-10 grid" data-total="16">
                                                                <div class="ltabs-loading"></div>
                                                            </div>
                                                            <div class="row clearfix banner-tab">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 banners">
                                                                    <div>
                                                                        <a title="Static Image" href="#"><img src="{{asset('public/')}}/1555.png" alt="Static Image"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 banners">
                                                                    <div>
                                                                        <a title="Static Image" href="#"><img src="{{asset('public/')}}/1555.png" alt="Static Image"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    <!-- Extra -->
                    <!-- section 5 -->
                    @php
                    $footcate=App\Category::where('section_id',5)->where('is_deleted',0)->orderBy('id','DESC')->limit(3)->get();
                    @endphp
                    <div class="container page-builder-ltr">
                        <div class="row row-style row_a6">
                            @foreach($footcate as $cate)
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col_siw1  block block_9">
                                <div class="moduletable module so-extraslider-ltr home1-extra clearfix">
                                    <div class="head-title font-ct">
                                        <h2 class="modtitle">{{$cate->cate_name}}</h2>
                                    </div>
                                    <div class="modcontent">
                                        <div id="so_extra_slider_sport" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
                                            <div class="extraslider-inner owl2-carousel owl2-theme owl2-loaded extra-animate">
                                                <div class="category-slider-inner products-list yt-content-slider-2" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                                    <div class="item products-list grid">
                                                        <div class="item-wrap product-layout style1 ">
                                                            @php
                                                            $cate_id=$cate->id;
                                                            $products=App\Product::where('is_deleted',0)->where('cate_id',$cate_id)->orderBy('id','DESC')->limit(3)->get();
                                                            @endphp
                                                            @foreach($products as $product)
                                                            <div class="item-wrap-inner product-item-container">
                                                                <div class="left-block">
                                                                    <div class="item-image">
                                                                        <div class="item-img-info product-image-container ">
                                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Men Collection Outfit Grid, Outfit and  Colored Sport ">
                                                                                <img src="{{asset('public/uploads/products/thumbnail/smallthum/'.$product->thumbnail_img)}}" alt="Men Collection Outfit Grid, Outfit and  Colored Sport " height="120px" width="120px">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="box-label">
                                                                        <span class="label-product label-sale">Sale</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4 class="item-title">
                                                                        <a href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>
                                                                        </h4>
                                                                        <!-- Begin item-content -->
                                                                        <div class="item-content">
                                                                            <div class="total-price">
                                                                                <div class="price price-left">
                                                                                    <span class="price product-price">
                                                                                        ৳ {{$product->product_price}}
                                                                                    </span>
                                                                                    <span class="price-old">$122.00</span>
                                                                                </div>
                                                                                <div class="price-sale price-right">
                                                                                    <span class="discount">-40%
                                                                                        <strong>OFF</strong>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End item-content -->
                                                                    </div>
                                                                    <!-- End item-info -->
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            <!-- End item-wrap-inner -->
                                                        </div>
                                                    </div>
                                                    <div class="item products-list grid">
                                                        <div class="item-wrap product-layout style1 ">
                                                            @php
                                                            $cate_id=$cate->id;
                                                            $products=App\Product::where('is_deleted',0)->where('cate_id',$cate_id)->orderBy('id','DESC')->skip(3)->limit(3)->get();
                                                            @endphp
                                                            @foreach($products as $product)
                                                            <div class="item-wrap-inner product-item-container">
                                                                <div class="left-block">
                                                                    <div class="item-image">
                                                                        <div class="item-img-info product-image-container ">
                                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Drumstick uttempor the actual teachings of the great">
                                                                                <img src="{{asset('public/uploads/products/thumbnail/smallthum/'.$product->thumbnail_img)}}" alt="Drumstick uttempor the actual teachings of the great">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="box-label">
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4 class="item-title">
                                                                        <a href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>
                                                                        </h4>
                                                                        <!-- Begin item-content -->
                                                                        <div class="item-content">
                                                                            <div class="total-price">
                                                                                <div class="price price-left">
                                                                                    <span class="price product-price">
                                                                                        ৳ {{$product->product_price}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="price-sale price-right">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End item-content -->
                                                                    </div>
                                                                    <!-- End item-info -->
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            <!-- End item-wrap-inner -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.mywishlist').on('click', function(){
         var id = $(this).data('id');
             //alert(id);
        if(id){
            $.ajax({
                url: "{{ url('/product/add/wishlist/') }}/"+id,
                type:"GET",
                dataType:"json",
                processData: false,
                 success: function (data) {
                    console.log(data);
             if (data.check){
                 toastr.error("Already This Product Add wishlist");
            }else{
                 toastr.success("Product Add To wishlist");
                }
            }
         });
     } else {
         alert('danger');
     }
    });
});
</script>
<script>
     $(document).ready(function() {
        $('.compareproduct').on('click', function(){
            var com_id = $(this).val();
            $.ajax({
                type:'GET',
                url:"{{ url('/product/compare') }}/"+com_id,
                processData: false,
                success: function (data) {
                    if (data.checkip){
                        toastr.error("Already This Product Add Compare");
                        
                    }else{
                        toastr.success("product add to compare");
                       
                        }

                }
             });

        
    });
});
    </script>
@endsection