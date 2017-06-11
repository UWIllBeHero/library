<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    public function gallery(){
        return $this->belongsTo(Gallery::class);
    }
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
        return $this->hasMany(Tag::class);
    }
    //
}
