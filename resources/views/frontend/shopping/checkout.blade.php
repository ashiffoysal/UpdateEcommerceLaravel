@extends('layouts.websiteapp')
@section('main_content')

<!-- Main Container  -->
<div class="container">
	<ul class="breadcrumb">
		<li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
		<li><a href="{{route('product.cart.add')}}">Shopping Cart</a></li>
		<li><a href="#">Place Order</a></li>
	</ul>
	<div class="row">
		<div id="content" class="col-sm-12">
			<h1>Place Order</h1>

			<form action="{{route('place.order.submit')}}" method="post">
				@csrf
				<div class="so-onepagecheckout layout1">
					<div class="col-left col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="checkout-content checkout-register">
							<fieldset id="account">
								<h2 class="secondary-title"><i class="fa fa-user-plus"></i>Your Personal Details</h2>
								<div class="payment-new box-inner">

									<div class="form-group input-firstname required" style="width: 49%; float: left;">
										<input type="text" name="firstname" value="{{Auth::user()->first_name}}" placeholder="First Name *" id="input-payment-firstname" class="form-control disabl" disabled>
									</div>
									<div class="form-group input-lastname required" style="width: 49%; float: right;">
										<input type="text" name="lastname" value="{{Auth::user()->last_name}}" placeholder="Last Name *" id="input-payment-lastname" class="form-control" disabled>
									</div>
									<div class="form-group required">
										<input type="text" name="email" value="{{Auth::user()->email}}" placeholder="E-Mail *" id="input-payment-email" class="form-control" disabled>
									</div>
									<div class="form-group required">
										<input type="text" name="telephone" value="{{Auth::user()->phone}}" placeholder="Telephone *" id="input-payment-telephone" class="form-control" disabled>
									</div>
								</div>
							</fieldset>

							<fieldset id="address">
								<h2 class="secondary-title"><i class="fa fa-map-marker"></i>Your Address</h2>
								<div class=" checkout-payment-form">
									<div class="box-inner">
										<form class="form-horizontal form-payment">
											<div id="payment-new" style="display: block">

												<div class="form-group required">
													<input type="hidden" name="user_id" value="{{Auth::user()->id}}" placeholder="Address" id="input-payment-address-1" class="form-control">
													<input type="text" name="user_address" value="@if(isset($useraddress->user_address)){{$useraddress->user_address}}@endif"  placeholder="Address*" id="input-payment-address-1" class="form-control">
													@error('user_address')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
													@enderror
												</div>

												<div class="form-group required">
													<input type="text" name="user_post_office" value="@if(isset($useraddress->user_post_office)){{$useraddress->user_post_office}}@endif" placeholder="Post office *" id="input-payment-city" class="form-control">
													@error('user_post_office')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
													@enderror
												</div>
												<div class="form-group">
													<input type="text" name="user_postcode" value="@if(isset($useraddress->user_postcode)){{$useraddress->user_postcode}}@endif" placeholder="Post Code *" id="input-payment-postcode" class="form-control">
													@error('user_postcode')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
													@enderror
												</div>
												<div class="form-group required">
													<select name="user_country_id" id="user_country" class="form-control">
														<option value="" disabled selected> --- Please Select Your Country --- </option>
														@foreach(DB::table('countries')->get() as $country)
														<option value="{{$country->id}}"@if(isset($useraddress->user_country_id)  == $country->id) selected @endif>{{$country->name}}</option>
														@endforeach
													</select>
													@error('user_country_id')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
													@enderror
												</div>
												<div class="form-group required">
													<select name="user_division_id" id="user_division" class="form-control">
														<option disabled selected> --- Please Select Your Division --- </option>
														@foreach(DB::table('divisions')->get() as $division)
															@if(isset($useraddress->user_division_id))
																<option value="{{$division->id}}" @if($useraddress->user_division_id == $division->id) selected @endif>{{$division->name}} </option>
															@else
																<option value="{{$division->id}}">{{$division->name}} </option>
															@endif
														@endforeach

													</select>
													@error('user_division_id')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
													@enderror
												</div>

												<div class="form-group required">
													<select name="user_district_id" id="user_district" class="form-control">
														<option disabled selected> --- Please Select Your District --- </option>
														@php
														$dis=DB::table('districts')->get();

														@endphp
														@foreach($dis as $district)
															@if(isset($useraddress->user_district_id))
																<option value="{{$district->id}}" @if($useraddress->user_district_id == $district->id) selected @endif>{{$district->name}} </option>
															@else
																<option value="{{$district->id}}">{{$district->name}} </option>
															@endif

														@endforeach

													</select>
													@error('user_district_id')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
													@enderror
												</div>
												<div class="form-group required">
													<select name="user_upazila_id" id="user_upazila" class="form-control">
													@php
														$upa=DB::table('upazilas')->get();

													@endphp
													@foreach($upa as $upazila)
														@if($useraddress)
															<option value="{{$upazila->id}}" @if($useraddress->user_upazila_id == $upazila->id) selected @endif>{{$upazila->name}} </option>
														@else
															<option value="{{$upazila->id}}">{{$upazila->name}} </option>
														@endif
													@endforeach

												</div>
												@error('user_upazila_id')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
												@enderror
											</div>
										</form>
									</div>
								</div>
								<input type="hidden" name="default_zone_id" id="default_zone_id" value="3655">
							</fieldset>

								@php
									$userid =  \Request::getClientIp(true);
								@endphp
								<input type="hidden" value="{{Cart::session($userid)->getTotalQuantity()}}" name="total_quantity">


							<div class="checkbox">
								<label>
									<input type="checkbox" id="is_shipping" name="is_shipping_address" value="1" checked="checked"> My delivery and billing addresses are the same.
								</label>
							</div>

							<input type="hidden" value="{{Cart::session($userid)->getTotal()}}" name="total_price">
							<fieldset id="shipping-address" style="display: none">
								<h2 class="secondary-title"><i class="fa fa-map-marker"></i>Shipping Address</h2>
								<div class=" checkout-shipping-form">
								<div class="box-inner">
										<form class="form-horizontal form-payment">
											<div id="payment-new" style="display: block">
											<div class="form-group required">

													<input type="text" name="shipping_name" value="{{old('shipping_name')}}"  placeholder="Shipping Name *" id="input-payment-address-1" class="form-control">
													@error('shipping_name')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
													@enderror
												</div>

												<div class="form-group required">

													<input type="text" name="shipping_phone" value="{{old('shipping_phone')}}"  placeholder="Shipping Phone Number *" id="input-payment-address-1" class="form-control">
													@error('shipping_phone')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
													@enderror
												</div>


												<div class="form-group required">
													<input type="hidden" name="shipping_user_id" value="{{Auth::user()->id}}" placeholder="Address" class="form-control">
													<input type="text" name="shipping_customer_address" placeholder="Address*" id="input-payment-address-1" class="form-control">
													@error('shipping_address')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
													@enderror
												</div>

												<div class="form-group required">
													<input type="text" name="shipping_post_office" value="" placeholder="Post office *" id="input-payment-city" class="form-control">
													@error('shipping_post_office')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
													@enderror
												</div>
												<div class="form-group">
													<input type="text" name="shipping_postcode" value="" placeholder="Post Code *" id="input-payment-postcode" class="form-control">
													@error('shipping_postcode')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
													@enderror
												</div>
												<div class="form-group required">
													<select name="shipping_country_id" id="shipping_country" class="form-control">
														<option value="" disabled selected> --- Please Select Your Country --- </option>
														@foreach(DB::table('countries')->get() as $country)
														<option value="{{$country->id}}">{{$country->name}}</option>
														@endforeach
													</select>
													@error('shipping_country_id')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
													@enderror
												</div>
												<div class="form-group required">
													<select name="shipping_division_id" id="shipping_division" class="form-control">
														<option disabled selected> --- Please Select Your Division --- </option>

													</select>
													@error('shipping_division_id')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
													@enderror
												</div>

												<div class="form-group required">
													<select name="shipping_district_id" id="shipping_district" class="form-control">
														<option disabled selected> --- Please Select Your District --- </option>
													</select>
													@error('shipping_district_id')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
													@enderror
												</div>
												<div class="form-group required">
													<select name="shipping_upazila_id" id="shipping_upazila" class="form-control">
														<option disabled selected> --- Please Select Your Upazila/Thana --- </option>
													</select>
													@error('shipping_upazila_id')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
													@enderror
												</div>

											</div>
										</form>
									</div>
								</div>
								<input type="hidden" name="default_zone_id" id="default_zone_id" value="3655">
							</fieldset>
						</div>
					</div>


					<div class="col-right col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<section class="section-left">
							<div class="ship-payment">
								<div class="checkout-content checkout-shipping-methods">
									<h2 class="secondary-title"><i class="fa fa-location-arrow"></i>Shipping Method</h2>
									<div class="box-inner">
										<p><strong>Flat Rate</strong></p>
										<div class="radio">
											<label>
												<select name="shipping_id" id="shipping_courier" class="form-control">


												</select>
												@error('shipping_id')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
												@enderror
											</label>
										</div>
									</div>
								</div>

								<div class="checkout-content checkout-payment-methods">
									<h2 class="secondary-title"><i class="fa fa-credit-card"></i>Payment Method</h2>
                                    <div class="box-inner">
										<div class="radio">
											<label>
												<input type="radio" name="payment_method_id" value="1" > Cash On Delivery <br>
												<input type="radio" name="payment_method_id" value="2" >Stripe<br>
												<input type="radio" name="payment_method_id" value="3" > Paypal<br>
												<input type="radio" name="payment_method_id" value="4" > SSL Commerce<br/>
												<input type="radio" name="payment_method_id" value="5" > 2Checkout<br/>
												@error('payment_method_id')
														<div class="text-danger alert alert-danger">{{ $message }}</div>
												@enderror
											</label>
										</div>
									</div>
								</div>

							</div>
						</section>
						<section class="section-right">
							<div id="coupon_voucher_reward">
								<div class="checkout-content coupon-voucher">
									<h2 class="secondary-title"><i class="fa fa-gift"></i>Do you Have a Coupon or Voucher?</h2>
									<div class="box-inner">
										<div class="panel-body checkout-coupon">
											<label class="col-sm-2 control-label" for="input-coupon">Enter coupon code</label>
											<div class="input-group">
												
													<input type="hidden" name="order_id" value="{{$order_id}}" placeholder="Enter coupon code" id="input_order" class="form-control">
													<input type="text" name="coupon" value="" placeholder	="Enter coupon code" id="input-coupon" class="form-control">
													<span class="input-group-btn">
														<input type="button" value="Apply Coupon" id="input-coupon"  onclick="cuponApply()" data-loading-text="Loading..." class="btn-primary button">
													</span>
											
											</div>
										</div>

										<div class="panel-body checkout-voucher">
											<label class="col-sm-2 control-label" for="input-voucher">Enter voucher code</label>
											<div class="input-group">
												<input type="text" name="voucher" value="" placeholder="Enter voucher code" id="input-voucher" class="form-control">
												<span class="input-group-btn">
													<input type="button" value="Apply Voucher" id="button-voucher" data-loading-text="Loading..." class="btn-primary button">
												</span>
											</div>
										</div>

									</div>
								</div>

							</div>

							<div class="checkout-content checkout-cart">
								<h2 class="secondary-title"><i class="fa fa-shopping-cart"></i>Shopping Cart (0.00kg) </h2>
								<div class="box-inner" id="orderdata">
									<div id="payment-confirm-button" class="payment-">
										<h2 class="secondary-title"><i class="fa fa-credit-card"></i>Payment Details</h2>

									</div>
								</div>
							</div>

							<div class="checkout-content confirm-section">
								<div>
									<h2 class="secondary-title"><i class="fa fa-comment"></i>Add Comments About Your Order</h2>
									<label>
										<textarea name="comment" rows="8" class="form-control  requried "></textarea>
										@error('comment')
												<div class="text-danger alert alert-danger">{{ $message }}</div>
										@enderror
									</label>
								</div>

								<div class="checkbox check-newsletter">
									<label for="newsletter">
										<input type="checkbox" name="newsletter" value="1" id="newsletter"> I wish to subscribe to the Your Store newsletter.
									</label>
								</div>

								<div class="checkbox check-privacy">
									<label>
										<input type="checkbox" name="privacy" value="1"> I have read and agree to the <a href="#" class="agree"><b>Support 24/7 page</b></a>
									</label>
								</div>

								<div class="checkbox check-terms">
									<label>
										<input type="checkbox" name="agree" value="1"> I have read and agree to the <a href="#" class="agree"><b>Warranty And Services</b></a>
									</label>
								</div>
								<div class="confirm-order">
									<button id="so-checkout-confirm-button" data-loading-text="Loading..." class="btn btn-primary button confirm-button">Confirm Order</button>
								</div>
							</div>
						</section>
					</div>
				</div>
			</form>

		</div>
	</div>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    function cuponApply() {
      
    var cuponvalue =document.getElementById('input-coupon').value;
    var ordervalue =document.getElementById('input_order').value;
	
    $.post('{{ route('customer.apply.cupon') }}', {_token: '{{ csrf_token() }}',cuponvalue: cuponvalue, order:ordervalue},
            function(data) {
				
				getCuponValue(ordervalue);
                // console.log(data.cuponalert);
                // console.log(data);
                console.log(data);
                if(data.cuponid){
                    toastr.success('Cupon Insert Succssfully!');    
                };
                if(data){
                    toastr.success(data);
                }
                
                
                
                
                    
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
                url: "{{ url('/get/cupon/value/') }}/" +ordervalue,
                
                success: function(data) {
					
					console.log(data);
					$('#orderdata').html(data);
					toastr.success('Cupon Insert Succssfully!');   
					
					
                }
            });
	}
	getCuponValue();
