@extends('layouts.websiteapp')
@section('content')
<style>

.table {
    display: table;
    table-layout:fixed;
    width: 100%;
}
.tableCell {
    display: table-cell;
    text-align: center;
}
.bulletWrap { position: relative; }
.bulletWrap .before, .bulletWrap .after {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    top: 50%;
    height: 4px;
    background: #535353;
    width: 100%;
    z-index: -1;
}
.bulletWrap .after { width:50%; background: red; }
.slide a {
    width: 76px;
    height: 76px;
    background: #1c1c1c;
    color: #ffffff;
    display: inline-block;
    border-radius: 100%;
    border: 4px solid #535353;
    transition: 0.3s all ease;
    position: relative;
}
.slide a.active, .slide a:hover {
    background: #e23a18;
    border-color: #e23a18;
}
.slide a i {
    font-size: 35px;
    line-height: 76px;
}

</style>
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
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="bulletWrap">
                                    <div class="before"></div>
                                    <div class="after"></div>
                                    <div class="bulletTrack table">
                                        @if($orderPlace->delevary==0)
                                             <style>
                                            .bulletWrap .after {
                                                    width: 10%;
                                                    background: red;
                                                }
                                        </style>
                                        <div class="slide tableCell">
                                            <a class="active" href=""><i class="fa fa-check"></i></a>
                                            <p>Order</p>
                                        </div>

                                        <div class="slide tableCell">
                                            <a href=""><i class="fa ">2</i></a>
                                            <p>On review</p>
                                        </div>
                                        <div class="slide tableCell">
                                            <a class="" href=""><i class="fa">3</i></a>
                                            <p>On Delevery</p>
                                        </div>
                                        <div class="slide tableCell">
                                            <a href=""><i class="fa">4</i></a>
                                            <p>Delivered</p>
                                        </div>
                                        @elseif($orderPlace->delevary==1)
                                        <style>
                                            .bulletWrap .after{
                                                    width: 0%;
                                                    background: red;
                                                }
                                        </style>
                                        <div class="slide tableCell">
                                            <a class="active" href=""><i class="fa fa-check"></i></a>
                                            <p>Order</p>
                                        </div>

                                        <div class="slide tableCell">
                                            <a href=""><i class="fa ">2</i></a>
                                            <p>On review</p>
                                        </div>
                                        <div class="slide tableCell">
                                            <a class="" href=""><i class="fa">3</i></a>
                                            <p>On Delevery</p>
                                        </div>
                                        <div class="slide tableCell">
                                            <a href=""><i class="fa">4</i></a>
                                            <p>Delivered</p>
                                        </div>
                                        @elseif($orderPlace->delevary==2)
                                        <style>
                                            .bulletWrap .after {
                                                    width: 25%;
                                                    background: red;
                                                }
                                        </style>
                                             <div class="slide tableCell">
                                            <a class="active" href=""><i class="fa fa-check">1</i></a>
                                            <p>Order</p>
                                        </div>

                                        <div class="slide tableCell">
                                            <a href="active"><i class="fa fa-check"></i></a>
                                            <p>On review</p>
                                        </div>
                                        <div class="slide tableCell">
                                            <a class="" href=""><i class="fa">3</i></a>
                                            <p>On Delevery</p>
                                        </div>
                                        <div class="slide tableCell">
                                            <a href=""><i class="fa">4</i></a>
                                            <p>Delivered</p>
                                        </div>
                                        @elseif($orderPlace->delevary==3)
                                          <style>
                                            .bulletWrap .after {
                                                    width: 65%;
                                                    background: red;
                                                }
                                        </style>
                                        <div class="slide tableCell">
                                            <a class="active" href=""><i class="fa fa-check"></i></a>
                                            <p>Order</p>
                                        </div>

                                        <div class="slide tableCell">
                                            <a class="active"><i class="fa fa-check"></i></a>
                                            <p>On review</p>
                                        </div>
                                        <div class="slide tableCell">
                                            <a class="active" href=""><i class="fa fa-check"></i></a>
                                            <p>On Delevery</p>
                                        </div>
                                        <div class="slide tableCell">
                                            <a href=""><i class="fa">4</i></a>
                                            <p>Delivered</p>
                                        </div>
                                        @elseif($orderPlace->delevary==4)
                                          <style>
                                            .bulletWrap .after {
                                                    width: 100%;
                                                    background: red;
                                                }
                                        </style>
                                        <div class="slide tableCell">
                                            <a class="active" href=""><i class="fa fa-check"></i></a>
                                            <p>Order</p>
                                        </div>

                                        <div class="slide tableCell">
                                            <a href="active"><i class="fa fa-check"></i></a>
                                            <p>On review</p>
                                        </div>
                                        <div class="slide tableCell">
                                            <a class="active" href=""><i class="fa fa-check"></i></a>
                                            <p>On Delevery</p>
                                        </div>
                                        <div class="slide tableCell">
                                            <a href="active"><i class="fa fa-check"></i></a>
                                            <p>Delivered</p>
                                        </div>
                                        @endif
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-section__right mt-12">
                            <div class="ps-section--account-setting">
                                <div class="ps-section__header">
                                    
                                    <h3>Invoice #{{$orderPlace->order_id}} -<strong>Successful delivery</strong></h3>
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
                                                <p>Payment Method: 
                                                        @if($orderPlace->payment_method_id == Null)
                                                            Cash on Delevery
                                                        @elseif($orderPlace->payment_method_id == 2)
                                                            Pay On Stripe
                                                        @elseif($orderPlace->payment_method_id == 4)
                                                            Pay on Paypal
                                                        @endif
                                                    </p>
                                                </div>
                                            </figure>
                                        </div>

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
                                                <th>Return</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cartdata->products as $row)

                                            <tr>
                                                <td>
                                                    <div class="ps-product--cart">
                                                        <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('public/uploads/products/thumbnail/productdetails')}}/{{$row->thumbnail_img}}" alt=""></a></div>
                                                        <div class="ps-product__content"><a href="#">{{$row->name}}</a>
                                                            @if($row->colors)
                                                            <p>Color:<strong class="product-color" style="background: {{$row->colors}};"></strong></p>
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


                                                        </div>
                                                    </div>
                                                </td>

                                                <td><span><i>৳</i> {{$row->price}}</span></td>
                                                <td>{{$row->quantity}}</td>
                                                <td><span><i>৳</i> {{$row->price * $row->quantity}}</span></td>
                                                @if($row->return_product == 0)
                                                <td style="white-space: nowrap;" class="text-right">

                                                    <!-- <a class="btn btn-danger product_return" title="Return" data-toggle="tooltip" href="{{route('customar.product.return',[$orderPlace->order_id,$row->name,$row->id])}}" data-original-title="Return"><i class="fa fa-reply"></i></a> -->
                                                    <!-- <button class="btn btn-danger product_return" title="Return" data-toggle="tooltip" href="#" data-original-title="Return" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-reply"></i></button> -->
                                                    <button type="button" class="btn btn-danger product_return" title="Return" data-toggle="modal" data-target="#exampleModalCenter{{$row->id}}">
                                                        <i class="fa fa-reply"></i>
                                                    </button>
                                                </td>
                                                @else
                                                <td style="white-space: nowrap;" class="text-right">

                                                    <button class="btn btn-danger product_return" data-placement="right" id="invoice_detail_toltip" style="background: red;" data-toggle="tooltip" href="#" title="This product is returned.Witing for approval" data-original-title="Return"><i class="fa fa-reply"></i></button>
                                                </td>
                                                @endif


                                            </tr>

                                            <!-- modal area start -->

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content p-5">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Send Return Request</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form class="py-2" action="{{route('customar.product.return')}}" method="post">
                                                        <div class="modal-body">
                                                            
                                                                @csrf
                                                                <div class="form-group row">
                                                                    <label for="example-text-input" class="col-sm-3 col-form-label">Product Name *</label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control" type="text" value="{{$row->name}}" required="" disabled name="name">
                                                                        <input class="form-control" type="hidden" value="{{$row->name}}" required=""  name="name">
                                                                        <input class="form-control" type="hidden" value="{{$orderPlace->order_id}}" name="orderid">
                                                                        <input class="form-control" type="hidden" value="{{$row->id}}" required=""  name="id">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="example-text-input" class="col-sm-3 col-form-label">Product Price * </label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control" type="text" disabled value="{{$row->price}}" name="meta_author">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="example-text-input" class="col-sm-3 col-form-label">Order Code * </label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control" type="text" value="{{$orderPlace->order_id}}" disabled name="meta_author">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="example-text-input" class="col-sm-3 col-form-label">Refund Reason * </label>
                                                                    <div class="col-sm-9">
                                                                        <textarea class="form-control" name="refund_reason " rows="5"></textarea>
                                                                       
                                                                    </div>
                                                                </div>
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-orange" data-dismiss="modal">Close</button>
                                                            <button  type="submit" class="btn btn-orange">Send Request</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                            @if($coupon !=false)
                                            <tr>
                                                <td colspan="2"><span></span></td>
                                                <td class="text-right"><span><strong>Discount</strong></span></td>
                                                @if($coupon->discount_type == 1)
                                                <td><span><i>৳</i> {{$coupon->discount}}</span></td>
                                                @else
                                                <td><span> {{$coupon->discount}}<i>%</i></span></td>
                                                @endif

                                            </tr>
                                            @endif

                                            <tr>
                                                <td colspan="2"><span></span></td>

                                                <td class="text-right"><span><strong>Total</strong></span></td>

                                                <td><span><i>৳</i> {{$orderPlace->total_price}}</span></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            @if($orderPlace->is_paid == 0 && $orderPlace->payment_method_id !=NULL)
                            <!-- <div class="ps-section__footer d-inline"><a class="ps-btn ps-btn--sm" href="{{route('customar.invoice.show',auth()->user()->id)}}">Back to invoices</a></div> -->
                            <div class="ps-section__footer pull-right d-inline"><a class="ps-btn ps-btn--sm" href="{{route('order.payment',[$orderPlace->order_id,$orderPlace->payment_secure_id])}}">Pay Now</a></div>
                            @endif

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('public/frontend')}}/plugins/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#invoice_detail_toltip').tooltip('show');
            setTimeout(function() {
                $('#invoice_detail_toltip').tooltip('hide');
            }, 4000);
        });
    </script>

    @endsection