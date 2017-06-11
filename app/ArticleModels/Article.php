<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function photos(){
        return $this->hasMany(Photo::class);
    }
    //
    public function videos(){
        return $this->hasMany(Video::class);
    }
    //
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    //
    //
    public function books(){
        return $this->belongsToMany(Book::class);
    }
    //

}
