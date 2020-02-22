@extends('layouts.websiteapp')
@section('main_content')
<!-- Main Container  -->
<style>
span{
    margin-top: 141px;
}

</style>
<div  class="main-container container account res">
    <div style="height:34vh;">
        <div class="row">
            <div id="content" class="col-md-1">
            </div>
            <div id="content" class="col-md-10">
                <span class="alert alert-success text-center">Registration Successful, Please Check Your Mail And Verify Your Account.</span>
            </div>
            {{-- <div class="row">
                <a class="btn btn-sm btn-success" data-id="" href="">Resend Verification Mail</a>
            </div> --}}
        </div>
    </div>
</div>
<!-- //Main Container -->
@endsection
