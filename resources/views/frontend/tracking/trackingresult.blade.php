@extends('layouts.websiteapp')
@section('main_content')
<!-- Main Container  -->
<div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog block-popup-login">
        <a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle"
            data-dismiss="modal"></a>
        <div class="tt_popup_login"><strong>Sign in Or Register</strong></div>
        <div class="block-content">
            <div class=" col-reg registered-account">
                <div class="block-content">
                    <form class="form form-login" action="#" method="post" id="login-form">
                        <fieldset class="fieldset login" data-hasrequired="* Required Fields">
                            <div class="field email required email-input">
                                <div class="control">
                                    <input name="email" value="" autocomplete="off" id="email" type="email"
                                        class="input-text" title="Email" placeholder="E-Mail Address">
                                </div>
                            </div>
                            <div class="field password required pass-input">
                                <div class="control">
                                    <input name="password" type="password" autocomplete="off" class="input-text"
                                        id="pass" title="Password" placeholder="Password">
                                </div>
                            </div>

                            <div class=" form-group">
                                <label class="control-label">Login with your social account</label>
                                <div>

                                    <a href="#" class="btn btn-social-icon btn-sm btn-google-plus"><i
                                            class="fa fa-google fa-fw" aria-hidden="true"></i></a>

                                    <a href="#" class="btn btn-social-icon btn-sm btn-facebook"><i
                                            class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>

                                    <a href="#" class="btn btn-social-icon btn-sm btn-twitter"><i
                                            class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>

                                    <a href="#" class="btn btn-social-icon btn-sm btn-linkdin"><i
                                            class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>

                                </div>
                            </div>

                            <div class="secondary ft-link-p"><a class="action remind" href="#"><span>Forgot Your
                                        Password?</span></a></div>
                            <div class="actions-toolbar">
                                <div class="primary">
                                    <button type="submit" class="action login primary" name="send"
                                        id="send2"><span>Login</span></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-reg login-customer">
                <h2>NEW HERE?</h2>
                <p class="note-reg">Registration is free and easy!</p>
                <ul class="list-log">
                    <li>Faster checkout</li>
                    <li>Save multiple shipping addresses</li>
                    <li>View and track orders and more</li>
                </ul>
                <a class="btn-reg-popup" title="Register" href="#">Create an account</a>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
</div>


<!-- Main Container  -->
<div class="search-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-content">
                    <div class="row" id="search_result_product">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main_content">
    <div class="breadcrumbs">
        <div class="container">
            <div class="title-breadcrumb">
                Track Your Product
            </div>
            <ul class="breadcrumb-cate">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="">Tracking</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">

			<!--Middle Part Start-->
			<div class="col-md-12">
				<h2 class="title">Tracking Information</h2>
