<?php

use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\City;
use App\Models\Aqar;
use App\Models\Country;
use App\Models\Place;
use App\Models\PlaceComment;
use App\Models\category_city;
use App\Models\Setting;
use App\Models\HomeServices;


if(!function_exists('headerweb')){
    function headerweb()
    {
        $CategoriesAquar=Category::where('parent_id', '=', 1)->where('type', '=', 1)->get();
        $CategoriesCar=Category::where('parent_id', '=', 2)->where('type', '=', 2)->get();
        $CategoriesPlaces=Category::where('parent_id', '=', null)->where('type', '=', 0)->get();
        $settings=Setting::first();
        $view = (string) View::make('frontend.layout.header', compact('CategoriesAquar','CategoriesCar','CategoriesPlaces','settings'));
        return $view;
    }
}

if(!function_exists('footerweb')){
    function footerweb()
    {
        $settings=Setting::first();
        $HomeServices=HomeServices::all();
        $view = (string) View::make('frontend.layout.footer', compact('settings','HomeServices'));
        return $view;
    }
}