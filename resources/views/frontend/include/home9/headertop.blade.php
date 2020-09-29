<header class="header header--organic" data-sticky="true">
        <div class="header__top">
            <div class="container">
                <div class="header__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">

                                <li><a href="{{ route('hot.deal.products') }}"><i class="icon-star"></i> Hot Promotions</a>
                                </li>
                                 @foreach($allcategory as $category)
                                    @php
                                        $check = App\SubCategory::where('cate_id',$category->id)->first();
                                    @endphp
                                    @if($check)
                                    <li class="menu-item-has-children has-mega-menu"><a href="{{url('product/page/'.$category->cate_slug)}}"><i class="icon-laundry"></i>{{$category->cate_name}}</a>
                                        <div class="mega-menu">
                                             @php
                                                     $allsub=App\SubCategory::where('cate_id',$category->id)->where('is_deleted',0)->where('subcate_status',1)->get();
                                             @endphp
                                              @foreach($allsub as $subcate)  
                                            <div class="mega-menu__column">
                                                <h4>{{$subcate->subcate_name}}<span class="sub-toggle"></span></h4>
                                                <ul class="mega-menu__list">
                                                   @php
                                                    $resubcate =App\ReSubCategory::where('is_deleted',0)->where('subcate_id',$subcate->id)->get();
                                                   @endphp
                                                    @foreach($resubcate as $rcate)
                                                    <li><a href="{{url('resubacetegory/'.$category->cate_slug.'/'.$subcate-> subcate_slug.'/'.$rcate->resubcate_slug)}}">{{$rcate->resubcate_name}}</a></li>
                                                    @endforeach
                                              
                                                </ul>
                                            </div>
                                            @endforeach
                                          
                                        </div>
                                    </li>
                                @else
                                <li><a href="{{url('product/page/'.$category->cate_slug)}}"><i class="icon-star"></i> {{$category->cate_name}}</a>
                                @endif
                                @endforeach

                            </ul>
                        </div>
                    </div><a class="ps-logo" href="{{url('/')}}"><img src="{{asset('/'.$logos->front_logo)}}" alt=""></a>
                </div>
                <div class="header__center">
                    <form class="ps-form--quick-search" action="" method="get">
                        <div class="form-group--icon"><i class="icon-chevron-down"></i>
                            <select class="form-control">
                               <option value="all" selected="selected">All</option>
                                @foreach($allcategory as $cates)
                                  <option class="level-0" value="{{$cates->id}}}">{{$cates->cate_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input class="form-control" type="text" placeholder="I'm shopping for..." name="input-search">
                        <button>Search</button>
                          <div class="ps-panel--search-result">
                            <div class="ps-panel__content" id="search-result">
                                
                       
                            </div>
                            <div class="ps-panel__footer text-center"><a href=""><!-- See all results --></a></div>
                         </div>
                    </form>
                </div>
                    @php
                        $userid = Request::ip();
                    @endphp
                    @php
                        $ip = Request::ip();
                        $user_id = Auth::id();
                        $allwish=App\wishlist::where('user_id',$user_id)->count();
                        $allcompare=App\CompareProduct::where('ip_address',$ip)->count();
                    @endphp
                <div class="header__right">
                    <div class="header__actions"><a class="header__extra" href="{{url('/product/compare/page')}}"><i class="icon-chart-bars" ></i><span><i id="coutncompa">{{$allcompare}}</i></span></a><a class="header__extra" href="{{url('product/wishlist')}}"><i class="icon-heart"></i><span><i id="countwish">{{ $allwish }}</i></span></a>
      
                                <div class="ps-cart--mini"> <a class="header__extra" onmouseover="myAddToCartData()" data-id="{{$userid}}" id="cartdataid" href="#"><i class="icon-bag2"></i><span><i id="cartdatacount" >0</i></span>
                            </a>
                            <div class="ps-cart__content">
                            <div id="addtocartshow">

                                    </div>
                               
                            </div>
                        </div>
                        <div class="ps-block--user-header">
                            <div class="ps-block__left"><i class="icon-user"></i></div>
                            @if(Auth::check())
                            <div class="ps-block__right"><a href="{{route('customar.account.page')}}">Accounts</a><a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="#">Logout</a></div>
                            <form id="logout-form" method="post" action="{{route('customar.logout')}}">
                                @csrf
                            </form>
                            @else
                                <div class="ps-block__right"><a href="{{route('customar.login.form')}}">Login</a><a href="{{route('customar.login.form')}}">Register</a></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navigation">
            <div class="container">
                <div class="navigation__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                                   <li><a href="{{ route('hot.deal.products') }}"><i class="icon-star"></i> Hot Promotions</a>
                                </li>
                                 @foreach($allcategory as $category)
                                    @php
                                        $check = App\SubCategory::where('cate_id',$category->id)->first();
                                    @endphp
                                    @if($check)
                                    <li class="menu-item-has-children has-mega-menu"><a href="{{url('product/page/'.$category->cate_slug)}}"><i class="icon-laundry"></i>{{$category->cate_name}}</a>
                                        <div class="mega-menu">
                                             @php
                                                     $allsub=App\SubCategory::where('cate_id',$category->id)->where('is_deleted',0)->where('subcate_status',1)->get();
                                             @endphp
                                              @foreach($allsub as $subcate)  
                                            <div class="mega-menu__column">
                                                <h4>{{$subcate->subcate_name}}<span class="sub-toggle"></span></h4>
                                                <ul class="mega-menu__list">
                                                   @php
                                                    $resubcate =App\ReSubCategory::where('is_deleted',0)->where('subcate_id',$subcate->id)->get();
                                                   @endphp
                                                    @foreach($resubcate as $rcate)
                                                    <li><a href="{{url('resubacetegory/'.$category->cate_slug.'/'.$subcate-> subcate_slug.'/'.$rcate->resubcate_slug)}}">{{$rcate->resubcate_name}}</a></li>
                                                    @endforeach
                                              
                                                </ul>
                                            </div>
                                            @endforeach
                                          
                                        </div>
                                    </li>
                                @else
                                <li><a href="{{url('product/page/'.$category->cate_slug)}}"><i class="icon-star"></i> {{$category->cate_name}}</a>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="navigation__right">
                    <ul class="menu menu--organic">
                        <li class="current-menu-item menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
                            <ul class="sub-menu">
                                <li><a href="index.html">Marketplace Full Width</a>
                                </li>
                                <li><a href="homepage-2.html">Home Auto Parts</a>
                                </li>
                                <li><a href="homepage-10.html">Home Technology</a>
                                </li>
                                <li><a href="homepage-9.html">Home Organic</a>
                                </li>
                                <li><a href="homepage-3.html">Home Marketplace V1</a>
                                </li>
                                <li><a href="homepage-4.html">Home Marketplace V2</a>
                                </li>
                                <li><a href="homepage-5.html">Home Marketplace V3</a>
                                </li>
                                <li><a href="homepage-6.html">Home Marketplace V4</a>
                                </li>
                                <li><a href="homepage-7.html">Home Electronic</a>
                                </li>
                                <li><a href="homepage-8.html">Home Furniture</a>
                                </li>
                                <li><a href="homepage-kids.html">Home Kids</a>
                                </li>
                                <li><a href="homepage-photo-and-video.html">Home photo and picture</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="shop-default.html">Shop Default</a>
                                        </li>
                                        <li><a href="shop-default.html">Shop Fullwidth</a>
                                        </li>
                                        <li><a href="shop-categories.html">Shop Categories</a>
                                        </li>
                                        <li><a href="shop-sidebar.html">Shop Sidebar</a>
                                        </li>
                                        <li><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                                        </li>
                                        <li><a href="shop-carousel.html">Shop Carousel</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Product Layout<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="product-default.html">Default</a>
                                        </li>
                                        <li><a href="product-extend.html">Extended</a>
                                        </li>
                                        <li><a href="product-full-content.html">Full Content</a>
                                        </li>
                                        <li><a href="product-box.html">Boxed</a>
                                        </li>
                                        <li><a href="product-sidebar.html">Sidebar</a>
                                        </li>
                                        <li><a href="product-default.html">Fullwidth</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Product Types<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="product-default.html">Simple</a>
                                        </li>
                                        <li><a href="product-default.html">Color Swatches</a>
                                        </li>
                                        <li><a href="product-image-swatches.html">Images Swatches</a>
                                        </li>
                                        <li><a href="product-countdown.html">Countdown</a>
                                        </li>
                                        <li><a href="product-multi-vendor.html">Multi-Vendor</a>
                                        </li>
                                        <li><a href="product-instagram.html">Instagram</a>
                                        </li>
                                        <li><a href="product-affiliate.html">Affiliate</a>
                                        </li>
                                        <li><a href="product-on-sale.html">On sale</a>
                                        </li>
                                        <li><a href="product-video.html">Video Featured</a>
                                        </li>
                                        <li><a href="product-groupped.html">Grouped</a>
                                        </li>
                                        <li><a href="product-out-stock.html">Out Of Stock</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Woo Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="shopping-cart.html">Shopping Cart</a>
                                        </li>
                                        <li><a href="checkout.html">Checkout</a>
                                        </li>
                                        <li><a href="whishlist.html">Whishlist</a>
                                        </li>
                                        <li><a href="compare.html">Compare</a>
                                        </li>
                                        <li><a href="order-tracking.html">Order Tracking</a>
                                        </li>
                                        <li><a href="my-account.html">My Account</a>
                                        </li>
                                        <li><a href="checkout-2.html">Checkout 2</a>
                                        </li>
                                        <li><a href="shipping.html">Shipping</a>
                                        </li>
                                        <li><a href="payment.html">Payment</a>
                                        </li>
                                        <li><a href="payment-success.html">Payment Success</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Basic Page<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="about-us.html">About Us</a>
                                        </li>
                                        <li><a href="contact-us.html">Contact</a>
                                        </li>
                                        <li><a href="faqs.html">Faqs</a>
                                        </li>
                                        <li><a href="comming-soon.html">Comming Soon</a>
                                        </li>
                                        <li><a href="404-page.html">404 Page</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="become-a-vendor.html">Become a Vendor</a>
                                        </li>
                                        <li><a href="vendor-store.html">Vendor Store</a>
                                        </li>
                                        <li><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                                        </li>
                                        <li><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                                        </li>
                                        <li><a href="store-list.html">Store List</a>
                                        </li>
                                        <li><a href="store-list.html">Store List 2</a>
                                        </li>
                                        <li><a href="store-detail.html">Store Detail</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Account Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="user-information.html">User Information</a>
                                        </li>
                                        <li><a href="addresses.html">Addresses</a>
                                        </li>
                                        <li><a href="invoices.html">Invoices</a>
                                        </li>
                                        <li><a href="invoice-detail.html">Invoice Detail</a>
                                        </li>
                                        <li><a href="notifications.html">Notifications</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="#">Blogs</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Blog Layout<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="blog-grid.html">Grid</a>
                                        </li>
                                        <li><a href="blog-list.html">Listing</a>
                                        </li>
                                        <li><a href="blog-small-thumb.html">Small Thumb</a>
                                        </li>
                                        <li><a href="blog-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Single Blog<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="blog-detail.html">Single 1</a>
                                        </li>
                                        <li><a href="blog-detail-2.html">Single 2</a>
                                        </li>
                                        <li><a href="blog-detail-3.html">Single 3</a>
                                        </li>
                                        <li><a href="blog-detail-4.html">Single 4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="ps-block--header-hotline inline">
                        <p><i class="icon-telephone"></i>Hotline:<strong> 1-800-234-5678</strong></p>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <script>
    function myAddToCartData() {
        var userip =$("#cartdataid").data("id");
        $.post('{{ route('add.cart.show') }}', {_token: '{{ csrf_token() }}',user_id: userip},
            function(data) {
			   $('#addtocartshow').html(data);
			
            });
	}

	myAddToCartData();
</script>