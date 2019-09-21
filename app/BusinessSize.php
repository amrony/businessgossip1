<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessSize extends Model
{
   public function profile_infos(){
       return $this->hasMany(ProfileInfo::class);
   }
}
