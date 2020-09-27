@extends('layouts.adminapp')
@section('admin_content')
<div class="content_wrapper">
    <!--middle content wrapper-->
    <!-- page content -->
    <div class="middle_content_wrapper">
        <section class="page_content">
            <!-- panel -->
            <div class="panel mb-0">
                <div class="panel_header">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel_title">
                                <span class="panel_icon"><i class="fas fa-border-all"></i></span><span>All Return Product of Order ID # </span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="panel_body">
                    <div class="table-responsive">
                        <table id="dataTableExample1" class="table table-bordered table-striped table-hover mb-2">
                            <thead>
                                <tr>
                                    <th>
                                        SL
                                    </th>
                                    <th># Order ID</th>
                                    <th>Customar Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Order Date</th>
                                    <th>manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($allproduct as $row)
                                    <td>
                                        {{$row->name}}
                                    
                                    </td>   
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>
    </div>
</div>
<!-- add modal -->
@endsection