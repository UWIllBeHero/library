<?php
/**
 * Created by PhpStorm.
 * User: atlas
 * Date: 11.06.17
 * Time: 13:28
 */
$factory->define(\App\Article::class, function (\Faker\Generator $faker){
    return [
        'value'=>$faker->text(125),
        ];
});