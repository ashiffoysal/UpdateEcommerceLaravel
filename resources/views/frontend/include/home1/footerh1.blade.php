<footer class="ps-footer">
        <div class="ps-container">
            <div class="ps-footer__widgets">
                <aside class="widget widget_footer widget_contact-us">
                    <h4 class="widget-title">Contact us</h4>
                    <div class="widget_content">
                        <p>Call us 24/7</p>
                        <h3>1800 97 97 69</h3>
                        <p>502 New Design Str, Melbourne, Australia <br><a href="mailto:contact@martfury.co">contact@martfury.co</a></p>
                        <ul class="ps-list--social">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Quick links</h4>
                    <ul class="ps-list--link">
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Term & Condition</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Return</a></li>
                        <li><a href="faqs.html">FAQs</a></li>
                    </ul>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Company</h4>
                    <ul class="ps-list--link">
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="#">Affilate</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Bussiness</h4>
                    <ul class="ps-list--link">
                        <li><a href="#">Our Press</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="my-account.html">My account</a></li>
                        <li><a href="shop-default.html">Shop</a></li>
                    </ul>
                </aside>
            </div>
            <div class="ps-footer__links">
                <p><strong>Consumer Electric:</strong><a href="#">Air Conditioners</a><a href="#">Audios &amp; Theaters</a><a href="#">Car Electronics</a><a href="#">Office Electronics</a><a href="#">TV Televisions</a><a href="#">Washing Machines</a>
                </p>
                <p><strong>Clothing &amp; Apparel:</strong><a href="#">Printers</a><a href="#">Projectors</a><a href="#">Scanners</a><a href="#">Store &amp; Business</a><a href="#">4K Ultra HD TVs</a><a href="#">LED TVs</a><a href="#">OLED TVs</a>
                </p>
                <p><strong>Home, Garden &amp; Kitchen:</strong><a href="#">Cookware</a><a href="#">Decoration</a><a href="#">Furniture</a><a href="#">Garden Tools</a><a href="#">Garden Equipments</a><a href="#">Powers And Hand Tools</a><a href="#">Utensil &amp; Gadget</a>
                </p>
                <p><strong>Health &amp; Beauty:</strong><a href="#">Hair Care</a><a href="#">Decoration</a><a href="#">Hair Care</a><a href="#">Makeup</a><a href="#">Body Shower</a><a href="#">Skin Care</a><a href="#">Cologine</a><a href="#">Perfume</a>
                </p>
                <p><strong>Jewelry &amp; Watches:</strong><a href="#">Necklace</a><a href="#">Pendant</a><a href="#">Diamond Ring</a><a href="#">Sliver Earing</a><a href="#">Leather Watcher</a><a href="#">Gucci</a>
                </p>
                <p><strong>Computer &amp; Technologies:</strong><a href="#">Desktop PC</a><a href="#">Laptop</a><a href="#">Smartphones</a><a href="#">Tablet</a><a href="#">Game Controller</a><a href="#">Audio &amp; Video</a><a href="#">Wireless Speaker</a><a href="#">Done</a>
                </p>
            </div>
            <div class="ps-footer__copyright">
                <p>© 2018 Martfury. All Rights Reserved</p>
                <p><span>We Using Safe Payment For:</span><a href="#"><img src="{{asset('public/frontend')}}/img/payment-method/1.jpg" alt=""></a><a href="#"><img src="{{asset('public/frontend')}}/img/payment-method/2.jpg" alt=""></a><a href="#"><img src="{{asset('public/frontend')}}/img/payment-method/3.jpg" alt=""></a><a href="#"><img src="{{asset('public/frontend')}}/img/payment-method/4.jpg" alt=""></a><a href="#"><img src="{{asset('public/frontend')}}/img/payment-method/5.jpg" alt=""></a></p>
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

    @include('frontend.include.modal.modal')