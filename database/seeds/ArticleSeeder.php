<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('articles')->delete();
       //
        $tags = \App\Tag::all();

       factory(\App\Article::class, 30)->create()->each(/**
        * @param $article
        */
           function ($article) use ($tags) {
               //
               $article->tags()->attach(\App\Tag::find($tags[ rand(0, 4)]));
               $article->tags()->attach(\App\Tag::find($tags[ rand(0, 10)]));
               $article->tags()->attach(\App\Tag::find($tags[ rand(0, 19)]));
               //
           });

    }
}
