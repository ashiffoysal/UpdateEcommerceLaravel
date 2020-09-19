   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<header class="header header--1" data-sticky="true">
        <div class="header__top">
            <div class="ps-container">
                <div class="header__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                                     @foreach($allcategory as $category)

                                    @php
                                        $check = App\SubCategory::where('cate_id',$category->id)->first();
                                    @endphp
                                    @if($check)
                                            <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="{{url('product/page/'.$category->cate_slug)}}"><i class="fa"></i>{{$category->cate_name}}</a>
                                                @php
                                                     $allsub=App\SubCategory::where('cate_id',$category->id)->where('is_deleted',0)->where('subcate_status',1)->get();
                                                 @endphp
                                                <div class="mega-menu">
                                                @foreach($allsub as $subcate)  
                                                    <div class="mega-menu__column">
                                                        <h4>{{$subcate->subcate_name}}<span class="sub-toggle"></span></h4>
                                                            @php
                                                        $resubcate =App\ReSubCategory::where('is_deleted',0)->where('subcate_id',$subcate->id)->get();
                                                            @endphp
                                                        <ul class="mega-menu__list">
                                                            @foreach($resubcate as $rcate)
                                                            <li class="current-menu-item "><a href="#">{{$rcate->resubcate_name}}</a>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endforeach
                                                </div>
                                            </li>

                                    @else
                                          <li class="current-menu-item "><a href="{{url('product/page/'.$category->cate_slug)}}"> {!! $category->cate_icon !!}{{$category->cate_name}}</a>
                                        </li>
                                    @endif
                              
                                @endforeach
                           
                               
                            </ul>
                        </div>
                    </div><a class="ps-logo" href="{{url('/')}}"><img src="{{asset('/'.$logos->front_logo)}}" alt=""></a>
                </div>
                <div class="header__center">
                    <form class="ps-form--quick-search" action="" method="get">
                        <div class="form-group--icon"><i class="icon-chevron-down"></i>
                            <select class="form-control" id="category_id" name="category_id">
                                <option value="all" selected="selected">All</option>
                                @foreach($allcategory as $cates)
                                    @php
                                        $chek=App\SubCategory::where('cate_id',$cates->id)->first();
                                    @endphp
                                    @if($chek)
                                    <option class="level-0" value="{{$cates->id}}}">{{$cates->cate_name}}</option>
                                        @php
                                            $sub=App\SubCategory::where('is_deleted',0)->where('cate_id',$cates->id)->get();
                                        @endphp
                                        @foreach($sub as $subcate)
                                        <option class="level-2" value="{{$subcate->id}}">{{$subcate->subcate_name}}</option>
                                        @endforeach
                                    @else
                                    <option class="level-0" value="{{$cates->id}}}">{{$cates->cate_name}}</option>
                                    @endif

                                @endforeach
                                <!-- <option class="level-1" value="air-conditioners">   Air Conditioners</option>
                                <option class="level-2" value="accessories">      Accessories</option> -->
                            </select>
                        </div>
                        <input class="form-control" type="text" placeholder="I'm shopping for..."id="input-search" name="input-search">
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
                <div class="header__right">

                    @php
                        $user_id = Auth::id();
                        $allwish=App\wishlist::where('user_id',$user_id)->count();
                          
                    @endphp
                    <div class="header__actions"><a class="header__extra" href="{{url('/product/compare/page')}}"><i class="icon-chart-bars"></i><span><i id="countcompare">0</i></span></a>
                        <a class="header__extra" href="{{url('product/wishlist')}}">
                            <i class="icon-heart"></i>
                            <span>
                                <i id="countwish">{{ $allwish }}</i>
                            </span>
                        </a>
                        <div class="ps-cart--mini"> <a class="header__extra" onmouseover="myAddToCartData()" data-id="{{$userid}}" id="cartdataid" href="#"><i class="icon-bag2"></i><span><i id="cartdatacount" >0</i></span>
                        </a>
                          <div class="ps-cart__content" id="addtocartshow">
                              <div id="addtocartshow">

                              </div>
                                
                                <div class="ps-cart__footer">
                                    <h3>Sub Total:<strong>$59.99</strong></h3>
                                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
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
            <div class="ps-container">
                <div class="navigation__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                                @foreach($allcategory as $category)

                                    @php
                                        $check = App\SubCategory::where('cate_id',$category->id)->first();
                                    @endphp
                                    @if($check)
                                            <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="{{url('product/page/'.$category->cate_slug)}}"><i class="fa"></i>{{$category->cate_name}}</a>
                                                @php
                                                     $allsub=App\SubCategory::where('cate_id',$category->id)->where('is_deleted',0)->where('subcate_status',1)->get();
                                                 @endphp
                                                <div class="mega-menu">
                                                @foreach($allsub as $subcate)  
                                                    <div class="mega-menu__column">
                                                        <h4>{{$subcate->subcate_name}}<span class="sub-toggle"></span></h4>
                                                            @php
                                                        $resubcate =App\ReSubCategory::where('is_deleted',0)->where('subcate_id',$subcate->id)->get();
                                                            @endphp
                                                        <ul class="mega-menu__list">
                                                            @foreach($resubcate as $rcate)
                                                            <li class="current-menu-item "><a href="#">{{$rcate->resubcate_name}}</a>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endforeach
                                                </div>
                                            </li>

                                    @else
                                          <li class="current-menu-item "><a href="{{url('product/page/'.$category->cate_slug)}}"> {!! $category->cate_icon !!}{{$category->cate_name}}</a>
                                        </li>
                                    @endif
                              
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="navigation__right">
                    <ul class="menu">
                        <li class="menu-item-has-children"><a href="{{url('/')}}">Home</a><span class="sub-toggle"></span>
                            <ul class="sub-menu">
                                <li class="current-menu-item "><a href="index.html">Marketplace Full Width</a>
                                </li>
                                <li class="current-menu-item "><a href="homepage-2.html">Home Auto Parts</a>
               
                            </ul>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="shop-default.html">Shop Default</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Product Layout<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="product-default.html">Default</a>
                                        </li>
                          
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Product Types<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="product-default.html">Simple</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-default.html">Color Swatches</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Woo Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="shopping-cart.html">Shopping Cart</a>
                                        </li>
                                        <li class="current-menu-item "><a href="checkout.html">Checkout</a>
                                        </li>
                                        <li class="current-menu-item "><a href="whishlist.html">Whishlist</a>
                                        </li>
                                        <li class="current-menu-item "><a href="compare.html">Compare</a>
                                        </li>
                                        <li class="current-menu-item "><a href="order-tracking.html">Order Tracking</a>
                                        </li>
                                        <li class="current-menu-item "><a href="my-account.html">My Account</a>
                                        </li>
                                        <li class="current-menu-item "><a href="checkout-2.html">Checkout 2</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shipping.html">Shipping</a>
                                        </li>
                                        <li class="current-menu-item "><a href="payment.html">Payment</a>
                                        </li>
                                        <li class="current-menu-item "><a href="payment-success.html">Payment Success</a>
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
                                        <li class="current-menu-item "><a href="about-us.html">About Us</a>
                                        </li>
                                        <li class="current-menu-item "><a href="contact-us.html">Contact</a>
                                        </li>
                                        <li class="current-menu-item "><a href="faqs.html">Faqs</a>
                                        </li>
                                        <li class="current-menu-item "><a href="comming-soon.html">Comming Soon</a>
                                        </li>
                                        <li class="current-menu-item "><a href="404-page.html">404 Page</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="become-a-vendor.html">Become a Vendor</a>
                                        </li>
                                        <li class="current-menu-item "><a href="vendor-store.html">Vendor Store</a>
                                        </li>
                                        <li class="current-menu-item "><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                                        </li>
                                        <li class="current-menu-item "><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                                        </li>
                                        <li class="current-menu-item "><a href="store-list.html">Store List</a>
                                        </li>
                                        <li class="current-menu-item "><a href="store-list.html">Store List 2</a>
                                        </li>
                                        <li class="current-menu-item "><a href="store-detail.html">Store Detail</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Account Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="user-information.html">User Information</a>
                                        </li>
                                        <li class="current-menu-item "><a href="addresses.html">Addresses</a>
                                        </li>
                                        <li class="current-menu-item "><a href="invoices.html">Invoices</a>
                                        </li>
                                        <li class="current-menu-item "><a href="invoice-detail.html">Invoice Detail</a>
                                        </li>
                                        <li class="current-menu-item "><a href="notifications.html">Notifications</a>
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
                                        <li class="current-menu-item "><a href="blog-grid.html">Grid</a>
                                        </li>
                                        <li class="current-menu-item "><a href="blog-list.html">Listing</a>
                                        </li>
                                        <li class="current-menu-item "><a href="blog-small-thumb.html">Small Thumb</a>
                                        </li>
                                        <li class="current-menu-item "><a href="blog-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li class="current-menu-item "><a href="blog-right-sidebar.html">Right Sidebar</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Single Blog<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="blog-detail.html">Single 1</a>
                                        </li>
                                        <li class="current-menu-item "><a href="blog-detail-2.html">Single 2</a>
                                        </li>
                                        <li class="current-menu-item "><a href="blog-detail-3.html">Single 3</a>
                                        </li>
                                        <li class="current-menu-item "><a href="blog-detail-4.html">Single 4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navigation__extra">
                        <li><a href="#">Sell on Martfury</a></li>
                        <li><a href="#">Tract your order</a></li>
                        <li>
                            <div class="ps-dropdown"><a href="#">US Dollar</a>
                                <ul class="ps-dropdown-menu">
                                    <li><a href="#">Us Dollar</a></li>
                                    <li><a href="#">Euro</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="ps-dropdown language"><a href="#"><img src="{{asset('public/frontend')}}/img/flag/en.png" alt="">English</a>
                                <ul class="ps-dropdown-menu">
                                    <li><a href="#"><img src="{{asset('public/frontend')}}/img/flag/germany.png" alt=""> Germany</a></li>
                                    <li><a href="#"><img src="{{asset('public/frontend')}}/img/flag/fr.png" alt=""> France</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
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



<script>
    $(document).ready(function(){
        //$('.search-section').hide();
        $('#input-search').on('keyup', function(){
            var product_name = $(this).val();
            var category_id = $('#category_id').val();
           //alert(category_id);
            // if (product_name === "") {
            //     $('.search-section').hide();
            //     $('#main_content').show();
            // }else{
            //     $('.search-section').show();
            //     $('#main_content').hide();
            // }

            $.ajax({
                url:"search/product/by/category"+"/"+category_id+"/"+product_name,
                type:'get',
                success:function(data){
                   $('#search-result').empty();
                    $('#search-result').html(data);
                }
            });
        });
    });
</script>

