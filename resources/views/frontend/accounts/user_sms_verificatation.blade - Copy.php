@extends('layouts.websiteapp')
@section('main_content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6 text-center">
            <div class="card">
                <div class="card-header">
                    <h6>SMS Verification.</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Dear,<br />
                                <strong>{{$checkRememberToken->first_name}} {{$checkRememberToken->last_name}}</strong> Please Enter Your Verification Code.
                                <form action="{{ route('sms.verification.submit') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="verify_token" value="{{$checkRememberToken->remember_token}}">
                                        <input type="text" class="form-control" name="verify_code" placeholder="Enter Your Verification Code..">
                                    </div>
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection