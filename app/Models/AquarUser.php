<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AquarUser extends Model
{
    use HasFactory;

    protected $table = 'aqar_user';
    protected $guarded = [];
}
