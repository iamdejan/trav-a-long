<?php

use Faker\Generator as Faker;

$factory->define(App\Province::class, function (Faker $faker) {
    return [
        'provinceID' => 'PR' . sprintf("%03d", rand(1, 999)),
		'provinceName' => str_random(10)
    ];
});
