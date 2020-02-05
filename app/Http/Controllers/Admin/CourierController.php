<?php

namespace App\Http\Controllers\Admin;

use App\UpozilaCouriers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CourierController extends Controller
{

    public function index()
    {
        $up_couriers = DB::table('upazila_couriers')->select('upazila_id')->distinct()->get();
        return view('admin.ecommerce.courier.index', compact('up_couriers'));
    }
    public function courierSyncView()
    {
        $couriers = DB::table('couriers')->select('courier_name', 'id')->get();
        $divisions = DB::table('divisions')->select('name', 'id')->get();
        return view('admin.ecommerce.courier.courier_sync', compact('divisions', 'couriers'));
    }

    public function courierSyncInsert(Request $request)
    {

        $cashOnDelivery = $request->is_cash_on_delivery;

        foreach ($request->fee as $id => $value) {
            DB::table('upazila_couriers')->insert([
                'upazila_id' => $request->sub_district_id,
                'courier_id' => $id,
                'fee' => $value,
                'is_cash_on_delivery' => $cashOnDelivery[$id],
            ]);
        }

        DB::table('upazilas')
            ->where('id', $request->sub_district_id)
            ->update(
                [
                    'is_courier_added' => 1
                ]
            );

        $notification = array(
            'messege' => 'Successfully Courier Synced.:)',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function courierSyncEdit($subDistrictId)
    {
        $sub_district =  DB::table('upazilas')->where('id', $subDistrictId)->first();
        $district = DB::table('districts')->where('id', $sub_district->district_id)->first();
        $division = DB::table('divisions')->where('id', $district->division_id)->first();
        $couriers = DB::table('couriers')->select('courier_name', 'id')->get();
        $up_couriers = DB::table('upazila_couriers')->where('upazila_id', $subDistrictId)->get();
        return view('admin.ecommerce.courier.edit', compact('sub_district', 'district', 'division', 'couriers', 'up_couriers'));
    }

    public function courierSyncUpdate(Request $request, $subDistrictId)
    {
        if ($request->courier_id == null) {
            $notification = array(
                'messege' => 'Courier Field Must Not Be Empty!',
                'alert-type' => 'error'
            );
        }
        $updateColumns = UpozilaCouriers::where('upazila_id', $subDistrictId)->get();
        foreach ($updateColumns as $column) {
            $column->prepare_to_delete = 1;
            $column->save();
        }

        $cashOnDelivery = $request->is_cash_on_delivery;
        foreach ($request->fee as $id => $value) {
            DB::table('upazila_couriers')->insert([
                'upazila_id' => $subDistrictId,
                'courier_id' => $id,
                'fee' => $value,
                'is_cash_on_delivery' => $cashOnDelivery[$id],
            ]);
        }
        $deleteRows = UpozilaCouriers::where('upazila_id', $subDistrictId)->where('prepare_to_delete', 1)->get();
        foreach ($deleteRows as $row) {
            $row->delete();
        }
        $notification = array(
            'messege' => 'Successfully Courier Sync updated.:)',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function courierSyncDelete($subDistrictId)
    {
        DB::table('upazilas')
            ->where('id', $subDistrictId)
            ->update(
                [
                    'is_courier_added' => 0
                ]
            );
        $deleteRows = UpozilaCouriers::where('upazila_id', $subDistrictId)->get();
        foreach ($deleteRows as $row) {
            $row->delete();
        }

        $notification = array(
            'messege' => 'Successfully data deleted.:)',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function courierStore(Request $request)
    {
        $this->validate($request,[
            'courier_name' => 'required'
        ]);

        DB::table('couriers')->insert([
            'courier_name' => $request->courier_name
        ]);
        $notification = array(
            'messege' => 'Successfully Courier Added.:)',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function getDistrictByAjax($divisionId)
    {
        $districts = DB::table('districts')->where('division_id', $divisionId)->select('name', 'id')->get();
        return response()->json($districts);
    }

    public function getSubDistrictByAjax($districtId)
    {
        $subDistricts = DB::table('upazilas')->where('district_id', $districtId)->where('is_courier_added', 0)->select('name', 'id')->get();
        return response()->json($subDistricts);
    }

    public function getCouriersByAjax(Request $request)
    {
        $courier_ids = $request->courier_id;
        return view('admin.ecommerce.courier.partials.get_couriers_ajax_view', compact('courier_ids'));
    }

    public function getCouriersForUpdateByAjax(Request $request)
    {
        $upazila_courier_id = $request->upazila_courier_id;
        $courier_ids = $request->courierId;
        return view('admin.ecommerce.courier.partials.get_courier_for_update_ajax_view', compact('upazila_courier_id', 'courier_ids'));
    }
}
