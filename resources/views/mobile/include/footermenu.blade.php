
<!-- Begin Bar Tab -->
<nav class="bar bar-tab">
    <a class="tab-item " href="{{ url('/') }}" data-transition="slide-in">
        <span class="icon icon-home"></span>
        <span class="tab-label">Home</span>
    </a>
    <a class="tab-item" href="#search_bottom" data-transition="slide-in">
        <span class="icon icon-search"></span>
        <span class="tab-label">Search</span>
    </a>
    <a class="tab-item item-cart" href="{{route('checkout.page.show')}}" data-transition="slide-in">
        <span class="icon icon-download"></span>
        <div id="cart" class="btn-shopping-cart">
            <span class="total-shopping-cart cart-total-full">

                @php
                $userid = \Request::getClientIp(true);
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
        <span class="tab-label">Login</span>
        @endif
    </a>
    <a class="tab-item tab-item--more tooltip-popovers" href="#popover">
        <span class="icon icon-more"></span>
        <span class="tab-label">More</span>
    </a>
</nav>
<div id="popover" class="popover fade bottom in right">
    <ul class="table-view">
       
        <li class="table-view-cell"><a class="tab-item" href="{{ route('warrenty.page') }}">Warrenty </a></li>
        <li class="table-view-cell"><a class="tab-item" href="{{route('support.page')}}">Support</a></li>
       
    </ul>
</div>
<!-- //End Bar Tab -->


<!-- searching area start -->

<div id="search_bottom"> 
	<span class="close">X</span>
	<form role="search" id="searchform" action="{{ route('mobile.product.search') }}" method="get">
		<input value="" name="search_field" type="search" placeholder="type to search"/>
	</form>
</div>

<!-- searching area end -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

$(document).ready(function(){

	$('a[href="#search_bottom"]').on('click', function(event) {                    
		$('#search_bottom').addClass('open');
		$('#search_bottom > form > input[type="search"]').focus();
	});            
	$('#search_bottom, #search_bottom button.close').on('click keyup', function(event) {
		if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
			$(this).removeClass('open');
		}
	});            
});
</script>