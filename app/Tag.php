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
    public function authors(){
        return $this->belongsToMany('App/CatalogModels/Author');
    }
    //
    public function genres(){
        return $this->belongsToMany('App/CatalogModels/Genre');
    }
    //
    public function catalogs(){
        return $this->belongsToMany(Book::class);
    }
    //
    public function editions(){
        return $this->belongsToMany('App/CatalogModels/Edition');
    }
    //
    public function languages(){
        return $this->belongsToMany('App/CatalogModels/Language');
    }
    //

}
