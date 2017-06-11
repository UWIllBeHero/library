<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    public function catalogs(){
      return $this->HasMany(Catalog::class);
    }
    //
    public function tags(){
        return $this->hasMany('App/Tag');
    }
    //
}
