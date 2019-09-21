<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function additional_news(){
        return $this->hasMany('App\AdditionalNews');
    }

    public function article_category(){
        return $this->belongsTo('App\ArticleCategory');
    }

    public function article_sub_category(){
        return $this->belongsTo('App\ArticleSubCategory');
    }
}
