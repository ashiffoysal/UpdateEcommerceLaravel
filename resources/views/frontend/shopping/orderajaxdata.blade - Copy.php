
<div class="table-responsive checkout-product">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th class="text-left name" colspan="2">Product Name</th>
                <th class="text-center quantity">Quantity</th>
                <th class="text-center checkout-price">Unit Price</th>
                <th class="text-right total">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usercartdatas as $usercartdata)
            <tr>
                <td class="text-left name" colspan="2">
                    <a href="product.html"><img src="{{asset('public/uploads/products/thumbnail/')}}/{{$usercartdata->attributes->thumbnail_img}}" alt="{{$usercartdata->name}}" title="{{$usercartdata->name}}" class="img-thumbnail" width="80px" height="80px"></a>
                    <a href="product.html" class="product-name">{{$usercartdata->name}}</a>
                </td>
                <td class="text-left quantity">
                    <div class="input-group">
                        <input type="text" onkeyup="myUpdateOrder(this)" name="quantity" id="{{$usercartdata->id}}" value="{{$usercartdata->quantity}}" size="1" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" onclick="orderdelete(this)" data-toggle="tooltip" value="{{$usercartdata->id}}" title="" data-product-key="317" class="btn-delete" data-original-title="Remove" style="border:none;background:none;padding-right:50px;"><i class="fa fa-trash-o"></i></button>
                            <!-- <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary hidden" data-original-titl="Update"><i class="fa fa-refresh"></i></button> -->
                            <!-- <span data-toggle="tooltip" title="" data-product-key="317" class="btn-update" data-original-title="Update"><i class="fa fa-refresh"></i></span> -->
                        </span>
                    </div>
                </td>
                <td class="text-right price"> ‎৳ {{$usercartdata->price}}</td>
                <td class="text-right total"> ‎৳ {{$usercartdata->quantity *$usercartdata->price}}</td>
                
            </tr>
            @endforeach

            
        </tbody>

        
        <tfoot>
            <tr>
                <td colspan="4" class="text-left">Sub-Total:</td>
                <td class="text-right"> ‎৳ {{Cart::session(\Request::getClientIp(true))->getSubTotal()}}</td>
            </tr>
            <tr>
                <td colspan="4" class="text-left">Quentity</td>
                <td class="text-right"> {{Cart::session(\Request::getClientIp(true))->getTotalQuantity()}}</td>
            </tr>
            

            <tr>
                <td colspan="4" class="text-left">Cupon Discount:</td>
                <td class="text-right" id="cupondiscount"> 
                    <?php
                        if(isset($cupondatavalue)){
                            echo $cupondatavalue;
                            
                        }
                       
                        
                        
                    ?>


                </td>
            </tr>
            
            <tr>
                <td colspan="4" class="text-left">Total:</td>
                <td class="text-right"><span id="cartdatacount"> ‎৳ {{Cart::session(\Request::getClientIp(true))->getTotal()}}</span></td>
            </tr>
        </tfoot>
    </table>
</div>
<script>
    document.getElementById('cartdatacount').innerHTML = <?php echo Cart::session(\Request::getClientIp(true))->getTotalQuantity() ?>;
    document.getElementById('product_price').innerHTML = <?php echo Cart::session(\Request::getClientIp(true))->getTotal() ?>;
    
</script>


<script>
    function orderdelete(el) {
    
       
        $.post('{{ route('product.order.delete') }}', {_token: '{{ csrf_token() }}',user_id: el.value},
            function(data) {
                $('#orderdata').html(data);
               
               
            });
            toastr.success("Product Deleted successfully"); 
	}
	
	orderdelete();
</script>





