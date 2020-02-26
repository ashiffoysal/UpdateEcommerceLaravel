@extends('mobile.extra_master')
@section('page_content')

<!-- Begin Bar Nav -->
<header class="bar bar-nav ">
	<a class="btn btn-link btn-nav pull-left" href="{{ URL::previous() }}">
		<span class="icon icon-left-nav"></span>
	</a>
	<a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
		<span class="icon icon-bars"></span>
	</a>
	<h1 class="title">CHECKOUT</h1>
</header>
<!-- //End Bar Nav -->
<div class="content">

	<!-- //Begin Main Content -->
	<div class="container page-sitemap">
		<div class="row">
			<div class="so-onepagecheckout " style="padding: 30px 15px">
				<div class="col-left">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
						</div>
						<div class="panel-body">
							<fieldset id="account">
								<div class="form-group required">
									<label for="input-payment-firstname" class="control-label">Name</label>
									<input type="text" class="form-control" id="input-payment-firstname" value="{{Auth::user()->username}}" name="firstname" disabled>
								</div>

								<div class="form-group required">
									<label for="input-payment-email" class="control-label">E-Mail</label>
									<input type="text" class="form-control" id="input-payment-email" value="{{Auth::user()->email}}" name="email" disabled>
								</div>
								<div class="form-group required">
									<label for="input-payment-telephone" class="control-label">Phone</label>
									<input type="text" class="form-control" id="input-payment-telephone" value="{{Auth::user()->phone}}" name="telephone" disabled>
								</div>

							</fieldset>
						</div>
					</div>


					<!-- checkout from area start -->
					<form action="{{route('order.place')}}" method="post">
						@csrf
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><i class="fa fa-book"></i> Your Address</h4>
							</div>
							<div class="panel-body">
								<fieldset id="address" class="required">


									<div class="form-group required">
										<label for="input-payment-address-1" class="control-label">Address</label>
										<input type="hidden" name="user_id" value="{{Auth::user()->id}}" placeholder="Address" id="input-payment-address-1" class="form-control">
										<input type="text" name="user_address" value="@if(isset($useraddress->user_address)){{$useraddress->user_address}}@else {{ old('user_address') }} @endif" placeholder="Address*" id="input-payment-address-1" class="form-control">
										@error('user_address')
										<div class="text-danger alert alert-danger">{{ $message }}</div>
										@enderror
									</div>



									<div class="form-group required">
										<label for="input-payment-city" class="control-label">Post Office</label>
										<input type="text" name="user_post_office" value="@if(isset($useraddress->user_post_office)){{$useraddress->user_post_office}}@else {{ old('user_post_office') }}@endif" placeholder="Post office *" id="input-payment-city" class="form-control">
										@error('user_post_office')
										<div class="text-danger alert alert-danger">{{ $message }}</div>
										@enderror
									</div>


									<div class="form-group required">
										<label for="input-payment-postcode" class="control-label">Post Code</label>
										<input type="text" name="user_postcode" value="@if(isset($useraddress->user_postcode)){{$useraddress->user_postcode}}@else {{ old('user_postcode') }}@endif" placeholder="Post Code *" id="input-payment-postcode" class="form-control">
										@error('user_postcode')
											<div class="text-danger alert alert-danger">{{ $message }}</div>
										@enderror
									</div>



									<div class="form-group required">
										<label for="input-payment-zone" class="control-label"> Country </label>
										<select name="user_country_id" id="user_country" class="form-control">
											<option value="" disabled selected> --- Please Select Your Country --- </option>
											@foreach(DB::table('countries')->get() as $country)
											<option value="{{$country->id}}" @if(isset($useraddress->user_country_id) == $country->id) selected @endif>{{$country->name}}</option>
											@endforeach
										</select>
										@error('user_country_id')
										<div class="text-danger alert alert-danger">{{ $message }}</div>
										@enderror
									</div>



									<div class="form-group required">
										<label for="input-payment-zone" class="control-label"> Division </label>
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
										<label for="input-payment-zone" class="control-label"> District </label>
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
										<label for="input-payment-zone" class="control-label"> Upazila/Thana </label>
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
										</select>
										@error('user_upazila_id')
										<div class="text-danger alert alert-danger">{{ $message }}</div>
										@enderror

									</div>


									<div class="clearfix"></div>
									<span>
										<input type="checkbox" id="is_shipping" checked="checked" value="1" name="is_shipping_address"> My delivery and billing addresses are the same.
									</span>
								</fieldset>

















								<fieldset id="shipping-address" style="display: none">

									<div class="panel-heading">
										<hr>
										<h4 class="panel-title"><i class="fa fa-book"></i> Shipping Address</h4>
									</div>
									<div class="panel-body">
										<fieldset id="address" class="required">




									<div class="form-group required">
										<label for="input-payment-city" class="control-label">Name :</label>
										<input type="hidden" name="shipping_user_id" value="{{Auth::user()->id}}" placeholder="Post office *" id="input-payment-city" class="form-control">
										<input type="text" name="shipping_name" value="{{ old('shipping_name') }}" placeholder="Post office *" id="input-payment-city" class="form-control">
										@error('shipping_name')
										<div class="text-danger alert alert-danger">{{ $message }}</div>
										@enderror
									</div>

									<div class="form-group required">
										<label for="input-payment-city" class="control-label">Phone :</label>
										<input type="text" name="shipping_phone" value="{{ old('shipping_phone') }}" placeholder="Post office *" id="input-payment-city" class="form-control">
										@error('shipping_phone')
										<div class="text-danger alert alert-danger">{{ $message }}</div>
										@enderror
									</div>




									<div class="form-group required">
										<label for="input-payment-city" class="control-label">Post Office</label>
										<input type="text" name="shipping_post_office" value="{{ old('shipping_post_office') }}" placeholder="Post office *" id="input-payment-city" class="form-control">
										@error('shipping_post_office')
										<div class="text-danger alert alert-danger">{{ $message }}</div>
										@enderror
									</div>


									<div class="form-group required">
										<label for="input-payment-postcode" class="control-label">Post Code</label>
										<input type="text" name="shipping_postcode" value="{{ old('shipping_postcode') }}" placeholder="Post Code *" id="input-payment-postcode" class="form-control">
										@error('shipping_postcode')
											<div class="text-danger alert alert-danger">{{ $message }}</div>
										@enderror
									</div>



									<div class="form-group required">
										<label for="input-payment-zone" class="control-label"> Country </label>
										<select name="shipping_country_id" id="shipping_country" class="form-control">
											<option value="" disabled selected> --- Please Select Your Country --- </option>
											@foreach(DB::table('countries')->get() as $country)
											<option value="{{$country->id}}" @if(isset($useraddress->user_country_id) == $country->id) selected @endif>{{$country->name}}</option>
											@endforeach
										</select>
										@error('shipping_country_id')
										<div class="text-danger alert alert-danger">{{ $message }}</div>
										@enderror
									</div>



									<div class="form-group required">
										<label for="input-payment-zone" class="control-label"> Division </label>
										<select name="shipping_division_id" id="shipping_division" class="form-control">
											<option disabled selected> --- Please Select Your Division --- </option>
											@foreach(DB::table('divisions')->get() as $division)
											@if(isset($useraddress->user_division_id))

											<option value="{{$division->id}}">{{$division->name}} </option>
											@endif
											@endforeach

										</select>
										@error('shipping_division_id')
										<div class="text-danger alert alert-danger">{{ $message }}</div>
										@enderror
									</div>





									<div class="form-group required">
										<label for="input-payment-zone" class="control-label"> District </label>
										<select name="shipping_district_id" id="shipping_district" class="form-control">
											<option disabled selected> --- Please Select Your District --- </option>
											@php
											$dis=DB::table('districts')->get();

											@endphp
											@foreach($dis as $district)
											@if(isset($useraddress->user_district_id))

											<option value="{{$district->id}}">{{$district->name}} </option>
											@endif

											@endforeach

										</select>
										@error('shipping_district_id')
										<div class="text-danger alert alert-danger">{{ $message }}</div>
										@enderror
									</div>

									<div class="form-group required">
										<label for="input-payment-zone" class="control-label"> Upazila/Thana </label>
										<select name="shipping_upazila_id" id="sipping_upazila" class="form-control">
											@php
											$upa=DB::table('upazilas')->get();
											@endphp
											@foreach($upa as $upazila)
											@if($useraddress)

											<option value="{{$upazila->id}}">{{$upazila->name}} </option>
											@endif
											@endforeach
										</select>
										@error('shipping_upazila_id')
										<div class="text-danger alert alert-danger">{{ $message }}</div>
										@enderror
										<input type="hidden" value="{{$order_id}}" name="order_id">
									</div>


										<div class="clearfix"></div>
							</fieldset>
























									</div>
							</div>
						</div>
						<div class="col-right">
							<div class="row">
								<div class="col-sm-12">
									<div class="panel panel-default">
										<div class="checkout-shipping-methods">
											<div class="panel-heading">
												<h4 class="panel-title"><i class="fa fa-truck"></i> Delivery Method</h4>
											</div>
											<div class="panel-body ">
												<p>Please select the preferred shipping method to use on this order.</p>

												<div class="form-group required">

													<select name="shipping_id" id="sipping_upazila" class="form-control">
														@php
														$upa=DB::table('upazilas')->get();
														@endphp
														@foreach($upa as $upazila)
														@if($useraddress)

														<option value="{{$upazila->id}}">{{$upazila->name}} </option>
														@endif
														@endforeach
													</select>

												</div>


											</div>
										</div>
										<div class="checkout-payment-methods">
											<div class="panel-heading">
												<h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
											</div>
											<div class="panel-body">
												<p>Please select the preferred payment method to use on this order.</p>

													<label>
														<input type="radio" value="1" checked="checked" name="payment_type">Cash On Delivery
													</label><br>
													<label>
														<input type="radio" value="2" name="payment_type">Online Payment
													</label>





											</div>
										</div>
									</div>



								</div>



								<div class="col-sm-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><i class="fa fa-ticket"></i> Do you Have a Coupon or Voucher?</h4>
										</div>
										<div class="panel-body ">
											<div class="form-group">



												<div class="input-group">
													<input type="hidden" name="order_id" value="{{$order_id}}" placeholder="Enter coupon code" id="input_order" class="form-control">
													<input type="text" class="form-control" id="input-coupon" placeholder="Enter your coupon here" value="" name="coupon">
													<span class="input-group-btn">
														<input type="button" class="btn btn-primary" onclick="cuponApply()" data-loading-text="Loading..." id="button-coupon" value="Apply Coupon">
													</span>
												</div>


											</div>

											<div class="form-group">
												<div class="input-group">
													<input type="text" class="form-control" id="input-voucher" placeholder="Enter your gift voucher code here" value="" name="voucher">
													<span class="input-group-btn">
														<input type="submit" class="btn btn-primary" data-loading-text="Loading..." id="button-voucher" value="Apply Voucher">
													</span> </div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
										</div>
										<div class="panel-body" id="cartdata">



										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
										</div>
										<div class="panel-body">
											<textarea rows="4" class="form-control" id="confirm_comment" name="comment"></textarea>
											<br>
											<label class="control-label" for="confirm_agree">
												<input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="privacy">
												<input type="hidden" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="agree">
												<span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label>
											<div class="buttons">
												<div class="pull-right">
													<input type="submit" class="btn btn-primary" id="button-confirm" value="Confirm Order">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- extra hidden field -->

						<input type="hidden" value="{{Cart::session(\Request::getClientIp(true))->getTotal()}}" name="total_price">
						<input type="hidden" value="{{ Cart::session(\Request::getClientIp(true))->getTotalQuantity() }}" name="total_quantity">


					</form>

					<!-- checkout from area end -->
				</div>
			</div>
		</div>
		@endsection
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


		<!-- showing shipping address field -->

		<script>
			$(document).ready(function() {
				$("#is_shipping").click(function() {

					if (this.checked) {
						$('#shipping-address').css('display', 'none');
					}
					if (!this.checked) {
						$('#shipping-address').css('display', 'block');
					}

				});
			});
		</script>

		<!-- get user division name in User Address field -->

