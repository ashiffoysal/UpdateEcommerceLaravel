@extends('layouts.websiteapp')
@section('content')
<div class="ps-page--single" id="contact-us">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
        <div id="" data-address="dhaka" data-title="Funiture!" data-zoom="30"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5580073553015!2d90.35071691543209!3d23.7987486928435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c130f0ab0095%3A0x5449a940d93e13ee!2sDurbar%20IT!5e0!3m2!1sen!2sbd!4v1600167456122!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>

        <div class="ps-contact-info">
            <div class="container">
                <div class="ps-section__header">
                    <h3>Contact Us For Any Questions</h3>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-block--contact-info">
                                <h4>Contact Directly</h4>
                                <p><a href="#">contact@martfury.com</a><span>(+004) 912-3548-07</span></p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-block--contact-info">
                                <h4>Head Quater</h4>
                                <p><span>17 Queen St, Southbank, Melbourne 10560, Australia</span></p>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-block--contact-info">
                                <h4>Customer Service</h4>
                                <p><a href="#">customercare@martfury.com</a><span>(800) 843-2446</span></p>
                            </div>
                        </div>
                      
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="ps-block--contact-info">
                                <h4>Vendor Support</h4>
                                <p><a href="#">vendorsupport@martfury.com</a><span>(801) 947-3100</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-contact-form">
            <div class="container">
                <form class="ps-form--contact-us" action="{{route('frontend.contract.us.send.message')}}" method="post">
                    @csrf
                    <h3>Get In Touch</h3>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group {{$errors->has('visitor_name')? ' has-error':''}}">
                                <input name="visitor_name" class="form-control" type="text" placeholder="Name *">
                                 @if ($errors->has('visitor_name'))
                                    <span class="invalid-feedback mb-0" role="alert" style="display: flex;">
                                        <strong>{{ $errors->first('visitor_name') }}</strong>
                                    </span>
                                 @endif
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group {{$errors->has('phone')? ' has-error':''}}">
                                <input name="phone" class="form-control" type="text" placeholder="phone *">
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback mb-0" role="alert" style="display: flex;">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                 @endif
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <input name="visitor_email" class="form-control" type="text" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                               <select class="form-control" name="visitor_subject">
                                    <option value="">Subject Select</option>
                                    <option value="Support">Support</option>
                                    <option value="Support">Support</option>
                                    <option value="Others">Others</option>
                                   
                               </select>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                                <textarea name="visitor_message " class="form-control" rows="5" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group submit">
                        <button type="submit" class="ps-btn">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection