@extends('mobile.extra_master')

@section('page_content')
<header class="bar bar-nav ">
    <a class="btn btn-link btn-nav pull-left" href="{{route('mobile.myaccount')}}">
        <span class="icon icon-left-nav"></span>
    </a>
    <a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
        <span class="icon icon-bars"></span>
    </a>
    <h1 class="title">Account Settings</h1>
</header>
<!-- //End Bar Nav -->

<div class="content account-register">
    <!-- //Begin Main Content -->
    <div class="container page-sitemap">
        <div class="row">

            <div id="content" class="col-xs-12">
                <h1>My Account</h1>
                <p>  {{ __('Hello,') }} <strong>{{ $user->username }}!</strong>
                    {{ __('- To update your account information.')}} </p>
                <form action="{{route('my.account.settings.update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <fieldset id="account">
                        <legend>Your Personal Details</legend>
                        <div class="form-group required" style="display: none;">
                            <label class="col-sm-2 control-label">Customer Group</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="customer_group_id" value="1" checked="checked"> Default
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ $user->username }}" placeholder="Your Name" id="input-firstname" class="form-control">
                                @error('name')
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                            <div class="col-sm-10">
                            <input type="email" readonly  name="email" value="{{ $user->email }}" placeholder="E-Mail" id="input-email" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-telephone">Phone</label>
                            <div class="col-sm-10">
                            <input type="tel" name="phone" value="{{ $user->phone }}" placeholder="Your phone number" id="input-telephone" class="form-control">
                                @error('phone')
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @enderror
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="address">
                        <legend>Your Address</legend>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-company">Company</label>
                            <div class="col-sm-10">
                            <input type="text" name="company" value="{{ $user->company ? $user->company : old('company') }}" placeholder="Company" id="input-company" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-address-1">Your address</label>
                            <div class="col-sm-10">
                                <input type="text" name="address" value="{{ $userAddress ? $userAddress->user_address ? $userAddress->user_address : old('address') : old('address') }}" placeholder="Your address" id="input-address-1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-city">Post Office</label>
                            <div class="col-sm-10">
                                <input type="text" name="post_office" value="{{ $userAddress ? $userAddress->user_post_office ? $userAddress->user_post_office : old('post_office') : old('post_office') }}" placeholder="Post office" id="input-city" class="form-control">
                                @error('postal_office')
                                <span class="text-danger">{{ $errors->first('postal_office') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
                            <div class="col-sm-10">
                                <input type="text" name="postal_code" value="{{ $userAddress ? $userAddress->user_postcode ? $userAddress->user_postcode : old('postal_code') : old('postal_code') }}" placeholder="Post Code" id="input-postcode" class="form-control">
                                @error('postal_code')
                                <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-country">Country</label>
                            <div class="col-sm-10">
                                <select name="country_id" id="input-country" class="form-control">
                                    <option SELECTED value="18">Bangladesh</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-zone">Division</label>
                            <div class="col-sm-10">
                                <select name="division_id" id="input-zone divisions_name"  class="form-control divisions_name">
                                    <option value=""> ---Select division --- </option>
                                    @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}"
                                        {{ $division->id == old('division_id') ? "SELECTED" : "" }}
                                        {{ $userAddress ? $userAddress->user_division_id == $division->id ? "SELECTED" : "" : ""}}>
                                        {{ $division->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-zone">Distirct</label>
                            <div class="col-sm-10">
                                <select name="district_id" id="input-zone districts_name"  class="form-control districts_name">
                                    <option value=""> --- Select District--- </option>
                                    @foreach ($districts as $district)
                                    <option {{ $district->id == old('district_id') ? "SELECTED" : "" }}
                                        {{ $userAddress ? $userAddress->user_district_id == $district->id  ? "SELECTED" : '' : ''  }}
                                        value="{{ $district->id }}">
                                        {{ $district->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('district_id')
                                <span class="text-danger">{{ $errors->first('district_id') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-zone">Upazila</label>
                            <div class="col-sm-10">
                                <select name="upazila_id" id="input-zone upazilas_name" class="form-control upazilas_name">
                                    <option value=""> --- Select Upazila--- </option>
                                    @foreach ($upazilas as $upazila)
                                    <option {{ $upazila->id == old('upazila_id') ? "SELECTED" : "" }}
                                        {{ $userAddress ? $userAddress->user_upazila_id == $upazila->id ? "SELECTED" : "" : "" }}
                                        value="{{ $upazila->id }}">
                                        {{ $upazila->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('upazila_id')
                                <span class="text-danger">{{ $errors->first('upazila_id') }}</span>
                                @enderror
                            </div>
                        </div>
                    </fieldset>

                    <div class="buttons">
                            <input type="submit" value="Update" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- //End Main Content -->

    <!-- //Begin Footer Content -->
    <div class="container footer-content">
        <div class="footernav-bottom">
            <div class="text-center">
                <p class="nomargin"><img alt="Footer Image" class="form-group" src="../image/demo/payment/payment_method_mob.png">
                </p>
                Copyright © 2017 by Market. All Rights Reserved.
            </div>
        </div>
    </div>
    <!-- //End Footer Content -->
</div>
@endsection

@push('js')
<script>

    $(document).ready(function () {
        $('.divisions_name').on('change', function() {
            var division_id = $(this).val();

            $.ajax({
                url:"{{ url('mobile/get/district/by/division/id/') }}"+"/"+division_id,
                type:'get',
                dataType:'json',
                success:function(data){

                    $('.districts_name').empty();
                    $('.districts_name').append('<option value="">------Select District Name------</option>');
                    $.each(data,function(index, district){
                        $('.districts_name').append('<option value="' + district.id + '">'+ district.name +'</option>');
                    });
                }
            });
        })
    });
    $(document).ready(function () {
        $('.districts_name').on('change', function() {
            var district_id = $(this).val();

            $.ajax({
                url:"{{ url('mobile/get/upazila/by/district/id/') }}"+"/"+district_id,
                type:'get',
                dataType:'json',
                success:function(data){
                    $('.upazilas_name').empty();
                    $('.upazilas_name').append('<option value="">------Select District Name------</option>');
                    $.each(data,function(index, district){
                        $('.upazilas_name').append('<option value="' + district.id + '">'+ district.name +'</option>');
                    });
                }
            });
        })
    });

</script>
@endpush
