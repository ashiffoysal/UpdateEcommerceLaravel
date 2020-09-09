@extends('layouts.websiteapp')
@section('content')
 <div id="homepage-2">
        <div class="ps-home-banner">
            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
                <div class="ps-banner--autopart" data-background="{{asset('public/frontend')}}/img/slider/autopart/1.jpg"><img src="{{asset('public/frontend')}}/img/slider/autopart/1.jpg" alt="">
                    <div class="ps-banner__content">
                        <h4>Version 2018</h4>
                        <h3>DUNLOP TIRES <br> FASTER</h3>
                        <p>New version 2018 with many powerful features.</p>
                        <p><strong>Faster, Friction better & Cheap Price</strong></p><a class="ps-btn" href="#">Shop Now</a>
                    </div>
                </div>
                <div class="ps-banner--autopart" data-background="{{asset('public/frontend')}}/img/slider/autopart/2.jpg"><img src="{{asset('public/frontend')}}/img/slider/autopart/2.jpg" alt="">
                    <div class="ps-banner__content">
                        <h4>Version 2018</h4>
                        <h3>CASTROL <br> MOTOR OILS</h3>
                        <p>New version 2018 with many powerful features.</p>
                        <p><strong>Faster, Friction better & Cheap Price</strong></p><a class="ps-btn" href="#">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-top-categories">
            <div class="container">
                <div class="ps-section__header">
                    <h3>TOP CATEGORIES OF THE MONTH</h3>
                </div>
                <div class="ps-section__content"></div>
                <div class="row align-content-lg-stretch">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category-2 ps-block--category-auto-part" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('public/frontend')}}/img/categories/home-2/1.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <h4>INTERIOR</h4>
                                <ul>
                                    <li><a href="shop-default.html">Seats</a></li>
                                    <li><a href="shop-default.html">Steering Wheels</a></li>
                                    <li><a href="shop-default.html">Dash Cover</a></li>
                                    <li><a href="shop-default.html">Floor Mats</a></li>
                                    <li class="more"><a href="#">More<i class="icon-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category-2 ps-block--category-auto-part" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('public/frontend')}}/img/categories/home-2/2.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <h4>EXTERIOR</h4>
                                <ul>
                                    <li><a href="shop-default.html">Running Boards</a></li>
                                    <li><a href="shop-default.html">Custom Grilles</a></li>
                                    <li><a href="shop-default.html">Off-Road Bumpers</a></li>
                                    <li><a href="shop-default.html">Body Kits</a></li>
                                    <li class="more"><a href="#">More<i class="icon-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category-2 ps-block--category-auto-part" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('public/frontend')}}/img/categories/home-2/3.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <h4>WHEELS &amp; TIRES</h4>
                                <ul>
                                    <li><a href="shop-default.html">Custom Wheels</a></li>
                                    <li><a href="shop-default.html">Tires</a></li>
                                    <li><a href="shop-default.html">Factory Wheels</a></li>
                                    <li><a href="shop-default.html">Center Caps</a></li>
                                    <li class="more"><a href="#">More<i class="icon-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category-2 ps-block--category-auto-part" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('public/frontend')}}/img/categories/home-2/4.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <h4>PERFORMANCE</h4>
                                <ul>
                                    <li><a href="shop-default.html">Exhausted System</a></li>
                                    <li><a href="shop-default.html">Brakes</a></li>
                                    <li><a href="shop-default.html">Performance Chips</a></li>
                                    <li><a href="shop-default.html">Starting &amp; Charging</a></li>
                                    <li class="more"><a href="#">More<i class="icon-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category-2 ps-block--category-auto-part" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('public/frontend')}}/img/categories/home-2/5.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <h4>BODY PARTS</h4>
                                <ul>
                                    <li><a href="shop-default.html">Mirrors</a></li>
                                    <li><a href="shop-default.html">Hoods</a></li>
                                    <li><a href="shop-default.html">Bumpers</a></li>
                                    <li><a href="shop-default.html">Quater Panels</a></li>
                                    <li class="more"><a href="#">More<i class="icon-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category-2 ps-block--category-auto-part" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('public/frontend')}}/img/categories/home-2/6.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <h4>LIGHTING</h4>
                                <ul>
                                    <li><a href="shop-default.html">Headlight</a></li>
                                    <li><a href="shop-default.html">Off-Road Light</a></li>
                                    <li><a href="shop-default.html">WSingnal Light</a></li>
                                    <li class="more"><a href="#">More<i class="icon-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-home-promotions">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 "><a class="ps-collection mb-30" href="#"><img src="{{asset('public/frontend')}}/img/promotions/home-2-1.jpg" alt=""></a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 "><a class="ps-collection mb-30" href="#"><img src="{{asset('public/frontend')}}/img/promotions/home-2-2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-product-list ps-recommend-for-you">
            <div class="container">
                <div class="ps-section__header">
                    <h3>RECOMMENDED FOR YOU</h3>
                    <ul class="ps-section__links">
                        <li><a href="shop-grid.html">Best Seller</a></li>
                        <li><a href="shop-grid.html">New Arrivals</a></li>
                        <li><a href="shop-grid.html">Top Rated</a></li>
                        <li><a href="shop-grid.html">Trending Products</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="3" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/1.jpg" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#"></a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Anderson Composites – Custom Hood</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                    </div>
                                    <p class="ps-product__price sale">$990.99 <del>$1050.50 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Anderson Composites – Custom Hood</a>
                                    <p class="ps-product__price sale">$990.99 <del>$1050.50 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/2.jpg" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">ROBERT’S STORE</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Evolution Sport Drilled and Slotted Brake Kit</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span></span>
                                    </div>
                                    <p class="ps-product__price sale">$45.99 <del>$50.50 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Evolution Sport Drilled and Slotted Brake Kit</a>
                                    <p class="ps-product__price sale">$45.99 <del>$50.50 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/3.jpg" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Depo Black Housing Tail Lights Frs Brz 86</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span></span>
                                    </div>
                                    <p class="ps-product__price sale">$100.99 <del>$120.50 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Depo Black Housing Tail Lights Frs Brz 86</a>
                                    <p class="ps-product__price sale">$100.99 <del>$120.50 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/4.jpg" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Anderson Composites – Custom Hood</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$442.99 - $560.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Anderson Composites – Custom Hood</a>
                                    <p class="ps-product__price">$442.99 - $560.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/5.jpg" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simpson Polymer White Racing Helmet</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$625.99 <del>$770.50 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simpson Polymer White Racing Helmet</a>
                                    <p class="ps-product__price sale">$625.99 <del>$770.50 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/6.jpg" alt="" /></a>
                                <div class="ps-product__badge hot">hot</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Gibson – Double Skull Exhaust System</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$1055.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Gibson – Double Skull Exhaust System</a>
                                    <p class="ps-product__price">$1055.99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-deal-hot">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-block--deal-hot" data-mh="dealhot">
                            <div class="ps-block__header">
                                <h3>Deal hot today</h3>
                                <div class="ps-block__navigation"><a class="ps-carousel__prev" href=".ps-carousel--deal-hot"><i class="icon-chevron-left"></i></a><a class="ps-carousel__next" href=".ps-carousel--deal-hot"><i class="icon-chevron-right"></i></a></div>
                            </div>
                            <div class="ps-product__content">
                                <div class="ps-carousel--deal-hot ps-carousel--deal-hot owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                                    <div class="ps-product--detail ps-product--hot-deal">
                                        <div class="ps-product__header">
                                            <div class="ps-product__thumbnail" data-vertical="true">
                                                <figure>
                                                    <div class="ps-wrapper">
                                                        <div class="ps-product__gallery" data-arrow="true">
                                                            <div class="item"><a href="{{asset('public/frontend')}}/img/products/detail/deal-hot/a-1.jpg"><img src="{{asset('public/frontend')}}/img/products/detail/deal-hot/a-1.jpg" alt=""></a></div>
                                                            <div class="item"><a href="{{asset('public/frontend')}}/img/products/detail/deal-hot/a-2.jpg"><img src="{{asset('public/frontend')}}/img/products/detail/deal-hot/a-2.jpg" alt=""></a></div>
                                                            <div class="item"><a href="{{asset('public/frontend')}}/img/products/detail/deal-hot/a-3.jpg"><img src="{{asset('public/frontend')}}/img/products/detail/deal-hot/a-3.jpg" alt=""></a></div>
                                                        </div>
                                                        <div class="ps-product__badge"><span>Save <br> $280.000</span></div>
                                                    </div>
                                                </figure>
                                                <div class="ps-product__variants" data-item="4" data-md="3" data-sm="3" data-arrow="false">
                                                    <div class="item"><img src="{{asset('public/frontend')}}/img/products/detail/deal-hot/a-1.jpg" alt=""></div>
                                                    <div class="item"><img src="{{asset('public/frontend')}}/img/products/detail/deal-hot/a-2.jpg" alt=""></div>
                                                    <div class="item"><img src="{{asset('public/frontend')}}/img/products/detail/deal-hot/a-3.jpg" alt=""></div>
                                                </div>
                                            </div>
                                            <div class="ps-product__info">
                                                <h5>Investor</h5>
                                                <h3 class="ps-product__name">Anderson Composites - Custom Hood</h3>
                                                <div class="ps-product__meta">
                                                    <h4 class="ps-product__price sale">$36.78 <del> $56.99</del></h4>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>(1 review)</span>
                                                    </div>
                                                    <div class="ps-product__specification">
                                                        <p>Status:<strong class="in-stock"> In Stock</strong></p>
                                                    </div>
                                                </div>
                                                <div class="ps-product__expires">
                                                    <p>Expires In</p>
                                                    <ul class="ps-countdown" data-time="July 21, 2020 23:00:00">
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
                                                </div>
                                                <div class="ps-product__processs-bar">
                                                    <div class="ps-progress" data-value="10"><span class="ps-progress__value"></span></div>
                                                    <p><strong>4/79</strong> Sold</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product--detail ps-product--hot-deal">
                                        <div class="ps-product__header">
                                            <div class="ps-product__thumbnail" data-vertical="true">
                                                <figure>
                                                    <div class="ps-wrapper">
                                                        <div class="ps-product__gallery" data-arrow="true">
                                                            <div class="item"><a href="{{asset('public/frontend')}}/img/products/detail/deal-hot/b-1.jpg"><img src="{{asset('public/frontend')}}/img/products/detail/deal-hot/b-1.jpg" alt=""></a></div>
                                                            <div class="item"><a href="{{asset('public/frontend')}}/img/products/detail/deal-hot/b-2.jpg"><img src="{{asset('public/frontend')}}/img/products/detail/deal-hot/b-2.jpg" alt=""></a></div>
                                                            <div class="item"><a href="{{asset('public/frontend')}}/img/products/detail/deal-hot/b-3.jpg"><img src="{{asset('public/frontend')}}/img/products/detail/deal-hot/b-3.jpg" alt=""></a></div>
                                                            <div class="item"><a href="{{asset('public/frontend')}}/img/products/detail/deal-hot/b-4.jpg"><img src="{{asset('public/frontend')}}/img/products/detail/deal-hot/b-4.jpg" alt=""></a></div>
                                                        </div>
                                                        <div class="ps-product__badge"><span>Save <br> $9.000</span></div>
                                                    </div>
                                                </figure>
                                                <div class="ps-product__variants" data-item="4" data-md="3" data-sm="3" data-arrow="false">
                                                    <div class="item"><img src="{{asset('public/frontend')}}/img/products/detail/deal-hot/b-1.jpg" alt=""></div>
                                                    <div class="item"><img src="{{asset('public/frontend')}}/img/products/detail/deal-hot/b-2.jpg" alt=""></div>
                                                    <div class="item"><img src="{{asset('public/frontend')}}/img/products/detail/deal-hot/b-3.jpg" alt=""></div>
                                                    <div class="item"><img src="{{asset('public/frontend')}}/img/products/detail/deal-hot/b-4.jpg" alt=""></div>
                                                </div>
                                            </div>
                                            <div class="ps-product__info">
                                                <h5>Investor</h5>
                                                <h3 class="ps-product__name">Evolution Sport Drilled and Slotted Brake Kit</h3>
                                                <div class="ps-product__meta">
                                                    <h4 class="ps-product__price sale">$97.78 <del> $156.99</del></h4>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>(1 review)</span>
                                                    </div>
                                                    <div class="ps-product__specification">
                                                        <p>Status:<strong class="in-stock"> In Stock</strong></p>
                                                    </div>
                                                </div>
                                                <div class="ps-product__expires">
                                                    <p>Expires In</p>
                                                    <ul class="ps-countdown" data-time="July 21, 2020 23:00:00">
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
                                                </div>
                                                <div class="ps-product__processs-bar">
                                                    <div class="ps-progress" data-value="60"><span class="ps-progress__value"></span></div>
                                                    <p><strong>30/50</strong> Sold</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <aside class="widget widget_best-sale" data-mh="dealhot">
                            <h3 class="widget-title">Top 20 Best Seller</h3>
                            <div class="widget__content">
                                <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                                    <div class="ps-product-group">
                                        <div class="ps-product--horizontal">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/1.jpg" alt="" /></a></div>
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Anderson Composites – Custom Hood</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>02</span>
                                                </div>
                                                <p class="ps-product__price sale">$990.99 <del>$1050.50 </del></p>
                                            </div>
                                        </div>
                                        <div class="ps-product--horizontal">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/2.jpg" alt="" /></a></div>
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Evolution Sport Drilled and Slotted Brake Kit</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span></span>
                                                </div>
                                                <p class="ps-product__price sale">$45.99 <del>$50.50 </del></p>
                                            </div>
                                        </div>
                                        <div class="ps-product--horizontal">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/3.jpg" alt="" /></a></div>
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Depo Black Housing Tail Lights Frs Brz 86</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span></span>
                                                </div>
                                                <p class="ps-product__price sale">$100.99 <del>$120.50 </del></p>
                                            </div>
                                        </div>
                                        <div class="ps-product--horizontal">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/4.jpg" alt="" /></a></div>
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Anderson Composites – Custom Hood</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__price">$442.99 - $560.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product-group">
                                        <div class="ps-product--horizontal">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/3.jpg" alt="" /></a></div>
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Depo Black Housing Tail Lights Frs Brz 86</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span></span>
                                                </div>
                                                <p class="ps-product__price sale">$100.99 <del>$120.50 </del></p>
                                            </div>
                                        </div>
                                        <div class="ps-product--horizontal">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/4.jpg" alt="" /></a></div>
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Anderson Composites – Custom Hood</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__price">$442.99 - $560.00</p>
                                            </div>
                                        </div>
                                        <div class="ps-product--horizontal">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/5.jpg" alt="" /></a></div>
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simpson Polymer White Racing Helmet</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__price sale">$625.99 <del>$770.50 </del></p>
                                            </div>
                                        </div>
                                        <div class="ps-product--horizontal">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/6.jpg" alt="" /></a></div>
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Gibson – Double Skull Exhaust System</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__price">$1055.99</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-promotion ps-promotion--2">
            <div class="container"><a class="ps-collection" href="#"><img src="{{asset('public/frontend')}}/img/promotions/home-2-3.jpg" alt=""></a></div>
        </div>
        <div class="ps-best-sale-brands ps-section--furniture">
            <div class="container">
                <div class="ps-section__header">
                    <h3>BEST SELLER BRANDS</h3>
                </div>
                <div class="ps-section__content">
                    <ul class="ps-image-list">
                        <li><a href="#"><img src="{{asset('public/frontend')}}/img/brand/2-1.jpg" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('public/frontend')}}/img/brand/2-2.jpg" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('public/frontend')}}/img/brand/2-3.jpg" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('public/frontend')}}/img/brand/2-4.jpg" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('public/frontend')}}/img/brand/2-5.jpg" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('public/frontend')}}/img/brand/2-6.jpg" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('public/frontend')}}/img/brand/2-7.jpg" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('public/frontend')}}/img/brand/2-8.jpg" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('public/frontend')}}/img/brand/2-9.jpg" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('public/frontend')}}/img/brand/2-10.jpg" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ps-client-say">
            <div class="container">
                <div class="ps-section__header">
                    <h3>What client say</h3>
                    <div class="ps-section__nav"><a class="ps-carousel__prev" href=".ps-carousel--testimonials"><i class="icon-chevron-left"></i></a><a class="ps-carousel__next" href=".ps-carousel--testimonials"><i class="icon-chevron-right"></i></a></div>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--testimonials owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="2" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="2" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-block--testimonial">
                            <div class="ps-block__header"><img src="{{asset('public/frontend')}}/img/users/1.jpg" alt=""></div>
                            <div class="ps-block__content"><i class="icon-quote-close"></i>
                                <h4>Kanye West<span>Head Chef at BBQ Restaurant</span></h4>
                                <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                            </div>
                        </div>
                        <div class="ps-block--testimonial">
                            <div class="ps-block__header"><img src="{{asset('public/frontend')}}/img/users/2.png" alt=""></div>
                            <div class="ps-block__content"><i class="icon-quote-close"></i>
                                <h4>Anabella Kleva<span>Boss at TocoToco</span></h4>
                                <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                            </div>
                        </div>
                        <div class="ps-block--testimonial">
                            <div class="ps-block__header"><img src="{{asset('public/frontend')}}/img/users/3.jpg" alt=""></div>
                            <div class="ps-block__content"><i class="icon-quote-close"></i>
                                <h4>William Roles<span>Head Chef at BBQ Restaurant</span></h4>
                                <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-site-features">
            <div class="container">
                <div class="ps-block--site-features ps-block--site-features-2">
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-rocket"></i></div>
                        <div class="ps-block__right">
                            <h4>Free Delivery</h4>
                            <p>For all oders over $99</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-sync"></i></div>
                        <div class="ps-block__right">
                            <h4>90 Days Return</h4>
                            <p>If goods have problems</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-credit-card"></i></div>
                        <div class="ps-block__right">
                            <h4>Secure Payment</h4>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                        <div class="ps-block__right">
                            <h4>24/7 Support</h4>
                            <p>Dedicated support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection