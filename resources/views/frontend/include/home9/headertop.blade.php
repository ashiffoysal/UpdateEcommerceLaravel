<header class="header header--organic" data-sticky="true">
        <div class="header__top">
            <div class="container">
                <div class="header__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">

                                <li><a href="{{ route('hot.deal.products') }}">Hot Promotions</a>
                                </li>
                                 @foreach($allcategory as $category)
                                    @php
                                        $check = App\SubCategory::where('cate_id',$category->id)->first();
                                    @endphp
                                    @if($check)
                                    <li class="menu-item-has-children has-mega-menu"><a href="{{url('product/page/'.$category->cate_slug)}}">{{$category->cate_name}}</a>
                                        <div class="mega-menu">
                                             @php
                                                     $allsub=App\SubCategory::where('cate_id',$category->id)->where('is_deleted',0)->where('subcate_status',1)->get();
                                             @endphp
                                              @foreach($allsub as $subcate)  
                                            <div class="mega-menu__column">
                                                <h4>{{$subcate->subcate_name}}<span class="sub-toggle"></span></h4>
                                                <ul class="mega-menu__list">
                                                   @php
                                                    $resubcate =App\ReSubCategory::where('is_deleted',0)->where('subcate_id',$subcate->id)->get();
                                                   @endphp
                                                    @foreach($resubcate as $rcate)
                                                    <li><a href="{{url('resubacetegory/'.$category->cate_slug.'/'.$subcate-> subcate_slug.'/'.$rcate->resubcate_slug)}}">{{$rcate->resubcate_name}}</a></li>
                                                    @endforeach
                                              
                                                </ul>
                                            </div>
                                            @endforeach
                                          
                                        </div>
                                    </li>
                                @else
                                <li><a href="{{url('product/page/'.$category->cate_slug)}}"> {{$category->cate_name}}</a>
                                @endif
                                @endforeach

                            </ul>
                        </div>
                    </div><a class="ps-logo" href="{{url('/')}}"><img src="{{asset('/'.$logos->front_logo)}}" alt=""></a>
                </div>
                <div class="header__center">
                    <form class="ps-form--quick-search" action="" method="get">
                        <div class="form-group--icon"><i class="icon-chevron-down"></i>
                            <select class="form-control" id="category_id" name="category_id">
                               <option value="all" selected="selected">All</option>
                                @foreach($allcategory as $cates)
                                  <option class="level-0" value="{{$cates->id}}}">{{$cates->cate_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input class="form-control" type="text" placeholder="I'm shopping for..." name="input-search" id="input-search">
                        <button>Search</button>
                          <div class="ps-panel--search-result">
                            <div class="ps-panel__content" id="search-result">
                                
                       
                            </div>
                            <div class="ps-panel__footer text-center"><a href=""><!-- See all results --></a></div>
                         </div>
                    </form>
                </div>
                    @php
                        $userid = Request::ip();
                    @endphp
                    @php
                        $ip = Request::ip();
                        $user_id = Auth::id();
                        $allwish=App\wishlist::where('user_id',$user_id)->count();
                        $allcompare=App\CompareProduct::where('ip_address',$ip)->count();
                    @endphp
                <div class="header__right">
                    <div class="header__actions"><a class="header__extra" href="{{url('/product/compare/page')}}"><i class="icon-chart-bars" ></i><span><i id="coutncompa">{{$allcompare}}</i></span></a><a class="header__extra" href="{{url('product/wishlist')}}"><i class="icon-heart"></i><span><i id="countwish">{{ $allwish }}</i></span></a>
      
                                <div class="ps-cart--mini"> <a class="header__extra" onmouseover="myAddToCartData()" data-id="{{$userid}}" id="cartdataid" href="#"><i class="icon-bag2"></i><span><i id="cartdatacount" >0</i></span>
                            </a>
                            <div class="ps-cart__content">
                            <div id="addtocartshow">

                             </div>
                               
                            </div>
                        </div>
                        <div class="ps-block--user-header">
                            <div class="ps-block__left"><i class="icon-user"></i></div>
                            @if(Auth::check())
                            <div class="ps-block__right"><a href="{{route('customar.account.page')}}">Accounts</a><a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="#">Logout</a></div>
                            <form id="logout-form" method="post" action="{{route('customar.logout')}}">
                                @csrf
                            </form>
                            @else
                                <div class="ps-block__right"><a href="{{route('customar.login.form')}}">Login</a><a href="{{route('customar.login.form')}}">Register</a></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navigation">
            <div class="container">
                <div class="navigation__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                                   <li><a href="{{ route('hot.deal.products') }}"> Hot Promotions</a>
                                </li>
                                 @foreach($allcategory as $category)
                                    @php
                                        $check = App\SubCategory::where('cate_id',$category->id)->first();
                                    @endphp
                                    @if($check)
                                    <li class="menu-item-has-children has-mega-menu"><a href="{{url('product/page/'.$category->cate_slug)}}">{{$category->cate_name}}</a>
                                        <div class="mega-menu">
                                             @php
                                                     $allsub=App\SubCategory::where('cate_id',$category->id)->where('is_deleted',0)->where('subcate_status',1)->get();
                                             @endphp
                                              @foreach($allsub as $subcate)  
                                            <div class="mega-menu__column">
                                                <h4>{{$subcate->subcate_name}}<span class="sub-toggle"></span></h4>
                                                <ul class="mega-menu__list">
                                                   @php
                                                    $resubcate =App\ReSubCategory::where('is_deleted',0)->where('subcate_id',$subcate->id)->get();
                                                   @endphp
                                                    @foreach($resubcate as $rcate)
                                                    <li><a href="{{url('resubacetegory/'.$category->cate_slug.'/'.$subcate-> subcate_slug.'/'.$rcate->resubcate_slug)}}">{{$rcate->resubcate_name}}</a></li>
                                                    @endforeach
                                              
                                                </ul>
                                            </div>
                                            @endforeach
                                          
                                        </div>
                                    </li>
                                @else
                                <li><a href="{{url('product/page/'.$category->cate_slug)}}">{{$category->cate_name}}</a>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="navigation__right">
                    <ul class="menu menu--organic">
                        <li class="current-menu-item"><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/shop')}}">Shop</a></li>
                        <li class="menu-item-has-children has-mega-menu"><a href="">Pages</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Basic Page<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                    <li><a href="{{url('/faq')}}">Faqs</a></li>
                                    <li><a href="{{url('/warranty')}}">warranty</a></li>
                                    <li><a href="{{url('/tracking/page')}}">Order Traking</a></li>
                                   
                                    </ul>
                                </div>
                          
                            </div>
                        </li>
                        <li class=""><a href="{{url('/product/blog')}}">Blogs</a></li>
                        <li class=""><a href="{{route('contract.us')}}">Contact us</a></li>
                    </ul>
                    <div class="ps-block--header-hotline inline">
                        <p><i class="icon-telephone"></i>Hotline:<strong> {{$footer->phone}}</strong></p>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <script>
    function myAddToCartData() {
        var userip =$("#cartdataid").data("id");
        $.post('{{ route('add.cart.show') }}', {_token: '{{ csrf_token() }}',user_id: userip},
            function(data) {
			   $('#addtocartshow').html(data);
			
            });
	}

	myAddToCartData();
</script>
<script>
    $(document).ready(function(){
      
        $('#input-search').on('keyup', function(){
            var product_name = $(this).val();
            //alert(product_name);
            var category_id = $('#category_id').val();
        

            $.ajax({
                url:"search/product/by/category"+"/"+category_id+"/"+product_name,
                type:'get',
                success:function(data){
                   $('#search-result').empty();
                    $('#search-result').html(data);
                }
            });
        });
    });
</script>