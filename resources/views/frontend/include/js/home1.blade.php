<script type="text/javascript" src="{{asset('public/frontend/js/jquery-2.2.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/themejs/so_megamenu.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/owl-carousel/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/slick-slider/slick.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/themejs/libs.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/unveil/jquery.unveil.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/countdown/jquery.countdown.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/datetimepicker/moment.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/modernizr/modernizr-2.6.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/minicolors/jquery.miniColors.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/jquery.nav.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/quickview/jquery.magnific-popup.min.js')}}"></script>
<!-- Theme files
				 ============================================ -->
<script type="text/javascript" src="{{asset('public/frontend/js/themejs/application.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/themejs/homepage.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/themejs/custom_h1.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/themejs/addtocart.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/themejs/nouislider.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/themejs/custom_h2.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/toaster_alert.js')}}"></script>
{{-- <script type="text/javascript" src="{{asset('public/frontend/js/select_bootstrap/bootstrap-select.min.js')}}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if(Session::has('messege'))
    var type = "{{Session::get('alert-type','info')}}"
    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>

@if (!Request::is('login'))
<script>
    $(document).ready(function(){
        $('.search-section').hide();

        $('#product_name').on('keyup', function(){
            var product_name = $(this).val();
            var category_id = $('#category_id').val();
            if (product_name === "") {
                $('.search-section').hide();
                $('#main_content').show();
            }else{
                $('.search-section').show();
                $('#main_content').hide();
            }

            $.ajax({
                url:"{{ url('search/product/by/category/') }}"+"/"+category_id+"/"+product_name,
                type:'get',
                success:function(data){
                    if (!$.isEmptyObject(data)) {
                        $('#search_result_product').empty();
                        $('#search_result_product').append(data);
                    }else{
                        $('#search_result_product').empty();
                        $('#search_result_product').append('<h1>No Data Found</h1>');
                    }
                }
            });

        });
    });
</script>
@endif
<script>
    $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.login-error-message').hide();
    $('#login-form').on('submit', function(e){
        e.preventDefault();
        var url = $(this).attr('action');
        var data = $(this).serialize();
        $.ajax({
            url: url,
            type:'post',
            data:data,
            dataType:'json',
            success:function(data){
                if($.isEmptyObject(data.login)){
                    $('.login-error-message').show();
                    $('.errorMsgAll').html(data.error);
                }else{
                    window.location = data.login
                }
            },
            error:function(err){
                console.log(err.responseJSON.errors);
            }
        });
    });
    })
</script>
@stack('js')
