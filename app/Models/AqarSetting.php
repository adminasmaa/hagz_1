<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  //belongsTo

class AqarSetting extends Model
{
    public $guarded = ['ID'];

    protected $table = 'aqar_setting';

    protected $fillable = [
        'detail_id',
        'required',
        'display',
        'category_id',
    ];

    public function aqarComment(){
        return $this->HasMany(AqarComment::class);
    }

}
