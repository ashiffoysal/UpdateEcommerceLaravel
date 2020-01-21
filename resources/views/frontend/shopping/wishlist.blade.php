@extends('layouts.websiteapp')
@section('main_content') 
<!-- Main Container  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="container">
    <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li><a href="wishlist.html">My Wish List</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-9">
            <h2>My Wish List</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td class="text-center">Image</td>
                            <td class="text-left">Product Name</td>
                            <td class="text-left">Model</td>
                            <td class="text-right">Stock</td>
                            <td class="text-right">Unit Price</td>
                            <td class="text-right">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allwishlist as $wish)
                        
                        <tr>
                            <td class="text-center">
                                <a href=""><img src="{{asset('public/uploads/products/thumbnail/'.$wish->product->thumbnail_img)}}" alt="Burger King Japan debuts Monster  Baby Force Bralette"title="Burger King Japan debuts Monster  Baby Force Bralette" height="75px" width= "75px"></a>
                            </td>
                        <td class="text-left"><a href="product.html">{{ Str::limit($wish->product->product_name,40) }}</a></td>
                        <td class="text-left">{{$wish->product->product_sku}}</td>
                            @if($wish->product->product_qty > 0)
                            <td class="text-right">In Stock</td>
                            @else
                            <td class="text-right">Out of Stock</td>
                            @endif
                            <td class="text-right">
                                <div class="price"> <b>{{$wish->product->product_price}}</b></div>
                            </td>
                            <td class="text-right">
                                <button type="button" onclick="cart.add('106');" data-toggle="tooltip" title=""
                                    class="btn btn-primary" data-original-title="Add to Cart"><i
                                        class="fa fa-shopping-cart"></i></button>

                                    <a  title="Remove" class="delete btn btn-danger" data-id="{{$wish->id}}"><i class="fa fa-times"></i></a></td>
                        </tr>
                        @endforeach
                       
                    </tbody>

                </table>
            </div>
            <div class="buttons clearfix">
                <div class="pull-right"><a href="#" class="btn btn-primary">Continue</a></div>
            </div>
        </div>
        <aside class="col-md-3 content-aside right_column sidebar-offcanvas">
            <span id="close-sidebar" class="fa fa-times"></span>
            <div class="module">
                <h3 class="modtitle"><span>My Wish List </span></h3>
                <div class="module-content custom-border">
                    <ul class="list-box">

                        <li><a href="#">My Account </a></li>

                        <li><a href="#">Edit Account </a></li>
                        <li><a href="#">Password </a></li>

                        <li><a href="#">Address Book </a></li>
                        <li><a href="wishlist.html">Wish List </a></li>
                        <li><a href="#">Order History </a></li>
                        <li><a href="#">Downloads </a></li>
                        <li><a href="#">Recurring payments </a></li>
                        <li><a href="#">Reward Points </a></li>
                        <li><a href="#">Returns </a></li>
                        <li><a href="#">Transactions </a></li>
                        <li><a href="#">Newsletter </a></li>

                        <li><a href="#">Logout </a></li>

                    </ul>
                </div>
            </div>
        </aside>
    </div>
</div>
<script>
    $(document).ready(function(){
        $.ajax({
            type : 'GET',
            url:"{{url('')}}",

            success : function(response) {
                $( "#AllProducts" ).html(response);
            }

        });
    });
</script>

   <script>
    $(document).ready(function() {
       $('.delete').on('click', function(){
       var id = $(this).data('id');
            //alert(id);
     if(id){
        $.ajax({
        url: "{{ url('/wishlist/delete/') }}/"+id,
        type:"GET",
        dataType:"json",
        processData: false,
        success: function (data) {
            // console.log(data);
              if (data ==1){
                toastr.success("wishlist delete");
                }else{
                toastr.error("wishlist delete faild");
             }
        }
     });
        } else {
               alert('danger');
        }
    });
    });
    </script>

@endsection