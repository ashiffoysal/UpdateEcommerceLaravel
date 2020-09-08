<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Durbar IT Ecommerce</title>
    @if($themecheck->id==1)
         @include('frontend.include.header1css')
    @elseif($themecheck->id==2)
        @include('frontend.include.header2css')
    @elseif($themecheck->id==3)
        home3
    @elseif($themecheck->id==4)
        home4
    @endif
</head>

<body>
    <!-- main header1 -->
    @if($themecheck->id==1)
     @include('frontend.include.headertop1')
    @elseif($themecheck->id==2)
        @include('frontend.include.headertop2')
    @elseif($themecheck->id==3)
        home3
    @elseif($themecheck->id==4)
        home4
    @endif
    <!-- main header1 end -->

    <!-- mobile -->
    @if($themecheck->id==1)
    @include('frontend.include.mobile_h1')
     @elseif($themecheck->id==2)
         @include('frontend.include.mobile_h2')
    @elseif($themecheck->id==3)
        home3
    @elseif($themecheck->id==4)
        home4
    @endif
    <!-- mobile end -->

    <!-- maincntent -->
   
    @yield('content')
 


    <!-- maincontentend -->

    <!-- add footerh1 -->
    @if($themecheck->id==1)
        @include('frontend.include.footerh1')
    @elseif($themecheck->id==2)
        @include('frontend.include.footerh2')
    @elseif($themecheck->id==3)
        home3
    @elseif($themecheck->id==4)
        home4
    @endif
     <!-- add footerh1 end-->

    <!-- add version1 js -->
    @if($themecheck->id==1)
        @include('frontend.include.header1js')
    @elseif($themecheck->id==2)
          @include('frontend.include.header2js')
    @elseif($themecheck->id==3)
        home3
    @elseif($themecheck->id==4)
        home4
    @endif
    <!-- add version1 js -->
</body>

</html>