<!-- Menu left-->
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col_vnxd  menu-left">

<div class="row row_f8gy">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_gafz col-style megamenu-style-dev megamenu-dev">
        <div class="responsive">
            <div class="so-vertical-menu no-gutter">
                <nav class="navbar-default">
                    <div class=" container-megamenu  container   vertical  ">
                        <div id="menuHeading">
                            <div class="megamenuToogle-wrapper">
                                <div class="megamenuToogle-pattern">
                                    <div class="container">
                                        <div><span></span><span></span><span></span></div>
                                        <span class="title-mega">
                                            All Categories
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-header">
                            <span class="title-navbar hidden-lg hidden-md"> All Categories </span>
                            <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="vertical-wrapper">
                            <span id="remove-verticalmenu" class="fa fa-times"></span>
                            <div class="megamenu-pattern">
                                <div class="container">
                                    <ul class="megamenu" data-transition="slide" data-animationtime="300">
                                        <li>
                                            <p class="close-menu"></p>
                                            <a class="clearfix">
                                                <span>
                                                    <strong><img src="{{asset('public/frontend')}}/image/catalog/demo/menu/icon/icon-6.png" alt="">Hot Deals</strong>
                                                </span>
                                            </a>
                                        </li>
                                        @php
                                        $category = App\Category::where('is_deleted',0)->where('cate_status',1)->get();
                                        @endphp
                                        @foreach($category as $menu)
                                        <li class="item-vertical  vertical-style2 with-sub-menu hover">
                                            @php
                                            $check=App\SubCategory::where('cate_id',$menu->id)->first();
                                            @endphp
                                            @if($check)
                                            <p class="close-menu"></p>
                                            <a class="clearfix">
                                                <span>
                                                    <strong><img src="{{asset('public/uploads/category/'.$menu->cate_icon)}}" alt="">{{$menu->cate_name}}</strong>
                                                </span>
                                                <b class="fa fa-caret-right"></b>
                                            </a>
                                            <div class="sub-menu" data-subwidth="100">
                                                <div class="content">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="html item-1">
                                                                <div class="row">
                                                                    @php
                                                                    $subcategory=App\SubCategory::where('cate_id',$menu->id)->where('is_deleted',0)->get();
                                                                    @endphp
                                                                    <div class="col-md-7 col-sm-8">
                                                                        @foreach($subcategory as $subcate)
                                                                        <div class="item-3 col-md-6 cat-child icon-2 parent">
                                                                            <a href="{{url('subacete/'.$subcate->category->cate_slug.'/'.$subcate->subcate_slug)}}" title="Sound">{{$subcate->subcate_name}}</a>
                                                                            <ul>
                                                                                @php
                                                                                $resubcate=App\ReSubCategory::where('is_deleted',0)->where('subcate_id',$subcate->id)->get();
                                                                                @endphp
                                                                                @foreach($resubcate as $resub)
                                                                                <li><a href="{{url('resubacete/'.$resub->category->cate_slug.'/'.$resub->subcate->subcate_slug.'/'.$resub->resubcate_slug)}}" title="Bluetooth Speakers">{{$resub->resubcate_name}}</a></li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>

                                                                    <div class="img-banner col-lg-5 col-md-5 col-sm-4">
                                                                        <a href="#"><img src="{{asset('public/frontend/')}}/image/catalog/demo/menu/img-static-megamenu-h.jpg" alt="banner"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <p class="close-menu"></p>
                                            <a class="clearfix" href="{{url('product/page/'.$menu->cate_slug)}}">
                                                <span>
                                                    <strong><img src="{{asset('public/uploads/category/'.$menu->cate_icon)}}" alt="">{{$menu->cate_name}}</strong>
                                                </span>
                                            </a>
                                        </li>

                                        @endif

                                        @endforeach
                                        <li class="loadmore">
                                            <i class="fa fa-plus-square">

                                            </i><span class="more-view">More Categories
                                                
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

</div>
<!--- SLider right-->
