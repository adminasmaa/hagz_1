<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Aqar;
use App\Models\Category;
use App\Models\Country;
use App\Models\HomeServices;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AqarController extends Controller
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
    public function index($id)
    {

        $aqar = Aqar::where('category_id','=',$id)->get();
//        return $aqar;
        $categories = Category::get();
        $category = Category::find($id);
        $countries = Country::get();

        return view('frontend.aquars', compact('categories', 'countries','aqar','category'));


    }
}