<script>
        $(document).ready(function () {
            $('#user_country').click(function (params) {
                var country_id = $(this).val();


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'GET',
                    url: "{{ url('/user/division/name') }}/" + country_id,
                    dataType: "json",
                    success: function (data) {

                        $('#user_division').empty();
                        $('#user_division').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data, function (index, divisionobj) {
                            $('#user_division').append('<option value="' + divisionobj.id + '">' + divisionobj.name + '</option>');
                        });
                    }
                });
            });
        });
	</script>

	<!-- get user district name in User Address field -->

    <script>
        $(document).ready(function () {
            $('#user_division').click(function (params) {

				var division_id = $(this).val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'GET',
                    url: "{{ url('/user/district/name') }}/" + division_id,
                    dataType: "json",

                    success: function (data) {
                        console.log(data);
                        $('#user_district').empty();
                        $('#user_district').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data, function (index, districtbj) {
                            $('#user_district').append('<option value="' + districtbj.id + '">' + districtbj.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>


<!-- get user upazila name in User Address field -->

    <script>
        $(document).ready(function () {
            $('#user_district').click(function () {

				var upazila_id = $(this).val();


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'GET',
                    url: "{{ url('/user/upazila/name') }}/" + upazila_id,
                    dataType: "json",

                    success: function (data) {

                        console.log(data);
                        $('#user_upazila').empty();
                        $('#user_upazila').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data, function (index, upazilabj) {
                            $('#user_upazila').append('<option value="' + upazilabj.id + '">' + upazilabj.name + '</option>');
                        });
                    }
                });
            });
        });


</script>

<!-- Get All cart data in field -->

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


<!-- Apply cupon code in field -->

<script>
    function cuponApply() {

    var cuponvalue =document.getElementById('input-coupon').value;
    var ordervalue =document.getElementById('input_order').value;



    $.post('{{ route('mobile.cupon.apply') }}', {_token: '{{ csrf_token() }}',cuponvalue: cuponvalue, order:ordervalue},
            function(data) {
				getCuponValue(ordervalue);

                console.log(data);

                if(data.cuponalert){
                    toastr.success(data.cuponalert);
                };


            });

    }
</script>

<!-- Get cupon value in field -->
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
					$('#cartdata').html(data);
                }
            });

	}
	getCuponValue();
