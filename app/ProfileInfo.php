<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileInfo extends Model
{
    protected $guarded = [
        'id'
    ];
    public function profession(){
        return $this->belongsTo(Profession::class);
    }
    public function industry(){
        return $this->belongsTo(Industry::class);
    }
    public function business_stage(){
        return $this->belongsTo(BusinessStage::class);
    }
    public function business_size(){
        return $this->belongsTo(BusinessSize::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
