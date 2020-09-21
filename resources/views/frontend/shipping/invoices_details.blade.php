@extends('layouts.websiteapp')
@section('content')
<main class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="user-information.html">Account</a></li>
                    <li>Invoice Detail</li>
                </ul>
            </div>
        </div>
        <section class="ps-section--account">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                    @include('frontend.include.accounts.menu')
                    </div>
                    <div class="col-lg-8">
                        <div class="ps-section__right mt-12">
                            <div class="ps-section--account-setting">
                                <div class="ps-section__header">
                                    {{$orderPlace}}
                                    <h3>Invoice #500884010 -<strong>Successful delivery</strong></h3>
                                </div>
                                <div class="ps-section__content">
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <figure class="ps-block--invoice">
                                                <figcaption>Address</figcaption>
                                                <div class="ps-block__content"><strong>{{$address->name}}</strong>
                                                    <p>Address: {{$address->address}}</p>
                                                    <p>Phone: {{$address->phone}}</p>
                                                </div>
                                            </figure>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <figure class="ps-block--invoice">
                                                <figcaption>Shipping Fee</figcaption>
                                                <div class="ps-block__content">
                                                    <p>Shipping Fee: Free</p>
                                                </div>
                                            </figure>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <figure class="ps-block--invoice">
                                                <figcaption>Payment</figcaption>
                                                <div class="ps-block__content">
                                                    <p>Payment Method: Visa</p>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table ps-table">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @foreach($cartdata->products as $row)
                                                    <td>
                                                        <div class="ps-product--cart">
                                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/5.jpg" alt=""></a></div>
                                                            <div class="ps-product__content"><a href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                                                <p>Sold By:<strong> YOUNG SHOP</strong></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    @endforeach
                                                    <td><span><i>$</i> 32.99</span></td>
                                                    <td>1</td>
                                                    <td><span><i>$</i> 32.99</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="ps-product--cart">
                                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/6.jpg" alt=""></a></div>
                                                            <div class="ps-product__content"><a href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                                                <p>Sold By:<strong> YOUNG SHOP</strong></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span><i>$</i> 100.99</span></td>
                                                    <td>1</td>
                                                    <td><span><i>$</i> 100.99</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="ps-section__footer"><a class="ps-btn ps-btn--sm" href="#">Back to invoices</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="ps-newsletter">
            <div class="ps-container">
                <form class="ps-form--newsletter" action="do_action" method="post">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-form__left">
                                <h3>Newsletter</h3>
                                <p>Subcribe to get information about products and coupons</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-form__right">
                                <div class="form-group--nest">
                                    <input class="form-control" type="email" placeholder="Email address">
                                    <button class="ps-btn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    @endsection