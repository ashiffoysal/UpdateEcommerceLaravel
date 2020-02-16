<div id="content" class="col-sm-12">
    <h1>Shopping Cart
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td class="text-center">Image</td>
                    <td class="text-left">Product Name</td>
                    <td class="text-left">Quantity</td>
                    <td class="text-left">Action</td>
                    <td class="text-right">Unit Price</td>
                    <td class="text-right">Total</td>
                </tr>
            </thead>
            <tbody>
            @foreach($usercartdatas as $usercartdata )
                <tr>
                    <td class="text-center"> <a href="product.html"><img src="{{asset('public/uploads/products/thumbnail/')}}/{{$usercartdata->attributes->thumbnail_img}}" alt="{{$usercartdata->name}}" title="{{$usercartdata->name}}" width="80px" height="80px" class="img-thumbnail""></a> </td>
            <td class=" text-left"><a href="#">{{$usercartdata->name}}</a> <br>
                        @if($usercartdata->attributes->colors !=NULL)
                            Color : <div style="background:{{ $usercartdata->attributes->colors }}; width:20px; height:20px; display:inline-block;"></div><br>
                        @endif

                        @php
                            $productdetails=App\Product::where('id',$usercartdata->attributes->product_id)->first();
                        @endphp

                        @foreach(json_decode($productdetails->choice_options) as $key => $choice)

                            @php
                                $title =$choice->title;
                            @endphp    
                                <small>{{$title}}:- {{$usercartdata->attributes->$title}}</small><br>                            
                        @endforeach
                 </td>
            
                    <td class="text-left">Product {{$usercartdata->quantity}}</td>
                    <td class="text-left">
                        <div class="input-group btn-block" style="max-width: 200px;">
                            <input type="text" onkeyup="myUpdatecart(this)" id="{{$usercartdata->id}}" value="{{$usercartdata->quantity}}" size="1" class="form-control">
                            <input type="hidden" value="{{$usercartdata->id}}" name="cartid" size="1" class="form-control">
                            <span class="input-group-btn">
                                <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary hidden" data-original-titl="Update"><i class="fa fa-refresh"></i></button>
                                <button type="submit" onclick="cartDatadelete(this)" data-toggle="tooltip" title="" class="btn btn-danger" value="{{$usercartdata->id}}" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                            </span></div>
                    </td>
                    <td class="text-right">৳ {{$usercartdata->price}}</td>
                    <td class="text-right" id="carttotalpric">৳ {{$usercartdata->quantity *$usercartdata->price}}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    
    <div class="row">
        <div class="col-sm-4 col-sm-offset-8">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td class="text-right"><strong>Sub-Total:</strong></td>
                        <td class="text-right product_price">৳ {{Cart::session(\Request::getClientIp(true))->getTotal()}}</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Quentity:</strong></td>
                        <td class="text-right">{{Cart::session(\Request::getClientIp(true))->getTotalQuantity()}}</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Total:</strong></td>
                        <td class="text-right"><span class="product_price">৳ {{Cart::session(\Request::getClientIp(true))->getTotal()}}</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="buttons clearfix">
        <div class="pull-left"><a href="{{url('/')}}" class="btn btn-default">Continue Shopping</a></div>
        <div class="pull-right"><a href="{{route('checkout.page.show')}}" class="btn btn-primary">Checkout</a></div>
    </div>
</div>
<script>
    document.getElementById('cartdatacount').innerHTML = <?php echo Cart::session(\Request::getClientIp(true))->getTotalQuantity() ?>;
    document.getElementById('product_price').innerHTML = <?php echo Cart::session(\Request::getClientIp(true))->getTotal() ?>;
</script>

<script>
    function cartDatadelete(el) {
        
        
        $.post('{{ route('cart.data.delete') }}', {_token: '{{ csrf_token() }}',user_id: el.value},
            function(data) {
                $('#cartdata').html(data);
                
                if (data) {
                    toastr.success("Product Delete From Cart");
                } 
               
            });
            toastr.success("Product Delete From Cart");
	}
	
	cartDatadelete();
</script>