@extends('layouts.websiteapp')
@section('content')
<div class="ps-page--simple">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop-default.html">Shop</a></li>
                    <li>Whishlist</li>
                </ul>
            </div>
        </div>
        <div class="ps-section--shopping ps-whishlist">
            <div class="container">
                <div class="ps-section__header">
                    <h1>Wishlist</h1>
                </div>
                <div class="ps-section__content">
                    <div class="table-responsive" id="wishlisttable">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ps-newsletter">
        <div class="container">
            <form class="ps-form--newsletter" action="do_action" method="post">
                <div class="row">
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__left">
                            <h3>Newsletter</h3>
                            <p>Subcribe to get information about products and coupons</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__right">
                            <div class="form-group--nest">
                                <input class="form-control" type="email" placeholder="Email address">
                                <button class="ps-btn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script>
$( document ).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'GET',
            url: "{{ route('get.wish.data') }}",
            
            success: function(data) {
                
              
                $('#wishlisttable').html(data);
                
            }
        });

});
    
</script>
<!--   <script type="text/javascript">
        $(document).ready(function () {
            $('.deletewish').on('click', function () {
                var id = $(this).data('id');
                //alert(id);
                if (id) {

                    $.ajax({
                        url: "{{ url('/product/add/wishlist/') }}/" + id,
                        type: "GET",
                        dataType: "json",
                        processData: false,
                        success: function (data) {
                            if (data.check) {
                                  iziToast.error({
                                        message: 'This Product All ready Add wishlist',
                                        'position':'topRight'
                                    });

                            } else {
                                    iziToast.success({
                                        message: 'Product Add to wishlist ',
                                        'position':'topRight'
                                    });
                            }
                        }
                    });
                } else {
                    //alert('danger');
                }
            });
          
        });
    </script> -->

@endsection