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
        Schema::create('catalogs', function (Blueprint $table){
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
            $table->integer('catalog_id')->unsigned();
            $table->foreign('catalog_id')->references('id')
                ->on('catalogs')->onDelete('cascade');
        });

        Schema::create('editions', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            $table->timestamps();
            //
            $table->integer('catalog_id')->unsigned();
            $table->foreign('catalog_id')->references('id')
                ->on('catalogs')->onDelete('cascade');
        });

        Schema::create('languages', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            $table->timestamps();
            //
            $table->integer('catalog_id')->unsigned();
            $table->foreign('catalog_id')->references('id')
                ->on('catalogs')->onDelete('cascade');
        });

        Schema::create('genres', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            $table->timestamps();
            //
            $table->integer('catalog_id')->unsigned();
            $table->foreign('catalog_id')->references('id')
                ->on('catalogs')->onDelete('cascade');
        });

        Schema::create('book_tags', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            $table->timestamps();
            //
            $table->integer('catalog_id')->unsigned();
            $table->foreign('catalog_id')->references('id')
                ->on('catalogs')->onDelete('cascade');
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
        Schema::dropIfExists('catalogs');
        Schema::dropIfExists('editions');
        Schema::dropIfExists('languages');
        Schema::dropIfExists('genres');
        Schema::dropIfExists('book_tags');

    }
}
