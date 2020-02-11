    @foreach($countcartitems as $cartitems)
    
    <table class="table table-striped" style="margin-bottom:10px;">
        <tbody>
            <tr>
                @php
                    $thumbnail_img =$cartitems->attributes->thumbnail_img  
                @endphp
                
                <td class="text-center size-img-cart">
                    <a href="product.html"><img src="{{asset('public/uploads/products/thumbnail/')}}/{{$cartitems->attributes->thumbnail_img}}" alt="{{$cartitems->attributes->thumbnail_img}}" title="{{$cartitems->attributes->thumbnail_img}}" class="img-thumbnail"></a>
                </td>
                <td class="text-left"><a href="product.html">{{Illuminate\Support\Str::limit($cartitems->name,55)}}</a>
                    <br>
                <td class="text-right">x{{$cartitems->quantity}}</td>
                <td class="text-right">{{$cartitems->quantity * $cartitems->price}}</td>
                <td class="text-center">
                    <button onclick="myAddToCartDatadelete(this)" onclick="cart.add('30');" value="{{$cartitems->id}}" type="button" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
    
    @endforeach
    <script>
    function myAddToCartDatadelete(el) {
       
        $.post('{{ route('add.cart.delete') }}', {_token: '{{ csrf_token() }}',user_id: el.value},
            function(data) {
                
                document.getElementById('cartdatacount').innerHTML =Math.abs(data.quantity);
                document.getElementById('product_price').innerHTML =Math.abs(data.price);
                if (data == 1) {
                    toastr.success("Product Delete From Cart");
                } 
               
            });
	}
	
	myAddToCartDatadelete();
</script>
                                    