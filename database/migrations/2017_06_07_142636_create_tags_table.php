<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tags', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            $table->timestamps();
            //
            $table->integer('articles_id')->unsigned()->nullable();
            $table->foreign('articles_id')->references('id')
                ->on('articles')->onDelete('cascade');
            //
            $table->integer('catalog_id')->unsigned()->nullable()->index();
            $table->foreign('catalog_id')->references('id')
                ->on('catalogs')->onDelete('cascade');
            //
            $table->integer('gallery_id')->unsigned()->nullable();
            $table->foreign('gallery_id')->references('id')
                ->on('galleries')->onDelete('cascade');
            //
            $table->integer('anniversary_id')->unsigned()->nullable();
            $table->foreign('anniversary_id')->references('id')
                ->on('anniversaries')->onDelete('cascade');
            //
            $table->integer('author_id')->unsigned()->nullable();
            $table->foreign('author_id')->references('id')
                ->on('authors')->onDelete('cascade');
            //
            $table->integer('edition_id')->unsigned()->nullable();
            $table->foreign('edition_id')->references('id')
                ->on('editions')->onDelete('cascade');
            //
        });
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
