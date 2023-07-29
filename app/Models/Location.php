<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded=[];

    protected $appends=["name_en_ar","name"];

    public function getNameEnArAttribute(){
        return $this->name_en." - ".$this->name_ar;
    }

    public function jobs(){
        return $this->hasMany(Job::class,"location_id");
    }

    public function getNameAttribute(){
        return app()->getLocale()=="en"?$this->name_en:$this->name_ar;
    }
}
