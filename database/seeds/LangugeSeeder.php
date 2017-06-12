<?php

use Illuminate\Database\Seeder;

class LangugeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('languages')->delete();
        //
        $books = \App\Book::all();
        //
        factory(\App\Language::class, 20)->create()->each(/**
         * @param $language
         */
            function ($language) use ($books){
                $language->books()->attach($books->find(rand(0,100)));
            });
    }
}
