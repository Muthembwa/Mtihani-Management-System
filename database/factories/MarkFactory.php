<?php

$factory->define(App\Mark::class, function (Faker\Generator $faker) {
    return [
        "subject_id" => factory('App\Subject')->create(),
        "student_id" => factory('App\Student')->create(),
        "mark" => $faker->randomNumber(2),
    ];
});
