
@extends('layouts.websiteapp')
@section('content')

<main class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="user-information.html">Account</a></li>
                    <li>Notifications</li>
                </ul>
            </div>
        </div>
        <section class="ps-section--account">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ps-section__left">
                            <aside class="ps-widget--account-dashboard">
                                <div class="ps-widget__header"><img src="{{asset('/public/frontend')}}/img/users/3.jpg" alt="">
                                    <figure>
                                        <figcaption>Hello</figcaption>
                                        <p><a href="#">{{Auth::user()->email?Auth::user()->email:Auth::user()->phone}}</a></p>
                                    </figure>
                                </div>
                                <div class="ps-widget__content">
                                    <ul>
                                        <li><a href="#"><i class="icon-user"></i> Account Information</a></li>
                                        <li class="active"><a href="#"><i class="icon-alarm-ringing"></i> Notifications</a></li>
                                        <li><a href="#"><i class="icon-papers"></i> Invoices</a></li>
                                        <li><a href="#"><i class="icon-map-marker"></i> Address</a></li>
                                        <li><a href="#"><i class="icon-store"></i> Recent Viewed Product</a></li>
                                        <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                        <li><a href="#" onclick="event.preventDefault(); document.getElementById('form_logout').submit();"><i class="icon-power-switch"></i>Logout</a></li>
                                        <form id="form_logout" method="post" action="{{route('customar.logout')}}">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ps-section__right">
                            <div class="ps-section--account-setting">
                                <div class="ps-section__header">
                                    <h3>Notitfications</h3>
                                </div>
                                <div class="ps-section__content">
                                    <div class="table-responsive">
                                        <table class="table ps-table ps-table--notification">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Date</th>
                                                    <th>Tag</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor</td>
                                                    <td>20-1-2020</td>
                                                    <td><span class="badge badge-primary">sale</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</td>
                                                    <td>21-1-2020</td>
                                                    <td><span class="badge badge-success">new</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> Et harum quidem rerum</td>
                                                    <td>21-1-2020</td>
                                                    <td><span class="badge badge-success">new</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</td>
                                                    <td>21-1-2020</td>
                                                    <td><span class="badge badge-primary">sale</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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