@extends('layouts.adminapp')
@section('admin_content')
		<!-- 	<div class="content_wrapper">
				<div class="middle_content_wrapper">
					<section class="page_content">
					
						
					</section>
				</div>
			</div> -->

  <style>
    body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 6.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
  </style>
      <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    @php
                      $customer_id=$profile->id;
                      $customer=App\CustomarAccount::where('userid',$customer_id)->first();
                    @endphp
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                      @if($customer)
                                       {{$customer->name}}
                                      @else
                                      NULL
                                      @endif
                                    </h5>
                                    <h6>
                                        
                                    </h6>
                                     @if($customer)
                                    <p class="proile-rating">Blance : {{$customer->balance}}Tk<span></span></p>
                                    @else
                                    <p class="proile-rating">Blance : 0Tk<span></span></p>
                                    @endif
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                           <!--      <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <!-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                          @php
                              $allorder=App\OrderPlace::where('user_id',$profile->id)->orderBy('id','DESC')->limit(6)->get();
                          @endphp
                            <p>Order</p>
                            @foreach($allorder as $order)
                            <a href="">#{{$order->order_id}}</a><br/>
                            @endforeach
                   
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            @if($customer)
                                            <div class="col-md-6">
                                                <p>{{$customer->userid}}</p>
                                            </div>
                                            @else
                                             <div class="col-md-6">
                                              <p>NULL</p>
                                             </div>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            @if($customer)
                                            <div class="col-md-6">
                                                <p>{{$customer->name}}</p>
                                            </div>
                                            @else
                                              <div class="col-md-6">
                                                <p>NULL</p>
                                            </div>

                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email/Phone</label>
                                            </div>
                                             @if($profile->email==NULL)
                                            <div class="col-md-6">
                                                <p>{{$profile->phone}}</p>
                                            </div>
                                            @elseif($profile->phone==NULL)
                                            <div class="col-md-6">
                                                <p>{{$profile->email}}</p>
                                            </div>
                                            @endif
                                        </div>
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                             @if($customer)
                                            <div class="col-md-6">
                                                <p>{{$customer->address}}</p>
                                            </div>
                                            @else
                                             <div class="col-md-6">
                                                <p>NULL</p>
                                            </div>
                                            @endif
                                        </div>
                            </div>
                    
                        </div>
                    </div>
                </div>
            </form>           
        </div>
@endsection
