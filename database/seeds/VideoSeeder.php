<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('videos')->delete();
        //
        $articles = \App\Article::all();
        //
        $anniversaries = \App\Anniversary::all();
        //
        factory(\App\Video::class, 20)->create()->each(/**
         * @param $video
         */
            function ($video) use ($articles, $anniversaries){
                //
                $video->article()->associate($articles[rand(0,5)])->save();
                $video->article()->associate($articles[rand(0,19)])->save();
                //
                $video->anniversary()->associate($anniversaries[rand(0,5)])->save();
                $video->anniversary()->associate($anniversaries[rand(0,19)])->save();
            });
    }
}
