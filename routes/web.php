<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes ares loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath')->group(function () {
    Auth::routes();

    Route::get('/', 'App\Http\Controllers\Frontend\HomeController@index')->name('Home');
    Route::get('/faqs', 'App\Http\Controllers\Frontend\HomeController@faq')->name('faqs');
    Route::get('/terms', 'App\Http\Controllers\Frontend\HomeController@terms')->name('terms');
    Route::get('/logout', 'App\Http\Controllers\Frontend\HomeController@logout')->name('logout')->middleware([User::class]);
    Route::get('/contact', 'App\Http\Controllers\Frontend\HomeController@contact')->name('contact');
    Route::post('/addContacts', 'App\Http\Controllers\Frontend\HomeController@addContacts')->name('addContacts');
    Route::post('/createaccount', 'App\Http\Controllers\Frontend\HomeController@createaccount')->name('createaccount');
    Route::post('/createaccountinvest', 'App\Http\Controllers\Frontend\HomeController@createaccountinvest')->name('createaccountinvest');
    Route::get('/registers', 'App\Http\Controllers\Frontend\HomeController@registers')->name('registers');
    Route::get('/sitelogin', 'App\Http\Controllers\Frontend\HomeController@sitelogin')->name('sitelogin');
    Route::get('/updateprofile/{id}', 'App\Http\Controllers\Frontend\HomeController@updateprofile')->name('updateprofile')->middleware([User::class]);
    Route::post('/updateprofile/{id}', 'App\Http\Controllers\Frontend\HomeController@updateprofileuser')->name('updateprofile')->middleware([User::class]);
    Route::post('/checklogin', 'App\Http\Controllers\Frontend\HomeController@checklogin')->name('checklogin');
    Route::post('/addContacts', 'App\Http\Controllers\Frontend\HomeController@addContacts')->name('addContacts');




    Route::get('/aquars/{id}', 'App\Http\Controllers\Frontend\AqarController@index')->name('aquars');
    Route::get('/aquars/favouritAqar/{id}', 'App\Http\Controllers\Frontend\AqarController@favouritAqar')->name('aquars.favouritAqar')->middleware([User::class]);
    Route::get('/favouritAqar/{id}', 'App\Http\Controllers\Frontend\AqarController@favouritAqar')->name('favouritAqar')->middleware([User::class]);
    Route::get('/detailAqar/{id}', 'App\Http\Controllers\Frontend\AqarController@detailAqar')->name('detailAqar');
    Route::get('/myfavouriteAll', 'App\Http\Controllers\Frontend\AqarController@myfavouriteAll')->name('myfavouriteAll')->middleware([User::class]);


});

//Route::get('/', function () {
//    return view('welcome');
//});

define('MAINASSETS', URL::asset('assets'));
define('FRONTASSETS', URL::asset('stylefrontend/'));
define('MAINUPLOADS', URL::asset('uploads'));
define('MAINDIST', URL::asset('dist/frontend/img'));
define('MAINDASHBOARD', URL::asset('dashboard_files'));

if (!defined('constant')) define('constant', 'value');



