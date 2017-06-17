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
        $articles = Article::paginate(5);
        $articles->withPath('/');
        $anniversaries = Anniversary::all()->chunk(3)->sortByDesc('anniversary');
        $anniversaries = $anniversaries->first();
        $books = Book::get_fresh_books();
        return view('index')
            ->with('articles', $articles)
            ->with('anniversaries', $anniversaries)
            ->with('books', $books);
    }
    //
    public function single_article(Article $article){

        return view('article')
            ->with('article', $article)
            ->with('books', Book::get_fresh_books());
    }
}
