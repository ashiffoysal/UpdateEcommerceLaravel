@extends('mobile.master')
@section('main_content')
<style>

.module.home1_deals {
    margin: 0;
}

.module.home1_deals .so-deal {
    margin: 10px 0 0;
}

.module.home1_deals h2.modtitle {
    float: left;
}

.module.home1_deals .product-item-container .left-block {
    position: relative;
}

.module.home1_deals .product-item-container .left-block:before {
    display: inline-block;
    content: '';
    background: rgba(34, 34, 34, 0.6);
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    border-radius: 3px;
    opacity: 0;
    visibility: hidden;
    z-index: 1;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}

.module.home1_deals .product-item-container:hover .left-block:before {
    opacity: 1;
    visibility: visible;
}

.module.home1_deals .cs-item-timer .Countdown-1 {
    float: right;
    padding: 5px 20px;
    position: relative;
}

.module.home1_deals .cs-item-timer .Countdown-1:before {
    content: "\f0e2";
    font-family: fontawesome;
    position: absolute;
    font-size: 14px;
    top: 4px;
    bottom: auto;
    color: #ff5561;
    left: 5px;
    right: auto;
}

.module.home1_deals .cs-item-timer .Countdown-1 .time-item {
    float: left;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    text-transform: capitalize;
    color: #ff5e00;
    margin-left: 5px;
}

.module.home1_deals .cs-item-timer .Countdown-1 .time-item .num-time {
    float: left;
    margin-right: 2px;
}

.module.home1_deals .cs-item-timer .Countdown-1 .time-item .name-time {
    float: left;
}

.module.home1_deals .item-time .item-timer {
    border: 1px dashed #df0024;
    font-weight: 600;
    height: 100%;
    line-height: 28px;
    display: inline-block;
    width: 100%;
}

.module.home1_deals .item-time .item-timer .time-item {
    float: left;
    font-size: 92.3%;
    color: #383838;
    text-transform: capitalize;
    font-weight: 700;
    position: relative;
    width: 25%;
    line-height: 28px;
    border: none;
}

.module.home1_deals .item-time .item-timer .time-item .num-time {
    display: block;
}

.module.home1_deals .item-time .item-timer .time-item .name-time {
    display: block;
}


    .head-title {
    border-top: 2px solid #ff5561;
    background: #fff;
    border-radius: 3px;
    display: inline-block;
    width: 100%;
}

