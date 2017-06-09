<?php

namespace App\Http\Controllers;

use App\Anniversary;
use Illuminate\Http\Request;
use \App\Article;

class ArticlesController extends Controller
{
    //
    public function index(){
        $articles = Article::all();
        $anniversaries = Anniversary::all();
        return view('index', compact('articles'), compact('anniversaries'));
    }
    //
    public function single_article(Article $article){

        return view('article', compact('article'));
    }
}
