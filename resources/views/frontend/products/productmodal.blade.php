<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic page needs
		============================================ -->
		<title>TopDeal</title>
		<meta charset="utf-8">
		<meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
		<meta name="description" content="SuperMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
		<meta name="author" content="Magentech">
		<meta name="robots" content="index, follow" />
		<!-- Mobile specific metas
		============================================ -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png" />
		<!-- Libs CSS
		============================================ -->
		<link rel="stylesheet" href="{{asset('public/frontend')}}/css/bootstrap/css/bootstrap.min.css">
		<link href="{{asset('public/frontend')}}/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/js/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/themecss/lib.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/js/minicolors/miniColors.css" rel="stylesheet">
		<!-- Theme CSS
		============================================ -->
		<link href="{{asset('public/frontend')}}/css/themecss/so_searchpro.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/themecss/so_megamenu.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/themecss/so-categories.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/themecss/so-listing-tabs.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/themecss/so-category-slider.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/themecss/so-newletter-popup.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/footer/footer1.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/header/header1.css" rel="stylesheet">
		<link id="color_scheme" href="{{asset('public/frontend')}}/css/theme.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/responsive.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/quickview/quickview.css" rel="stylesheet">
		<!-- Google web fonts
		============================================ -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" type="text/css">
		<style type="text/css">
		body {
		font-family: Roboto, sans-serif;
		}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>
	<body class="loaded page-quickview">
		<div id="wrapper">
			<!-- Main Container -->
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
                                        <a data-index="0" class="img thumbnail" data-image="{{url('storage/app/'.$photo) }}" title="Canada Travel One or Two European Facials at  Studio">
                                            <img src="{{url('storage/app/'.$photo) }}" title="Canada Travel One or Two European Facials at  Studio" alt="Canada Travel One or Two European Facials at  Studio">
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
                                            <input type="button" id="addtocart" value="Add to Cart" class="addToCart btn btn-mega btn-lg" data-toggle="tooltip" title="" onclick="cart.add('30');modeladdtocart(this);" data-original-title="Add to cart" id="addtocart">
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
			<!-- //Main Container -->
		</div>
		<!-- End Color Scheme
		============================================ -->
		<!-- Include Libs & Plugins
		============================================ -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/themejs/so_megamenu.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/owl-carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/slick-slider/slick.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/themejs/libs.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/unveil/jquery.unveil.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/countdown/jquery.countdown.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/datetimepicker/moment.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery-ui/jquery-ui.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/modernizr/modernizr-2.6.2.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/minicolors/jquery.miniColors.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.nav.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/quickview/jquery.magnific-popup.min.js"></script>
		<!-- Theme files
		============================================ -->
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/themejs/application.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/themejs/homepage.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/themejs/custom_h1.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/themejs/addtocart.js"></script>
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
                    $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                    // $('#available-quantity').html(data.quantity);
                }
            });
        }
    }
</script>


<script>

function modeladdtocart(){
    


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



}
</script>
	</body>
</html>