<?php
/**
 * Created by PhpStorm.
 * User: atlas
 * Date: 11.06.17
 * Time: 13:16
 */
$factory->define(\App\Book::class, function (\Faker\Generator $faker){
    return [
        'name'=>$faker->name,
        'annotation'=>$faker->text(200),
        'publication_date'=>$faker->date()];
});