<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;
use Carbon\Carbon;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    // page index
    public function index(){
    	$page=Page::where('is_deleted',0)->get();
    	return view('admin.forntendsetup.page.all',compact('page'));
    }
    // insert
    public function insert(Request $request){
    	$insert=Page::insertGetId([
    		'page_name'=>$request['page_name'],
    		'page_details'=>$request['page_details'],
    		'created_at'=>Carbon::now()->toDateTimeString(),
    	]);
    	if($insert){
    		 $notification=array(
                    'messege'=>'Insert Success',
                    'alert-type'=>'success'
                     );
                    return Redirect()->back()->with($notification);
    	}else{
    		 $notification=array(
                    'messege'=>'Insert Faild',
                    'alert-type'=>'error'
                     );
                    return Redirect()->back()->with($notification);
    	}
    }
    // deactive
    public function deactive($id){
    	$deactive=Page::where('id',$id)->update([
    		'page_status'=>'0',
    		'updated_at'=>Carbon::now()->toDateTimeString(),

    	]);
    	if($deactive){
    		$notification=array(
                'messege'=>'Data Deactive Success',
                'alert-type'=>'success'
                 );
                return Redirect()->back()->with($notification);
    	}else{
    		$notification=array(
                'messege'=>'Data Deactive Faild',
                'alert-type'=>'error'
                 );
                return Redirect()->back()->with($notification);
    	}
    }
    // active
    public function active($id){
    	$active=Page::where('id',$id)->update([
    		'page_status'=>'1',
    		'updated_at'=>Carbon::now()->toDateTimeString(),

    	]);
    	if($active){
    		$notification=array(
                'messege'=>'Data Deactive Success',
                'alert-type'=>'success'
                 );
                return Redirect()->back()->with($notification);
    	}else{
    		$notification=array(
                'messege'=>'Data Deactive Faild',
                'alert-type'=>'error'
                 );
                return Redirect()->back()->with($notification);
    	}
    }
    // softdelete
    public function pagesoftdel($id){
    	$del=Page::where('id',$id)->update([
    		'is_deleted'=>'1',
    		'updated_at'=>Carbon::now()->toDateTimeString(),

    	]);
    	if($del){
    		$notification=array(
                'messege'=>'Data Delete Success',
                'alert-type'=>'success'
                 );
                return Redirect()->back()->with($notification);
    	}else{
    		$notification=array(
                'messege'=>'Data Delete Faild',
                'alert-type'=>'error'
                 );
                return Redirect()->back()->with($notification);
    	}
    }
    // edit
    public function edit($page_id){
    	$data=Page::where('id',$page_id)->first();
    	return json_encode($data);
    }
    // update
    public function update(Request $request){
    	$id=$request->id;
    	$update=Page::where('id',$id)->update([
    		'page_name'=>$request['page_name'],
    		'page_details'=>$request['page_details'],
    		'updated_at'=>Carbon::now()->toDateTimeString(),
    	]);
    	if($update){
    		$notification=array(
                'messege'=>'Data update Success',
                'alert-type'=>'success'
                 );
                return Redirect()->back()->with($notification);
    	}else{
    		$notification=array(
                'messege'=>'Data update Faild',
                'alert-type'=>'error'
                 );
                return Redirect()->back()->with($notification);
    	}
    }
    // multisoft delete
    public function pagemultidel(Request $request){
    	$deleteid=$request['delid'];

                 if($deleteid){
                    $delet=Page::whereIn('id',$deleteid)->update([
                        'is_deleted'=>'1',
                        'updated_at'=>Carbon::now()->toDateTimeString(),
                    ]);
                      if($delet){
                            $notification=array(
                            'messege'=>'Multiple Delete Success',
                            'alert-type'=>'success'
                             );
                            return Redirect()->back()->with($notification);
                        }
                        else{
                            $notification=array(
                                'messege'=>'Multiple Delete Faild',
                                'alert-type'=>'errors'
                                 );
                               return Redirect()->back()->with($notification);
                        }
                    }else{
                        $notification=array(
                                'messege'=>'Nothing To Delete',
                                'alert-type'=>'info'
                                 );
                               return Redirect()->back()->with($notification);
                    }
    }
    // restore
    public function recover($id){
    	$del=Page::where('id',$id)->update([
    		'is_deleted'=>'0',
    		'updated_at'=>Carbon::now()->toDateTimeString(),

    	]);
    	if($del){
    		$notification=array(
                'messege'=>'Data Recover Success',
                'alert-type'=>'success'
                 );
                return Redirect()->back()->with($notification);
    	}else{
    		$notification=array(
                'messege'=>'Data recover Faild',
                'alert-type'=>'error'
                 );
                return Redirect()->back()->with($notification);
    	}
    }
    // heard delete
    public function hearddelete($id){
    	$delete=Page::where('id',$id)->delete();
    	if($delete){
    		$notification=array(
                'messege'=>'Data Delete Success',
                'alert-type'=>'success'
                 );
                return Redirect()->back()->with($notification);
            }else{
            	$notification=array(
                'messege'=>'Data Delete Success',
                'alert-type'=>'error'
                 );
                return Redirect()->back()->with($notification);
            }
    }

}