.flash_deal_title {
    height: 17px;
    position: absolute;
    top: 5px;
    left: 9px;
    right: auto;
    bottom: auto;
    font-size: 16px;
    font-weight: 600;
    padding: 3px 7px;
    background: #ff5561;
    padding-bottom: 26px;
    border-radius: 5px;
    color: white;
}
</style>
<div class="container page-category">
    <div class="row">
        <aside class="col-xs-12 content-aside left_column sidebar-offcanvas">
            <span id="close-sidebar" class="btn btn-default"><i class="fa fa-times"></i></span>
            <div class="module ">
                <div class="modcontent ">
                    <form class="type_2">

                        <div class="table_layout filter-shopby">
                            <div class="table_row">
                                <!-- - - - - - - - - - - - - - Category filter - - - - - - - - - - - - - - - - -->
                                <div class="table_cell" style="z-index: 103;">
                                    <legend>Search</legend>
                                    <input class="form-control no-margin" type="text" value="" size="50"
                                        autocomplete="off" placeholder="Search" name="search">
                                </div>
                                <!--/ .table_cell -->
                                <!-- - - - - - - - - - - - - - End of category filter - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - SUB CATEGORY - - - - - - - - - - - - - - - - -->
                                <div class="table_cell">
                                    <fieldset>
                                        <legend>Sub Category</legend>
                                        <ul class="checkboxes_list">
                                            <li>
                                                <input type="checkbox" checked="" name="category" id="category_1">
                                                <label for="category_1">Smartphone &amp; Tablets</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="category" id="category_2">
                                                <label for="category_2">Electronics</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="category" id="category_3">
                                                <label for="category_3">Shoes</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="category" id="category_4">
                                                <label for="category_4">Watches</label>
                                            </li>

                                        </ul>

                                    </fieldset>

                                </div>
                                <!--/ .table_cell -->
                                <!-- - - - - - - - - - - - - - End SUB CATEGORY - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                                <div class="table_cell">
                                    <fieldset>
                                        <legend>Manufacturer</legend>
                                        <ul class="checkboxes_list">
                                            <li>
                                                <input type="checkbox" checked="" name="manufacturer"
                                                    id="manufacturer_1">
                                                <label for="manufacturer_1">Manufacturer 1</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="manufacturer" id="manufacturer_2">
                                                <label for="manufacturer_2">Manufacturer 2</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="manufacturer" id="manufacturer_3">
                                                <label for="manufacturer_3">Manufacturer 3</label>
                                            </li>

                                        </ul>

                                    </fieldset>

                                </div>
                                <!--/ .table_cell -->
                                <!-- - - - - - - - - - - - - - End manufacturer - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
                                <div class="table_cell">
                                    <fieldset>
                                        <legend>Price</legend>
                                        <div class="range">
                                            Range :
                                            <span class="min_val">$10.00</span> -
                                            <span class="max_val">$383.00</span>
                                            <input type="hidden" name="" class="min_value" value="10.00">
                                            <input type="hidden" name="" class="max_value" value="383.00">
                                        </div>
                                        <div id="slider"
                                            class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all"
                                                style="left: 0%;"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all"
                                                style="left: 65.4397%;"></span>
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"
                                                style="left: 0%; width: 65.4397%;"></div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!--/ .table_cell -->

                                <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

                                <div class="table_cell">

                                    <fieldset>

                                        <legend>Color</legend>

                                        <div class="row">

                                            <div class="col-sm-6">

                                                <ul class="simple_vertical_list">

                                                    <li>

                                                        <input type="checkbox" name="" id="color_btn_1">
                                                        <label for="color_btn_1" class="color_btn green">Green</label>

                                                    </li>

                                                    <li>

                                                        <input type="checkbox" name="" id="color_btn_2">
                                                        <label for="color_btn_2" class="color_btn yellow">Yellow</label>

                                                    </li>

                                                    <li>
                                                        <input type="checkbox" name="" id="color_btn_3">
                                                        <label for="color_btn_3" class="color_btn red">Red</label>

                                                    </li>

                                                </ul>

                                            </div>

                                            <div class="col-sm-6">

                                                <ul class="simple_vertical_list">

                                                    <li>
                                                        <input type="checkbox" name="" id="color_btn_4">
                                                        <label for="color_btn_4" class="color_btn blue">Blue</label>
                                                    </li>

                                                    <li>
                                                        <input type="checkbox" name="" id="color_btn_5">
                                                        <label for="color_btn_5" class="color_btn grey">Grey</label>
                                                    </li>

                                                    <li>
                                                        <input type="checkbox" name="" id="color_btn_6">
                                                        <label for="color_btn_6" class="color_btn orange">Orange</label>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </fieldset>

                                </div>
                                <!--/ .table_cell -->

                                <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

                            </div>
                            <!--/ .table_row -->
                            <footer class="bottom_box">
                                <div class="buttons_row">
                                    <button type="submit" class="button_grey button_submit">Search</button>
                                    <button type="reset" class="button_grey filter_reset">Reset</button>
                                </div>
                                <!--Back To Top-->
                                <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
                            </footer>
                        </div>
                        <!--/ .table_layout -->



                    </form>
                </div>
            </div>
        </aside>

        <div id="content" class="col-xs-12">
            <div class="sidebar-overlay"></div>

            <div class="products-category">



                <!--// Begin Select Category Simple -->
                <!-- Filters -->
                <div class="product-filter filters-panel clearfix">
                    <div class="col-xs-12 view-mode ">
                        <div class="module so-deals-1tr home1_deals so-deals">
                            <div class="head-title">
                                <span class="flash_deal_title">Today Deals</span>
                                <div class="cs-item-timer">
                                    <div class="Countdown-1">

                                    </div>
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
                        {{-- Count down will be go here --}}
                    </div>
                </div>
                <!-- //end Filters -->

                <!--Changed Listings-->
                <div class="products-list row nopadding-xs grid so-filter-gird">
                    @if ($flash_deal)
                    @foreach ($flash_deal_details as $flash_deal_detail)
                    <div class="product-layout col-xs-6">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container ">
                                    <a href="#" title="{{ $flash_deal_detail->product->product_name }}">
                                        <img src="{{ asset('public/uploads/products/thumbnail/'.$flash_deal_detail->product->thumbnail_img) }}" title="{{ $flash_deal_detail->product->product_name }}"
                                            class="img-responsive">
                                    </a>
                                </div>

                            </div>
                            <div class="box-label">
                                <!--Sale Label-->
                                <span class="label-product label-sale">
                                    -{{ $flash_deal_detail->discount }}{{ $flash_deal_detail->discount_type == 2 ? '%' : '৳' }}
                                </span>

                            </div>

                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="product.html">{{ Str::limit($flash_deal_detail->product->product_name, 40) }}</a></h4>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>
                                    <div class="description ">
                                        <p>rem ipsum dolor sit amet, consetetursadipscing elitr, sed diam no...</p>
                                    </div>
                                    <div class="price">
                                        <span class="price-new">
                                            @php
                                            $discountPrice = 0;
                                            @endphp
                                            @if($flash_deal_detail->discount_type == 1)
                                            @php
                                            $discountPrice = $flash_deal_detail->product->product_price - $flash_deal_detail->discount
                                            @endphp
                                            @else
                                             @php
                                            $discountPrice = $flash_deal_detail->product->product_price /100 * $flash_deal_detail->discount
                                            @endphp
                                            @endif
                                            ৳ {{ $discountPrice }}
                                        </span>
                                        <span class="price-old">
                                            ৳ {{ $flash_deal_detail->product->product_price }}
                                        </span>
                                    </div>
                                    <div class="button-group">
                                        <button class="addToCart font-sn" type="button" title="Add to Cart"
                                            onclick="cart.add('175', '1');"> <i
                                                class="fa fa-shopping-cart"></i><span><span>Add to
                                                    Cart</span></span></button>
                                        <button class="wishlist btn-button" type="button" title="Add to Wish List"
                                            onclick="wishlist.add('175');"><i class="fa fa-heart-o"></i></button>
                                        <button class="compare btn-button" type="button" title="Compare this Product"
                                            onclick="compare.add('175');"><i class="fa fa-retweet"></i></button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach

                    @else
                    <div class="product-layout col-xs-12">
                        <div class="product-item-container">
                            <h4 class="jumbotron text-center"><strong>There is no flash deal.</strong></h4>
                        </div>
                    </div>
                    @endif


                </div>
                <!--// End Changed listings-->

                <!-- Filters -->
                <div class="product-filter text-center clearfix filters-panel">
                    <div class="short-by-show text-center">
                        <div class="form-group" style="margin:0px">{!! $flash_deal_details->links() !!}</div>
                    </div>
                </div>
                <!-- //end Filters -->

                <!--End content-->
            </div>
        </div>
    </div>
</div>

@if ($flash_deal)
<script>
    $(function () {
        $(".Countdown-1").countdown("{{ $flash_deal->end_date }}", function (event) {
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
@endif

@endsection



