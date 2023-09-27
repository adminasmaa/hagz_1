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
    Route::get('/aquars/{id}', 'App\Http\Controllers\Frontend\AqarController@index')->name('aquars');



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



