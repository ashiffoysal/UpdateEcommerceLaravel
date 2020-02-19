@extends('layouts.adminapp')
@section('admin_content')
<div class="content_wrapper">
			<!--middle content wrapper-->
			<div class="middle_content_wrapper">
				<section class="invoice_area">
					<div class="panel mb-0">
						<div class="panel_header">
							<div class="panel_title">
								<span><i class="fa fa-user"></i> Invoice</span>
							</div>
						</div>
						<div class="panel_body panel_invoice print_element">
							<div class="logo">
								<img src="{{asset('public/adminpanel')}}/assets/images/logo.png" class="img-fluid" alt="">
							</div>
							<div class="row mt-2">
								<div class="col-sm-9">
									<address class="fs-13">
										1355 Market Street, Suite 900<br>
										San Francisco, CA 94103<br>
										<abbr title="Phone">P:</abbr> (123) 456-7890
									</address>
									<address class="fs-13">

										<a href="mailto:#">first.last@example.com</a>
									</address>
								</div>
								<div class="col-sm-3 item_right">
									<h3 class="mt-0 invoice text-right">Invoice</h3>
									<table class="table_invoice table table-bordered">
										<thead>
											<tr>
												<th>Invoice No.</th>
												<th>Date</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>I-240697</td>
												<td>24 July 2020</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="invoice_detail mt-5">
              <div class="row text-center">

                  <div class="col-md-6">
                    <table class="table table-borderless">
    									<thead>
    										<tr>
    											<th>Bill To:</th>


    										</tr>
    									</thead>
    									<tbody>
    										<tr>

    											<td>
    												<span>John Doe</span><br>
    												<span>Incorporesano Ltd.</span><br>
    												<span>(123) 456-7890</span>
    											</td>


    										</tr>
    									</tbody>
    								</table>
                  </div>
                  <div class="col-md-6">
                    <table class="table table-borderless">
    									<thead>
    										<tr>

    											<th>Ship To:</th>

    										</tr>
    									</thead>
    									<tbody>
    										<tr>

    											<td><span>John Doe</span><br>
    												<span>795 Folsom Ave, Suite 600</span><br>
    												<span>San Francisco, CA 94107</span></td>

    										</tr>
    									</tbody>
    								</table>
                </div>
              </div>
								<!-- <table class="table table-borderless">
									<thead>
										<tr>
											<th>Bill To:</th>
											<th>Ship To:</th>

										</tr>
									</thead>
									<tbody>
										<tr>

											<td>
												<span>John Doe</span><br>
												<span>Incorporesano Ltd.</span><br>
												<span>(123) 456-7890</span>
											</td>

											<td><span>John Doe</span><br>
												<span>795 Folsom Ave, Suite 600</span><br>
												<span>San Francisco, CA 94107</span></td>

										</tr>
									</tbody>
								</table> -->
							</div>

							  <table class="table table-condensed table-striped">
								<thead>
								  <tr>
									<th class="text-center" style="width:20px;">QTY</th>
									<th>DESCRIPTION</th>
									<th class="text-right" style="width:120px;">UNIT PRICE</th>
									<th class="text-right" style="width:120px;">TOTAL</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td class="text-center">1</td>
									<td>Samsung Galaxy Note 3 III N900 32gb Black Factory Unlocked Android Cell Phone</td>
									<td class="text-right">$649.99</td>
									<td class="text-right">$649.99</td>
								  </tr>
								  <tr>
									<td class="text-center">2</td>
									<td>Xbox One Console</td>
									<td class="text-right">$500.00</td>
									<td class="text-right">$1000.00</td>
								  </tr>
								  <tr>
									<td class="text-center">1</td>
									<td>Apple iPhone 5s, Gold 16GB (Unlocked)</td>
									<td class="text-right">$700.00</td>
									<td class="text-right">$700.00</td>
								  </tr>
								  <tr>
									<td class="text-center">1</td>
									<td>Keurig K-Cup Home Brewer</td>
									<td class="text-right">$100.00</td>
									<td class="text-right">$100.00</td>
								  </tr>
								</tbody>
								<tfoot>
								  <tr>
									<th colspan="2" rowspan="3" class="bdr">Note:
									  <p class="font-normal">Please send all of these items using wooden box package.</p></th>
									<th class="text-right pd-10">Sub Total</th>
									<th class="text-right pd-10">$2449.99</th>
								  </tr>
								  <tr>
									<th class="text-right  pd-10 no-bd">Discount</th>
									<th class="text-right  pd-10" style="color: tomato;">($100.00)</th>
								  </tr>
								  <tr>
									<th class="text-right  pd-10 no-bd">Shipping Cost</th>
									<th class="text-right  pd-10 no-bd">$50.00</th>
								  </tr>
								  <tr>
									<th colspan="2">Thank you for your business. Please remit the total amount due within 30 days.</th>
									<th class="text-right  pd-10">Total</th>
									<th class="text-right  pd-10 "><span class="vd_green font-sm font-normal" style="color: green;">$2399.99</span></th>
								  </tr>
								</tfoot>
							  </table>

						</div>
						<div class="row mt-3">
							<div class="col-sm-12 text-right">

									  <button class="btn vd_btn vd_bg-grey" type="button"><i class="fa fa-print append-icon"></i> Print</button>

									  <button class="btn vd_btn vd_bg-green " type="button"><i class="fa fa-download append-icon"></i> Save as PDF</button>
							</div>
						</div>
				</section>
			</div>
			<!--/middle content wrapper-->
		</div>
    @endsection
