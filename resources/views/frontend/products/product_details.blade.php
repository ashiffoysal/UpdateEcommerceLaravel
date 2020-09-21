@extends('layouts.websiteapp') @section('content')
<style>
    #product .radio-type-button .option-content-box :hover {
            background: #ff5e00;
            border-color: #ff5e00;
            color: white;
            padding: 5px;
        }
        .checkbox-alphanumeric input:checked ~ label {
            transform: scale(1.1);
            border: 1px solid red;
        }
</style>
<style> 
 /* Rounded sliders */
.toggle-switch-slider.round {
  border-radius: 34px;
}

.toggle-switch-slider.round:before {
  border-radius: 50%;
}

.checkbox-alphanumeric::after,
.checkbox-alphanumeric::before {
  content: '';
  display: table;
}

.checkbox-alphanumeric::after {
  clear: both;
}

.checkbox-alphanumeric input {
  left: -9999px;
  position: absolute;
}

.checkbox-alphanumeric label {
  width: 2.25rem;
  height: 2.25rem;
  float: left;
  padding: 0.375rem 0;
  margin-right: 0.375rem;
  display: block;
  color: #818a91;
  font-size: 0.875rem;
  font-weight: 400;
  text-align: center;
  background: transparent;
  text-transform: uppercase;
  border: 1px solid #e6e6e6;
  border-radius: 2px;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
  transform: scale(0.95);
}

.checkbox-alphanumeric-circle label {
  border-radius: 100%;
}

.checkbox-alphanumeric label > img {
  max-width: 100%;
}

.checkbox-alphanumeric label:hover {
  cursor: pointer;
  border-color: #8193ff;
}

.checkbox-alphanumeric input:checked ~ label {
  transform: scale(1.1);
}

.checkbox-alphanumeric--style-1 label {
    width: auto;
    height: auto;
    text-align: center;
    line-height: 16px;
    padding-left: 12px;
    padding-right: 12px;
    border-radius: 2px;
}
.d-table.checkbox-alphanumeric--style-1 {
  width: 100%;
}

.d-table.checkbox-alphanumeric--style-1 label {
  width: 100%;
}

/* CUSTOM COLOR INPUT */
.checkbox-color::after,
.checkbox-color::before {
  content: '';
  display: table;
}

.checkbox-color::after {
  clear: both;
}

.checkbox-color input {
  left: -9999px;
  position: absolute;
}

.checkbox-color label {
  /* width: 2.25rem;
  height: 2.25rem; */
  width: 25px;
  height: 25px;
  float: left;
  padding: 0.375rem;
  margin-right: 0.375rem;
  display: block;
  font-size: 0.875rem;
  text-align: center;
  opacity: 0.7;
  border: 1px solid transparent;
  border-radius: 2px;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
  transform: scale(0.95);
}

.checkbox-color-circle label {
  border-radius: 100%;
}

.checkbox-color label:hover {
  cursor: pointer;
  opacity: 1;
}

.checkbox-color input:checked ~ label {
  transform: scale(1.1);
  opacity: 1;
  position: relative;
}

.checkbox-color input:checked ~ label:after {
  content: "\f00c";
  font-family: "FontAwesome";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: rgba(255, 255, 255, 0.7);
  font-size: 14px;
}
.list-inline checkbox-alphanumeric li{
    display: inline-block;
}
ul.list-inline.checkbox-color.mb-1 li {
    display: inline-block;
    margin-right: 10px;
}
    ul.list-inline.checkbox-alphanumeric.checkbox-alphanumeric--style-1.mb-2 li {
    display: inline-block;
    margin-right: 10px;
}
ul.list-inline.checkbox-alphanumeric.checkbox-alphanumeric--style-1.mb-2 {
        position: relative;
        left: -27px;
    }
    ul.list-inline.checkbox-color.mb-1 {
        position: relative;
        left: -10px;
    }
</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="ps-breadcrumb">
    <div class="ps-container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a>
            </li>
            <li><a href="shop-default.html">Garden & Kitchen</a>
            </li>
            <li><a href="shop-default.html">Furniture</a>
            </li>
            <li>Korea Long Sofa Fabric In Blue Navy Color</li>
        </ul>
    </div>
