@foreach($usercartdatas as $row)
<tr>
    <td>
        <div class="ps-product--cart">
            <div class="ps-product__thumbnail"><a href="{{url('product/')}}/{{$row->attributes->slug}}/{{$row->attributes->product_id}}"><img src="{{asset('public/uploads/products/thumbnail/productdetails')}}/{{$row->attributes->thumbnail_img}}" alt="{{$row->name}}"></a></div>
            <div class="ps-product__content"><a href="{{url('product/')}}/{{$row->attributes->slug}}/{{$row->attributes->product_id}}">{{$row->name}}</a>
                <p>Sold By:<strong> YOUNG SHOP</strong></p>
            </div>
        </div>
    </td>
    <td class="price">৳ {{$row->price}}</td>
    <td>
        <div class="form-group--number">
            <button class="up">+</button>
            <button class="down">-</button>
            <input class="form-control" onkeyup="myUpdatecart(this)" id="{{$row->id}}"  type="text" placeholder="1" value="{{$row->quantity}}">
        </div>
    </td>
    <td>৳ {{$row->quantity *$row->price}}</td>
    <td>
        <!-- <a href="#"><i class="icon-cross"></i></a> -->
        <button type="submit" onclick="cartDatadelete(this);cartTotalData()" data-toggle="tooltip" title="" class="btn btn-danger" value="{{$row->id}}" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
    </td>
</tr>
@endforeach



<script>
    function cartDatadelete(el) {
        
        
        $.post('{{ route('cart.data.delete') }}', {_token: '{{ csrf_token() }}',user_id: el.value},
            function(data) {
                $('#cartdata').html(data);
                
                if (data) {
                    iziToast.info({
                    message: 'Product Deleted',
                    'position':'topRight'
                });
                } 
                
               
            });
            
	}
	
	cartDatadelete();
</script>

<script>
    function cartTotalData(el) {

        
        
        
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: "{{ route('cart.total.amount') }}",
                
                success: function(data) {
                    $('#orderdata').html(data);
                    
                }
            });
            
	}
	
	cartTotalData();
</script>
