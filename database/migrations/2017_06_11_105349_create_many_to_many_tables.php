<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManyToManyTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('article_tag', function (Blueprint $table){
            $table->integer('tag_id')->unsigned()->nullable();
            $table->foreign('tag_id')
                ->references('id')->on('tags')->onDelete('cascade');
            $table->integer('article_id')->unsigned()->nullable();
            $table->foreign('article_id')
                ->references('id')->on('articles')->onDelete('cascade');
        });
        //
        Schema::create('anniversary_tag', function (Blueprint $table){
            $table->integer('tag_id')->unsigned()->nullable();
            $table->foreign('tag_id')
                ->references('id')->on('tags')->onDelete('cascade');
            $table->integer('anniversary_id')->unsigned()->nullable();
            $table->foreign('anniversary_id')
                ->references('id')->on('anniversaries')->onDelete('cascade');
        });
        //
        Schema::create('book_tag', function (Blueprint $table){
            $table->integer('tag_id')->unsigned()->nullable();
            $table->foreign('tag_id')
                ->references('id')->on('tags')->onDelete('cascade');
            $table->integer('book_id')->unsigned()->nullable();
            $table->foreign('book_id')
                ->references('id')->on('books')->onDelete('cascade');
        });
        //
        Schema::create('article_book', function (Blueprint $table){
            $table->integer('article_id')->unsigned()->nullable();
            $table->foreign('article_id')
                ->references('id')->on('articles')->onDelete('cascade');
            $table->integer('book_id')->unsigned()->nullable();
            $table->foreign('book_id')
                ->references('id')->on('books')->onDelete('cascade');
        });
        Schema::create('photo_tag', function (Blueprint $table){
            $table->integer('tag_id')->unsigned()->nullable();
            $table->foreign('tag_id')
                ->references('id')->on('tags')->onDelete('cascade');
            $table->integer('photo_id')->unsigned()->nullable();
            $table->foreign('photo_id')
                ->references('id')->on('photos')->onDelete('cascade');
        });
        //
        Schema::create('video_tag', function (Blueprint $table){
            $table->integer('tag_id')->unsigned()->nullable();
            $table->foreign('tag_id')
                ->references('id')->on('tags')->onDelete('cascade');
            $table->integer('video_id')->unsigned()->nullable();
            $table->foreign('video_id')
                ->references('id')->on('videos')->onDelete('cascade');
        });
        //
        Schema::create('author_book', function (Blueprint $table){
            $table->integer('book_id')->unsigned()->nullable();
            $table->foreign('book_id')
                ->references('id')->on('books')->onDelete('cascade');
            $table->integer('author_id')->unsigned()->nullable();
            $table->foreign('author_id')
                ->references('id')->on('authors')->onDelete('cascade');
        });
        //
        Schema::create('book_edition', function (Blueprint $table){
            $table->integer('book_id')->unsigned()->nullable();
            $table->foreign('book_id')
                ->references('id')->on('books')->onDelete('cascade');
            $table->integer('edition_id')->unsigned()->nullable();
            $table->foreign('edition_id')
                ->references('id')->on('editions')->onDelete('cascade');
        });
        //
        Schema::create('book_language', function (Blueprint $table){
            $table->integer('book_id')->unsigned()->nullable();
            $table->foreign('book_id')
                ->references('id')->on('books')->onDelete('cascade');
            $table->integer('language_id')->unsigned()->nullable();
            $table->foreign('language_id')
                ->references('id')->on('languages')->onDelete('cascade');
        });
        //
        Schema::create('book_genre', function (Blueprint $table){
            $table->integer('book_id')->unsigned()->nullable();
            $table->foreign('book_id')
                ->references('id')->on('books')->onDelete('cascade');
            $table->integer('genre_id')->unsigned()->nullable();
            $table->foreign('genre_id')
                ->references('id')->on('genres')->onDelete('cascade');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

    }
}
