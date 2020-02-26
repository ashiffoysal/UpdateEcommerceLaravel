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
                            <h4 class="panel-title"><i class="fas fa-luggage-cart"></i>Payment Method</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <h4 class="panel-title"><i class="fas fa-luggage-cart"></i>Total:100000</h4>
                        </div>
                    </div>

                </div>
                <div class="panel-body">
                    <form action="{{url('mobile/order/traking/submit')}}" method="GET">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <input type="radio" name="payment_method" class="form-control-plaintext"
                                    placeholder=" Please Enter Your orderId">
                            </div>
                            <label for="staticEmail" class="col-sm-6 col-form-label">Cash On Delevery</label>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <input type="radio" name="payment_method" class="form-control-plaintext"
                                    placeholder=" Please Enter Your orderId">
                            </div>
                            <label for="staticEmail" class="col-sm-2 col-form-label">Paypal</label>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-2">
                                <input type="radio" name="payment_method" class="form-control-plaintext"
                                    placeholder=" Please Enter Your orderId">
                            </div>
                            <label for="staticEmail" class="col-sm-2 col-form-label">Stripe</label>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-2">
                                <input type="radio" name="payment_method" class="form-control-plaintext"
                                    placeholder=" Please Enter Your orderId">
                            </div>
                            <label for="staticEmail" class="col-sm-5 col-form-label">SSL Commercez</label>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10 text-center">
                            <a href="{{ url('product/orderhistory') }}" class="btn btn-info">back</a>
                                <button type="submit" class="btn btn-primary">Payment</button>
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