</script>




<script>
    $(document).ready(function() {
			$( "#is_shipping" ).click(function() {
				if(this.checked){
					$('#shipping-address').css('display', 'none');
				}
				if(!this.checked){
					$('#shipping-address').css('display', 'block');
				}
			});



    });
</script>


<script>
    $(document).ready(function() {
        $('#shipping_country').click(function(params) {
            var country_id = $(this).val();


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: "{{ url('/user/division/name') }}/" +country_id,
				dataType:"json",

                success: function(data) {


                        $('#shipping_division').empty();
                        $('#shipping_division').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data,function(index,divisionobj){
                         $('#shipping_division').append('<option value="' + divisionobj.id + '">'+divisionobj.name+'</option>');
                       });
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#shipping_division').click(function(params) {

            var division_id = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: "{{ url('/user/district/name') }}/" +division_id,
				dataType:"json",

                success: function(data) {

						console.log(data);
                        $('#shipping_district').empty();
                        $('#shipping_district').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data,function(index,districtbj){
                         $('#shipping_district').append('<option value="' + districtbj.id + '">'+districtbj.name+'</option>');
                       });
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#shipping_district').click(function(params) {

            var upazila_id = $(this).val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: "{{ url('/user/upazila/name') }}/" +upazila_id,
				dataType:"json",

                success: function(data) {


                        $('#shipping_upazila').empty();
                        $('#shipping_upazila').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data,function(index,upazilabj){
                         $('#shipping_upazila').append('<option value="' + upazilabj.id + '">'+upazilabj.name+'</option>');
                       });
                }
            });
        });
    });
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
                url: "{{ route('get.order.data') }}",

                success: function(data) {


                    $('#orderdata').html(data);

                }
            });

});

