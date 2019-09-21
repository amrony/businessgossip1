<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyingAdviceBusinessProfileArticle extends Model
{
    public function buying_advices(){
        return $this->belongsTo(BuyingAdvice::class);
    }
    public function business_profile_article(){
        return $this->belongsTo(BusinessProfileArticle::class,'business_profile_article_id','id');
    }
}
