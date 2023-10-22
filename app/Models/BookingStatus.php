<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CarBooking;   //HasMany
use App\Models\AqarBooking;   //HasMany

class BookingStatus extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'booking_status';

    protected $fillable = [
        'status_ar', // required
        'status_en', // nullable
        'admin_message', // nullable
        'investor_message', // nullable

    ];
protected $appends=['status'];

    public function getStatusAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->status_ar : $this->status_en;
    }

    // relations

}
