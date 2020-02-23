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
                <span class="items_cart">0 </span> </span>
        </div>

        <span class="tab-label">View Cart</span>
    </a>
    <a class="tab-item" href="login.html" data-transition="slide-in">
        <span class="icon icon-person"></span>
        <span class="tab-label">My Account</span>
    </a>
    <a class="tab-item tab-item--more tooltip-popovers" href="#popover">
        <span class="icon icon-more"></span>
        <span class="tab-label">More</span>
    </a>
</nav>
<div id="popover" class="popover fade bottom in right">
    <ul class="table-view">
      @php
      $category=App\Category::where('is_deleted',0)->where('cate_status',1)->OrderBy('id','DESC')->get();
      @endphp
      @foreach($category as $cate)
        <li class="table-view-cell"><a class="tab-item" href=""> {{$cate->cate_name}} </a></li>
      @endforeach
    </ul>
</div>
<!-- //End Bar Tab -->
