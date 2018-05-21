<?php

use Faker\Generator as Faker;

$factory->define(App\Activity::class, function (Faker $faker) {

	$lipsum = new joshtronic\LoremIpsum();

    return [
        "activityID" => "AC" . sprintf("%03d", rand(1, 999)),
        "activityName" => str_random(10),
        "activityDesc" => $lipsum->words(rand(10, 20)),
        "cityID" => function () {
        	return App\City::inRandomOrder()->first()->cityID;
        }
    ];
});