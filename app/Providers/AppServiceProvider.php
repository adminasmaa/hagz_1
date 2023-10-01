<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($settings) {
            $settings->with('setting', Setting::first());
            $settings->with('categories', Category::get());
            $settings->with('countries', Country::get());


        });
    }
}