</script>


<!-- get division name in shipping field -->

<script>
        $(document).ready(function () {
            $('#shipping_country').click(function () {

				var country_id = $(this).val();



                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'GET',
                    url: "{{ url('/user/division/name') }}/" + country_id,
                    dataType: "json",

                    success: function (data) {


                        $('#shipping_division').empty();
                        $('#shipping_division').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data, function (index, upazilabj) {
                            $('#shipping_division').append('<option value="' + upazilabj.id + '">' + upazilabj.name + '</option>');
                        });
                    }
                });
            });
        });


</script>

<!-- get distract name in shipping field -->

<script>
        $(document).ready(function () {
            $('#shipping_division').click(function () {

				var dist_id = $(this).val();
				console.log(dist_id);



                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'GET',
                    url: "{{ url('/user/district/name') }}/" + dist_id,
                    dataType: "json",

                    success: function (data) {
						console.log(data);

                        $('#shipping_district').empty();
                        $('#shipping_district').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data, function (index, upazilabj) {
                            $('#shipping_district').append('<option value="' + upazilabj.id + '">' + upazilabj.name + '</option>');
                        });
                    }
                });
            });
        });


</script>

<!-- get upozila name in shipping field -->

<script>
        $(document).ready(function () {
            $('#shipping_district').click(function () {

				var upazilla_id = $(this).val();
				console.log(upazilla_id);



                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'GET',
                    url: "{{ url('/user/upazila/name') }}/" + upazilla_id,
                    dataType: "json",

                    success: function (data) {
						console.log(data);

                        $('#sipping_upazila').empty();
                        $('#sipping_upazila').append(' <option value="0">--Please Select Your Division--</option>');
                        $.each(data, function (index, upazilabj) {
                            $('#sipping_upazila').append('<option value="' + upazilabj.id + '">' + upazilabj.name + '</option>');
                        });
                    }
                });
            });
        });


</script>
