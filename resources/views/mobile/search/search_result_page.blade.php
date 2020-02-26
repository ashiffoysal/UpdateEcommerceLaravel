<!-- Begin Bar Nav -->
@extends('mobile.extra_master')
@section('page_content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                                            <a href="{{ url('product/details/'.$product->slug.'/'.$product->id) }}" title="">
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
                                                    href="{{ url('product/details/'.$product->slug.'/'.$product->id) }}">{{ Str::limit($product->product_name,10) }}</a>
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
                                                <p>{!! Str::limit($product->product_description,20) !!}</p>
                                            </div>
                                            <div class="price">
                                                @if ($productInFlashDeal)
                                                <span class="price-new">
                                                    @php
                                                    $disprice = 0;
                                                    @endphp
                                                    @if($productInFlashDeal->discount_type == 1)
                                                        @php
                                                        $disprice = $product->product_price - $productInFlashDeal->discount;
                                                        @endphp
                                                    @elseif($productInFlashDeal->discount_type == 2)
                                                        @php
                                                        $discountPrice = $product->product_price /100 * $productInFlashDeal->discount;
                                                        $disprice= $product->product_price-$discountPrice;
                                                        @endphp
                                                    @endif
                                                    ৳ {{ $disprice }}
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
l
                                           
                                @if($product->product_type ==1)
                          
                          <button class="addToCart font-sn" type="button" title="Add to details"> <i class="fa fa-shopping-cart"></i><span><span><a href="{{route('product.details',$product->id)}}">Add to Cart</a> </span></span></button>
                        @else
                        <form  onclick="searchproductaddtocart(this)">
                        <input class="form-control font-ct" type="hidden" name="quantity" id="quantity" value="1">
												<input type="hidden" name="product_id" value="{{$product->id}}">
												<input type="hidden" id="product_chosen_sku" name="product_sku" value="{{$product->product_sku}}">
                        <input type="hidden" id="product_chosen_price" name="product_price" value="{{$product->product_price}}">
                        

                        <button class="addToCart font-sn" type="button" title="Add to Cart"> <i class="fa fa-shopping-cart"></i><span><span>Add to Cart</span></span></button>
                        </form>
                        
                      @endif
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

<script>
    function searchproductaddtocart(el) {
   
        var product_id = el.product_id.value;
        var product_price = el.product_price.value;
        var quantity = el.quantity.value;
        if (!el.combination) {
            $.ajax({
                type: 'GET',
                url: "{{ route('product.add.cart') }}",
                data: {
                    product_id: product_id,
                    product_price: product_price,
                    quantity: quantity,
                },
                success: function (data) {
                  toastr.success("Product add to Cart successfully");
			             document.getElementById('totalquentity').innerHTML =data.quantity;

                }
            })
        }

    }
</script>


@endsection
