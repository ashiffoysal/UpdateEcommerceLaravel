@extends('layouts.websiteapp')
@section('main_content')
<div class="breadcrumbs">
    <div class="container">
       <div class="title-breadcrumb">
        Flash Deal Products
       </div>
       <ul class="breadcrumb-cate">
       <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
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
                      <div class="col-sm-2 view-mode hidden-sm hidden-xs">
                         <div class="list-view">
                            <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"
                               data-original-title="Grid"><i class="fa fa-th"></i></button>
                            <button class="btn btn-default list" data-view="list" data-toggle="tooltip"
                               data-original-title="List"><i class="fa fa-th-list"></i></button>
                         </div>
                      </div>

                      <div class="short-by-show form-inline text-right col-md-10 col-sm-12">
                         <div class="form-group short-by">
                            <label class="control-label" for="input-sort">Sort By:</label>
                            <select id="input-sort" class="form-control" onchange="location = this.value;">
                               <option value="" selected="selected">Default</option>
                               <option value="">Name (A - Z)</option>
                               <option value="">Name (Z - A)</option>
                               <option value="">Price (Low &gt; High)</option>
                               <option value="">Price (High &gt; Low)</option>
                               <option value="">Rating (Highest)</option>
                               <option value="">Rating (Lowest)</option>
                               <option value="">Model (A - Z)</option>
                               <option value="">Model (Z - A)</option>
                            </select>
                         </div>
                         <div class="form-group">
                            <label class="control-label" for="input-limit">Show:</label>
                            <select id="input-limit" class="form-control" onchange="location = this.value;">
                               <option value="" selected="selected">12</option>
                               <option value="">25</option>
                               <option value="">50</option>
                               <option value="">75</option>
                               <option value="">100</option>
                            </select>
                         </div>
                         <div class="form-group product-compare"><a id="compare-total"
                               class="btn btn-default">Product Compare (0)</a></div>
                      </div>

                   </div>
                </div>
                <div class="products-list grid row number-col-3 so-filter-gird">
                    @foreach ($flash_deal_details as $flash_deal_detail)
                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container  second_img  ">
                                <a href="{{url('/product/details/page/'.$flash_deal_detail->product->id)}}"  title="{{ $flash_deal_detail->product->product_name }}">
                                    <img src="{{asset('public/uploads/products/thumbnail/'.$flash_deal_detail->product->thumbnail_img)}} "
                                    alt="{{ $flash_deal_detail->product->product_name }}"
                                        title="{{ $flash_deal_detail->product->product_name }} "
                                        class="img-1 img-responsive">
                                    <img src="{{asset('public/uploads/products/thumbnail/'.$flash_deal_detail->product->thumbnail_img)}}"
                                        alt="{{ $flash_deal_detail->product->product_name }} "
                                        title="{{ $flash_deal_detail->product->product_name }}"
                                        height="200" width="200"
                                        class="img-2 img-responsive">
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
                                <h4><a href="{{url('/product/details/page/'.$flash_deal_detail->product->id)}}">
                                    {{ $flash_deal_detail->product->product_name }}
                                    </a></h4>
                                <div class="total-price">
                                    <div class="price price-left">
                                        <span class="price-new">
                                            @php
                                                $discountPrice = 0;
                                            @endphp
                                            @if ($flash_deal_detail->discount_type == 1)

                                                @php
                                                    $discountPrice = $flash_deal_detail->product->product_price - $flash_deal_detail->discount
                                                @endphp

                                                @else

                                                @php
                                                  $discountPrice = $flash_deal_detail->product->product_price /100 * $flash_deal_detail->discount
                                                @endphp

                                            @endif
                                            {{ $discountPrice }}
                                        </span> <span class="price-old">
                                            {{ $flash_deal_detail->product->product_price }}
                                        </span>
                                    </div>
                                    <div class="price-sale price-right px-2">
                                        <span class="discount px-2">-{{ $flash_deal_detail->discount }}{{ $flash_deal_detail->discount_type == 2 ? '%' : '৳' }}
                                            <strong>OFF</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="description item-desc hidden">
                                    <p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel
                                        resolution. Designed specifically for the creative professional, this display
                                        provides more space for easier access to all the.. </p>
                                </div>
                                <div class="list-block hidden">
                                    <button class="addToCart" type="button" data-toggle="tooltip" title=""
                                        onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add
                                            to Cart </span></button>
                                    <button class="wishlist btn-button" type="button" data-toggle="tooltip" title=""
                                        onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i
                                            class="fa fa-heart-o"></i></button>
                                    <button class="compare btn-button" type="button" data-toggle="tooltip" title=""
                                        onclick="compare.add('30 ');" data-original-title="Compare this Product "><i
                                            class="fa fa-retweet"></i></button>
                                </div>
                                </div>
                                <div class="button-group">
                                <a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe"
                                    href="{{url('/product/details/page/'.$flash_deal_detail->product->id)}}"> <i class="fa fa-search"></i> </a>
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title=""
                                    onclick="wishlist.add('105');" data-original-title="Add to Wish List"><i
                                        class="fa fa-heart-o"></i></button>
                                <button class="compare btn-button" type="button" data-toggle="tooltip" title=""
                                    onclick="compare.add('105');" data-original-title="Compare this Product"><i
                                        class="fa fa-retweet"></i></button>
                                <button class="addToCart btn-button" type="button" data-toggle="tooltip" title=""
                                    onclick="cart.add('105', '2');" data-original-title="Add to Cart"><span
                                        class="hidden">Add to Cart </span></button>
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
                   <div class="col-sm-6 text-right">Showing ({{ isset($_GET['page']) ? $_GET['page'] : 1 }} Pages)</div>
                </div>
             </div>

          </div>
       </div>

    </div>
 </div>
 @endsection
