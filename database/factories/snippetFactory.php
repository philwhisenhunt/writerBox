<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'id' => $faker->number_format,
        'full_entry' => $faker->address,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
