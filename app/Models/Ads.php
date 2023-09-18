<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\Car;    // HasMany
use App\Models\CarBooking;    // HasMany
use App\Models\Aqar;    // HasMany
use App\Models\AqarBooking;    // HasMany
class Ads extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'ads';

    protected $fillable = [
        'title', // nullable
        'start_date', // nullable
        'end_date', // nullable
        'value', // nullable
        'notes', // nullable
        'ads_link', // nullable
        'ads_image', // nullable
        'arranging_id', // default (0)
        'position',// enum ,['upper_middle','lower_middle','banner','slider']
        'user_id', //unsigned
    ];
    // scope
//    public function scopePosition($query,$position){
//        if($position){
//            return $query->where('position', $position);
//        }
//    }
    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    // relations

}
