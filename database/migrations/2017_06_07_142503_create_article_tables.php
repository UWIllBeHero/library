<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('articles', function (Blueprint $table){
            $table->increments('id');
            $table->string('header');
            $table->timestamp('publication_date');
            $table->dateTime('event_date')->nullable();
            $table->text('preview');
            $table->longText('main_text');

        });
        //
        Schema::create('gallery', function (Blueprint $table){
            $table->increments('id');
            $table->timestamp('publication_date');
            $table->string('name')->unique();
            //
            $table->integer('article_id')->unsigned()->nullable();
            $table->foreign('article_id')->references('id')
                ->on('articles')->onDelete('cascade');
        });
        //
        Schema::create('anniversaries', function (Blueprint $table){
            $table->increments('id');
            $table->date('anniversary');
            $table->text('preview');
            //
            $table->integer('articles_id')->unsigned()->nullable();
            $table->foreign('articles_id')->references('id')
                ->on('articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anniversaries');
        Schema::dropIfExists('gallery');
        Schema::dropIfExists('articles');
    }
}
