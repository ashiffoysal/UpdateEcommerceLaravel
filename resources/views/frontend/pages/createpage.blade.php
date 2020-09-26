@extends('layouts.websiteapp')
@section('content')
<div class="ps-page--blog">
        <div class="ps-post--detail">
            <div class="ps-post__header">
                <div class="container">
                    <h1>{{$pagedetails->page_name}}</h1>
                </div>
            </div>
            <div class="container">
                <div class="ps-post__content">
                    <p>{!! $pagedetails->page_details !!}</p>
                   
                </div>
            </div>
        </div>
       
     
      
    </div>
  @endsection