</div>
<div class="ps-page--product">
    <div class="ps-container">
        <div class="ps-page__container">
            <div class="ps-page__left">
                <div class="ps-product--detail ps-product--fullwidth">
                <form id="option-choice-form" class="option-choice-form">
                    <div class="ps-product__header">
                        <div class="ps-product__thumbnail" data-vertical="true">
                            <figure>
                                <div class="ps-wrapper">
                                    <div class="ps-product__gallery" data-arrow="true">
                                         @foreach (json_decode($productdetails->photos) as $key => $photo)
                                        <div class="item">
                                            <a href="{{url('storage/app/public/'.$photo) }}">
                                                <img src="{{url('storage/app/public/'.$photo) }}" alt="">
                                            </a>
                                        </div>
                                         @endforeach
                             
                                    </div>
                                </div>
                            </figure>
                            <div class="ps-product__variants" data-item="4" data-md="4" data-sm="4" data-arrow="false">
                                @foreach (json_decode($productdetails->photos) as $key => $photo)
                                <div class="item">
                                    <img src="{{url('storage/app/public/'.$photo) }}" alt="">
                                </div>
                                @endforeach
                            @if($productdetails->video !=NULL)
                                <div class="item">
                                    <div class="ps-video">
                                        <a href="{{$productdetails->video}}">
                                            <img src="{{asset('public/uploads/products/thumbnail/'.$productdetails->thumbnail_img)}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            @endif

                            </div>
                        </div>
                        <div class="ps-product__info">
                            <h1>{{$productdetails->product_name}}</h1>
                            <div class="ps-product__meta">
                                <!-- brand -->@php $brand = App\Brand::where('id',$productdetails->brand)->first(); @endphp @if($brand)
                                <p>Brand:<a href="">{{$productdetails->totalbrand->brand_name}}</a>
                                </p>@endif
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>(1 review)</span>
                                </div>
                            </div>
                            <h4 class="ps-product__price chosen_price" id="chosen_price">৳ {{ $productdetails->product_price}}</h4>
                            <div class="ps-product__desc">
                                <p>Status:<a>@if($productdetails->product_qty > 0)<strong class="ps-tag--in-stock"> In stock </strong> @else <strong class="ps-tag--out-stock"> Out of stock</strong>@endif</a>
                                </p>
                                <!--    <ul class="ps-list--dot">
                                        <li> Unrestrained and portable active stereo speaker</li>
                                        <li> Free from the confines of wires and chords</li>
                                        <li> 20 hours of portable capabilities</li>
                                        <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                        <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                    </ul> -->
                            </div>
                            <!-- color -->
                            <!-- end color -->
                            @if ($checkFlashDeal == 1)
                            <div class="ps-product__countdown">
                                <figure>
                                    <figcaption>Don't Miss Out! This promotion will expires in</figcaption>
                                    <ul class="ps-countdown" data-time="{{$countdowndate}}">
                                        <li><span class="days"></span>
                                            <p>Days</p>
                                        </li>
                                        <li><span class="hours"></span>
                                            <p>Hours</p>
                                        </li>
                                        <li><span class="minutes"></span>
                                            <p>Minutes</p>
                                        </li>
                                        <li><span class="seconds"></span>
                                            <p>Seconds</p>
                                        </li>
                                    </ul>
                                </figure>
                                <figure>
                                    <figcaption>Sold Items</figcaption>
                                    <div class="ps-product__progress-bar ps-progress" data-value="10">
                                        <div class="ps-progress__value"><span></span>
                                        </div>
                                        <p><b>20/85</b> Sold</p>
                                    </div>
                                </figure>
                            </div>
                            @endif





                            <!-- product type one area start -->
                            @if($productdetails->product_type==1)
                            <!-- custom choics physical product -->
                            <div class="col-md-12">
                                <div id="product">
                                    <div class="form-group required " style="display: block;">
                                        @if (count(json_decode($productdetails->colors)) > 0)
                                        <ul class="list-inline checkbox-color mb-1">
                                            <input type="hidden" name="id" value="188">
                                            <li> <span style="font-weight: 600;position: relative;bottom: 12px;text-transform: capitalize;">Color:</span>
                                            </li>
                                            @foreach (json_decode($productdetails->colors) as $key => $color)
                                            <li>
                                                <input type="radio" id="{{ $productdetails->id }}-color-{{ $key }}" name="color" value="{{ $color }}" @if($key==0) checked @endif>
                                                <label style="background: {{ $color }};" for="{{ $productdetails->id }}-color-{{ $key }}" data-toggle="tooltip" data-original-title="{{$color}}"></label>
                                            </li>
                                             @endforeach
                                        </ul>
                                        @endif
                                    </div>
                                </div>

                                <strong>
                                    <strong>
                                        <div class="col-md-12">
                                            <!--custom choicses  -->
                                            @foreach (json_decode($productdetails->choice_options) as $key => $choice)
                                            <div id="product">
                                                <div class="form-group required " style="display: block;">
                                                    <div id="input-option224">

                                                        <ul class="list-inline checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2">
                                                            <li style="font-weight: 600;position: relative;bottom: 12px;text-transform: capitalize;">{{ $choice->title }}:
                                                            </li>
                                                            @foreach ($choice->options as $key => $option)
                                                            <li>
                                                                <input type="radio" id="{{ $choice->name }}-{{ $option }}" name="{{$choice->name}}" value="{{$option}}" @if($key==0) checked @endif>
                                                                <label for="{{ $choice->name }}-{{ $option }}">{{$option}}</label>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                             </div>
                                              @endforeach
                                            <!-- end custom chics -->
                                         </div>
                                       </strong>
                                   </strong>
                            </div>
                            <!-- product type one area end -->


                            <!-- product type two area start -->
                            @elseif($productdetails->product_type==2)
                            <div class="ps-product__desc">

                                @if($productdetails->select_upload_type==1)
                                <p>Type:<a><strong class="ps-tag--in-stock"> File  </strong></a></p>
                                @elseif($productdetails->select_upload_type==2)
                                <p>Type:<a><strong class="ps-tag--in-stock">Link </strong></a></p>
                                @endif
                                 <!--   <ul class="ps-list--dot">
                                        <li> Unrestrained and portable active stereo speaker</li>
                                        <li> Free from the confines of wires and chords</li>
                                        <li> 20 hours of portable capabilities</li>
                                        <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                        <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                    </ul> -->
                            </div>
                            <!-- product type two area end -->

                            <!-- product type three area start -->
                            @elseif($productdetails->product_type==3)
                                <div class="ps-product__desc">
                                <p>License Type:<a>{{ $productdetails->license_type }}</a></p>
                              
                                   <ul class="ps-list--dot">
                                        <li> Unrestrained and portable active stereo speaker</li>
                                        <li> Free from the confines of wires and chords</li>
                                        <li> 20 hours of portable capabilities</li>
                                        <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                        <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                    </ul>
                            </div>
                            <!-- product type three area end -->

                            <!-- product type four area start -->
                            @elseif($productdetails->product_type==4)
                              <div class="col-md-12">
                                <div id="product">
                                    <div class="form-group required " style="display: block;">
                                        @if (count(json_decode($productdetails->colors)) > 0)
                                        <ul class="list-inline checkbox-color mb-1">



                                            <input type="hidden" name="product_id" value="{{$productdetails->id}}">
                                            <li> <span style="font-weight: 600;position: relative;bottom: 12px;text-transform: capitalize;">Color:</span>
                                            </li>
                                            
                                            @foreach (json_decode($productdetails->colors) as $key => $color)
                                            <li>
                                                <input type="radio" id="{{ $productdetails->id }}-color-{{ $key }}" name="color" value="{{ $color }}" @if($key==0) checked @endif>
                                                <label style="background: {{ $color }};" for="{{ $productdetails->id }}-color-{{ $key }}" data-toggle="tooltip" data-original-title="{{$color}}"></label>
                                            </li>
                                             @endforeach
                                        </ul>
                                        @endif
                                    </div>
                                </div>

                                <strong>
                                    <strong>
                                        <div class="col-md-12">
                                            <!--custom choicses  -->
                                            @foreach (json_decode($productdetails->choice_options) as $key => $choice)
                                            <div id="product">
                                                <div class="form-group required " style="display: block;">
                                                    <div id="input-option224">

                                                        <ul class="list-inline checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2">
                                                            <li style="font-weight: 600;position: relative;bottom: 12px;text-transform: capitalize;">{{ $choice->title }}:
                                                            </li>
                                                            @foreach ($choice->options as $key => $option)
                                                            <li>
                                                                <input type="radio" id="{{ $choice->name }}-{{ $option }}" name="{{$choice->name}}" value="{{$option}}" @if($key==0) checked @endif>
                                                                <label for="{{ $choice->name }}-{{ $option }}">{{$option}}</label>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                             </div>
                                              @endforeach
                                            <!-- end custom chics -->
                                         </div>
                                       </strong>
                                   </strong>
                            </div>
                            @endif
                            <!-- product four area end -->
                            <!-- custom choics physical product end-->

                            <!-- add to cart area start -->
                            <div class="ps-product__shopping">
                                <figure>
                                    <figcaption>Quantity</figcaption>
                                    <div class="form-group--number">
                                        <button class="up"><i class="fa fa-plus"></i>
                                        </button>
                                        <button class="down"><i class="fa fa-minus"></i>
                                        </button>
                                        <input name="quantity" id="quantity" class="form-control" type="number" value="1">
                                        <input name="product_id" type="hidden" value="{{$productdetails->id}}">
                                        <input type="hidden" id="product_chosen_price" value="{{$productdetails->product_price}}" name="product_price">
                                        <input type="hidden" id="product_chosen_sku" value="{{$productdetails->product_sku}}" name="product_sku">
                                    </div>

                                    
                                </figure><a class="ps-btn ps-btn--black" href="#" id="addtocart">Add to cart</a><a class="ps-btn" href="#">Buy Now</a>
                                <div class="ps-product__actions"><a href="#"><i class="icon-heart"></i></a><a href="#"><i class="icon-chart-bars"></i></a>
                                </div>
                            </div>
                            <!-- add to cart area end -->

                            <!-- sku area start -->
                            <div class="ps-product__specification">
                                <p><strong>SKU:</strong>{{$productdetails->product_sku}}</p>
                                <p class="categories"><strong> Categories:</strong><a href="#">{{$productdetails->category->cate_name}}</a>,<a href="#">@if($productdetails->subcate_id){{$productdetails->subcate->subcate_name}}@endif</a>
                                </p>
                               <!--  <p class="tags"><strong> Tags:</strong><a href="#">sofa</a>,<a href="#">sofa</a>
                                </p> -->
                            </div>
                            <div class="ps-product__sharing"><a class="facebook" href="#"><i class="fa fa-facebook"></i></a><a class="twitter" href="#"><i class="fa fa-twitter"></i></a><a class="google" href="#"><i class="fa fa-google-plus"></i></a><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a><a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </form>


                <!-- form area end -->













                    <div class="ps-product__content ps-tab-root">
                        <div class="ps-block--bought-toggether">
                            <h4>Frequently Bought Together</h4>
                            <div class="ps-block__content">
                                <div class="ps-block__items">
                                    <div class="ps-block__item">
                                        <div class="ps-product ps-product--simple">
                                            <div class="ps-product__thumbnail">
                                                <a href="product-default.html">
                                                    <img src="img/products/furniture/12.jpg" alt="">
                                                </a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a>
                                                    </li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>
                                                    </li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__container">
                                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                                    <p class="ps-product__price">$679.80</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-block__item">
                                        <div class="ps-product ps-product--simple">
                                            <div class="ps-product__thumbnail">
                                                <a href="product-default.html">
                                                    <img src="img/products/furniture/13.jpg" alt="">
                                                </a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a>
                                                    </li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>
                                                    </li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a>
                                                    </li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__container">
                                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Fabric Chair In Brown Color</a>
                                                    <p class="ps-product__price">$120.80</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-block__item ps-block__total">
                                        <p>Total Price:<strong> $1000.30</strong>
                                        </p><a class="ps-btn" href="#">Add All to cart</a><a class="ps-btn ps-btn--gray ps-btn--outline" href="#">Add All to whishlist</a>
                                    </div>
                                </div>
                                <div class="ps-block__footer">
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="product-bought-1" name="product-bought" checked>
                                        <label for="product-bought-1"><strong>This item: </strong> Korea Long Sofa Fabric In Blue Navy Color <span>$679.80</span>
                                        </label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="product-bought-2" name="product-bought" checked>
                                        <label for="product-bought-2">Fabric Chair In Brown Color <span>$120.80</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="ps-tab-list">
                            <li class="active"><a href="#tab-1">Description</a>
                            </li>
                            <li><a href="#tab-2">Specification</a>
                            </li>
                            <li><a href="#tab-3">Vendor</a>
                            </li>
                            <li><a href="#tab-4">Reviews (1)</a>
                            </li>
                            <li><a href="#tab-5">Questions and Answers</a>
                            </li>
                            <li><a href="#tab-6">More Offers</a>
                            </li>
                        </ul>
                        <div class="ps-tabs">
                            <div class="ps-tab active" id="tab-1">
                                <div class="ps-document">
                                    {!! $productdetails->product_description !!}
                                </div>
                            </div>
                            <div class="ps-tab" id="tab-2">
                                <div class="table-responsive">
                                    <table class="table table-bordered ps-table ps-table--specification">
                                        <tbody>

                                        <tr>
                                            <td>Color</td>
                                            <td>Black, Gray</td>
                                        </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="ps-tab" id="tab-3">
                                <h4>GoPro</h4>
                                <p>Digiworld US, New York’s no.1 online retailer was established in May 2012 with the aim and vision to become the one-stop shop for retail in New York with implementation of best practices both online</p><a href="#">More Products from gopro</a>
                            </div>
                            <div class="ps-tab" id="tab-4">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 ">
                                        <div class="ps-block--average-rating">
                                            <div class="ps-block__header">
                                                <h3>4.00</h3>
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>1 Review</span>
                                            </div>
                                            <div class="ps-block__star"><span>5 Star</span>
                                                <div class="ps-progress" data-value="100"><span></span>
                                                </div><span>100%</span>
                                            </div>
                                            <div class="ps-block__star"><span>4 Star</span>
                                                <div class="ps-progress" data-value="0"><span></span>
                                                </div><span>0</span>
                                            </div>
                                            <div class="ps-block__star"><span>3 Star</span>
                                                <div class="ps-progress" data-value="0"><span></span>
                                                </div><span>0</span>
                                            </div>
                                            <div class="ps-block__star"><span>2 Star</span>
                                                <div class="ps-progress" data-value="0"><span></span>
                                                </div><span>0</span>
                                            </div>
                                            <div class="ps-block__star"><span>1 Star</span>
                                                <div class="ps-progress" data-value="0"><span></span>
                                                </div><span>0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 ">
                                        <form class="ps-form--review" action="index.html" method="get">
                                            <h4>Submit Your Review</h4>
                                            <p>Your email address will not be published. Required fields are marked<sup>*</sup>
                                            </p>
                                            <div class="form-group form-group__rating">
                                                <label>Your rating of this product</label>
                                                <select class="ps-rating" data-read-only="false">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="6" placeholder="Write your review here"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  ">
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" placeholder="Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  ">
                                                    <div class="form-group">
                                                        <input class="form-control" type="email" placeholder="Your Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group submit">
                                                <button class="ps-btn">Submit Review</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-tab" id="tab-5">
                                <div class="ps-block--questions-answers">
                                    <h3>Questions and Answers</h3>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Have a question? Search for answer?">
                                    </div>
                                </div>
                            </div>
                            <div class="ps-tab active" id="tab-6">
                                <p>Sorry no more offers available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-page__right">
                <aside class="widget widget_product widget_features">
                    <p><i class="icon-network"></i> Shipping worldwide</p>
                    <p><i class="icon-3d-rotate"></i> Free 7-day return if eligible, so easy</p>
                    <p><i class="icon-receipt"></i> Supplier give bills for this product.</p>
                    <p><i class="icon-credit-card"></i> Pay online or when receiving goods</p>
                </aside>
                <aside class="widget widget_sell-on-site">
                    <p><i class="icon-store"></i> Sell on Martfury?<a href="#"> Register Now !</a>
                    </p>
                </aside>
                <aside class="widget widget_ads">
                    <a href="#">
                        <img src="img/ads/product-ads.png" alt="">
                    </a>
                </aside>
                @if($productdetails->brand)
                @php
                    $brand_id=$productdetails->brand;

                    $brandprduct=App\Product::where('brand',$brand_id)->orderBy('id','DESC')->limit(2)->get();
                @endphp
                <aside class="widget widget_same-brand">
                    <h3>Same Brand</h3>
                    <div class="widget__content">

                       @foreach($brandprduct as $product)
                        <div class="ps-product">
                            <div class="ps-product__thumbnail">
                                <a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">
                                    <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt="">
                                </a>
                                <div class="ps-product__badge">-5%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a>
                                    </li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a>
                                    </li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a>
                                    </li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
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
                                    <p class="ps-product__price sale">{{$product->product_price}}<del></del>
                                    </p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">{{$product->product_name}}</a>
                                    <p class="ps-product__price sale">{{$product->product_price}}<del></del>
                                    </p>
                                </div>
                            </div>
                        </div>
                     @endforeach

                    </div>
                </aside>
                @endif
            </div>
        </div>
        <div class="ps-section--default ps-customer-bought">
            <div class="ps-section__header">
                <h3>Customers who bought this item also bought</h3>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    @foreach($productbestsell as $product)
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail">
                                <a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">
                                    <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt="">
                                </a>
                                <div class="ps-product__badge">-37%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a>
                                    </li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a>
                                    </li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a>
                                    </li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
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
                                    <p class="ps-product__price sale">{{$product->product_price}}<del></del>
                                    </p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">{{$product->product_name}}</a>
                                    <p class="ps-product__price sale">{{$product->product_price}}<del></del>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        <div class="ps-section--default">
            <div class="ps-section__header">
                <h3>Related products</h3>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                   @foreach($relatedproduct as $product)
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">
                                    <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt="">
                                </a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a>
                                </li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a>
                                </li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a>
                                </li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
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
                                <p class="ps-product__price">{{$product->product_price}}</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}
                                ">{{$product->product_name}}</a>
                                <p class="ps-product__price">{{$product->product_price}}</p>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#option-choice-form input').on('change', function () {
            getVariantPrice();
        });
    });

    function getVariantPrice() {
       //alert("success");
        if ($('#option-choice-form input[id=quantity]').val() > 0) {
            $.ajax({
                type: "GET",
                url: '{{ route('products.variant_price')}}',
                data: $('#option-choice-form').serializeArray(),
                success: function (data) {
                    //console.log(data);
                    
                    $('#chosen_price').html('৳' + data.price);
                    $('#product_chosen_sku').val(data.sku);
                    $('#product_chosen_price').val(data.price);
                    
                }
            });
        }
    }
</script>

<!-- product add to cart -->


<script>
    $(document).ready(function () {
        $('#addtocart').on('click', function () {
            

          $('#option-choice-form').serializeArray();

            $.ajax({
                type: 'GET',
                url: "{{ route('product.add.cart') }}",
                data: $('#option-choice-form').serializeArray(),
                success: function (data) {                  
                    document.getElementById('cartdatacount').innerHTML = data.quantity;
                    document.getElementById('mobilecartdatacount').innerHTML = data.quantity;
                    // document.getElementById('product_price').innerHTML = toFixed(data.total);
                }
            });
        });
    });
</script>

@endsection