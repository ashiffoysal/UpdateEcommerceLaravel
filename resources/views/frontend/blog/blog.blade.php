@extends('layouts.websiteapp')
@section('content')
    <div class="ps-page--blog">
        <div class="container">
            <div class="ps-page__header">
                <h1>Our Blog</h1>
                <div class="ps-breadcrumb--2">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
            <div class="ps-blog--sidebar">
                <div class="ps-blog__left">
                    @foreach($blogs as $allblogs)
                    <div class="ps-post ps-post--small-thumbnail">
                        <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="{{url('/product/blog/details/'.$allblogs->id)}}"></a><img src="{{asset('public/uploads/blog/'.$allblogs->image)}}" alt="">
                            <div class="ps-post__badge"><i class="icon-volume-high"></i></div>
                        </div>
                        <div class="ps-post__content">
                            <div class="ps-post__top">
                                <div class="ps-post__meta">

                                </div><a class="ps-post__title" href="{{url('/product/blog/details/'.$allblogs->id)}}">{{$allblogs->blog_title}}</a>
                                <p>{!! Str::limit($allblogs->description,150) !!}</p>
                            </div>
                            <div class="ps-post__bottom">
                                <p>{{$allblogs->month}} {{$allblogs->date}}<a href="{{url('/product/blog/details/'.$allblogs->id)}}"> {{$allblogs->creator_name}}</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                 
                    <div class="ps-pagination">
                        <ul class="pagination">
                            {{$blogs->links()}}
                        </ul>
                    </div>
                </div>
                <div class="ps-blog__right">
                  
               
                    <aside class="widget widget--blog widget--recent-post">
                        <h3 class="widget__title">Recent Posts</h3>
                        <div class="widget__content">
                            @foreach($recentblog as $blog)
                            <a href="{{url('/product/blog/details/'.$blog->id)}}">{{$blog->blog_title}}</a>
                            @endforeach
                        </div>
                    </aside>
            
                  
                </div>
            </div>
        </div>
    </div>


    <script>
    $(document).ready(function(){
      
        $('#input-search').on('keyup', function(){
            var product_name = $(this).val();
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
   @endsection