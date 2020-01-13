@extends('layouts.adminapp')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/adminpanel')}}/assets/plugins/select2/css/select2.min.css">
      <!-- content wrpper -->
			<div class="content_wrapper">
				<!--middle content wrapper-->
				<div class="middle_content_wrapper">
				<section class="page_area">
					<div class="panel">
						<div class="panel_header">
							<div class="row">
								<div class="col-md-6">
                                    <div class="panel_title">
                                        <span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>Edit Flash Deal</span>
                                    </div>
								</div>
								<div class="col-md-6 text-right">
                                <button type="button"  style="margin: 5px;" class="btn btn-success" ><i class="fas fa-award"></i> <a href="{{ route('admin.flash.deal.index') }}" style="color: #fff;">Back</a></button>
								</div>
							</div>

						</div>
						<div class="panel_body">
							<form action="{{route('admin.flash.deal.update', $flashDeal->id)}}" method="POST" id="choice_form" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label text-right">Title</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" value="{{ $flashDeal->title }}" name="title">
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label text-right">Start Date</label>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" value="{{ $flashDeal->start_date }}" name="start_date">
                                        <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label text-right">End Date</label>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" value="{{$flashDeal->end_date }}"  name="end_date">
                                        <span class="text-danger">{{ $errors->first('end_date') }}</span>
                                    </div>
                                </div>

								<!--  -->

                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label text-right">Select Product</label>
                                    <div class="col-sm-6">
                                        <div class="select2-purple">
                                            <select class="select2" name="product_id[]" id="product_id" multiple="multiple" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                                @foreach($products as $product)
                                                    <option
                                                    @foreach ($flashDeal->flash_deal_details as $flash_deal_detail)
                                                        {{ $flash_deal_detail->product_id == $product->id ? 'SELECTED' : '' }}
                                                    @endforeach
                                                    value="{{$product->id}}"
                                                    >
                                                    {{$product->product_name}}
                                                </option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('product_id') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- selected product section -->
                                <div class="row justify-content-center">
                                    <div class="col-md-6 ">
                                        <div class="selected-products-table">
                                            <table class="table table-sm table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Product Name</th>
                                                        <th>Base Price</th>
                                                        <th>Discount</th>
                                                        <th>Type</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="products-table-body">
                                                @foreach ($flashDeal->flash_deal_details as $flash_deal_detail)
                                                    <tr>
                                                        <td>{{ $flash_deal_detail->product->product_name }}</td>
                                                        <td>{{ $flash_deal_detail->product->product_price }}</td>
                                                        <td>
                                                        <input type="number" class="form-control" name="discount[{{ $product->id }}]" value="{{ $flash_deal_detail->discount }}">
                                                        </td>
                                                        <td>
                                                            <select name="discount_type[]" class="form-control" id="">
                                                                <option {{ $flash_deal_detail->discount_type == 1 ? "SELECTED" : "" }} value="1">Amount</option>
                                                                <option {{ $flash_deal_detail->discount_type == 2 ? "SELECTED" : "" }} value="2">%</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-area">
                                    <div class="row">
                                        <div class="col-md-6 offset-3">
                                            <button class="btn btn-sm btn-success" type="submit">Update</button>
                                        </div>
                                    </div>
                                </div>
							</form>
						</div>
					</div>
				</section>
			</div><!--/middle content wrapper-->
			</div><!--/ content wrapper -->
   <!-- script code start -->


<script type="text/javascript">

    $(document).ready(function(){
        $('.selected-products-table').show();
        $(document).on('change','#product_id', function(){
           var productId = $(this).val();
           //console.log(productId);
            var test = $(this).serialize();

           if (productId == null) {
                $('.selected-products-table').hide();
           }else{
            $('.selected-products-table').show();
           }

           $.ajax({
               url:"{{ url('admin/flash/deal/get/selected/products/by/ajax') }}",
               type:'get',
               data:{
                    productId: productId,
               },
               success:function(data){
                   console.log(data);
                   $('.products-table-body').empty();
                   $('.products-table-body').append(data);
               }
           });
        });
    })

</script>

<script src="{{asset('public/adminpanel')}}/assets/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript">
  $(function(){

   $('.select2').select2()

 });
</script>

@endsection
