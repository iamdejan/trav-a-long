<?php

use Faker\Generator as Faker;

$factory->define(App\Transport::class, function (Faker $faker) {

	$lipsum = new joshtronic\LoremIpsum();

    return [
        "typeID" => "TR" . sprintf("%03d", rand(1, 999)),
        "typeName" => str_random(10),
        "typeDesc" => $lipsum->words(rand(10, 20))
    ];
});
