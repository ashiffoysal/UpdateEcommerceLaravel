@extends('layouts.websiteapp')
@section('title')
    About Page
@endsection
@section('main_content')
@php
  $image=App\SiteBanner::where('section',6)->where('is_deleted',0)->where('status',1)->orderBy('id','DESC')->first();
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
<div class="breadcrumbs" style="background: url({{asset('public/uploads/sitebanner/'.$image->image)}}) no-repeat center top;">
    <div class="container">
        <div class="title-breadcrumb">
          About Us
        </div>
        <ul class="breadcrumb-cate">
            <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="">About Us</a></li>
        </ul>
    </div>
</div>
@else
<div class="breadcrumbs" style="background: url({{asset('public/frontend/image/breadcrumbs.jpg')}}) no-repeat center top;">
    <div class="container">
        <div class="title-breadcrumb">
          About Us
        </div>
        <ul class="breadcrumb-cate">
            <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="">About Us</a></li>
        </ul>
    </div>
</div>
@endif
    <!-- Main Container  -->

        <div class="main-container container">
            <div class="row">
                <div id="content" class="col-sm-12">
                    <div class="about-us about-demo-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 about-us-content">
                                <div class="content-about">
                                    <h2 class="about-title">About Us</h2>
                                    @php
                                        $aboutus=App\AboutUs::where('id',1)->first();
                                    @endphp
                                    <img src="{{asset('public/uploads/aboutus/'.$aboutus->	image)}}" alt="About Us">
                                    <p class="description-about">{!! $aboutus->about_text !!}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 faq-about-us">
                                <h2 class="about-title">Faqs</h2>
                                <div class="content-faq">
                                    <div id="accordion" role="tablist" aria-multiselectable="true">
                                        @php
                                            $faqall=App\Faq::where('is_deleted',0)->where('faq_status',1)->get();
                                        @endphp
                                        <!-- start faq -->
                                        @foreach($faqall as $key => $faq)
                                        <div class="panel">
                                            <div class="panel-head" role="tab" id="{{$key}}">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$faq->id}}" aria-expanded="false" aria-controls="{{$faq->id}}" class="collapsed">
                                                    <span>{{$faq->faq_ques}}</span>
                                                    </a>
                                                </h4>

                                            </div>
                                            <div id="{{$faq->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="{{$key}}" aria-expanded="false" style="height: 0px;">
                                                <div class="panel-body">{{$faq->faq_ans}}</div>
                                            </div>
                                        </div>
                                        @endforeach
                                    <!-- end faq -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
	</div>
	<!-- //Main Container -->
<!-- //Main Container -->

@endsection