</script>

<script>
    var myVar;
    function myUpdateOrder(el) {


        myVar = setTimeout(function(){

            $.post('{{ route('product.order.update') }}', {_token: '{{ csrf_token() }}', quantity: el.value, rowid:el.id },
            function(data) {
				$('#orderdata').html(data);
                if (data) {
                    toastr.success("Product Quantity Changed successfully");
                }
            });
			toastr.success("Product Quantity Changed successfully");
        }, 1000);
    }

    myUpdateOrder();


</script>

<script>

// $(document).ready(function() {
// $('#orderdelete').on('click', function(){



// $.ajax({
// type:'GET',
// url:"{{ route('product.add.cart') }}",
// data: $('#option-choice-form').serializeArray(),
// success: function (data) {
//     console.log(data);
//     document.getElementById('cartdatacount').innerHTML =data.quantity;
//         document.getElementById('product_price').innerHTML =data.price;

// }
// });


// });
// });
</script>


<script>
    $(document).ready(function() {
        $('#user_country').click(function(params) {
            var country_id = $(this).val();


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: "{{ url('/user/division/name') }}/" +country_id,
				dataType:"json",

                success: function(data) {


                        $('#user_division').empty();
                        $('#user_division').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data,function(index,divisionobj){
                         $('#user_division').append('<option value="' + divisionobj.id + '">'+divisionobj.name+'</option>');
                       });
                }

            }
         });
     } else {
        // alert('danger');
     }


        });

    });
</script>

<script>
    $(document).ready(function() {
        //var user_shipping_address = $('#user_upazila').val();
        $('#user_upazila').on('change', function () {
            var user_up_id = $(this).val();
            if (user_up_id) {
                $.ajax({
                    url:"{{ url('get/courier/by/upazila/id/') }}"+"/"+user_up_id,
                    type: 'get',
                    success:function(data){
                        $('#shipping_courier').empty();
                        $('#shipping_courier').append(data);
                    }
                });
            }
        })

        $('#shipping_upazila').on('change', function () {
            var ship_up_id = $(this).val();
            if (ship_up_id) {
                $.ajax({
                    url:"{{ url('get/courier/by/upazila/id/') }}"+"/"+ship_up_id,
                    type: 'get',
                    success:function(data){
                        $('#shipping_courier').empty();
                        $('#shipping_courier').append(data);
                    }
                });
            }
        })
    });
</script>

@endsection
