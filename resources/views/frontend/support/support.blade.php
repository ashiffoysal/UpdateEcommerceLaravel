@extends('layouts.websiteapp')
@section('main_content')
<!-- //Header Container  -->

<!-- Main Container  -->

    @php
    $image=App\SiteBanner::where('section',8)->where('is_deleted',0)->where('status',1)->orderBy('id','DESC')->first();
    @endphp
    @if($image)
    <div class="breadcrumbs"
        style="background: url({{asset('public/uploads/sitebanner/'.$image->image)}}) no-repeat center top;">
        <div class="container">
            <div class="title-breadcrumb">
                Support 24/7 page
            </div>
            <ul class="breadcrumb-cate">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="support.html">Support 24/7 page</a></li>
            </ul>
        </div>
    </div>
    @else
    <div class="breadcrumbs">
        <div class="container">
            <div class="title-breadcrumb">
                Support 24/7 page
            </div>
            <ul class="breadcrumb-cate">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="support.html">Support 24/7 page</a></li>
            </ul>
        </div>
    </div>
    @endif
    <div class="search-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-content">
                        <div class="row" id="search_result_product">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="main_content">
    <div class="container">
        <div class="row">
            <div id="content" class="col-sm-12">
                <div class="page_support24">
                    <div class="title-box">
                        <h1 class="text-center text-uppercase title-under">HAVE A QUESTION?</h1>
                    </div>
                    <div class="row">
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
                        <div class="col-md-6">
                            @php
                            $new=App\Support::where('is_deleted',0)->where('status',1)->orderBy('id','DESC')->limit(2)->get();
                            @endphp
                            @foreach($new as $data)
                            <div class="media-box-link" onclick="location.href='#'">
                                <div class="media-box-link--figure text-center">
                                    <span class="icon icon-assignment {{$data->icon}}"></span>
                                </div>
                                <div class="media-box-link--content">
                                    <h4 class="font22">{{$data->heading_text}}</h4>
                                    <p>{{$data->details}}</p>
                                </div>
                                <div class="media-box-link--arrow">
                                    <a href="{{route('frontend.contract.us.index')}}"><span
                                            class="icon icon-arrow_forward fa fa-arrow-right"></span></a>
                                </div>
                            </div>
                            <div class="divider divider--md1"></div>
                            @endforeach


                        </div>
                        <div class="col-md-6" onclick="location.href='#'">
                            @php
                            $new=App\Support::where('is_deleted',0)->where('status',1)->orderBy('id','DESC')->skip(2)->limit(2)->get();
                            @endphp
                            <div class="media-box-link">
                                <div class="media-box-link--figure text-center">
                                    <span class="icon icon-help {{$data->icon}}"></span>
                                </div>
                                <div class="media-box-link--content">
                                    <h4 class="font22">{{$data->heading_text}}</h4>
                                    <p>{{$data->details}}</p>
                                </div>
                                <div class="media-box-link--arrow">
                                    <a href="{{route('frontend.contract.us.index')}}"><span
                                            class="icon icon-arrow_forward fa fa-arrow-right"></span></a>
                                </div>
                            </div>
                            <div class="divider divider--md1"></div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- //Main Container -->
@endsection
