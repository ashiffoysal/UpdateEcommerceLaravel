<div class="ps-newsletter">
            <div class="ps-container">
                <form class="ps-form--newsletter" action="{{route('frontend.subscriber.insert')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-form__left">
                                <h3>Newsletter</h3>
                                <p>Subcribe to get information about products and coupons</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-form__right">
                                <div class="form-group--nest">
                                    <input class="form-control" type="email" name="subscriber_email" placeholder="Email address" required>
                                    <button class="ps-btn">Subscribe</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>