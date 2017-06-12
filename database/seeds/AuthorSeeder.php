<?php

use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('authors')->delete();
        //
        $books = \App\Book::all();
        //
        factory(\App\Author::class, 20)->create()->each(/**
         * @param $author
         */
            function ($author) use ($books){
            $author->books()->attach($books->find(rand(0,100)));
        });
    }
}
