<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->call(TagSeeder::class);
       $this->call(ArticleSeeder::class);
       $this->call(AnniversarySeeder::class);
       $this->call(BookSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(VideoSeeder::class);
    }
}
