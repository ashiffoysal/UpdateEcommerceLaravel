@extends('layouts.websiteapp')
@section('main_content')
<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Order History</a></li>
    </ul>

    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-md-9">
            <h2 class="title">Order History</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>

                            <td class="text-center">Order ID</td>
                            <td class="text-center">Qty</td>
                            <td class="text-center">Status</td>
                            <td class="text-center">Date Added</td>
                            <td class="text-right">Total</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($history as $data)
                        <tr>
                            <td class="text-center">#{{$data->order_id}}</td>
                            <td class="text-center">{{$data->total_quantity}}</td>
                            @if($data->delevary==1)
                            <td class="text-center">Pending</td>
                            @elseif($data->delevary==2)
                            <td class="text-center">On Process</td>
                            @elseif($data->delevary==3)
                            <td class="text-center">On Delevery</td>
                            @elseif($data->delevary==4)
                            <td class="text-center">Shiped</td>
                            @else
                            <td class="text-center">Reject</td>
                            @endif
                            <td class="text-center">{{$data->created_at}}</td>
                            <td class="text-right">{{$data->total_price}}</td>
                            <td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="{{url('/customer/order/info/'.$data->id)}}" data-original-title="View"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                      @endforeach

                    </tbody>
                </table>
                {{ $history->links() }}
            </div>

        </div>
        <!--Middle Part End-->
        <!--Right Part Start -->
      @include('frontend.include.account_sidebar.account_sidebar')
        <!--Right Part End -->
    </div>
</div>
<!-- //Main Container -->
@endsection
