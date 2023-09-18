<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\City;   //belongsTo

class Area extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'areas';

    protected $fillable = [
        'name_en', // nullable
        'name_ar', // required
        'latitude', // nullable
        'longitude', // nullable
        'active', // required,default (0)
        'city_id', //unsigned
    ];
    // relations
    public function city(){
        return $this->belongsTo(City::class,'city_id');
    }


    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }
}
