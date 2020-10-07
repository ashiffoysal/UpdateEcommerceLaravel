
@extends('layouts.websiteapp')
@section('content')
<style>
.main_box {
    background-color: #6c757d;
    text-align: center;
    padding: 19px 20px;
    -webkit-box-shadow: 0px 0px 15px -4px rgba(148,138,148,1);
    -moz-box-shadow: 0px 0px 15px -4px rgba(148,138,148,1);
    box-shadow: 0px 0px 15px -1px rgba(148,138,148,1);
    border-radius: 5px;
}
.main_box h2 {
    color: #fff;
    text-transform: capitalize;
    font-size: 22px;
}
.main_box p {
    color: #fff;
    margin-top: 15px;
    font-size: 16px;
}
.icon i {
    background: #fff;
    /* width: 38px; */
    padding: 10px;
    border-radius: 50%;
    /* margin-bottom: 21px; */
}
</style>
@if($color)
<style>
  .main_box {
    background-color: {{ $color->color_code }};
}
</style>
@endif

<main class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="">Account</a></li>
                    <li>Notifications</li>
                </ul>
            </div>
        </div>
        <section class="ps-section--account">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">

                        @include('frontend.include.accounts.menu')

                    </div>
                    <div class="col-lg-9">
                        <div class="ps-section__right mt-12">
                            <div class="ps-section--account-setting">
                                <div class="ps-section__header">
                                    <h3>Notitfications</h3>
                                </div>
                                <div class="ps-section__content">
                                  <div class="row">
                                      <div class="col-sm-4">
                                        <div class="main_box">
                                          <div class="icon">
                                           <i class="icon-cart"></i>
                                          </div>
                                          @php
                                          $ip=\Request::ip();
                                          $produc_count=Cart::session($ip)->getTotalQuantity();
                                          $wishproduct=App\Wishlist::where('user_id',Auth::user()->id)->count();

                                          $totalorder=App\OrderPlace::where('user_id',Auth::user()->id)->sum('total_quantity');
                                          @endphp
                                          <p> {{$produc_count}} in your Product cart</p>
                                      </div>
                                      </div>
                                      <div class="col-sm-4">
                                         <div class="main_box">
                                          <div class="icon">
                                          <i class="icon-heart"></i>
                                          </div>
                                          <p> {{$wishproduct}} in your Wishlist</p>
                                      </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="main_box">
                                          <div class="icon">
                                           <i class="icon-papers"></i>
                                          </div>
                                          <p> {{$totalorder}} in you ordered</p>
                                      </div>
                                      </div>
                                    
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

            @include('frontend.include.newsletter._subcribtion')
    </main>
@endsection