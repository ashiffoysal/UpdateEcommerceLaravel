<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr>
														<td class="text-center">Image</td>
														<td class="text-left">Product Name</td>
														<td class="text-left">Quantity</td>
														<td class="text-right">Unit Price</td>
														<td class="text-right">Total</td>
													</tr>
												</thead>
												<tbody>
                                                    @foreach($usercartdatas as $usercartdata)
                                                    
													<tr>
														<td class="text-center">
															<a href="{{(route('product.details',$usercartdata->attributes->product_id))}}"><img width="100px" src="{{asset('public/uploads/products/thumbnail/')}}/{{$usercartdata->attributes->thumbnail_img}}" alt="{{$usercartdata->attributes->thumbnail_img}}" title="{{$usercartdata->attributes->thumbnail_img}}" class="img-thumbnail">
															</a>
														</td>
														<td class="text-left"><a href="{{(route('product.details',$usercartdata->attributes->product_id))}}">{{$usercartdata->name}}</a>
														</td>
														<td class="text-left">
															<div class="input-group btn-block">
																<form id="getcatdata" onkeyup="myUpdateOrder(this)">
																<input type="hidden" name="rowid" id="cartrowid" value="{{$usercartdata->id}}"  class="form-control">
																<input type="text" name="quantity" id="cartqty" value="{{$usercartdata->quantity}}" size="1" class="form-control">
																<span class="input-group-btn">
																	<button type="button" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Update"><i class="fa fa-refresh"></i></button>
																	<button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="orderdelete(this)" id="{{$usercartdata->id}}" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
																</span>
																</form>
															</div>
														</td>
														<td class="text-right">৳ {{$usercartdata->price}}</td>
														<td class="text-right">৳ {{$usercartdata->price * $usercartdata->quantity}}</td>
                                                    </tr>
                                                    @endforeach
												</tbody>
												<tfoot>
													<tr>
														<td class="text-right" colspan="4"><strong>Sub-Total:</strong>
														</td>
														<td class="text-right">৳ {{Cart::session(\Request::getClientIp(true))->getSubTotal()}}</td>
													</tr>
													<tr>
														<td class="text-right" colspan="4"><strong>Quantity:</strong>
														</td>
														<td class="text-right">{{Cart::session(\Request::getClientIp(true))->getTotalQuantity()}}</td>
													</tr>
													<tr>
														<td class="text-right" colspan="4"><strong>Discount:</strong>
														</td>
														<td class="text-right">
															@if(isset($cupondatavalue))
																{{$cupondatavalue}}
															@else
																0.00
															@endif

														</td>
													</tr>
													
													<tr>
														<td class="text-right" colspan="4"><strong>Total:</strong>
														</td>
														<td class="text-right">৳ {{Cart::session(\Request::getClientIp(true))->getTotal()}}</td>
													</tr>
												</tfoot>
											</table>
										</div>
										

										<script>
    var myVar;
    function myUpdateOrder(el) {
		
		
		var cartrowid =el.rowid.value;
		var cartqty =el.quantity.value;
		
        myVar = setTimeout(function(){
            $.post('{{ route('product.cart.update') }}', {_token: '{{ csrf_token() }}', quantity:cartqty, rowid:cartrowid },
            function(data) {
				console.log(data);
				$('#cartdata').html(data);
                if (data) {
                    toastr.success("Product Quantity Changed successfully");
                }
            });
			toastr.success("Product Quantity Changed successfully");
		},1000);
    }

    
</script>

<script>
    function orderdelete(el) {
		
		var cartrowid =el.id;
		
       
        $.post('{{ route('mobile.product.cart.delete') }}', {_token: '{{ csrf_token() }}',user_id: cartrowid},
            function(data) {
				
                $('#cartdata').html(data);
               
               
            });
            toastr.success("Product Deleted successfully"); 
	}
	
	
</script>

										
										
                                        