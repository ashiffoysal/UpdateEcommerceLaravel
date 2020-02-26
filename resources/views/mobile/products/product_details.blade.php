@extends('mobile.extra_master')
@section('page_content')
<style type="text/css">
	.checkbox-alphanumeric input:checked~label {
		transform: scale(1.1);
		border: 1px solid red;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
							@php

                        $flashdealdetail=App\FlashDealDetail::where('product_id',$productdetails->id)->where('status',1)->limit(1)->get();
					  @endphp
					  @if(count($flashdealdetail) > 0)
                                           @foreach($flashdealdetail as $row)
                                             @if($row->discount_type==1)
								<span class="label-product label-sale font-ct"> -{{$row->discount}}৳ </span>
								@elseif($row->discount_type==2)
								<span class="label-product label-sale font-ct"> -{{$row->discount}}% </span>
							@endif
							@endforeach
							@endif

							<div class="product-stock">
								@if($productdetails->product_qty > 0)
									<div class="stock" style="background: url({{asset('public/mobile')}}/image/theme/icon/icon-instock.png) no-repeat center center"><span> Stock </span> <i class="fa fa-check-square-o"></i> 566</div>
								@else
								<div class="stock" style="background: url({{asset('public/mobile')}}/image/theme/icon/not-av.png) no-repeat center center"><span> Stock </span> <i class="fa fa-check-square-o"></i> 566</div>
								@endif
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
									$rount=App\ProductReview::where('product_id',$productdetails->id)->count();
								@endphp
									<a class="reviews_button " href="#" onclick="">{{$rount}} reviews</a>
									<div class="rating">
											<div class="rating-box">
											@if($rount)
												@php
												$sumofreview =App\ProductReview::where('product_id',$productdetails->id)->sum('review');
												$rating=$sumofreview/$rount;
												@endphp

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

										@endif


											</div>
									</div>

<!-- review end -->
								</div>
								<div class="product-label">
								@php
                  $flashdealdetail = App\FlashDealDetail::where('product_id',$productdetails->id)->where('status',1)->get();
								@endphp
								@if(count($flashdealdetail) > 0)
									@foreach($flashdealdetail as $row)
										<div class="product_page_price price" itemprop="offerDetails" itemscope="">
												 @if($row->discount_type==1)
												 <span class="price-new">৳ {{$productdetails->product_price -$row->discount}}</span> <span class="price-old">৳ {{$productdetails->product_price}}</span>
												 @elseif($row->discount_type==2)
													 @php
														 $productdiscount = ($productdetails->product_price * $row->discount) / 100;
													 @endphp
													 <span class="price-new">৳ {{$productdetails->product_price -$productdiscount}}</span> <span class="price-old">৳ {{$productdetails->product_price}}</span>
												 @endif
										</div>
									@endforeach
								@else
								<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
										<span class="price-new"><span itemprop="price" id="chosen_price">৳ {{$productdetails->product_price}}</span></span>
								</div>
								@endif
								</div>

								<div class="box-link">
									<div class="add-to-links wish_comp">
										<ul class="blank">
											@if(Auth::guard('web')->check())
											<li class="wishlist"><a class="icon mywishlist" id="mywishlist" title="Add to Wish List" data-id="{{$productdetails->id}}"><i class="fa fa-heart-o"></i></a></li>
											@else
											<li class="wishlist"><a href="{{url('/mobile/login')}}" class="icon" title="Add to Wish List"><i class="fa fa-heart-o"></i></a></li>
											@endif
											<li class="compare"><a  class="icon compareproduct" title="Compare this Product" id="compareproduct" data-id="{{$productdetails->id}}"><i class="fa fa-retweet"></i></a></li>
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
							<div class="product-box-desc hidden">
								<div class="inner-box-desc">
									<div class="model"><span>Product Code:</span> SKU-17894-S3825</div>
									<div class="stock"><span> Stock </span> <i class="fa fa-check-square-o"></i> 566</div>
								</div>
							</div>
















							<br>

							<div id="product">
								<div class="options options-mobi clearfix">
									<h3 class="hidden">Available Options</h3>
									@if($productdetails->product_type==1)
									<div class="image_option_type form-group required">
										<!-- color area start -->
										<div class="form-group required " style="display: block; margin-left:17px">
											<input type="hidden" name="id" value="{{$productdetails->id}}">
											
											<!-- <label class="control-label">Colors</label> -->
											@if (count(json_decode($productdetails->colors)) > 0)
											<ul class="list-inline checkbox-color mb-1">
												<li>Colors</li>
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
												<input class="form-control font-ct" type="text" name="quantity" id="quantity" value="1">
												<input type="hidden" name="product_id" value="{{$productdetails->id}}">
												<input type="hidden" id="product_chosen_sku" name="product_sku" value="{{$productdetails->product_sku}}">
												<input type="hidden" id="product_chosen_price" name="product_price" value="{{$productdetails->product_price}}">

												<span class="input-group-addon product_quantity_up fa fa-plus"></span>
											</div>
										</div>
										<!-- CART -->
										<div class="cart">
											<input type="button" data-toggle="tooltip" title="Add to Cart" value="Add to Cart" data-loading-text="Loading..." id="button-cart" onclick="productaddtocart();" class="btn btn-mega btn-md">
										</div>
									</div>
								</div>
							</div>
							<!-- end box info product -->













							

							
						</div>
					</form>
				</div>



				
				<div class="product-bottom" style="padding-left: 15px;">
					<div id="collapseTab" class="producttab ">
						<div class="tabsslider clearfix ">
							<ul class="nav nav-tabs col-xs-12">
								<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
								<li class=""><a data-toggle="tab" href="#tab-2">Specification</a></li>
								@php
									$rcount=App\ProductReview::where('product_id',$productdetails->id)->count();
								@endphp
								<li class=""><a data-toggle="tab" href="#tab-review">Reviews ({{$rcount}})</a></li>
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










											@if($productdetails->product_type==1)
												@if (count(json_decode($productdetails->colors)) > 0)
												
												<tr>
													<td>Color</td>
													
													<td>
													@foreach (json_decode($productdetails->colors) as $key => $color)
														{{$color}} - 
													@endforeach
												</td>
												</tr>
												@endif

												@foreach (json_decode($productdetails->choice_options) as $key => $choice)
												<tr>
													<td>{{ $choice->title }}:</td>
													
													<td>
													@foreach ($choice->options as $key => $option)
														{{ $option }} , 
														@endforeach
													</td>
													
												</tr>
												@endforeach
											
												
											@endif












											</tbody>
										</table>
									</div>

								</div>

								<div id="tab-review" class="tab-pane fade container">
									<form action="{{url('mobile/review/submit')}}" method="post">
										@csrf
									  	<div class="form-group row">
												 <label for="staticEmail" class="col-sm-2 col-form-label text-right">Name:</label>
												 <div class="col-sm-4">
													 <input type="text" name="name" class="form-control-plaintext" id="staticEmail" placeholder="Your Name" required>
													 <input type="hidden" name="id" value="{{$productdetails->id}}">
												 </div>
											 </div>
												<div class="form-group row">
												 <label for="staticEmail" class="col-sm-2 col-form-label text-right">Your Comment</label>
												 <div class="col-sm-4">
													 <textarea type="text" class="form-control-plaintext" name="description"></textarea>
												 </div>
											 </div>
											 <div class="form-group row">
												<label for="staticEmail" class="col-sm-2 col-form-label text-right">Review</label>
												<div class="col-sm-4">
													<input type="radio" name="review" value="1">
													<input type="radio" name="review" value="2">
													<input type="radio" name="review" value="3">
													<input type="radio" name="review" value="4">
													<input type="radio" name="review" value="5" checked>
												</div>
											</div>
											<div class="form-group row">
											 <label for="staticEmail" class="col-sm-2"></label>
											 <div class="col-sm-4" text-center>
												 	<button type="submit" class="btn btn-primary">Submit</button>
											 </div>
										 </div>
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
					@php
						$cateid=$productdetails->cate_id;
						$reproduct=App\Product::where('is_deleted',0)->where('status',1)->where('cate_id',$cateid)->OrderBy('id','DESC')->limit(6)->get();
					@endphp
					@foreach($reproduct as $product)
							<div class="item-element clearfix">
								<div class="image">
									<a href="{{url('product/details/'.$product->slug.'/'.$product->id)}}">
										<img src="{{asset('public/uploads/products/thumbnail/productdetails/'.$product->thumbnail_img)}}"  class="img-responsive">
									</a>
								</div>
								<div class="caption text-center">
									<h4><a class="preview-image font-ct" href="{{url('product/details/'.$product->slug.'/'.$product->id)}}">{{Str::limit($product->product_name,10)}}</a></h4>
									<div class="ratings ">
										<div class="rating-box">
											@php
												$rount=App\ProductReview::where('product_id',$product->id)->count();
											@endphp

											@if($rount)
												@php
												$sumofreview =App\ProductReview::where('product_id',$product->id)->sum('review');
												$rating=$sumofreview/$rount;
												@endphp

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
										@else
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>

										@endif
										</div>
									</div>
									<div class="price font-ct">
										<span class="price-new">৳ {{$product->product_price}}</span>
									</div>
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

<script>
	function productaddtocart(){


			$.ajax({
			type:'GET',
			url:"{{ route('product.add.cart') }}",
			data: $('#option-choice-form').serializeArray(),
			success: function (data) {
				toastr.success("Product add to Cart successfully");
			    document.getElementById('totalquentity').innerHTML =data.quantity;

			}
				});

		}
	</script>

	<script>
	    $(document).ready(function () {
	        $('#option-choice-form input').on('change', function () {
	            getVariantPrice();
	        });
	    });

	    function getVariantPrice() {
	        //alert("success");
	        if ($('#option-choice-form input[id=quantity]').val() > 0) {
	            $.ajax({
	                type: "GET",
	                url: '{{ route('products.mobilevariant')}}',
	                data: $('#option-choice-form').serializeArray(),
	                success: function (data) {
	                    //console.log(data);
	                    $('#chosen_price').html('৳ ' + data.price);
	                    $('#product_chosen_sku').val(data.sku);
	                    $('#product_chosen_price').val(data.price);

	                }
	            });
	        }
	    }
	</script>
<!-- wishlist product -->
<script type="text/javascript">
		$(document).ready(function() {
				$('.mywishlist').on('click', function() {
						var id = $(this).data('id');
						//alert(id);
						if (id) {
								$.ajax({
										url: "{{ url('/product/mobile/add/wishlist/') }}/" + id,
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

<!-- compare -->
	<script>
			$(document).ready(function() {
					$('.compareproduct').on('click', function() {
							var id = $(this).data('id');
							//alert(id);
							$.ajax({
									type: 'GET',
									url: "{{ url('/product/mobile/compare') }}/" + id,
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
@endsection
