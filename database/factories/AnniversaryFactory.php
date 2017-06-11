<?php
/**
 * Created by PhpStorm.
 * User: atlas
 * Date: 11.06.17
 * Time: 0:07
 */
$factory->define(\App\Anniversary::class, function (\Faker\Generator $faker){
    return [
        'preview'=>$faker->text(200),
        'anniversary'=>$faker->date()
    ];
});