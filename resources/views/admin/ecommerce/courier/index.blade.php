@extends('layouts.adminapp')
@section('admin_content')
<!-- content wrpper -->
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
                                <span class="panel_icon"><i class="fas fa-border-all"></i></span><span>All Selected
                                    Courier Service (Sub-Ditirict Wise)</span>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal1"><i class="fas fa-plus"></i></span> <span>Add Courier</span>
                            </a>
                        </div>
                    </div>
                </div>
                <form action="" method="Post">
                    @csrf
                    <div class="panel_body">
                        <div class="table-responsive">
                            <table id="dataTableExample1" class="table table-bordered table-striped table-hover mb-2">
                                <thead>
                                    <tr class="text-center">
                                        <th>Country</th>
                                        <th>Division</th>
                                        <th>District</th>
                                        <th>Sub-District</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($up_couriers as $up_courier)
                                    @php

                                    $sub_district = DB::table('upazilas')->where('id',
                                    $up_courier->upazila_id)->first();
                                    $district = DB::table('districts')->where('id',
                                    $sub_district->district_id)->first();
                                    $division = DB::table('divisions')->where('id', $district->division_id)->first();

                                    @endphp
                                    <tr class="text-center">

                                        <td>
                                            Bangladesh
                                        </td>
                                        <td>
                                            {{ $division->name }}
                                        </td>
                                        <td>
                                            {{ $district->name }}
                                        </td>
                                        <td>
                                            {{ $sub_district->name }}
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ route('courier.sync.edit', $up_courier->upazila_id) }}">
                                                <i class="fas fa-pencil-alt"></i></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="{{ route('courier.sync.delete', $up_courier->upazila_id) }}"><i
                                                    class="fas fa-trash"></i></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>


<!-- modal start-->
<div class="modal fade bd-example-modal-lg" id="myModal1">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Courier</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
            <form class="form-horizontal" action="{{ route('courier.store') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="courier_name" required>
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-blue mr-5">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- edit modal end -->


@endsection
