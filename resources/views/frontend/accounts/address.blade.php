
@extends('layouts.websiteapp')
@section('content')

<main class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="user-information.html">Account</a></li>
                    <li>Notifications</li>
                </ul>
            </div>
        </div>
        <section class="ps-section--account">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        


                        @include('frontend.include.accounts.menu')



                    </div>

                    
                    <div class="col-lg-9">
                    <form action="{{route('customar.address.create')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="ps-section__right mt-8">
                            <div class="ps-section--account-setting">
                                <div class="ps-section__header">
                                    <h3>Address</h3>

                                </div>
                                <div class="ps-section__content">
                                    <div class="table-responsive">
                                    <div class="form-group">
                                        <label>Name<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input class="form-control" name="name" value="@isset($useraddr){{$useraddr->name?$useraddr->name:''}}@endisset" type="text">
                                        </div>
                                        @error('name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror

                                    </div>

                                    <div class="form-group">
                                        <label>Phone<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">

                                            <input class="form-control" name="phone" value="@isset($useraddr){{$useraddr->phone?$useraddr->phone:''}}@endisset" type="text">
                                        </div>
                                        @error('phone')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror

                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Address<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">

                                            <textarea rows="5" name="address" name="address" class="form-control">@isset($useraddr){{$useraddr->address?$useraddr->address:''}}@endisset</textarea>
                                        </div>
                                        @error('address')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror

                                    </div>  
                                    <div class="form-group">
                                        <label>Image:</label>
                                        <div class="form-group__content">
                                            <input class="form-control" name="image" value="" type="file">
                                        </div>
                                    </div> 


                                    </div>

                                    @if(!empty($useraddr))
                                        <button class="ps-btn ps-btn--fullwidth">Update Now</button>
                                    @else
                                        <button class="ps-btn ps-btn--fullwidth">Submit Now</button>
                                    @endif
                                        

                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.include.newsletter._subcribtion')
    </main>

      
    
@endsection