<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    public function gallery(){
        return $this->belongsToMany('App/ArticleModels/Gallery');
    }
    //
    public function anniversary(){
        return $this->belongsToMany('App/ArticleModels/Anniversary');
    }
    //
    public function article(){
        return $this->belongsToMany('App/ArticleModels/Article');
    }
    //
    public function tags(){
        return $this->hasMany('App/Tag');
    }
    //
}
