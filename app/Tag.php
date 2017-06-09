<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function gallery(){
        return $this->belongsToMany('App/ArticleModels/Gallery');
    }
    //
    public function anniversary(){
        return $this->belongsToMany('App/ArticleModels/Anniversary');
    }
    //
    public function article(){
        return $this->belongsToMany('App/ArticleModels/Article');
    }
    //
    public function photo(){
        return $this->belongsToMany('App/ArticleModels/Photo');
    }
    //
    public function video(){
        return $this->belongsToMany('App/ArticleModels/Video');
    }
    //
    public function author(){
        return $this->belongsToMany('App/CatalogModels/Author');
    }
    //
    public function genre(){
        return $this->belongsToMany('App/CatalogModels/Genre');
    }
    //
    public function catalog(){
        return $this->belongsToMany('App/CatalogModels/Catalog');
    }
    //
    public function edition(){
        return $this->belongsToMany('App/CatalogModels/Edition');
    }
    //
    public function language(){
        return $this->belongsToMany('App/CatalogModels/Language');
    }
    //
}
