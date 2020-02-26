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
			<h1 class="title">Payment</h1>
		</header>
		<!-- //End Bar Nav -->
		<div class="content">
      <div class="container">
			<!-- //Begin Main Content -->
								<div class="row">
										<div class="panel panel-default">
											<div class="panel-heading">
												<div class="row">
														<div class="col-md-6">
																<p>#orderID: {{$orderPlace->order_id}}</p>
																<p>Total:৳ {{$orderPlace->total_price}}</p>
														</div>
														<div class="col-md-6 text-right">

														</div>
												</div>
											</div>
											<div class="panel-body">
												<p>(Please checked any method)</p>
											</br>
												<form action="{{route('payment.submit')}}" method="post">
													@csrf
														<input type="hidden" name="order_id" value="{{$orderPlace->order_id}}">
														<input type="hidden" name="payment_secure_id" value="{{$orderPlace->payment_secure_id}}">

															<div class="form-group row">
														    <div class="col-sm-2">
														      <input type="radio" class="form-control-plaintext" id="pay_method" name="payment_method_id" value="2">
														    </div>
																<label for="staticEmail" class="col-sm-2 col-form-label" >Stripe</label>
														  </div>

															<div class="form-group row">
														    <div class="col-sm-2">
														      <input type="radio" class="form-control-plaintext" id="pay_method" name="payment_method_id" value="3">
														    </div>
																  <label for="staticEmail" class="col-sm-2 col-form-label">Paypal</label>
														  </div>

															<div class="form-group row">
														    <div class="col-sm-2">
														      <input type="radio" class="form-control-plaintext" id="pay_method" name="payment_method_id" value="4">
														    </div>
																<label for="staticEmail" class="col-sm-5 col-form-label">SSL Commercez</label>
														  </div>

														  <div class="form-group row">
														    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
														    <div class="col-sm-10 text-center">

														      <button type="submit" class="btn btn-primary">Confirm Payment</button>
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
