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
			<h1 class="title">Traking Result</h1>
		</header>
		<!-- //End Bar Nav -->
		<div class="content">
      <div class="container">
			<!-- //Begin Main Content -->
	@if($result)
							<div class="row">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><i class="fas fa-luggage-cart"></i>Your Tracking Information</h4>
										</div>
										<div class="panel-body">
											<div class="table-responsive">
												<table class="table table-bordered">
													<thead>
														<tr>
															<td class="text-center">OrderID</td>
															<td class="text-left">Quantity</td>
															<td class="text-right">Total price</td>
															<td class="text-right">Status</td>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="text-center">{{$result->orderid}}</td>
															<td class="text-left">{{$result->total_quantity}}</td>
															<td class="text-left">{{$result->total_price}}</td>
															<td class="text-right">
																@if($result->delevary==1)Pending
																@elseif($result->delevary==4) On Process
																@elseif($result->delevary==2)On Delevery
																@elseif($result->delevary==3)Delevered
																@else
																Rejected
																@endif
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
		@else
		<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title"><i class="fas fa-luggage-cart"></i>Your Tracking Information</h4>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<td class="text-center"><span class="btn-danger">Your Order Id DoesNot Match...Please Try Again!!<span></td>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
		@endif
								<!--  -->
								<div class="row">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><i class="fas fa-luggage-cart"></i>Track your Order Product</h4>
											</div>
											<div class="panel-body">
												<form action="{{url('mobile/order/traking/submit')}}" method="GET">
													@csrf
														  <div class="form-group row">
														    <label for="staticEmail" class="col-sm-3 col-form-label">OrderID:</label>
														    <div class="col-sm-9">
														      <input type="text" name="orderid" class="form-control-plaintext" placeholder=" Please Enter Your orderId">
														    </div>
														  </div>
														  <div class="form-group row">
														    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
														    <div class="col-sm-10 text-center">

														      <button type="submit" class="btn btn-primary">Track</button>

														    </div>
														  </div>
												</form>
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
