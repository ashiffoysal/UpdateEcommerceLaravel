<!-- Begin Bar Tab -->
<nav class="bar bar-tab">
<a class="tab-item " href="{{ url('/') }}" data-transition="slide-in">
        <span class="icon icon-home"></span>
        <span class="tab-label">Home</span>
    </a>
    <a class="tab-item" href="#" data-transition="slide-in">
        <span class="icon icon-search"></span>
        <span class="tab-label">Search</span>
    </a>
    <a class="tab-item item-cart" href="{{route('checkout.page')}}" data-transition="slide-in">
        <span class="icon icon-download"></span>
        <div id="cart" class="btn-shopping-cart">
            <span class="total-shopping-cart cart-total-full">
                
                @php
					$userid =  \Request::getClientIp(true);
				@endphp
                <span class="items_cart" id="totalquentity">{{Cart::session($userid)->getTotalQuantity()}} </span> </span>
        </div>

        <span class="tab-label">View Cart</span>
    </a>
    <a class="tab-item" href="{{route('mobile.myaccount')}}" data-transition="slide-in">
        <span class="icon icon-person"></span>
        @if(Auth::check())
            <span class="tab-label">My Account</span>
        @else
        <span class="tab-label">Login/Register</span>
        @endif
    </a>
    <a class="tab-item tab-item--more tooltip-popovers" href="#popover">
        <span class="icon icon-more"></span>
        <span class="tab-label">More</span>
    </a>
</nav>
<div id="popover" class="popover fade bottom in right">
    <ul class="table-view">
        <li class="table-view-cell"><a class="tab-item" href="index.html"> Home </a></li>
        <li class="table-view-cell"><a class="tab-item" href="home2.html"> Home 2 </a></li>
        <li class="table-view-cell"><a class="tab-item" href="home3.html"> Home 3 </a></li>
    </ul>
</div>
<!-- //End Bar Tab -->
