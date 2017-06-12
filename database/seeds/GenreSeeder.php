<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genres')->delete();
        //
        $books = \App\Book::all();
        //
        factory(\App\Genre::class, 20)->create()->each(/**
         * @param $genre
         */
            function ($genre) use ($books){
                $genre->books()->attach($books->find(rand(0,100)));
            });
    }
}
