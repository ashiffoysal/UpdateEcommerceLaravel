@extends('layouts.websiteapp')
@section('main_content')
<style>
    #product .radio-type-button .option-content-box :hover {
    background: #ff5e00;
    border-color: #ff5e00;
    color: white;
    padding: 5px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Main Container  -->
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
<div class="breadcrumbs">
    <div class="container">
        <div class="title-breadcrumb">
            Canada Travel One or Two European Facials at Studio
        </div>
        <ul class="breadcrumb-cate">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="#">One or Two European Facials at Studio</a></li>
        </ul>
    </div>
</div>

<div class="container product-detail">
    <div class="row">
        

    @include('frontend.include.product.sidemenu')
        <div id="content" class="col-md-9 col-sm-12 col-xs-12">
            <a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>Sidebar</a>
            <div class="sidebar-overlay "></div>










          <form id="option-choice-form">
                <div class="product-view product-detail">
                    <div class="product-view-inner clearfix">
                        <div class="content-product-left  col-md-5 col-sm-6 col-xs-12">
                            <div class="so-loadeding"></div>
                            <div class="large-image  class-honizol">
                                <div class="box-label">
                                    <span class="label-product label-sale">
                                        -30%
                                    </span>
                                </div>
                                <img class="product-image-zoom" src="{{asset('public/uploads/products/thumbnail/productdetails/'.$productdetails->thumbnail_img)}}" data-zoom-image="{{asset('public/uploads/products/thumbnail/productdetails/'.$productdetails->thumbnail_img)}}" title="Canada Travel One or Two European Facials at  Studio" alt="Canada Travel One or Two European Facials at  Studio">
                            </div>
                            <div id="thumb-slider" class="full_slider category-slider-inner products-list yt-content-slider" data-rtl="no" data-autoplay="no" data-pagination="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="3" data-items_column1="3" data-items_column2="3" data-items_column3="3" data-items_column4="2" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                @foreach (json_decode($productdetails->photos) as $key => $photo)
                                <div class="owl2-item ">
                                    <div class="image-additional">
                                        <a data-index="0" class="img thumbnail" data-image="{{url('storage/app/public/'.$photo) }}" title="Canada Travel One or Two European Facials at  Studio">
                                            <img src="{{url('storage/app/public/'.$photo) }}" title="Canada Travel One or Two European Facials at  Studio" alt="Canada Travel One or Two European Facials at  Studio">
                                        </a>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="content-product-right col-md-7 col-sm-6 col-xs-12">
                            <div class="countdown_box">
                                <div class="countdown_inner">
                                    <div class="Countdown-1">
                                    </div>
                                </div>
                            </div>
                            <div class="title-product">
                                <h1>{{$productdetails->product_name}}</h1>
                            </div>
                            <div class="box-review">
                                <div class="rating">
                                    <div class="rating-box">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    </div>
                                </div>
                                <a class="reviews_button" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a> / <a class="write_review_button" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
                            </div>
                            <div class="product_page_price price" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                <span class="price-new"><span id="chosen_price""> ‎৳ {{$productdetails->product_price}}</span></span>


                                <span class="price-old" id="price-old">‎৳ {{$productdetails->product_price}}</span>
                                <!--    <div class="price-tax"><span>Ex Tax:</span> $70.00</div> -->
                            </div>
                            <div class="product-box-desc">
                                <div class="inner-box-desc">
                                    <div class="brand"><span>Brand: </span><a href="#">{{$productdetails->brand}}</a></div>
                                    <div class="model"><span>Product Code: </span>{{$productdetails-> product_sku}}</div>
                                    <div class="stock"><span>Availability:</span>
                                        @if($productdetails->product_qty > 0)
                                        <i class="fa fa-check-square-o"></i>In Stock({{$productdetails->product_qty}})
                                        @else
                                        <i class="fa fa-check-square-o"></i>Not Avaliable
                                        @endif
                                    </div>
                                    @if($productdetails->product_type==1)
                                    <!--variation start-->








                                        <div class="col-md-12">
                                        <div id="product">
                                        <div class="form-group required " style="display: block; margin-left:17px">
                                            <span>Color:</span>
                                            <input type="hidden" name="id" value="{{$productdetails->id}}">
                                            @if (count(json_decode($productdetails->colors)) > 0)
                                            @foreach (json_decode($productdetails->colors) as $key => $color)



                                            <div class="radio  radio-type-button">
												<label>
													<input type="radio" id="{{ $productdetails->id }}-color-{{ $key }}" name="color" value="{{ $color }}" @if($key==0) checked @endif>
													<span class="option-content-box active" data-title="M +$12.00" data-toggle="tooltip" data-original-title="" title="" style="background:{{ $color }};">
														<span class="option-name"> </span>
													</span>
												</label>
                                            </div>


                                            @endforeach
                                            @endif
                                        </div>
                                        </div>

                                        @foreach (json_decode($productdetails->choice_options) as $key => $choice)

                                        <div class="col-md-12">
                                        <div id="product">




									<div class="form-group required " style="display: block;">
										<label class="control-label">{{ $choice->title }}:</label>
										<div id="input-option224">

                                        @foreach ($choice->options as $key => $option)
											<div class="radio  radio-type-button">
												<label>
													<input type="radio" id="{{ $choice->name }}-{{ $option }}" name="{{ $choice->name }}" value="{{ $option }}" @if($key==0) checked @endif>
													<span class="option-content-box active" data-title="M +$12.00" data-toggle="tooltip" data-original-title="" title="" style="background: none;">
														<span class="option-name">{{ $option }} </span>
													</span>
												</label>
                                            </div>

                                        @endforeach

										</div>
									</div>

                                </div>



                                        </div>
                                        @endforeach
                                    </div>

                                    <!-- variation end -->
                                    @else

                                    @endif

                                </div>
                            </div>



















                            <div class="short_description form-group">
                                <h3>OverView</h3>
                            </div>
                            <div id="product">
                                <div class="box-cart clearfix">
                                    <div class="form-group box-info-product">
                                        <div class="option quantity">
                                            <div class="input-group quantity-control" unselectable="on" style="user-select: none;">
                                                <input class="form-control" type="number" id="quantity" name="quantity" value="1">
                                                <input type="hidden" name="product_id" value="{{$productdetails->id}}">
                                                <span class="input-group-addon product_quantity_down fa fa-caret-down"></span>
                                                <span class="input-group-addon product_quantity_up fa fa-caret-up"></span>
                                            </div>
                                        </div>
                                        <div class="cart">
                                        <div class="product_page_price price" id="chosen_price_div">
                                            <input type="hidden" id="product_chosen_price" value="{{$productdetails->product_price}}" name="product_price">
                                            <input type="button" id="addtocart" value="Add to Cart" class="addToCart btn btn-mega btn-lg " data-toggle="tooltip" title="" onclick="cart.add('30');" data-original-title="Add to cart" id="addtocart">
                                        </div>









                                        </div>
                                        <div class="add-to-links wish_comp">
                                            <ul class="blank">
                                                <li class="wishlist">
                                                    <a onclick="wishlist.add(108);"><i class="fa fa-heart"></i></a>
                                                </li>
                                                <li class="compare">
                                                    <a onclick="compare.add(108);"><i class="fa fa-random"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>

