<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//
use MaddHatter\LaravelFullcalendar\Calendar;

Route::get('/','ArticlesController@index');
//
Route::get('/articles/{article}','ArticlesController@single_article');
//
Route::get('/about_us', function (){
    $article = \App\Article::first();
    $books = \App\Book::get_fresh_books();
    return view('about_us')->with('article', $article)->with('books', $books);
});
//
Route::get('/catalog', 'BooksController@index');
//
Route::get('/gallery', 'GalleryController@index');
//
Route::get('/calendar', 'CalendarController@index');
//
Route::get('/admin', function (){
    return view('admin_layouts.ad_min_index');
});
//
Route::resource('/admin/calendar', 'CalendarController');
//
Route::post('/admin/calendar', 'CalendarController@show');