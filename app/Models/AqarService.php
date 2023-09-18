<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AqarSetting;
use Illuminate\Database\Eloquent\SoftDeletes;


class AqarService extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = ['id'];

    protected $table = 'aqar_details';
    protected $appends = ['icon_path','name'];

    protected $fillable = [
        'name_ar', // required
        'name_en', // required
        'icon', // nullable
        'parent_id', // nullable

    ];

    protected $hidden = ['deleted_at', 'updated_at','icon'];

    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }
    public function getIconPathAttribute()
    {
        return asset('images/services_aqars/' . $this->icon);

    }//end of get image path

    // relations

    public function subservices()
    {
        return $this->HasMany(AqarService::class, 'parent_id');
    }

    public function subsection()
    {
        return $this->belongsToMany(AqarService::class, 'aqar_sections', 'section_id', 'sub_section_id');
    }
//    public function nameintsubsection()
//    {
//        return $this->belongsToMany(AqarService::class, 'aqar_sections', 'section_id', 'sub_section_id')->when(is_int('name_ar'));
//    }

}
