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
