<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'question_weightage' => $faker->randomNumber(2),
        'no_of_questions' => $faker->randomNumber(2),
        'total' => $faker->randomNumber(2),
    ];
});
