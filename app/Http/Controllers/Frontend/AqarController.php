<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Aqar;
use App\Models\Category;
use App\Models\Country;
use App\Models\HomeServices;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

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
    public function index($id, Request $request)
    {


        if (!empty($request->category_id) && !empty($request->country_id) && !empty($request->individual)) {
            $aqars = Aqar::where('category_id', '=', $request->category_id)->where('country_id', '=', $request->country_id)->where('individual','=',$request->individual)->paginate(2);
            $category = Category::find($request->category_id);
            $minprice = Aqar::where('category_id', '=', $request->category_id)->min('fixed_price');
            $maxprice = Aqar::where('category_id', '=', $request->category_id)->max('fixed_price');

        }  elseif (!empty($request->category_id) && !empty($request->country_id)) {
            $aqars = Aqar::where('category_id', '=', $request->category_id)->where('country_id', '=', $request->country_id)->paginate(2);
            $category = Category::find($request->category_id);
            $minprice = Aqar::where('category_id', '=', $request->category_id)->min('fixed_price');
            $maxprice = Aqar::where('category_id', '=', $request->category_id)->max('fixed_price');

        } elseif (!empty($request->category_id)) {
            $aqars = Aqar::where('category_id', '=', $request->category_id)->paginate(2);
            $category = Category::find($request->category_id);
            $minprice = Aqar::where('category_id', '=', $request->category_id)->min('fixed_price');
            $maxprice = Aqar::where('category_id', '=', $request->category_id)->max('fixed_price');


        } elseif (!empty($request->country_id)) {
            $aqars = Aqar::where('country_id', '=', $request->country_id)->paginate(2);
            $category = Category::find($request->category_id);
            $minprice = Aqar::where('category_id', '=', $request->category_id)->min('fixed_price');
            $maxprice = Aqar::where('category_id', '=', $request->category_id)->max('fixed_price');


        } elseif (!empty($request->individual)) {
            $aqars = Aqar::where('individual', '=', $request->individual)->paginate(2);
            $category = Category::find($request->category_id);
            $minprice = Aqar::where('category_id', '=', $request->category_id)->min('fixed_price');
            $maxprice = Aqar::where('category_id', '=', $request->category_id)->max('fixed_price');


        } else {

            $aqars = Aqar::where('category_id', '=', $id)->paginate(2);
            $category = Category::find($id);
            $minprice = Aqar::where('category_id', '=', $id)->min('fixed_price');
            $maxprice = Aqar::where('category_id', '=', $id)->max('fixed_price');
        }


        $minpriceAqars = Aqar::where('fixed_price', '=', $minprice)->paginate(2);
        $maxpriceAqars = Aqar::where('fixed_price', '=', $maxprice)->paginate(2);


        return view('frontend.aquars', compact('maxpriceAqars', 'minpriceAqars', 'aqars', 'category'));


    }


    public function myfavouriteAll()
    {
        $user = Auth::user();

        $favouriteaqar = $user->setRelation('favourite_aqars', $user->favourite_aqars()->paginate(20));




        return view('frontend.myfavouriteAll', compact('favouriteaqar'));


    }


    public function detailAqar($id)
    {

        $aqar = Aqar::find($id);


        return view('frontend.detailaqar', compact('aqar'));

    }


    public function favouritAqar(Request $request, $id)
    {


        $user_id = Auth::id();

        $users = User::find($user_id);


        $user = $users->favourite_aqars()->toggle($id);

        $status = ($user['attached'] !== []) ? 'added' : 'deleted';

        return response()->json(['status' => $status, 'content' => 'success']);


    }
}
