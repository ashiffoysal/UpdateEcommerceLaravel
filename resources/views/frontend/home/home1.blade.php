@extends('layouts.websiteapp')
@section('main_content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="search-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-content">
                    <div class="row" id="search_result_product">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="main_content">
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
                                                    <img class="responsive" src="{{asset('public/uploads/banner/'.$banner->ban_image)}}" alt="slide 1 - 1">
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
                                @php
                                $bottomimage=App\Banner::where('is_deleted',0)->limit(2)->inRandomOrder()->get();
                                @endphp
                                @foreach($bottomimage as $key => $banbottom)
                                <div class="item-{{++$key}} col-lg-6 col-md-6 col-sm-6 banners">
                                    <div>
                                        <a title="Static Image" href="#"><img src="{{asset('public/uploads/banner/'.$banbottom->bottom_image)}}" alt="Bottom Image"></a>
                                    </div>
                                </div>
                                @endforeach
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

                        <div>
                            <div class="home1-banner-2 clearfix">


                                @php
                                $banimg=App\SiteBanner::where('section',1)->where('is_deleted',0)->where('status',1)->inRandomOrder()->limit(2)->get();
                                @endphp
                                @foreach($banimg as $key => $mbanimg)
                                <div class="item-{{$key}} col-lg-6 col-md-6 col-sm-6 banners">
                                    <div>
                                        <a title="Static Image" href="#"><img src="{{asset('public/uploads/sitebanner/'.$mbanimg->image)}}" alt="Static Image"></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

                                                                <button class="compare btn-button compareproduct" type="button" id="compareproduct" value="{{$flasdetail->product->id }}"><i class="fa fa-exchange"></i></button>


                                                                <button class="mywishlist btn-button" type="button" data-toggle="tooltip" title="" data-original-title=" to Wish List"><i class="fa fa-heart"></i></button>
                                                                <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('35');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>

                                                                <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('35');" data-original-title="Add to Cart"> <span class="hidden">Add to Cart</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="caption">
                                                            <h4><a href="{{url('/product/details/page/'.$flasdetail->product_id)}}" target="_self" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo">{{Str::limit($flasdetail->product->product_name,40)}}</a>
                                                            </h4>
                                                            <div class="total-price clearfix">
                                                                <div class="price price-left">
                                                                    <span class="price-new">৳
                                                                        {{$flasdetail->product->product_price}}</span>
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


                                @php
                                $banimg=App\SiteBanner::where('section',1)->where('is_deleted',0)->where('status',1)->inRandomOrder()->limit(2)->get();
                                @endphp
                                @foreach($banimg as $key => $mbanimg)
                                <div class="item-{{$key}} col-lg-6 col-md-6 col-sm-6 banners">
                                    <div>
                                        <a title="Static Image" href="#"><img src="{{asset('public/uploads/sitebanner/'.$mbanimg->image)}}" alt="Static Image"></a>
                                    </div>
                                </div>
                                @endforeach
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
                                                                    <div class="box-label"><span class="label-product label-sale">Sale</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4>
                                                                            <a href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>
                                                                        </h4>

                                                                        @php
                                                                            $flashdealdetail = App\FlashDealDetail::where('product_id',$product->id)->get();
                                                                        @endphp

                                                                        <div class="total-price clearfix">
                                                                            @if(count($flashdealdetail) > 0)
                                                                            @foreach($flashdealdetail as $row)

                                                                            <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>

                                                                            @if($row ->discount_type == 1 )


                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price - $row->discount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @else
                                                                            
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price -$productdiscount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                        </div>
                                                                            @endif
                                                                            @endforeach
                                                                            @else
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @endif

                                                                            <div class="price-sale price-right">
                                                                                @foreach($flashdealdetail as $row)
                                                                                @if($row ->discount_type == 1 )
                                                                                <span class="discount">
                                                                                    
                                                                                    - ৳ {{$row->discount}}
                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @else
                                                                                <span class="discount">
                                                                                -{{$row->discount}}%

                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            @if(Auth::guard('web')->check())
                                                                            <button class="mywishlist btn-button" type="button" data-toggle="tooltip" title="" data-original-title="add to Wish List" data-id="{{$product->id}}"> <i class="fa fa-heart"></i></button>
                                                                            @else
                                                                            <a href="{{route('login')}}" class="compare btn-button"><i class="fa fa-heart"></i></a>
                                                                            @endif

                                                                            <button class="compare btn-button compareproduct" type="button" id="compareproduct" value="{{$product->id }}"><i class="fa fa-exchange"></i></button>









                                                                            <form class="option-choice-form" onclick="homeadtocart(this);">

                                                                                <input type="hidden" value="1" name="quantity">
                                                                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                                                                <input type="hidden" value="{{$product->product_price}}" name="product_price">
                                                                                @if($product->product_type ==1)
                                                                                <a class="addToCart btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                    <i class="fa fa-search"></i>
                                                                                    <input type="hidden" name="combination">
                                                                                </a>
                                                                                @else
                                                                                <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                                    <span class="hidden">Add to cart</span>
                                                                                </button>
                                                                                @endif
                                                                            </form>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- product -->
                                                        </div>


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
                                                                    <div class="box-label"><span class="label-product label-sale">Sale</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4>
                                                                            <a href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>
                                                                        </h4>

                                                                        @php
                                                                        $flashdealdetail = App\FlashDealDetail::where('product_id',$product->id)->get();
                                                                        @endphp

                                                                        <div class="total-price clearfix">
                                                                            @if(count($flashdealdetail) > 0)
                                                                            @foreach($flashdealdetail as $row)

                                                                            <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>

                                                                            @if($row ->discount_type == 1 )


                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price -$productdiscount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @else
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price - $row->discount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @endif
                                                                            @endforeach
                                                                            @else
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @endif

                                                                            <div class="price-sale price-right">
                                                                                @foreach($flashdealdetail as $row)
                                                                                @if($row ->discount_type == 1 )
                                                                                <span class="discount">
                                                                                    - ৳ {{$row->discount}}
                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @else
                                                                                <span class="discount">
                                                                                    
                                                                                    -{{$row->discount}}%
                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            @if(Auth::guard('web')->check())
                                                                            <button class="mywishlist btn-button" type="button" data-toggle="tooltip" title="" data-original-title="add to Wish List" data-id="{{$product->id}}"> <i class="fa fa-heart"></i></button>
                                                                            @else
                                                                            <a href="{{route('login')}}" class="compare btn-button"><i class="fa fa-heart"></i></a>
                                                                            @endif

                                                                            <button class="compare btn-button compareproduct" type="button" id="compareproduct" value="{{$product->id }}"><i class="fa fa-exchange"></i></button>









                                                                            <form class="option-choice-form" onclick="homeadtocart(this);">

                                                                                <input type="hidden" value="1" name="quantity">
                                                                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                                                                <input type="hidden" value="{{$product->product_price}}" name="product_price">
                                                                                @if($product->product_type ==1)
                                                                                <a class="addToCart btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                    <i class="fa fa-search"></i>
                                                                                    <input type="hidden" name="combination">
                                                                                </a>
                                                                                @else
                                                                                <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                                    <span class="hidden">Add to cart</span>
                                                                                </button>
                                                                                @endif
                                                                            </form>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- product -->
                                                        </div>


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

                                                @php
                                                $maincate_id=$catename->id;
                                                $newban_image=App\CategoryBanner::where('section',3)->where('category_id',$maincate_id)->orderBy('id','DESC')->limit(1)->first();
                                                @endphp
                                                @if($newban_image)
                                                @php
                                                $sitebanmain=$newban_image->siteban_id;
                                                $main_image=App\SiteBanner::where('id',$sitebanmain)->where('is_deleted',0)->where('status',1)->first();
                                                @endphp
                                                @if($main_image)
                                                <div>
                                                    <a href="product.html" title="" target="_self">
                                                        <img class="categories-loadimage" title="" alt="" src="{{asset('public/uploads/sitebanner/'.$main_image->image)}}">
                                                    </a>
                                                </div>
                                                @else
                                                <div>
                                                    <a href="product.html" title="" target="_self">
                                                        <img class="categories-loadimage" title="" alt="" src="{{asset('public/frontend/')}}/image/catalog/demo/banners/home1/md-banner-1.jpg">
                                                    </a>
                                                </div>
                                                @endif
                                                @else
                                                <div>
                                                    <a href="product.html" title="" target="_self">
                                                        <img class="categories-loadimage" title="" alt="" src="{{asset('public/frontend/')}}/image/catalog/demo/banners/home1/md-banner-1.jpg">
                                                    </a>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="ltabs-items-container">
                                                <div class="ltabs-items ltabs-items-selected items-category-4" data-total="16">
                                                    <div class="ltabs-items-inner ltabs-slider ">


                                                        <div class="ltabs-item">
                                                            @php
                                                            $cate_id=$catename->id;
                                                            $products=App\Product::where('is_deleted',0)->where('cate_id',$cate_id)->orderBy('id','DESC')->limit(2)->get();
                                                            @endphp
                                                            @foreach($products
                                                            as $product)

                                                                <div class="item-inner
                                                            product-layout
                                                            transition
                                                            product-grid">
                                                                    <div class="product-item-container">
                                                                        <div class="left-block">
                                                                            <div class="image
                                                                        product-image-container
                                                                        "> <a class="lt-image" href="#" target="_self" title="Invisible
                                                                            Hidden Spy
                                                                            Earphone Micro
                                                                            Wireless"> <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt="Invisible
                                                                            Hidden Spy
                                                                            Earphone Micro
                                                                        Wireless"> </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="caption">
                                                                                <h4> <a href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>


                                                                                </h4>
                                                                                @php
                                                                            $flashdealdetail = App\FlashDealDetail::where('product_id',$product->id)->get();
                                                                        @endphp

                                                                        <div class="total-price clearfix">
                                                                            @if(count($flashdealdetail) > 0)
                                                                            @foreach($flashdealdetail as $row)

                                                                            <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>

                                                                            @if($row ->discount_type == 1 )


                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price - $row->discount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @else
                                                                            
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price -$productdiscount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                        </div>
                                                                            @endif
                                                                            @endforeach
                                                                            @else
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @endif

                                                                            <div class="price-sale price-right">
                                                                                @foreach($flashdealdetail as $row)
                                                                                @if($row ->discount_type == 1 )
                                                                                <span class="discount">
                                                                                    - ৳ {{$row->discount}}
                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @else
                                                                                <span class="discount">
                                                                                    - {{$row->discount}} %

                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                            </div>
                                                                            <div class="button-group">
                                                                                <div class="button-inner
                                                                                so-quickview"> <a class="lt-image
                                                                                    hidden" href="#" target="_self" title="Invisible
                                                                                    Hidden Spy
                                                                                    Earphone Micro
                                                                                Wireless"></a> <a class="btn-button
                                                                                btn-quickview
                                                                                quickview
                                                                                quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick
                                                                                View" data-fancybox-type="iframe">
                                                                                        <i class="fa
                                                                                fa-search"></i>
                                                                                    </a>
                                                                                    @if(Auth::guard('web')->check())
                                                                                    <button class="mywishlist btn-button" type="button" data-toggle="tooltip" title="" data-original-title="add to Wish List" data-id="{{$product->id}}"> <i class="fa fa-heart"></i></button>
                                                                                    @else
                                                                                    <a href="{{route('login')}}" class="compare btn-button"><i class="fa fa-heart"></i></a>
                                                                                    @endif

                                                                                    <button class="compare btn-button compareproduct" type="button" id="compareproduct" value="{{$product->id }}"><i class="fa fa-exchange"></i></button>


                                                                                    <form class="option-choice-form" onclick="homeadtocart(this);">

                                                                                <input type="hidden" value="1" name="quantity">
                                                                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                                                                <input type="hidden" value="{{$product->product_price}}" name="product_price">
                                                                                @if($product->product_type ==1)
                                                                                <a class="addToCart btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                    <i class="fa fa-search"></i>
                                                                                    <input type="hidden" name="combination">
                                                                                </a>
                                                                                @else
                                                                                <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                                    <span class="hidden">Add to cart</span>
                                                                                </button>
                                                                                @endif
                                                                            </form>

                                                                                    
                                                                                
                                                                                </div>


                                                                                    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            

                                                            @endforeach
                                                            <!--
                                                            -->
                                                        </div>
                                                        <div class="ltabs-item">
                                                            @php
                                                            $cate_id=$catename->id;
                                                            $products=App\Product::where('is_deleted',0)->where('cate_id',$cate_id)->orderBy('id','DESC')->skip(2)->limit(2)->get();
                                                            @endphp
                                                            @foreach($products
                                                            as $product)

                                                                <div class="item-inner
                                                            product-layout
                                                            transition
                                                            product-grid">
                                                                    <div class="product-item-container">
                                                                        <div class="left-block">
                                                                            <div class="image
                                                                        product-image-container
                                                                        "> <a class="lt-image" href="#" target="_self" title="Invisible
                                                                            Hidden Spy
                                                                            Earphone Micro
                                                                            Wireless"> <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt="Invisible
                                                                            Hidden Spy
                                                                            Earphone Micro
                                                                        Wireless"> </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="caption">
                                                                                <h4> <a href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>


                                                                                </h4>
                                                                                @php
                                                                            $flashdealdetail = App\FlashDealDetail::where('product_id',$product->id)->get();
                                                                        @endphp

                                                                        <div class="total-price clearfix">
                                                                            @if(count($flashdealdetail) > 0)
                                                                            @foreach($flashdealdetail as $row)

                                                                            <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>

                                                                            @if($row ->discount_type == 1 )


                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price - $row->discount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @else
                                                                            
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price -$productdiscount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                        </div>
                                                                            @endif
                                                                            @endforeach
                                                                            @else
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @endif

                                                                            <div class="price-sale price-right">
                                                                                @foreach($flashdealdetail as $row)
                                                                                @if($row ->discount_type == 1 )
                                                                                <span class="discount">
                                                                                    
                                                                                    - ৳ {{$row->discount}}
                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @else
                                                                                <span class="discount">
                                                                                    -{{$row->discount}}%

                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>

                                                                        
                                                                            </div>
                                                                            <div class="button-group">
                                                                                <div class="button-inner
                                                                                so-quickview"> <a class="lt-image
                                                                                    hidden" href="#" target="_self" title="Invisible
                                                                                    Hidden Spy
                                                                                    Earphone Micro
                                                                                Wireless"></a> <a class="btn-button
                                                                                btn-quickview
                                                                                quickview
                                                                                quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick
                                                                                View" data-fancybox-type="iframe">
                                                                                        <i class="fa
                                                                                fa-search"></i>
                                                                                    </a>
                                                                                    @if(Auth::guard('web')->check())
                                                                                    <button class="mywishlist btn-button" type="button" data-toggle="tooltip" title="" data-original-title="add to Wish List" data-id="{{$product->id}}"> <i class="fa fa-heart"></i></button>
                                                                                    @else
                                                                                    <a href="{{route('login')}}" class="compare btn-button"><i class="fa fa-heart"></i></a>
                                                                                    @endif

                                                                                    <button class="compare btn-button compareproduct" type="button" id="compareproduct" value="{{$product->id }}"><i class="fa fa-exchange"></i></button>


                                                                                    <form class="option-choice-form" onclick="homeadtocart(this);">

                                                                                <input type="hidden" value="1" name="quantity">
                                                                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                                                                <input type="hidden" value="{{$product->product_price}}" name="product_price">
                                                                                @if($product->product_type ==1)
                                                                                <a class="addToCart btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                    <i class="fa fa-search"></i>
                                                                                    <input type="hidden" name="combination">
                                                                                </a>
                                                                                @else
                                                                                <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                                    <span class="hidden">Add to cart</span>
                                                                                </button>
                                                                                @endif
                                                                            </form>

                                                                                    
                                                                                
                                                                                </div>


                                                                                    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            

                                                            @endforeach
                                                            <!--
                                                            -->
                                                        </div>
                                                        <div class="ltabs-item">
                                                            @php
                                                            $cate_id=$catename->id;
                                                            $products=App\Product::where('is_deleted',0)->where('cate_id',$cate_id)->orderBy('id','DESC')->skip(4)->limit(2)->get();
                                                            @endphp
                                                            @foreach($products
                                                            as $product)

                                                                <div class="item-inner
                                                            product-layout
                                                            transition
                                                            product-grid">
                                                                    <div class="product-item-container">
                                                                        <div class="left-block">
                                                                            <div class="image
                                                                        product-image-container
                                                                        "> <a class="lt-image" href="#" target="_self" title="Invisible
                                                                            Hidden Spy
                                                                            Earphone Micro
                                                                            Wireless"> <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt="Invisible
                                                                            Hidden Spy
                                                                            Earphone Micro
                                                                        Wireless"> </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="caption">
                                                                                <h4> <a href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>


                                                                                </h4>
                                                                                @php
                                                                            $flashdealdetail = App\FlashDealDetail::where('product_id',$product->id)->get();
                                                                        @endphp

                                                                        <div class="total-price clearfix">
                                                                            @if(count($flashdealdetail) > 0)
                                                                            @foreach($flashdealdetail as $row)

                                                                            <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>

                                                                            @if($row ->discount_type == 1 )


                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price - $row->discount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @else
                                                                            
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price -$productdiscount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                        </div>
                                                                            @endif
                                                                            @endforeach
                                                                            @else
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @endif

                                                                            <div class="price-sale price-right">
                                                                                @foreach($flashdealdetail as $row)
                                                                                @if($row ->discount_type == 1 )
                                                                                <span class="discount">
                                                                                    
                                                                                    - ৳ {{$row->discount}}
                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @else
                                                                                <span class="discount">
                                                                                    -{{$row->discount}}%

                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                            </div>
                                                                            <div class="button-group">
                                                                                <div class="button-inner
                                                                                so-quickview"> <a class="lt-image
                                                                                    hidden" href="#" target="_self" title="Invisible
                                                                                    Hidden Spy
                                                                                    Earphone Micro
                                                                                Wireless"></a> <a class="btn-button
                                                                                btn-quickview
                                                                                quickview
                                                                                quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick
                                                                                View" data-fancybox-type="iframe">
                                                                                        <i class="fa
                                                                                fa-search"></i>
                                                                                    </a>
                                                                                    @if(Auth::guard('web')->check())
                                                                                    <button class="mywishlist btn-button" type="button" data-toggle="tooltip" title="" data-original-title="add to Wish List" data-id="{{$product->id}}"> <i class="fa fa-heart"></i></button>
                                                                                    @else
                                                                                    <a href="{{route('login')}}" class="compare btn-button"><i class="fa fa-heart"></i></a>
                                                                                    @endif

                                                                                    <button class="compare btn-button compareproduct" type="button" id="compareproduct" value="{{$product->id }}"><i class="fa fa-exchange"></i></button>


                                                                                    <form class="option-choice-form" onclick="homeadtocart(this);">

                                                                                <input type="hidden" value="1" name="quantity">
                                                                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                                                                <input type="hidden" value="{{$product->product_price}}" name="product_price">
                                                                                @if($product->product_type ==1)
                                                                                <a class="addToCart btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                    <i class="fa fa-search"></i>
                                                                                    <input type="hidden" name="combination">
                                                                                </a>
                                                                                @else
                                                                                <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                                    <span class="hidden">Add to cart</span>
                                                                                </button>
                                                                                @endif
                                                                            </form>

                                                                                    
                                                                                
                                                                                </div>


                                                                                    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            

                                                            @endforeach
                                                            <!--
                                                            -->
                                                        </div>
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
                                                @php
                                                $maicate_id=$catesection->id;
                                                $neban_image=App\CategoryBanner::where('section',3)->where('category_id',$maicate_id)->orderBy('id','DESC')->first();
                                                @endphp
                                                @if($neban_image)
                                                @php
                                                $sitbanmain=$neban_image->siteban_id;
                                                $maiimage=App\SiteBanner::where('id',$sitbanmain)->where('is_deleted',0)->where('status',1)->first();

                                                @endphp
                                                @if($maiimage)
                                                <div>
                                                    <a href="product.html" title="" target="_self">
                                                        <img class="categories-loadimage" src="{{asset('public/uploads/sitebanner/'.$maiimage->image)}}">
                                                    </a>
                                                </div>
                                                @else
                                                <div>
                                                    <a href="product.html" title="" target="_self">
                                                        <img class="categories-loadimage" title="" alt="" src="{{asset('public/frontend/')}}/image/catalog/demo/banners/home1/md-banner-1.jpg">
                                                    </a>
                                                </div>
                                                @endif


                                                @else
                                                <div>
                                                    <a href="product.html" title="" target="_self">
                                                        <img class="categories-loadimage" title="" alt="" src="{{asset('public/frontend/')}}/image/catalog/demo/banners/home1/md-banner-1.jpg">
                                                    </a>
                                                </div>
                                                @endif

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
                                    
                                                            <div class="item-inner
                                                            product-layout
                                                            transition
                                                            product-grid">
                                                                    <div class="product-item-container">
                                                                        <div class="left-block">
                                                                            <div class="image
                                                                        product-image-container
                                                                        "> <a class="lt-image" href="#" target="_self" title="Invisible
                                                                            Hidden Spy
                                                                            Earphone Micro
                                                                            Wireless"> <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt="Invisible
                                                                            Hidden Spy
                                                                            Earphone Micro
                                                                        Wireless"> </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="caption">
                                                                                <h4> <a href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>


                                                                                </h4>
                                                                                @php
                                                                            $flashdealdetail = App\FlashDealDetail::where('product_id',$product->id)->get();
                                                                        @endphp

                                                                        <div class="total-price clearfix">
                                                                            @if(count($flashdealdetail) > 0)
                                                                            @foreach($flashdealdetail as $row)

                                                                            <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>

                                                                            @if($row ->discount_type == 1 )


                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price - $row->discount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @else
                                                                            
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price -$productdiscount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                        </div>
                                                                            @endif
                                                                            @endforeach
                                                                            @else
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @endif

                                                                            <div class="price-sale price-right">
                                                                                @foreach($flashdealdetail as $row)
                                                                                @if($row ->discount_type == 1 )
                                                                                <span class="discount">
                                                                                    
                                                                                    - ৳ {{$row->discount}}
                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @else
                                                                                <span class="discount">
                                                                                    -{{$row->discount}}%

                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                            </div>
                                                                            <div class="button-group">
                                                                                <div class="button-inner
                                                                                so-quickview"> <a class="lt-image
                                                                                    hidden" href="#" target="_self" title="Invisible
                                                                                    Hidden Spy
                                                                                    Earphone Micro
                                                                                Wireless"></a> <a class="btn-button
                                                                                btn-quickview
                                                                                quickview
                                                                                quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick
                                                                                View" data-fancybox-type="iframe">
                                                                                        <i class="fa
                                                                                fa-search"></i>
                                                                                    </a>
                                                                                    @if(Auth::guard('web')->check())
                                                                                    <button class="mywishlist btn-button" type="button" data-toggle="tooltip" title="" data-original-title="add to Wish List" data-id="{{$product->id}}"> <i class="fa fa-heart"></i></button>
                                                                                    @else
                                                                                    <a href="{{route('login')}}" class="compare btn-button"><i class="fa fa-heart"></i></a>
                                                                                    @endif

                                                                                    <button class="compare btn-button compareproduct" type="button" id="compareproduct" value="{{$product->id }}"><i class="fa fa-exchange"></i></button>


                                                                                    <form class="option-choice-form" onclick="homeadtocart(this);">

                                                                                <input type="hidden" value="1" name="quantity">
                                                                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                                                                <input type="hidden" value="{{$product->product_price}}" name="product_price">
                                                                                @if($product->product_type ==1)
                                                                                <a class="addToCart btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                    <i class="fa fa-search"></i>
                                                                                    <input type="hidden" name="combination">
                                                                                </a>
                                                                                @else
                                                                                <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                                    <span class="hidden">Add to cart</span>
                                                                                </button>
                                                                                @endif
                                                                            </form>

                                                                                    
                                                                                
                                                                                </div>


                                                                                    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                          
                                                            @endforeach
                                                            <!-- product end -->
                                                        </div> <!-- grid end -->
                                                        <div class="ltabs-item col-md-4">
                                                            @php
                                                            $catego=$catesection->id;
                                                            $pro=App\Product::where('is_deleted',0)->where('cate_id',$catego)->orderBy('id','DESC')->skip(2)->limit(2)->get();
                                                            @endphp
                                                             @foreach($pro as $product)
                                                             <div class="item-inner
                                                            product-layout
                                                            transition
                                                            product-grid">
                                                                    <div class="product-item-container">
                                                                        <div class="left-block">
                                                                            <div class="image
                                                                        product-image-container
                                                                        "> <a class="lt-image" href="#" target="_self" title="Invisible
                                                                            Hidden Spy
                                                                            Earphone Micro
                                                                            Wireless"> <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt="Invisible
                                                                            Hidden Spy
                                                                            Earphone Micro
                                                                        Wireless"> </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="caption">
                                                                                <h4> <a href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>


                                                                                </h4>
                                                                                @php
                                                                            $flashdealdetail = App\FlashDealDetail::where('product_id',$product->id)->get();
                                                                        @endphp

                                                                        <div class="total-price clearfix">
                                                                            @if(count($flashdealdetail) > 0)
                                                                            @foreach($flashdealdetail as $row)

                                                                            <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>

                                                                            @if($row ->discount_type == 1 )


                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price - $row->discount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @else
                                                                            
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price -$productdiscount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                        </div>
                                                                            @endif
                                                                            @endforeach
                                                                            @else
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @endif

                                                                            <div class="price-sale price-right">
                                                                                @foreach($flashdealdetail as $row)
                                                                                @if($row ->discount_type == 1 )
                                                                                <span class="discount">
                                                                                    
                                                                                    - ৳ {{$row->discount}}
                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @else
                                                                                <span class="discount">
                                                                                    -{{$row->discount}}%

                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                            </div>
                                                                            <div class="button-group">
                                                                                <div class="button-inner
                                                                                so-quickview"> <a class="lt-image
                                                                                    hidden" href="#" target="_self" title="Invisible
                                                                                    Hidden Spy
                                                                                    Earphone Micro
                                                                                Wireless"></a> <a class="btn-button
                                                                                btn-quickview
                                                                                quickview
                                                                                quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick
                                                                                View" data-fancybox-type="iframe">
                                                                                        <i class="fa
                                                                                fa-search"></i>
                                                                                    </a>
                                                                                    @if(Auth::guard('web')->check())
                                                                                    <button class="mywishlist btn-button" type="button" data-toggle="tooltip" title="" data-original-title="add to Wish List" data-id="{{$product->id}}"> <i class="fa fa-heart"></i></button>
                                                                                    @else
                                                                                    <a href="{{route('login')}}" class="compare btn-button"><i class="fa fa-heart"></i></a>
                                                                                    @endif

                                                                                    <button class="compare btn-button compareproduct" type="button" id="compareproduct" value="{{$product->id }}"><i class="fa fa-exchange"></i></button>


                                                                                    <form class="option-choice-form" onclick="homeadtocart(this);">

                                                                                <input type="hidden" value="1" name="quantity">
                                                                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                                                                <input type="hidden" value="{{$product->product_price}}" name="product_price">
                                                                                @if($product->product_type ==1)
                                                                                <a class="addToCart btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                    <i class="fa fa-search"></i>
                                                                                    <input type="hidden" name="combination">
                                                                                </a>
                                                                                @else
                                                                                <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                                    <span class="hidden">Add to cart</span>
                                                                                </button>
                                                                                @endif
                                                                            </form>

                                                                                    
                                                                                
                                                                                </div>


                                                                                    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                            <!-- product end -->
                                                        </div>
                                                        <div class="ltabs-item col-md-4">
                                                            @php $catego=$catesection->id;
                                                            $pro=App\Product::where('is_deleted',0)->where('cate_id',$catego)->orderBy('id','DESC')->limit(2)->skip(4)->get();
                                                            @endphp
                                                            @foreach($pro as $product)
                                                            <div class="item-inner
                                                            product-layout
                                                            transition
                                                            product-grid">
                                                                    <div class="product-item-container">
                                                                        <div class="left-block">
                                                                            <div class="image
                                                                        product-image-container
                                                                        "> <a class="lt-image" href="#" target="_self" title="Invisible
                                                                            Hidden Spy
                                                                            Earphone Micro
                                                                            Wireless"> <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt="Invisible
                                                                            Hidden Spy
                                                                            Earphone Micro
                                                                        Wireless"> </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="caption">
                                                                                <h4> <a href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>


                                                                                </h4>
                                                                                @php
                                                                            $flashdealdetail = App\FlashDealDetail::where('product_id',$product->id)->get();
                                                                        @endphp

                                                                        <div class="total-price clearfix">
                                                                            @if(count($flashdealdetail) > 0)
                                                                            @foreach($flashdealdetail as $row)

                                                                            <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>

                                                                            @if($row ->discount_type == 1 )


                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price - $row->discount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @else
                                                                            
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price -$productdiscount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                        </div>
                                                                            @endif
                                                                            @endforeach
                                                                            @else
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @endif

                                                                            <div class="price-sale price-right">
                                                                                @foreach($flashdealdetail as $row)
                                                                                @if($row ->discount_type == 1 )
                                                                                <span class="discount">
                                                                                    
                                                                                    - ৳ {{$row->discount}}
                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @else
                                                                                <span class="discount">
                                                                                    -{{$row->discount}}%

                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                            <div class="button-group">
                                                                                <div class="button-inner
                                                                                so-quickview"> <a class="lt-image
                                                                                    hidden" href="#" target="_self" title="Invisible
                                                                                    Hidden Spy
                                                                                    Earphone Micro
                                                                                Wireless"></a> <a class="btn-button
                                                                                btn-quickview
                                                                                quickview
                                                                                quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick
                                                                                View" data-fancybox-type="iframe">
                                                                                        <i class="fa
                                                                                fa-search"></i>
                                                                                    </a>
                                                                                    @if(Auth::guard('web')->check())
                                                                                    <button class="mywishlist btn-button" type="button" data-toggle="tooltip" title="" data-original-title="add to Wish List" data-id="{{$product->id}}"> <i class="fa fa-heart"></i></button>
                                                                                    @else
                                                                                    <a href="{{route('login')}}" class="compare btn-button"><i class="fa fa-heart"></i></a>
                                                                                    @endif

                                                                                    <button class="compare btn-button compareproduct" type="button" id="compareproduct" value="{{$product->id }}"><i class="fa fa-exchange"></i></button>


                                                                                    <form class="option-choice-form" onclick="homeadtocart(this);">

                                                                                <input type="hidden" value="1" name="quantity">
                                                                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                                                                <input type="hidden" value="{{$product->product_price}}" name="product_price">
                                                                                @if($product->product_type ==1)
                                                                                <a class="addToCart btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                    <i class="fa fa-search"></i>
                                                                                    <input type="hidden" name="combination">
                                                                                </a>
                                                                                @else
                                                                                <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                                    <span class="hidden">Add to cart</span>
                                                                                </button>
                                                                                @endif
                                                                            </form>

                                                                                    
                                                                                
                                                                                </div>


                                                                                    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                            <!-- product end -->
                                                        </div>

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
                                                        <!-- Qayum Hasan -->
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
                                                                        <div class="box-label"><span class="label-product label-sale">Sale</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right-block">
                                                                        <div class="caption">
                                                                            <h4><a href="{{url('/product/details/page/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>
                                                                            </h4>



                                                                            @php
                                                                            $flashdealdetail = App\FlashDealDetail::where('product_id',$product->id)->get();
                                                                        @endphp

                                                                        <div class="total-price clearfix">
                                                                            @if(count($flashdealdetail) > 0)
                                                                            @foreach($flashdealdetail as $row)

                                                                            <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>

                                                                            @if($row ->discount_type == 1 )


                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price - $row->discount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @else
                                                                            
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price -$productdiscount}}</span><span class="price-old">৳ {{$product->product_price}}</span>
                                                                        </div>
                                                                            @endif
                                                                            @endforeach
                                                                            @else
                                                                            <div class="price price-left"><span class="price-new">৳ {{$product->product_price}}</span>
                                                                            </div>
                                                                            @endif

                                                                            <div class="price-sale price-right">
                                                                                @foreach($flashdealdetail as $row)
                                                                                @if($row ->discount_type == 1 )
                                                                                <span class="discount">
                                                                                    
                                                                                    - ৳ {{$row->discount}}
                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @else
                                                                                <span class="discount">
                                                                                    - {{$row->discount}} %

                                                                                    <strong>OFF</strong>
                                                                                </span>
                                                                                @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>

                                                                            
                                                                        </div>
                                                                        <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            @if(Auth::guard('web')->check())
                                                                            <button class="mywishlist btn-button" type="button" data-toggle="tooltip" title="" data-original-title="add to Wish List" data-id="{{$product->id}}"> <i class="fa fa-heart"></i></button>
                                                                            @else
                                                                            <a href="{{route('login')}}" class="compare btn-button"><i class="fa fa-heart"></i></a>
                                                                            @endif

                                                                            <button class="compare btn-button compareproduct" type="button" id="compareproduct" value="{{$product->id }}"><i class="fa fa-exchange"></i></button>









                                                                            <form class="option-choice-form" onclick="homeadtocart(this);">

                                                                                <input type="hidden" value="1" name="quantity">
                                                                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                                                                <input type="hidden" value="{{$product->product_price}}" name="product_price">
                                                                                @if($product->product_type ==1)
                                                                                <a class="addToCart btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                    <i class="fa fa-search"></i>
                                                                                    <input type="hidden" name="combination">
                                                                                </a>
                                                                                @else
                                                                                <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                                    <span class="hidden">Add to cart</span>
                                                                                </button>
                                                                                @endif
                                                                            </form>


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
                                                    @php
                                                    $bottomimage=App\SiteBanner::where('section',1)->where('is_deleted',0)->where('status',1)->skip(2)->limit(2)->inRandomOrder()->get();
                                                    @endphp
                                                    @foreach($bottomimage as $bimage)
                                                    <div class="col-lg-6 col-md-6 col-sm-6 banners">
                                                        <div>
                                                            <a title="Static Image" href="#"><img src="{{asset('public/uploads/sitebanner/'.$bimage->image)}}" alt="{{$bimage->image}}"></a>
                                                        </div>
                                                    </div>
                                                    @endforeach

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




                                                            @php
                                                                    $flashdealdetail = App\FlashDealDetail::where('product_id',$product->id)->get();
                                                            @endphp

                                                            <div class="item-content">
                                                                <div class="total-price">
                                                                    <div class="price price-left">
                                                                    @if(count($flashdealdetail) > 0)
                                                                        @foreach($flashdealdetail as $row)
                                                                        <?php    $productdiscount =($product->product_price * $row->discount)/100; ?>
                                                                        @if($row ->discount_type == 1 )
                                                                        <span class="price product-price">
                                                                        ৳ {{$product->product_price - $row->discount}}
                                                                        </span>
                                                                        <span class="price-old">{{$product->product_price}}</span>
                                                                        @else
                                                                        <span class="price product-price">
                                                                        ৳ {{$product->product_price -$productdiscount}}
                                                                        </span>
                                                                        <span class="price-old">{{$product->product_price}}</span>
                                                                        @endif
                                                                        @endforeach
                                                                    @else
                                                                    <span class="price product-price">
                                                                        ৳ {{$product->product_price}}
                                                                    </span>
                                                                    @endif
                                                                    </div>
                                                                    <div class="price-sale price-right">
                                                    
                                                                @foreach($flashdealdetail as $row)
                                                                @if($row ->discount_type == 1 )
                                                                <span class="discount">
                                                                    
                                                                    - ৳ {{$row->discount}}
                                                                    <strong>OFF</strong>
                                                                </span>
                                                                @else
                                                                <span class="discount">
                                                                    -{{$row->discount}}%

                                                                    <strong>OFF</strong>
                                                                </span>
                                                                @endif
                                                                @endforeach
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

    <script>
        $(document).ready(function() {
            $('.compareproduct').on('click', function() {
                var com_id = $(this).val();
                //alert(com_id);
                $.ajax({
                    type: 'GET',
                    url: "{{ url('/product/compare') }}/" + com_id,
                    processData: false,
                    success: function(data) {
                        if (data.checkip) {
                            toastr.error("Already This Product Add Compare");

                        } else {
                            toastr.success("product add to compare");

                        }
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.mywishlist').on('click', function() {
                var id = $(this).data('id');
                //alert(id);
                if (id) {
                    $.ajax({
                        url: "{{ url('/product/add/wishlist/') }}/" + id,
                        type: "GET",
                        dataType: "json",
                        processData: false,
                        success: function(data) {
                            console.log(data);
                            if (data.check) {
                                toastr.error("Already This Product Add wishlist");
                            } else {
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
        function homeadtocart(el) {
            var product_id = el.product_id.value;
            var product_price = el.product_price.value;
            var quantity = el.quantity.value;
            if (!el.combination) {
                $.ajax({
                    type: 'GET',
                    url: "{{ route('product.add.cart') }}",
                    data: {
                        product_id: product_id,
                        product_price: product_price,
                        quantity: quantity,
                    },
                    success: function(data) {
                        console.log(data);
                        document.getElementById('cartdatacount').innerHTML = data.quantity;
                        document.getElementById('product_price').innerHTML = data.total;

                    }
                })
            }


        }
    </script>

    <script>
        $(function() {
            $('.Countdown-1').countdown('{{ $hotdeals->end_date }}', function(event) {
                $(this).html(event.strftime('' + '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time"> D </div></div>' +
                    '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">H</div></div>' +
                    '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">M</div></div>' +
                    '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">S</div></div>'));
            });
        });
    </script>


    @endsection