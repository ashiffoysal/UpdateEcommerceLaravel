<?php

namespace App\Http\Controllers\Mobile;

use App\AboutUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::where('about_status', 1)->first();
        return view('mobile.about_us.about_us', compact('aboutUs'));
    }

}
