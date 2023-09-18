<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Freq_question extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'question',
        'answer',


    ];

    protected $hidden=['updated_at','deleted_at'];
}
