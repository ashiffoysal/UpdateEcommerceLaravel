<!-- Main Container  -->
<style>
.custom-scoll .scoll-cate li {
    width: 40px;
    height: 40px;
    display: block;
    font-size: 0;

    cursor: pointer;
    transition: 0.3s all ease 0s;
    -webkit-transition: 0.3s all ease 0s;
    position: relative;
},

</style>
<div id="content">

    <!-- <div class="custom-scoll hidden-sm hidden-md hidden-xs">
        <div class="custom-html">
            <div class="scoll-cate list_diemneo">
                <ul id="nav-scroll">
                    <li class="neo1"><a href="#box-link1"><span>Hot deal</span></a></li>
                    @php
                    $cate=App\Category::where('section_id',1)->where('is_deleted',0)->orderBy('id','DESC')->get();
                    @endphp
                    @foreach($cate as $mcate)
                    <li class="neo2" style="background:url({{asset('public/uploads/category/'.$mcate->cate_icon)}}) no-repeat center center; transition: 0.3s all ease 0s;"><a href="#box-link2"><span>{{$mcate->cate_name}}</span></a></li>
                    @endforeach
                    @php
                    $catesecond=App\Category::where('section_id',2)->where('is_deleted',0)->orderBy('id','DESC')->get();
                    @endphp
                    @foreach($catesecond as $secondcat)
                    <li class="neo3"><a href="#box-link3"><span>{{$secondcat->cate_name}}</span></a></li>
                    @endforeach

                    @php
                    $newcate=App\Category::where('is_deleted',0)->where('section_id',3)->orderBy('id','DESC')->get();
                    @endphp
                    @foreach($newcate as $catenew)
                    <li class="neo4"><a href="#box-link4"><span>{{$catenew->cate_name}}</span></a></li>
                    @endforeach

                    @php
                    $sectionfour=App\Category::where('is_deleted',0)->where('section_id',4)->orderBy('id','DESC')->get();
                    @endphp
                    @foreach($sectionfour as $four)
                    <li class="neo5"><a href="#box-link5"><span>{{$four->cate_name}}</span></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div> -->
