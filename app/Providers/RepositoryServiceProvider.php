<?php

namespace App\Providers;

use App\Repositories\Eloquent\AdvertisingRepository;

use App\Repositories\Eloquent\BookingRepository;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\CityRepository;
use App\Repositories\Eloquent\ContactRepository;
use App\Repositories\Eloquent\CountryRepository;

use App\Repositories\Eloquent\MediatorRepository;
use App\Repositories\Eloquent\PolicyRepository;
use App\Repositories\Eloquent\ProblemRepository;
use App\Repositories\Eloquent\QuestionRepository;
use App\Repositories\Eloquent\RoleRepository;

use App\Repositories\Eloquent\ServiceAqarRepository;
use App\Repositories\Eloquent\ServiceRepository;
use App\Repositories\Eloquent\SettingRepository;
use App\Repositories\Eloquent\TermRepository;
use App\Repositories\Eloquent\UserRepository;

use App\Repositories\Eloquent\AreaRepository;
use App\Repositories\Eloquent\MessageRepository;
use App\Repositories\Eloquent\NotificationRepository;
use App\Repositories\Eloquent\CommissionRepository;


use App\Repositories\Eloquent\SectionRepository;
use App\Repositories\Eloquent\SliderRepository;

use App\Repositories\Eloquent\AdsStatusRepository;


use App\Repositories\Interfaces\AdsStatusRepositoryInterface;
use App\Repositories\Interfaces\AdvertisingRepositoryInterface;
use App\Repositories\Interfaces\BookingRepositoryInterface;
use App\Repositories\Interfaces\ContactRepositoryInterface;


use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\CityRepositoryInterface;
use App\Repositories\Interfaces\CountryRepositoryInterface;

use App\Repositories\Interfaces\MediatorRepositoryInterface;
use App\Repositories\Interfaces\AreaRepositoryInterface;
use App\Repositories\Interfaces\MessageRepositoryInterface;
use App\Repositories\Interfaces\NotificationRepositoryInterface;


use App\Repositories\Interfaces\PolicyRepositoryInterface;
use App\Repositories\Interfaces\SectionRepositoryInterface;
use App\Repositories\Interfaces\SliderRepositoryInterface;


use App\Repositories\Interfaces\CommissionRepositoryInterface;

use App\Repositories\Interfaces\ProblemRepositoryInterface;
use App\Repositories\Interfaces\QuestionRepositoryInterface;
use App\Repositories\Interfaces\RoleRepositoryInterface;

use App\Repositories\Interfaces\ServiceAqarRepositoryInterface;
use App\Repositories\Interfaces\ServiceRepositoryInterface;
use App\Repositories\Interfaces\SettingRepositoryInterface;


use App\Repositories\Interfaces\TermRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(CountryRepositoryInterface::class, CountryRepository::class);
        $this->app->bind(CityRepositoryInterface::class, CityRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(QuestionRepositoryInterface::class, QuestionRepository::class);
        $this->app->bind(ProblemRepositoryInterface::class, ProblemRepository::class);
        $this->app->bind(MediatorRepositoryInterface::class, MediatorRepository::class);
        $this->app->bind(SettingRepositoryInterface::class, SettingRepository::class);
        $this->app->bind(AdvertisingRepositoryInterface::class, AdvertisingRepository::class);
        $this->app->bind(ServiceAqarRepositoryInterface::class, ServiceAqarRepository::class);

        $this->app->bind(AreaRepositoryInterface::class, AreaRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);


        $this->app->bind(SectionRepositoryInterface::class, SectionRepository::class);

        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);

        $this->app->bind(MessageRepositoryInterface::class, MessageRepository::class);
        $this->app->bind(NotificationRepositoryInterface::class, NotificationRepository::class);
        $this->app->bind(CommissionRepositoryInterface::class, CommissionRepository::class);


        $this->app->bind(AdsStatusRepositoryInterface::class, AdsStatusRepository::class);
        $this->app->bind(SliderRepositoryInterface::class, SliderRepository::class);
        $this->app->bind(TermRepositoryInterface::class, TermRepository::class);
        $this->app->bind(PolicyRepositoryInterface::class, PolicyRepository::class);
        $this->app->bind(BookingRepositoryInterface::class, BookingRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
