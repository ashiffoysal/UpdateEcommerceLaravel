@extends('mobile.extra_master')
@section('page_content')

<!-- Begin Bar Nav -->
<header class="bar bar-nav ">
<a class="btn btn-link btn-nav pull-left" href="{{ url('/') }}">
        <span class="icon icon-left-nav"></span>
    </a>
    <a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
        <span class="icon icon-bars"></span>
    </a>
    <h1 class="title">About Us</h1>
</header>
<!-- //End Bar Nav -->

<div class="content">
    <!-- //Begin Main Content -->
    <div class="container page-sitemap">
        <div class="row">
            <div id="content" class="col-xs-12">

                <div class="about-us about-demo-1">
                    <div class="row">
                    <div class="col-xs-12 about-image"> <img src="{{ asset('public/uploads/aboutus/'.$aboutUs->image) }}" alt="About Us"> </div>
                        <div class="col-xs-12 about-info">
                            <h3 class="about-title"><span>About Us</span></h3>
                            <div class="about-text">
                                <p> {{ $aboutUs->about_text }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //End Main Content -->
</div>

@endsection
