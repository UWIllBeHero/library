<?php
/**
 * Created by PhpStorm.
 * User: atlas
 * Date: 10.06.17
 * Time: 23:20
 */
$factory->define(\App\Tag::class, function (\Faker\Generator $faker){
    return [
        'value'=>$faker->text(10)
    ];
});