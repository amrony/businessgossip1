<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $fillable = ['community_id','profile_id','description'];

    public function profile(){
        return $this->belongsTo(Profile::class);
    }

    public function community(){
        return $this->belongsTo(Community::class);
    }

}
