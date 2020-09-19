<div class="ps-cart__items">

    @foreach($countcartitems as $row)


    <div class="ps-product--cart-mobile" onclick=this.style.display="none">
        <div class="ps-product__thumbnail"><a href="{{url('product/')}}/{{$row->attributes->slug}}/{{$row->attributes->product_id}}"><img src="{{asset('public/uploads/products/thumbnail/productdetails')}}/{{$row->attributes->thumbnail_img}}" alt="{{$row->name}}"></a></div>
        <div class="ps-product__content">
            <a class="ps-product__remove" href="{{url('product/')}}/{{$row->attributes->slug}}/{{$row->attributes->product_id}}">

            </a>


            <a href="{{url('product/')}}/{{$row->attributes->slug}}/{{$row->attributes->product_id}}">{{$row->name}}
            </a>
            <!-- <i onclick="myAddToCartDatadelete(this)" value="{{$row->id}}" class="icon-cross"></i> -->
            <button onclick="myAddToCartDatadelete(this)" style="float: right; background:none;color:brown" value="{{$row->id}}" type="button" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
            <br><strong>Price:</strong><small> {{$row->quantity}} x ৳ {{$row->price}}</p></small>
        </div>
    </div>
    @endforeach

</div>

@php
$userId = Request::ip();
$totalprice =Cart::session($userId)->getTotal();
@endphp
@if($totalprice != 0)
<div class="ps-cart__footer" id="total_price">
    <h3>Sub Total:<strong id="product_price">৳ {{$totalprice}}</strong></h3>
    <figure><a class="ps-btn" href="{{route('product.cart.data')}}">View Cart</a><a class="ps-btn" href="{{route('product.cart.data')}}">Checkout</a></figure>
</div>
@else
<div class="ps-cart__footer" id="hide_total_price">
    <p>Sorry !Cart is Empty! Please add some product!</p>
</div>
@endif





<script>
    function myAddToCartDatadelete(el) {
        
        
        $.post('{{ route('add.cart.delete')}}', {
                _token: '{{ csrf_token() }}',
                user_id: el.value
            },
            function(data) {

                document.getElementById('cartdatacount').innerHTML = Math.abs(data.quantity);
                document.getElementById('product_price').innerHTML = "৳ " + Math.abs(data.price);
                if(data.price == 0){
                    
                    document.getElementById('total_price').style.display="none";
                    
                }


                iziToast.success({
                    message: 'Cart Data Deleted succesfully!',
                    'position': 'topRight'
                });


            });
    }

    // myAddToCartDatadelete();
</script>