@foreach($usercartdatas as $row)
<tr>
    <td>
        <div class="ps-product--cart">
            <div class="ps-product__thumbnail"><a href="{{url('product/')}}/{{$row->attributes->slug}}/{{$row->attributes->product_id}}"><img src="{{asset('public/uploads/products/thumbnail/productdetails')}}/{{$row->attributes->thumbnail_img}}" alt="{{$row->name}}"></a></div>
            <div class="ps-product__content"><a href="{{url('product/')}}/{{$row->attributes->slug}}/{{$row->attributes->product_id}}">{{$row->name}}</a>


            @if($row->attributes->colors)
                <p>Color:<strong class="product-color" style="background: {{$row->attributes->colors}};"></strong></p>
            @endif
                <!-- showing cart color and size -->

                @php
                

                    // store attibute name
                    $sizename = [];
                    $productdetails = App\Product::findOrFail($row->attributes->product_id);

                    foreach (json_decode($productdetails->choice_options) as $key => $choice) {

                        $size = $choice->title; //this reaturn size,model
                        $choicename = $choice->name; //this reaturn form name  
                        array_push($sizename, $size);
                    }
                    $countsize = count($sizename);
                    
                    
                @endphp






                @if($countsize == 1)
                    @php
                        $sizenameone =$sizename[0];
                    @endphp
                    <p>{{$sizename[0]}}:<strong> {{$row->attributes->$sizenameone}}</strong></p>


                @elseif($countsize == 2)
                    @php
                        $sizenameone =$sizename[0];
                        $sizenametwo =$sizename[1];
                    @endphp
                    <p>{{$sizename[0]}}:<strong> {{$row->attributes->$sizenameone}}</strong></p>
                    <p>{{$sizename[1]}}:<strong> {{$row->attributes->$sizenametwo}}</strong></p>


                @elseif($countsize == 3)
                    @php
                        $sizenameone =$sizename[0];
                        $sizenametwo =$sizename[1];
                        $sizenamethree =$sizename[2];
                    @endphp
                    <p>{{$sizename[0]}}:<strong> {{$row->attributes->$sizenameone}}</strong></p>
                    <p>{{$sizename[1]}}:<strong> {{$row->attributes->$sizenametwo}}</strong></p>
                    <p>{{$sizename[2]}}:<strong> {{$row->attributes->$sizenamethree}}</strong></p>

                @elseif($countsize == 4)

                    @php
                        $sizenameone =$sizename[0];
                        $sizenametwo =$sizename[1];
                        $sizenamethree =$sizename[2];
                        $sizenamefour =$sizename[3];
                    @endphp
                    <p>{{$sizename[0]}}:<strong> {{$row->attributes->$sizenameone}}</strong></p>
                    <p>{{$sizename[1]}}:<strong> {{$row->attributes->$sizenametwo}}</strong></p>
                    <p>{{$sizename[2]}}:<strong> {{$row->attributes->$sizenamethree}}</strong></p>
                    <p>{{$sizename[3]}}:<strong> {{$row->attributes->$sizenamefour}}</strong></p>

                @endif
                    
            </div>
        </div>
    </td>
    <td class="price">৳ {{$row->price}}</td>
    <td>
        <div class="form-group--number">
            <button class="up">+</button>
            <button class="down">-</button>
            <input class="form-control" onkeyup="myUpdatecart(this)" id="{{$row->id}}"  type="text" placeholder="1" value="{{$row->quantity}}">
        </div>
    </td>
    <td>৳ {{$row->quantity *$row->price}}</td>
    <td>
        <!-- <a href="#"><i class="icon-cross"></i></a> -->
        <button type="submit" onclick="cartDatadelete(this);cartTotalData()" data-toggle="tooltip" title="" class="btn btn-danger" value="{{$row->id}}" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
    </td>
</tr>
@endforeach



<script>
    function cartDatadelete(el) {
        
        
        $.post('{{ route('cart.data.delete') }}', {_token: '{{ csrf_token() }}',user_id: el.value},
            function(data) {
                $('#cartdata').html(data);
                
                if (data) {
                    iziToast.info({
                    message: 'Product Deleted',
                    'position':'topRight'
                });
                } 
                
               
            });
            
	}
	
	cartDatadelete();
</script>

<script>
    function cartTotalData(el) {

        
        
        
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: "{{ route('cart.total.amount') }}",
                
                success: function(data) {
                    $('#orderdata').html(data);
                    
                }
            });
            
	}
	
	cartTotalData();
</script>
