<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    //
    public function languages(){
        return $this->hasMany('App\CatalogModels\Language');
    }
    //
    public function genres(){
        return $this->hasMany('App\CatalogModels\Genre');
    }
    //
    public function article(){
        return $this->hasMany('App\CatalogModels\Article');
    }
    //
    public function tags(){
        return $this->hasMany('App\Tag');
    }
    //
}
