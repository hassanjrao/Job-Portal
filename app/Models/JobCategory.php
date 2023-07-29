<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $appends=['name_en_ar',"name"];

    public function getNameEnArAttribute(){
        return $this->name_en." - ".$this->name_ar;
    }

    public function jobs(){
        return $this->hasMany(Job::class);
    }

    public function getNameAttribute(){
        return app()->getLocale()=="en"?$this->name_en:$this->name_ar;
    }
}
