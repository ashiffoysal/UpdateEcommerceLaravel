@extends('layouts.websiteapp')
@section('main_content')
<style>
.courier_message_modal {
    transform: translateY(400px);
}
.payment_btn {
    margin-top: 31px;
}
.payment_button_area {
    display: flex;
    flex-direction: row;
    justify-content: center;
}
</style>
<!-- Main Container  -->
<div class="container">
	<ul class="breadcrumb">
		<li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
		<li><a href="{{ route('product.cart.add') }}">Shopping Cart</a></li>
		<li><a href="#">Place Order</a></li>
	</ul>
	<div class="row">
		<div id="content" class="col-sm-12">
			<h1>Place Order</h1>
        <form action="{{ route('payment.make.payment') }}" method="post">
                @csrf
                <div class="hidden_input">
                    <input type="hidden" name="payment_secure_id" value="{{ $orderPlace->payment_secure_id }}">
                    <input type="hidden" name="order_id" value="{{ $orderPlace->order_id }}">
                </div>
				<div class="so-onepagecheckout layout1">
                    <div class="row">
                        <div class="col-right col-lg-5 col-md-6 col-sm-6 col-xs-12">
                            <section class="section-left">
                                <div class="ship-payment">
                                    <div class="checkout-content checkout-payment-methods">
                                        <h2 class="secondary-title"><i class="fa fa-credit-card"></i>Payment Method</h2>
                                        <div class="box-inner">
                                            <div class="radio">
                                                <label>
                                                  @php
                                                    $activation=App\Activation::where('id',1)->first();
                                                  @endphp
                                                  @if($activation->stripe==1)
                                                    <input type="radio" id="pay_method" name="payment_method_id" value="2" > Stripe <br>
                                                  @endif
                                                  @if($activation->paypal==1)
                                                    <input type="radio" id="pay_method" name="payment_method_id" value="3" > Paypal <br>
                                                  @endif
                                                  @if($activation->ssl_commercez==1)
                                                    <input type="radio" id="pay_method" name="payment_method_id" value="4" > SSL Commerce <br/>
                                                  @endif
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-right col-lg-7 col-md-7 col-sm-6 col-xs-12 offset-1">
                            <section class="section-left">
                                <div class="ship-payment">
                                    <div class="checkout-content checkout-payment-methods">
                                        <h2 class="secondary-title"><i class="fa fa-credit-card"></i>Your Bill</h2>
                                        <div class="box-inner">
                                            <h5>Order number: <strong>{{ $orderPlace->order_id }}</strong></h5>
                                            <h5>Address: <strong>{{ $address }}</strong></h5>
                                        </div>
                                        <div class="box-inner">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Grand Total</th>
                                                        <th>= {{ $orderPlace->total_price }} ৳</th>
                                                    </tr>
                                                    <tr>
                                                        <th> Total Payable</th>
                                                        <th>= {{ $orderPlace->total_price }} ৳</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="payment_button_area">
                        <button class="btn btn-success payment_btn" type="submit">Make Payment</button>
                    </div>
				</div>
			</form>
		</div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

@endsection
