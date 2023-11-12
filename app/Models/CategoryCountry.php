<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryCountry extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = [];

    protected $table = 'categories_countries';


}
