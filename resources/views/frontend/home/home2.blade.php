@extends('layouts.websiteapp')
@section('content')

<div id="homepage-8">
        <div class="ps-home-banner">
            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
                <div class="ps-banner--furniture" data-background="{{asset('public/frontend')}}/img/slider/home-8/1.jpg"><img src="{{asset('public/frontend')}}/img/slider/home-8/1.jpg" alt="">
                    <div class="ps-banner__content">
                        <h4>Limit Edition</h4>
                        <h3>SCADINAVIA <br/> COLLECTIONS FOR YOUR <br/> BEDROOM JUST <strong> 40%</strong></h3><a class="ps-btn" href="#">Shop Now</a>
                    </div>
                </div>
                <div class="ps-banner--furniture" data-background="{{asset('public/frontend')}}/img/slider/home-8/2.jpg"><img src="{{asset('public/frontend')}}/img/slider/home-8/2.jpg" alt="">
                    <div class="ps-banner__content">
                        <h4>Version 2018</h4>
                        <h3>HAPPY SUMMER <br/> WOODEN FURNTITURE <br/> SALE <strong> $599</strong></h3><a class="ps-btn" href="#">Shop Now</a>
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
        <div class="ps-home-promotions">
            <div class="container">
                <div class="ps-section__header">
                    <h3>WELCOME TO <span>MARTFURY</span> – CUSTOM FURNITURE <span>SHOPPING STORE ONLINE</span></h3>
                    <p>Designer furniture. Locally designed. Globally Crafted.</p>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{asset('public/frontend')}}/img/promotions/home-8/1.jpg" alt=""></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{asset('public/frontend')}}/img/promotions/home-8/2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-home-trending-products ps-section--furniture">
            <div class="container">
                <div class="ps-section__header">
                    <h3>BEST SELLER PRODUCTS</h3>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/11.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Wood Combine With Leather Chair</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$98.59</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simple Wood Combine With Leather Chair</a>
                                    <p class="ps-product__price">$98.59</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/1.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Claure Austin Lover Round Chair White Wooden</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$99.59</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Claure Austin Lover Round Chair White Wooden</a>
                                    <p class="ps-product__price">$99.59</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/2.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$320.59</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Color</a>
                                    <p class="ps-product__price">$320.59</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/3.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$320.59</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                    <p class="ps-product__price">$320.59</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/4.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton Throw Pillow</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$13.59</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton Throw Pillow</a>
                                    <p class="ps-product__price">$13.59</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/5.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Short TV Board Combine Book Shelf</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$13.59</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simple Short TV Board Combine Book Shelf</a>
                                    <p class="ps-product__price">$13.59</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/6.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Tea Teable With Glass Surface</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$249.59</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simple Tea Teable With Glass Surface</a>
                                    <p class="ps-product__price">$249.59</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/7.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Stadler Form Otto African Sapele Wood</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$249.59</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Stadler Form Otto African Sapele Wood</a>
                                    <p class="ps-product__price">$249.59</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-home-categories ps-section--furniture">
            <div class="container">
                <div class="ps-section__header">
                    <h3>Shop by categories</h3>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="ps-block--category"><a href="shop-default.html"></a><img src="{{asset('public/frontend')}}/img/categories/furniture/1.png" alt="">
                                <p>Sofas</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="ps-block--category"><a href="shop-default.html"></a><img src="{{asset('public/frontend')}}/img/categories/furniture/2.png" alt="">
                                <p>Chairs</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="ps-block--category"><a href="shop-default.html"></a><img src="{{asset('public/frontend')}}/img/categories/furniture/3.png" alt="">
                                <p>Tables</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="ps-block--category"><a href="shop-default.html"></a><img src="{{asset('public/frontend')}}/img/categories/furniture/4.png" alt="">
                                <p>TV Boards</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="ps-block--category"><a href="shop-default.html"></a><img src="{{asset('public/frontend')}}/img/categories/furniture/5.png" alt="">
                                <p>Storages</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="ps-block--category"><a href="shop-default.html"></a><img src="{{asset('public/frontend')}}/img/categories/furniture/6.png" alt="">
                                <p>Rugs</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="ps-block--category"><a href="shop-default.html"></a><img src="{{asset('public/frontend')}}/img/categories/furniture/7.png" alt="">
                                <p>Lamp &amp; Lighting</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="ps-block--category"><a href="shop-default.html"></a><img src="{{asset('public/frontend')}}/img/categories/furniture/8.png" alt="">
                                <p>Furnishings</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="ps-block--category"><a href="shop-default.html"></a><img src="{{asset('public/frontend')}}/img/categories/furniture/9.png" alt="">
                                <p>Ottomans</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="ps-block--category"><a href="shop-default.html"></a><img src="{{asset('public/frontend')}}/img/categories/furniture/10.png" alt="">
                                <p>Shelfs</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="ps-block--category"><a href="shop-default.html"></a><img src="{{asset('public/frontend')}}/img/categories/furniture/11.png" alt="">
                                <p>Kid Furnitures</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <div class="ps-block--category"><a href="shop-default.html"></a><img src="{{asset('public/frontend')}}/img/categories/furniture/12.png" alt="">
                                <p>Kitchen</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-home-promotion-2">
            <div class="container"><a href="#"><img src="{{asset('public/frontend')}}/img/promotions/home-8/3.jpg" alt=""></a></div>
        </div>
        <div class="ps-home-trending-products ps-section--furniture">
            <div class="container">
                <div class="ps-section__header">
                    <h3>Trending Products</h3>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/12.jpg" alt=""></a>
                                <div class="ps-product__badge">-5%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$500.99 <del>$510.00 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                    <p class="ps-product__price sale">$500.99 <del>$510.00 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/8.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Wood Simple Tea Table</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$393.38</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Wood Simple Tea Table</a>
                                    <p class="ps-product__price">$393.38</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/10.jpg" alt=""></a>
                                <div class="ps-product__badge">-24%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastic Chair In Gray Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                    </div>
                                    <p class="ps-product__price sale">$25.00 <del>$50.00 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simple Plastic Chair In Gray Color</a>
                                    <p class="ps-product__price sale">$25.00 <del>$50.00 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/9.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Small Wood 4 Boxes Storage</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$64.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Small Wood 4 Boxes Storage</a>
                                    <p class="ps-product__price">$64.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/11.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Wood Combine With Leather Chair</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$98.59</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simple Wood Combine With Leather Chair</a>
                                    <p class="ps-product__price">$98.59</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/1.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Claure Austin Lover Round Chair White Wooden</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$99.59</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Claure Austin Lover Round Chair White Wooden</a>
                                    <p class="ps-product__price">$99.59</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/2.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$320.59</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Color</a>
                                    <p class="ps-product__price">$320.59</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/3.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$320.59</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                    <p class="ps-product__price">$320.59</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/4.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton Throw Pillow</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$13.59</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton Throw Pillow</a>
                                    <p class="ps-product__price">$13.59</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/furniture/5.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Short TV Board Combine Book Shelf</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$13.59</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simple Short TV Board Combine Book Shelf</a>
                                    <p class="ps-product__price">$13.59</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-section--furniture ps-home-shop-by-room">
            <div class="container">
                <div class="ps-section__header">
                    <h3>SHOP BY ROOM</h3>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-block--category-room">
                                <div class="ps-block__thumbnail"><a href="shop-default.html"><img src="{{asset('public/frontend')}}/img/categories/furniture/room-1.png" alt=""></a></div>
                                <div class="ps-block__content"><a href="#">Living Rooom</a></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-block--category-room">
                                <div class="ps-block__thumbnail"><a href="shop-default.html"><img src="{{asset('public/frontend')}}/img/categories/furniture/room-2.png" alt=""></a></div>
                                <div class="ps-block__content"><a href="#">Bedroom</a></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-block--category-room">
                                <div class="ps-block__thumbnail"><a href="shop-default.html"><img src="{{asset('public/frontend')}}/img/categories/furniture/room-3.png" alt=""></a></div>
                                <div class="ps-block__content"><a href="#">Dinning Room</a></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-block--category-room">
                                <div class="ps-block__thumbnail"><a href="shop-default.html"><img src="{{asset('public/frontend')}}/img/categories/furniture/room-4.png" alt=""></a></div>
                                <div class="ps-block__content"><a href="#">Kitchen</a></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-block--category-room">
                                <div class="ps-block__thumbnail"><a href="shop-default.html"><img src="{{asset('public/frontend')}}/img/categories/furniture/room-5.png" alt=""></a></div>
                                <div class="ps-block__content"><a href="#">Bathroom</a></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-block--category-room">
                                <div class="ps-block__thumbnail"><a href="shop-default.html"><img src="{{asset('public/frontend')}}/img/categories/furniture/room-6.png" alt=""></a></div>
                                <div class="ps-block__content"><a href="#">Kid's Room</a></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-block--category-room">
                                <div class="ps-block__thumbnail"><a href="shop-default.html"><img src="{{asset('public/frontend')}}/img/categories/furniture/room-7.png" alt=""></a></div>
                                <div class="ps-block__content"><a href="#">Patio &amp; Outdoor</a></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-block--category-room">
                                <div class="ps-block__thumbnail"><a href="shop-default.html"><img src="{{asset('public/frontend')}}/img/categories/furniture/room-8.png" alt=""></a></div>
                                <div class="ps-block__content"><a href="#">Office</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    </div>

@endsection