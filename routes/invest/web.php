<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

Route::prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath')->group(function () {
    Route::prefix('invest')->middleware([invest::class])->name('invest.')->group(function () {
       //start booking
        Route::get('/booking', 'App\Http\Controllers\Frontend\invest\BookingController@index')->name('booking');
        Route::get('/mybooking', 'App\Http\Controllers\Frontend\invest\BookingController@mybooking')->name('mybooking');
        Route::get('/commissions', 'App\Http\Controllers\Frontend\invest\BookingController@commissions')->name('commissions');
        Route::post('/confirmpayment', 'App\Http\Controllers\Frontend\invest\BookingController@confirmpayment')->name('confirmpayment');

        Route::get('/addbooking/{id}', 'App\Http\Controllers\Frontend\invest\BookingController@addbooking')->name('addbooking');
        Route::post('/addbookingAd', 'App\Http\Controllers\Frontend\invest\BookingController@addbookingAd')->name('addbookingAd');


        //end booking

        // start adverse (ads)
        Route::get('/addAds', 'App\Http\Controllers\Frontend\invest\AdController@index')->name('addAds');
        Route::get('/showAds', 'App\Http\Controllers\Frontend\invest\AdController@show')->name('showAds');
        Route::post('/AjaxAddAds', 'App\Http\Controllers\Frontend\invest\AdController@store')->name('AjaxAddAds');
        Route::get('/editads/{id}', 'App\Http\Controllers\Frontend\invest\AdController@edit')->name('editads');
        Route::get('/detailsads/{id}', 'App\Http\Controllers\Frontend\invest\AdController@detailsads')->name('detailsads');
        Route::get('/updatestatus/{id}', 'App\Http\Controllers\Frontend\invest\AdController@updatestatus')->name('updatestatus');
        Route::put('/updateads/{id}', 'App\Http\Controllers\Frontend\invest\AdController@update')->name('updateads');

        //end adverse (ads)

        Route::get('/term', 'App\Http\Controllers\Frontend\invest\TermController@index')->name('term');
        Route::post('/addterm', 'App\Http\Controllers\Frontend\invest\TermController@addterm')->name('addterm');


    }); //end of dashboard routes
});
