<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use DB;
//belongsTo
use App\Models\Ads;

//belongsTo
use App\Models\AqarComment;

// HasMany
use App\Models\AqarBooking;

// HasMany
class Aqar extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = ['id'];

    protected $table = 'aqars';

    protected $fillable = [
        'name_ar', // required
        'name_en', // nullable
        'fixed_price', // nullable ,float
        'changed_price', // nullable ,json
        'main_image', // required
        'images', // required ,json
        'videos', // nullable
        'space', // nullable
        'time_to', // nullable
        'time_from', // nullable
        'description', // nullable
        'latitude', // nullable
        'longitude', // nullable
        'comment_text', // nullable
        'comision', // required
        'ads_id', //unsigned
        'area_id',//nullable
        'floor_id',//nullable
        'car_position_id',//nullable
        'service_id',//nullable
        'bathroom_id',//nullable
        'free_service_id',//nullable
        'laundry_id',//nullable
        'kitchen_id',//nullable
        'crew_id',//nullable
        'conditioning_type_id',//nullable
        'another_room_id',//nullable
        'floor_number_id',//nullable
        'category_id', //unsigned
        'user_id', //unsigned
        'masterroom',//nullable
        'normalroom',//nullable
        'unitnumber',//nullable
        'hallnumber',//nullable
        'bathroomnumber',//nullable
        'personnumber',//nullable
        'swimmingpool',//nullable
        'details',//nullable
        'map_link',//nullable
        'active', // default (0)
        'policy_place',
        'country_id',
        'ads_status_id',
        'city_id',
    ];

    // relations
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault(['firstname' => '']);
    }

    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }

    // relations

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id')->withDefault(['name_ar' => '']);
    }

    // relations
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }// relations

    public function ads()
    {
        return $this->belongsTo(Ads::class, 'ads_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    // relations
    public function aqarComment()
    {
        return $this->HasMany(AqarComment::class);
    }

    // relations
    public function aqarBooking()
    {
        return $this->HasMany(AqarBooking::class);
    }

    public function aqarReview()
    {

        return $this->HasMany(AqarReview::class ,'aqar_id')->groupBy('review_element_id');


    }

    public function aqarSection()
    {
        return $this->belongsToMany(AqarService::class, 'aqar_sections', 'aqar_id', 'section_id')->distinct()->withPivot('aqar_id')->with(['subsection' => function ($q) {
            $q->where('aqar_sections.aqar_id', $this->id);
        }]);

    }

    public function aqarSubSection()
    {
        return $this->HasMany(AqarSections::class);

    }

    public function favoriteuser()
    {

        return $this->belongsToMany(User::class, 'aqar_user', 'aqar_id', 'user_id');
    }

    public function roomnumbers($cat_id,$aqar_id)
    {

        $roomnumbers = DB::select("SELECT   DISTINCT sum(aqar_details.name_ar) as total
        FROM `aqars`
        INNER JOIN aqar_sections on aqars.id=aqar_sections.aqar_id
        INNER JOIN aqar_details on aqar_details.id=aqar_sections.sub_section_id
        WHERE aqars.category_id=$cat_id and aqar_sections.section_id=6 or aqar_sections.section_id=18  and aqars.id=$aqar_id;");
        if(!empty($floornumbers)){
        return $roomnumbers[0]->total;
        }



    }


    public function floornumbers($cat_id,$aqar_id)
    {

        $floornumbers = DB::select("SELECT   DISTINCT aqar_details.name_ar as floornumber
        FROM `aqars`
        INNER JOIN aqar_sections on aqars.id=aqar_sections.aqar_id
        INNER JOIN aqar_details on aqar_details.id=aqar_sections.sub_section_id
        WHERE aqars.category_id=$cat_id and aqar_sections.section_id=1    and aqars.id=$aqar_id;");

       if(!empty($floornumbers)){
        return $floornumbers[0]->floornumber;}



    }


   

}
