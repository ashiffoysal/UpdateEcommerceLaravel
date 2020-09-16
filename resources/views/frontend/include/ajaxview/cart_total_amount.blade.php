<div class="ps-block--shopping-total">
                                <div class="ps-block__header">
                                    <p>Subtotal <span> ৳ {{Cart::session(\Request::getClientIp(true))->getSubTotal()}}</span></p>
                                </div>
                                <div class="ps-block__content">
                                    <ul class="ps-block__product">
                                        <li><span class="ps_inline_block">Coupon Discount</span><span class="pull-right">৳  {{$cupondatavalue}}</span></li>
                                        <li><span class="ps_inline_block">Shipping Price</span><span class="pull-right">৳  150</span></li>
                                        
                                    </ul>
                                    <h3>Total <span>৳ {{Cart::session(\Request::getClientIp(true))->getTotal()}}</span></h3>
                                </div>
                            </div>