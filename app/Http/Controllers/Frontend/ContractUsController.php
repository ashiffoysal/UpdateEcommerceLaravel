<?php

namespace App\Http\Controllers\Frontend;


use App\Contract;
use Carbon\Carbon;
use App\ContractImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ContractUsController extends Controller
{
    public function index()
    {
        return view('frontend.contract_us.contract_us');
    }

    public function sendMessage(Request $request)
    {

        $this->validate($request,[
            'visitor_name' => 'required',
            'visitor_email' => 'required|email',
            'visitor_message' => 'required',
            'phone' => 'required|numeric',
            'image' => 'nullable|mimes:jpg,jpeg,png',
        ]);

        $images = $request->file('visitor_image');
        if ($images > 0) {
            foreach ($images as  $image) {

                $imageName = uniqid().'.'.$image->getClientOriginalExtension();
                $resizeImage = Image::make($image)->resize(250, 200)->save($imageName);
                Image::make($image)->resize(200, 200)->save('public/uploads/visitor_attach_files/'.$imageName);
                unlink($imageName);
                $instantIdNo = Contract::insertGetId([
                    'visitor_name' => $request->visitor_name,
                    'visitor_email' => $request->visitor_email,
                    'visitor_message' => $request->visitor_message,
                    'subject' => $request->visitor_subject,
                    'phone' => $request->phone,
                    'created_at' => Carbon::now()->toDateTimeString(),
                ]);
                ContractImage::insert([
                    'image' => $imageName,
                    'contract_id' => $instantIdNo,
                ]);
            }
        }else {
            Contract::insertGetId([
                'visitor_name' => $request->visitor_name,
                'visitor_email' => $request->visitor_email,
                'visitor_message' => $request->visitor_message,
                'subject' => $request->visitor_subject,
                'phone' => $request->phone,
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
        }

        return response()->json(['success' => 'Message has been Send Successfully, Shortly we will give you the reply in your mail address']);

        //return response()->json($request->all());

    }
}
