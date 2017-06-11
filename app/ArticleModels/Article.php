<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function photos(){
        return $this->hasMany('App/ArticleModels/Photos');
    }
    //
    public function videos(){
        return $this->hasMany('App/ArticleModels/Videos');
    }
    //
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    //

}
