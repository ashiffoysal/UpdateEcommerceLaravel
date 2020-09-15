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
                    <h1>Checkout Information</h1>
                </div>
                <div class="ps-section__content">
                    <form class="ps-form--checkout" action="do_action" method="post">
                        <div class="row">
                            <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12  ">

                                <!-- customar address area start -->
                                <div class="ps-form__billing-info">
                                    <h3 class="ps-form__heading">Billing Details</h3>


                                    <div class="form-group">
                                        <label>First Name<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Phone<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Address<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <textarea rows="5" name="address" class="form-control"></textarea>
                                        </div>
                                    </div>
                        
                         
                                    <div class="form-group">
                                        <div class="ps-checkbox">
                                            <input class="form-control" onclick="differentAddress()" type="checkbox" value="1" id="cb01">
                                            <label for="cb01">Ship to a different address?</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- customar address area end -->



                                <!-- Ship to a different address area start -->
                                <div class="ps-form__billing-info">
                                    <div id="diff_address" >
                                    <h3 class="ps-form__heading">Different Address</h3>


                                    <div class="form-group">
                                        <label>First Name<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Phone<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Address<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <textarea rows="5" name="address" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- Ship to a different address area end -->


                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12  ">
                                <div class="ps-form__total">
                                    <h3 class="ps-form__heading">Your Order</h3>
                                    <div class="content">
                                        <div class="ps-block--checkout-total">
                                            <div class="ps-block__header">
                                                <p>Product</p>
                                                <p>Total</p>
                                            </div>
                                            <div class="ps-block__content">
                                                <table class="table ps-block__products">
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="#"> MVMTH Classical Leather Watch In Black ×1</a>
                                                                <p>Sold By:<strong>YOUNG SHOP</strong></p>
                                                            </td>
                                                            <td>$57.99</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#"> Apple Macbook Retina Display 12” × 1</a>
                                                                <p>Sold By:<strong>ROBERT’S STORE</strong></p>
                                                            </td>
                                                            <td>$625.50</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <h4 class="ps-block__title">Subtotal <span>$863.49</span></h4>
                                                <div class="ps-block__shippings">
                                                    <figure>
                                                        <h4>YOUNG SHOP Shipping</h4>
                                                        <p>Free shipping</p><a href="#"> MVMTH Classical Leather Watch In Black ×1</a>
                                                    </figure>
                                                    <figure>
                                                        <h4>ROBERT’S STORE Shipping</h4>
                                                        <p>Free shipping</p><a href="#">Apple Macbook Retina Display 12” ×1</a>
                                                    </figure>
                                                </div>
                                                <h3>Total <span>$683.49</span></h3>
                                            </div>
                                        </div><a class="ps-btn ps-btn--fullwidth" href="checkout.html">Proceed to checkout</a>
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

<script>
    function differentAddress(){
        var getid = document.getElementById('diff_address');
        var checkedbox = document.getElementById('cb01');
        
    }
</script>