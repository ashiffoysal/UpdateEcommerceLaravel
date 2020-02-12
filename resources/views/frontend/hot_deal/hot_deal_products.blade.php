@extends('layouts.websiteapp') @section('main_content')
<div class="search-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-content">
                    <div class="row" id="search_result_product"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="main_content">
    <div class="breadcrumbs">
        <div class="container">
            <div class="title-breadcrumb">
                Flash Deal Products
            </div>
            <ul class="breadcrumb-cate">
                <li>
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i></a>
                </li>
                <li><a href="">Flash Deal Products</a></li>
            </ul>
        </div>
    </div>

    <div class="container product-detail">
        <div class="row">
            <div id="content" class="col-md-12 col-sm-12 col-xs-12">
                <div class="products-category">
                    <div class="products-category">
                        <div class="product-filter filters-panel">
                            <div class="row">
                                <div class="module so-deals-1tr home1_deals so-deals">
                                    <div class="head-title">
                                        <span class="flash_deal_title">Today Deals</span>
                                        <div class="cs-item-timer">
                                            <div class="Countdown-1"></div>
                                        </div>
                                    </div>
                                    <div class="modcontent">
                                        <div
                                            class="so-deal modcontent products-list grid clearfix clearfix preset00-3 preset01-3 preset02-2 preset03-2 preset04-1  button-type1  style2">
                                            <div class="category-slider-inner products-list yt-content-slider"
                                                data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4"
                                                data-speed="0.6" data-margin="30" data-items_column00="4"
                                                data-items_column0="4" data-items_column1="4" data-items_column2="2"
                                                data-items_column3="2" data-items_column4="1" data-arrows="no"
                                                data-pagination="no" data-lazyload="yes" data-loop="yes"
                                                data-hoverpause="yes"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products-list grid row number-col-3 so-filter-gird">
                            @foreach ($flash_deal_details as $flash_deal_detail)
                            <div class="product-layout col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container  second_img  ">
                                            <a href="{{url('/product/details/page/'.$flash_deal_detail->product->id)}}"
                                                title="{{ $flash_deal_detail->product->product_name }}">
                                                <img src="{{asset('public/uploads/products/thumbnail/'.$flash_deal_detail->product->thumbnail_img)}} "
                                                    alt="{{ $flash_deal_detail->product->product_name }}"
                                                    title="{{ $flash_deal_detail->product->product_name }} "
                                                    class="img-1 img-responsive" />
                                                <img src="{{asset('public/uploads/products/thumbnail/'.$flash_deal_detail->product->thumbnail_img)}}"
                                                    alt="{{ $flash_deal_detail->product->product_name }} "
                                                    title="{{ $flash_deal_detail->product->product_name }}" height="200"
                                                    width="200" class="img-2 img-responsive" />
                                            </a>
                                        </div>

                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                Sale
                                            </span>
                                        </div>
                                    </div>

                                    <div class="right-block">
                                        <div class="caption">
                                            <h4>
                                                <a
                                                    href="{{url('/product/details/page/'.$flash_deal_detail->product->id)}}">
                                                    {{ Str::limit($flash_deal_detail->product->product_name, 40) }}
                                                </a>
                                            </h4>
                                            <div class="total-price">
                                                <div class="price price-left">
                                                    <span class="price-new">
                                                        @php $discountPrice = 0; @endphp @if($flash_deal_detail->discount_type == 1) @php
                                                        $discountPrice =
                                                        $flash_deal_detail->product->product_price -
                                                        $flash_deal_detail->discount @endphp @else @php
                                                        $discountPrice =
                                                        $flash_deal_detail->product->product_price /100 *
                                                        $flash_deal_detail->discount @endphp @endif
                                                       ৳ {{ $discountPrice }}
                                                    </span>
                                                    <span class="price-old">
                                                        ৳ {{ $flash_deal_detail->product->product_price }}
                                                    </span>
                                                </div>
                                                <div class="price-sale price-right px-2">
                                                    <span class="discount px-2">-{{ $flash_deal_detail->discount }}{{ $flash_deal_detail->discount_type == 2 ? '%' : '৳' }}
                                                        <strong>OFF</strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="description item-desc hidden">
                                                <p>
                                                    The 30-inch Apple Cinema HD Display delivers an
                                                    amazing 2560 x 1600 pixel resolution. Designed
                                                    specifically for the creative professional, this
                                                    display provides more space for easier access to all
                                                    the..
                                                </p>
                                            </div>
                                            <div class="list-block hidden">
                                                <button class="addToCart" type="button" data-toggle="tooltip" title=""
                                                    onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart ">
                                                    <span>Add to Cart </span>
                                                </button>
                                                <button class="wishlist btn-button" type="button" data-toggle="tooltip"
                                                    title="" onclick="wishlist.add('30 ');"
                                                    data-original-title="Add to Wish List ">
                                                    <i class="fa fa-heart-o"></i>
                                                </button>
                                                <button class="compare btn-button" type="button" data-toggle="tooltip"
                                                    title="" onclick="compare.add('30 ');"
                                                    data-original-title="Compare this Product ">
                                                    <i class="fa fa-retweet"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="button-group">
                                            <a class="quickview iframe-link visible-lg btn-button"
                                                data-fancybox-type="iframe"
                                                href="{{url('/product/details/page/'.$flash_deal_detail->product->id)}}">
                                                <i class="fa fa-search"></i>
                                            </a>
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip"
                                                title="" onclick="wishlist.add('105');"
                                                data-original-title="Add to Wish List">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button class="compare btn-button" type="button" data-toggle="tooltip"
                                                title="" onclick="compare.add('105');"
                                                data-original-title="Compare this Product">
                                                <i class="fa fa-retweet"></i>
                                            </button>
                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip"
                                                title="" onclick="cart.add('105', '2');"
                                                data-original-title="Add to Cart">
                                                <span class="hidden">Add to Cart </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="product-filter product-filter-bottom filters-panel">
                            <div class="col-sm-6 text-left">
                                {!! $flash_deal_details->links() !!}
                            </div>
                            <div class="col-sm-6 text-right">
                                Showing ({{ isset($_GET["page"]) ? $_GET["page"] : 1 }} Pages)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        $(".Countdown-1").countdown("{{ $flash_deal_end_date }}", function (event) {
            $(this).html(
                event.strftime(
                    "" +
                    '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time"> D </div></div>' +
                    '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">H</div></div>' +
                    '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">M</div></div>' +
                    '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">S</div></div>'
                )
            );
        });
    });

</script>
@endsection
