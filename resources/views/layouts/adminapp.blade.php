@php
$logo=DB::table('logos')->first();
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    {{-- <script src="{{ asset('public/js/app.js') }}" defer></script> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!--bootstrap-->
    <link rel="stylesheet" href="{{ asset('public/adminpanel/assets/css/bootstrap.min.css') }}">
    <!--font awesome-->
    <link rel="stylesheet" href="{{ asset('public/adminpanel/assets/css/all.min.css') }}">
    <!-- metis menu -->
    <link rel="stylesheet" href="{{ asset('public/adminpanel/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/adminpanel/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css') }}">
    <!-- datable -->
    <link href="{{asset('public/adminpanel')}}/assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css">

    <!-- tag -->
    <link rel="stylesheet" href="{{asset('public/adminpanel')}}/assets/plugins/multi_select_Suggestags/css/amsify.suggestags.css">
    <!-- Amsify Plugin -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- select -->
    <link rel="stylesheet" href="{{asset('public/adminpanel')}}/assets/plugins/select2/css/select2.min.css">
    <!-- tag -->
    <link rel="stylesheet" href="{{asset('public/adminpanel')}}/assets/plugins/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.css">
    <!--Custom CSS-->
    <link rel="stylesheet" href="{{ asset('public/adminpanel/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <!-- Styles -->
    {{-- <link href="{{ asset('public/css/app.css') }}" rel="stylesheet"> --}}
</head>

<body id="page-top">
    <!-- preloader -->
    <!-- <div class="preloader">
            <img src="{{ asset($logo->preloader) }}" >
        </div> -->
    <!-- wrapper -->

    @guest
    @else
    <div class="wrapper">
        <!-- header area -->
        <header class="header_area">
            <!-- logo -->
            <div class="sidebar_logo">
                <a href="{{ route('admin.dashboard') }}">
                    <img src="{{ asset($logo->admin_logo) }}" alt="" class="img-fluid logo1">
                    <img src="{{ asset('public/adminpanel/assets/images/logo_small.png') }}" alt="" class="img-fluid logo2">
                </a>
            </div>
            <div class="sidebar_btn">
                <button class="sidbar-toggler-btn"><i class="fas fa-bars"></i></button>
            </div>
            <ul class="header_menu">
                <li><a href="#" class="search_btn" data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i></a>
                    <div class="modal fade search_box" id="myModal">
                        <button type="button" class="close m-2 text-white float-right" data-dismiss="modal">&times;</button>
                        <form action="#" class="modal-dialog modal-lg">

                            <div class="modal-content bg-transparent">
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <input class="form-control bg-transparent text-white form-control-lg" type="text" placeholder="Search...">
                                    <button class="btn btn-lg submit-btn" type="submit">Search</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </li>
                <li><a data-toggle="dropdown" href="#"><i class="far fa-envelope"></i><span>4</span></a>
                    <div class="dropdown_wrapper messages_item dropdown-menu dropdown-menu-right">
                        <div class="dropdown_header">
                            <p>you have 4 messages</p>
                        </div>
                        <ul class="dropdown_body nice_scroll scrollbar">
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{asset('public/adminpanel/')}}/assets/images/user1.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Madelyn <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello Sam...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{asset('public/adminpanel/')}}/assets/images/user2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Melvin <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello jhon...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{asset('public/adminpanel/')}}/assets/images/user3.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Olinda <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello jhon...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{asset('public/adminpanel/')}}/assets/images/user1.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Johnson <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello Olinda...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{asset('public/adminpanel/')}}/assets/images/user3.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Madelyn <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello Sam...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{asset('public/adminpanel/')}}/assets/images/user2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Melvin <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello jhon...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{asset('public/adminpanel/')}}/assets/images/user3.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Olinda <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello jhon...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{asset('public/adminpanel/')}}/assets/images/user1.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Johnson <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello Olinda...</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown_footer">
                            <a href="#">See All Messages</a>
                        </div>
                    </div>
                </li>
                <li><a href="#" data-toggle="dropdown"><i class="far fa-bell"></i><span>9</span></a>
                    <div class="dropdown_wrapper notification_item dropdown-menu dropdown-menu-right">
                        <div class="dropdown_header">
                            <p>You have 9 notifications</p>
                        </div>
                        <ul class="dropdown_body scrollbar nice_scroll">
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-success"><i class="fas fa-users"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p>5 new members joined</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p> Very long description here that may...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-success"><i class="fas fa-cart-plus"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p> 25 sales made</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-warning"><i class="fas fa-user"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p> You changed your username</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-success"><i class="fas fa-users"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p>5 new members joined</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p> Very long description here that may...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-success"><i class="fas fa-cart-plus"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p> 25 sales made</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-warning"><i class="fas fa-user"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p> You changed your username</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown_footer">
                            <a href="#">view All</a>
                        </div>
                    </div>
                </li>
                <li><a data-toggle="dropdown" href="#"><i class="far fa-user"></i></a>
                    <div class="user_item dropdown-menu dropdown-menu-right">
                        <div class="admin">
                            @if(Auth::user()->avatar == NULL)
                            <a href="#" class="user_link"><img src="{{ asset('public/admin/assets/images/admin.jpg') }}" alt=""></a>
                            @else
                            <a href="#" class="user_link"><img src="{{ asset(Auth::user()->avatar) }}" alt=""></a>
                            @endif

                        </div>
                        <ul>
                            <li><a href="{{ route('admin.profile') }}"><span><i class="fas fa-user"></i></span> User Profile</a> </li>
                            <li><a href="{{ route('admin.edit.profile') }}"><span><i class="fas fa-cogs"></i></span> Settings</a> </li>
                            <li><a href="{{ route('admin.password.change') }}"><span><i class="fas fa-cogs"></i></span> Password Change</a> </li>
                            <li><a href="{{ route('admin.lock.screen') }}"><span><i class="fas fa-cogs"></i></span> Lock Screen</a> </li>
                            <li> <a href="{{ route('admin.logout') }}"> <span><i class="fas fa-unlock-alt"></i></span> Logout </a> </li>
                        </ul>
                    </div>
                </li>
                <li><a class="responsive_menu_toggle" href="#"><i class="fas fa-bars"></i></a></li>
            </ul>
        </header><!-- / header area -->
        <!-- sidebar area -->
        <aside class="sidebar-wrapper ">
            <nav class="sidebar-nav">
                <ul class="metismenu" id="menu1">
                    <li class="single-nav-wrapper">
                        <a href="{{ route('admin.dashboard') }}" class="menu-item">
                            <span class="left-icon"><i class="fas fa-home"></i></span>
                            <span class="menu-text">home</span>
                        </a>
                    </li>
                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-copyright"></i></span>
                            <span class="menu-text">Category</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="{{route('admin.category.all')}}">All Category</a></li>
                            <li><a href="{{route('admin.subcategory.all')}}">All SubCategory</a></li>
                            <li><a href="{{route('admin.resubcategory.all')}}">All ReSubCategory</a></li>
                        </ul>
                    </li>
                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-external-link-alt"></i></span>
                            <span class="menu-text">Extra</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="{{route('admin.brand.all')}}">All Brand</a></li>
                            <li><a href="{{route('admin.color.all')}}">All Color</a></li>
                            <li><a href="{{route('admin.measurement.all')}}">All Measurement</a></li>
                        </ul>
                    </li>
                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-cart-plus"></i></span>
                            <span class="menu-text">Product</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="{{route('admin.product.producttype')}}">Add Product</a></li>
                            <li><a href="{{route('admin.product.all')}}">All Product</a></li>
                        </ul>
                    </li>
                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-people-carry"></i></span>
                            <span class="menu-text">E-commerce Setup</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="{{route('admin.cupon.all')}}">All Cupon</a></li>
                            <li><a href="{{route('admin.cupon.add')}}">Add Cupon</a></li>
                        </ul>
                    </li>


                    <li class="single-nav-wrapper">
                        @php
                        $pending=App\OrderPlace::where('delevary',1)->count();
                        @endphp
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-people-carry"></i></span>
                            <span class="menu-text">Order @if($pending > 0)<span class="badge badge-secondary">New</span> @else @endif</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="{{route('admin.productorder')}}">Pending Orders <span class="badge badge-light">{{$pending}}</span></a></li>
                            @php
                              $onprocess=App\OrderPlace::where('delevary',4)->count();
                            @endphp
                            <li><a href="{{route('admin.productprocess')}}">Processing Orders <span class="badge badge-light">{{$onprocess}}</span></a></li>
                            @php
                            $ondevelery=App\OrderPlace::where('delevary',2)->count();
                            @endphp
                            <li><a href="{{route('admin.ondevelery')}}">On Delevery Orders <span class="badge badge-light">{{$ondevelery}}</span></a></li>
                            <li><a href="{{route('admin.complateorder')}}">Compleate Orders</a></li>
                            <li><a href="{{route('admin.rejecteorder')}}">Reject Orders<span class="badge badge-light"></span></a></li>
                        </ul>
                    </li>

                    <li class="single-nav-wrapper">
                            <a class="has-arrow menu-item" href="#" aria-expanded="false">
                              <span class="left-icon"><i class="fas fa-people-carry"></i></span>
                                <span class="menu-text">Reports</span>
                            </a>
                            <ul class="dashboard-menu">
                                <li><a href="{{ route('admin.product.stock') }}">Product Stock</a></li>
                                <li><a href="{{ route('admin.bestsell')}}">Best Sell Product</a></li>
                                <li><a href="{{route('admin.product.wishlistpro')}}">Product Wish Report</a></li>

                            </ul>
                        </li>


                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-people-carry"></i></span>
                            <span class="menu-text">Messaging</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="{{ route('admin.subscriber.send.section') }}">Newsletter</a></li>
                        </ul>
                    </li>

                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-people-carry"></i></span>
                            <span class="menu-text">Forntend Setup</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="{{route('admin.aboutus')}}">About us</a></li>
                            <li><a href="{{route('admin.termscondition')}}">Terms & Condition</a></li>
                            <li><a href="{{route('admin.faq.all')}}">Faq</a></li>
                            <li><a href="{{route('admin.page.all')}}">Page</a></li>
                            <li><a href="{{route('admin.banner.all')}}">Slider</a></li>
                            <li><a href="{{route('admin.sitebanner.all')}}">Site Banner </a></li>
                            <li><a href="{{route('admin.themecolor.all')}}">Theme Color</a></li>
                            <li><a href="{{route('admin.warranty.all')}}">Warranty Information</a></li>
                            <li><a href="{{route('admin.support.all')}}">Support Information</a></li>

                        </ul>
                    </li>



                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-people-carry"></i></span>
                            <span class="menu-text">Flash Deal</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="{{ route('admin.flash.deal.create') }}">Add Flash Deal</a></li>
                            <li><a href="{{ route('admin.flash.deal.index') }}">All Flash Deal</a></li>
                        </ul>
                    </li>

                    <li class="single-nav-wrapper">
                            <a class="has-arrow menu-item" href="#" aria-expanded="false">
                                <span class="left-icon"><i class="fas fa-people-carry"></i></span>
                                <span class="menu-text">Courier Settings</span>
                            </a>
                            <ul class="dashboard-menu">
                                <li><a href="{{ route('courier.sync.view') }}">Courier sync</a></li>
                            <li><a href="{{ route('courier.index') }}">View Courier Info</a></li>
                            </ul>
                        </li>


                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-trash-alt"></i></span>
                            <span class="menu-text">Trash</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="{{route('admin.trash.product')}}">Product</a></li>
                            <li><a href="{{route('admin.trash.category')}}">Category</a></li>
                            <li><a href="{{route('admin.trash.subcategory')}}">SubCategory</a></li>
                            <li><a href="{{route('admin.trash.resubcategory')}}">ReSubCategory</a></li>
                            <li><a href="{{route('admin.trash.color')}}">Color</a></li>
                            <li><a href="{{route('admin.trash.brand')}}">Brand</a></li>
                            <li><a href="{{route('admin.trash.measurement')}}">Measurement</a></li>
                            <li><a href="{{route('admin.flash.deal.trash.view')}}">Flash Deal</a></li>
                            <li><a href="{{route('admin.trash.cupon')}}">Cupon</a></li>
                            <li><a href="{{route('admin.trash.faq')}}">Faq</a></li>
                            <li><a href="{{route('admin.trash.page')}}">Page</a></li>
                            <li><a href="{{route('admin.trash.banner')}}">Slider</a></li>
                            <li><a href="{{route('admin.trash.sitebanner')}}">SiteBanner</a></li>
                            <li><a href="{{route('admin.trash.allorder')}}">All Deleted Order</a></li>
                            <li><a href="{{route('admin.trash.warrantytrash')}}">All Delete Warranty</a></li>
                            <li><a href="{{route('admin.trash.support')}}">All Delete Support</a></li>
                        </ul>
                    </li>


                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-copy"></i></span>
                            <span class="menu-text">Settings</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="{{ route('admin.seo.setting') }}">SEO Settin</a></li>
                            <li><a href="{{ route('admin.social.setting') }}">Company Information</a></li>
                            <li><a href="#">Database Backup</a></li>
                            <li><a href="{{ route('admin.logo.setting') }}">Logo Setting</a></li>
                            <li><a href="{{ route('admin.mail.setting') }}">Mail Setting</a></li>
                            <li><a href="{{ route('admin.payment.gateway') }}">Payment Gateway</a></li>
                            <li><a href="{{ route('theme.selector.show') }}">Theme Option</a></li>
                            <li><a href="{{ route('admin.footer.option') }}">Footer Option</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </aside><!-- /sidebar Area-->
        @endguest

        @yield('admin_content')

    </div>


    <!-- jquery -->
    <script src="{{ asset('public/adminpanel/assets/js/jquery.min.js') }}"></script>
    <!-- popper Min Js -->
    <script src="{{ asset('public/adminpanel/assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap Min Js -->
    <script src="{{ asset('public/adminpanel/assets/js/bootstrap.min.js') }}"></script>
    <!-- Fontawesome-->
    <script src="{{ asset('public/adminpanel/assets/js/all.min.js') }}"></script>
    <!-- metis menu -->
    <script src="{{ asset('public/adminpanel/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js') }}"></script>
    <script src="{{ asset('public/adminpanel/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js') }}"></script>
    <!-- nice scroll bar -->
    <script src="{{ asset('public/adminpanel/assets/plugins/scrollbar/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('public/adminpanel/assets/plugins/scrollbar/scroll.active.js') }}"></script>
    <!-- counter -->
    <script src="{{ asset('public/adminpanel/assets/plugins/counter/js/counter.js') }}"></script>
    <!-- chart -->
    <!--  <script src="{{ asset('public/adminpanel/assets/plugins/chartjs-bar-chart/Chart.min.js') }}"></script>

        <script src="{{ asset('public/adminpanel/assets/plugins/chartjs-bar-chart/chart.js') }}"></script> -->
    <!-- pie chart -->
    <script src="{{ asset('public/adminpanel/assets/plugins/pie_chart/chart.loader.js') }}"></script>
    <script src="{{ asset('public/adminpanel/assets/plugins/pie_chart/pie.active.js') }}"></script>
    <!-- data table js -->
    <!-- DataTable Js -->
    <script src="{{asset('public/adminpanel')}}/assets/plugins/datatables/dataTables.min.js"></script>
    <script src="{{asset('public/adminpanel')}}/assets/plugins/datatables/dataTables-active.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <script type="text/javascript" src="{{asset('public/adminpanel')}}/assets/plugins/multi_select_Suggestags/js/jquery.amsify.suggestags.js"></script>
    <script src="{{asset('public/adminpanel')}}/assets/plugins/spartan-multi-images/dist/js/spartan-multi-image-picker.js"></script>

    <!-- ckeditor Js -->
    <script src="{{asset('public/adminpanel')}}/assets/plugins/ckeditor/ckeditor.js"></script>
    <script src="{{asset('public/adminpanel')}}/assets/plugins/ckeditor/ckeditor-active.js"></script>
    <script src="{{asset('public/adminpanel')}}/assets/plugins/select2/js/select2.full.min.js"></script>

    {{-- TestJs --}}

    <!-- nice scroll bar -->
    {{-- <script src="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.min.js"></script> --}}
    <!-- Specific Page Scripts Put Here -->
    <!-- <script type="text/javascript" src="assets/plugins/bootstrap-wysiwyg/js/wysihtml5-0.3.0.min.js"></script> -->
    <script src="{{asset('public/adminpanel')}}/assets/plugins/bootstrap-wysiwyg/js/bootstrap-wysihtml5-0.0.2.js"></script>
    <script src="{{asset('public/adminpanel')}}/assets/plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!-- summernote -->
    {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js'></script> --}}
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js'></script>
    {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.10/summernote-bs4.js'></script> --}}
    <script src="{{asset('public/adminpanel')}}/assets/js/main.js"></script>


    {{-- TestJs --}}
    <script>
        CKEDITOR.replace('editor2');
    </script>
    <script>
        CKEDITOR.replace('editor3');
    </script>
    <script>
        CKEDITOR.replace('aboutus');
    </script>
    <!--   <script>
            CKEDITOR.replace('editor3');
        </script>
        <script>
            CKEDITOR.replace('editor4');
        </script> -->
    <!-- tag -->
    <script src="{{asset('public/adminpanel')}}/assets/plugins/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.js"></script>
    <!-- Main js -->
    <script src="{{ asset('public/adminpanel/assets/js/main.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> -->
    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

    <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.js"></script>  -->
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
    <script type="text/javascript">
        $(function() {

            $('.select2').select2()

        });
    </script>

    <script>
        $(document).on("click", "#delete", function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            swal({
                    title: "Are you Want to delete?",
                    text: "Once Delete, This will be Permanently Delete!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = link;
                    } else {
                        swal("Safe Data!");
                    }
                });
        });
    </script>
    <script>
        $('input[name="subcate_tag"]').amsifySuggestags({
            type: 'materialize'
        });

        $('input[name="cate_tag"]').amsifySuggestags({
            type: 'materialize',
            suggestions: ['Category', 'Ecommerce', 'Shirt', 'Pant', 'Product']
        });


        $('input[name="resubcate_tag"]').amsifySuggestags({
            type: 'materialize',
            suggestionsAction: {
                suggestions: ['Category', 'Ecommerce', 'Shirt', 'Pant', 'Product']
            }
        });
        $('input[name="meta_tag"]').amsifySuggestags({
            type: 'materialize',
        });
        $('.choice_tag').amsifySuggestags({
            type: 'materialize',

        });
    </script>



    <script>
        $(function() {

            $("#coba").spartanMultiImagePicker({
                fieldName: 'fileUpload[]',
                directUpload: {
                    status: true,
                    loaderIcon: '<i class="fas fa-sync fa-spin"></i>',
                    url: '../c.php',
                    additionalParam: {
                        name: 'My Name'
                    },
                    success: function(data, textStatus, jqXHR) {},
                    error: function(jqXHR, textStatus, errorThrown) {}
                }
            });
        });

        $('#container').removeClass('mainnav-lg').addClass('mainnav-sm');

        $("#photos").spartanMultiImagePicker({
            fieldName: 'photos[]',
            maxCount: 10,
            rowHeight: '200px',
            groupClassName: 'col-lg-3 col-md-4 col-sm-4 col-xs-6',
            maxFileSize: '',
            dropFileLabel: "Drop Here",
            onExtensionErr: function(index, file) {
                console.log(index, file, 'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr: function(index, file) {
                console.log(index, file, 'file size too big');
                alert('File size too big');
            }
        });


        var i = 0;


        $(document).ready(function() {
            $('#container').removeClass('mainnav-lg').addClass('mainnav-sm');


            $("#thumbnail_img").spartanMultiImagePicker({
                fieldName: 'thumbnail_img',
                maxCount: 1,
                rowHeight: '200px',
                groupClassName: 'col-lg-3 col-md-4 col-sm-4 col-xs-6',
                maxFileSize: '',
                dropFileLabel: "Drop Here",
                onExtensionErr: function(index, file) {
                    console.log(index, file, 'extension err');
                    alert('Please only input png or jpg type file')
                },
                onSizeErr: function(index, file) {
                    console.log(index, file, 'file size too big');
                    alert('File size too big');
                }
            });


            $("#t_img").spartanMultiImagePicker({
                fieldName: 't_img',
                maxCount: 1,
                rowHeight: '200px',
                groupClassName: 'col-xl-2 col-lg-3 col-md-4 col-sm-4 col-xs-6',
                maxFileSize: '',
                dropFileLabel: "Drop Here",
                onExtensionErr: function(index, file) {
                    console.log(index, file, 'extension err');
                    alert('Please only input png or jpg type file')
                },
                onSizeErr: function(index, file) {
                    console.log(index, file, 'file size too big');
                    alert('File size too big');
                }
            });
        });
    </script>


</body>

</html>
