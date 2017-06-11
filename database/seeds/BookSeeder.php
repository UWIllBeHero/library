<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->delete();
        //
        $tags = \App\Tag::all();
        $articles = \App\Article::all();

        factory(\App\Book::class, 30)->create()->each(/**
         * @param $article
         */
            function ($book) use ($tags, $articles) {
                $book->tags()->attach(\App\Tag::find($tags[ rand(0, 4)]));
                $book->tags()->attach(\App\Tag::find($tags[ rand(0, 10)]));
                $book->tags()->attach(\App\Tag::find($tags[ rand(0, 19)]));
                //
                $book->articles()->attach(\App\Article::find($articles[rand(0,count($articles)-1)]));
            });
        //

    }
}
