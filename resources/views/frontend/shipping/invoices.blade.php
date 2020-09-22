@extends('layouts.websiteapp')
@section('content')
<style>
    .pagination .disabled{
        display: none;
    }
</style>
<main class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="user-information.html">Account</a></li>
                    <li>Invoices</li>
                </ul>
            </div>
        </div>
        <section class="ps-section--account">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                    @include('frontend.include.accounts.menu')
                    </div>
                    <div class="col-lg-8">
                        <div class="ps-section__right mt-12">
                            <div class="ps-section--account-setting">
                                <div class="ps-section__header">
                                    <h3>Invoices</h3>
                                </div>
                                <div class="ps-section__content">
                                    <div class="table-responsive">
                                        <table class="table ps-table ps-table--invoices">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Quantity</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                @foreach($orders as $row)

                                                <tr>
                                                    
                                                    <td><a href="{{route('customar.invoice.show.details',$row->order_id)}}">#{{$row->order_id}}</a></td>
                                                    <td>{{$row->total_quantity}}</td>
                                                    <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d/m/Y')}}</td>
                                                    
                                                    <td>{{$row->total_price}}</td>
                                                    @if($row->status ==0)
                                                        <td>Pending</td>
                                                    @else
                                                        <td>Successful delivery</td>
                                                    @endif
                                                    
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            
                                        </table>
                                        <table>
                                        <tfoot>
                                            <tr>
                                                    <td>{{ $orders->links() }}</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="ps-newsletter">
            <div class="ps-container">
                <form class="ps-form--newsletter" action="do_action" method="post">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-form__left">
                                <h3>Newsletter</h3>
                                <p>Subcribe to get information about products and coupons</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-form__right">
                                <div class="form-group--nest">
                                    <input class="form-control" type="email" placeholder="Email address">
                                    <button class="ps-btn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    @endsection