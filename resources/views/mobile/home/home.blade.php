@extends('mobile.master')
@section('main_content')
<div class="col-xs-12 no-padding">
    <div class="module sohomepage-slider ">
        <div class="modcontent">
            <div id="sohomepage-slider">
                <div class="so-homeslider contentslider" data-rtl="no" data-autoplay="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-item_xs="1" data-item_sm="1" data-arrows="no" data-pagination="yes" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
                    <div class="item ">
                        <a href="index.html?route=mobile/home" title="slider2" target="_self">
                            <img class="responsive" src="{{asset('public/mobile')}}/image/demo-mobile/slider/banner-mobile-1.png" alt="slider2">
                        </a>
                        <div class="sohomeslider-description"></div>
                    </div>
                    <div class="item ">
                        <a href="#" title="slider3" target="_self">
                            <img class="responsive" src="{{asset('public/mobile')}}/image/demo-mobile/slider/banner-mobile-2.jpg" alt="slider3">
                        </a>
                        <div class="sohomeslider-description"></div>
                    </div>
                    <div class="item ">
                        <a href="#" title="slider1" target="_self">
                            <img class="responsive" src="{{asset('public/mobile')}}/image/demo-mobile/slider/banner-mobile-3.jpg" alt="slider1">
                        </a>
                        <div class="sohomeslider-description"></div>
                    </div>
                </div>
                <div class="loading-placeholder"></div>
            </div>
        </div>

    </div>
</div>
<div class="col-xs-12 no-padding">
    <div class="mobile-bn1-h1 clearfix">
        <div class="banners">
            <div class="banner21">
                <a href="#">
                    <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/banner-mobile-2.png" alt="Image Client">
                </a>
            </div>
            <div class="banner21">
                <a href="#">
                    <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/banner-mobile-3.png" alt="Image Client">
                </a>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12 ">
    <div class="module no-margin">
        <div class="block-categories">
            <h3 class="modtitle"><span>Featured Categories</span></h3>
            <div class="loading-placeholder"></div>
            <div class="cate-content contentslider" data-rtl="no" data-autoplay="no" data-autowidth="yes" data-delay="4" data-speed="0.6" data-margin="10" data-col-xs="1" data-col-sm="1" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
                <div class="cate cate1">
                    <div class="inner"><img src="{{asset('public/mobile')}}/image/demo-mobile/banner/home1/cate1.jpg" alt="Static Image"><a href="#">Watch</a></div>
                </div>
                <div class="cate cate2">
                    <div class="inner"><img src="{{asset('public/mobile')}}/image/demo-mobile/banner/home1/cate2.jpg" alt="Static Image"><a href="#">Bags</a></div>
                </div>
                <div class="cate cate3">
                    <div class="inner"><img src="{{asset('public/mobile')}}/image/demo-mobile/banner/home1/cate3.jpg" alt="Static Image"><a href="#">Swimwear</a></div>
                </div>
                <div class="cate cate4">
                    <div class="inner"><img src="{{asset('public/mobile')}}/image/demo-mobile/banner/home1/cate4.jpg" alt="Static Image"><a href="#">Shoes</a></div>
                </div>
                <div class="cate cate5">
                    <div class="inner"><img src="{{asset('public/mobile')}}/image/demo-mobile/banner/home1/cate5.jpg" alt="Static Image"><a href="#">Fashion</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12 ">
    <div class="module mobile_deals ">
        <h3 class="modtitle font-ct"><span>Top Deals</span></h3>
        <div class="modcontent">
            <div class="so-deal products-list grid">
                <div class="loading-placeholder"></div>
                <div class="contentslider" data-rtl="no" data-autoplay="no" data-autowidth="yes" data-delay="4" data-speed="0.6" data-margin="10" data-col-xs="2" data-col-sm="2" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container ">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">-15%</span>
                                        </div>
                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/mobile')}}/image/demo-mobile/shop/3-160x160.jpg" alt="Hamburger shoulder" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Hamburger shoulder">Hamburger shoulder</a></h4>
                                        <p class="price">
                                            <span class="price-new">$60.00</span> <span class="price-old">$71.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container  transition">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                -24%
                                            </span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/mobile')}}/image/demo-mobile/shop/11-160x160.jpg" alt="Adipisicing ground" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Adipisicing ground">Adipisicing ground</a></h4>
                                        <p class="price">
                                            <span class="price-new">$42.00</span> <span class="price-old">$55.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container  transition">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                -27%
                                            </span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/mobile')}}/image/demo-mobile/shop/10-160x160.jpg" alt="Doner spareribs" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Doner spareribs">Doner spareribs</a></h4>
                                        <p class="price">
                                            <span class="price-new">$41.00</span> <span class="price-old">$56.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container  transition">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                -24%
                                            </span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/mobile')}}/image/demo-mobile/shop/2-160x160.jpg" alt="Capicola sausagops" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Capicola sausagops">Capicola sausagops</a></h4>
                                        <p class="price">
                                            <span class="price-new">$50.00</span> <span class="price-old">$66.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container  transition">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">-36% </span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/mobile')}}/image/demo-mobile/shop/15-160x160.jpg" alt="Fuzan sumamipon" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Fuzan sumamipon">Fuzan sumamipon</a></h4>
                                        <p class="price">
                                            <span class="price-new">$45.00</span> <span class="price-old">$70.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </div>

    </div>
