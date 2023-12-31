<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Policy extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'policies';

    protected $guarded = [];

    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }


    public function getDescriptionAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->description_ar : $this->description_en;
    }

}
