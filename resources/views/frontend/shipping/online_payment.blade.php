@extends('layouts.websiteapp')
@section('content')
<div class="ps-page--simple">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop-default.html">Shop</a></li>
                <li>Checkout</li>
            </ul>
        </div>
    </div>
    <div class="ps-checkout ps-section--shopping">
        <div class="container">
            <div class="ps-section__header">
                <h1>Payment</h1>
            </div>
            <div class="ps-section__content">
                <form class="ps-form--checkout" action="{{route('checkout.data.create')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12  ">


                            <!-- payment method area start -->
                            <div class="ps-form__billing-info">
                                <div id="diff_address">
                                    <h3 class="ps-form__heading">Payment Methods</h3>

                                    <div class="form-group">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" name="payment_method" value="1" id="paypal">
                                            <label for="paypal">Payment with Paypal</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" name="payment_method" value="2" id="stripe">
                                            <label for="stripe">Payment with Stripe</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" name="payment_method" value="3" id="ssl">
                                            <label for="ssl">Payment with SSLCOMMERZ</label>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- payment  method area end from here -->




                        </div>
                        <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12  ">
                            <div class="ps-form__total">
                                <h3 class="ps-form__heading">Order Information</h3>
                                <div class="content">
                                    <div class="ps-block--checkout-total">
                                     
                                        <div class="ps-block__content">

                                            <h4 class="ps-block__title">Order Number :<span>567</span></h4>
                                            <h4 class="ps-block__title">Total Price :<span>567</span></h4>
                                            <h4 class="ps-block__title">Total Quentity :<span>567</span></h4>
                                        </div>
                                        <div class="ps-block__shippings">
                                        <h4 class="ps-block__title">Address:
                                                <small>
                                                    fgffdsg
                                                </small>
                                        </h4>
                                            </div>
                                    </div><button type="submit" class="ps-btn ps-btn--fullwidth">Proceed to checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('frontend.include.newsletter._subcribtion')
@endsection