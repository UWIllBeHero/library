<?php

use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('photos')->delete();
        //
        $articles = \App\Article::all();
        //
        $anniversaries = \App\Anniversary::all();
        //
        factory(\App\Photo::class, 20)->create()->each(/**
         * @param $photo
         */
            function ($photo) use ($articles, $anniversaries){
                //
                $photo->article()->associate($articles[rand(0,5)])->save();
                $photo->article()->associate($articles[rand(0,19)])->save();
                //
                $photo->anniversary()->associate($anniversaries[rand(0,5)])->save();
                $photo->anniversary()->associate($anniversaries[rand(0,19)])->save();
            });
    }
}
