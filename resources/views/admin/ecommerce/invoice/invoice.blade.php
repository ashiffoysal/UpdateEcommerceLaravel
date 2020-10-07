@extends('layouts.adminapp')
@section('admin_content')
<style>
	   address{ margin-bottom: 0rem;}
</style>
<div class="content_wrapper">
			<!--middle content wrapper-->
			<div class="middle_content_wrapper">
				<section class="invoice_area">
					<div class="panel mb-0">
						<div class="panel_header">
							<div class="panel_title text-left">
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
										@if($invoice->delevary==0)
										<option value="0" @if($invoice->delevary==0) selected @else @endif>Ordered</option>
										<option value="1" @if($invoice->delevary==1) selected @else @endif>Pending</option>
										<option value="4" @if($invoice->delevary==4) selected @else @endif>On Process</option>
										<option value="5" @if($invoice->delevary==5) selected @else @endif>Reject Product</option>
										@elseif($invoice->delevary==1)
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
						<div class="panel_body panel_invoice printableArea p-5">
							@php
								$logo=App\Logo::first();
							@endphp
							<div class="logo">
								<img src="{{asset('/'.$logo->front_logo)}}" class="img-fluid" alt="">
							</div>
							<div class="row">
								<div class="col-sm-9">
								@php
									$companyaddress=App\FooterOption::first();
								@endphp
									<address class=""><br>
										<abbr title="Phone">P: </abbr>{{$companyaddress->phone}}
									</address>
									<address class="">
										<a href="mailto:#">{{$companyaddress->email}}</a>
									</address>
									<address class="">
										<a href="mailto:#">{{$companyaddress->address}}</a>
									</address>
								</div>
								<div class="col-sm-3 item_right">
									<h3 class="mt-0 invoice text-center">Invoice</h3>
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
    											@php
    												$customeradd=App\CustomarAccount::where('userid',$invoice->user_id)->first();
    											@endphp
    											<td>
    												<span>{{$customeradd->name}}</span><br>
													<span>{{$customeradd->phone}}</span><br>
    												<span>{{$customeradd->address}}</span><br>
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
    									@php
    										$order_id=$invoice->order_id;
    										$checkout=App\Checkout::where('orderid',$order_id)->first();
    									@endphp
    									<tbody>
    										<tr>
    											@if($checkout->diffaddr_id==NULL)
    											@php
    												$customeradd=App\CustomarAccount::where('userid',$checkout->userid)->first();
    											@endphp
    											<td>
    												<span>{{$customeradd->name}}</span><br>
														<span>{{$customeradd->phone}}</span><br>
    												<span>{{$customeradd->address}}</span><br>
    											</td>
    											@else
    												@php
    												$customerdiff=App\DifferentAddress::where('userid',$checkout->userid)->first();
    												@endphp
    												<td>
	    												<span>{{$customerdiff->name}}</span><br>
															<span>{{$customerdiff->phone}}</span><br>
	    												<span>{{$customerdiff->address}}</span><br>
	    											</td>
    											@endif
    										</tr>
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
									<th class="text-center" style="width:120px;"></th>
									<th class="text-center" style="width:120px;">PRICE</th>
									
									<th class="text-center" style="width:20px;">QTY</th>
									<th class="text-right" style="width:120px;">UNIT PRICE</th>
									<th class="text-right" style="width:120px;">TOTAL</th>
								  </tr>
								</thead>
								<tbody>
									@php
										$allproducts=App\Checkout::where('orderid',$invoice->order_id)->first();
									@endphp
									@foreach($allproducts->products as $key => $row)
										  <tr>
												<td class="text-center">{{++$key}}</td>
												<td class="text-center">{{$row->name}}
													@if($row->colors)
                                                      <p>Color:<strong class="product-color" style="background: {{$row->colors}}; padding: 0px 7px;border-radius: 50%;"></strong></p>
                                                    @endif



                                                            @php
                

                                                                // store attibute name
                                                                $sizename = [];
                                                                $productdetails = App\Product::findOrFail($row->product_id);

                                                                foreach (json_decode($productdetails->choice_options) as $key => $choice) {

                                                                    $size = $choice->title; //this reaturn size,model
                                                                    $choicename = $choice->name; //this reaturn form name  
                                                                    array_push($sizename, $size);
                                                                }
                                                                $countsize = count($sizename);
                                                                
                                                                
                                                            @endphp

                                                                                                        

                                                        @if($countsize == 1)
                                                            @php
                                                                $sizenameone =$sizename[0];
                                                            @endphp
                                                            <p>{{$sizename[0]}}:<strong> {{$row->$sizenameone}}</strong></p>


                                                        @elseif($countsize == 2)
                                                            @php
                                                                $sizenameone =$sizename[0];
                                                                $sizenametwo =$sizename[1];
                                                            @endphp
                                                            <p>{{$sizename[0]}}:<strong> {{$row->$sizenameone}}</strong></p>
                                                            <p>{{$sizename[1]}}:<strong> {{$row->$sizenametwo}}</strong></p>


                                                        @elseif($countsize == 3)
                                                            @php
                                                                $sizenameone =$sizename[0];
                                                                $sizenametwo =$sizename[1];
                                                                $sizenamethree =$sizename[2];
                                                            @endphp
                                                            <p>{{$sizename[0]}}:<strong> {{$row->$sizenameone}}</strong></p>
                                                            <p>{{$sizename[1]}}:<strong> {{$row->$sizenametwo}}</strong></p>
                                                            <p>{{$sizename[2]}}:<strong> {{$row->$sizenamethree}}</strong></p>

                                                        @elseif($countsize == 4)

                                                            @php
                                                                $sizenameone =$sizename[0];
                                                                $sizenametwo =$sizename[1];
                                                                $sizenamethree =$sizename[2];
                                                                $sizenamefour =$sizename[3];
                                                            @endphp
                                                            <p>{{$sizename[0]}}:<strong> {{$row->$sizenameone}}</strong></p>
                                                            <p>{{$sizename[1]}}:<strong> {{$row->$sizenametwo}}</strong></p>
                                                            <p>{{$sizename[2]}}:<strong> {{$row->attributes->$sizenamethree}}</strong></p>
                                                            <p>{{$sizename[3]}}:<strong> {{$row->$sizenamefour}}</strong></p>

                                                        @endif



												</td>
												<td>{{$row->sku}}</td>
												<td></td>
												<td class="text-center"><p>৳ {{$row->price}}</p></td>
												<td>{{$row->quantity}}</td>
												<td class="text-right">{{$row->quantity * $row->price}}</td>
												<td class="text-right">৳ {{$row->quantity * $row->price}}</td>
										  </tr>
								 @endforeach

								</tbody>
								 <tfoot>
									  <tr>
											<th colspan="6" class="bdr">
											 <p class="font-normal p-size"><span style="color:#F80303;">Note:</span> Please send all of these items using wooden box package.</p></th>
											<th class="text-right pd-10">Sub Total</th>
										
											<th class="text-right pd-10">৳{{$invoice->total_price}} </th>
									  </tr>
									  <tr>
											<th class="text-right  pd-10 no-bd" colspan="7">Discount</th>
											@if($invoice->cupon_type==1)
											<th class="text-right  pd-10" style="color: tomato;">৳ ({{$invoice->cupon_value}})</th>
											@elseif($invoice->cupon_type==2)
											<th class="text-right  pd-10" style="color: tomato;">% ({{$invoice->cupon_value}})</th>
											@else
											<th class="text-right  pd-10" style="color: tomato;">(0.00)</th>
											@endif
									  </tr>
									  <tr>
											<th class="text-right  pd-10 no-bd" colspan="7">Shipping Cost</th>
											<th class="text-right  pd-10 no-bd">৳ (0.00)</th>
									  </tr>
									  <tr>
											<th colspan="5">Thank you for your business. Please remit the total amount due within 30 days.</th>
											<th class="text-right  pd-10" colspan="2">Total</th>
											<th class="text-right  pd-10 "><span class="vd_green font-sm font-normal" style="color: green;">৳ {{$invoice->total_price}}</span></th>
									  </tr>
								</tfoot>
							  </table>
								<div class="row">
									<div class="col-md-6">
										<h6>Mobile: 01730595105 Web: www.durbarit.com</h6>
									</div>
									<div class="col-md-6 text-right">
										<h6>Developed By: DurbarIt</h6>
									</div>
								</div>
						</div>
						<div class="row mt-3">
							<div class="col-sm-12 text-center">
									<button type="button" class="btn btn-info print"><i class="fa fa-print"></i> Print</button>
							</div>
						</div>

				</section>
			</div>
			<!--/middle content wrapper-->
		</div>
    @endsection
