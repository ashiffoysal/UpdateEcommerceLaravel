@extends('layouts.adminapp')

@section('admin_content')

            <!-- content wrpper -->
            <div class="content_wrapper">
                <!--middle content wrapper-->
                <div class="middle_content_wrapper">
                    <!-- counter_area -->
                    <section class="counter_area">
                        <div class="row">
                          <div class="col-lg-3 col-sm-6">
                              <div class="counter">
                                @php
                                  $admin=App\Admin::count();
                                @endphp
                                  <div class="counter_item">
                                       <span><i class="fas fa-award"></i></span>
                                       @if($admin)
                                       <h2 class="timer count-number" data-to="{{$admin}}" data-speed="1500"></h2>
                                      @else
                                        <h2 class="timer count-number" data-to="700" data-speed="1500"></h2>
                                      @endif
                                  </div>
                                 <p class="count-text ">Total Staffs</p>
                              </div>
                          </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="counter">
                                  @php
                                    $total_product=App\Product::count();
                                  @endphp
                                    <div class="counter_item">
                                         <span><i class="fab fa-product-hunt"></i></span>
                                         @if($total_product)
                                         <h2 class="timer count-number" data-to="{{$total_product}}" data-speed="1500"></h2>
                                        @else
                                          <h2 class="timer count-number" data-to="700" data-speed="1500"></h2>
                                        @endif
                                    </div>
                                   <p class="count-text ">Total Product</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="counter">
                                    <div class="counter_item">
                                      @php
                                        $total_category=App\Category::count();
                                      @endphp
                                        <span><i class="fas fa-copyright"></i></span>
                                        @if($total_category)
                                         <h2 class="timer count-number" data-to="{{$total_category}}" data-speed="1500"></h2>
                                        @else
                                         <h2 class="timer count-number" data-to="11900" data-speed="1500"></h2>
                                        @endif
                                    </div>
                                    <p class="count-text ">Total Catgeory</p>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="counter">
                                  @php
                                    $subcate=App\SubCategory::count();
                                  @endphp
                                    <div class="counter_item">
                                        <span><i class="fab fa-stripe-s"></i></span>
                                        @if($subcate)
                                         <h2 class="timer count-number" data-to="{{$subcate}}" data-speed="1500"></h2>
                                        @else
                                        <h2 class="timer count-number" data-to="0" data-speed="1500"></h2>
                                        @endif
                                    </div>
                                    <p class="count-text ">Total SubCategory</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="counter">
                                  @php
                                    $cutomer=App\User::count();
                                  @endphp
                                    <div class="counter_item">
                                        <span><i class="fa fa-user"></i></span>
                                        @if($cutomer)
                                         <h2 class="timer count-number" data-to="{{$cutomer}}" data-speed="1500"></h2>
                                        @else
                                        <h2 class="timer count-number" data-to="0" data-speed="1500"></h2>
                                        @endif
                                    </div>
                                    <p class="count-text ">Total Customer</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="counter">
                                  @php
                                    $amount=App\OrderPlace::sum('total_price');
                                  @endphp
                                    <div class="counter_item">
                                        <span><i class="fas fa-envelope-square"></i></span>
                                        @if($amount)
                                         <h2 class="timer count-number" data-to="{{$amount}}" data-speed="1500"></h2>
                                        @else
                                        <h2 class="timer count-number" data-to="0" data-speed="1500"></h2>
                                        @endif
                                    </div>
                                    <p class="count-text ">Total Sell</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="counter">
                                  @php
                                    $total_pending_product=App\OrderPlace::where('delevary',1)->count();
                                  @endphp
                                    <div class="counter_item">
                                        <span><i class="fas fa-cart-plus"></i></span>
                                        @if($total_pending_product)
                                         <h2 class="timer count-number" data-to="{{$total_pending_product}}" data-speed="1500"></h2>
                                        @else
                                        <h2 class="timer count-number" data-to="0" data-speed="1500"></h2>
                                        @endif
                                    </div>
                                    <p class="count-text ">Pending Order</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="counter">
                                    <div class="counter_item">
                                      @php
                                        $total_complate_order=App\OrderPlace::where('delevary',3)->count();
                                      @endphp
                                        <span><i class="fas fa-mug-hot"></i></span>
                                         <h2 class="timer count-number" data-to="{{$total_complate_order}}" data-speed="1500"></h2>
                                    </div>
                                     <p class="count-text ">Total Compleate Order</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--/ counter_area -->
                    <!-- table area -->
                    <section class="table_area">
                        <div class="panel">
                            <div class="panel_header">
                                <div class="panel_title"><span>Best Sell product</span></div>
                            </div>
                            <div class="panel_body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                              <th>ID</th>
                                              <th>First Name</th>
                                              <th>Last Name</th>
                                              <th>Job Title</th>
                                              <th>Started On</th>
                                              <th data-hide="all">Date of Birth</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>1</td>
                                              <td>Dennise</td>
                                              <td>Fuhrman</td>
                                              <td>High School History Teacher</td>
                                              <td>November 8th 2011</td>
                                              <td>July 25th 1960</td>
                                          </tr>
                                          <tr>
                                              <td>2</td>
                                              <td>Elodia</td>
                                              <td>Weisz</td>
                                              <td>Wallpaperer Helper</td>
                                              <td>October 15th 2010</td>
                                              <td>March 30th 1982</td>
                                          </tr>
                                          <tr>
                                              <td>3</td>
                                              <td>Raeann</td>
                                              <td>Haner</td>
                                              <td>Internal Medicine Nurse Practitioner</td>
                                              <td>November 28th 2013</td>
                                              <td>February 26th 1966</td>
                                          </tr>
                                          <tr>
                                              <td>4</td>
                                              <td>Junie</td>
                                              <td>Landa</td>
                                              <td>Offbearer</td>
                                              <td>October 31st 2010</td>
                                              <td>March 29th 1966</td>
                                          </tr>
                                          <tr>
                                              <td>5</td>
                                              <td>Solomon</td>
                                              <td>Bittinger</td>
                                              <td>Roller Skater</td>
                                              <td>December 29th 2011</td>
                                              <td>September 22nd 1964</td>
                                          </tr>
                                          <tr>
                                              <td>6</td>
                                              <td>Bar</td>
                                              <td>Lewis</td>
                                              <td>Clown</td>
                                              <td>November 12th 2012</td>
                                              <td>August 4th 1991</td>
                                          </tr>
                                          <tr>
                                              <td>7</td>
                                              <td>Usha</td>
                                              <td>Leak</td>
                                              <td>Ships Electronic Warfare Officer</td>
                                              <td>August 14th 2012</td>
                                              <td>November 20th 1979</td>
                                          </tr>
                                          <tr>
                                              <td>8</td>
                                              <td>Lorriane</td>
                                              <td>Cooke</td>
                                              <td>Technical Services Librarian</td>
                                              <td>September 21st 2010</td>
                                              <td>April 7th 1969</td>
                                          </tr>
                                          <tr>
                                              <td>9</td>
                                              <td>Lorriane</td>
                                              <td>Cooke</td>
                                              <td>Technical Services Librarian</td>
                                              <td>September 21st 2010</td>
                                              <td>April 7th 1969</td>
                                          </tr>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- /table -->
                        <!-- chart area -->
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="panel chart_area">
                                    <div class="panel_header">
                                        <div class="panel_title">
                                            <span class="panel_icon"><i class="far fa-chart-bar"></i></span>
                                            <span>bar chat</span>
                                        </div>
                                    </div>
                                    <div class="panel_body">
                                        <div id="bar-chart">
                                            <div id="bar-legend"></div>
                                            <canvas id="bar-canvas" ></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="panel">
                                    <div class="panel_header">
                                        <div class="panel_title">
                                            <span class="panel_icon"><i class="fas fa-chart-pie"></i></span>
                                            <span>pie chat</span>
                                        </div>
                                    </div>
                                    <div class="panel_body">
                                        <div id="piechart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div><!--/middle content wrapper-->
            </div><!--/ content wrapper -->
@endsection
