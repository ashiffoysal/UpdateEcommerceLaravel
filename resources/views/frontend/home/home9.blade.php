@extends('layouts.websiteapp')
@section('content')
 <div id="homepage-9">
        <div class="ps-home-banner">
            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
                <div class="ps-banner--organic" data-background="{{asset('public/frontend')}}/img/slider/home-9/1.jpg"><img src="{{asset('public/frontend')}}/img/slider/home-9/1.jpg" alt="">
                    <div class="ps-banner__content">
                        <h4>Weekend Promotions</h4>
                        <h3>Happy Summer <br /> combo super discount <br /> up to<strong>40% Off</strong></h3><a class="ps-btn" href="#">Shop Now</a>
                    </div>
                </div>
                <div class="ps-banner--organic" data-background="{{asset('public/frontend')}}/img/slider/home-9/2.jpg"><img src="{{asset('public/frontend')}}/img/slider/home-9/2.jpg" alt="">
                    <div class="ps-banner__content">
                        <h4>Weekend Promotions</h4>
                        <h3>Fresh vegetables & <br /> fruits basket <br /> up to<strong>40% Off</strong></h3><a class="ps-btn" href="#">Shop Now</a>
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
        <div class="ps-top-categories">
            <div class="container">
                <h3>Top categories of the month</h3>
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('public/frontend')}}/img/categories/organic/1.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <p>Milks &amp; Creams</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('public/frontend')}}/img/categories/organic/2.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <p>Fruits</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('public/frontend')}}/img/categories/organic/3.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <p>Vegetables</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('public/frontend')}}/img/categories/organic/4.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <p>Ocean Foods</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('public/frontend')}}/img/categories/organic/5.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <p>Butters &amp; Eggs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('public/frontend')}}/img/categories/organic/6.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <p>Fresh Meats</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-home-promotion">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{asset('public/frontend')}}/img/promotions/home-9/1.jpg" alt=""></a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{asset('public/frontend')}}/img/promotions/home-9/2.jpg" alt=""></a>
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
                                <div class="ps-carousel--deal-hot ps-carousel--deal-hot owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                                    <div class="ps-product--detail ps-product--hot-deal">
                                        <div class="ps-product__header">
                                            <div class="ps-product__thumbnail" data-vertical="true">
                                                <figure>
                                                    <div class="ps-wrapper">
                                                        <div class="ps-product__gallery" data-arrow="true">
                                                            <div class="item"><a href="{{asset('public/frontend')}}/img/products/home-9/a-1.jpg"><img src="{{asset('public/frontend')}}/img/products/home-9/a-1.jpg" alt=""></a></div>
                                                            <div class="item"><a href="{{asset('public/frontend')}}/img/products/home-9/a-2.jpg"><img src="{{asset('public/frontend')}}/img/products/home-9/a-2.jpg" alt=""></a></div>
                                                            <div class="item"><a href="{{asset('public/frontend')}}/img/products/home-9/a-3.jpg"><img src="{{asset('public/frontend')}}/img/products/home-9/a-3.jpg" alt=""></a></div>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="ps-product__variants" data-item="4" data-md="3" data-sm="3" data-arrow="false">
                                                    <div class="item"><img src="{{asset('public/frontend')}}/img/products/home-9/a-1.jpg" alt=""></div>
                                                    <div class="item"><img src="{{asset('public/frontend')}}/img/products/home-9/a-2.jpg" alt=""></div>
                                                    <div class="item"><img src="{{asset('public/frontend')}}/img/products/home-9/a-3.jpg" alt=""></div>
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
                                                            <div class="item"><a href="{{asset('public/frontend')}}/img/products/home-9/b-1.jpg"><img src="{{asset('public/frontend')}}/img/products/home-9/b-1.jpg" alt=""></a></div>
                                                            <div class="item"><a href="{{asset('public/frontend')}}/img/products/home-9/b-2.jpg"><img src="{{asset('public/frontend')}}/img/products/home-9/b-2.jpg" alt=""></a></div>
                                                            <div class="item"><a href="{{asset('public/frontend')}}/img/products/home-9/b-3.jpg"><img src="{{asset('public/frontend')}}/img/products/home-9/b-3.jpg" alt=""></a></div>
                                                            <div class="item"><a href="{{asset('public/frontend')}}/img/products/home-9/b-4.jpg"><img src="{{asset('public/frontend')}}/img/products/home-9/b-4.jpg" alt=""></a></div>
                                                        </div>
                                                        <div class="ps-product__badge"><span>Save <br> $9.000</span></div>
                                                    </div>
                                                </figure>
                                                <div class="ps-product__variants" data-item="4" data-md="3" data-sm="3" data-arrow="false">
                                                    <div class="item"><img src="{{asset('public/frontend')}}/img/products/home-9/b-1.jpg" alt=""></div>
                                                    <div class="item"><img src="{{asset('public/frontend')}}/img/products/home-9/b-2.jpg" alt=""></div>
                                                    <div class="item"><img src="{{asset('public/frontend')}}/img/products/home-9/b-3.jpg" alt=""></div>
                                                    <div class="item"><img src="{{asset('public/frontend')}}/img/products/home-9/b-4.jpg" alt=""></div>
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
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/1.jpg" alt=""></a></div>
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
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/2.jpg" alt=""></a></div>
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
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/3.jpg" alt=""></a></div>
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
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/4.jpg" alt=""></a></div>
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
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/3.jpg" alt=""></a></div>
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
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/4.jpg" alt=""></a></div>
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
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/5.jpg" alt=""></a></div>
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
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/home-2/recommend/6.jpg" alt=""></a></div>
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
        <div class="ps-product-list ps-product-list--2">
            <div class="container">
                <div class="ps-section__header">
                    <h3>New Arrivals</h3>
                    <ul class="ps-section__links">
                        <li><a href="shop-grid.html">Milks & Creams</a></li>
                        <li><a href="shop-grid.html">Fruits</a></li>
                        <li><a href="shop-grid.html">Vegetables</a></li>
                        <li><a href="shop-grid.html">Ocean Foods</a></li>
                        <li><a href="shop-grid.html">Fresh Meats</a></li>
                        <li><a href="shop-grid.html">View All</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/organic/1.jpg" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Locally Grown Strawberries, 1 Pint</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$20.99</p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Locally Grown Strawberries, 1 Pint</a>
                                        <p class="ps-product__price">$20.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/organic/2.jpg" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Organic Oranges Valencia 1kg</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$1.99</p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Organic Oranges Valencia 1kg</a>
                                        <p class="ps-product__price">$1.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/organic/3.jpeg" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Pineapple (Tropical Gold)</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$2.99</p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Pineapple (Tropical Gold)</a>
                                        <p class="ps-product__price">$2.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/organic/4.jpg" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Tesco Eat Fresh Frozen Lamb Bone in Cube</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$23.99</p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Tesco Eat Fresh Frozen Lamb Bone in Cube</a>
                                        <p class="ps-product__price">$23.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/organic/5.jpg" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">MariGold 100% Juice Milk 350ml</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$3.95</p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">MariGold 100% Juice Milk 350ml</a>
                                        <p class="ps-product__price">$3.95</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/organic/6.jpg" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">HomeSoy Soya Milk Originall</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$9.95</p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">HomeSoy Soya Milk Originall</a>
                                        <p class="ps-product__price">$9.95</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/organic/7.jpeg" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Australia Banana 16 Pack 2.5 kg</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$59.95</p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Australia Banana 16 Pack 2.5 kg</a>
                                        <p class="ps-product__price">$59.95</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/organic/8.jpg" alt=""></a>
                                    <div class="ps-product__badge">12%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Augason Farms Freeze Dried Beef Chunks</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$42.95 <del>$49.20</del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Augason Farms Freeze Dried Beef Chunks</a>
                                        <p class="ps-product__price">$42.95 <del>$49.20</del></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/organic/9.jpg" alt=""></a>
                                    <div class="ps-product__badge">12%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Vita Coco Coconut Water (Pack of 12)</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$21.95 <del>$18.20</del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Vita Coco Coconut Water (Pack of 12)</a>
                                        <p class="ps-product__price">$21.95 <del>$18.20</del></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/organic/10.jpg" alt=""></a>
                                    <div class="ps-product__badge">12%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Ocean Spray 100% Juice, 10 Ounce Bottle</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$4.95 <del>$5.20</del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Ocean Spray 100% Juice, 10 Ounce Bottle</a>
                                        <p class="ps-product__price">$4.95 <del>$5.20</del></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-client-say bg--cover" data-background="{{asset('public/frontend')}}/img/bg/testimonial-organic.jpg">
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
        <div class="ps-section--default ps-home-blog">
            <div class="container">
                <div class="ps-section__header">
                    <h3>News</h3>
                    <ul class="ps-section__links">
                        <li><a href="#">News</a></li>
                        <li><a href="#">Review Products</a></li>
                        <li><a href="#">Tips & Tricks</a></li>
                        <li><a href="#">Promotions</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">See All</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 ">
                            <div class="ps-post">
                                <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img src="{{asset('public/frontend')}}/img/blog/organic/1.jpg" alt=""></div>
                                <div class="ps-post__content"><a class="ps-post__meta" href="#">Tips & Tricks</a><a class="ps-post__title" href="#">How To Make A Fresh Juice Blended For Your Family?</a>
                                    <p>December 17, 2017 by<a href="#"> drfurion</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 ">
                            <div class="ps-post">
                                <div class="ps-post__thumbnail">
                                    <div class="ps-post__badge"><i class="icon-volume-high"></i></div><a class="ps-post__overlay" href="blog-detail.html"></a><img src="{{asset('public/frontend')}}/img/blog/organic/2.jpg" alt="">
                                </div>
                                <div class="ps-post__content"><a class="ps-post__meta" href="#">Review Product</a><a class="ps-post__title" href="#">Fresh Eggs From Caroline’s Farm</a>
                                    <p>December 17, 2017 by<a href="#"> drfurion</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 ">
                            <div class="ps-post">
                                <div class="ps-post__thumbnail">
                                    <div class="ps-post__badge"><i class="icon-volume-high"></i></div>
                                    <div class="ps-post__badge"><i class="icon-volume-high"></i></div><a class="ps-post__overlay" href="blog-detail.html"></a><img src="{{asset('public/frontend')}}/img/blog/organic/3.jpg" alt="">
                                </div>
                                <div class="ps-post__content"><a class="ps-post__meta" href="#">News</a><a class="ps-post__title" href="#">Discover Fresh Organic Farms In Switzeland Villages</a>
                                    <p>December 17, 2017 by<a href="#"> drfurion</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection