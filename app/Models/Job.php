<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $appends=["type_name_en_ar","title"];

    public function category()
    {
        return $this->belongsTo(JobCategory::class, "job_category_id");
    }

    public function location()
    {
        return $this->belongsTo(Location::class, "location_id");
    }


    public function getTitleAttribute(){
        return app()->getLocale()=="en"?$this->title_en:$this->title_ar;
    }


}
