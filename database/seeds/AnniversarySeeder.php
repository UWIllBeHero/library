<?php

use Illuminate\Database\Seeder;

class AnniversarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('anniversaries')->delete();
        //
        $tags = \App\Tag::all();

        factory(\App\Anniversary::class, 30)->create()->each(/**
         * @param $anniversary
         */function ($anniversary) use ($tags) {
                    $anniversary->tags()->attach(\App\Tag::find($tags[rand(0, 4)]));
                    $anniversary->tags()->attach(\App\Tag::find($tags[rand(0, 10)]));
                    $anniversary->tags()->attach(\App\Tag::find($tags[rand(0, 19)]));
                });
    }
}
