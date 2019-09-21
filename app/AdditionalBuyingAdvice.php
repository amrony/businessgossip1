<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdditionalBuyingAdvice extends Model
{
    public function buying_advice(){
        return $this->belongsTo(BuyingAdvice::class);
    }
}
