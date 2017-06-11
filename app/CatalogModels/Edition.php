<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    //
    public function books(){
        return $this->hasMany(Book::class);
    }
    //
    public function tags(){
        return $this->hasMany(Tag::class);
    }
    //
}
