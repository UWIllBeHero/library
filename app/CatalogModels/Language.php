<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    public function books(){
        return $this->belongsToMany('App\CatalogModels\Catalog');
    }
    //
    public function tags(){
        return $this->hasMany('App/Tag');
    }
    //
}
