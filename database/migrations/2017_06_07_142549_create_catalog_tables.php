<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog', function (Blueprint $table){
            //
            $table->increments('id');
            $table->text('name');
            $table->text('annotation');
            $table->text('publication_date');
            //
            $table->integer('article_id')->unsigned()->nullable();
            $table->foreign('article_id')->references('id')
                ->on('articles')->onDelete('cascade');
        });
        Schema::create('authors', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            //
            $table->integer('catalog_id')->unsigned();
            $table->foreign('catalog_id')->references('id')
                ->on('catalog')->onDelete('cascade');
        });

        Schema::create('editions', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            //
            $table->integer('catalog_id')->unsigned();
            $table->foreign('catalog_id')->references('id')
                ->on('catalog')->onDelete('cascade');
        });

        Schema::create('languages', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            //
            $table->integer('catalog_id')->unsigned();
            $table->foreign('catalog_id')->references('id')
                ->on('catalog')->onDelete('cascade');
        });

        Schema::create('genres', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            //
            $table->integer('catalog_id')->unsigned();
            $table->foreign('catalog_id')->references('id')
                ->on('catalog')->onDelete('cascade');
        });

        Schema::create('book_tags', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            //
            $table->integer('catalog_id')->unsigned();
            $table->foreign('catalog_id')->references('id')
                ->on('catalog')->onDelete('cascade');
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
        Schema::dropIfExists('book_tags');
        Schema::dropIfExists('catalog');
    }
}
