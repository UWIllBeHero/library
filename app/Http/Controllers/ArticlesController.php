<?php

namespace App\Http\Controllers;

use App\Anniversary;
use App\Book;
use Illuminate\Http\Request;
use \App\Article;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    //
    public function index(){
        $articles = Article::paginate(10);
        $articles->withPath('/');
        $anniversaries = Anniversary::all()->sortBy('anniversary')->chunk(3);
        $anniversaries = $anniversaries->first();
        return view('index', compact('articles'), compact('anniversaries'));
    }
    //
    public function single_article(Article $article){

        return view('article', compact('article'));
    }
}
