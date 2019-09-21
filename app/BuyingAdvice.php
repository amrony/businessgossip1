<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyingAdvice extends Model
{
    protected $fillable = ['article_category_id','article_sub_category_id','image','title','body'];

    public function article_category(){
        return $this->belongsTo(BuyingAdvice::class);
    }
    public function additional_buying_advices(){
        return $this->hasMany(AdditionalBuyingAdvice::class);
    }
    public function business_profile_article(){
        return $this->belongsTo(BusinessProfileArticle::class);
    }
    public function buying_advice_business_profiles(){
        return $this->belongsToMany(BusinessProfileArticle::class, 'buying_advice_business_profile_articles', 'buying_advice_id', 'business_profile_article_id');
    }
}
