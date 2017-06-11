<?php
/**
 * Created by PhpStorm.
 * User: atlas
 * Date: 10.06.17
 * Time: 23:24
 */
$factory->define(\App\Article::class, function (\Faker\Generator $faker){
    return [
        'header'=>$faker->text(125),
        'preview'=>$faker->text(200),
        'main_text'=>$faker->text(500)];
});