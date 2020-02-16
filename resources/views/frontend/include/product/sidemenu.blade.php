<aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column sidebar-offcanvas">
            <span id="close-sidebar" class="fa fa-times"></span>
            <div class="module category-style">
                <h3 class="modtitle"><span>Categories </span></h3>

                @php
                    $category=App\Category::where('is_deleted',0)->where('cate_status',1)->get();
                @endphp
                <div class="mod-content box-category">


                @foreach($category as $menu)

                    <ul class="accordion" id="accordion-category">
                    @php
                        $check=App\SubCategory::where('cate_id',$menu->id)->first();
                    @endphp
                    @if($check)
                        <li class="panel">
                            <a href="{{url('product/page/'.$menu->cate_slug)}}">{{$menu->cate_name}}</a>
                            <span class="head"><a class="pull-right accordion-toggle" data-toggle="collapse" data-parent="#accordion-category" href="#category{{$menu->id}} "></a></span>
                            @php
                                $subcategory=App\SubCategory::where('cate_id',$menu->id)->where('is_deleted',0)->get();
                            @endphp
                            <div id="category{{$menu->id}}" class="panel-collapse collapse" style="clear:both">
                                <ul>
                                @foreach($subcategory as $subcate)
                                    <li>
                                        <a href="{{url('subacete/'.$subcate->category->cate_slug.'/'.$subcate->subcate_slug)}}">{{$subcate->subcate_name}} </a>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                        </li>
                        @else
                        <li class="panel">
                            <a href="{{url('product/page/'.$menu->cate_slug)}}">{{$menu->cate_name}}</a>
                        </li>
                        @endif
                    </ul>
                    @endforeach
                </div>
            </div>
            <div class="moduletable module so-extraslider-ltr best-seller best-seller-custom">
                <h3 class="modtitle"><span>Best Sellers</span></h3>
                <div class="modcontent">
                    <div id="so_extra_slider" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
                        <div class="extraslider-inner owl2-carousel owl2-theme owl2-loaded extra-animate" data-effect="none">
                            <div class="item ">
                                @php
                                    $products = App\Product::whereNotNull('number_of_sale')->orderBy('number_of_sale','desc')->limit(6)->get();
                                @endphp
                                <!-- End item-wrap -->
                                @foreach($products as $row)
                                <div class="item-wrap style1 clearfix">
                                    <div class="item-wrap-inner">
                                        <div class="media-left">
                                            <div class="item-image">
                                                <div class="item-img-info product-image-container ">
                                                    <div class="box-label">
                                                    </div>
                                                    <a class="lt-image" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan ">
                                                        <img src="{{asset('public/uploads/products/thumbnail/productdetails/'.$row->thumbnail_img)}}" alt="Philipin Tour Group Manila/ Pattaya / Mactan ">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="item-info">
                                                <!-- Begin title -->
                                                <div class="item-title">
                                                    <a href="{{url('/product/details/page/'.$row->id)}}" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan  ">
                                                        {{Str::limit($row->product_name,20)}}
                                                    </a>
                                                </div>
                                                <!-- Begin ratting -->
                                                <div class="rating">
                                                  @php
                                                    $product_id=$row->id;
                                                    $reviewreck=App\ProductReview::where('product_id',$product_id)->count();
                                                  @endphp
                                                  @if($reviewreck)
                                                    @php
                                                      $sumreview =App\ProductReview::where('product_id',$product_id)->sum('review');
                                                      $rting=$sumreview/$reviewreck;
                                                    @endphp
                                                    @if($rting)
                                                     @if($rting == 1)
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      @eleif($rting < 2)
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      @eleif($rting < 3)
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      @eleif($rting < 4)
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      @eleif($rting < 5)
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      @eleif($rting == 5)
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      @else
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      @endif
                                                    @endif
                                                  @else
                                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                  @endif


                                                </div>
                                                <!-- Begin item-content -->
                                                <div class="price">
                                                    <span class="old-price product-price">৳ {{$row->product_price}}</span>
                                                    <span class="price-old"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                    </div>
                                    <!-- End item-wrap-inner -->
                                </div>
                                <!-- End item-wrap -->
                                @endforeach

                                <!-- End item-wrap -->
                            </div>


                            <div class="item ">



                                @php
                                    $products = App\Product::whereNotNull('number_of_sale')->orderBy('number_of_sale','desc')->offset(5)->limit(5)->get();
                                @endphp
                                <!-- End item-wrap -->
                                @foreach($products as $row)
                                <div class="item-wrap style1 clearfix">
                                    <div class="item-wrap-inner">
                                        <div class="media-left">
                                            <div class="item-image">
                                                <div class="item-img-info product-image-container ">
                                                    <div class="box-label">
                                                    </div>
                                                    <a class="lt-image" target="_self" title="{{$row->product_name}}">
                                                        <img src="{{asset('public/uploads/products/thumbnail/productdetails/'.$row->thumbnail_img)}}" alt="Philipin Tour Group Manila/ Pattaya / Mactan ">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="item-info">
                                                <!-- Begin title -->
                                                <div class="item-title">
                                                    <a href="{{url('/product/details/page/'.$row->id)}}" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan  ">
                                                        {{Str::limit($row->product_name,40)}}
                                                    </a>
                                                </div>
                                                <!-- Begin ratting -->
                                                <div class="rating">
                                                  @php
                                                    $product_id=$row->id;
                                                    $reviewreck=App\ProductReview::where('product_id',$product_id)->count();
                                                  @endphp
                                                  @if($reviewreck)
                                                    @php
                                                      $sumreview =App\ProductReview::where('product_id',$product_id)->sum('review');
                                                      $rting=$sumreview/$reviewreck;
                                                    @endphp
                                                    @if($rting)
                                                     @if($rting == 1)
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      @eleif($rting < 2)
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      @eleif($rting < 3)
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      @eleif($rting < 4)
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      @eleif($rting < 5)
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                      @eleif($rting == 5)
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      @else
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                      @endif
                                                    @endif
                                                  @else
                                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                  @endif
                                                </div>
                                                <!-- Begin item-content -->
                                                <div class="price">
                                                    <span class="old-price product-price">${{$row->product_price}}</span>
                                                    <span class="price-old">$122.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                    </div>
                                    <!-- End item-wrap-inner -->
                                </div>
                                <!-- End item-wrap -->
                                @endforeach







                                <!-- End item-wrap -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="module banner-left hidden-xs ">
                <div class="static-image-home-left banners">
                  @php
                    $sidebanner=App\SiteBanner::where('section',5)->orderBy('id','DESC')->first();
                  @endphp
                    <div>
                      @if($sidebanner)
                      <a title="Static Image" href="#"><img src="{{asset('public/uploads/sitebanner/'.$sidebanner->image)}}" alt="Static Image"></a>
                      @else
                      <a title="Static Image" href="#"><img src="{{asset('public/frontend/')}}/image/catalog/demo/banners/image-left.jpg" alt="Static Image"></a>
                      @endif
                    </div>
                </div>
            </div>
        </aside>
