<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class AqarSections extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'aqar_sections';

    protected $fillable = [
        'section_id', // required
        'sub_section_id', // required
        'aqar_id', // required

    ];
    // relations



    public function AqarDetail(){
        return $this->belongsTo(AqarService::class,'section_id');
    }// relations
}
