<aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
    <span id="close-sidebar" class="fa fa-times"></span>
    <div class="module">
        <h3 class="modtitle"><span> My Account </span></h3>
        <div class="module-content custom-border">
            <ul class="list-box">

                @guest
                <li><a href="login.html">Login </a> / <a href="register.html"> Register </a></li>
                @endguest
                <li><a href="#">My Account </a></li>
                <li><a href="wishlist.html">Wish List </a></li>
                <li><a href="#">Order History </a></li>
                <li><a href="#">Returns </a></li>
                <li><a href="#">Reset Password </a></li>
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
