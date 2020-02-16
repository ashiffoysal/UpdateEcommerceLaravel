@extends('layouts.websiteapp')
@section('main_content')
<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li><a href="#">My Account</a></li>
    </ul>

    <div class="row">
        <!--Middle Part Start-->
        <div class="col-md-9" id="content">
            <h2 class="title">{{ __('My Account') }}</h2>
            <p class="lead">
                {{ __('Hello,') }} <strong>{{$user->first_name}} {{ $user->last_name }}!</strong>
                {{ __('- To update your account information.')}}
            </p>
            <form action="{{ route('customer.account.update') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <fieldset id="personal-details">
                            <legend>{{ __('Personal Details') }}</legend>
                            <div class="form-group required">
                                <label for="input-firstname" class="control-label">{{ __('First Name') }}</label>
                                <input type="text" class="form-control" id="input-firstname" placeholder="First Name"
                                    value="{{ $user->first_name }}" name="first_name">
                                @error('first_name')
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                @enderror
                            </div>
                            <div class="form-group required">
                                <label for="input-lastname" class="control-label">{{ __('Last name') }}</label>
                                <input type="text" class="form-control" id="input-lastname" placeholder="Last Name"
                                    value="{{ $user->last_name }}" name="last_name">
                                @error('last_name')
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                @enderror
                            </div>
                            <div class="form-group required">
                                <label for="input-email" class="control-label">{{ __('E-Mail') }}</label>
                                <input type="email" class="form-control" id="input-email" readonly
                                    value="{{ $user->email }}">
                            </div>
                            <div class="form-group required">
                                <label for="input-telephone" class="control-label"> {{ __('phone') }}</label>
                                <input type="tel" class="form-control" id="input-telephone" placeholder="phone number"
                                    value="{{ $user->phone }}" name="phone">
                                @error('phone')
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @enderror
                            </div>
                        </fieldset>
                        <br>
                    </div>
                    <div class="col-sm-6">
                        <fieldset>

                            <legend>Change Password</legend>
                            @if (Session::has('errorMsg'))
                            <span class="alert alert-danger d-block">{{ session('errorMsg') }}</span>
                            @endif
                            <div class="form-group required">
                                <label for="input-password" class="control-label">Old Password</label>
                                <input type="password" class="form-control" placeholder="Old Password" value=""
                                    name="old_password">
                                @error('old_password')
                                <span class="text-danger">{{ $errors->first('old_password') }}</span>
                                @enderror
                            </div>
                            <div class="form-group required">
                                <label for="input-password" class="control-label">New Password</label>
                                <input type="password" class="form-control" placeholder="New Password" value=""
                                    name="password">
                                @error('password')
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @enderror
                            </div>
                            <div class="form-group required">
                                <label for="input-confirm" class="control-label">New Password Confirm</label>
                                <input type="password" class="form-control" id="input-confirm"
                                    placeholder="New Password Confirm" value="" name="password_confirmation">
                            </div>
                            <div class="form-group required">
                                <input type="submit" class="btn btn-sm btn-success" id="input-confir"
                                    value="Change password" formaction="{{route('password.update')}}">
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset id="address">
                            <legend>Address</legend>
                            <div class="form-group">
                                <label for="input-company" class="control-label">Company</label>
                                <input type="text" class="form-control" placeholder="Company"
                                    value="{{ $user->company ? $user->company : old('company') }}" name="company">
                            </div>
                            <div class="form-group required">
                                <label for="input-address-1" class="control-label">Address</label>
                                <input type="text" class="form-control" placeholder="Address"
                                    value="{{ $userAddress ? $userAddress->user_address ? $userAddress->user_address : old('address') : old('address') }}" name="address">
                            </div>
                            <div class="form-group required">
                                <label for="input-postcode" class="control-label">Post Office</label>
                                <input type="text" class="form-control" placeholder="Post office"
                                    value="{{ $userAddress ? $userAddress->user_post_office ? $userAddress->user_post_office : old('post_office') : old('post_office') }}" name="post_office">
                                @error('postal_office')
                                <span class="text-danger">{{ $errors->first('postal_office') }}</span>
                                @enderror
                            </div>
                            <div class="form-group required">
                                <label for="input-postcode" class="control-label">Post Code</label>
                                <input type="text" class="form-control" placeholder="Post Code"
                                    value="{{ $userAddress ? $userAddress->user_postcode ? $userAddress->user_postcode : old('postal_code') : old('postal_code') }}" name="postal_code">
                                @error('postal_code')
                                <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                                @enderror
                            </div>
                            <div class="form-group required">
                                <label for="input-country" class="control-label">Country</label>
                                <select class="form-control" name="country_id">
                                    <option value="18">Bangladesh</option>
                                </select>
                            </div>
                            <div class="form-group required">
                                <label for="input-zone" class="control-label">State / Division</label>
                                <select class="form-control selectpicker" data-live-search="true" name="division_id">
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
                            <div class="form-group required">
                                <label for="input-zone" class="control-label">District</label>
                                <select class="form-control selectpicker" data-live-search="true" name="district_id">
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
                            <div class="form-group required">
                                <label for="input-zone" class="control-label">Upazila</label>
                                <select class="form-control selectpicker" data-live-search="true" name="upazila_id">
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
                        </fieldset>
                    </div>
                </div>

                <div class="buttons clearfix">
                    <div class="pull-right">
                        <input type="submit" class="btn btn-primary bg-success" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
        <!--Middle Part End-->
        <!--Right Part Start -->
        @include('frontend.include.account_sidebar.account_sidebar')
        <!--Right Part End -->
    </div>
</div>
<!-- //Main Container -->


<script>
    $(document).ready(function () {
        $('.selectpicker').select2();
    });
</script>
@endsection
