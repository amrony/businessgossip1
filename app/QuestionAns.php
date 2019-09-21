<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionAns extends Model
{
    protected $fillable = ['profile_id','question','description','article_category_id','article_sub_category_id','is_approved','tag'];
}
