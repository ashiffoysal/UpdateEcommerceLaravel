@extends('mobile.extra_master')
@section('title')
    Warrenty
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
    <h1 class="title">Warrenty</h1>
</header>
<!-- //End Bar Nav -->

<div class="content">
    <!-- //Begin Main Content -->
    <div class="container">
        <div class="row">
            <div id="content" class="col-sm-12">
                <div class="page_warranity">
                    <div class="title-box">
                        <h4 style="margin-to:25px;margin-left:8px;" class="text-left text-uppercase title-under">Warranty and services</h4>
                    </div>
                    @php
                    $allwarranty=App\Warranty::where('is_deleted',0)->where('status',1)->get();
                    @endphp
                    @foreach($allwarranty as $key => $data)
                    <h6 class="color title-decimal font30" data-content="{{++$key}}">{{$data->w_ques}}</h6>
                    <p>{{$data->w_ans}}</p>

                    <hr class="hr-lg">
                    @endforeach



                </div>
            </div>
        </div>
    </div>
</div>

@endsection
