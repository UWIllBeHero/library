<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookTag extends Model
{
    //
    public function catalog(){
        return $this->belongsToMany('App/CatalogModels/Catalog');
    }
}
