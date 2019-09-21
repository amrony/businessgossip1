<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessProfile extends Model
{
    protected $fillable = ['name','email','link','image','short_description','long_description'];

    public function business_profile_articles(){
        return $this->hasMany(BusinessProfileArticle::class);
    }
}
