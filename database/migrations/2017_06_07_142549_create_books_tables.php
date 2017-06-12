<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table){
            //
            $table->increments('id');
            $table->text('name');
            $table->text('annotation');
            $table->date('publication_date');
            //
            $table->integer('article_id')->unsigned()->nullable();
            $table->foreign('article_id')->references('id')
                ->on('articles')->onDelete('cascade');
            //
            $table->timestamps();
        });
        Schema::create('authors', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            $table->timestamps();
            //
            $table->integer('book_id')->unsigned()->nullable();
            $table->foreign('book_id')->references('id')
                ->on('books')->onDelete('cascade');
        });

        Schema::create('editions', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            $table->timestamps();
            //
            $table->integer('book_id')->unsigned()->nullable();
            $table->foreign('book_id')->references('id')
                ->on('books')->onDelete('cascade');
        });

        Schema::create('languages', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            $table->timestamps();
            //
            $table->integer('book_id')->unsigned()->nullable();
            $table->foreign('book_id')->references('id')
                ->on('books')->onDelete('cascade');
        });

        Schema::create('genres', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            $table->timestamps();
            //
            $table->integer('book_id')->unsigned()->nullable();
            $table->foreign('book_id')->references('id')
                ->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('authors');
        Schema::dropIfExists('editions');
        Schema::dropIfExists('languages');
        Schema::dropIfExists('genres');

    }
}
