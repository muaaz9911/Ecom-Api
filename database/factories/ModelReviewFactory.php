<?php

use Faker\Generator as Faker;
use App\Model\Product;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
        //
        'customer'=> $faker->word,
        'review'=> $faker->sentence($nbWords = 6, $variableNbWords = true) ,
        'star'=> $faker->numberBetween(100,1000),
        'product_id'=> function(){

            return  Product::all()->random();
        },
        
    ];
});
