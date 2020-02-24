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
                    <button class="addToCart font-sn" type="button" title="Add to Cart" onclick="cart.add('175', '1');"> <i class="fa fa-shopping-cart"></i><span><span>Add to Cart</span></span></button>
                    <button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('175');"><i class="fa fa-heart-o"></i></button>
                    <button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('175');"><i class="fa fa-retweet"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
