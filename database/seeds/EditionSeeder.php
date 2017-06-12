<?php

use Illuminate\Database\Seeder;

class EditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('editions')->delete();
        //
        $books = \App\Book::all();
        //
        factory(\App\Edition::class, 20)->create()->each(/**
         * @param $edition
         */
            function ($edition) use ($books){
                $edition->books()->attach($books->find(rand(0,99)));
            });
    }
}
