@extends('layouts.websiteapp')
@section('main_content')
@php
    //print_r($information);
    //dd($information);
@endphp
<div class="stripe_success_msg_section" style="height:40vh;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <a class="btn btn-success" href="{{ url('/') }}">Continue Shopping</a>
                <h1 class="alert alert-success text-center">Thank you, Successfully Payment Accepted.</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h5>Payment information</h5>
                    </div>

                   <table class="table">
                       <tbody>
                            <tr class="text-left">
                                <td>Provider Name</td>
                                <td>SSL-COMMERCZ</td>
                            </tr>
                            <tr class="text-left">
                                <td>Invoice No:</td>
                                <td>{{ $information['tran_id'] }}</td>
                            </tr>
                            <tr class="text-left">
                                <td>Paid Amount </td>
                                <td>{{ $information['amount'] }}</td>
                            </tr>
                            <tr class="text-left">
                                <td>Card Type/Payment Type </td>
                                <td>{{ $information['card_type'] }}</td>
                            </tr>
                            <tr class="text-left">
                                <td>Card Brand </td>
                                <td>{{ $information['card_brand'] }}</td>
                            </tr>
                            <tr class="text-left">
                                <td>Card Issuer Country </td>
                                <td>{{ $information['card_issuer_country'] }}</td>
                            </tr>
                            <tr class="text-left">
                                <td>Currency Type </td>
                                <td>{{ $information['currency_type'] }}</td>
                            </tr>
                            <tr class="text-left">
                                <td>Card/Payment Issuer </td>
                                <td>{{ $information['card_issuer'] }}</td>
                            </tr>
                            <tr class="text-left">
                                <td>Status</td>
                                <td>Succeded</td>
                            </tr>
                       </tbody>

                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
