<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

Route::prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath')->group(function () {
    Route::prefix('invest')->name('invest.')->group(function () {

        Route::get('/booking', 'App\Http\Controllers\Frontend\invest\BookingController@index')->name('booking')->middleware([invest::class]);
        Route::get('/addAds', 'App\Http\Controllers\Frontend\invest\AdController@index')->name('addAds')->middleware([invest::class]);




    }); //end of dashboard routes
});
