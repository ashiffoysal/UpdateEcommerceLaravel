@extends('layouts.websiteapp')
@section('main_content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Main Container  -->
<div class="search-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-content">
                    <div class="row" id="search_result_product">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@php
$subcateid=$subcate->cate_id;
$cate_id=App\Category::where('id',$subcateid)->first();
$nbanimage=App\CategoryBanner::where('section',4)->where('category_id',$cate_id->id)->orderBy('id','DESC')->first();
@endphp
<div id="main_content">
    @if($nbanimage)
    @php
    $site=$nbanimage->siteban_id;
    $maiimage=App\SiteBanner::where('id',$site)->where('is_deleted',0)->where('status',1)->first();
    @endphp
    @if($maiimage)
    <div class="breadcrumbs" style="background: url({{asset('public/uploads/sitebanner/'.$maiimage->image)}}) no-repeat center top;">
        <div class="container">
            <div class="title-breadcrumb">
                {{$subcate->subcate_name}}
            </div>
            <ul class="breadcrumb-cate">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="{{url('/')}}">{{$subcate->category->cate_name}}</a></li>
                <li><a href="">{{$subcate->subcate_name}}</a></li>
            </ul>
        </div>
    </div>
    @else
    <div class="breadcrumbs" style="background: url({{asset('public/frontend/image/breadcrumbs.jpg')}}) no-repeat center top;">
        <div class="container">
            <div class="title-breadcrumb">
                {{$subcate->subcate_name}}
            </div>
            <ul class="breadcrumb-cate">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="{{url('/')}}">{{$subcate->category->cate_name}}</a></li>
                <li><a href="">{{$subcate->subcate_name}}</a></li>
            </ul>
        </div>
    </div>
    @endif
    @else
    <div class="breadcrumbs" style="background: url({{asset('public/frontend/image/breadcrumbs.jpg')}}) no-repeat center top;">
        <div class="container">
            <div class="title-breadcrumb">
                {{$subcate->subcate_name}}
            </div>
            <ul class="breadcrumb-cate">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="{{url('/')}}">{{$subcate->category->cate_name}}</a></li>
                <li><a href="">{{$subcate->subcate_name}}</a></li>
            </ul>
        </div>
    </div>
    @endif

    <div class="container product-detail">
        <div class="row">
  @include('frontend.include.product.subsidebar')

            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="module banners-effect-9 form-group">
                    @php
                    $subcaid=$subcate->cate_id;
                    $ca_id=App\Category::where('id',$subcaid)->first();
                    $nbnimage=App\CategoryBanner::where('section',2)->where('category_id',$ca_id->id)->orderBy('id','DESC')->first();
                    @endphp
                    @if($nbnimage)
                    @php
                    $ste=$nbnimage->siteban_id;
                    $maimage=App\SiteBanner::where('id',$ste)->where('is_deleted',0)->where('status',1)->first();
                    @endphp
                    @if($maimage)
                    <div class="banners">
                        <div>
                            <a href="#"><img src="{{asset('public/uploads/sitebanner/'.$maimage->image)}}"></a>
                        </div>
                    </div>
                    @else
                    <div class="banners">
                        <div>
                            <a href="#"><img src="{{asset('public/frontend/')}}/image/catalog/demo/category/men-cat.jpg"></a>
                        </div>
                    </div>
                    @endif
                    @else
                    <div class="banners">
                        <div>
                            <a href="#"><img src="{{asset('public/frontend/')}}/image/catalog/demo/category/men-cat.jpg"></a>
                        </div>
                    </div>
                    @endif
                </div>
                <a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>Sidebar</a>

                <div class="products-category">
                    <div class="form-group clearfix">
                        <h3 class="title-category ">{{$subcate->subcate_name}}</h3>
                    </div>
                    <div class="search_category_product">

                    </div>
                    <div class="all_category_wise_product">
                        <div class="products-category">
                            <div class="product-filter filters-panel">
                                <div class="row">
                                    <div class="col-sm-2 view-mode hidden-sm hidden-xs">
                                        <div class="list-view">
                                            <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th"></i></button>
                                            <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                        </div>
                                    </div>

                                    <div class="short-by-show form-inline text-right col-md-10 col-sm-12">
                                        <div class="form-group short-by">
                                            <label class="control-label" for="input-sort">Sort By:</label>
                                            <select id="input-sort" class="form-control" onchange="location = this.value;">
                                                <option value="" selected="selected">Default</option>
                                                <option value="">Name (A - Z)</option>
                                                <option value="">Name (Z - A)</option>
                                                <option value="">Price (Low &gt; High)</option>
                                                <option value="">Price (High &gt; Low)</option>
                                                <option value="">Rating (Highest)</option>
                                                <option value="">Rating (Lowest)</option>
                                                <option value="">Model (A - Z)</option>
                                                <option value="">Model (Z - A)</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="input-limit">Show:</label>
                                            <select id="input-limit" class="form-control" onchange="location = this.value;">
                                                <option value="" selected="selected">12</option>
                                                <option value="">25</option>
                                                <option value="">50</option>
                                                <option value="">75</option>
                                                <option value="">100</option>
                                            </select>
                                        </div>
                                        <div class="form-group product-compare"><a id="compare-total" class="btn btn-default">Product Compare (0)</a></div>
                                    </div>

                                </div>
                            </div>
                            <div class="products-list grid row number-col-3 so-filter-gird" id="filter">
                                <!-- category product -->
                                @php
                                $products=App\Product::where('is_deleted',0)->where('subcate_id',$subcate->id)->orderBy('id','DESC')->paginate(6);
                                @endphp
                                @foreach($products as $product)
                                <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container  second_img  ">
                                                <ahref="{{url('product/'.$product->slug.'/'.$product->id)}}" title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium ">
                                                    <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium " title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium " class="img-1 img-responsive">
                                                    <img src="{{asset('public/uploads/products/thumbnail/'.$product->thumbnail_img)}}" alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium " title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium " class="img-2 img-responsive">
                                                </a>
                                            </div>
                                            <!-- <div class="countdown_box">
                                            <div class="countdown_inner">
                                            </div>
                                        </div> -->
                                            <div class="box-label">
                                                <span class="label-product label-sale">
                                                    Sale
                                                </span>
                                            </div>
                                        </div>

                                        <div class="right-block">
                                            <div class="caption">
                                                <h4><a href="{{url('product/'.$product->slug.'/'.$product->id)}}">{{Str::limit($product->product_name,40)}}</a>
                                                </h4>
                                                <div class="total-price">
                                                    @php
                                                    $flashdealdetail = App\FlashDealDetail::where('product_id',$product->id)->get();
                                                    @endphp
                                                    <div class="price price-left">
                                                        @if(count($flashdealdetail) > 0)
                                                        @foreach($flashdealdetail as $row)
                                                        <?php    $productdiscount =($product->product_price * $row->discount)/100; ?>
                                                        @if($row ->discount_type == 1 )
                                                        <span class="price-new">

                                                            ৳ {{$product->product_price - $row->discount}} </span> <span class="price-old">৳ {{$product->product_price}}
                                                        </span>
                                                        @else
                                                        <span class="price-new">
                                                            ৳ {{$product->product_price -$productdiscount }} </span> <span class="price-old">৳ {{$product->product_price}}
                                                        </span>
                                                        @endif
                                                        @endforeach
                                                        @else
                                                        <span class="price-new">
                                                            ৳ {{$product->product_price}}
                                                        </span>

                                                        @endif

                                                    </div>
                                                    <div class="price-sale price-right">

                                                        @foreach($flashdealdetail as $row)
                                                        @if($row ->discount_type == 1 )
                                                        <span class="discount">

                                                            - ৳ {{$row->discount}}
                                                            <strong>OFF</strong>
                                                        </span>
                                                        @else
                                                        <span class="discount">
                                                        -{{$row->discount}}%

                                                            <strong>OFF</strong>
                                                        </span>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="description item-desc hidden">
                                                    <p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x
                                                        1600 pixel resolution. Designed specifically for the creative
                                                        professional, this display provides more space for easier access
                                                        to all the.. </p>
                                                </div>
                                                <div class="list-block hidden">


                                                                            <form class="option-choice-form" onclick="subcataddtocart(this);">

                                                                                <input type="hidden" value="1" name="quantity">
                                                                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                                                                <input type="hidden" value="{{$product->product_price}}" name="product_price">

                                                    @if($product->product_type ==1)
                                                        <a class="addToCart btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                            <button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
                                                        </a>


                                                        @else
                                                            <button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');productaddtocart(this);" data-original-title="Add to Cart "><span>Add to Cart </span></button>
                                                        @endif

                                                    </form>
                                                    <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
                                                    <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            @if(Auth::guard('web')->check())
                                                                            <button class="mywishlist btn-button" type="button" data-toggle="tooltip" title="" data-original-title="add to Wish List" data-id="{{$product->id}}"> <i class="fa fa-heart"></i></button>
                                                                            @else
                                                                            <a href="{{route('login')}}" class="compare btn-button"><i class="fa fa-heart"></i></a>
                                                                            @endif

                                                                            <button class="compare btn-button compareproduct" type="button" id="compareproduct" value="{{$product->id }}"><i class="fa fa-exchange"></i></button>









                                                                            <form class="option-choice-form" onclick="subcataddtocart(this);">

                                                                                <input type="hidden" value="1" name="quantity">
                                                                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                                                                <input type="hidden" value="{{$product->product_price}}" name="product_price">
                                                                                @if($product->product_type ==1)
                                                                                <a class="addToCart btn-button btn-quickview quickview quickview_handler" href="{{url('product/details/'.$product->id)}}" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                    <i class="fa fa-search"></i>
                                                                                    <input type="hidden" name="combination">
                                                                                </a>
                                                                                @else
                                                                                <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                                    <span class="hidden">Add to cart</span>
                                                                                </button>
                                                                                @endif
                                                                            </form>


                                                                        </div>
                                                                    </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- endcategory product -->
                            </div>

                            <div class="product-filter product-filter-bottom filters-panel">
                                <div class="col-sm-6 text-left">
                                    <ul class="pagination">
                                        {{ $products->links() }}
                                    </ul>
                                </div>
                                <div class="col-sm-6 text-right">Showing 1 to 9 of 9 (1 Pages)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- //Main Container -->
@endsection
@push('js')


<script>
        function subcataddtocart(el) {
            var product_id = el.product_id.value;
            var product_price = el.product_price.value;
            var quantity = el.quantity.value;
            if (!el.combination) {
                $.ajax({
                    type: 'GET',
                    url: "{{ route('product.add.cart') }}",
                    data: {
                        product_id: product_id,
                        product_price: product_price,
                        quantity: quantity,
                    },
                    success: function(data) {
                        console.log(data);
                        document.getElementById('cartdatacount').innerHTML = data.quantity;
                        document.getElementById('product_price').innerHTML = data.total;

                    }
                })
            }


        }
    </script>



<script>
    $(document).ready(function() {
        $(".fa-chevron-down").on('click', function() {
            $('.so-filter-content-opts').toggle();
        });
    });
</script>



<script>
    $(document).ready(function() {
        $('.search_category_product').hide();
        $('#search_field').on('keyup', function() {
            var product_name = $(this).val();
            var catId = $(this).attr('data-id');
            if (product_name === "") {
                $('.search_category_product').hide();
                $('.all_category_wise_product').show();
            } else {
                $('.all_category_wise_product').hide();
                $('.search_category_product').show();
            }
            $.ajax({
                url: "{{ url('search/product/by/sub/category') }}" + "/" + catId + "/" + product_name,
                type: 'get',
                success: function(data) {
                    if (!$.isEmptyObject(data)) {
                        $('.search_category_product').empty();
                        $('.search_category_product').append(data);
                    } else {
                        $('.search_category_product').empty();
                        $('.search_category_product').append("<h1>No Data Found</h1>");
                    }
                }
            });
        })
    });
</script>
@endpush
