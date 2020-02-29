@extends('mobile.extra_master')
@section('title')
    Support
@endsection
@section('page_content')
<style>
    .title-decimal{
        font-size: 20px;
    position: relative;
    padding: 39px 0 9px 69px;

    }

    .title-decimal:before {
    content: attr(data-content);
    display: table-cell;
    vertical-align: middle;
    position: absolute;
    top: 27px;
    line-height: 2.30em;
    background: #ff5561;
    width: 44px;
    height: 44px;
    color: #fff;
    text-align: center;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    left: 0;
}
</style>
<!-- Begin Bar Nav -->
<header class="bar bar-nav ">
<a class="btn btn-link btn-nav pull-left" href="{{ url('/') }}">
        <span class="icon icon-left-nav"></span>
    </a>
    <a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
        <span class="icon icon-bars"></span>
    </a>
    <h1 class="title">Support</h1>
</header>
<!-- //End Bar Nav -->

<div class="content">
    <!-- //Begin Main Content -->
    <div class="container">

    <div class="row">
        <br>
    <div class="title-box">
                        <h4 style="margin-left:8px;" class="text-left text-uppercase title-under">Support</h4>
                    </div>
                        <div class="col-md-10 col-md-offset-1">
                           
                            <p class="text-center">
                                Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                    </div>
                    <div class="divider divider--lg"></div>

                    
    <div class="row">
    @php
                            $new=App\Support::where('is_deleted',0)->where('status',1)->orderBy('id','DESC')->limit(2)->get();
                            @endphp
                            @foreach($new as $data)
                        <div class="col-md-6">
                            
                            <div class="media-box-link" onclick="location.href='#'">
                                <div class="media-box-link--figure text-center">
                                    <span class="icon icon-assignment"></span>
                                </div>
                                <div class="media-box-link--content">
                                    <h4 class="font22">{{$data->heading_text}}</h4>
                                    <p>{{$data->details}}</p>
                                </div>
                            </div>
                            <div class="divider divider--md1"></div>
                            


                        </div>
                        @endforeach
                       
                    </div>
    </div>
</div>

@endsection

