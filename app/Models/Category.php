<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Aqar;

//belongsTo
class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name_ar',
        'name_en',
        'active',
        'description_ar', 'description_en',
        'image',
        'icon',
        'parent_id',
        'type',
        'city_id'
    ];

    protected $hidden = ['deleted_at', 'updated_at'];

    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }


    public function getDescriptionAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->description_ar : $this->description_en;
    }

    // relations


    public function countries()
    {
        return $this->belongsToMany(Country::class, 'categories_countries', 'category_id', 'country_id');
    }


}
