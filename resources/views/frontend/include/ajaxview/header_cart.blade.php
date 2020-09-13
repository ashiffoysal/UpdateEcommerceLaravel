<div class="ps-cart__items">
    
    @foreach($countcartitems as $row)
    {{$row}}
        <div class="ps-product--cart-mobile">
            <div class="ps-product__thumbnail"><a href="{{url('product/')}}/{{$row->attributes->slug}}/{{$row->attributes->product_id}}"><img src="{{asset('public/uploads/products/thumbnail/productdetails')}}/{{$row->attributes->thumbnail_img}}" alt="{{$row->name}}"></a></div>
            <div class="ps-product__content"><a class="ps-product__remove" href="{{url('product/')}}/{{$row->attributes->slug}}/{{$row->attributes->product_id}}"><i class="icon-cross"></i></a><a href="{{url('product/')}}/{{$row->attributes->slug}}/{{$row->attributes->product_id}}">{{$row->name}}</a>
                <br><small><strong>Price:</strong> ৳ {{$row->price}}</p></small>
            </div>
        </div>
    @endforeach
  
</div>
<div class="ps-cart__footer">
    <h3>Sub Total:<strong>$59.99</strong></h3>
    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
</div>

