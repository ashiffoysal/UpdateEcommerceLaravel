@extends('mobile.master')
@section('main_content')
<div class="search_content_section">
    <div class="search_result">
        <div  class="heading_section">
            <h6 style="margin-top:40px; margin-left:10px;">Search Result shown here <i style="color:#ff5561" class="fa fa-long-arrow-down"></i></h6>
        </div>
        <div class="products-list row nopadding-xs grid so-filter-gird" id="search_result_product">


        </div>
    </div>
</div>
<div class="main_content">


<div class="col-xs-12 no-padding">
    <div class="module sohomepage-slider ">
        <div class="modcontent">
            <div id="sohomepage-slider">
                <div class="so-homeslider contentslider" data-rtl="no" data-autoplay="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-item_xs="1" data-item_sm="1" data-arrows="no" data-pagination="yes" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
                  @php
                    $allslider=App\MobileSlider::where('is_deleted',0)->where('status',1)->get();
                  @endphp
                  @foreach($allslider as $slider)
                    <div class="item ">
                        <a href="{{$slider->slider_link}}" title="slider2" target="_self">
                            <img class="responsive" src="{{asset('public/uploads/banner/mobile/'.$slider->slider_img)}}" alt="slider2">
                        </a>
                        <div class="sohomeslider-description"></div>
                    </div>
                  @endforeach
                </div>
                <div class="loading-placeholder"></div>
            </div>
        </div>

    </div>
</div>
<div class="col-xs-12 no-padding">
    <div class="mobile-bn1-h1 clearfix">
        <div class="banners">
          @php
            $allbottom=App\MobileSlider::where('is_deleted',0)->where('status',1)->OrderBy('id','DESC')->limit(2)->get();
          @endphp
          @foreach($allbottom as $bottom)
            <div class="banner21">
                <a href="#">
                    <img src="{{asset('public/uploads/banner/mobile/'.$bottom->bottom_image)}}" alt="Image Client">
                </a>
            </div>
          @endforeach

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
                    <div class="inner"><a href="{{url('category/'.$cate->cate_slug.'/'.$cate->id)}}"><img src="{{asset('public/uploads/category/mobile/'.$cate->cate_image)}}" alt="Static Image">{{$cate->cate_name}}</a></div>
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
                                            @if($flasdetail->discount_type==1)
                                            <span class="label-product label-sale">-{{$flasdetail->discount}}৳</span>
                                            @elseif($flasdetail->discount_type==2)
                                            <span class="label-product label-sale">-{{$flasdetail->discount}}%</span>
                                            @endif
                                        </div>
                                        <a href="{{url('product/details/'.$flasdetail->product->slug.'/'.$flasdetail->product->id)}}" target="_self">

                                            <img src="{{asset('public/uploads/products/thumbnail/mobile/'.$flasdetail->product->thumbnail_img)}}" alt="Hamburger shoulder" class="img-responsive">

                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="{{url('product/details/'.$flasdetail->product->slug.'/'.$flasdetail->product->id)}}" target="_self" title="Hamburger shoulder">{{Str::limit($flasdetail->product->product_name,5)}}</a></h4>
                                        <p class="price">
                                          @if($flasdetail->discount_type==1)
                                            <span class="price-new">৳ {{$flasdetail->product->product_price - $flasdetail->discount}}</span> <span class="price-old">{{$flasdetail->product->product_price}}</span>
                                          @elseif($flasdetail->discount_type==2)
                                            @php
                                            $dis=($flasdetail->discount * $flasdetail->product->product_price)/100;
                                            @endphp

                                            <span class="price-new">৳
                                                {{$flasdetail->product->product_price - $dis}}</span> <span class="price-old">{{$flasdetail->product->product_price}}</span>
                                          @endif

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
  @php
    $bannner=App\MobileBanner::where('section',1)->OrderBy('id','DESC')->limit(1)->inRandomOrder()->get();
  @endphp
