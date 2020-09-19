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
                <form class="ps-form--checkout" action="{{route('checkout.data.create')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12  ">

                            <!-- customar address area start -->
                            <div class="ps-form__billing-info">
                                <h3 class="ps-form__heading">Billing Details</h3>


                                <div class="form-group">
                                    <label>First Name<sup>*</sup>
                                    </label>
                                    <div class="form-group__content">
                                        <input class="form-control" disabled value="{{$customar->name}}" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Phone<sup>*</sup>
                                    </label>
                                    <div class="form-group__content">
                                        <input class="form-control" disabled value="{{$customar->phone}}" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Address<sup>*</sup>
                                    </label>
                                    <div class="form-group__content">
                                        <textarea rows="5" disabled class="form-control">{{$customar->address}}</textarea>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="ps-checkbox">
                                        <input class="form-control" onclick="differentAddress()" type="checkbox" name="diff_addr" value="1" id="cb01">
                                        <label for="cb01">Ship to a different address?</label>
                                    </div>
                                </div>

                            </div>
                            <!-- customar address area end -->



                            <!-- Ship to a different address area start -->
                            <div class="ps-form__billing-info">
                                <div id="diff_address" style="display: none;">
                                    <h3 class="ps-form__heading">Different Address</h3>


                                    <div class="form-group">
                                        <label>First Name<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input class="form-control" name="name" type="text">
                                        </div>
                                        @error('name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Phone<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input class="form-control" name="phone" type="text">
                                        </div>
                                        @error('phone')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Address<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <textarea rows="5" name="address" name="address" class="form-control"></textarea>
                                        </div>
                                        @error('address')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" name="default_addr"  type="checkbox" value="1" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Make as Default Address
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Ship to a different address area end -->

                            <!-- payment type area start from here -->
                            <div class="ps-form__billing-info">
                                <div id="diff_address">
                                    <h3 class="ps-form__heading">Payment Types</h3>

                                    <div class="form-check">
                                        <input class="form-check-input" name="payment_cash"  type="checkbox" value="1" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Cash On Delivery
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" name="payment_online"  type="checkbox" value="2" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Online payment
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- payment type area end from here -->




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
                                                    @foreach($items as $row)
                                                    <tr>
                                                        <td><a href="{{url('product/')}}/{{$row->attributes->slug}}/{{$row->attributes->product_id}}"> {{$row->name}}</a>
                                                        <p>Quantity:<strong> {{$row->quantity}}</strong></p>
                                                        </td>
                                                        
                                                        <td>৳ {{$row->price}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <h4 class="ps-block__title">Subtotal <span>৳ {{Cart::session(\Request::getClientIp(true))->getSubTotal()}}</span></h4>
                                            <div class="ps-block__shippings">
                                                <figure>
                                                    <h4>Coupon Discount</h4>
                                                    <p>৳ 00.00</p>
                                                </figure>
                                                <figure>
                                                    <h4>Shipping Charge</h4>
                                                    <p>৳ 00.00</p>
                                                </figure>
                                            </div>
                                            <h3>Total <span>৳ {{Cart::session(\Request::getClientIp(true))->getTotal()}}</span></h3>
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
<script src="{{asset('public/frontend')}}/plugins/jquery.min.js"></script>
<script>
    function differentAddress() {
        var getid = document.getElementById('diff_address');
        var checkedbox = document.getElementById('cb01');

    }
</script>

<script>
    $(document).ready(function() {

        $("#cb01").click(function() {
            if (this.checked) {
                $('#diff_address').css('display', 'block');
            }
            if (!this.checked) {
                $('#diff_address').css('display', 'none');
            }
        });
    });
</script>