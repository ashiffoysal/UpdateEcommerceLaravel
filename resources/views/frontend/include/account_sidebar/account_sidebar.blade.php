<aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
    <span id="close-sidebar" class="fa fa-times"></span>
    <div class="module">
        <h3 class="modtitle"><span> My Account </span></h3>
        <div class="module-content custom-border">
            <ul class="list-box">
                @guest
                    <li><a href="{{ route('login') }}">Login </a> / <a href="{{ route('register') }}"> Register </a></li>
                @endguest

                <li><a href="">My Account </a></li>
                <li><a href="{{url('/product/wishlist')}}">Wish List </a></li>
                <li><a href="{{url('/customer/order')}}">Order History </a></li>
                <li><a href="{{route('customer.order.return')}}">Returns </a></li>
                @auth


                <li>
                    <a onclick="
                        event.preventDefault();
                        document.getElementById('logout').submit();
                    "
                    href="#">Logout
                    </a>
                </li>
                <form style="display:none;" id="logout" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
                @endauth

            </ul>
        </div>
    </div>
</aside>
