@extends('layouts.websiteapp')
@section('main_content')
@php
$image=App\SiteBanner::where('section',9)->where('is_deleted',0)->where('status',1)->orderBy('id','DESC')->first();
@endphp
<div style="display:none;" class="search-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading_section">
                    <h4 style="margin-top:20px;border-bottom: 2px solid #ff5e00;">Search result has been shown below <i style="color:#ff5e00; font-size:15px;" class="fa fa-long-arrow-down"></i></h4>
                </div>
                <div style="margin-top:20px;" class="search-content">
                    <div class="row" id="search_result_product">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main_content">
@if($image)

<div class="breadcrumbs"
    style="background: url({{asset('public/uploads/sitebanner/'.$image->image)}}) no-repeat center top;">
    <div class="container">
        <div class="title-breadcrumb">
            Faq
        </div>
        <ul class="breadcrumb-cate">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="support.html">Faq</a></li>
        </ul>
    </div>
</div>
@else
<div class="breadcrumbs">
    <div class="container">
        <div class="title-breadcrumb">
            Faq
        </div>
        <ul class="breadcrumb-cate">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="support.html">Faq</a></li>
        </ul>
    </div>
</div>
@endif
<!-- //Header Container  -->

<!-- Main Container  -->

    <div class="main-container container">
        <div class="row">
            <div id="content" class="col-sm-12">
                <h3>Got Questions? We’ve Got Answers!</h3>
                <p>
                    <br>
                </p>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="yt-accordion">
                            @php
                            $faqall=App\Faq::where('is_deleted',0)->where('faq_status',1)->get();
                            @endphp
                            @foreach($faqall as $key => $faq)
                            <li class="accordion-group">
                                <h3 class="accordion-heading"><i
                                        class="fa fa-plus-square"></i><span>{{$faq->faq_ques}}</span></h3>
                                <div class="accordion-inner">
                                    <p>{{$faq->faq_ans}}</p>

                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Main Container -->
@endsection