</div>
<div class="col-xs-12">
    <div class="mobile-bn2-h1 clearfix">
        <div class="banners">
            <a href="index.html">
                <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/banner-mobile-4.png" alt="Image Client">
            </a>
        </div>
    </div>
</div>


<div class="col-xs-12 ">
    <div class="module mobile_deals ">
        <h3 class="modtitle font-ct"><span>New Arrivals</span></h3>
        <div class="modcontent">
            <div class="so-deal products-list grid">
                <div class="loading-placeholder"></div>
                <div class="contentslider" data-rtl="no" data-autoplay="no" data-autowidth="yes" data-delay="4" data-speed="0.6" data-margin="10" data-col-xs="2" data-col-sm="2" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container ">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">-15%</span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/mobile')}}/image/demo-mobile/shop/20-160x160.jpg" alt="Hamburger shoulder" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Hamburger shoulder">Hamburger shoulder</a></h4>
                                        <p class="price">
                                            <span class="price-new">$40.00</span> <span class="price-old">$65.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container  transition">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                -24%
                                            </span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/mobile')}}/image/demo-mobile/shop/12-160x160.jpg" alt="Adipisicing ground" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Adipisicing ground">Adipisicing ground</a></h4>
                                        <p class="price">
                                            <span class="price-new">$38.00</span> <span class="price-old">$55.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container  transition">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                -27%
                                            </span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/mobile')}}/image/demo-mobile/shop/11-160x160.jpg" alt="Doner spareribs" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Doner spareribs">Doner spareribs</a></h4>
                                        <p class="price">
                                            <span class="price-new">$41.00</span> <span class="price-old">$56.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container  transition">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                -24%
                                            </span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/mobile')}}/image/demo-mobile/shop/2-160x160.jpg" alt="Capicola sausagops" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Capicola sausagops">Capicola sausagops</a></h4>
                                        <p class="price">
                                            <span class="price-new">$50.00</span> <span class="price-old">$66.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container  transition">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                -36%
                                            </span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/mobile')}}/image/demo-mobile/shop/15-160x160.jpg" alt="Fuzan sumamipon" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Fuzan sumamipon">Fuzan sumamipon</a></h4>
                                        <p class="price">
                                            <span class="price-new">$45.00</span> <span class="price-old">$70.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>


        </div>

    </div>
</div>

<div class="col-xs-12 ">
    <div class="mobile-bn3-h2 clearfix">
        <a href="#">
            <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/home3/banner-home34.jpg" alt="Image Client">
        </a>

    </div>
    <div class="mobile-bn3-h2 clearfix">
        <a href="index.html">
            <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/home3/banner-home35.jpg" alt="Image Client">
        </a>
    </div>
