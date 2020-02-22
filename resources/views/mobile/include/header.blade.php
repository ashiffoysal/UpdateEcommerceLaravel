@include('mobile.include.footermenu')

<!-- Begin Bar Nav -->
<header class="bar bar-nav bar-navhome typeheader-1">
    <div class="row navbar-bar ">
        <!-- LOGO -->
        <div class="navbar-menu col-xs-2" style="padding-left: 15px">
            <a class="toggle-panel" href="#panel-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar"></span>
            </a>
        </div>
        <div class="navbar-logo col-xs-3">
          @php
            $logo=App\Logo::where('id',1)->first();
          @endphp
            <a href="{{url('/')}}">
                <img src="{{asset('/'.$logo->front_logo)}}" title="Your Store" alt="Your Store">
            </a>
        </div>
        <div class="navbar-search col-xs-7" style="padding-right:15px">
            <!-- BOX CONTENT SEARCH -->
            <div id="search-bar" class="input-group">
                <input type="text" name="search" value="" placeholder="Search" class="form-control input-lg">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-link">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </div>
    </div>
</header>
<!-- //End Bar Nav -->
