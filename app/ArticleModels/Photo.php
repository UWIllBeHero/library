<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    public function anniversary(){
        return $this->belongsTo(Anniversary::class);
    }
    //
    public function article(){
        return $this->belongsTo(Article::class);
    }
    //
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    //
}
