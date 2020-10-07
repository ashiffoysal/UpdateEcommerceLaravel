@if($color)
<style>
    .ps-widget--account-dashboard .ps-widget__content ul li.active {
    background-color: {{$color->color_code}};
}
.ps-widget--account-dashboard .ps-widget__content ul li a:hover {
    background-color: {{$color->hover_code}};
    color: #fff;
}
</style>
@endif
<div class="ps-section__left">

    <aside class="ps-widget--account-dashboard">
        <img class="img_circal" src="{{asset('public/uploads/customer/'.auth()->user()->avatar)}}" alt="">
        <div class="ps-widget__header">
            <figure>
                @php
                    $customar =App\CustomarAccount::where('userid',auth()->user()->id)->first();
                @endphp
                @if(!$customar)
                    <figcaption class="address_header">Hello</figcaption>
                    <p>Blance: <small>$500.00</small></p>
                @else
                    <figcaption class="address_header">{{$customar->name}}</figcaption>
                    <p>Blance: <small>৳ {{$customar->balance}}</small></p>
                @endif
            </figure>
        </div>
        <div class="ps-widget__content">
            <ul>
                <li class="{{ request()->is('customar/account') ? 'active' : '' }}"><a href="{{route('customar.account.page')}}"><i class="icon-user"></i> Account Information</a></li>
                
                <li class="{{ request()->is('payment/customar/invoice/*') ? 'active' : 'null' }}"><a href="{{route('customar.invoice.show',auth()->user()->id)}}"><i class="icon-papers"></i> Purchase History</a></li>
                <li class="{{ request()->is('product/return/*') ? 'active' : 'null' }}"><a href="{{route('customar.product.return.show',auth()->user()->id)}}"><i class="icon-return"></i>Send Refund Request</a></li>
                <li class="{{ request()->is('customar/address') ? 'active' : '' }}"><a href="{{route('customar.address.page')}}"><i class="icon-map-marker"></i>Manage Profile</a></li>
                <li class="{{ request()->is('product/viewed') ? 'active' : 'null' }}"><a href="{{route('customar.viewed.product')}}"><i class="icon-store"></i> Recent Viewed Product</a></li>
                <li><a href="{{url('product/wishlist')}}"><i class="icon-heart"></i> Wishlist</a></li>
                <li><a href="#" onclick="event.preventDefault(); document.getElementById('form_logout').submit();"><i class="icon-power-switch"></i>Logout</a></li>

            </ul>
        </div>
    </aside>
</div>

<form id="form_logout" method="post" action="{{route('customar.logout')}}">
    @csrf
</form>

