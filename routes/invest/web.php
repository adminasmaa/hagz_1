<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

Route::prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath')->group(function () {
    Route::prefix('invest')->name('invest.')->group(function () {

        Route::get('/booking', 'App\Http\Controllers\Frontend\invest\BookingController@index')->name('booking')->middleware([invest::class]);
        Route::get('/addAds', 'App\Http\Controllers\Frontend\invest\AdController@index')->name('addAds')->middleware([invest::class]);
        Route::get('/showAds', 'App\Http\Controllers\Frontend\invest\AdController@show')->name('showAds')->middleware([invest::class]);
        Route::post('/AjaxAddAds', 'App\Http\Controllers\Frontend\invest\AdController@store')->name('AjaxAddAds')->middleware([invest::class]);

        Route::get('/term', 'App\Http\Controllers\Frontend\invest\TermController@index')->name('term')->middleware([invest::class]);
        Route::post('/addterm', 'App\Http\Controllers\Frontend\invest\TermController@addterm')->name('addterm')->middleware([invest::class]);



    }); //end of dashboard routes
});
