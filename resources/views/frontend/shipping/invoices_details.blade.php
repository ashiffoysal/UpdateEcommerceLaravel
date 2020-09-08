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
                        <div class="ps-section__left">
                            <aside class="ps-widget--account-dashboard">
                                <div class="ps-widget__header"><img src="{{asset('/public/frontend')}}/img/users/3.jpg" alt="">
                                    <figure>
                                        <figcaption>Hello</figcaption>
                                        <p><a href="#">username@gmail.com</a></p>
                                    </figure>
                                </div>
                                <div class="ps-widget__content">
                                    <ul>
                                        <li><a href="#"><i class="icon-user"></i> Account Information</a></li>
                                        <li><a href="#"><i class="icon-alarm-ringing"></i> Notifications</a></li>
                                        <li class="active"><a href="#"><i class="icon-papers"></i> Invoices</a></li>
                                        <li><a href="#"><i class="icon-map-marker"></i> Address</a></li>
                                        <li><a href="#"><i class="icon-store"></i> Recent Viewed Product</a></li>
                                        <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                        <li><a href="#"><i class="icon-power-switch"></i>Logout</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ps-section__right">
                            <div class="ps-section--account-setting">
                                <div class="ps-section__header">
                                    <h3>Invoice #500884010 -<strong>Successful delivery</strong></h3>
                                </div>
                                <div class="ps-section__content">
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <figure class="ps-block--invoice">
                                                <figcaption>Address</figcaption>
                                                <div class="ps-block__content"><strong>John Walker</strong>
                                                    <p>Address: 3481 Poe Lane, Westphalia, Kansas</p>
                                                    <p>Phone: 913-489-1853</p>
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
                                                    <td>
                                                        <div class="ps-product--cart">
                                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('/public/frontend')}}/img/products/shop/5.jpg" alt=""></a></div>
                                                            <div class="ps-product__content"><a href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                                                <p>Sold By:<strong> YOUNG SHOP</strong></p>
                                                            </div>
                                                        </div>
                                                    </td>
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