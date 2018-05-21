<?php

use Faker\Generator as Faker;

$factory->define(App\City::class, function (Faker $faker) {
    return [
        'cityID' => 'CI' . sprintf("%03d", rand(1, 999)),
		'cityName' => str_random(10),
		'provinceID' => function() {
			return factory(App\Province::class)->create()->provinceID;
		}
    ];
});