<div class="col-xs-12">
    <div class="mobile-bn2-h1 clearfix">
      @foreach($bannner as $ban)
        <div class="banners">
            <a href="{{$ban->link}}"><img src="{{asset('public/uploads/sitebanner/mobile/'.$ban->img)}}" alt="Image Client"></a>
        </div>
      @endforeach
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
                      @php
                        $flashdealdetail=App\FlashDealDetail::where('product_id',$product->id)->where('status',1)->limit(1)->get();
                      @endphp
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container ">

                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                          @if(count($flashdealdetail) > 0)
                                           @foreach($flashdealdetail as $row)
                                             @if($row->discount_type==1)
                                             <span class="label-product label-sale">-{{$row->discount}}৳</span>
                                             @elseif($row->discount_type==2)
                                             <span class="label-product label-sale">-{{$row->discount}}%</span>
                                             @endif
                                           @endforeach
                                         @endif
                                        </div>
                                        <a href="{{url('product/details/'.$product->slug.'/'.$product->id)}}" target="_self">
                                            <img src="{{asset('public/uploads/products/thumbnail/mobile/'.$product->thumbnail_img)}}" alt="Hamburger shoulder" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="{{url('product/details/'.$product->slug.'/'.$product->id)}}" target="_self" title="Hamburger shoulder">{{Str::limit($product->product_name,10)}}</a></h4>
                                        <p class="price">
                                          @if(count($flashdealdetail) > 0)
                                             @foreach($flashdealdetail as $row)
                                                 @if($row->discount_type==1)
                                                 <span class="price-new">৳ {{$product->product_price -$row->discount}}</span> <span class="price-old">৳ {{$product->product_price}}</span>
                                                 @elseif($row->discount_type==2)
                                                   @php
                                                     $productdiscount = ($product->product_price * $row->discount) / 100;
                                                   @endphp
                                                   <span class="price-new">৳ {{$product->product_price -$productdiscount}}</span> <span class="price-old">৳ {{$product->product_price}}</span>
                                                 @endif
                                             @endforeach
                                           @else
                                             <span class="price-new">৳ {{$product->product_price}}</span>
                                           @endif
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

<div class="col-xs-12">
  @php
    $bannner=App\MobileBanner::where('section',1)->OrderBy('id','DESC')->skip(1)->limit(1)->inRandomOrder()->get();
  @endphp
    <div class="mobile-bn3-h2 clearfix">
        @foreach($bannner as $ban)
        <a href="#">
            <img src="{{asset('public/uploads/sitebanner/mobile/'.$ban->img)}}" alt="Image Client">
        </a>
        @endforeach
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
                                          @php
                                            $flashdealdetail=App\FlashDealDetail::where('product_id',$product->id)->where('status',1)->limit(1)->get();
                                          @endphp
                                          @if(count($flashdealdetail) > 0)
                                           @foreach($flashdealdetail as $row)
                                             @if($row->discount_type==1)
                                             <span class="label-product label-sale">-{{$row->discount}}৳</span>
                                             @elseif($row->discount_type==2)
                                             <span class="label-product label-sale">-{{$row->discount}}%</span>
                                             @endif
                                           @endforeach
                                         @endif
                                        </div>

                                        <a href="{{url('product/details/'.$product->slug.'/'.$product->id)}}" target="_self">
                                            <img src="{{asset('public/uploads/products/thumbnail/mobile/'.$product->thumbnail_img)}}" alt="Fuzan sumamipon" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="{{url('product/details/'.$product->slug.'/'.$product->id)}}" target="_self" title="Fuzan sumamipon">{{Str::limit($product->product_name,10)}}</a></h4>
                                        <p class="price">
                                          @if(count($flashdealdetail) > 0)
                                             @foreach($flashdealdetail as $row)
                                                 @if($row->discount_type==1)
                                                 <span class="price-new">৳ {{$product->product_price -$row->discount}}</span> <span class="price-old">৳ {{$product->product_price}}</span>
                                                 @elseif($row->discount_type==2)
                                                   @php
                                                     $productdiscount = ($product->product_price * $row->discount) / 100;
                                                   @endphp
                                                   <span class="price-new">৳ {{$product->product_price -$productdiscount}}</span> <span class="price-old">৳ {{$product->product_price}}</span>
                                                 @endif
                                             @endforeach
                                           @else
                                             <span class="price-new">৳ {{$product->product_price}}</span>
                                           @endif
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
          @php
            $bottom_img=App\MobileBanner::where('section',2)->OrderBy('id','DESC')->limit(2)->inRandomOrder()->get();
          @endphp
          @foreach($bottom_img as $bottom)
            <div class="banner21">
                <a href="{{$bottom->link}}">
                    <img src="{{asset('public/uploads/sitebanner/mobile/'.$bottom->img)}}" alt="Image Client">
                </a>
            </div>
          @endforeach

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
</div>

@endsection
