<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $books = Book::with('authors')->paginate(20);
        return view('books')
            ->with('books', $books);
    }
}
