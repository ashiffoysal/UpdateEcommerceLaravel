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
                                      <div id="app">
                                          {!! $chart->container() !!}
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

                      <div class="row">
                        <div class="col-md-6">
                        <div class="panel">
                            <div class="panel_header">
                                <div class="panel_title"><span>Pending Order</span></div>
                            </div>

                                <div class="panel_body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                  <th>ID</th>
                                                  <th>Order Code</th>
                                                  <th>Order Quantity</th>
                                                  <th>Amount</th>
                                                  <th>Delevery Status</th>
                                                  <th data-hide="all">Manage</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @php
                                              $pendingorder=App\OrderPlace::where('delevary',1)->orderBy('id','DESC')->get();
                                            @endphp
                                            @foreach($pendingorder as $key => $pending)
                                              <tr>
                                                  <td>{{++$key}}</td>
                                                  <td>{{$pending->order_id}}</td>
                                                  <td>{{$pending->total_quantity}}</td>
                                                  <td>{{$pending->total_price}}</td>
                                                  <td>
                                                    @if($pending->delevary==1)
                                                    <span class="btn btn-danger">Pending</span>
                                                    @else
                                                    @endif
                                                  </td>
                                                  <td>
                                                      <a href="{{url('admin/product/order/invoice/'.$pending->id)}}" class="btn btn-default btn-sm text-white"><i class="fa fa-eye"></i></a>
                                                  </td>
                                              </tr>
                                            @endforeach

                                          </tbody>
                                        </table>
                                    </div>
                                </div>

                            <!--  -->
                              </div>
                            </div>
                            <!--  -->
                            <div class="col-md-6">
                            <div class="panel">
                                <div class="panel_header">
                                    <div class="panel_title"><span>Customer</span></div>
                                </div>

                                    <div class="panel_body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                      <th>ID</th>
                                                      <th>First Name</th>
                                                      <th>Last Name</th>
                                                      <th>Phone</th>
                                                      <th>Email</th>
                                                      <th data-hide="all">Manage</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                @php
                                                  $alluser=App\User::orderBy('id','DESC')->get();
                                                @endphp
                                                @foreach($alluser as $key => $data)
                                                  <tr>
                                                      <td>{{++$key}}</td>
                                                      <td>{{$data->first_name}}</td>
                                                      <td>{{$data->last_name}}</td>
                                                      <td>{{$data->phone}}</td>
                                                      <td>{{$data->email}}</td>
                                                      <td>
                                                        <a href="" class="btn btn-default btn-sm text-white"><i class="fa fa-eye"></i></a>

                                                      </td>
                                                  </tr>
                                                @endforeach
                                              </tbody>
                                            </table>
                                        </div>
                                    </div>

                                <!--  -->
                                  </div>
                                </div>

                        </div> <!-- /table -->
                        <!-- chart area -->

                    </section>
                </div><!--/middle content wrapper-->
            </div><!--/ content wrapper -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $chart->script() !!}
@endsection
