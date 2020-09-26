@extends('layouts.adminapp')
@section('admin_content')
<div class="content_wrapper">
    <!--middle content wrapper-->
    <!-- page content -->
    <div class="middle_content_wrapper">
        <section class="page_content">
            <!-- panel -->
            <div class="panel mb-0">
                <div class="panel_header">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel_title">
                                <span class="panel_icon"><i class="fas fa-border-all"></i></span><span>All Return Product of Order ID # {{$products->orderrid}}</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="panel_body">
                    <div class="table-responsive">
                        <table id="dataTableExample1" class="table table-bordered table-striped table-hover mb-2">
                            <thead>
                                <tr>
                                    <th>
                                        SL
                                    </th>
                                    <th># Order ID</th>
                                    <th>Customar Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Order Date</th>
                                    <th>manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                            @foreach(json_decode($products->products) as $row)

                                                <tr>
                                                    <td>
                                                        <div class="ps-product--cart">
                                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/uploads/products/thumbnail/productdetails')}}/{{$row->thumbnail_img}}" alt=""></a></div>
                                                            <div class="ps-product__content"><a href="product-default.html">{{$row->name}}</a>
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
                                                    <td style="white-space: nowrap;"  class="text-right">
    									                <a class="btn btn-danger product_return" title="Return" data-toggle="tooltip" href="{{route('customar.product.return',[$orderPlace->order_id,$row->name,$row->id])}}" data-original-title="Return"><i class="fa fa-reply"></i></a>
								                    </td>
                                                    
                                                </tr>
                                                @endforeach

                                                @if($coupon !=false)
                                                <tr>
                                                    <td colspan="2"><span></span></td>
                                                    <td  class="text-right"><span><strong>Discount</strong></span></td>
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

            </div>
        </section>
    </div>
</div>
<!-- add modal -->
@endsection