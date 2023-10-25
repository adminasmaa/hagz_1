<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

//belongsTo

class Commission extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = 'commissions';
    protected $guarded = [];

    // relations
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function aqar()
    {
        return $this->belongsTo(Aqar::class, 'aqar_id');
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
    // relations

}
