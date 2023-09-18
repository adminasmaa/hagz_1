<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
class Notification extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'notifications';

    protected $fillable = [
        'title', // required
        'booking_id', // required 
        'description', // required
        'status', // required ,default (0)
        'type', // required ,enum['car','aqar','place']
        'user_id', //unsigned 
    ];
    // relations
    public function user(){
    return $this->belongsTo(User::class,'user_id');
    }
}