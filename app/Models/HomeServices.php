<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeServices extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'home_services';
    public $guarded = ['id'];

    protected $fillable = [

        'title_en',
        'title_ar',
        'description_ar',
        'description_en',
        'image'

    ];
}
