<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ThemeSelector;

class ThemeOptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    // ThemeSelector page show

    public function themeSelectorPageShow()
    {
        $themselect = ThemeSelector::get();
        return view('admin.setting.themeselctor', compact('themselect'));
    }

    public function themeSelectorPageChange(Request $request)
    {
        $statusid = ThemeSelector::where('status', 1)->first();
        if ($statusid) {
            $statusid->status = 0;
            $statusid->save();
        }

        $product = ThemeSelector::findOrFail($request->id);
        $product->status = $request->status;
        $product->save();

        return 1;
    }


    public function productModal()
    {
        return view('frontend.product_modal.home1');
    }
}
