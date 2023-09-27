<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Country;
use App\Models\HomeServices;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $categories = Category::get();
        $countries = Country::get();
        $setting = Setting::first();
        $HomeServices = HomeServices::all();
        $sliders = Slider::get();
        return view('frontend.index', compact('categories', 'countries', 'setting', 'HomeServices','sliders'));


    }
}
