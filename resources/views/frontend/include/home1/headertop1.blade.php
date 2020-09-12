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
                    <form class="ps-form--quick-search" action="index.html" method="get">
                        <div class="form-group--icon"><i class="icon-chevron-down"></i>
                            <select class="form-control">
                                <option value="0" selected="selected">All</option>
                                <option class="level-0" value="babies-moms">Babies & Moms</option>
                        
                                
                            </select>
                        </div>
                        <input class="form-control" type="text" placeholder="I'm shopping for..." id="input-search">
                        <button>Search</button>
                        <div class="ps-panel--search-result">
                            <div class="ps-panel__content">
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/1.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 32GB</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span></span>
                                        </div>
                                        <p class="ps-product__price">$990.50</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/1.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span></span>
                                        </div>
                                        <p class="ps-product__price">$1120.50</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/1.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 128GB</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span></span>
                                        </div>
                                        <p class="ps-product__price">$1220.50</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/2.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$36.78 – $56.99</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/3.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price">$125.30</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/4.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price">$55.30</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/5.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$41.27 <del>$52.99 </del></p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/6.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$41.27 <del>$62.39 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-panel__footer text-center"><a href="shop-default.html">See all results</a></div>
                        </div>
                    </form>
                </div>
                <div class="header__right">
                    <div class="header__actions"><a class="header__extra" href="#"><i class="icon-chart-bars"></i><span><i>0</i></span></a><a class="header__extra" href="#"><i class="icon-heart"></i><span><i>0</i></span></a>
                        <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
                            <div class="ps-cart__content">
                                <div class="ps-cart__items">
                                    <div class="ps-product--cart-mobile">
                                        <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('public/frontend')}}/img/products/clothing/7.jpg" alt=""></a></div>
                                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                        </div>
                                    </div>
                                    <div class="ps-product--cart-mobile">
                                        <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('public/frontend')}}/img/products/clothing/5.jpg" alt=""></a></div>
                                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-cart__footer">
                                    <h3>Sub Total:<strong>$59.99</strong></h3>
                                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="ps-block--user-header">
                            <div class="ps-block__left"><i class="icon-user"></i></div>
                            <div class="ps-block__right"><a href="{{route('customar.login.form')}}">Login</a><a href="{{route('customar.login.form')}}">Register</a></div>
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