<!-- Begin Bar Nav -->
@extends('mobile.extra_master')
@section('page_content')
<header class="bar bar-nav ">
<a class="btn btn-link btn-nav pull-left" href="{{ url('/') }}">
        <span class="icon icon-left-nav"></span>
    </a>
    <a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
        <span class="icon icon-bars"></span>
    </a>
    <h1 class="title">Showin Search Result</h1>
</header>
<!-- //End Bar Nav -->

<div class="content">
    <!-- //Begin Main Content -->
    <div class="container page-category">
        <div class="row">

            <div id="content" class="col-xs-12">
                <div class="sidebar-overlay"></div>
                <div class="products-category">
                    <!--// Begin Select Category Simple -->

                    <!-- Filters -->
                    <div class="product-filter filters-panel clearfix">
                        <div class="col-xs-4 no-gutters view-mode ">
                            <div class="list-view">
                                <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"
                                    data-original-title="Grid"><i class="fa fa-th"></i></button>
                                <button class="btn btn-default list" data-view="list" data-toggle="tooltip"
                                    data-original-title="List"><i class="fa fa-th-list"></i></button>
                            </div>
                        </div>

                        <div class="col-xs-8 no-gutters">
                            <div style="margin-top:7px;">
                                <i class="fa fa-search"></i><span>Search result has been shown below</span>
                            </div>
                        </div>

                        {{-- <div class="short-by-show col-xs-4">
                            <div class="form-group short-by">
                                <i class="fa fa-sort-amount-asc"></i>
                                <select id="input-sort" class="form-control" onchange="location = this.value;">
                                    <option
                                        value="http://opencart.opencartworks.com/themes/so_revo/index.html?route=product/category&amp;path=20&amp;sort=p.sort_order&amp;order=ASC"
                                        selected="selected">Default</option>
                                    <option
                                        value="http://opencart.opencartworks.com/themes/so_revo/index.html?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=ASC">
                                        Name (A - Z)</option>
                                    <option
                                        value="http://opencart.opencartworks.com/themes/so_revo/index.html?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=DESC">
                                        Name (Z - A)</option>
                                    <option
                                        value="http://opencart.opencartworks.com/themes/so_revo/index.html?route=product/category&amp;path=20&amp;sort=p.price&amp;order=ASC">
                                        Price (Low &gt; High)</option>
                                    <option
                                        value="http://opencart.opencartworks.com/themes/so_revo/index.html?route=product/category&amp;path=20&amp;sort=p.price&amp;order=DESC">
                                        Price (High &gt; Low)</option>
                                    <option
                                        value="http://opencart.opencartworks.com/themes/so_revo/index.html?route=product/category&amp;path=20&amp;sort=rating&amp;order=DESC">
                                        Rating (Highest)</option>
                                    <option
                                        value="http://opencart.opencartworks.com/themes/so_revo/index.html?route=product/category&amp;path=20&amp;sort=rating&amp;order=ASC">
                                        Rating (Lowest)</option>
                                    <option
                                        value="http://opencart.opencartworks.com/themes/so_revo/index.html?route=product/category&amp;path=20&amp;sort=p.model&amp;order=ASC">
                                        Model (A - Z)</option>
                                    <option
                                        value="http://opencart.opencartworks.com/themes/so_revo/index.html?route=product/category&amp;path=20&amp;sort=p.model&amp;order=DESC">
                                        Model (Z - A)</option>
                                </select>
                            </div>
                        </div> --}}
                    </div>
                    <!-- //end Filters -->
                    @if ($products)
                    <!--Changed Listings-->
                    <div class="products-list row nopadding-xs grid so-filter-gird">

                            @foreach ($products as $product)
                            @php
                            $productInFlashDeal = App\FlashDealDetail::where('product_id', $product->id)
                                                    ->where('status',1)
                                                    ->first();
                            @endphp
                            <div class="product-layout col-xs-6">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container ">
                                            <a href="#" title="amper modi dolores">
                                                <img src="{{ asset('public/uploads/products/thumbnail/mobile/'.$product->thumbnail_img) }}"
                                                    title="{{ $product->product_name }}" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    @if ($productInFlashDeal)
                                    <div class="box-label">
                                        <!--Sale Label-->
                                        <span class="label-product label-sale">
                                            -{{ $productInFlashDeal->discount }}{{ $productInFlashDeal->discount_type == 2 ? '%' : '৳' }}
                                        </span>
                                    </div>
                                    @endif

                                    <div class="right-block">
                                        <div class="caption">
                                            <h4><a
                                                    href="{{ url('product/details/'.$product->slug.'/'.$product->id) }}">{{ $product->product_name }}</a>
                                            </h4>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                </div>
                                            </div>
                                            <div class="description ">
                                                <p>{{ $product->product_description }}</p>
                                            </div>
                                            <div class="price">
                                                @if ($productInFlashDeal)
                                                <span class="price-new">
                                                    @php
                                                    $discountPrice = 0;
                                                    @endphp
                                                    @if($productInFlashDeal->discount_type == 1)
                                                        @php
                                                        $discountPrice = $product->product_price - $productInFlashDeal->discount;
                                                        @endphp
                                                    @else
                                                        @php
                                                        $discountPrice = $product->product_price /100 * $productInFlashDeal->discount;
                                                        @endphp
                                                    @endif
                                                    ৳ {{ $discountPrice }}
                                                </span>
                                                <span class="price-old">
                                                    ৳ {{ $product->product_price }}
                                                </span>
                                                @else
                                                <span class="price-new">
                                                    ৳ {{ $product->product_price }}
                                                </span>
                                                @endif
                                            </div>
                                            <div class="button-group">
                                                <button class="addToCart font-sn" type="button" title="Add to Cart"
                                                    onclick="cart.add('175', '1');"> <i
                                                        class="fa fa-shopping-cart"></i><span><span>Add to
                                                            Cart</span></span></button>
                                                <button class="wishlist btn-button" type="button" title="Add to Wish List"
                                                    onclick="wishlist.add('175');"><i class="fa fa-heart-o"></i></button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('175');"><i
                                                        class="fa fa-retweet"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>

                    @endif
                    @if ($products->count() == 0)
                    <div class="col-xs-12 text-center">
                        <h4>No result found.</h4>
                    </div>
                    @endif

                    <!--// End Changed listings-->
                    <!--End content-->
                </div>
            </div>
        </div>
    </div>
    <!-- //End Main Content -->
</div>

@endsection
