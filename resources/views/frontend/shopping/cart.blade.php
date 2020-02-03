@extends('layouts.websiteapp')
@section('main_content')

<!-- Main Container  -->
<div class="container">
    <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Shopping Cart</a></li>
    </ul>

    <div class="row" id="cartdata">
        


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
                url: "{{ route('get.cart.data') }}",
                
                success: function(data) {
                    
                  
                    $('#cartdata').html(data);
                    
                }
            });
    
});
    
</script>
@endsection






<script>
    var myVar;
    function myUpdatecart(el) {
        
        myVar = setTimeout(function(){ 
            
            $.post('{{ route('product.cart.update') }}', {_token: '{{ csrf_token() }}',quantity: el.value,rowid:el.id},
            function(data) {
                $('#cartdata').html(data);
                
                
            });
            toastr.success("Product Quantity Changed successfully");
        }, 1000);
            
        
      
    }
   
    myUpdatecart();
    
    
</script>