@if($trackingresult)
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td colspan="2" class="text-left">Tracking Details</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 50%;" class="text-left"> <b>Order ID:</b>#{{$trackingresult->order_id}}
								<br>
								<b>Date Added:</b> {{$trackingresult->created_at}}</td>
							<td style="width: 50%;" class="text-left"> <b>Payment Method:</b>
                @if($trackingresult->payment_method_id==1)Cash on Delevery
								@elseif($trackingresult->payment_method_id==2) Stripe
								@elseif($trackingresult->payment_method_id==3) PayPal
								@elseif($trackingresult->payment_method_id==4) SSLCommercz
								@else
								@endif
								<br>
								<b>Delevery Status:</b> @if($trackingresult->delevary==1)Pending
								@elseif($trackingresult->delevary==4) On Process
								@elseif($trackingresult->delevary==2)On Delevery
								@elseif($trackingresult->delevary==3)Delevered
								@else
								@endif</td>
						</tr>
					</tbody>
				</table>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td style="width: 50%; vertical-align: top;" class="text-left">Payment Address</td>
							<td style="width: 50%; vertical-align: top;" class="text-left">Shipping Address</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">{{$trackingresult->usermain->first_name}} {{$trackingresult->usermain->last_name}}
                @php
									$id=$trackingresult->user_id;
								  $address=App\UserAddress::where('user_id',$id)->orderBy('id','DESC')->first();
								@endphp
								<br>{{$address->user_address}}
								<br>{{$address->user_post_office}}
								<br>{{$address->user_postcode}}
                @php
									$country_id=$address->user_country_id;
									$division_id=$address->user_division_id;
									$district_id=$address->user_district_id;
									$upazila_id=$address->user_upazila_id;
									$country_name=DB::table('countries')->where('id',$country_id)->first();
									$division_name=DB::table('divisions')->where('id',$division_id)->first();
									$districts_name=DB::table('districts')->where('id',$district_id)->first();
									$upazila_name=DB::table('upazilas')->where('id',$upazila_id)->first();
								@endphp
								<br>{{$upazila_name->name}},{{$districts_name->name}},{{$division_name->name}},{{$country_name->name}}</td>
							@if($address->is_shipping_address==1)
							<td class="text-left">{{$trackingresult->usermain->first_name}} {{$trackingresult->usermain->last_name}}
								<br>{{$trackingresult->usermain->phone}}
								@php
									$id=$trackingresult->user_id;
								 $address=App\UserAddress::where('user_id',$id)->orderBy('id','DESC')->first();
								@endphp
								<br>{{$address->user_address}}
								<br>{{$address->user_post_office}}
								<br>{{$address->user_postcode}}
								@php
									$country_id=$address->user_country_id;
									$division_id=$address->user_division_id;
									$district_id=$address->user_district_id;
									$upazila_id=$address->user_upazila_id;

									$country_name=DB::table('countries')->where('id',$country_id)->first();
									$division_name=DB::table('divisions')->where('id',$division_id)->first();
									$districts_name=DB::table('districts')->where('id',$district_id)->first();
									$upazila_name=DB::table('upazilas')->where('id',$upazila_id)->first();
								@endphp
								<br>{{$upazila_name->name}},{{$districts_name->name}},{{$division_name->name}},{{$country_name->name}}
							</td>
							@else
							@php
							$siporder_id=$trackingresult->order_id;
							$shippingaddress=App\ShippingAddress::where('order_id',$siporder_id)->first();
							@endphp
							@if($shippingaddress)
								<td class="text-left">{{$shippingaddress->shipping_name}}
									<br>{{$shippingaddress->shipping_phone}}
									<br>{{$shippingaddress->shipping_address}}
									@php
										$country_id=$shippingaddress->user_country_id;
										$division_id=$shippingaddress->user_division_id;
										$district_id=$shippingaddress->user_district_id;
										$upazila_id=$shippingaddress->user_upazila_id;

										$country_name=DB::table('countries')->where('id',$country_id)->first();
										$division_name=DB::table('divisions')->where('id',$division_id)->first();
										$districts_name=DB::table('districts')->where('id',$district_id)->first();
										$upazila_name=DB::table('upazilas')->where('id',$upazila_id)->first();

									@endphp
									<br>New Delhi
									<br>{{$upazila_name->name}},{{$districts_name->name}},{{$division_name->name}},{{$country_name->name}}
								</td>
								@else

								@endif
							@endif
						</tr>
					</tbody>
				</table>

				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-left">OrderID</td>
								<td class="text-right">Quantity</td>
								<td class="text-right">Total Price</td>
								<td style="width: 20px;"></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">#{{$trackingresult->order_id}}</td>
								<td class="text-right">{{$trackingresult->total_quantity}}</td>
								<td class="text-right">{{$trackingresult->total_price}}</td>
								<td style="white-space: nowrap;" class="text-right">

								</td>
							</tr>

						</tbody>
						<tfoot>
							<tr>
								<td colspan="1"></td>
								<td class="text-right"><b>Total</b>
								</td>
								<td class="text-right">{{$trackingresult->total_price}}</td>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>

				<div class="buttons clearfix">
					<div class="pull-right"><a class="btn btn-primary" href="#">Continue</a>
					</div>
				</div>
@else
<p>Doesnot match Your Tracking Order number,Pleace try Again!!</p>
@endif



			</div>

		</div>
</div>


<!-- //Main Container -->
<!-- //Main Container -->

@endsection
@push('js')

@endpush
