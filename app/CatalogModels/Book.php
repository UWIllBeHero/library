<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function authors(){
        return $this->belongsToMany(Author::class);
    }
    //
    public function edition(){
        return $this->belongsTo(Edition::class);
    }
    //
    public function languages(){
        return $this->hasMany(Language::class);
    }
    //
    public function genres(){
        return $this->hasMany(Genre::class);
    }
    //
    public function articles(){
        return $this->belongsToMany(Article::class);
    }
    //
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    //

}