</div>

<div class="col-xs-12 ">
    <div class="module mobile_deals ">
        <h3 class="modtitle font-ct"><span>Best Sellers</span></h3>
        <div class="modcontent">
            <div class="so-deal products-list grid">
                <div class="loading-placeholder"></div>
                <div class="contentslider" data-rtl="no" data-autoplay="no" data-autowidth="yes" data-delay="4" data-speed="0.6" data-margin="10" data-col-xs="2" data-col-sm="2" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container ">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">-15%</span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/mobile')}}/image/demo-mobile/shop/20-160x160.jpg" alt="Hamburger shoulder" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Hamburger shoulder">Hamburger shoulder</a></h4>
                                        <p class="price">
                                            <span class="price-new">$40.00</span> <span class="price-old">$65.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container  transition">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                -24%
                                            </span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/mobile')}}/image/demo-mobile/shop/12-160x160.jpg" alt="Adipisicing ground" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Adipisicing ground">Adipisicing ground</a></h4>
                                        <p class="price">
                                            <span class="price-new">$38.00</span> <span class="price-old">$55.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container  transition">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                -27%
                                            </span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/mobile')}}/image/demo-mobile/shop/11-160x160.jpg" alt="Doner spareribs" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Doner spareribs">Doner spareribs</a></h4>
                                        <p class="price">
                                            <span class="price-new">$41.00</span> <span class="price-old">$56.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container  transition">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                -24%
                                            </span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/mobile')}}/image/demo-mobile/shop/2-160x160.jpg" alt="Capicola sausagops" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Capicola sausagops">Capicola sausagops</a></h4>
                                        <p class="price">
                                            <span class="price-new">$50.00</span> <span class="price-old">$66.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="product-layout">
                            <div class="product-item-container  transition">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                -36%
                                            </span>
                                        </div>

                                        <a href="product.html" target="_self">
                                            <img src="{{asset('public/mobile')}}/image/demo-mobile/shop/15-160x160.jpg" alt="Fuzan sumamipon" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4 class="font-ct"><a href="product.html" target="_self" title="Fuzan sumamipon">Fuzan sumamipon</a></h4>
                                        <p class="price">
                                            <span class="price-new">$45.00</span> <span class="price-old">$70.00</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>


        </div>

    </div>
</div>
<div class="col-xs-12 no-padding">
    <div class="mobile-bn1-h1 clearfix">
        <div class="banners">
            <div class="banner21">
                <a href="#">
                    <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/banner-mobile-5.png" alt="Image Client">
                </a>
            </div>
            <div class="banner21">
                <a href="#">
                    <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/banner-mobile-6.png" alt="Image Client">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-xs-12">
    <div class=" module">
        <h3 class="modtitle"><span>Top Brands</span></h3>
        <div class="contentslider" data-rtl="no" data-autoplay="no" data-autowidth="yes" data-delay="4" data-speed="0.6" data-margin="10" data-col-xs="1" data-col-ms="1" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
            <div class="item-brand item-scroll">
                <a href="#">
                    <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/brand-mobile.jpg" alt="Image Client">
                </a>
            </div>
            <div class="item-brand item-scroll">
                <a href="#">
                    <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/brand-mobile.jpg" alt="Image Client">
                </a>
            </div>
            <div class="item-brand item-scroll">
                <a href="#">
                    <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/brand-mobile.jpg" alt="Image Client">
                </a>
            </div>
            <div class="item-brand item-scroll">
                <a href="#">
                    <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/brand-mobile.jpg" alt="Image Client">
                </a>
            </div>
            <div class="item-brand item-scroll">
                <a href="#">
                    <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/brand-mobile.jpg" alt="Image Client">
                </a>
            </div>
            <div class="item-brand item-scroll">
                <a href="#">
                    <img src="{{asset('public/mobile')}}/image/demo-mobile/banner/brand-mobile.jpg" alt="Image Client">
                </a>
            </div>
        </div>
    </div>
</div>


@endsection