<?php
/**
 * Created by PhpStorm.
 * User: atlas
 * Date: 11.06.17
 * Time: 13:28
 */
$factory->define(\App\Author::class, function (\Faker\Generator $faker){
    return [
        'value'=>$faker->name,
        ];
});