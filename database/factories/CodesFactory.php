<?php

use App\Codes as Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'code' => strtoupper(str_random(3) . random_int(1000000, 9000000)),
        'fme' => strtoupper(str_random(3) . random_int(1000000, 9000000)),
        'fme_name' => strtoupper($faker->text($maxNbChars = 100)),
        'dorman' => strtoupper(str_random(3) . random_int(1000000, 9000000)),
        'dorman_name' => strtoupper($faker->text($maxNbChars = 100))
    ];
});
