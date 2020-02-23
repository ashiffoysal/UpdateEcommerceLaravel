@extends('mobile.extra_master')
@section('page_content')
<style type="text/css">
	.checkbox-alphanumeric input:checked~label {
		transform: scale(1.1);
		border: 1px solid red;
	}
</style>
			<!-- Begin Bar Nav -->
			<header class="bar bar-nav ">
	<a class="btn btn-link btn-nav pull-left" href="{{ URL::previous() }}">
		<span class="icon icon-left-nav"></span>
	</a>
	<a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
		<span class="icon icon-bars"></span>
	</a>
	<h1 class="title">Product Details</h1>
</header>
<!-- //End Bar Nav -->

<div class="content">
	<!-- //Begin Main Content -->
	<div class="container product-detail">
		<div class="row">
			<div id="content" class="col-xs-12">
				<div class="product-view product-info">
					<div class="content-product-left ">









						<div class="slider-for">

							@foreach (json_decode($productdetails->photos) as $key => $photo)
							<div class="contentslider--item ">
								<a class="thumbnail" title="{{$productdetails->product_name}}" tabindex="-1">
									<img src="{{url('storage/app/public/'.$photo) }}" title="{{$productdetails->product_name}}" alt="{{$productdetails->product_name}}">
								</a>
							</div>
							@endforeach

						</div>













						<div class="slider-nav ">

							@foreach (json_decode($productdetails->photos) as $key => $photo)
							<div class="contentslider--item ">
								<a class="thumbnail" title="{{$productdetails->product_name}}" tabindex="-1">
									<img src="{{url('storage/app/public/'.$photo) }}" title="{{$productdetails->product_name}}" alt="{{$productdetails->product_name}}">
								</a>
							</div>
							@endforeach

						</div>














						<div class="box-label">
							<!--Sale Label-->
							<span class="label-product label-sale font-ct"> -28% </span>
							<div class="product-stock">
								<div class="stock"><span> Stock </span> <i class="fa fa-check-square-o"></i> 566</div>
							</div>
						</div>
					</div>















					<form id="option-choice-form">
						<div class="content-product-right">
							<div class="content-info">
								<div class="title-product hidden">
									<h1>{{$productdetails->product_name}}</h1>
								</div>
								
								<div class="model font-ct"><span>Product Code:</span> <span class="font-ct">{{$productdetails->product_sku}}</span>
								</div>
								<hr>
								
								<h5 style="line-height: 150%;">{{$productdetails->product_name}}</h5>
								
								
								
								<!-- Review ---->
								@php
									$rcount=App\ProductReview::where('product_id',$productdetails->id)->count();
								@endphp
								@if($rcount)
									@php
										$sumofreview =App\ProductReview::where('product_id',$productdetails->id)->sum('review');
									$rating=$sumofreview/$rcount;
									@endphp
								<div class="box-review">


									<div class="ratings">
										<div class="rating-box">
										@if($rating == 1)
											<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										@elseif($rating < 2)
										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										@elseif($rating < 3)
										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										@elseif($rating < 4)
										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										@elseif($rating < 5)
										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										@elseif($rating == 5)
										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
										@elseif($rating == 0)
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										@endif
										</div>
									</div>

									@endif


									<a class="reviews_button hidden" href="#" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a>
								</div>


								<div class="product-label">
								@php
                                    $flashdealdetail = App\FlashDealDetail::where('product_id',$productdetails->id)->where('status',1)->get();
								@endphp
								@if(count($flashdealdetail) > 0)
								@foreach($flashdealdetail as $row)
									<div class="product_page_price price" itemprop="offerDetails" itemscope="">
										<span class="price-new"><span itemprop="price" id="price-special">$85000.00</span></span> \
										<span class="price-old font-ct" id="price-old">$118.00</span>
									</div>
								@endforeach
								@else
								<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
										<span class="price-new"><span itemprop="price" id="price-special">৳ {{$productdetails->product_price}}</span></span> 
									</div>
								@endif

								</div>
								<div class="box-link">
									<div class="add-to-links wish_comp">
										<ul class="blank">
											<li class="wishlist">
												<a class="icon" title="Add to Wish List" onclick="wishlist.add('36');"><i class="fa fa-heart-o"></i></a>
											</li>
											<li class="compare">
												<a class="icon" title="Compare this Product" onclick="compare.add('36');"><i class="fa fa-retweet"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="product-box-desc hidden">
								<div class="inner-box-desc">

									<div class="model"><span>Product Code:</span> SKU-17894-S3825</div>
									<div class="stock"><span> Stock </span> <i class="fa fa-check-square-o"></i> 566</div>
								</div>
							</div>


							<div id="product">
								<div class="options options-mobi clearfix">
									<h3 class="hidden">Available Options</h3>
									@if($productdetails->product_type==1)
									<div class="image_option_type form-group required">
										<!-- color area start -->
										<div class="form-group required " style="display: block; margin-left:17px">
											<input type="hidden" name="id" value="{{$productdetails->id}}">
											@if (count(json_decode($productdetails->colors)) > 0)
											<ul class="list-inline checkbox-color mb-1">
												<li><strong>Color: &nbsp;<strong> </li>
												@foreach (json_decode($productdetails->colors) as $key => $color)
												<li>
													<input type="radio" id="{{ $productdetails->id }}-color-{{ $key }}" name="color" value="{{ $color }}" @if($key==0) checked @endif>
													<label style="background: {{ $color }};" for="{{ $productdetails->id }}-color-{{ $key }}" data-toggle="tooltip" data-original-title="{{$color}}"></label>

												</li>
												@endforeach
											</ul>





											@endif
										</div>

										@foreach (json_decode($productdetails->choice_options) as $key => $choice)


										<div class="col-md-12">
											<div id="product">





												<div class="form-group required " style="display: block;">
													<div id="input-option224">


														<ul class="list-inline checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2">
															<li>{{ $choice->title }}:</li>
															@foreach ($choice->options as $key => $option)
															<li>
																<input type="radio" id="{{ $choice->name }}-{{ $option }}" name="{{ $choice->name }}" value="{{ $option }}" @if($key==0) checked @endif>
																<label for="{{ $choice->name }}-{{ $option }}">{{ $option }}</label>
															</li>
															@endforeach
														</ul>




													</div>
												</div>

											</div>




										</div>
										@endforeach
										<!-- color area end -->
									</div>
									@else

									@endif


								</div>

								<div class="box-cart cart clearfix">

									<!-- QUALYTY -->
									<div class="form-group box-info-product">
										<div class="option quantity">
											<div class="input-group quantity-control" unselectable="on" style="user-select: none;">
												<label class="hidden">Qty</label>
												<span class="input-group-addon product_quantity_down fa fa-minus"></span>
												<input class="form-control font-ct" type="text" name="quantity" value="1">
												<input type="hidden" name="product_id" value="{{$productdetails->id}}">
												<input type="hidden" name="product_sku" value="{{$productdetails->product_sku}}">
												<input type="hidden" name="product_price" value="{{$productdetails->product_price}}">

												<span class="input-group-addon product_quantity_up fa fa-plus"></span>
											</div>
										</div>
										<!-- CART -->
										<div class="cart">
											<input type="button" data-toggle="tooltip" title="Add to Cart" value="Add to Cart" data-loading-text="Loading..." id="button-cart" onclick="cart.add('36');productaddtocart();" class="btn btn-mega btn-md">
										</div>


									</div>


								</div>




							</div>
							<!-- end box info product -->

						</div>
					</form>

















				</div>
				<div class="product-bottom">
					<div id="collapseTab" class="producttab ">
						<div class="tabsslider clearfix ">
							<ul class="nav nav-tabs col-xs-12">
								<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
								<li class=""><a data-toggle="tab" href="#tab-2">Specification</a></li>
								<li class=""><a data-toggle="tab" href="#tab-review">Reviews (0)</a></li>
								<li class=""><a data-toggle="tab" href="#tab-4">TAGS</a></li>
							</ul>


							<div class="tab-content  col-xs-12">
								<div id="tab-1" class="tab-pane fade active in">
									{!!$productdetails->product_description!!}

								</div>

								<div id="tab-2" class="tab-pane fade">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<td colspan="2">Product Specifications</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Color</td>
													<td>Pink - Green</td>
												</tr>
												<tr>
													<td>Description</td>
													<td>Hammered metal outer - Semi-precious stone embellishments</td>
												</tr>
												<tr>
													<td>Size</td>
													<td>H: 11cm/4" W: 12cm/5" D: 5cm/2"</td>
												</tr>
												<tr>
													<td>Material</td>
													<td>iridescence - 80% Brass, 20% Other materials</td>
												</tr>
												<tr>
													<td>Made in</td>
													<td>Handmade in the Himalayas</td>
												</tr>
											</tbody>
										</table>
									</div>

								</div>

								<div id="tab-review" class="tab-pane fade">
									<form>
										<div id="review">
											<p>There are no reviews for this product.</p>
										</div>
										<h2 id="review-title">Write a review</h2> Please <a href="#">login</a> or <a href="register.html">register</a> to review
									</form>

								</div>

								<div id="tab-4" class="tab-pane fade">
									<a class="btn btn-primary btn-sm" href="#">Eius modi tempor</a>
								</div>

							</div>
						</div>
					</div>
					<div class="module releate-horizontal">
						<h3 class="modtitle"><span>Related Products</span></h3>
						<div class="releate-products  contentslider" data-rtl="no" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-item_xs="2" data-item_sm="2" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
							<div class="item-element clearfix">
								<div class="image">
									<a href="#">
										<img src="../image/demo-mobile/product/E1.jpg" alt="Deserunt mollitia" title="Deserunt mollitia" class="img-responsive">
									</a>
								</div>
								<div class="caption text-center">
									<h4><a class="preview-image font-ct" href="#">Deserunt mollitia</a></h4>
									<div class="ratings hidden">
										<div class="rating-box">
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										</div>
									</div>
									<div class="price font-ct">
										<span class="price-new">$70.00</span>
										<span class="price-old">$100.00</span>

									</div>
								</div>
							</div>
							<div class="item-element clearfix">
								<div class="image">
									<a href="#">
										<img src="../image/demo-mobile/product/E2.jpg" alt="Biltong kielbasa" title="Biltong kielbasa" class="img-responsive">
									</a>
								</div>
								<div class="caption text-center">
									<h4><a class="preview-image font-ct" href="#">Biltong kielbasa</a></h4>
									<div class="ratings hidden">
										<div class="rating-box">
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										</div>
									</div>
									<div class="price font-ct">
										<span class="price-new">$34.00</span>
										<span class="price-old">$56.00</span>

									</div>
								</div>
							</div>
							<div class="item-element clearfix">
								<div class="image">
									<a href="#">
										<img src="../image/demo-mobile/product/E3.jpg" alt="Landjaeger shankle" title="Landjaeger shankle" class="img-responsive">
									</a>
								</div>
								<div class="caption text-center">
									<h4><a class="preview-image font-ct" href="#">Landjaeger shankle</a></h4>
									<div class="ratings hidden">
										<div class="rating-box">
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										</div>
									</div>
									<div class="price font-ct">
										<span class="price-new">$70.00</span>
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
<script>


function productaddtocart(){


	


$.ajax({
type:'GET',
url:"{{ route('product.add.cart') }}",
data: $('#option-choice-form').serializeArray(),
success: function (data) {
	console.log(data);
    document.getElementById('totalquentity').innerHTML =data.quantity;

}
});

}

</script>
@endsection
