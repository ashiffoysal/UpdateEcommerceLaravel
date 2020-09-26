 @if($products->count()>0)
 <div class="ps-shopping ps-tab-root">
                            <div class="ps-shopping__header">
                                <p><strong></strong> Products found</p>
                                <div class="ps-shopping__actions">
                                 <!--    <select class="ps-select" data-placeholder="Sort Items">
                                        <option value="1">Sort by latest</option>
                                        <option value="2">Sort by popularity</option>
                                        <option value="3">Sort by average rating</option>
                                        <option value="4">Sort by price: low to high</option>
                                        <option value="5">Sort by price: high to low</option>
                                    </select> -->
                                    <div class="ps-shopping__view">
                                        <p>View</p>
                                        <ul class="ps-tab-list">
                                            <li class="active"><a href="#tab-1"><i class="icon-grid"></i></a></li>
                                            <li><a href="#tab-2"><i class="icon-list4"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-tabs">
                                <div class="ps-tab active" id="tab-1">
                                    <div class="ps-shopping-product">
                                        <div class="row">
                                            @foreach($products as $product)
                                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}"><img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}"alt=""></a>
                                                        <ul class="ps-product__actions">
                                                         <li><a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        
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
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#"></a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">{{$product->product_name}}</a>
                                                            <p class="ps-product__price">{{$product->product_price}}৳</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">{{$product->product_name}}</a>
                                                            <p class="ps-product__price">{{$product->product_price}}৳</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                       
                                        </div>
                                    </div>
                                    <div class="ps-pagination">
                                       <!--  <ul class="pagination">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>

                                        </ul> -->
                                       
                                    </div>
                                </div>
                                <div class="ps-tab" id="tab-2">
                                    <div class="ps-shopping-product">
                                        @foreach($products as $product)
                                        <div class="ps-product ps-product--wide">
                                            <div class="ps-product__thumbnail"><a href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}"><img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt=""></a>
                                            </div>
                                            <div class="ps-product__container">
                                                <div class="ps-product__content"><a class="ps-product__title" href="{{url('product/')}}/{{$product->slug}}/{{$product->id}}">{{$product->product_name}}</a>
                                                    <p class="ps-product__vendor"></a></p>
                                             
                                                </div>
                                                <div class="ps-product__shopping">
                                                    <p class="ps-product__price">{{$product->product_price}}</p><a class="ps-btn" href="#">Add to cart</a>
                                                    <ul class="ps-product__actions">
                                                        <li>@if(Auth::guard('web')->check()) <a class="mywishlist" data-id="{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i>
                                                         Wishlist</a>
                                                         @else
                                                         <a href="{{url('customar/login')}}"><i class="icon-heart"></i>
                                                         Wishlist</a>
                                                         @endif
                                                     </li>
                                                        <li><a class="compare" data-id="{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i> Compare</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    
                                    </div>
                                    <div class="ps-pagination">
                                        <ul class="pagination">
                                           <!--  <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li> -->
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
@else
<p>no data found</p>
@endif