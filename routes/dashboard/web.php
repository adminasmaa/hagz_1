<?php


use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\Dashboard\CityController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\QuestionController;
use App\Http\Controllers\Dashboard\ProblemController;
use App\Http\Controllers\Dashboard\MediatorController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\AdvertisingController;
use App\Http\Controllers\Dashboard\SliderController;

use App\Http\Controllers\Dashboard\AreaController;
use App\Http\Controllers\Dashboard\ServiceAqarController;

use App\Http\Controllers\Dashboard\TermController;
use App\Http\Controllers\Dashboard\MessageController;
use App\Http\Controllers\Dashboard\NotificationController;

use App\Http\Controllers\Dashboard\CommissionController;

use App\Http\Controllers\Dashboard\PolicyController;


use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\ContactController;

use App\Http\Controllers\Dashboard\AdsStatusController;

use Illuminate\Support\Facades\Route;

Route::prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {

        Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        //users
        Route::resource('users', UserController::class);


        //terms
        Route::resource('terms', TermController::class);


        //policies
        Route::resource('policies', PolicyController::class);



        //roles
        Route::resource('roles', RoleController::class)->except(['show']);

        //countries
        Route::resource('countries', CountryController::class);
        Route::resource('sliders', SliderController::class);

        //cities
        Route::get('addCity', 'App\Http\Controllers\Dashboard\CountryController@AddCity')->name('addCity');
        Route::resource('cities', CityController::class);
        Route::get('countrycities/{id}', 'App\Http\Controllers\Dashboard\CityController@countrycities')->name('countrycities');
        Route::get('categorycities/{id}', 'App\Http\Controllers\Dashboard\CityController@categorycities')->name('categorycities');
        Route::get('roomnumbers/{id}', 'App\Http\Controllers\Dashboard\AqarController@roomnumbers')->name('roomnumbers');

        //categories
        Route::resource('categories', CategoryController::class);

        //DeleteSubCategories
        Route::get('DeleteSubCategories/{id}', 'App\Http\Controllers\Dashboard\CategoryController@destroy')->name('DeleteSubCategories');
        Route::get('SubCategories/{id}', 'App\Http\Controllers\Dashboard\CategoryController@SubCategories')->name('SubCategories');
        Route::get('DeleteHomeServices/{id}', 'App\Http\Controllers\Dashboard\SettingController@destroy')->name('DeleteHomeServices');
        // Route::get('DeleteSubCarCategories/{id}', 'App\Http\Controllers\Dashboard\CategoryController@destroy2')->name('DeleteSubCarCategories');


        //contacts
        Route::resource('contacts', ContactController::class);







        //services
//        Route::resource('services', ServiceController::class);


        //areas
        Route::resource('areas', AreaController::class);
        Route::get('cityareas/{id}', 'App\Http\Controllers\Dashboard\AreaController@cityareas')->name('cityareas');


        //messages
        Route::resource('message', MessageController::class);

        //notifications
        Route::resource('notifications', NotificationController::class);

        //commissions
        Route::resource('commissions', CommissionController::class);

        //questions
        Route::resource('questions', QuestionController::class);

        //problems
        Route::resource('problems', ProblemController::class);

        //Mediators
        Route::resource('mediators', MediatorController::class);

        //Setting
        Route::resource('settings', SettingController::class);

        //advertising
        Route::resource('advertisings', AdvertisingController::class);

        //balances
//        Route::resource('balances', BalanceController::class);



        //deposits
        Route::resource('deposits', SliderController::class);



        Route::resource('aqars', \App\Http\Controllers\Dashboard\AqarController::class);
        Route::resource('services_aqars', ServiceAqarController::class);
        Route::get('DeleteServiceAqar/{id}', 'App\Http\Controllers\Dashboard\ServiceAqarController@destroy2')->name('DeleteServiceAqar');


        Route::get('/aqars/getsetting/{id}', 'App\Http\Controllers\Dashboard\AqarController@getsetting');

        Route::get('/aqars/getsetting1/{id}/{id2}', 'App\Http\Controllers\Dashboard\AqarController@getsetting1');

        Route::get('aqar_setting/editsetting', 'App\Http\Controllers\Dashboard\AqarSettingController@editsetting')->name('aqar_setting.edit');

        Route::get('/aqarsetting/getsetting/{id}', 'App\Http\Controllers\Dashboard\AqarSettingController@getsetting');

        Route::get('/aqarsetting/active_input_display/{id}/{id2}', 'App\Http\Controllers\Dashboard\AqarSettingController@active_input_display');

        Route::get('/aqarsetting/active_input_required/{id}/{id2}', 'App\Http\Controllers\Dashboard\AqarSettingController@active_input_required');

//        Route::resource('aqar_reviews', AqarReviewController::class);


    }); //end of dashboard routes
});
