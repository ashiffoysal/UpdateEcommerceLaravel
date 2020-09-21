@extends('layouts.websiteapp')
@section('content')
<div class="ps-page--simple">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop-default.html">Shop</a></li>
                    <li>Whishlist</li>
                </ul>
            </div>
        </div>
        <div class="ps-section--shopping ps-shopping-cart">
            <div class="container">
                <div class="ps-section__header">
                    <h1>Shopping Cart</h1>
                </div>
                <div class="ps-section__content">
                    <div class="table-responsive">
                        <table class="table ps-table--shopping-cart">
                            <thead>
                                <tr>
                                    <th>Product name</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>TOTAL</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="cartdata">
                                







                               
                            </tbody>
                        </table>
                    </div>
                    <div class="ps-section__cart-actions"><a class="ps-btn" href="shop-default.html"><i class="icon-arrow-left"></i> Back to Shop</a><a class="ps-btn ps-btn--outline" href="shop-default.html"><i class="icon-sync"></i> Update cart</a></div>
                </div>
                <div class="ps-section__footer">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <figure>
                                <figcaption>Coupon Discount</figcaption>
                                <form action="{{route('customer.apply.cupon')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="order_id" value="{{$orderid}}" placeholder="Enter coupon code" id="input_order" class="form-control">
                                    <div class="form-group">
                                        <input class="form-control" id="input-coupon" name="coupon" type="text" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <button type="button" id="input-coupon"  onclick="cuponApply()" class="ps-btn ps-btn--outline">Apply</button>
                                    </div>
                                </form>
                            </figure>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <figure>
                                <figcaption>Calculate shipping</figcaption>
                                <div class="form-group">
                                    <select class="ps-select">
                                        <option value="1">America</option>
                                        <option value="2">Italia</option>
                                        <option value="3">Vietnam</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Town/City">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Postcode/Zip">
                                </div>
                                <div class="form-group">
                                    <button class="ps-btn ps-btn--outline">Update</button>
                                </div>
                            </figure>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">

                            <div id="orderdata">
                                <!-- <div class="ps-block--shopping-total">
                                    <div class="ps-block__header">
                                        <p>Subtotal <span> ৳ {{Cart::session(\Request::getClientIp(true))->getSubTotal()}}</span></p>
                                    </div>
                                    <div class="ps-block__content">
                                        <ul class="ps-block__product">
                                         
                                            <li><span class="ps_inline_block">Coupon Discount</span><span class="pull-right">৳ 0.00</span></li>
                                            <li><span class="ps_inline_block">Shipping Price</span><span class="pull-right">৳  0.00</span></li>
                                            
                                        </ul>
                                        <h3>Total <span>৳ {{Cart::session(\Request::getClientIp(true))->getTotal()}}</span></h3>
                                    </div>

                                </div> -->
                            </div>
                           







                            <a class="ps-btn ps-btn--fullwidth" href="{{route('product.checkout',$orderid)}}">Proceed to checkout</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    @include('frontend.include.newsletter._subcribtion')


    

<script>
    $( document ).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: "{{ route('get.cart.data') }}",
                
                success: function(data) {
                    
                  
                    $('#cartdata').html(data);
                    
                }
            });
    
});
    
</script>



<script>
    var myVar;
    function myUpdatecart(el) {
        
        
        myVar = setTimeout(function(){ 
            
            $.post('{{ route('product.cart.update') }}', {_token: '{{ csrf_token() }}',quantity: el.value,rowid:el.id},
            function(data) {
                $('#cartdata').html(data);
                
                
            });
            iziToast.success({
                    message: 'Product Quantity Changed successfully',
                    'position':'topRight'
                });
            
        }, 1500);
            
        
      
    }
   
    myUpdatecart();
    
    
</script>



<script>
    function cuponApply() {

    var cuponvalue =document.getElementById('input-coupon').value;
    var ordervalue =document.getElementById('input_order').value;

    $.post('{{ route('customer.apply.cupon') }}', {_token: '{{ csrf_token() }}',cuponvalue: cuponvalue, order:ordervalue},
            function(data) {
				getCuponValue(ordervalue);
			

                console.log(data);

                if(data.cuponalert){
                    iziToast.warning({
                        message: data.cuponalert,
                        'position':'topRight'
                    });
                };

            });

    }
</script>

<script>
	function getCuponValue(ordervalue){
		$.ajaxSetup({

                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: "{{ url('/get/coupon/value/') }}/" +ordervalue,

                success: function(data) {

					console.log(data);
					$('#orderdata').html(data);
                }
            });

	}
	getCuponValue();
</script>

<script>
    $( document ).ready(function() {

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
    
});
    
</script>

<script>
    $( window ).mouseup(function() {

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
    
});
    
</script>




    @endsection