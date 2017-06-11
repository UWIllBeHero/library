<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    //
    public function catalogs(){
        return $this->hasMany(Catalog::class);
    }
    //
    public function tags(){
        return $this->hasMany(Tag::class);
    }
    //
}
