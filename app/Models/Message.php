<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo

class Message extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'messages';

    protected $fillable = [
        'messages', // required
        'to', // required
        'user_id', //unsigned 
    ];
    // relations
    public function user(){
    return $this->belongsTo(User::class,'user_id');
    }
}
