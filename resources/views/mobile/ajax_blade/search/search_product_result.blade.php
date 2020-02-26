@foreach ($products as $product)
@php
    $productInFlashDeal = App\FlashDealDetail::where('product_id', $product->id)->where('status', 1)->first();
@endphp
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="product-layout col-xs-6">
    <div class="product-item-container">
        <div class="left-block">
            <div class="product-image-container ">
                <a href="{{ url('product/details/'.$product->slug.'/'.$product->id) }}" title="amper modi dolores">
                    <img src="{{ asset('public/uploads/products/thumbnail/mobile/'.$product->thumbnail_img) }}" title="{{ $product->product_name }}" class="img-responsive">
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
                <h4><a href="{{ url('product/details/'.$product->slug.'/'.$product->id) }}">{{ $product->product_name }}</a></h4>
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
                        @else($productInFlashDeal->discount_type == 2)
                         @php
                        $discountPrice =$product->product_price - $product->product_price /100 * $productInFlashDeal->discount;
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
                    <button class="addToCart font-sn" type="button" title="Add to Cart" onclick="cart.add('175', '1');"> <i class="fa fa-shopping-cart"></i><span><span>Add to Cart</span></span></button>
                    @if(Auth::guard('web')->check())
                    <a class="wishlist btn-button mywishlist" id="mywishlist" data-id="{{$product->id}}"><i class="fa fa-heart-o"></i></a>
                    @else
                      <a href="{{url('/mobile/login')}}" class="wishlist btn-button"  title="Add to Wish List" href="" ><i class="fa fa-heart-o"></i></a>
                    @endif
                    <a class="compare btn-button compareproduct" type="button"  title="Compare this Product" id="compareproduct" data-id="{{$product->id}}"><i class="fa fa-retweet"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
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
@endforeach
