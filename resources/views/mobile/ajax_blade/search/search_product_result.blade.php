@foreach ($products as $product)
@php
    $productInFlashDeal = App\FlashDealDetail::where('product_id', $product->id)->where('status', 1)->first();
@endphp
<div class="product-layout col-xs-6">
    <div class="product-item-container">
        <div class="left-block">
            <div class="product-image-container ">
                <a href="#" title="amper modi dolores">
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
                <h4><a href="{{ url('product/'.$product->slug.'/'.$product->id) }}">{{ $product->product_name }}</a></h4>
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


                    <button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('175');"><i class="fa fa-heart-o"></i></button>
                    <button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('175');"><i class="fa fa-retweet"></i></button>
                </div>
            </div>


        </div>
    </div>
</div>

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
@endforeach
