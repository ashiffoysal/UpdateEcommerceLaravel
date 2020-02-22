@extends('layouts.adminapp')
@section('admin_content')
<div class="content_wrapper">
			<!--middle content wrapper-->
			<div class="middle_content_wrapper">
				<section class="invoice_area">
					<div class="panel mb-0">
						<div class="panel_header">
							<div class="panel_title text-center">
								<span><i class="fa fa-user"></i> Invoice</span>
							</div>
						</div>
						<br>
						<form action="{{url('admin/delevary/status')}}" method="POST">
							@csrf
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-4">
									<input type="hidden" name="orderplaceid" value="{{$invoice->id}}">
									<select class="form-control" name="delevary">
										@if($invoice->delevary==1)
										<option value="1" @if($invoice->delevary==1) selected @else @endif>Pending</option>
										<option value="4" @if($invoice->delevary==4) selected @else @endif>On Process</option>
										<option value="5" @if($invoice->delevary==5) selected @else @endif>Reject Product</option>
										@elseif($invoice->delevary==4)
											<option value="4" @if($invoice->delevary==4) selected @else @endif>On Process</option>
										<option value="2" @if($invoice->delevary==2) selected @else @endif>On Delevery</option>
										@elseif($invoice->delevary==2)
											<option value="2" @if($invoice->delevary==2) selected @else @endif>On Delevery</option>
										<option value="3" @if($invoice->delevary==3) selected @else @endif>Develared</option>
										@elseif($invoice->delevary==3)
										<option value="3" @if($invoice->delevary==3) selected @else @endif>Develared</option>
										@elseif($invoice->delevary==5)
										<option value="5" @if($invoice->delevary==5) selected @else @endif>Reject Product</option>
										<option value="4" @if($invoice->delevary==1) selected @else @endif>Pending</option>
										@endif
									</select>
								</div>
								<div class="col-md-2">
									<button type="submit" class="btn btn-success">Develary Status</button>
								</div>
							</div>
						</form>
						<br>
						<div class="panel_body panel_invoice print_element">
							<div class="logo">
								<img src="{{asset('public/adminpanel')}}/assets/images/logo.png" class="img-fluid" alt="">
							</div>
							<div class="row mt-2">
								<div class="col-sm-9">
									<address class="fs-13"> <br>
										<abbr title="Phone">P:</abbr> (123) 456-7890
									</address>
									<address class="fs-13">

										<a href="mailto:#">first.last@example.com</a>
									</address>
								</div>
								<div class="col-sm-3 item_right">
									<h3 class="mt-0 invoice text-right">Invoice</h3>
									<table class="table_invoice table table-bordered">
										<thead>
											<tr>
												<th>Invoice No.</th>
												<th>Date & Time</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td># {{$invoice->order_id}}</td>
												<td>{{$invoice->created_at}}</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="invoice_detail mt-5">
              <div class="row text-center">

                  <div class="col-md-6">
                    <table class="table table-borderless">
    									<thead>
    										<tr>
    											<th>Bill To:</th>
    										</tr>
    									</thead>
    									<tbody>
    										<tr>
    											<td>
    												<span>{{$invoice->usermain->username}}</span><br>
														<span>{{$invoice->usermain->phone}}</span><br>
    												<span>{{$invoice->usermain->email}}</span><br>
    											</td>
    										</tr>
    									</tbody>
    								</table>
                  </div>
                  <div class="col-md-6">
                    <table class="table table-borderless">
    									<thead>
    										<tr>

    											<th>Ship To:</th>

    										</tr>
    									</thead>
    									<tbody>
    										<tr>
													@php
														$userid=$invoice->user_id;
														$address=App\UserAddress::where('user_id',$userid)->orderBy('id','DESC')->first();
													@endphp

													@if($address->is_shipping_address == NULL)
    											<td>
														<span></span><br>
    												<span>{{$address->user_address}}</span><br>
    												<span>{{$address->user_post_office}}</span><br>
    												<span>{{$address->user_postcode}}</span><br>
													</td>
													@else
													<td>
														<span>{{$invoice->usermain->username}}</span><br>
														<span>{{$invoice->usermain->phone}}</span><br>
														<span>{{$invoice->usermain->email}}</span><br>
													</td>
													@endif
    										</tr>
    									</tbody>
    								</table>
                </div>
              </div>
								<!-- <table class="table table-borderless">
									<thead>
										<tr>
											<th>Bill To:</th>
											<th>Ship To:</th>

										</tr>
									</thead>
									<tbody>
										<tr>

											<td>
												<span>John Doe</span><br>
												<span>Incorporesano Ltd.</span><br>
												<span>(123) 456-7890</span>
											</td>

											<td><span>John Doe</span><br>
												<span>795 Folsom Ave, Suite 600</span><br>
												<span>San Francisco, CA 94107</span></td>

										</tr>
									</tbody>
								</table> -->
							</div>

							  <table class="table table-condensed table-striped">
								<thead>
								  <tr>
									<th class="text-center">#</th>
									<th>PRODUCT NAME</th>
									<th>PRODUCT SKU</th>
									<th class="text-center" style="width:20px;">QTY</th>
									<th class="text-right" style="width:120px;">UNIT PRICE</th>
									<th class="text-right" style="width:120px;">TOTAL</th>
								  </tr>
								</thead>
								<tbody>
									@php
										$cartid=$invoice->order_id;
										$allproduct=App\ProductStorage::where('order_id',$cartid)->first();
									@endphp

										@foreach (json_decode($allproduct->product_details) as $key => $data)
									  <tr>
											<td class="text-center">{{++$key}}</td>
											<td>{{$data->name}}</td>
											<td>{{$data->sku}}</td>
											<td class="text-center">{{$data->quantity}}</td>
											<td class="text-right">৳ {{$data->price}}</td>
											<td class="text-right">৳ {{$data->price * $data->quantity}}</td>
									  </tr>
										@endforeach

								</tbody>
								 <tfoot>
									  <tr>
											<th colspan="4" class="bdr">

											  <p class="font-normal p-size"><span style="color:#F80303;">Note:</span> Please send all of these items using wooden box package.</p></th>

											<th class="text-right pd-10">Sub Total</th>
											<th class="text-right pd-10">৳ {{$invoice->total_price}}</th>
									  </tr>

									  <tr>
											<th class="text-right  pd-10 no-bd" colspan="5">Discount</th>
											<th class="text-right  pd-10" style="color: tomato;">($100.00)</th>
									  </tr>


									  <tr>
											<th class="text-right  pd-10 no-bd" colspan="5">Shipping Cost</th>
											<th class="text-right  pd-10 no-bd">$50.00</th>
									  </tr>

									  <tr>
											<th colspan="3">Thank you for your business. Please remit the total amount due within 30 days.</th>
											<th class="text-right  pd-10" colspan="2">Total</th>
											<th class="text-right  pd-10 "><span class="vd_green font-sm font-normal" style="color: green;">$2399.99</span></th>
									  </tr>
								</tfoot>
							  </table>

						</div>
						<div class="row mt-3">
							<div class="col-sm-12 text-right">

									  <button class="btn vd_btn vd_bg-grey" type="button"><i class="fa fa-print append-icon"></i> Print</button>

									  <button class="btn vd_btn vd_bg-green " type="button"><i class="fa fa-download append-icon"></i> Save as PDF</button>
							</div>
						</div>
				</section>
			</div>
			<!--/middle content wrapper-->
		</div>
    @endsection
