@extends('layouts.websiteapp')
@section('main_content')
<!-- Main Container  -->
<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Order Infomation</a></li>
		</ul>

		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-md-9">
				<h2 class="title">Order Information</h2>

				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td colspan="2" class="text-left">Order Details</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 50%;" class="text-left"> <b>Order ID:</b> #{{$orderplaceid->order_id}}
								<br>
								<b>Date Added:</b> {{$orderplaceid->created_at}}</td>
							<td style="width: 50%;" class="text-left"> <b>Payment Method:</b>
								@if($orderplaceid->payment_method_id==1)Cash on Delevery
								@elseif($orderplaceid->payment_method_id==2) Stripe
								@elseif($orderplaceid->payment_method_id==3)PayPal
								@elseif($orderplaceid->payment_method_id==4)SSLCommercz
								@else
								@endif
								<br>
								<b>Shipping Method:</b></td>
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
							<td class="text-left">{{$orderplaceid->usermain->first_name}} {{$orderplaceid->usermain->last_name}}
								<br>{{$orderplaceid->usermain->phone}}
								@php
									$id=$orderplaceid->user_id;
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
							@if($address->is_shipping_address==1)
							<td class="text-left">{{$orderplaceid->usermain->first_name}} {{$orderplaceid->usermain->last_name}}
								<br>{{$orderplaceid->usermain->phone}}
								@php
									$id=$orderplaceid->user_id;
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
							$siporder_id=$orderplaceid->order_id;
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
								<td class="text-left">Product Name</td>

								<td class="text-right">Quantity</td>
								<td class="text-right">Price</td>
								<td class="text-right">Total</td>
								<td style="width: 20px;"></td>
							</tr>
						</thead>
						<tbody>
							@php
								$m_order_id=$orderplaceid->order_id;
								$allproduct=App\ProductStorage::where('order_id',$m_order_id)->first();
							@endphp
							@foreach(json_decode($allproduct->product_details	) as $new)
							<tr>
								<td class="text-left">{{$new->name}}</td>

								<td class="text-right">{{$new->quantity}}</td>
								<td class="text-right">{{$new->price}}</td>
								<td class="text-right">{{$new->quantity * $new->price}} </td>
								<!-- <td class="text-right">$123.20</td> -->
								<td style="white-space: nowrap;" class="text-right">

									<a class="btn btn-danger" title="" data-toggle="tooltip" href="" data-original-title="Return"><i class="fa fa-reply"></i></a>
								</td>
							</tr>
							@endforeach

						</tbody>
						<tfoot>
							<!-- <tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Sub-Total</b>
								</td>
								<td class="text-right">$101.00</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Flat Shipping Rate</b>
								</td>
								<td class="text-right">$5.00</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Eco Tax (-2.00)</b>
								</td>
								<td class="text-right">$6.00</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>VAT (20%)</b>
								</td>
								<td class="text-right">$21.20</td>
								<td></td>
							</tr> -->
							<tr>
								<td colspan="2"></td>
								<td class="text-right"><b>Total</b>
								</td>
								<td class="text-right">{{$orderplaceid->total_price}}</td>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>

				<div class="buttons clearfix">
					<div class="pull-right"><a class="btn btn-primary" href="{{url('/')}}">Continue</a>
					</div>
				</div>



			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			<aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
                <span id="close-sidebar" class="fa fa-times"></span>
                 <div class="module">
                     <h3 class="modtitle"><span>Account </span></h3>
                     <div class="module-content custom-border">
                       <ul class="list-box">

                         <li><a href="login.html">Login </a> / <a href="register.html">Register </a></li>
                         <li><a href="#">Forgotten Password </a></li>

                         <li><a href="#">My Account </a></li>

                         <li><a href="#">Address Book </a></li>
                         <li><a href="wishlist.html">Wish List </a></li>
                         <li><a href="#">Order History </a></li>
                         <li><a href="#">Downloads </a></li>
                         <li><a href="#">Recurring payments </a></li>
                         <li><a href="#">Reward Points </a></li>
                         <li><a href="#">Returns </a></li>
                         <li><a href="#">Transactions </a></li>
                         <li><a href="#">Newsletter </a></li>

                       </ul>
                     </div>
                   </div>
             </aside>
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->
@endsection
