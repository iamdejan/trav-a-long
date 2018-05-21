<?php

use Faker\Generator as Faker;

$factory->define(App\Advice::class, function (Faker $faker) {

    $lipsum = new joshtronic\LoremIpsum();

    return [
    	"adviceID" => "AD" . sprintf("%03d", rand(1, 999)),
    	"days" => rand(2, 10),
    	"budget" => rand(500, 9999) * 1000,
    	"adviceDesc" => $lipsum->words(rand(10, 20)),
    	"typeID" => function () {
    		return App\Transport::inRandomOrder()->first()->typeID;
    	},
    	"activityID" => function () {
    		return App\Activity::inRandomOrder()->first()->activityID;
    	}
    ];
});