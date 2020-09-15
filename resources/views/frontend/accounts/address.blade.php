
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
                    <div class="col-lg-4">
                        


                        @include('frontend.include.accounts.menu')



                    </div>
                    <div class="col-lg-8">
                        <div class="ps-section__right mt-8">
                            <div class="ps-section--account-setting">
                                <div class="ps-section__header">
                                    <h3>Notitfications</h3>
                                </div>
                                <div class="ps-section__content">
                                    <div class="table-responsive">
                                    <div class="form-group">
                                        <label>Name<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Phone<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Address<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <textarea rows="5" name="address" class="form-control"></textarea>
                                        </div>
                                    </div>    


                                    </div>
                                    <a class="ps-btn ps-btn--fullwidth" href="checkout.html">Submit Now</a>
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