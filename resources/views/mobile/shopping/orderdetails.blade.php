@extends('mobile.extra_master')
@section('page_content')
<!-- Begin Bar Nav -->
		<header class="bar bar-nav ">
			<a class="btn btn-link btn-nav pull-left" href="#" onclick="history.go(-1); return false;">
				<span class="icon icon-left-nav"></span>
			</a>
			<a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
				<span class="icon icon-bars"></span>
			</a>
			<h1 class="title">Order History</h1>
		</header>
		<!-- //End Bar Nav -->
		<div class="content">
      <div class="container">
			<!-- //Begin Main Content -->
								<div class="row">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><i class="fas fa-luggage-cart"></i>#OrderId:{{$orderplaceid->order_id}}</h4>
											</div>
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<td class="text-center">#</td>
																<td class="text-left">Profuct Name</td>
																<td class="text-left">Profuct Sku</td>
																<td class="text-right">Qty</td>
																<td class="text-right">Price</td>
																<td class="text-right">Total</td>
															</tr>
														</thead>
														<tbody>
															@php
																$m_order_id=$orderplaceid->order_id;
																$allproduct=App\ProductStorage::where('order_id',$m_order_id)->first();
															@endphp
															@foreach(json_decode($allproduct->product_details	) as $key => $new)
															<tr>
																<td>{{++$key}}</td>
																<td>{{Str::limit($new->name,20)}}</td>
																<td>{{$new->sku}}</td>
																<td>{{$new->quantity}}</td>
																<td>{{$new->price}}</td>
																<td>{{$new->price * $new->quantity}}</td>
															</tr>
															@endforeach

														</tbody>
														<tfoot>
															<tr>
																<td class="" colspan="5"><strong>Sub-Total:</strong>
																</td>
																<td class="">{{$orderplaceid->total_price}}</td>
															</tr>
															<tr>
																<td class="" colspan="5"><strong>Total:</strong>
																</td>
																<td class="">{{$orderplaceid->total_price}}</td>
															</tr>
														</tfoot>
													</table>
												</div>

											</div>
										</div>
									</div>
									<div class="row">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><i class="fas fa-luggage-cart"></i>Shipping Address Information</h4>
											</div>
											<div class="panel-body">

													<div class="col-md-4">
														@php
															$id=$orderplaceid->user_id;
														 $address=App\UserAddress::where('user_id',$id)->orderBy('id','DESC')->first();
														@endphp
														@if($address->is_shipping_address==1)
														<p>Name:{{$orderplaceid->usermain->username}}</p>
														<p>Phone:{{$orderplaceid->usermain->phone}}</p>
														<p>Email:{{$orderplaceid->usermain->email}}</p>
														@php
														$id=$orderplaceid->user_id;
														 $address=App\UserAddress::where('user_id',$id)->orderBy('id','DESC')->first();
														@endphp
														Address: {{$address->user_address}}
														<br>PostCode: {{$address->user_postcode}}

														@else

														@endif
													</div>

											</div>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //End Main Content -->

			</div>
			<!-- //End Footer Content -->
		</div>


@endsection
