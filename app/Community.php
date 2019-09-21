<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $fillable = ['profile_id','question','description','article_category_id','article_sub_category_id','is_approved','tag'];
    public function article_categories(){
        return $this->belongsTo(ArticleCategory::class);
    }
    public function profile(){
        return $this->belongsTo(Profile::class);
    }
    public function answers(){
        return $this->hasMany(Answers::class);
    }
}
