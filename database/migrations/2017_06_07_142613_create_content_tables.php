<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('photos', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            //
            $table->integer('articles_id')->unsigned()->nullable();
            $table->foreign('articles_id')->references('id')
                ->on('articles')->onDelete('cascade');
            //
            $table->integer('gallery_id')->unsigned()->nullable();
            $table->foreign('gallery_id')->references('id')
                ->on('gallery')->onDelete('cascade');
            //
            $table->integer('anniversary_id')->unsigned()->nullable();
            $table->foreign('anniversary_id')->references('id')
                ->on('anniversaries')->onDelete('cascade');
        });
        //
        Schema::create('videos', function (Blueprint $table){
            //
            $table->increments('id');
            $table->string('value');
            //
            $table->integer('articles_id')->unsigned()->nullable();
            $table->foreign('articles_id')->references('id')
                ->on('articles')->onDelete('cascade');
            //
            $table->integer('gallery_id')->unsigned()->nullable();
            $table->foreign('gallery_id')->references('id')
                ->on('gallery')->onDelete('cascade');
            //
            $table->integer('anniversary_id')->unsigned()->nullable();
            $table->foreign('anniversary_id')->references('id')
                ->on('anniversaries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
        Schema::dropIfExists('videos');
    }
}
