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
        return $this->belongsToMany(Edition::class);
    }
    //
    public function languages(){
        return $this->belongsToMany(Language::class);
    }
    //
    public function genres(){
        return $this->belongsToMany(Genre::class);
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
