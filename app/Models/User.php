<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Aqar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;  //add the namespace

use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Ads;    // HasMany
use App\Models\Commission;    // HasMany
use App\Models\AqarComment;    // HasMany
use App\Models\Message;    // HasMany
use App\Models\Notification;    // HasMany
class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'firstname',
        'lastname',
        'code',
        'image',
        'comision',
        'active',
        'latitude',
        'country_id',
        'city_id',
        'address',
        'longitude',
        'account_type',
        'phone',
        'country_code',
        'device_token',
        'token',
        'isguest',
        'category_id',
        'details'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token','account_type','comision','address',
        'email_verified_at','country_id','city_id','deleted_at','created_at','updated_at','isguest','token','active','image'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // relations
    public function ads(){
        return $this->HasMany(Ads::class);
    }

    public function aqars(){
        return $this->HasMany(Aqar::class);
    }


    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
    // relations
    public function commission(){
        return $this->HasMany(Commission::class);
    }
    // relations


    public function message(){
        return $this->HasMany(Message::class);
    }
    // relations
    public function notification(){
        return $this->HasMany(Notification::class);
    }
    public function favourite_aqars(){
        return $this->belongsToMany(Aqar::class,'aqar_user');
    }

}
