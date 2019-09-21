<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    public function article_sub_categories(){
        return $this->hasMany('App\ArticleSubCategory');
    }

    public function news(){
        return $this->hasMany('App\News');
    }
    public function buying_advices(){
        return $this->hasMany(BuyingAdvice::class);
    }
    public function communities(){
        return $this->hasMany(Community::class);
    }
}
