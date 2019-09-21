<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurFeatures extends Model
{
    protected $fillable = ['title','short_description','long_description','image','title_one','title_two','title_three','title_four','description_one','description_two','description_three','description_four'];
}
