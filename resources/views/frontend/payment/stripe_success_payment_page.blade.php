@extends('layouts.websiteapp')
@section('main_content')
<div class="stripe_success_msg_section" style="height:40vh;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <a class="btn btn-success" href="{{ url('/') }}">Continue Shopping</a>
            @if (Session::has('success'))
            <h1 class="alert alert-success text-center">Thank you, Successfully Payment Accepted.:)</h1>
            @else
            @php
                header('Location:'.url('/'));
            @endphp
            @endif

            </div>
        </div>
    </div>
</div>
@endsection
