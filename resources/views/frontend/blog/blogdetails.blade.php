@extends('layouts.websiteapp')
@section('content')

    <div class="ps-page--blog">
        <div class="ps-post--detail">
            <div class="ps-post__header">
                <div class="container">
                    <h1>{{$blogs->blog_title}}</h1>
                    <p>{{$blogs->month}} / {{$blogs->date}} By {{$blogs->creator_name}} /</p>
                </div>
            </div>
            <div class="container">
                <div class="ps-post__carousel">
                    <div class="ps-carousel--nav-inside second owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                        <img src="{{asset('public/uploads/blog/'.$blogs->image)}}" alt=""></div>
                </div>
                <div class="ps-post__content">
               
                    <p>{!! $blogs->description !!}</p>
                   
                </div>
                <div class="ps-post__content">
                    <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
            <div class="fb-comments" data-href="{{ Request::url() }}" data-width="100%" data-numposts="10"></div>
                </div>

                <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                    @foreach($allnewproduct as $product)
                     <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}"><img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt=""></a>
                      @php
                        $flashdealdetail = App\FlashDealDetail::where('product_id',$product->id)->where('status',1)->get();
                      @endphp
                       @if(count($flashdealdetail) > 0)
                        @foreach($flashdealdetail as $row)
                                   <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>
                                    @if($row ->discount_type == 1 )
                                     <div class="ps-product__badge">
                                        - ৳ {{$row->discount}}
                                     </div>
                                    @elseif($row ->discount_type == 2)
                                    <div class="ps-product__badge">
                                        -{{$row->discount}}%
                                         </div>
                                    @endif
                        @endforeach
                      @endif
                               


                                <!-- purchace function area start -->
                                <ul class="ps-product__actions">

                                   <li><a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-eye"></i></a></li>

                                  
                                    <li>
                                        @if($product->product_type==1)
                                        <a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}" data-toggle="tooltip" data-placement="top" data-placement="top" title="Quick View"><i class="icon-bag2"></i></a>
                                        @else
                                        <a class="quickview" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview" data-id="{{$product->id}}"><i class="icon-bag2"></i></a>
                                        @endif
                                    </li>
                                   

                                    <li>
                                        @if(Auth::guard('web')->check())
                                        <a class="mywishlist" data-id="{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a>
                                        @else
                                         <a href="{{url('customar/login')}}" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a>
                                        @endif
                                    </li>

                                    <li><a class="compare" data-id="{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>

                                </ul>
                                <!-- purchace funtion area end -->


                                
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">{{$product->product_name}}</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale"> 
                                 @if(count($flashdealdetail) > 0)
                                     @foreach($flashdealdetail as $row)
                                        <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>
                                        @if($row ->discount_type == 1 )
                                            ৳ {{$product->product_price - $row->discount}}
                                            <del>৳ {{$product->product_price}} </del>
                                        @elseif($row ->discount_type == 2)
                                        ৳ {{$product->product_price - $productdiscount}}
                                      
                                        
                                        @endif
                                    @endforeach
                                @else
                                ৳{{$product->product_price}}
                                @endif
                            </p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">{{$product->product_name}}</a>
                                    <p class="ps-product__price sale">
                                @if(count($flashdealdetail) > 0)
                                     @foreach($flashdealdetail as $row)
                                        <?php $productdiscount = ($product->product_price * $row->discount) / 100; ?>
                                        @if($row ->discount_type == 1 )
                                            ৳ {{$product->product_price - $row->discount}}
                                            <del>৳ {{$product->product_price}} </del>
                                        @elseif($row ->discount_type == 2)
                                        ৳ {{$product->product_price - $productdiscount}}
                                        @else
                                        {{$product->product_price}}
                                        @endif
                                    @endforeach
                                @else
                                ৳{{$product->product_price}}
                                @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </div>
  @endsection