</form>


            <div class="product-attribute module">
                <div class="row content-product-midde clearfix">
                    <div class="col-xs-12">
                        <div class="producttab ">
                            <div class="tabsslider  ">
                                <ul class="nav nav-tabs font-sn">
                                    <li class="active"><a data-toggle="tab" href="#tab-description">Description</a></li>
                                    <li><a href="#tab-review" data-toggle="tab">Review (0)</a></li>
                                    <li><a href="#tab-tags" data-toggle="tab">Tags</a></li>
                                    <li><a href="#tab-ctab" data-toggle="tab">Custom tab</a></li>
                                </ul>
                                <div class="tab-content ">
                                    <div class="tab-pane active" id="tab-description">
                                        <div>
                                            <p>{!! $productdetails->product_description !!}</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-review">
                                        <form class="form-horizontal" id="form-review">
                                            <div id="review">
                                                <p>There are no reviews for this product.</p>
                                            </div>
                                            <h2>Write a review</h2>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label class="control-label" for="input-name">Your Name</label>
                                                    <input type="text" name="name" value="" id="input-name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label class="control-label" for="input-review">Your Review</label>
                                                    <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                                    <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label class="control-label">Rating</label>
                                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                    <input type="radio" name="rating" value="1">
                                                    &nbsp;
                                                    <input type="radio" name="rating" value="2">
                                                    &nbsp;
                                                    <input type="radio" name="rating" value="3">
                                                    &nbsp;
                                                    <input type="radio" name="rating" value="4">
                                                    &nbsp;
                                                    <input type="radio" name="rating" value="5">
                                                    &nbsp;Good
                                                </div>
                                            </div>
                                            <div class="buttons clearfix" style="visibility: hidden; display: block;">
                                                <div class="pull-right">
                                                    <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab-tags">

                                        <a href="#">{{$productdetails->meta_tag}}</a>


                                    </div>
                                    <div class="tab-pane" id="tab-ctab">
                                        <p>Lorem ipsum dolor sit amet, consetetur
                                            sadipscing elitr, sed diam nonumy eirmod
                                            tempor invidunt ut labore et dolore
                                            magna aliquyam erat, sed diam voluptua.
                                            At vero eos et accusam et justo duo
                                            dolores et ea rebum. Stet clita kasd
                                            gubergren, no sea takimata sanctus est
                                            Lorem ipsum dolor sit amet. Lorem ipsum
                                            dolor sit amet, consetetur sadipscing
                                            elitr, sed diam nonumy eirmod tempor
                                            invidunt ut labore et dolore magna aliquyam
                                            erat, sed diam voluptua. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-product-bottom bottom-product clearfix">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#product-related">Related Products</a></li>
                    <!-- <li><a data-toggle="tab" href="#product-upsell">UPSELL PRODUCTS</a></li> -->
                </ul>
                <div class="tab-content">
                    <div id="product-related" class="tab-pane fade in active">
                        <div class="clearfix module horizontal">
                            <div class="products-category">
                                <div class="category-slider-inner products-list yt-content-slider releate-products grid" data-rtl="no" data-autoplay="no" data-pagination="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="3" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                    @php
                                    $procate_id=$productdetails->cate_id;
                                    $related_pro=App\Product::where('cate_id',$procate_id)->orderBy('id','DESC')->limit(6)->get();
                                    @endphp
                                    @foreach($related_pro as $products)
                                    <div class="product-layout">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container">
                                                    <a href="{{url('/product/details/page/'.$products->id)}}" title="Portable  Compact Charger (External Battery) t45 ">
                                                        <img src="{{asset('public/uploads/products/thumbnail/productdetails/'.$products->thumbnail_img)}}" alt="Portable  Compact Charger (External Battery) t45" title="Portable  Compact Charger (External Battery) t45 " class="img-1 img-responsive">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-label">
                                                <!-- <span class="label-product label-sale">
                                                    -40%
                                                </span> -->
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    
                                                    <h4><a href="{{url('/product/details/page/'.$products->id)}}">{{Str::limit($products->product_name,40)}}</a></h4>
                                                    
                                                    <div class="total-price clearfix" style="visibility: hidden; display: block;">
                                                        <div class="price price-left">
                                                            <span class="price-new">{{$products->product_price}}</span>
                                                            <span class="price-old">$122.00</span>
                                                            
                                                        </div>
                                                        <div class="price-sale price-right">
                                                            @php
                                                                $flashdealdetail =App\FlashDealDetail::where('product_id', $products->id)->get();
                                                            @endphp
                                                            @foreach($flashdealdetail as $row)
                                                            @if($row ->discount_type == 1 )
                                                            <span class="discount">
                                                                    -{{$row->discount}}%
                                                                
                                                                <strong>OFF</strong>
                                                                
                                                            </span>
                                                            @else
                                                            <span class="discount">
                                                                    - ${{$row->discount}}
                                                                
                                                                <strong>OFF</strong>
                                                                
                                                            </span>
                                                            @endif
                                                            
                                                            @endforeach
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="description hidden">
                                                    
                                                        <p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the.. </p>
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    <div class="button-inner so-quickview">
                                                        <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview "> <i class="fa fa-search"></i> </a>
                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('78');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('78');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>


                                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('78', '2');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>

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
                    <div id="product-upsell" class="tab-pane fade in">
                        <div class="clearfix module horizontal">
                            <div class="products-category">
                                <div class="category-slider-inner products-list yt-content-slider releate-products grid" releate-products products-list grid contentslider" data-rtl="no" data-autoplay="no" data-pagination="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="3" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                    <div class="product-layout">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container">
                                                    <a href="#" title="Portable  Compact Charger (External Battery) t45 ">
                                                        <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/4.jpg " alt="Portable  Compact Charger (External Battery) t45" title="Portable  Compact Charger (External Battery) t45 " class="img-1 img-responsive">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-label">
                                                <span class="label-product label-sale">
                                                    -40%
                                                </span>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <h4><a href="#">Portable Compact Charger (External Battery) t45 </a></h4>
                                                    <div class="total-price clearfix" style="visibility: hidden; display: block;">
                                                        <div class="price price-left">
                                                            <span class="price-new">$74.00</span>
                                                            <span class="price-old">$122.00</span>
                                                        </div>
                                                        <div class="price-sale price-right">
                                                            <span class="discount">
                                                                -40%
                                                                <strong>OFF</strong>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="description hidden">
                                                        <p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the.. </p>
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    <div class="button-inner so-quickview">
                                                        <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview "> <i class="fa fa-search"></i> </a>
                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('78');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('78');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
                                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('78', '2');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-layout">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container">
                                                    <a href="#" title="Portable  Compact Charger (External Battery) t45 ">
                                                        <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/28.jpg " alt="Portable  Compact Charger (External Battery) t45" title="Portable  Compact Charger (External Battery) t45 " class="img-1 img-responsive">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-label">
                                                <span class="label-product label-sale">
                                                    -40%
                                                </span>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <h4><a href="#">Portable Compact Charger (External Battery) t45 </a></h4>
                                                    <div class="total-price clearfix" style="visibility: hidden; display: block;">
                                                        <div class="price price-left">
                                                            <span class="price-new">$74.00</span>
                                                            <span class="price-old">$122.00</span>
                                                        </div>
                                                        <div class="price-sale price-right">
                                                            <span class="discount">
                                                                -40%
                                                                <strong>OFF</strong>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="description hidden">
                                                        <p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the.. </p>
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    <div class="button-inner so-quickview">
                                                        <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview "> <i class="fa fa-search"></i> </a>
                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('78');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('78');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
                                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('78', '2');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-layout">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container">
                                                    <a href="#" title="Portable  Compact Charger (External Battery) t45 ">
                                                        <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/11.jpg " alt="Portable  Compact Charger (External Battery) t45" title="Portable  Compact Charger (External Battery) t45 " class="img-1 img-responsive">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-label">
                                                <span class="label-product label-sale">
                                                    -40%
                                                </span>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <h4><a href="#">Portable Compact Charger (External Battery) t45 </a></h4>
                                                    <div class="total-price clearfix" style="visibility: hidden; display: block;">
                                                        <div class="price price-left">
                                                            <span class="price-new">$74.00</span>
                                                            <span class="price-old">$122.00</span>
                                                        </div>
                                                        <div class="price-sale price-right">
                                                            <span class="discount">
                                                                -40%
                                                                <strong>OFF</strong>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="description hidden">
                                                        <p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the.. </p>
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    <div class="button-inner so-quickview">
                                                        <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview "> <i class="fa fa-search"></i> </a>
                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('78');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('78');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
                                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('78', '2');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
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
            </div>
        </div>
    </div>
</div>
</div>

<!-- //Main Container -->
<script>
    $(document).ready(function() {
        $('#option-choice-form input').on('change', function() {
            getVariantPrice();
        });
    });

    function getVariantPrice() {
        //alert("success");
        if ($('#option-choice-form input[id=quantity]').val() > 0) {

            $.ajax({
                type: "GET",
                url: '{{ route('products.variant_price')}}',
                data: $('#option-choice-form').serializeArray(),
                success: function(data) {

                    //console.log(data.price);
                    // $('#option-choice-form #chosen_price_div').removeClass('d-none');
                    // $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                    $('#chosen_price').html('৳ ' +data.price);
                    $('#product_chosen_price').val(data.price);
                    // $('#available-quantity').html(data.quantity);
                }
            });
        }
    }
</script>



<!-- add to cart area start -->




<script>

$(document).ready(function() {
$('#addtocart').on('click', function(){


$.ajax({
type:'GET',
url:"{{ route('product.add.cart') }}",
data: $('#option-choice-form').serializeArray(),
success: function (data) {
    console.log(data);
    document.getElementById('cartdatacount').innerHTML =data.quantity;
    document.getElementById('product_price').innerHTML =data.total;

}
});


});
});
</script>




@endsection
