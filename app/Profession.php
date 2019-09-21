<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    public function profile_infos(){
        return $this->hasMany(ProfileInfo::class);
    }
}
