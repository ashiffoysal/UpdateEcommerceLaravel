<footer class="ps-footer">
        <div class="ps-container">
            <div class="ps-footer__widgets">
                <aside class="widget widget_footer widget_contact-us">
                    <h4 class="widget-title">Contact us</h4>
                    <div class="widget_content">
                        <p>Call us 24/7</p>
                        <h3>{{$footer->phone}}</h3>
                        <p> {{$footer->address}}<br><a href="{{$footer->email}}">{{$footer->email}}</a></p>
                        <ul class="ps-list--social">
                            <li><a class="facebook" target="_blank" href="{{$social->facebook}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" target="_blank" href="{{$social->twitter}}"><i class="fa fa-twitter"></i></a></li>

                            <li><a class="twitter" target="_blank" href="{{$social->youtube}}"><i class="fa fa-youtube"></i></a></li>

                            <li><a class="google-plus" target="_blank" href="{{$social->google}}"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="instagram" target="_blank" href="{{$social->instagram}}"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Quick links</h4>
                    <ul class="ps-list--link">
                        @foreach($allpage as $page)
                        <li><a href="{{url('pagecrate/'.$page->id)}}">{{$page->page_name}}</a></li>
                        @endforeach
                    </ul>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Company</h4>
                    <ul class="ps-list--link">
                        <li><a href="">About Us</a></li>
                        <li><a href="{{route('contract.us')}}">Contact</a></li>
                    </ul>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Bussiness</h4>
                    <ul class="ps-list--link">
                        <li><a href="{{url('/product/blog')}}">Our Blog</a></li>
                        @if(Auth::guard('web')->check())
                        <li><a href="{{route('product.cart.data')}}">Checkout</a></li>
                        @else
                         <li><a href="{{route('customar.login.form')}}">Checkout</a></li>
                        @endif
                         @if(Auth::guard('web')->check())
                        <li><a href="{{route('customar.account.page')}}">My account</a></li>
                        @else
                         <li><a href="{{route('customar.login.form')}}">My account</a></li>
                        @endif
                        <li><a href="shop-default.html">Shop</a></li>
                    </ul>
                </aside>
            </div>
            <div class="ps-footer__links">
               @foreach($allcategory as $cate)
                <p>
                   
                    <strong><a href="{{url('product/page/'.$cate->cate_slug)}}">{{$cate->cate_name}}:</a></strong>
                        @php
                            $check=App\SubCategory::where('is_deleted',0)->where('subcate_status',1)->where('cate_id',$cate->id)->first();
                        @endphp
                        @if($check)
                            @php
                                 $sub=App\SubCategory::where('is_deleted',0)->where('subcate_status',1)->where('cate_id',$cate->id)->get();
                            @endphp
                            @foreach($sub as $scate)
                             <a href="{{url('subacete/'.$scate->category->cate_slug.'/'.$scate->subcate_slug)}}">{{$scate->subcate_name}}</a>
                            @endforeach
                        @endif
                   
                </p>
                 @endforeach
            
            </div>
            <div class="ps-footer__copyright">
                <p>© {{$footer->copyright}}</p>
                <p><span>We Using Safe Payment For:</span><a href="#"><img src="{{asset('public/uploads/footerpayment/'.$footer->payment_image)}}" alt=""></a></p>
            </div>
        </div>
    </footer>

   <!--  <div class="ps-popup" id="subscribe" data-time="500">

        <div class="ps-popup__content bg--cover" data-background="{{asset('public/frontend')}}/img/bg/subscribe.jpg"><a class="ps-popup__close" href="#"><i class="icon-cross"></i></a>
            <form class="ps-form--subscribe-popup" action="index.html" method="get">
                <div class="ps-form__content">
                    <h4>Get <strong>25%</strong> Discount</h4>
                    <p>Subscribe to the Martfury mailing list <br /> to receive updates on new arrivals, special offers <br /> and our promotions.</p>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Email Address" required>
                        <button class="ps-btn">Subscribe</button>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="not-show" name="not-show">
                        <label for="not-show">Don't show this popup again</label>
                    </div>
                </div>
            </form>
        </div>
    </div> -->
    <div id="back2top"><i class="pe-7s-angle-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
        <div class="ps-search__content">
            <form class="ps-form--primary-search" action="do_action" method="post">
                <input class="form-control" type="text" placeholder="Search for...">
                <button><i class="aroma-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
    
    <!-- Modal area add -->

   <!--  @include('frontend.include.modal.modal') -->