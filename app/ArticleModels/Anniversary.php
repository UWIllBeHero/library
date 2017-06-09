<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anniversary extends Model
{
    //
    public function photos(){
        return $this->hasMany('App/ArticleModels/Photo');
    }
    //
    public function videos(){
        return $this->hasMany('App/ArticleModels/Video');
    }
    //
    public function tags(){
        return $this->hasMany('App/Tag');
    }
    //
}
