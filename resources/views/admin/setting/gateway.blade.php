@extends('layouts.adminapp')
@section('admin_content')
 <div class="content_wrapper">
      <div class="middle_content_wrapper">
	<section class="page_area">
	     <div class="row">
        		<div class="col-lg-6">
        		     <div class="panel">
              			<div class="panel_header">
              			     <div class="panel_title"><span class="text-center">Stripe Gatwway</span></div>
              			</div>
            			    <div class="panel_body">
                        <form class="form-horizontal" action="{{ url('admin/sociallogin/update') }}" method="POST">
                         @csrf
                            <div class="form-group row">
                                <input type="hidden" name="types[]" value="STRIPE_KEY">
                                <div class="col-md-1"></div>
                                <div class="col-lg-2">
                                    <label class="control-label">STRIPE Key</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="STRIPE_KEY" value="{{ env('STRIPE_KEY') }}" placeholder="Stripe Key" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <input type="hidden" name="types[]" value="STRIPE_SECRET">
                                <div class="col-md-1"></div>
                                <div class="col-lg-2">
                                    <label class="control-label">STRIPE Secret</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="STRIPE_SECRET" value="{{ env('STRIPE_SECRET') }}" placeholder="STRIPE Secret" required>
                                </div>
                			    </div>
                          <div class="form-group row">
                              <div class="col-lg-12 text-center">
                                  <button class="btn btn-success" type="submit">Update</button>
                              </div>
                          </div>
                    </form>
        		       </div>
        	    	</div>
              </div>
        	    <div class="col-lg-6">
          		     <div class="panel">
                			<div class="panel_header">
                			     <div class="panel_title"><span class="text-center">Paypal Gateway </span></div>
                			</div>
                			    <div class="panel_body">
                            <form class="form-horizontal" action="{{ url('admin/sociallogin/update') }}" method="POST">
                             @csrf
                                <div class="form-group row">
                                    <input type="hidden" name="types[]" value="PAYPAL_SANDBOX_API_USERNAME">
                                    <div class="col-md-1"></div>
                                    <div class="col-lg-2">
                                        <label class="control-label">USERNAME NAME</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="PAYPAL_SANDBOX_API_USERNAME" value="{{ env('PAYPAL_SANDBOX_API_USERNAME') }}" placeholder="Stripe Key" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <input type="hidden" name="types[]" value="PAYPAL_SANDBOX_API_PASSWORD">
                                    <div class="col-md-1"></div>
                                    <div class="col-lg-2">
                                        <label class="control-label">PASSWORD</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="PAYPAL_SANDBOX_API_PASSWORD" value="{{ env('PAYPAL_SANDBOX_API_PASSWORD') }}" placeholder="STRIPE Secret" required>
                                    </div>
                              </div>
                              <div class="form-group row">
                                  <input type="hidden" name="types[]" value="PAYPAL_SANDBOX_API_SECRET">
                                  <div class="col-md-1"></div>
                                  <div class="col-lg-2">
                                      <label class="control-label">SECRET</label>
                                  </div>
                                  <div class="col-lg-6">
                                      <input type="text" class="form-control" name="PAYPAL_SANDBOX_API_SECRET" value="{{ env('PAYPAL_SANDBOX_API_SECRET') }}" placeholder="STRIPE Secret" required>
                                  </div>
                            </div>
                              <div class="form-group row">
                                  <div class="col-lg-12 text-center">
                                      <button class="btn btn-success" type="submit">Update</button>
                                  </div>
                              </div>
                        </form>

                			  </div>
          		       </div>
        		</div>

     </div>
    <div class="row">
	     	<div class="col-lg-6">
	     	     <div class="panel">
      	     		<div class="panel_header">
      	     		     <div class="panel_title"><span class="text-center">SSl Payment Gatwway</span></div>
      	     		</div>
      	     		    <div class="panel_body">
                      <form class="form-horizontal" action="{{ url('admin/sociallogin/update') }}" method="POST">
                       @csrf
                          <div class="form-group row">
                              <input type="hidden" name="types[]" value="SSLCOMMERZ_STORE_ID">
                                <div class="col-md-1"></div>
                              <div class="col-lg-2">
                                  <label class="control-label">SSl Store id</label>
                              </div>
                              <div class="col-lg-6">
                                  <input type="text" class="form-control" name="SSLCOMMERZ_STORE_ID" value="{{ env('SSLCOMMERZ_STORE_ID') }}" placeholder="Stripe Key" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <input type="hidden" name="types[]" value="SSLCOMMERZ_STORE_PASSWORD">
                                <div class="col-md-1"></div>
                              <div class="col-lg-2">
                                  <label class="control-label">Password</label>
                              </div>
                              <div class="col-lg-6">
                                  <input type="text" class="form-control" name="SSLCOMMERZ_STORE_PASSWORD" value="{{ env('SSLCOMMERZ_STORE_PASSWORD') }}" placeholder="STRIPE Secret" required>
                              </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-12 text-center">
                                <button class="btn btn-success" type="submit">Update</button>
                            </div>
                        </div>
                  </form>
	     		          </div>
	     	       </div>
	     	</div>
    </div>
	</section>
</div>
</div>
@endsection
