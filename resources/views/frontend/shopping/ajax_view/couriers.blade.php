@foreach ($getCourierIdByUpId as $upazilaCourier)
@php
  $courier = DB::table('couriers')->where('id', $upazilaCourier->courier_id)->first();
@endphp
<option value="{{ $courier->id }}">{{ $courier->courier_name }}</option>
@endforeach
