<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function anniversaries(){
        return $this->belongsToMany(Anniversary::class);
    }
    //
    public function articles(){
        return $this->belongsToMany(Article::class);
    }
    //
    public function photos(){
        return $this->belongsToMany(Photo::class);
    }
    //
    public function videos(){
        return $this->belongsToMany(Video::class);
    }
    //
    public function books(){
        return $this->belongsToMany(Book::class);
    }
    //
}
