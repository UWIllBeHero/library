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
Route::get('/','ArticlesController@index');
//
Route::get('/{article}','ArticlesController@single_article');
//
Route::get('/about_us', function (){
    return view('about_us');
});
//
Route::get('/catalog', function (){
    return view('catalog');
});
//
Route::get('/gallery', function (){
    return view('gallery');
});
//
Route::get('/anniversaries', function (){
    return view('anniversaries');
});
//
Route::get('/admin', function (){
    return view('admin_layouts.ad_min');
});
//